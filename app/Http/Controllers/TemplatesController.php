<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Employeerights;
use App\Models\Sitesettings;
use App\Models\Templates;
use App\Models\Templatefields;
use App\Models\Templatelog;
use App\Models\Templatesubmit;
use App\Models\Templatesubmitfields;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TemplatesController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $strStatus = Auth::user()->getempStatus();
            if($strStatus=='inactive')
            {
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
            }

            $strFullRoute = request()->route()->getActionName();
            $strAcionName = substr($strFullRoute, strpos($strFullRoute, "@")+1);
            $arrAllowedPages = array(
                "View"=>array('index', "fill", "fillsubmit"),
                "Edit"=>array("index", "fill", "fillsubmit", 'review', 'reviewsubmit'),
                "Admin"=>array("index", "create", "store", "review", "reviewsubmit", "fill", "fillsubmit", "show", "edit", "destroy"),
                "No Access"=>array("none")
            );

            $nCurrUserID = Auth::user()->getempid();
            $objRights = Employeerights::
            where('emp_id', $nCurrUserID)
                ->where('routename','templates')
                ->get();
            $bShowTarget = false;
            if(!$objRights->isEmpty())
            {
                $strRight = $objRights[0]->rights;
                if(trim($strRight)=="")
                {
                    $strRight = "No Access";
                }
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
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            //$templates = Templates::all();
            $templates = Templates::where('status', 'active')->get();
            return view('templates.index', compact('templates'));
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
        $allEmployees = Employees::where('status', 'active')->get();
        $nCurrentEmpID = Auth::user()->getempid();
        return view('templates.create', compact('allEmployees', 'nCurrentEmpID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $strTitle = $request->strTitle;
        $strWithCheckbox = 'no';
        if($request->has('chWithCheckbox') && $request->chWithCheckbox=='yes')
        {
            $strWithCheckbox = 'yes';
        }
        $nVersion = 1;
        $arrInsert = array(
            'title'=>$strTitle,
            'created_on'=>date("Y-m-d H:i:s"),
            'created_by'=>Auth::user()->getempid(),
            'with_checkboxes'=>$strWithCheckbox,
            'supervisor'=>$request->nSupervisor,
            'version'=>$nVersion
        );
        if(!empty($request->strInstructions))
        {
            $arrInsert['strInstructions'] = $request->strInstructions;
        }
        $nTemplate = Templates::create($arrInsert);
        $nID = $nTemplate->id;
        $arrItems = $request->AMEs;
        foreach($arrItems as $thisItem)
        {
            if(trim($thisItem['item_tite'])!="")
            {
                $arrInsertItem = array(
                    'field_title'=>$thisItem['item_tite'],
                    'template_id'=>$nID
                );
                Templatefields::create($arrInsertItem);
            }

        }
        return redirect()->route('templates.index')
            ->with('success','Template added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function show(Templates $templates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Templates  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Templates $template)
    {
        //
        $nTemplateID = $template->id;
        $templatefields = Templatefields::where('template_id', $nTemplateID)->get();
        $allEmployees = Employees::where('status', 'active')->get();
        $nCurrentEmpID = Auth::user()->getempid();
        return view('templates.edit', compact('template', 'templatefields', 'allEmployees', 'nCurrentEmpID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Templates $template)
    {
        //
        $nTemplateID = $template->id;
        $arrChanges = array();
        $arrItems = $request->AMEs;
        foreach($arrItems as $thisItem)
        {
            if(trim($thisItem['item_tite'])!="")
            {
                if(isset($thisItem['nTempFieldID']) && $thisItem['nTempFieldID']>0)
                {
                    $objField = Templatefields::find($thisItem['nTempFieldID']);
                    $objField->field_title = $thisItem['item_tite'];
                    $origTitle = $objField->getOriginal('field_title');
                    $objField->save();
                    if($objField->wasChanged())
                    {
                        $arrChanges[] = 'Field title was changed from ['.$origTitle.'] to ['.$objField->field_title.']';
                    }
                }
                else {
                    if(trim($thisItem['item_tite']) !="")
                    {
                        $arrInsertItem = array(
                            'field_title'=>$thisItem['item_tite'],
                            'template_id'=>$nTemplateID
                        );
                        Templatefields::create($arrInsertItem);
                        $arrChanges[] = "Field title added [".$thisItem['item_tite']."]";
                    }
                }
            }
        }

        $strTitle = $request->strTitle;
        $strWithCheckbox = 'no';
        if($request->has('chWithCheckbox') && $request->chWithCheckbox=='yes')
        {
            $strWithCheckbox = 'yes';
        }

        $objTemplate = Templates::find($nTemplateID);
        $strOrigTitle = $objTemplate->title;
        $strOrigCheckBox = $objTemplate->with_checkboxes;
        $nOrigSupervisor = $objTemplate->supervisor;
        $strOrigInstructions = $objTemplate->instruction;
        $nOrigVersion = $objTemplate->version;
        $objTemplate->title = $strTitle;
        $objTemplate->with_checkboxes = $strWithCheckbox;
        $objTemplate->supervisor = $request->nSupervisor;
        $objTemplate->instruction = $request->strInstructions;
        $bVersionUpdate = false;
        if($strOrigTitle!=$strTitle)
        {
            $arrChanges[] = "Template title changed from [".$strOrigTitle."] to [".$strTitle."]";
            $bVersionUpdate = true;
        }
        if($strOrigCheckBox!=$strWithCheckbox)
        {
            if($strWithCheckbox=='no')
            {
                $arrChanges[] = "Field type changed from [With a checklist] to [Without a checklist]";
            }
            else
            {
                $arrChanges[] = "Field type changed from [Without a checklist] to [With a checklist]";
            }
            $bVersionUpdate = true;
        }
        if($nOrigSupervisor!=$request->nSupervisor)
        {
            if($nOrigSupervisor>0 && $request->nSupervisor>0)
            {
                $origEmployee = Employees::find($nOrigSupervisor);
                $newEmployee = Employees::find($request->nSupervisor);
                $arrChanges[] = "Supervisor changed from [".$origEmployee->name."] to [".$newEmployee->name."]";
            }
            else if($nOrigSupervisor==0 && $request->nSupervisor>0)
            {
                $newEmployee = Employees::find($request->nSupervisor);
                $arrChanges[] = "Supervisor added [".$newEmployee->name."]";
            }
            else{
                $origEmployee = Employees::find($nOrigSupervisor);
                $arrChanges[] = "Supervisor changed from [".$origEmployee->name."] to [none]";
            }
            $bVersionUpdate = true;
        }
        if($strOrigInstructions!=$request->strInstructions)
        {
            if(trim($strOrigInstructions)=="")
            {
                $arrChanges[] = "Instructions added [Without a checklist]";
            }
            else
            {
                $arrChanges[] = "Instructions changed from [".$strOrigInstructions."] to [".$request->strInstructions."]";
            }

            $bVersionUpdate = true;
        }
        if($bVersionUpdate || count($arrChanges)>0)
        {
            $objTemplate->version = $nOrigVersion+1;
            $objTemplate->updated_on = date("Y-m-d H:i:s");
        }
        $objTemplate->save();
        foreach($arrChanges as $change)
        {
            $arrLog = array(
                'template_id'=>$nTemplateID,
                'changelog'=>$change,
                'change_time'=>date("Y-m-d H:i:s"),
                'changed_by'=>Auth::user()->getempid()
            );
            Templatelog::create($arrLog);
        }
        return redirect()->route('templates.index')
            ->with('success','Template updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Templates $template)
    {
        $nTemplateID = $template->id;
        /*$template->delete();*/
        $arrUpdate = array('status'=>"inactive");
        Templates::find($nTemplateID)->update($arrUpdate);
        $change = "Template deleted";
        $arrLog = array(
            'template_id'=>$nTemplateID,
            'changelog'=>$change,
            'change_time'=>date("Y-m-d H:i:s"),
            'changed_by'=>Auth::user()->getempid()
        );
        Templatelog::create($arrLog);
        return redirect()->route('templates.index')
            ->with('success','Template deleted successfully.');
    }

    public function fill(Request $request)
    {
        $nID = $request->id;
        $thistemplate = Templates::find($nID);
        $strSupervisorName = "";
        $nSupervisorID = $thistemplate->supervisor;
        if($nSupervisorID>0)
        {
            $supervisorEmp = Employees::find($nSupervisorID);
            $strSupervisorName = $supervisorEmp->name;
        }


        $templatefields = Templatefields::where("template_id", $nID)->get();
        $sitesettings = Sitesettings::all();
        return view('templates.fill', compact('nID', 'thistemplate', 'templatefields', 'sitesettings', 'strSupervisorName'));
    }

    public function fillsubmit(Request $request)
    {
        $Template = Templates::find($request->nTemplate);
        $arrTemplateData = array(
            'template_id'=>$request->nTemplate,
            'template_title'=>$request->strTempTitle,
            'template_version'=>$request->nVersion,
            'submit_date'=>date("Y-m-d H:i:s"),
            'supervisor'=>$Template->supervisor,
            'user_id'=>Auth::user()->getempid(),
            'with_checkboxes'=>$request->strWithCheckbox,
            'instruction'=>$Template->instruction,
            'template_created_on'=>$Template->created_on
        );
        if(!empty($request->strComments))
        {
            $arrTemplateData['comments'] = $request->strComments;
        }
        if(!empty($Template->updated_on))
        {
            $arrTemplateData['template_created_on'] = $Template->updated_on;
        }
        if(trim($request->strProductionLocation)!="")
        {
            $arrTemplateData['production_site'] = $request->strProductionLocation;
        }

        $TemplateSubmit = Templatesubmit::create($arrTemplateData);
        $nSubmitID = $TemplateSubmit->id;

        $arrFields = $request->field;
        for($i=0; $i<count($arrFields); $i++)
        {
            $nFieldID = $arrFields[$i];
            $strTitleFieldName = "field_title_".$nFieldID;
            $arrTempFieldsData = array(
                'field_title'=>$request->$strTitleFieldName,
                'template_submit_id'=>$nSubmitID
            );
            if($request->strWithCheckbox=='yes')
            {
                $arrTempFieldsData['chk_emp_confirm'] = 'no';
                $fieldName = "chk_entry_".$nFieldID;
                if(isset($request->$fieldName) && $request->$fieldName=='yes')
                {
                    $arrTempFieldsData['chk_emp_confirm'] = 'yes';
                }
                $strCommentField = "comment_".$nFieldID;
                if(trim($request->$strCommentField)!="")
                {
                    $arrTempFieldsData['emp_comment'] = $request->$strCommentField;
                }
            }
            else
            {
                $strValueField = "value_".$nFieldID;
                $strCommentField = "comment_".$nFieldID;
                if(trim($request->$strValueField)!="")
                {
                    $arrTempFieldsData['emp_value'] = $request->$strValueField;
                }
                if(trim($request->$strCommentField)!="")
                {
                    $arrTempFieldsData['emp_comment'] = $request->$strCommentField;
                }
            }
            Templatesubmitfields::create($arrTempFieldsData);
            //'emp_comment',
            //'chk_emp_confirm',
            //'chk_supervisor_confirmed',
            //'supervisor_comment',
        }
        return redirect()->route('templates.index')
            ->with('success','Template submitted for today successfully.');
    }

    public function review(Request $request)
    {
        $nTemplateSubmitID = $request->id;
        $Templates = DB::table('template_submit')
            ->leftJoin('employees', 'user_id', '=', 'employees.id')
            ->leftJoin('employees as sup', 'supervisor', '=', 'sup.id')
            ->select('template_submit.*','employees.name', 'sup.name as supname')
            ->where('template_submit.id', $nTemplateSubmitID)
            ->get();
        if(count($Templates)==1)
        {
            $thisTemplateSubmission = $Templates[0];
            $TemplateFields = Templatesubmitfields::where('template_submit_id', $nTemplateSubmitID)->get();
            return view('templates.review', compact('nTemplateSubmitID', 'thisTemplateSubmission', 'TemplateFields'));
        }
        else{
            return redirect()->route('templates.index')
                ->with('errors','Could not find the template submission.');
        }
    }

    public function reviewsubmit(Request $request)
    {
        $fields = $request->field;
        for($i=0; $i<count($fields); $i++)
        {
            //if($request->strWithCheckbox=='yes')
            //{
            $chkVerifyFieldName = "chk_verify_".$fields[$i];
            $supervisorCommentFieldName = "supervisor_comment_".$fields[$i];
            $arrUpdate = array();
            if(isset($request->$chkVerifyFieldName) && $request->$chkVerifyFieldName=='yes')
            {
                $arrUpdate['chk_supervisor_confirmed'] = 'yes';
            }
            if(trim($request->$supervisorCommentFieldName)!="")
            {
                $arrUpdate['supervisor_comment'] = $request->$supervisorCommentFieldName;
            }
            Templatesubmitfields::find($fields[$i])->update($arrUpdate);
            //}
        }

        $arrUpdateSubmission = array();
        $arrUpdateSubmission['reviewed'] = 'yes';
        $arrUpdateSubmission['reviewed_datetime'] = date("Y-m-d H:i:s");
        Templatesubmit::find($request->nTemplate)->update($arrUpdateSubmission);
        return redirect()->route('templates.index')
            ->with('success','Template submission reviewed successfully.');
    }
}
