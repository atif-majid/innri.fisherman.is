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

            return view('production.index',compact('productions'))
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
        return view('production.create',compact('recipes'));
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
            'create_date_time'=>date("Y-m-d H:i:s"),
            'emp_id'=>$nEmpID
        );


        $objProduction = Production::create($arrProduction);
        $nProductionID = $objProduction->id;

        $arrInstructions = $_POST['Instructions'];
        foreach ($arrInstructions as $thisInstruction) {
            if(!empty($thisInstruction['instruction_date']))
            {
                $arrInsertInstruction = array(
                    'instruction_date'=>$thisInstruction['instruction_date'],
                    'chk_make'=>'no',
                    'chk_freeze'=>'no',
                    'chk_pack'=>'no',
                    'chk_send'=>'no',
                    'create_dae_time'=>date('Y-m-d H:i:s'),
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
                Instructions::create($arrInsertInstruction);
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
                    'create_dae_time'=>date("Y-m-d H:i:s"),
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
        $recipes = Recipes::all();
        return view('production.edit', compact('production', 'recipes'));
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
        $request->validate([
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
        ]);

        $production->update($request->all());

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
                    $nUnit = "kg";
                }
                if($nRecipeUnit!="kg")
                {
                    $nRecipeQuantity = $nRecipeQuantity / $arrConversion["$nRecipeUnit"];
                    $nRecipeUnit = "kg";
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
            $nMultiplier = round($nQuantity/$nRecipeQuantity, 2);
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
                $arrOutPut[] = array("name"=>$strIngredientTitle, "amount"=>$FinalAount, "unit"=>$strIngredientUnit);
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
        if(count($arrOutPut)>0)
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
                $arrCalculatedIngredietns = $this->doCalculation($nRecipeID, $production->quantity_estimate, $production->quantity_estimate_unit);
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
}
