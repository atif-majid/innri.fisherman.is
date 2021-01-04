<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
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
        //$employees = Employees::paginate(10);
        $employees = Employees::all();

        return view('employees.index',compact('employees'))
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
        return view('employees.create');
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
            'name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'direct_phone' => 'required',
            'gsm' => 'required',
            'userlevel' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'h_number' => 'required',
            'id_number' => 'required'
        ]);

        Employees::create($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('fisherman123'),
        ]);

        return redirect()->route('employees.index')
            ->with('success','Employee added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employee)
    {
        //
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employee)
    {
        //
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employee)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'direct_phone' => 'required',
            'gsm' => 'required',
            'userlevel' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'h_number' => 'required',
            'id_number' => 'required'
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success','Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employee)
    {
        //
        $employee->delete();
        return redirect()->route('employees.index')
            ->with('success','Employee deleted successfully.');
    }
}
