<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Models\Ingredients;
use App\Models\Steps;
use Illuminate\Http\Request;

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
            'preparation_time' => 'required',
            'cooking_time' => 'required'
        ]);
        $arrRecipe = array(
            'title'=>$request->title,
            'preparation_time'=>$request->preparation_time,
            'cooking_time'=>$request->cooking_time
            );

        $recipe = Recipes::create($arrRecipe);
        $nRecipeID = $recipe->id;

        $arrIngredients = $_POST['group-a'];
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

        $arrSteps = $_POST['group-b'];
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
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipes)
    {
        //
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
}
