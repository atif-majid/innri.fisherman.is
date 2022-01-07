<?php

namespace App\Http\Controllers;

use App\Models\Employeerights;
use App\Models\Production;
use App\Models\Employees;
use App\Models\Recipephotos;
use App\Models\Shipment;
use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Sitesettings;
use App\Models\Steps;
use Illuminate\Database\QueryException;
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
                if(trim($strRight)=="")
                {
                    $strRight = "No Access";
                }
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


            $sitesettings = Sitesettings::all();
            return view('production.index',compact('productions',  'sitesettings'))
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
        try
        {
            $strPostData = "";
            $data = $request->all();
            $strPostData = $this->parse_data($data);
            /*foreach ($data as $key => $value) {
                $strPostData .=  $key." = ".$value."&";
            }*/
            $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>".$strPostData."</p></div></body></html>";
            $subject = 'Innri production data';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            $to = "atif.majid10@gmail.com";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });
        }
        catch (Exception $e)
        {
            //Do nothing
        }

        try {
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
                $arrProduction['production_date'] = date("Y-m-d", strtotime($request->production_date));
            }
            if(!empty($request->strProductionLocation))
            {
                $arrProduction['production_site'] = $request->strProductionLocation;
            }
            if(!empty($request->strWarehouse))
            {
                $arrProduction['warehouse'] = $request->strWarehouse;
            }

            $objProduction = Production::create($arrProduction);
            $nProductionID = $objProduction->id;

            return redirect()->route('production.index')
                ->with('success','Production record added successfully.');
        }
        catch (Exception $e)
        {
            $html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri Rawmaterial!';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });
            //return back()->withInput()->withErrors('An error occured. The developer has been notified!');
            $request->session()->flash('Error', 'An error occured. The developer has been notified!');
        }

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
        $nEmpID = $production->emp_id;
        $Employee = Employees::find($nEmpID);
        return view('production.show', compact('production', 'Recipe',
             'Employee'));
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
        $sitesettings = Sitesettings::all();
        return view('production.edit', compact('production', 'recipes',  'sitesettings'));
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
            $arrProduction['production_date'] = date("Y-m-d", strtotime($request->production_date));
        }
        if(!empty($request->strProductionLocation))
        {
            $arrProduction['production_site'] = $request->strProductionLocation;
        }
        if(trim($request->strWarehouse)!="")
        {
            $arrProduction['warehouse'] = $request->strWarehouse;
        }

        $production->update($arrProduction);


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
        $production->delete();

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
            $pdf = PDF::loadView('production.printpdf', compact('production', 'recipe',
                'Ingredients', 'Steps', 'RecipePhoto', 'arrCalculatedIngredietns'));
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

    private function parse_data($arrData)
    {
        $strData = "";
        foreach($arrData as $key=>$val)
        {
            if(is_array($val))
            {
                $strData .= $key."=array[".$this->parse_data($val)."]&";
            }
            else{
                $strData .= $key ."=".$val."&";
            }
        }
        return $strData;
    }
}
