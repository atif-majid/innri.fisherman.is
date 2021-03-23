<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Receptionsurveillance;
use Illuminate\Http\Request;

class ReceptionsurveillanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employees = Employees::all();
        return view('receptionsurveillance.create', compact('employees'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receptionsurveillance  $receptionsurveillance
     * @return \Illuminate\Http\Response
     */
    public function show(Receptionsurveillance $receptionsurveillance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receptionsurveillance  $receptionsurveillance
     * @return \Illuminate\Http\Response
     */
    public function edit(Receptionsurveillance $receptionsurveillance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receptionsurveillance  $receptionsurveillance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receptionsurveillance $receptionsurveillance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receptionsurveillance  $receptionsurveillance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receptionsurveillance $receptionsurveillance)
    {
        //
    }
}
