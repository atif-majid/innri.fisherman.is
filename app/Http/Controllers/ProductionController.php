<?php

namespace App\Http\Controllers;

use App\Models\Production;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$productions = Production::leftJoin('production', 'recipe_id', '=')->paginate(10);
        $productions = DB::table('production')
            ->leftJoin('recipes', 'recipe_id', '=', 'recipes.id')
            ->select('production.*','recipes.title')
            ->get();

        return view('production.index',compact('productions'))
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

        Production::create($request->all());


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
        $production->delete();
        return redirect()->route('production.index')
            ->with('success','Production record deleted successfully.');
    }
}
