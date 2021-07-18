<?php

namespace App\Http\Controllers;

use App\Models\Employeerights;
use App\Models\Production;
use App\Models\Employees;
use App\Models\Instructions;
use App\Models\Packaging;
use App\Models\Rawmaterials;
use App\Models\Recipephotos;
use App\Models\Shipment;
use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Sitesettings;
use App\Models\Steps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PDF;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $strFullRoute = request()->route()->getActionName();
            $strAcionName = substr($strFullRoute, strpos($strFullRoute, "@")+1);
            $arrAllowedPages = array(
                "View"=>array('index', 'show'),
                "Edit"=>array("index", "create", "store", "show", "edit", "update", "calculate", "getpdf"),
                "Admin"=>array("index", "create", "store", "show", "edit", "update", "destroy", "calculate", "getpdf"),
                "No Access"=>array("none")
            );

            $nCurrUserID = Auth::user()->getempid();
            $objRights = Employeerights::
            where('emp_id', $nCurrUserID)
                ->where('routename','today_production')
                ->get();
            $bShowTarget = false;
            if(!$objRights->isEmpty())
            {
                $strRight = $objRights[0]->rights;
                $arrRightPages = $arrAllowedPages["$strRight"];
                if($strRight=='Admin')
                {
                    $bShowTarget = true;
                }
                else
                {
                    if(in_array($strAcionName, $arrRightPages))
                    {
                        $bShowTarget = true;
                    }
                }
            }
            if($bShowTarget)
            {
                return $next($request);
            }
            else
            {
                return Redirect::back()->withErrors(['User rights need to be added in order to perform this action.']);
            }
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$productions = Production::leftJoin('production', 'recipe_id', '=')->paginate(10);
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $productions = DB::table('production')
                ->leftJoin('recipes', 'recipe_id', '=', 'recipes.id')
                ->select('production.*','recipes.title')
                ->get();

            $Instructions = array();
            $allInstructions = Instructions::all();
            foreach($allInstructions as $thisInstruction)
            {
                $nProductionID = $thisInstruction->production_id;
                if(!array_key_exists($nProductionID, $Instructions))
                {
                    if($thisInstruction->chk_make=='yes')
                    {
                        $Instructions["$nProductionID"] = "M";
                    }
                    if($thisInstruction->chk_pack=='yes')
                    {
                        $Instructions["$nProductionID"] = "P";
                    }
                    if($thisInstruction->chk_freeze=='yes')
                    {
                        $Instructions["$nProductionID"] = "F";
                    }
                    if($thisInstruction->chk_send=='yes')
                    {
                        $Instructions["$nProductionID"] = "S";
                    }
                }
                else
                {
                    if($thisInstruction->chk_make=='yes')
                    {
                        $Instructions["$nProductionID"] = $Instructions["$nProductionID"].", M";
                    }
                    if($thisInstruction->chk_pack=='yes')
                    {
                        $Instructions["$nProductionID"] = $Instructions["$nProductionID"].", P";
                    }
                    if($thisInstruction->chk_freeze=='yes')
                    {
                        $Instructions["$nProductionID"] = $Instructions["$nProductionID"].", F";
                    }
                    if($thisInstruction->chk_send=='yes')
                    {
                        $Instructions["$nProductionID"] = $Instructions["$nProductionID"].", S";
                    }
                }
                /*if(!array_key_exists($nProductionID, $Instructions))
                {
                    $Instructions["$nProductionID"] = array("Make"=>"", "Pack"=>"", "Freeze"=>"", "Send"=>"");
                }
                if($thisInstruction->chk_make=='yes')
                {
                    $Instructions["$nProductionID"]["Make"] = $thisInstruction->instruction_date;
                }
                if($thisInstruction->chk_pack=='yes')
                {
                    $Instructions["$nProductionID"]["Pack"] = $thisInstruction->instruction_date;
                }
                if($thisInstruction->chk_freeze=='yes')
                {
                    $Instructions["$nProductionID"]["Freeze"] = $thisInstruction->instruction_date;
                }
                if($thisInstruction->chk_send=='yes')
                {
                    $Instructions["$nProductionID"]["Send"] = $thisInstruction->instruction_date;
                }*/
            }

            $Rawmaterials = array();
            $allRawMaterials = Rawmaterials::all();
            foreach ($allRawMaterials as $thisMaterial)
            {
                $nProductionID = $thisMaterial->production_id;
                $Rawmaterials["$nProductionID"][] = array("material_name"=>$thisMaterial->material_name,
                    "material_quantity"=>$thisMaterial->material_quantity, "material_unit"=>$thisMaterial->material_unit,
                    "material_lot_nr"=>$thisMaterial->material_lot_nr);
            }
            $sitesettings = Sitesettings::all();
            return view('production.index',compact('productions', 'Instructions', 'Rawmaterials', 'sitesettings'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recipes = Recipes::all();
        $sitesettings = Sitesettings::all();
        return view('production.create',compact('recipes', 'sitesettings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        /*$request->validate([
            'product_number' => 'required',
            'lot_number' => 'required',
            'product_name' => 'required',
            'instructions' => 'required',
            'products_available_arriving' => 'required',
            'packing_package_size' => 'required',
            'production_total' => 'required',
            'delivery_storage' => 'required',
            'delivery_storage_quantity' => 'required',
            'pallet_number' => 'required',
            'recipe_id' => 'required',
            'production_date' => 'required',
            'production_unit' => 'required'
        ]);*/
        $request->validate(
            [
                'recipe_id' => 'required',
                'strProductionLocation' => 'required',
                'quantity_estimate' => 'required',
                'quantity_estimate_unit' => 'required'
            ],
            [
                'recipe_id.required' => 'Please chose a recipe.',
                'strProductionLocation.required' => 'Please chose production location',
                'quantity_estimate.required' => 'Please provide estimated quantity',
                'quantity_estimate_unit.required' => 'Please provude unit for estimated quantity'
            ]
        );
        $nEmpID = Auth::user()->getempid();
        $arrProduction = array(
            'recipe_id'=>$request->recipe_id,
            'product_number'=>$request->product_number,
            'lot_number'=>$request->lot_number,
            'order_number'=>$request->order_number,
            'quantity_estimate'=>$request->quantity_estimate,
            'quantity_estimate_unit'=>$request->quantity_estimate_unit,
            'quantity_scaled'=>$request->quantity_scaled,
            'quantity_scaled_unit'=>$request->quantity_scaled_unit,
            'create_date_time'=>date("Y-m-d H:i:s"),
            'emp_id'=>$nEmpID
        );
        if(!empty($request->production_date))
        {
            $arrProduction['production_date'] = $request->production_date;
        }
        if(!empty($request->strProductionLocation))
        {
            $arrProduction['production_site'] = $request->strProductionLocation;
        }


        $objProduction = Production::create($arrProduction);
        $nProductionID = $objProduction->id;

        if(isset($_POST['Instructions']))
        {
            $arrInstructions = $_POST['Instructions'];
            foreach ($arrInstructions as $thisInstruction) {
                /*if(!empty($thisInstruction['instruction_date']))
                {*/
                $arrInsertInstruction = array(
                    /*'instruction_date'=>$thisInstruction['instruction_date'],*/
                    'chk_make'=>'no',
                    'chk_freeze'=>'no',
                    'chk_pack'=>'no',
                    'chk_send'=>'no',
                    'chk_clean'=>'no',
                    'chk_cut'=>'no',
                    'chk_salt'=>'no',
                    'chk_smoke'=>'no',
                    'chk_bone_cleaning'=>'no',
                    'chk_sliced'=>'no',
                    'create_date_time'=>date('Y-m-d H:i:s'),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if(isset($thisInstruction['chk_make']))
                {
                    $arrInsertInstruction['chk_make'] = 'yes';
                }
                if(isset($thisInstruction['chk_freeze']))
                {
                    $arrInsertInstruction['chk_freeze'] = 'yes';
                }
                if(isset($thisInstruction['chk_pack']))
                {
                    $arrInsertInstruction['chk_pack'] = 'yes';
                }
                if(isset($thisInstruction['chk_send']))
                {
                    $arrInsertInstruction['chk_send'] = 'yes';
                }
                if(isset($thisInstruction['chk_clean']))
                {
                    $arrInsertInstruction['chk_clean'] = 'yes';
                }
                if(isset($thisInstruction['chk_cut']))
                {
                    $arrInsertInstruction['chk_cut'] = 'yes';
                }
                if(isset($thisInstruction['chk_salt']))
                {
                    $arrInsertInstruction['chk_salt'] = 'yes';
                }
                if(isset($thisInstruction['chk_smoke']))
                {
                    $arrInsertInstruction['chk_smoke'] = 'yes';
                }
                if(isset($thisInstruction['chk_bone_cleaning']))
                {
                    $arrInsertInstruction['chk_bone_cleaning'] = 'yes';
                }
                if(isset($thisInstruction['chk_sliced']))
                {
                    $arrInsertInstruction['chk_sliced'] = 'yes';
                }
                Instructions::create($arrInsertInstruction);
                //}
            }
        }


        $arrRawMaterials = $_POST['rawmaterials'];
        foreach ($arrRawMaterials as $thisMaterial)
        {
            $arrInsertMaterial = array(
                'material_name'=>$thisMaterial['material_name'],
                'material_quantity'=>$thisMaterial['material_quantity'],
                'material_unit'=>$thisMaterial['material_unit'],
                'material_lot_nr'=>$thisMaterial['material_lot_nr'],
                'create_date_time'=>date("Y-m-d H:i:s"),
                'emp_id'=>$nEmpID,
                'production_id'=>$nProductionID
            );
            Rawmaterials::create($arrInsertMaterial);
        }

        $arrPackaging = $_POST['packaging'];
        foreach ($arrPackaging as $thisPackaging)
        {
            if(!empty($thisPackaging['packing_type']))
            {
                $arrInsertPackaging = array(
                    'packing_type'=>$thisPackaging['packing_type'],
                    'package_size'=>0,
                    'packing_unit'=>'',
                    'package_quantity'=>0,
                    'package_total'=>0,
                    'create_date_time'=>date("Y-m-d H:i:s"),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if($thisPackaging['package_size']>0)
                {
                    $arrInsertPackaging['package_size'] = $thisPackaging['package_size'];
                }
                if(!empty($thisPackaging['packing_unit']))
                {
                    $arrInsertPackaging['packing_unit'] = $thisPackaging['packing_unit'];
                }
                if($thisPackaging['package_quantity']>0)
                {
                    $arrInsertPackaging['package_quantity'] = $thisPackaging['package_quantity'];
                }
                if($thisPackaging['package_total']>0)
                {
                    $arrInsertPackaging['package_total'] = $thisPackaging['package_total'];
                }
                Packaging::create($arrInsertPackaging);
            }

        }

        $arrShipment = $_POST['shipment'];
        foreach($arrShipment as $thisShipment)
        {
            $arrInsertShipment = array(
                'shipment_quantity'=>$thisShipment['shipment_quantity'],
                'shipment_unit'=>$thisShipment['shipment_unit'],
                'delivery_storage'=>$thisShipment['delivery_storage'],
                'storage_pallet'=>$thisShipment['storage_pallet'],
                'create_date_time'=>date("y-m-d H:i:s"),
                'emp_id'=>$nEmpID,
                'production_id'=>$nProductionID
            );
            Shipment::create($arrInsertShipment);
        }

        return redirect()->route('production.index')
            ->with('success','Production record added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(Production $production)
    {
        //
        $nProductionID = $production->id;
        $nRecipeID = $production->recipe_id;
        $Recipe = Recipes::find($nRecipeID);
        $Instructions = Instructions::where('production_id', $nProductionID)->get();
        $RawMetirals = Rawmaterials::where('production_id', $nProductionID)->get();
        $Packagings = Packaging::where('production_id', $nProductionID)->get();
        $Shipments = Shipment::where('production_id', $nProductionID)->get();
        $nEmpID = $production->emp_id;
        $Employee = Employees::find($nEmpID);
        return view('production.show', compact('production', 'Recipe',
            'Instructions', 'RawMetirals', 'Packagings', 'Shipments', 'Employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(Production $production)
    {
        //
        $nProductionID = $production->id;
        $recipes = Recipes::all();
        $Instructions = Instructions::where('production_id', $nProductionID)->get();
        $RawMaterials = Rawmaterials::where('production_id', $nProductionID)->get();
        $Packaging = Packaging::where('production_id', $nProductionID)->get();
        $Shipment = Shipment::where('production_id', $nProductionID)->get();
        $sitesettings = Sitesettings::all();
        return view('production.edit', compact('production', 'recipes', 'Instructions',
            'RawMaterials', 'Packaging', 'Shipment', 'sitesettings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $production)
    {
        //
        //
        $nProductionID = $production->id;
        $request->validate(
            [
                'recipe_id' => 'required',
            ],
            [
                'recipe_id.required' => 'Please chose a recipe.'
            ]
        );
        $nEmpID = Auth::user()->getempid();
        $arrProduction = array(
            'recipe_id'=>$request->recipe_id,
            'product_number'=>$request->product_number,
            'lot_number'=>$request->lot_number,
            'order_number'=>$request->order_number,
            'quantity_estimate'=>$request->quantity_estimate,
            'quantity_estimate_unit'=>$request->quantity_estimate_unit,
            'quantity_scaled'=>$request->quantity_scaled,
            'quantity_scaled_unit'=>$request->quantity_scaled_unit,
            'emp_id'=>$nEmpID
        );
        if(!empty($request->production_date))
        {
            $arrProduction['production_date'] = $request->production_date;
        }
        if(!empty($request->strProductionLocation))
        {
            $arrProduction['production_site'] = $request->strProductionLocation;
        }
        $production->update($arrProduction);

        if(isset($_POST['Instructions']))
        {
            $arrInstructions = $_POST['Instructions'];
            foreach ($arrInstructions as $thisInstruction) {
                /*if(!empty($thisInstruction['instruction_date']))
                {*/
                $arrInsertInstruction = array(
                    //'instruction_date'=>$thisInstruction['instruction_date'],
                    'chk_make'=>'no',
                    'chk_freeze'=>'no',
                    'chk_pack'=>'no',
                    'chk_send'=>'no',
                    'chk_clean'=>'no',
                    'chk_cut'=>'no',
                    'chk_salt'=>'no',
                    'chk_smoke'=>'no',
                    'chk_bone_cleaning'=>'no',
                    'chk_sliced'=>'no',
                    'create_date_time'=>date('Y-m-d H:i:s'),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if(isset($thisInstruction['chk_make']))
                {
                    $arrInsertInstruction['chk_make'] = 'yes';
                }
                if(isset($thisInstruction['chk_freeze']))
                {
                    $arrInsertInstruction['chk_freeze'] = 'yes';
                }
                if(isset($thisInstruction['chk_pack']))
                {
                    $arrInsertInstruction['chk_pack'] = 'yes';
                }
                if(isset($thisInstruction['chk_send']))
                {
                    $arrInsertInstruction['chk_send'] = 'yes';
                }
                if(isset($thisInstruction['chk_clean']))
                {
                    $arrInsertInstruction['chk_clean'] = 'yes';
                }
                if(isset($thisInstruction['chk_cut']))
                {
                    $arrInsertInstruction['chk_cut'] = 'yes';
                }
                if(isset($thisInstruction['chk_salt']))
                {
                    $arrInsertInstruction['chk_salt'] = 'yes';
                }
                if(isset($thisInstruction['chk_smoke']))
                {
                    $arrInsertInstruction['chk_smoke'] = 'yes';
                }
                if(isset($thisInstruction['chk_bone_cleaning']))
                {
                    $arrInsertInstruction['chk_bone_cleaning'] = 'yes';
                }
                if(isset($thisInstruction['chk_sliced']))
                {
                    $arrInsertInstruction['chk_sliced'] = 'yes';
                }
                if(isset($thisInstruction['nInstructionID']) && $thisInstruction['nInstructionID']>0)
                {
                    unset($arrInsertInstruction['create_date_time']);
                    unset($arrInsertInstruction['production_id']);
                    Instructions::find($thisInstruction['nInstructionID'])->update($arrInsertInstruction);
                }
                else
                {
                    Instructions::create($arrInsertInstruction);
                }
                //}
            }
        }


        $arrRawMaterials = $_POST['rawmaterials'];
        foreach ($arrRawMaterials as $thisMaterial)
        {
            if(!empty($thisMaterial['material_name']))
            {
                $arrInsertMaterial = array(
                    'material_name'=>$thisMaterial['material_name'],
                    'material_quantity'=>$thisMaterial['material_quantity'],
                    'material_unit'=>$thisMaterial['material_unit'],
                    'material_lot_nr'=>$thisMaterial['material_lot_nr'],
                    'create_date_time'=>date("Y-m-d H:i:s"),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if(isset($thisMaterial['nMaterialID']) && $thisMaterial['nMaterialID']>0)
                {
                    unset($arrInsertMaterial['create_date_time']);
                    unset($arrInsertMaterial['production_id']);
                    Rawmaterials::find($thisMaterial['nMaterialID'])->update($arrInsertMaterial);
                }
                else
                {
                    Rawmaterials::create($arrInsertMaterial);
                }
            }

        }

        $arrPackaging = $_POST['packaging'];
        foreach ($arrPackaging as $thisPackaging)
        {
            if(!empty($thisPackaging['packing_type']))
            {
                $arrInsertPackaging = array(
                    'packing_type'=>$thisPackaging['packing_type'],
                    'package_size'=>0,
                    'packing_unit'=>'',
                    'package_quantity'=>0,
                    'package_total'=>0,
                    'create_date_time'=>date("Y-m-d H:i:s"),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if($thisPackaging['package_size']>0)
                {
                    $arrInsertPackaging['package_size'] = $thisPackaging['package_size'];
                }
                if(!empty($thisPackaging['packing_unit']))
                {
                    $arrInsertPackaging['packing_unit'] = $thisPackaging['packing_unit'];
                }
                if($thisPackaging['package_quantity']>0)
                {
                    $arrInsertPackaging['package_quantity'] = $thisPackaging['package_quantity'];
                }
                if($thisPackaging['package_total']>0)
                {
                    $arrInsertPackaging['package_total'] = $thisPackaging['package_total'];
                }
                if(isset($thisPackaging['nPackagingID']) && $thisPackaging['nPackagingID']>0)
                {
                    unset($arrInsertPackaging['create_date_time']);
                    unset($arrInsertPackaging['production_id']);
                    Packaging::find($thisPackaging['nPackagingID'])->update($arrInsertPackaging);
                }
                else
                {
                    Packaging::create($arrInsertPackaging);
                }

            }

        }



        $arrShipment = $_POST['shipment'];
        foreach($arrShipment as $thisShipment)
        {
            if(!empty($thisShipment['shipment_quantity']))
            {
                $arrInsertShipment = array(
                    'shipment_quantity'=>$thisShipment['shipment_quantity'],
                    'shipment_unit'=>$thisShipment['shipment_unit'],
                    'delivery_storage'=>$thisShipment['delivery_storage'],
                    'storage_pallet'=>$thisShipment['storage_pallet'],
                    'create_date_time'=>date("y-m-d H:i:s"),
                    'emp_id'=>$nEmpID,
                    'production_id'=>$nProductionID
                );
                if(isset($thisShipment['nShipmentID']) && $thisShipment['nShipmentID']>0)
                {
                    unset($arrInsertShipment['create_date_time']);
                    unset($arrInsertShipment['production_id']);
                    Shipment::find($thisShipment['nShipmentID'])->update($arrInsertShipment);
                }
                else
                {
                    Shipment::create($arrInsertShipment);
                }
            }


        }

        $deletedInstructions = $request->deletedInstructions;
        $deletedRawMaterials = $request->deletedRawMaterials;
        $deletedPackaging = $request->deletedPackaging;
        $deletedShipment = $request->deletedShipment;

        if(trim($deletedInstructions)!="")
        {
            $arrDeletedInstructions = explode(",", $deletedInstructions);
            for($i=0; $i<count($arrDeletedInstructions); $i++)
            {
                $nDelThisInstruction = $arrDeletedInstructions[$i];
                if(is_numeric($nDelThisInstruction) && $nDelThisInstruction>0)
                {
                    Instructions::where('id', $nDelThisInstruction)->delete();
                }
            }
        }

        if(trim($deletedRawMaterials) !="")
        {
            $arrDeletedRawMaterial = explode(",", $deletedRawMaterials);
            for($i=0; $i<count($arrDeletedRawMaterial); $i++)
            {
                $nDelThisRawMaterial = $arrDeletedRawMaterial[$i];
                if(is_numeric($nDelThisRawMaterial) && $nDelThisRawMaterial>0)
                {
                    Rawmaterials::where('id', $nDelThisRawMaterial)->delete();
                }
            }
        }

        if(trim($deletedPackaging) !="")
        {
            $arrDeletedPackaging = explode(",", $deletedPackaging);
            for($i=0; $i<count($arrDeletedPackaging); $i++)
            {
                $nDelThisPackaging = $arrDeletedPackaging[$i];
                if(is_numeric($nDelThisPackaging) && $nDelThisPackaging>0)
                {
                    Packaging::where('id', $nDelThisPackaging)->delete();
                }
            }
        }

        if(trim($deletedShipment) !="")
        {
            $arrDeletedShipment = explode(",", $deletedShipment);
            for($i=0; $i<count($arrDeletedShipment); $i++)
            {
                $nDelThisShipment = $arrDeletedShipment[$i];
                if(is_numeric($nDelThisShipment) && $nDelThisShipment>0)
                {
                    Shipment::where('id', $nDelThisShipment)->delete();
                }
            }
        }

        return redirect()->route('production.index')
            ->with('success','Production record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(Production $production)
    {
        //
        $nProductionID = $production->id;
        //Ingredients::where('recipe_id',$nRecipeID)->delete();
        $production->delete();
        Instructions::where('production_id', $nProductionID)->delete();
        Rawmaterials::where('production_id', $nProductionID)->delete();
        Packaging::where('production_id', $nProductionID)->delete();
        Shipment::where('production_id', $nProductionID)->delete();

        return redirect()->route('production.index')
            ->with('success','Production record deleted successfully.');
    }

    public function testmail()
    {
        $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>
                Hello [Employee first name],<br>
                [Sender Name] has sent you this message with the below suggestion for improvement and put you in charge of resolving it:<br>
                <a href='https://innri.fisherman.is/improvements/1'>https://innri.fisherman.is/improvements</a></p></div></body></html>";
        $to = 'atif.majid10@gmail.com';
        $subject = 'Improvement suggestion for Fisherman';
        $formEmail = 'innri@fisherman.is';
        $formName = "Innri Fisherman";
        Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
            $message->from($formEmail, $formName);
            $message->to($to);
            $message->subject($subject);
            $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
        });
    }

    private function doCalculation($nRecipe, $nQuantity, $nUnit)
    {
        $recipe = Recipes::find($nRecipe);
        if(empty($recipe->amount) || empty($recipe->unit))
        {
            return null;
        }
        $nRecipeQuantity = $recipe->amount;
        $nRecipeUnit = $recipe->unit;
        $nMultiplier = 0;
        $arrSameUnits = array();
        //'grams','kg','liter','pieces','deciliter','centiliter','milliliter'
        $arrSameUnits['weight'] = array("grams", "kg");
        $arrSameUnits['volume'] = array("deciliter", "centiliter", "milliliter", "liter");
        $arrSameUnits['pieces'] = array('pieces');
        $bCalculate = false;
        $arrOutPut = array();
        if(in_array($nUnit, $arrSameUnits['pieces']) && in_array($nRecipeUnit, $arrSameUnits['pieces']))
        {
            //$nMultiplier = 1;
            $bCalculate = true;
        }
        else if(in_array($nUnit, $arrSameUnits['volume']) && in_array($nRecipeUnit, $arrSameUnits['volume']))
        {
            //Check volume based conversion
            $bCalculate = true;
            if($nUnit==$nRecipeUnit){
                //$nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
            }
            else{
                $arrConversion = array("deciliter"=>10, "centiliter"=>100, "milliliter"=>1000);
                if($nUnit!="liter")
                {
                    $nQuantity = $nQuantity / $arrConversion["$nUnit"];
                    $nUnit = "liter";
                }
                if($nRecipeUnit!="liter")
                {
                    $nRecipeQuantity = $nRecipeQuantity / $arrConversion["$nRecipeUnit"];
                    $nRecipeUnit = "liter";
                }
                //$nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
            }

        }
        else if(in_array($nUnit, $arrSameUnits['weight']) && in_array($nRecipeUnit, $arrSameUnits['weight']))
        {
            //Check volume based conversion
            $bCalculate = true;
            if($nUnit==$nRecipeUnit){
                //$nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
            }
            else
            {
                $arrConversion = array("grams"=>1000);
                if($nUnit!="kg")
                {
                    $nQuantity = $nQuantity / $arrConversion["$nUnit"];
                    //$nUnit = "kg";
                }
                if($nRecipeUnit!="kg")
                {
                    $nRecipeQuantity = $nRecipeQuantity / $arrConversion["$nRecipeUnit"];
                    //$nRecipeUnit = "kg";
                }
                //$nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
            }
        }
        else
        {
            return null;
        }

        if($bCalculate)
        {
            //$nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
            $nMultiplier = $nQuantity/$nRecipeQuantity;
            $Ingredients = Ingredients::where('recipe_id',$nRecipe)->get();
            foreach ($Ingredients as $thisIngredient)
            {
                $strIngredientTitle = $thisIngredient->name;
                $strIngredientAmount = $thisIngredient->amount;
                $strIngredientUnit = $thisIngredient->unit;
                if(strpos(",", $strIngredientAmount)>=0)
                {
                    $strIngredientAmount = str_replace(",", ".", $strIngredientAmount);
                }
                //echo $strIngredientAmount." - ".$nMultiplier."<br />";
                $FinalAount = $strIngredientAmount * $nMultiplier;
                //$arrOutPut[] = $strIngredientTitle." : ".$FinalAount." ".$strIngredientUnit;
                if($strIngredientUnit!==$nUnit)
                {
                    if(in_array($nUnit, $arrSameUnits['weight']))
                    {
                        if($nUnit=='grams')
                        {

                            if(in_array($strIngredientUnit, $arrSameUnits['weight']))
                            {
                                $FinalAount = $FinalAount * 1000;
                                $strIngredientUnit = 'grams';
                            }
                            else{
                                if($strIngredientUnit=='liter')
                                {
                                    $FinalAount = $FinalAount * 1000;
                                }
                                else if($strIngredientUnit=='deciliter')
                                {
                                    $FinalAount = $FinalAount * 100;
                                }
                                else if($strIngredientUnit=='centiliter')
                                {
                                    $FinalAount = $FinalAount * 10;
                                }
                                $strIngredientUnit = 'milliliter';
                            }
                        }
                    }
                }
                $arrOutPut[] = array("name"=>$strIngredientTitle, "amount"=>round($FinalAount, 2), "unit"=>$strIngredientUnit);
            }
        }
        return $arrOutPut;

    }

    public function calculate(Request $request)
    {
        $nRecipe = $request->nRecipe;
        $nQuantity = $request->nQuantity;
        $nUnit = $request->nUnit;
        $arrOutPut = $this->doCalculation($nRecipe, $nQuantity, $nUnit);
        if(is_array($arrOutPut) && count($arrOutPut)>0)
        {
            //for($i=0; $i<count($arrOutPut); $i++)
            foreach($arrOutPut as $thisIngredient)
            {
                echo $thisIngredient['name']." : ".$thisIngredient['amount']." ".$thisIngredient['unit']."<br>";
            }
        }
        else{
            echo "Either recipe does not have units associated or Recipe and production have different units";
        }
    }

    public function getpdf(Request $request)
    {
        $nProductionID = $request->id;
        $production = Production::find($nProductionID);
        if($production)
        {
            $nRecipeID = $production->recipe_id;
            $recipe = Recipes::find($nRecipeID);
            $Instructions = Instructions::where('production_id', $nProductionID)->get();
            $RawMetirals = Rawmaterials::where('production_id', $nProductionID)->get();
            $Packagings = Packaging::where('production_id', $nProductionID)->get();
            $Shipments = Shipment::where('production_id', $nProductionID)->get();

            $Ingredients = Ingredients::where('recipe_id', $nRecipeID)->get();
            $Steps = Steps::where('recipe_id', $nRecipeID)->get();
            $RecipePhoto = Recipephotos::where('recipe_id', $nRecipeID)->get();

            $arrCalculatedIngredietns = array();
            if($nRecipeID>0 && $production->quantity_estimate>0)
            {
                $arrTempCalculation = $this->doCalculation($nRecipeID, $production->quantity_estimate, $production->quantity_estimate_unit);
                if(is_array($arrTempCalculation) && count($arrTempCalculation)>0)
                {
                    $arrCalculatedIngredietns = $arrTempCalculation;
                }
            }

            /*return view('production.printpdf', compact('production', 'Instructions', 'RawMetirals',
               'Packagings',  'Shipments', 'recipe', 'Ingredients', 'Steps', 'RecipePhoto', 'arrCalculatedIngredietns'));*/
            $pdf = PDF::loadView('production.printpdf', compact('production', 'Instructions', 'RawMetirals',
                'Packagings',  'Shipments', 'recipe', 'Ingredients', 'Steps', 'RecipePhoto', 'arrCalculatedIngredietns'));
            return $pdf->download($recipe->title.' (Production)'.'.pdf');
        }
        else
        {
            return Redirect::back()->withErrors(['This production is not found.']);
        }
    }

    public function updateprodstatus(Request $request)
    {
        $strNewStatus = $request->strNewStatus;
        $nID = $request->nID;
        if(is_numeric($nID) && $nID>0)
        {
            $arrUpdate = array(
                'complete_date_time'=>date("Y-m-d H:i:s"),
                'completed'=>$strNewStatus
            );
            Production::where('id', $nID)->update($arrUpdate);
        }
    }
}
