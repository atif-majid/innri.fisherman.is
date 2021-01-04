<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Steps;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $recipes = Recipes::all();

        return view('recipes.index',compact('recipes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
                'Steps.*.step' => 'required'
            ],
            [
                'title.required' => 'Recipe title is required',
                'Ingredients.*.ingredient.required' => 'Ingredient name is required',
                'Ingredients.*.quantity.required' => 'Ingredient quantity is required',
                'Ingredients.*.unit.required' => 'Ingredient unit is required',
                'Steps.*.step.required' => 'Step details are required'
            ]);
        /*$arrRecipe = array(
            'title'=>$request->title,
            'preparation_time'=>$request->preparation_time,
            'cooking_time'=>$request->cooking_time
            );*/
        $arrRecipe = array(
            'title'=>$request->title
        );

        $recipe = Recipes::create($arrRecipe);
        $nRecipeID = $recipe->id;

        $arrIngredients = $_POST['Ingredients'];
        foreach ($arrIngredients as $thisIngredient)
        {
            $arrInsert = array(
                'name'=>$thisIngredient['ingredient'],
                'amount'=>$thisIngredient['quantity'],
                'unit'=>$thisIngredient['unit'],
                'recipe_id'=>$nRecipeID
            );
            Ingredients::create($arrInsert);
        }

        $arrSteps = $_POST['Steps'];
        foreach ($arrSteps as $thisStep)
        {
            $arrInsert = array(
                'details'=>$thisStep['step'],
                'recipe_id'=>$nRecipeID
            );
            Steps::create($arrInsert);
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
    public function show(Recipes $recipes)
    {
        //
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
            'Steps.*.step' => 'required'
        ],
            [
                'title.required' => 'Recipe title is required',
                'Ingredients.*.ingredient.required' => 'Ingredient name is required',
                'Ingredients.*.quantity.required' => 'Ingredient quantity is required',
                'Ingredients.*.unit.required' => 'Ingredient unit is required',
                'Steps.*.step.required' => 'Step details are required'
            ]);
        $arrRecipe = array(
            'title'=>$request->title
        );
        $nRecipeId = $request->nRecipeId;

        $deletedingredients = $_POST['deletedingredients'];
        $deletedsteps = $_POST['deletedsteps'];

        $arrUpdatedIngredients = array();
        $arrUpdatedSteps = array();

        Recipes::find($nRecipeId)->update($arrRecipe);
        $arrIngredients = $_POST['Ingredients'];
        foreach ($arrIngredients as $thisIngredient)
        {

            $arrUpdateIngredient = array(
                'name'=>$thisIngredient['ingredient'],
                'amount'=>$thisIngredient['quantity'],
                'unit'=>$thisIngredient['unit'],
                'recipe_id'=>$nRecipeId
            );
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

        $arrSteps = $_POST['Steps'];
        foreach ($arrSteps as $thisStep)
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
}
