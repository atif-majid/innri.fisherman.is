<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $nEmployeeID = Auth::user()->getempid();
            $tasks = DB::table('onboardingtasks')
                ->leftJoin('employees', 'employee', '=', 'employees.id')
                ->select('onboardingtasks.*','employees.name')
                ->where('responsible_person', $nEmployeeID)
                ->get();
            return view('home', compact('tasks'));
        }
    }
}
