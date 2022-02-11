<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Foodorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();
        $arrDate = $data['strDate'];
        $arrMainCourse = $data['strMainMenu'];
        $arrVegetarian = $data['strVegetarian'];
        for($i=0; $i<count($arrDate);$i++)
        {
            $strDate = $arrDate[$i];
            $strMainCourse = $arrMainCourse[$i];
            $strVegetarian = $arrVegetarian[$i];

            $record = Menu::where('date', $strDate)->get();
            $nRecord = $record->count();
            $arrData = array();
            $arrData['updated_by'] = Auth::user()->getempid();
            $arrData['updated_on'] = date("Y-m-d H:i:s");
            $arrData['updated_on'] = date("Y-m-d H:i:s");

            if(trim($strMainCourse)!="")
            {
                $arrData['main_course'] = $strMainCourse;
            }
            if(trim($strVegetarian)!="")
            {
                $arrData['vegetarian'] = $strVegetarian;
            }
            if($nRecord==0)
            {
                $arrData['date'] = $strDate;
                Menu::create($arrData);
            }
            else{
                Menu::where('date', $strDate)->update($arrData);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }

    public function order(Request $request)
    {
        $arrDate = $request->strDate;
        $nOrderDay = 0;
        $arrPost = $request->all();
        $nEmpID = Auth::user()->getempid();
        foreach ($arrDate as $thisDate) {
            $variableName = $thisDate."_order";
            if(isset($arrPost["$variableName"]))
            {
                //echo $variableName." - ".$arrPost["$variableName"]."<br>";
                $record = Foodorder::where('fordate', $thisDate)
                    ->where('emp_id', $nEmpID)
                    ->get();
                $nRecord = $record->count();

                $arrInsert = array(
                    'emp_id'=>$nEmpID,
                    'fordate'=>$thisDate,
                    'item'=>$arrPost["$variableName"],
                    'orderdate'=>date("Y-m-d H:i:s"));
                if($nRecord==0)
                {
                    Foodorder::create($arrInsert);
                }
                else{
                    Foodorder::where('fordate', $thisDate)
                        ->where('emp_id', $nEmpID)
                        ->update($arrInsert);
                }
                $nOrderDay++;
            }
        }
        if($nOrderDay==0)
        {
            echo $nOrderDay;
        }
        else {
            echo "Your order has been submitted";
        }
    }
}
