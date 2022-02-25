<?php

namespace App\Http\Controllers;

use App\Models\Foodorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Improvements;
use App\Models\Salesopportunity;
use App\Models\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $strStatus = Auth::user()->getempStatus();
            if($strStatus=='inactive')
            {
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
            }
            else
            {
                return $next($request);
            }

        });
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
            $strEmpDesignation = Auth::user()->getempdesignation();

            $strToday = date("Y-m-d");
            $nDayOfWeekToday = date("N", strtotime($strToday));
            $nDaysToNextWeek = 7-$nDayOfWeekToday+1;
            $strStartOfNextWeek = date("Y-m-d", strtotime($strToday." +".$nDaysToNextWeek." days"));
            $strEndOfNextWeek = date("Y-m-d", strtotime($strStartOfNextWeek." +6 days"));
            $arrMenuItems = array();
            $nMenuCount = 0;
            for($i=0; $i<7; $i++)
            {
                $strDate = date("Y-m-d", strtotime($strStartOfNextWeek." +$i days"));
                $arrMenuItems["$strDate"] = array("fish_course"=>"", 'meat_course'=>"");
                $nZero = 0;
                $arrOrders["$strDate"] = array('fish_course'=>$nZero, 'meat_course'=>$nZero, 'comment'=>'');
            }
            //echo $strStartOfNextWeek."<br>".$strEndOfNextWeek;
            //exit;
            //if($strEmpDesignation=="Chef")
            //{
            $allMenu = Menu::where('date', '>=', $strStartOfNextWeek)->where('date', '<=', $strEndOfNextWeek)->get();
            foreach ($allMenu as $thisMenu)
            {
                $strDate = $thisMenu->date;
                $strFishCourse = $thisMenu->fish_course;
                $strMeatCourse = $thisMenu->meat_course;
                $arrMenuItems["$strDate"] = array("fish_course"=>$strFishCourse, 'meat_course'=>$strMeatCourse);
                $nMenuCount++;


            }
            //}
            $foodorders = Foodorder::where('fordate','>=', $strStartOfNextWeek)
                ->where('fordate', '<=', $strEndOfNextWeek)
                ->where('emp_id', $nEmployeeID)
                ->get();

            foreach ($foodorders as $order)
            {
                $strOrderDate = $order->fordate;
                $arrOrders["$strOrderDate"] = array('fish_course'=>$order->fish_course,
                    'meat_course'=>$order->meat_course, 'comment'=>$order->comments);
            }
            //$nMenuCount = 0;


            return view('home', compact('tasks', 'Improvements', 'Salesopportunities', 'strEmpDesignation', 'arrMenuItems', 'arrOrders', 'nMenuCount'));
        }
    }
}
