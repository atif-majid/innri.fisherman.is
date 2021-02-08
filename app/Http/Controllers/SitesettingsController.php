<?php

namespace App\Http\Controllers;

use App\Models\Sitesettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SitesettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $sitesettings = Sitesettings::all();
            return view('sitesettings.index', compact('sitesettings'));
        }

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
        $arrNotifications = $request->Notifications;
        $arrProductionSites = $request->ProductionSites;
        $arrSuppliers = $request->Suppliers;
        $arrSellingLocations = $request->SellingLocations;
        $arrUpdatedSettings = array();
        if(is_array($arrNotifications))
        {
            foreach ($arrNotifications as $notification)
            {
                $strTitle = $notification['strNotificationType'];
                if(isset($notification['nID']) && $notification['nID']>0)
                {
                    $nID = $notification['nID'];
                    $arrUpdate = array(
                        "value"=>$strTitle
                    );
                    Sitesettings::find($nID)->update($arrUpdate);
                    $arrUpdatedSettings[] = $nID;
                }
                else if(trim($strTitle)!="")
                {
                    $arrInsert = array(
                        "field"=>"Notification",
                        "value"=>$strTitle
                    );
                    Sitesettings::create($arrInsert);
                }
            }
        }

        if(is_array($arrProductionSites))
        {
            foreach ($arrProductionSites as $productionsite)
            {
                $strTitle = $productionsite['strProductionSite'];
                if(isset($productionsite['nID']) && $productionsite['nID']>0)
                {
                    $nID = $productionsite['nID'];
                    $arrUpdate = array(
                        "value"=>$strTitle
                    );
                    Sitesettings::find($nID)->update($arrUpdate);
                    $arrUpdatedSettings[] = $nID;
                }
                else if(trim($strTitle)!="")
                {
                    $arrInsert = array(
                        "field"=>"ProductionSite",
                        "value"=>$strTitle
                    );
                    Sitesettings::create($arrInsert);
                }

            }
        }

        if(is_array($arrSuppliers))
        {
            foreach ($arrSuppliers as $suppliers)
            {
                $strTitle = $suppliers['strSupplierName'];
                if(isset($suppliers['nID']) && $suppliers['nID']>0)
                {
                    $nID = $suppliers['nID'];
                    $arrUpdate = array(
                        "value"=>$strTitle
                    );
                    Sitesettings::find($nID)->update($arrUpdate);
                    $arrUpdatedSettings[] = $nID;
                }
                else if(trim($strTitle)!="")
                {
                    $arrInsert = array(
                        "field"=>"SupplierName",
                        "value"=>$strTitle
                    );
                    Sitesettings::create($arrInsert);
                }
            }
        }

        if(is_array($arrSellingLocations))
        {
            foreach ($arrSellingLocations as $sellinglocation)
            {
                $strTitle = $sellinglocation['strSellingSite'];
                if(isset($sellinglocation['nID']) && $sellinglocation['nID']>0)
                {
                    $nID = $sellinglocation['nID'];
                    $arrUpdate = array(
                        "value"=>$strTitle
                    );
                    Sitesettings::find($nID)->update($arrUpdate);
                    $arrUpdatedSettings[] = $nID;
                }
                else if(trim($strTitle)!="")
                {
                    $arrInsert = array(
                        "field"=>"SellingSite",
                        "value"=>$strTitle
                    );
                    Sitesettings::create($arrInsert);
                }
            }
        }
        $deletedsettings = $request->deletedsettings;
        if(trim($deletedsettings)!="")
        {
            $arrDeletedSettings = explode(",", $deletedsettings);
            for($i=0; $i<count($arrDeletedSettings); $i++)
            {
                $nCurrDelete = $arrDeletedSettings[$i];
                if(!in_array($nCurrDelete, $arrUpdatedSettings))
                {
                    Sitesettings::find($nCurrDelete)->delete();
                }
            }
        }

        return redirect()->route('sitesettings.index')
            ->with('success','Settings updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sitesettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function show(Sitesettings $sitesettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitesettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function edit(Sitesettings $sitesettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitesettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitesettings $sitesettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitesettings  $sitesettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitesettings $sitesettings)
    {
        //
    }

    public function onboardingsections()
    {
        $onboardingsection = Sitesettings::where('field', 'OnBoardingSection')->get();
        return view('sitesettings.onboardingsections', compact('onboardingsection'));
    }

    public function storeonboardingcategories(Request $request)
    {
        $arrOnBoardingCategory = $request->OnBoardingCategory;
        $arrEdited = array();
        foreach ($arrOnBoardingCategory as $thisCategory)
        {
            if($thisCategory['strCategoryTitle']!=""){
                $arrData = array(
                    "field"=>"OnBoardingSection",
                    "value"=>$thisCategory['strCategoryTitle']
                );
                if(isset($thisCategory['nID']) && $thisCategory['nID']>0)
                {
                    $nID = $thisCategory['nID'];
                    Sitesettings::find($nID)->update($arrData);
                    $arrEdited[] = $nID;
                }
                else
                {
                    Sitesettings::create($arrData);
                }
            }

        }
        $deletedsettings = $request->deletedsettings;
        if(trim($deletedsettings)!="")
        {
            $arrDeletedSettings = explode(",", $deletedsettings);
            for($i=0; $i<count($arrDeletedSettings); $i++)
            {
                $nCurrDelete = $arrDeletedSettings[$i];
                if(!in_array($nCurrDelete, $arrEdited))
                {
                    Sitesettings::find($nCurrDelete)->delete();
                }
            }
        }
        return redirect()->route('sitesettings.onboardingsections')
            ->with('success','Onboarding categories added successfully.');
    }

    public function onboardingtasks()
    {
        $onboardingsection = Sitesettings::where('field', 'OnBoardingSection')->get();
        $arrTasks = array();
        foreach ($onboardingsection as $thisSection)
        {
            $strSectionKey = str_replace(" ", "_", $thisSection['value']);
            $onBoardingTasks = Sitesettings::where('field', $strSectionKey)->get();
            $arrTasks["$strSectionKey"] = $onBoardingTasks;
        }
        return view('sitesettings.onboardingtasks', compact('onboardingsection', 'arrTasks'));
    }

    public function storeonboardingtasks(Request $request)
    {
        $onboardingsection = Sitesettings::where('field', 'OnBoardingSection')->get();
        $arrEdited = array();
        foreach ($onboardingsection as $thisSection) {
            $strSectionKey = str_replace(" ", "_", $thisSection['value']);
            $arrData = $request->$strSectionKey;
            foreach($arrData as $thisTask)
            {
                if(!empty($thisTask['strCategoryTitle'])) {
                    $arrRecord = array(
                        "field" => $strSectionKey,
                        "value" => $thisTask['strCategoryTitle']
                    );
                    if (isset($thisTask['nID']) && $thisTask['nID'] > 0) {
                        $nID = $thisTask['nID'];
                        Sitesettings::find($nID)->update($arrRecord);
                        $arrEdited[] = $nID;
                    }
                    else
                    {
                        Sitesettings::create($arrRecord);
                    }
                }
            }
        }
        $deletedsettings = $request->deletedsettings;
        if(trim($deletedsettings)!="")
        {
            $arrDeletedSettings = explode(",", $deletedsettings);
            for($i=0; $i<count($arrDeletedSettings); $i++)
            {
                $nCurrDelete = $arrDeletedSettings[$i];
                if(!in_array($nCurrDelete, $arrEdited))
                {
                    Sitesettings::find($nCurrDelete)->delete();
                }
            }
        }
        return redirect()->route('sitesettings.onboardingtasks')
            ->with('success','Onboarding tasks added successfully.');
    }
}
