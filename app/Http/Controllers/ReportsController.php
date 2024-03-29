<?php

namespace App\Http\Controllers;


use App\Models\Menu;
use App\Models\Templatesubmit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Templatesubmitfields;
use App\Models\Employees;
use App\Models\Templates;
use App\Models\Visitors;

class ReportsController extends Controller
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
    //
    public function index()
    {
        //
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            //$templates = Templates::all();
            //return view('templates.index', compact('templates'));
            $templatesubmit = Templatesubmit::leftJoin('employees as m1', 'm1.id', '=', 'template_submit.supervisor')
                ->leftJoin('employees as m2', 'm2.id', '=', 'template_submit.user_id')
                ->select(['template_submit.id', 'template_submit.template_title', 'template_submit.template_version', 'template_submit.submit_date',
                    'm1.name as supervisor', 'm2.name as employeename'])
                ->where('template_submit.nChild', NULL)
                //->orderBy('submit_date', 'desc')
                ->get();

            $parentSubmissions = Templatesubmit::whereNotNull('nChild')->get();
            $arrParents = array();
            foreach($parentSubmissions as $thisSubmission)
            {
                $nParentID = $thisSubmission->id;
                $nChildID = $thisSubmission->nChild;
                $arrParents["$nChildID"] = $nParentID;
            }


            $arrSupervisors = array();
            $distincSup = Templates::get()->unique('supervisor');
            foreach($distincSup as $sup)
            {
                array_push($arrSupervisors, $sup->supervisor);
            }
            $supervisors = Employees::whereIn('id', $arrSupervisors)->orderBy('name')->get();
            $employees = Employees::where('status', 'active')->orderBy('name')->get();
            $templates = Templates::orderBy('title')->get();
            $visitors = Visitors::all();
            $strEmpDesignation = Auth::user()->getempdesignation();
            /*$objChef = Employees::where('designation', 'Chef')->first();
            $strChefName = $objChef->name;*/

            $nWeek = date("W");
            $nYear = date("Y");
            $arrNextWeek = MenuController::getStartAndEndDate($nWeek+1, $nYear);
            $strNextWeekEndDate = $arrNextWeek['week_end'];
            $allFoodOrders = DB::table('menu')
                ->leftJoin('employees', 'updated_by', '=', 'employees.id')
                ->select('menu.*','employees.name')
                ->where('menu.date', '<=', $strNextWeekEndDate)
                ->get();


            return view('reports.index', compact('templatesubmit', 'employees', 'supervisors', 'templates', 'visitors', 'strEmpDesignation', 'allFoodOrders', 'arrParents'));
        }
    }

    public function show(int $nSubmitID)
    {
        //DB::enableQueryLog();
        /*$templatesubmit = Templatesubmit::leftJoin('employees as m1', 'm1.id', '=', 'template_submit.supervisor')
            ->leftJoin('employees as m2', 'm2.id', '=', 'template_submit.user_id')
            ->select(['template_submit.id', 'template_submit.template_title', 'template_submit.template_version', 'template_submit.submit_date',
                'm1.name as employeename', 'm2.name as supervisor'])
            ->where('template_submit.id', $nSubmitID);
        print_r($templatesubmit->getBindings() );*/

        $templatesubmit = DB::table('template_submit')
            ->leftJoin('employees as m1', 'm1.id', '=', 'template_submit.supervisor')
            ->leftJoin('employees as m2', 'm2.id', '=', 'template_submit.user_id')
            ->select(['template_submit.id', 'template_submit.template_title', 'template_submit.template_version', 'template_submit.submit_date',
                'template_submit.with_checkboxes', 'template_submit.comments', 'template_submit.instruction', 'template_submit.supervisor_comment','m1.name as supervisor', 'm2.name as employeename'])
            ->where('template_submit.id', $nSubmitID)
            ->first();
        //dd(DB::getQueryLog());
         //   ->toSql();

        $templatesubmitfields = Templatesubmitfields::where('template_submit_id', $nSubmitID)->get();
        return view('reports.show', compact('templatesubmit', 'templatesubmitfields'));
    }

    public function showvisitor(int $nVisitorID)
    {
        $visitor = Visitors::where('id', $nVisitorID)->first();

        return view('reports.showvisitor', compact('visitor'));
    }

    public function showfoodorder($strDate)
    {
        //$foodorders = Foodorder::where('fordate', $strDate)->get();
        $foodorders = DB::table('foodorder')
            ->leftJoin('employees', 'emp_id', '=', 'employees.id')
            ->select('foodorder.*', 'employees.name')
            ->where('foodorder.fordate', $strDate)
            ->get();
        $menu = Menu::where('date', $strDate)->get();
        $strDateDisplay = date("d-m-Y", strtotime($strDate));
        $strFishCourse = "";
        $strMeatCourse = "";
        foreach($menu as $thismenu)
        {
            $strFishCourse = $thismenu->fish_course;
            $strMeatCourse = $thismenu->meat_course;
        }

        $nFishOrders = 0;
        $nMeatOrders = 0;
        foreach ($foodorders as $foodorder)
        {
            $nFishOrders += $foodorder->fish_course;
            $nMeatOrders += $foodorder->meat_course;
        }
        return view('reports.showfoodorder', compact('foodorders', 'strFishCourse',
            'strMeatCourse', 'strDateDisplay', 'nFishOrders', 'nMeatOrders'));
    }
}
