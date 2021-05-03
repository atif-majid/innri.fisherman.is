<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Models\Improvements;
use App\Models\Salesopportunity;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function ($view)
        {
            if(!Auth::guest())
            {
                $nCurrUserID = Auth::user()->getempid();
                $tasks = DB::table('onboardingtasks')
                    ->leftJoin('employees', 'employee', '=', 'employees.id')
                    ->leftJoin('sitesettings', 'onboardingtasks.task', '=', 'sitesettings.value')
                    ->select('onboardingtasks.*','employees.name', 'sitesettings.field')
                    ->where('responsible_person', $nCurrUserID)
                    ->whereIn('onboardingtasks.status', array('Not Started', 'In Progress'))
                    ->get();
                $Improvements = Improvements::
                where('completed', 'no')
                    ->where('assigned_to', $nCurrUserID)
                    ->get();

                $Salesopportunities = Salesopportunity::
                where('status', 'In Progress')
                    ->where('assigned_to', $nCurrUserID)
                    ->get();
                $Templates = DB::table('template_submit')
                    ->leftJoin('employees', 'user_id', '=', 'employees.id')
                    ->select('template_submit.*','employees.name')
                    ->where('supervisor', $nCurrUserID)
                    ->where('reviewed', '=', 'no')
                    ->orderBy('submit_date', 'desc')
                    ->get();
                $nSumAll = count($tasks) + count($Improvements) + count($Salesopportunities) + count($Templates);


                $view->with('header_tasks', $tasks )
                    ->with('header_Improvements', $Improvements)
                    ->with('header_Salesopportunities', $Salesopportunities)
                    ->with('header_templates', $Templates)
                    ->with('header_sumall', $nSumAll);
            }
        });
    }
}
