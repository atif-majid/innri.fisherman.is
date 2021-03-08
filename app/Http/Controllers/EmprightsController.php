<?php

namespace App\Http\Controllers;

use App\Models\Departmentrights;
use App\Models\Employees;
use App\Models\Employeerights;
use Illuminate\Http\Request;

class EmprightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function index()
    {
        //
        $arrPages = $this->arrPages;
        $deptRightsFromDB = Departmentrights::all();
        $deptRights = array();
        foreach ($deptRightsFromDB as $row)
        {
            $strKey = $row->department."-".$row['routename'];
            $deptRights["$strKey"] = array("id"=>$row->id, "rights"=>$row['rights']);
        }
        $Employees = Employees::where('status', 'active')
            //->where('id', '!=', 9)
            ->get();
        $empRightsFromDB = Employeerights::all();
        $empRights = array();
        foreach ($empRightsFromDB as $row)
        {
            $strKey = $row->emp_id."-".$row->routename;
            $empRights["$strKey"] = array("id"=>$row->id, "rights"=>$row['rights']);
        }
        return view('emprights.index',compact('deptRights', 'arrPages', 'Employees', 'empRights'));
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
        $arrPages = $this->arrPages;
        $Employees = $request->employees;
        for($i=0; $i<count($Employees); $i++)
        {
            $nEmpID = $Employees[$i];
            foreach ($arrPages as $key=>$val)
            {
                $strKey = $nEmpID."-".$key;
                $arrInsert = array(
                    'emp_id'=>$nEmpID,
                    'routename'=>$key,
                    'rights'=>$request->$strKey
                );
                $strIDKey = $nEmpID."-".$key."-id";
                if(array_key_exists($strIDKey, $request->all())) {
                    $nID = $request->all()["$strIDKey"];
                    Employeerights::find($nID)->update($arrInsert);
                }
                else
                {
                    Employeerights::create($arrInsert);
                }

            }
        }
        return redirect()->route('emprights.index')
            ->with('success','Department rights updated successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employeerights  $employeerights
     * @return \Illuminate\Http\Response
     */
    public function show(Employeerights $employeerights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employeerights  $employeerights
     * @return \Illuminate\Http\Response
     */
    public function edit(Employeerights $employeerights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employeerights  $employeerights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employeerights $employeerights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employeerights  $employeerights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employeerights $employeerights)
    {
        //
    }
}
