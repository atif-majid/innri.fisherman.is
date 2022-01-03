<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('visitors.index');
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
        /*$request->validate(
            [
                'strFullName' => 'required',
                'strCompanyInvited' => 'required',
                'strCompany' => 'required',
                'strPurpose' => 'required'
            ],
            [
                'strFullName.required' => 'Please provide full name',
                'strCompanyInvited.required' => 'Please chose if you are invited or just visiting',
                'strCompany.required' => 'Please provide company name',
                'strPurpose.required' => 'Please chose purpose of visit'
            ]
        );*/
        $arrErrors = array();
        if(!$request->strFullName)
        {
            $arrErrors[] = "Please enter your name!";
        }
        if(!$request->strStatus)
        {
            $arrErrors[] = "Please chose if you have been invited or just visiting";
        }
        if(!$request->strCompany)
        {
            $arrErrors[] = "Please provide company name";
        }
        if(!$request->strPurpose)
        {
            $arrErrors[] = "Please chose purpose of visit";
        }
        if($request->strPurpose=='Other' && !$request->strReason)
        {
            $arrErrors[] = "Please provide reason for visit";
        }
        if(empty($arrErrors))
        {
            //Store in db
            $arrData = array(
                'fullname'=>$request->strFullName,
                'status'=>$request->strStatus,
                'company'=>$request->strCompany,
                'purpose'=>$request->strPurpose,
                'visit_date_time'=>date("Y-m-d H:i:s")
            );
            if($request->strPurpose=='Other')
            {
                $arrData['purpose_other'] = $request->strReason;
            }
            Visitors::create($arrData);
            echo "Data recorded successfully";
        }
        else{
            for($i=0;$i<count($arrErrors);$i++)
            {
                echo $arrErrors[$i]."<br>";
            }
        }
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function show(Visitors $visitors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitors $visitors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitors $visitors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitors $visitors)
    {
        //
    }
}
