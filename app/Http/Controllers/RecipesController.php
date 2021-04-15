<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Steps;
use App\Models\Recipephotos;
use App\Models\Sitesettings;
use App\Models\Employeerights;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use PDF;
use Illuminate\Support\Facades\Redirect;

class RecipesController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $strFullRoute = request()->route()->getActionName();
            $strAcionName = substr($strFullRoute, strpos($strFullRoute, "@")+1);
            $arrAllowedPages = array(
                "View"=>array('index', 'show', 'getpdf'),
                "Edit"=>array("index", "create", "store", "show", "edit","update", "getpdf", "destroy","uploadpicture"),
                "Admin"=>array("index", "create", "store", "show", "edit", "update", "destroy","getpdf", "update", "uploadpicture"),
                "No Access"=>array("none")
            );

            $nCurrUserID = Auth::user()->getempid();
            $objRights = Employeerights::
            where('emp_id', $nCurrUserID)
                ->where('routename','recipes')
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
        //return view('recipes.index');
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $recipes = Recipes::all();
            return view('recipes.index',compact('recipes'))
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
        $Suppliers = Sitesettings::where('field', 'SupplierName')->orderBy('value')->get();
        return view('recipes.create', compact('Suppliers'));
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
        try{
            $request->validate([
                'title' => 'required',
                'Ingredients.*.ingredient' => 'required',
                'Ingredients.*.quantity' => 'required',
                'Ingredients.*.unit' => 'required',
                /*'Steps.*.step' => 'required'*/
            ],
                [
                    'title.required' => 'Recipe title is required',
                    'Ingredients.*.ingredient.required' => 'Ingredient name is required',
                    'Ingredients.*.quantity.required' => 'Ingredient quantity is required',
                    'Ingredients.*.unit.required' => 'Ingredient unit is required',
                    /*'Steps.*.step.required' => 'Step details are required'*/
                ]);
            /*$arrRecipe = array(
                'title'=>$request->title,
                'preparation_time'=>$request->preparation_time,
                'cooking_time'=>$request->cooking_time
                );*/
            $arrRecipe = array(
                'title'=>$request->title,
                'created_by'=>Auth::user()->getempid()
            );
            if(trim($request->strProductNumber)!="")
            {
                $arrRecipe['product_number'] = $request->strProductNumber;
            }
            if(trim($request->created_date)!="")
            {
                $arrRecipe['created_date'] = $request->created_date;
            }
            if(trim($request->nRecipeQuantity)!="")
            {
                $arrRecipe['amount'] = $request->nRecipeQuantity;
            }
            if(trim($request->RecipeUnit)!="")
            {
                $arrRecipe['unit'] = $request->RecipeUnit;
            }
            $recipe = Recipes::create($arrRecipe);
            $nRecipeID = $recipe->id;

            $arrIngredients = $_POST['Ingredients'];
            foreach ($arrIngredients as $thisIngredient)
            {
                $arrInsert = array(
                    'name'=>$thisIngredient['ingredient'],
                    'amount'=>$thisIngredient['quantity'],
                    'unit'=>$thisIngredient['unit'],
                    'recipe_id'=>$nRecipeID,
                );
                if(array_key_exists('ing_product_number', $thisIngredient) && $thisIngredient['ing_product_number']!="")
                {
                    $arrInsert['ing_product_number'] = $thisIngredient['ing_product_number'];
                }
                if(array_key_exists('supplier', $thisIngredient) && $thisIngredient['supplier']!="")
                {
                    $arrInsert['supplier_name'] = $thisIngredient['supplier'];
                }

                Ingredients::create($arrInsert);
            }

            $arrSteps = $_POST['Steps'];
            foreach ($arrSteps as $thisStep)
            {
                if(trim($thisStep['step'])!="")
                {
                    $arrInsert = array(
                        'details'=>$thisStep['step'],
                        'recipe_id'=>$nRecipeID
                    );
                    Steps::create($arrInsert);
                }
            }

            if($request->file('Photos'))
            {
                $arrPhotos = $request->file('Photos');
                {
                    foreach ($arrPhotos as $thispic)
                    {
                        $file = $thispic['file_photo'];

                        $destination = 'uploads/recipes/'.$nRecipeID;
                        $strFileName = $file->getClientOriginalName();
                        $file->move($destination, $strFileName);
                        $arrPicRecord = array(
                            'recipe_id'=>$nRecipeID,
                            'file_name'=>$strFileName,
                            'file_creation_date' => date("Y-m-d H:i:s"),
                            'file_created_by' => Auth::user()->getempid()
                        );
                        Recipephotos::create($arrPicRecord);
                    }
                }
            }
            /*return redirect()->route('recipes.index')
                ->with('success','Recipe added successfully.');*/
        }
        catch (QueryException $e)
        {
            $html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri!';
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
        $request->session()->flash('success', 'Recipe added successfully.');
        echo $nRecipeID;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipe)
    {
        //
        $nRecipeID = $recipe->id;
        $Ingredients = Ingredients::where('recipe_id', $nRecipeID)->get();
        $Steps = Steps::where('recipe_id', $nRecipeID)->get();
        $RecipePhoto = Recipephotos::where('recipe_id', $nRecipeID)->get();
        return view('recipes.show', compact('recipe', 'Ingredients', 'Steps', 'RecipePhoto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipes  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipe)
    {
        //
        $nRecipeID = $recipe->id;
        $Ingredients = Ingredients::where('recipe_id', $nRecipeID)->get();
        $Steps = Steps::where('recipe_id', $nRecipeID)->get();
        $Suppliers = Sitesettings::where('field', 'SupplierName')->orderBy('value')->get();
        return view('recipes.edit', compact('recipe', 'Ingredients', 'Steps', 'Suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipes $recipes)
    {
        //
        $request->validate([
            'title' => 'required',
            'Ingredients.*.ingredient' => 'required',
            'Ingredients.*.quantity' => 'required',
            'Ingredients.*.unit' => 'required',
            /*'Steps.*.step' => 'required'*/
        ],
            [
                'title.required' => 'Recipe title is required',
                'Ingredients.*.ingredient.required' => 'Ingredient name is required',
                'Ingredients.*.quantity.required' => 'Ingredient quantity is required',
                'Ingredients.*.unit.required' => 'Ingredient unit is required',
                /*'Steps.*.step.required' => 'Step details are required'*/
            ]);
        $arrRecipe = array(
            'title'=>$request->title
        );
        if(trim($request->strProductNumber)!="")
        {
            $arrRecipe['product_number'] = $request->strProductNumber;
        }
        if(trim($request->created_date)!="")
        {
            $arrRecipe['created_date'] = $request->created_date;
        }
        if(trim($request->nRecipeQuantity)!="")
        {
            $arrRecipe['amount'] = $request->nRecipeQuantity;
        }
        if(trim($request->RecipeUnit)!="")
        {
            $arrRecipe['unit'] = $request->RecipeUnit;
        }
        $nRecipeId = $request->nRecipeId;

        $deletedingredients = $request->deletedingredients;
        $deletedsteps = $request->deletedsteps;

        $arrUpdatedIngredients = array();
        $arrUpdatedSteps = array();

        Recipes::find($nRecipeId)->update($arrRecipe);
        if(array_key_exists('Ingredients', $_POST))
        {
            $arrIngredients = $_POST['Ingredients'];
            foreach ($arrIngredients as $thisIngredient)
            {

                $arrUpdateIngredient = array(
                    'name'=>$thisIngredient['ingredient'],
                    'amount'=>$thisIngredient['quantity'],
                    'unit'=>$thisIngredient['unit'],
                    'recipe_id'=>$nRecipeId
                );
                if(array_key_exists('ing_product_number', $thisIngredient) && $thisIngredient['ing_product_number']!="")
                {
                    $arrUpdateIngredient['ing_product_number'] = $thisIngredient['ing_product_number'];
                }
                if(array_key_exists('supplier', $thisIngredient) && $thisIngredient['supplier']!="")
                {
                    $arrUpdateIngredient['supplier_name'] = $thisIngredient['supplier'];
                }

                if(isset($thisIngredient['ingredientid']) && $thisIngredient['ingredientid']>0)
                {
                    $nIngredientID = $thisIngredient['ingredientid'];
                    Ingredients::find($nIngredientID)->update($arrUpdateIngredient);
                    $arrUpdatedIngredients[] = $nIngredientID;
                }
                else{
                    Ingredients::create($arrUpdateIngredient);
                }

            }
        }


        if(array_key_exists('Steps', $_POST))
        {

            $arrSteps = $_POST['Steps'];
            foreach ($arrSteps as $thisStep)
            {
                if(trim($thisStep['step'])!="")
                {
                    $arrUpdateStep = array(
                        'details'=>$thisStep['step'],
                        'recipe_id'=>$nRecipeId
                    );
                    if(isset($thisStep['stepid']) && $thisStep['stepid']>0)
                    {
                        $nStepID = $thisStep['stepid'];
                        Steps::find($nStepID)->update($arrUpdateStep);
                        $arrUpdatedSteps[] = $nStepID;
                    }
                    else{
                        Steps::create($arrUpdateStep);
                    }
                }
            }
        }

        try {
            if(trim($deletedingredients)!="")
            {
                $arrDeletedIngredients = explode(",", $deletedingredients);
                for($i=0; $i<count($arrDeletedIngredients); $i++)
                {
                    $nDelThisIngredient = $arrDeletedIngredients[$i];
                    if(is_numeric($nDelThisIngredient) && $nDelThisIngredient>0)
                    {
                        if(!in_array($nDelThisIngredient, $arrUpdatedIngredients))
                        {
                            //Ingredients::find($nDelThisIngredient)->delete();
                            Ingredients::where('id',$nDelThisIngredient)->delete();
                        }
                    }
                }
            }
        }
        catch (QueryException $e)
        {
            $html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri recipe edit!';
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

        if(trim($deletedsteps)!="")
        {
            $arrDeletedSteps = explode(",", $deletedsteps);
            for($i=0; $i<count($arrDeletedSteps); $i++) {
                $nDelThisStep = $arrDeletedSteps[$i];
                if (is_numeric($nDelThisStep) && $nDelThisStep > 0) {
                    if (!in_array($nDelThisStep, $arrUpdatedSteps)) {
                        Steps::where('id', $nDelThisStep)->delete();
                    }
                }
            }
        }

        if($request->file('Photos'))
        {
            $arrPhotos = $request->file('Photos');
            {
                foreach ($arrPhotos as $thispic)
                {
                    $file = $thispic['file_photo'];

                    $destination = 'uploads/recipes/'.$nRecipeId;
                    $strFileName = $file->getClientOriginalName();
                    $file->move($destination, $strFileName);
                    $arrPicRecord = array(
                        'recipe_id'=>$nRecipeId,
                        'file_name'=>$strFileName,
                        'file_creation_date' => date("Y-m-d H:i:s"),
                        'file_created_by' => Auth::user()->getempid()
                    );
                    Recipephotos::create($arrPicRecord);
                }
            }
        }


        /*return redirect()->route('recipes.index')
            ->with('success','Recipe updated successfully.');*/
        $request->session()->flash('success', 'Sales opportunity updated successfully.');

        return "{\"msg\":\"success\"}";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipes $recipe)
    {
        //
        $nRecipeID = $recipe->id;
        Ingredients::where('recipe_id',$nRecipeID)->delete();
        Steps::where('recipe_id',$nRecipeID)->delete();
        $photos = Recipephotos::where('recipe_id', $nRecipeID)->get();
        foreach ($photos as $thisphoto)
        {
            $nPhotoID = $thisphoto->id;
            $strPhotoName = $thisphoto->file_name;
            $path = public_path('uploads/recipes/'.$nRecipeID.'/'.$strPhotoName);
            if(File::exists($path))
            {
                File::delete($path);
            }
            Recipephotos::find($nPhotoID)->delete();
        }
        $recipe->delete();
        return redirect()->route('recipes.index')
            ->with('success','Recipe deleted successfully.');
    }

    public function messages()
    {
        return [
            'title.required' => 'Recipe title is required',
            'Ingredients.*.ingredient.required' => 'Ingredient name is required',
            'Ingredients.*.quantity.required' => 'Ingredient quantity is required',
            'Ingredients.*.unit.required' => 'Ingredient unit is required',
            'Steps.*.step.required' => 'Step details are required'
        ];
    }

    public function getdetails(Recipes $recipe)
    {
        echo $recipe->id;
    }

    public function getpdf(Request $request)
    {
        $nRecipeID = $request->id;
        $recipe = Recipes::find($nRecipeID);
        $Ingredients = Ingredients::where('recipe_id', $nRecipeID)->get();
        $Steps = Steps::where('recipe_id', $nRecipeID)->get();
        $RecipePhoto = Recipephotos::where('recipe_id', $nRecipeID)->get();
        //view()->share($recipe, $Ingredients, $Steps, $RecipePhoto);
        $pdf = PDF::loadView('recipes.printpdf', compact('recipe', 'Ingredients', 'Steps', 'RecipePhoto'));

        // download PDF file with download method
        return $pdf->download($recipe->title.'.pdf');
        //return view('recipes.printpdf', compact('recipe', 'Ingredients', 'Steps', 'RecipePhoto'));
    }

    public function uploadpicture(Request $request)
    {
        /*$request->validate([
            'file' => 'required | mimes:jpeg,jpg,png',
            'nImpId' => 'required'
        ]);*/
        $nRecipeID = $request->nRecipeID;
        if(is_numeric($nRecipeID) && $nRecipeID>0 && $request->has('file'))
        {
            //$nCurrentEmployeeID = Auth::user()->getempid();
            $file = $request->file('file');
            $destination = 'uploads/recipes/'.$nRecipeID;
            $strFileName = $file->getClientOriginalName();
            $strType = $file->getMimeType();
            $file->move($destination, $strFileName);
            $arrPicRecord = array(
                'recipe_id'=>$nRecipeID,
                'file_name'=>$strFileName,
                'file_creation_date' => date("Y-m-d H:i:s"),
                'file_created_by' => Auth::user()->getempid(),
                'file_type'=>$strType
            );
            Recipephotos::create($arrPicRecord);
        }
        if($request->has('pgProcess') && $request->pgProcess>0)
        {
            $request->session()->flash('success', 'Recipe updated successfully.');
        }
        else if($request->has('pgEdit') && $request->pgEdit>0)
        {
            $request->session()->flash('success', 'Recipe updated successfully.');
        }
        else
        {
            $request->session()->flash('success', 'Recipe added successfully.');
        }

    }

    function getfiles(Request $request)
    {
        /*$ds = DIRECTORY_SEPARATOR;
        $nImprovementID = $request->id;
        $result  = array();
        $destination = 'uploads/improvements/'.$nImprovementID."/";
        $files = scandir($destination);                 //1
        if ( false!==$files ) {
            foreach ( $files as $file ) {
                if ( '.'!=$file && '..'!=$file) {       //2
                    $obj['name'] = $file;
                    $obj['size'] = filesize($destination.$ds.$file);
                    $obj['id'] = filesize($destination.$ds.$file);
                    $result[] = $obj;
                }
            }
        }*/
        $result  = array();
        $nRecipeID = $request->id;
        $photos = Recipephotos::where('recipe_id', $nRecipeID)->get();
        $destination = 'uploads/recipes/'.$nRecipeID."/";
        foreach($photos as $thisphoto)
        {
            $obj['name'] = $thisphoto->file_name;
            $obj['size'] = filesize($destination.$thisphoto->file_name);
            $obj['id'] = $thisphoto->id;
            $obj['type'] = $thisphoto->file_type;
            $result[] = $obj;
        }

        header('Content-type: text/json');              //3
        header('Content-type: application/json');
        echo json_encode($result);
    }

    function delfiles(Request $request)
    {
        $nFileId = $request->fileid;
        $nRecipeID = $request->recipe;

        $File = Recipephotos::where('recipe_id', $nRecipeID)
            ->where('id', $nFileId)
            ->get();
        $destination = 'uploads/recipes/'.$nRecipeID."/";
        if($File)
        {
            $strFileName = $File[0]->file_name;
            if(File::exists($destination.$strFileName))
            {
                File::delete($destination.$strFileName);
                Recipephotos::where('recipe_id', $nRecipeID)
                    ->where('id', $nFileId)
                    ->delete();
            }
        }
    }
}
