<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;

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
        $productions = Production::paginate(10);

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
        return view('production.create');
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
            'pallet_number' => 'required'
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
        return view('production.edit', compact('production'));
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
            'pallet_number' => 'required'
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
