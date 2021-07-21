<?php

namespace App\Http\Controllers;

use App\Models\Employeerights;
use App\Models\Employees;
use App\Models\User;
use App\Models\Onboarding;
use App\Models\Sitesettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class EmployeesController extends Controller
{
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

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $strFullRoute = request()->route()->getActionName();
            $strAcionName = substr($strFullRoute, strpos($strFullRoute, "@")+1);
            $arrAllowedPages = array(
                "View"=>array('index', 'show'),
                "Edit"=>array("index", "create", "store", "show", "edit","update", "destroy","empajaxRequestStore", "empajaxRequestPicture"),
                "Admin"=>array("index", "create", "store", "show", "edit", "update", "destroy",
                    "empajaxRequestStore", "empajaxRequestPicture", "onboarding", "storeonboarding",
                    "updateonboardstatus", "outstandingitems"),
                "No Access"=>array("none")
            );

            $nCurrUserID = Auth::user()->getempid();
            $objRights = Employeerights::
            where('emp_id', $nCurrUserID)
                ->where('routename','employees_directory')
                ->get();
            $bShowTarget = false;
            if(!$objRights->isEmpty())
            {
                $strRight = $objRights[0]->rights;
                $arrRightPages = $arrAllowedPages["$strRight"];
                if($strRight=='Admin')
                {
                    $bShowTarget = true;
                }
                else
                {
                    if(in_array($strAcionName, $arrRightPages))
                    {
                        $bShowTarget = true;
                    }
                }
            }
            if($bShowTarget)
            {
                return $next($request);
            }
            else
            {
                return Redirect::back()->withErrors(['User rights need to be added in order to perform this action.']);
            }
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$employees = Employees::paginate(10);
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $employees = Employees::all();

            return view('employees.index',compact('employees'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('employees.create');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'direct_phone' => 'required',
            'gsm' => 'required',
            'userlevel' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'h_number' => 'required',
            'id_number' => 'required'
        ]);

        $objEmp = Employees::create($request->all());
        $nEmpID = $objEmp->id;
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('fisherman123'),
        ]);

        foreach ($this->arrPages as $key=>$val)
        {
            $arrInsert = array(
                'emp_id'=>$nEmpID,
                'routename'=>$key,
                'rights'=>"No Access"
            );
            Employeerights::create($arrInsert);
        }

        return redirect()->route('employees.index')
            ->with('success','Employee added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employee)
    {
        //
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employees $employee)
    {
        //
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employee)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'direct_phone' => 'required',
            'gsm' => 'required',
            'userlevel' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'h_number' => 'required',
            'id_number' => 'required'
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success','Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employee)
    {
        //
        /*$employee->delete();
        return redirect()->route('employees.index')
            ->with('success','Employee deleted successfully.');*/
        return redirect()->route('employees.index');
    }

    /**
     * Toggle employee status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function empajaxRequestStore(Request $request)
    {
        $arrValidVal = array('active', 'inactive');
        $nEmpID = $request->id;
        $strNewStatus = $request->newstatus;
        if(is_numeric($nEmpID) && $nEmpID>0 && in_array($strNewStatus, $arrValidVal))
        {
            $arrUpdate = array(
                'status'=>$strNewStatus
            );
            $objEmployee = Employees::find($nEmpID);
            Employees::find($nEmpID)->update($arrUpdate);
            $strEmail = $objEmployee->email;

            $objUsers = User::where('email', $strEmail)->get();
            if(count($objUsers)==1)
            {
                $objUser = $objUsers[0];
                $nUserID = $objUser->id;
                if($nUserID>0)
                {
                    if($strNewStatus=='active')
                    {
                        $arrUpdateUser = array(
                            'active'=>1
                        );
                    }
                    else{
                        $arrUpdateUser = array(
                            'active'=>0
                        );
                    }

                    $updateUser = User::find($nUserID)->update($arrUpdateUser);
                }
            }
        }
    }

    public function empajaxRequestPicture(Request $request)
    {
        /*echo "<pre>";
        print_r($_FILES);
        echo "</pre>";*/
        $request->validate([
            'file' => 'required | mimes:jpeg,jpg,png',
            'nEmpIDFIle' => 'required'
        ]);
        $file = $request->file('file');
        $nEmpIDFIle = $request->nEmpIDFIle;
        if(is_numeric($nEmpIDFIle) && $nEmpIDFIle>0)
        {
            $destination = 'uploads';
            $strFileName = "employee-".$nEmpIDFIle.".".$file->getClientOriginalExtension();
            $file->move($destination, $strFileName);
            $arrUpdate = array(
                'picture'=>$strFileName
            );
            $change = Employees::find($nEmpIDFIle)->update($arrUpdate);
        }

    }

    public function onboarding(Request $request)
    {
        $nForEmpID = $request->id;
        $forEmployee = Employees::find($nForEmpID);

        $employees = Employees::all();
        $onboarding = Onboarding::where('employee', $nForEmpID)->get();
        $arrPreset = array();
        foreach ($onboarding as $thisemponboarding)
        {
            $strKey = str_replace(" ", "_", $thisemponboarding->task);
            $arrPreset["$strKey"] = $thisemponboarding;
        }


        $onboardingsection = Sitesettings::where('field', 'OnBoardingSection')->get();
        $arrTasks = array();
        foreach ($onboardingsection as $thisSection)
        {
            $strSectionKey = str_replace(" ", "_", $thisSection['value']);
            $onBoardingTasks = Sitesettings::where('field', $strSectionKey)->get();
            $arrTasks["$strSectionKey"] = $onBoardingTasks;
        }

        $arrStatus = array("Not Started", "In Progress", "Completed");
        return view('employees.onboarding', compact('forEmployee', 'employees', 'arrPreset', 'arrTasks', 'arrStatus', 'onboardingsection'));
    }

    public function storeonboarding(Request $request)
    {
        $nForEmpID = $request->nForEmpID;
        $OnBoardingTasks = $request->OnBoardingTasks;
        foreach ($OnBoardingTasks as $task)
        {
            if($task['strTask']!="" && $task['nAssignedTo']!="" && $task['strStatus']!="" && $task['strDueDate']!="")
            {
                $arrPost = array(
                    'employee'=>$nForEmpID,
                    'task'=>$task['strTask'],
                    'assigned_by'=>Auth::user()->getempid(),
                    'assigned_datetime'=>date("Y-m-d H:i:s"),
                    'responsible_person'=>$task['nAssignedTo'],
                    'status'=>$task['strStatus'],
                    'due_date'=>$task['strDueDate']
                );
                if(isset($task['nTaskID']) && $task['nTaskID']>0)
                {
                    $nTaskID = $task['nTaskID'];
                    Onboarding::find($nTaskID)->update($arrPost);
                }
                else
                {
                    Onboarding::create($arrPost);
                }
            }

        }
        return redirect()->route("employees.onboarding", $nForEmpID)
            ->with('success','Tasks assigned successfully.');
    }

    public function updateonboardstatus(Request $request)
    {
        $arrStatus = array("Not Started", "In Progress", "Completed");
        $strNewStatus = $request->strNewStatus;
        $nID = $request->nID;
        if($nID>0 && in_array($strNewStatus, $arrStatus))
        {
            $arrUpdate = array('status'=>$strNewStatus);
            if($strNewStatus=='Completed')
            {
                $arrUpdate['task_completion_date'] = date("Y-m-d");
            }

            Onboarding::find($nID)->update($arrUpdate);
        }
    }

    public function outstandingitems()
    {
        $itemData = Onboarding::select('onboardingtasks.*', 'employees.name')
            ->join('employees', 'employees.id', '=', 'onboardingtasks.employee')
            ->where('onboardingtasks.status', 'Completed')
            ->where(function($query){
                $query->where('onboardingtasks.task', 'Laptop')
                    ->orwhere('onboardingtasks.task', 'Return laptop')
                    ->orwhere('onboardingtasks.task', 'Visa card')
                    ->orwhere('onboardingtasks.task', 'Return visa card')
                    ->orwhere('onboardingtasks.task', 'Card for gas')
                    ->orwhere('onboardingtasks.task', 'Return card for gas')
                    ->orwhere('onboardingtasks.task', 'Door/access keys')
                    ->orwhere('onboardingtasks.task', 'Return door/access keys');

            })->get();
        $arrLaptopData = array();
        $arrVisaCard = array();
        $arrGasCard = array();
        $arrDoorKeys = array();
        foreach($itemData as $data)
        {
            $nEmpName = $data['name'];
            if($data['task']=='Laptop')
            {
                $arrLaptopData["$nEmpName"]["Issue"] = $data['task_completion_date'];
            }
            else if($data['task']=='Return laptop')
            {
                $arrLaptopData["$nEmpName"]["Return"] = $data['task_completion_date'];
            }

            else if($data['task']=='Visa card')
            {
                $arrVisaCard["$nEmpName"]["Issue"] = $data['task_completion_date'];
            }
            else if($data['task']=='Return visa card')
            {
                $arrVisaCard["$nEmpName"]["Return"] = $data['task_completion_date'];
            }

            else if($data['task']=='Card for gas')
            {
                $arrGasCard["$nEmpName"]["Issue"] = $data['task_completion_date'];
            }
            else if($data['task']=='Return card for gas')
            {
                $arrGasCard["$nEmpName"]["Return"] = $data['task_completion_date'];
            }

            else if($data['task']=='Door/access keys')
            {
                $arrDoorKeys["$nEmpName"]["Issue"] = $data['task_completion_date'];
            }
            else if($data['task']=='Return door/access keys')
            {
                $arrDoorKeys["$nEmpName"]["Return"] = $data['task_completion_date'];
            }
        }



        return view('employees.outstandingitems', compact( 'arrLaptopData', 'arrVisaCard', 'arrGasCard', 'arrDoorKeys'));
    }
}
