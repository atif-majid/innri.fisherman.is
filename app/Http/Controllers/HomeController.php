<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Improvements;
use App\Models\Salesopportunity;

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
            if($nEmployeeID==9)
            {
                $tasks = DB::table('onboardingtasks')
                    ->leftJoin('employees', 'employee', '=', 'employees.id')
                    ->leftJoin('sitesettings', 'onboardingtasks.task', '=', 'sitesettings.value')
                    ->select('onboardingtasks.*','employees.name', 'sitesettings.field')
                    ->whereIn('onboardingtasks.status', array('Not Started', 'In Progress'))
                    //->where('responsible_person', $nEmployeeID)
                    ->get();
                $Improvements = Improvements::
                    where('completed', 'no')
                        //->where('assigned_to', $nEmployeeID)
                        ->get();

                $Salesopportunities = Salesopportunity::
                    where('status', 'In Progress')
                    ->get();
            }
            else
            {
                $tasks = DB::table('onboardingtasks')
                    ->leftJoin('employees', 'employee', '=', 'employees.id')
                    ->leftJoin('sitesettings', 'onboardingtasks.task', '=', 'sitesettings.value')
                    ->select('onboardingtasks.*','employees.name', 'sitesettings.field')
                    ->where('responsible_person', $nEmployeeID)
                    ->whereIn('onboardingtasks.status', array('Not Started', 'In Progress'))
                    ->get();
                $Improvements = Improvements::
                    where('completed', 'no')
                    ->where('assigned_to', $nEmployeeID)
                    ->get();

                $Salesopportunities = Salesopportunity::
                    where('status', 'In Progress')
                    ->where('assigned_to', $nEmployeeID)
                    ->get();
            }

            return view('home', compact('tasks', 'Improvements', 'Salesopportunities'));
        }
    }
}
