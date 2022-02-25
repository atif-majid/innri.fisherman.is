<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Foodorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;


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
        /*$week_array = $this->getStartAndEndDate(52,2022);
        echo "<pre>";
        print_r($week_array);
        echo "<pre>";*/
        return view('menu.index');
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
        $arrFishCourse = $data['strFishCourse'];
        $arrMeatCourse = $data['strMeatCourse'];
        for($i=0; $i<count($arrDate);$i++)
        {
            $strDate = $arrDate[$i];
            $strFish = $arrFishCourse[$i];
            $strMeat = $arrMeatCourse[$i];

            $record = Menu::where('date', $strDate)->get();
            $nRecord = $record->count();
            $arrData = array();
            $arrData['updated_by'] = Auth::user()->getempid();
            $arrData['updated_on'] = date("Y-m-d H:i:s");
            $arrData['updated_on'] = date("Y-m-d H:i:s");

            if(trim($strFish)!="")
            {
                $arrData['fish_course'] = $strFish;
            }
            if(trim($strMeat)!="")
            {
                $arrData['meat_course'] = $strMeat;
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
        $arrPost = $request->all();
        $nEmpID = Auth::user()->getempid();
        $arrDate = $request->arrDate;
        foreach ($arrDate as $thisDate)
        {
            $arrInsert = array(
                'emp_id'=>$nEmpID,
                'fordate'=>$thisDate,
                'fish_course'=>$arrPost["nOrder_Fish_$thisDate"],
                'meat_course'=>$arrPost["nOrder_Meat_$thisDate"],
                'orderdate'=>date("Y-m-d H:i:s")
            );
            if(!empty($arrPost["strComment_$thisDate"]))
            {
                $arrInsert['comments'] = $arrPost["strComment_$thisDate"];
            }
            $record = Foodorder::where('fordate', $thisDate)
                ->where('emp_id', $nEmpID)
                ->get();
            $nRecord = $record->count();
            if($nRecord==0)
            {
                Foodorder::create($arrInsert);
            }
            else{
                Foodorder::where('fordate', $thisDate)
                    ->where('emp_id', $nEmpID)
                    ->update($arrInsert);
            }
        }
    }

    public function getweeklymenu(Request $request)
    {
        $nWeek = $request->nWeek;
        $nYear = date("Y");
        $arrDates = $this->getStartAndEndDate($nWeek, $nYear);
        $strStartDate = $arrDates['week_start'];
        $strEndDate = $arrDates['week_end'];
        $arrMenuItems = array();
        $nMenuCount = 0;
        for($i=0; $i<7; $i++)
        {
            $strDate = date("Y-m-d", strtotime($strStartDate." +$i days"));
            $arrMenuItems["$strDate"] = array("fish_course"=>"", 'meat_course'=>"");
        }
        //echo $strStartOfNextWeek."<br>".$strEndOfNextWeek;
        //exit;
        //if($strEmpDesignation=="Chef")
        //{
        $allMenu = Menu::where('date', '>=', $strStartDate)->where('date', '<=', $strEndDate)->get();

        foreach ($allMenu as $thisMenu)
        {
            $strDate = $thisMenu->date;
            $strMainCourse = $thisMenu->fish_course;
            $strVegetarian = $thisMenu->meat_course;
            $arrMenuItems["$strDate"] = array("fish_course"=>$strMainCourse, 'meat_course'=>$strVegetarian);
            $nMenuCount++;
        }
        return view('menu.getweeklymenu', compact('arrMenuItems'));
    }

    public static function getStartAndEndDate($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('Y-m-d');
        $dto->modify('+6 days');
        $ret['week_end'] = $dto->format('Y-m-d');
        return $ret;
    }
}
