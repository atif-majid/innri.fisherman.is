<?php

namespace App\Http\Controllers;

use App\Models\Improvements;
use App\Models\Employees;
use App\Models\Improvementsnotifications;
use App\Models\Recipes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImprovementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Improvements = DB::table('improvements')
            ->leftJoin('employees', 'assigned_to', '=', 'employees.id')
            ->select('improvements.*','employees.name')
            ->get();
        return view('improvements.index', compact('Improvements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employees = Employees::all();
        $recipes = Recipes::all();
        return view('improvements.create', compact('employees', 'recipes'));
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
        /*$arrNotifications = $request->all('chkNotification')['chkNotification'];
        echo $arrNotifications[0];*/
        $request->validate([
            'strWhoNotified' => 'required',
            'strPhoneNumber' => 'sometimes',
            'strEmail' => 'sometimes',
            'strProduct'=> 'sometimes',
            'strProductionLocation' => 'sometimes',
            'strSupplier' => 'sometimes',
            'strWhereSold' => 'sometimes',
            'strDateOfPurchase' => 'sometimes',
            'strLotNr' => 'sometimes',
            'strDescription' => 'sometimes',
            'nAssignedTo' => 'sometimes',
            'strResponse' => 'sometimes'
        ],
            [
                'strWhoNotified.required' => 'Name of notifying person is required',
                'strPhoneNumber.required' => 'Phone number is required',
                'strEmail.required' => 'Email address is required',
                'strProduct.required' => 'Product is required',
                'strProductionLocation.required' => 'Please provide production location',
                'strSupplier.required' => 'Please chose Supplier',
                'strWhereSold.required' => 'Please select sold location',
                'strDateOfPurchase.required' => 'Please provide date of purchase',
                'strLotNr.required' => 'Lot number is required',
                'strDescription.required' => 'Complain description is required',
                'nAssignedTo.required' => 'Please select who will work on this improvement?',
                'strResponse.required' => 'Response is required'
            ]
        );

        $strCurrentUserEmail = Auth::user()->email;
        $objCurrentEmployee = Employees::where('email',$strCurrentUserEmail)->first();
        if($objCurrentEmployee)
        {
            $nEmployeeID = $objCurrentEmployee->id;
        }
        else
        {
            $nEmployeeID = Auth::user()->id;
        }
        //
        $arrImpmrovement = array(
            'complainer'=> $request->strWhoNotified,
            'phonenumber' => $request->phonenumber,
            'email' => $request->strEmail,
            'product' => $request->strProduct,
            'production_location' => $request->strProductionLocation,
            'supplier' => $request->strSupplier,
            'selling_location' => $request->strWhereSold,
            'purchase_date' => $request->strDateOfPurchase,
            'lot_nr' => $request->strLotNr,
            'description' => $request->strDescription,
            'assigned_to' => $request->nAssignedTo,
            'response_improvements' => $request->strResponse,
            'complain_creation_date' => date("Y-m-d H:i:s"),
            'complain_created_by' => $nEmployeeID
        );

        $improvement = Improvements::create($arrImpmrovement);
        $nImprovementID = $improvement->id;
        $arrNotifications = $request->all('chkNotification')['chkNotification'];
        if(is_array($arrNotifications))
        {
            for($i=0; $i<count($arrNotifications); $i++)
            {
                $strNotification = $arrNotifications[$i];
                $arrInsert = array(
                    'improvements_id'=>$nImprovementID,
                    'notification_name'=>$strNotification
                );
                Improvementsnotifications::create($arrInsert);
            }
        }

        return redirect()->route('improvements.index')
            ->with('success','Improvement record added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Improvements  $improvements
     * @return \Illuminate\Http\Response
     */
    public function show(Improvements $improvement)
    {
        //
        $nImprovementID = $improvement->id;
        $Notifications = Improvementsnotifications::where('improvements_id', $nImprovementID)->get();
        return view('improvements.show', compact('improvement', 'Notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Improvements  $improvements
     * @return \Illuminate\Http\Response
     */
    public function edit(Improvements $improvements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Improvements  $improvements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Improvements $improvements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Improvements  $improvements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Improvements $improvements)
    {
        //
    }
}
