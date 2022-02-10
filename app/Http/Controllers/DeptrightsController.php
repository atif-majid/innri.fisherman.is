<?php

namespace App\Http\Controllers;

use App\Models\Departmentrights;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeptrightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $arrDepartments = array(
        "distribution" => "Distribution",
        "production_suðureyri" => "Production Suðureyri",
        "production_hafnarfjörður" => "Production Hafnarfjörður",
        "service_center" => "Service center",
        "service_center_suðureyri" => "Service center - Suðureyri",
        "sudureyri_vinnsla" => "Suðureyri- vinnsla",
        "travel_service" => "Travel service"
    );

    protected $arrPages = array(
        "recipes" => "Recipes",
        "today_production" => "Today's Production",
        "reception_surveillance" => "Reception Surveillance",
        "consistency_claims" => "Consistency Claims",
        "certificate_permits" => "Certificate and permits",
        "templates" => "Templates",
        "improvements" => "Improvements",
        "education_news" => "Education & News",
        "marketing_sales" => "Marketing and Sales",
        "employees_directory" => "Employees Directory",
        "site_settings" => "Site Settings"
    );

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

    public function index()
    {
        $arrDepartments = $this->arrDepartments;
        $arrPages = $this->arrPages;
        $deptRightsFromDB = Departmentrights::all();
        $deptRights = array();
        foreach ($deptRightsFromDB as $row)
        {
            $strKey = $row->department."-".$row['routename'];
            $deptRights["$strKey"] = array("id"=>$row->id, "rights"=>$row['rights']);
        }
        return view('deptrights.index',compact('deptRights', 'arrDepartments', 'arrPages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $arrDepartments = $this->arrDepartments;
        $arrPages = $this->arrPages;
        foreach ($arrDepartments as $thisDeptkey=>$thisDeptval)
        {
            foreach ($arrPages as $key=>$val)
            {
                $strFieldName = $thisDeptkey."-".$key;
                $arrInsert = array(
                    "department"=>$thisDeptkey,
                    "routename"=>$key,
                    "rights"=>$request->all()["$strFieldName"]
                );
                $strIDKey = $thisDeptkey."-".$key."-id";
                if(array_key_exists($strIDKey, $request->all()))
                {
                    $nID = $request->all()["$strIDKey"];
                    Departmentrights::find($nID)->update($arrInsert);
                }
                else
                {
                    Departmentrights::create($arrInsert);
                }

            }
        }
        return redirect()->route('deptrights.index')
            ->with('success','Department rights updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departmentrights  $departmentrights
     * @return \Illuminate\Http\Response
     */
    public function show(Departmentrights $departmentrights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departmentrights  $departmentrights
     * @return \Illuminate\Http\Response
     */
    public function edit(Departmentrights $departmentrights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departmentrights  $departmentrights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departmentrights $departmentrights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departmentrights  $departmentrights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departmentrights $departmentrights)
    {
        //
    }
}
