<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Steps;
use App\Models\Recipephotos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('recipes.index');
        if(Auth::user()->updated_at==null)
        {
            return redirect(route('change-password'));
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
        return view('recipes.create');
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
        return redirect()->route('recipes.index')
            ->with('success','Recipe added successfully.');
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
        return view('recipes.edit', compact('recipe', 'Ingredients', 'Steps'));
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
        $nRecipeId = $request->nRecipeId;

        $deletedingredients = $_POST['deletedingredients'];
        $deletedsteps = $_POST['deletedsteps'];

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


        if(trim($deletedingredients)!="")
        {
            $arrDeletedIngredients = explode(",", $deletedingredients);
            for($i=0; $i<count($arrDeletedIngredients); $i++)
            {
                $nDelThisIngredient = $arrDeletedIngredients[$i];
                if(!in_array($nDelThisIngredient, $arrUpdatedIngredients))
                {
                    Ingredients::find($nDelThisIngredient)->delete();
                }
            }
        }
        if(trim($deletedsteps)!="")
        {
            $arrDeletedSteps = explode(",", $deletedsteps);
            for($i=0; $i<count($arrDeletedSteps); $i++)
            {
                $nDelThisStep = $arrDeletedSteps[$i];
                if(!in_array($nDelThisStep, $arrUpdatedSteps))
                {
                    Steps::where('id',$nDelThisStep)->delete();
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


        return redirect()->route('recipes.index')
            ->with('success','Recipe updated successfully.');
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
}
