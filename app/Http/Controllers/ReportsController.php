<?php

namespace App\Http\Controllers;

use App\Models\Templatesubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Templatesubmitfields;
use App\Models\Employees;
use App\Models\Templates;

class ReportsController extends Controller
{
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
                //->orderBy('submit_date', 'desc')
                ->get();
            $arrSupervisors = array();
            $distincSup = Templates::get()->unique('supervisor');
            foreach($distincSup as $sup)
            {
                array_push($arrSupervisors, $sup->supervisor);
            }
            $supervisors = Employees::whereIn('id', $arrSupervisors)->orderBy('name')->get();
            $employees = Employees::where('status', 'active')->orderBy('name')->get();
            $templates = Templates::orderBy('title')->get();
            return view('reports.index', compact('templatesubmit', 'employees', 'supervisors', 'templates'));
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
                'm1.name as supervisor', 'm2.name as employeename'])
            ->where('template_submit.id', $nSubmitID)
            ->first();
        //dd(DB::getQueryLog());
         //   ->toSql();

        $templatesubmitfields = Templatesubmitfields::where('template_submit_id', $nSubmitID)->get();
        return view('reports.show', compact('templatesubmit', 'templatesubmitfields'));
    }
}
