<?php

namespace App\Http\Controllers;

use App\Models\Employeerights;
use App\Models\Improvements;
use App\Models\Employees;
use App\Models\Improvementsnotifications;
use App\Models\Recipes;
use App\Models\Improvementcomments;
use App\Models\Improvementphotos;
use App\Models\Improvementassigned;
use App\Models\Sitesettings;

//use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Image;
//use mysql_xdevapi\Exception;
use Exception;

class ImprovementsController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $strFullRoute = request()->route()->getActionName();
            $strAcionName = substr($strFullRoute, strpos($strFullRoute, "@")+1);
            $arrAllowedPages = array(
                "View"=>array('index', 'show', "process"),
                "Edit"=>array("index", "create", "store", "show", "edit", "update", "process", "destroy","updateprocess", "updatecomment",
                    "updateimpstatus", "uploadpicture"),
                "Admin"=>array("index", "create", "store", "show", "edit", "update", "destroy", "process", "updateprocess", "updatecomment",
                    "updateimpstatus", "uploadpicture"),
                "No Access"=>array("none")
            );

            $nCurrUserID = Auth::user()->getempid();
            $objRights = Employeerights::
            where('emp_id', $nCurrUserID)
                ->where('routename','improvements')
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
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $Improvements = DB::table('improvements')
                ->leftJoin('employees', 'assigned_to', '=', 'employees.id')
                ->select('improvements.*','employees.name')
                ->get();
            return view('improvements.index', compact('Improvements'));
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
        $employees = Employees::all();
        $recipes = Recipes::all();
        $sitesettings = Sitesettings::all();
        return view('improvements.create', compact('employees', 'recipes', 'sitesettings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
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

            if(isset($request->nAssignedTo) && is_numeric($request->nAssignedTo) && $request->nAssignedTo>0)
            {
                $rules['strDueDate'] = 'required|date';//your rule here
                $request->validate([
                    'strDueDate' => 'required'
                ],
                    [
                        'strDueDate.required' => 'Due date is required to assign improvement to someone!'
                    ]
                );
            }

            /*$strCurrentUserEmail = Auth::user()->email;
            $objCurrentEmployee = Employees::where('email',$strCurrentUserEmail)->first();
            $strFullName = $objCurrentEmployee->name;
            if($objCurrentEmployee)
            {
                $nEmployeeID = $objCurrentEmployee->id;
            }
            else
            {
                $nEmployeeID = Auth::user()->id;
            }*/
            //


            $nEmployeeID = Auth::user()->getempid();
            $objEmployeeSender = Employees::find($nEmployeeID);
            $strSenderName = $objEmployeeSender->name;

            $arrImpmrovement = array(
                'complainer'=> $request->strWhoNotified,
                'phonenumber' => $request->strPhoneNumber,
                'email' => $request->strEmail,
                'product' => $request->strProduct,
                'production_location' => $request->strProductionLocation,
                'supplier' => $request->strSupplier,
                'selling_location' => $request->strWhereSold,
                'purchase_date' => $request->strDateOfPurchase,
                'lot_nr' => $request->strLotNr,
                'description' => $request->strDescription,
                'response_improvements' => $request->strResponse,
                'complain_creation_date' => date("Y-m-d H:i:s"),
                'complain_created_by' => $nEmployeeID
            );

            $nAssignedTo = 0;
            if($request->nAssignedTo>0)
            {
                $nAssignedTo = $request->nAssignedTo;
                $objEmmployeeReceiver = Employees::find($request->nAssignedTo);
                $strReceiverName = $objEmmployeeReceiver->name;
                $arrImpmrovement['assigned_to'] = $nAssignedTo;
            }
            //$strDueDate = date("Y-m-d");
            $strDueDate = "";
            if($request->strDueDate!="")
            {
                $strDueDate = $request->strDueDate;
                $arrImpmrovement['due_date'] = $strDueDate;
            }



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


            if($request->file('Photos'))
            {
                $arrPhotos = $request->file('Photos');
                {
                    foreach ($arrPhotos as $thispic)
                    {
                        $file = $thispic['file_photo'];

                        $destination = 'uploads/improvements/'.$nImprovementID;
                        $strFileName = $file->getClientOriginalName();
                        $file->move($destination, $strFileName);
                        $arrPicRecord = array(
                            'improvements_id'=>$nImprovementID,
                            'file_name'=>$strFileName,
                            'file_creation_date' => date("Y-m-d H:i:s"),
                            'file_created_by' => $nEmployeeID
                        );
                        Improvementphotos::create($arrPicRecord);
                    }
                }
            }



            if($nAssignedTo>0)
            {
                $strCommentNewAssignee = 'Assigned to '.$strReceiverName.' by '.$strSenderName.'. Due date: '.$strDueDate;
                $arrComments = array(
                    'improvements_id'=>$nImprovementID,
                    'comment'=>$strCommentNewAssignee,
                    'comment_add_date'=>date("Y-m-d H:i:s"),
                    'comment_added_by'=>$nEmployeeID
                );
                Improvementcomments::create($arrComments);

                /**
                 * The below piece of code will keep a track of when the task was assigned to someone.
                 * This is not being displayed from this table, but just keeping a track, if needed to see somehow later.
                 */
                $arrImprovementAssigned = array(
                    'improvements_id'=>$nImprovementID,
                    'assigned_to'=>$nAssignedTo,
                    'assigned_by'=>$nEmployeeID,
                    'due_date'=>$strDueDate,
                    'action_taken_at'=>date("Y-m-d H:i:s")
                );
                Improvementassigned::create($arrImprovementAssigned);
                /**
                 * Storing assignment logs done
                 */

                $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>
                Hello $strReceiverName,<br><br>
                $strSenderName has sent you this message with the below suggestion for improvement and put you in charge of resolving it:<br><br>
                <a href='https://innri.fisherman.is/improvements/process/$nImprovementID'>https://innri.fisherman.is/improvements/process/$nImprovementID</a></p></div></body></html>";
                $to = $objEmmployeeReceiver->email;
                $subject = 'Improvement suggestion for Fisherman';
                $formEmail = 'innri@fisherman.is';
                $formName = "Innri Fisherman";
                Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                    $message->from($formEmail, $formName);
                    $message->to($to);
                    $message->cc('elias@fisherman.is');
                    $message->subject($subject);
                    $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
                });

            }
            $request->session()->flash('success', 'Improvement record added successfully.');
            echo $nImprovementID;
        }
        catch (\Exception $e)
        {
            $strPostData = "";
            $data = $request->all();

            foreach ($data as $key => $value) {
                $strPostData .=  $key." = ".$value;
            }
            $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>".$strPostData."<br><br>".$e->getMessage()."</p></div></body></html>";
            $subject = 'Innri Error for Improvement';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            $to = "atif.majid10@gmail.com";
            /*Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });*/
            echo $html;
        }


        /*return redirect()->route('improvements.index')
            ->with('success','Improvement record added successfully.');*/
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
     * @param  \App\Models\Improvements  $improvement
     * @return \Illuminate\Http\Response
     */
    public function edit(Improvements $improvement)
    {
        //
        $nEmployeeID = Auth::user()->getempid();
        if($nEmployeeID!=$improvement->complain_created_by)
        {
            return redirect()->route('improvements.index')
                ->with('success','Improvements can only be edited by the user who registered it.');
        }

        $nImprovementID = $improvement->id;
        $employees = Employees::all();
        $recipes = Recipes::all();
        $sitesettings = Sitesettings::all();
        $Notifications = Improvementsnotifications::where('improvements_id', $nImprovementID)->get();
        $arrSelectedNotification = array();
        foreach ($Notifications as $thisNotification)
        {
            $strTitle = $thisNotification->notification_name;
            $nID = $thisNotification->id;
            $arrSelectedNotification["$strTitle"] = $nID;
        }
        return view('improvements.edit', compact('improvement', 'employees', 'recipes', 'sitesettings', 'arrSelectedNotification'));
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
        $nEmployeeID = Auth::user()->getempid();
        $nImprovementID = $request->nImprovementID;
        $arrImpmrovement = array();
        if(isset($request->strWhoNotified) && trim($request->strWhoNotified)!="")
        {
            $arrImpmrovement['complainer'] = $request->strWhoNotified;
        }
        if(isset($request->strPhoneNumber) && trim($request->strPhoneNumber)!="")
        {
            $arrImpmrovement['phonenumber'] = $request->strPhoneNumber;
        }
        if(isset($request->strEmail) && trim($request->strEmail)!="")
        {
            $arrImpmrovement['email'] = $request->strEmail;
        }
        if(isset($request->strProduct) && trim($request->strProduct)!="")
        {
            $arrImpmrovement['product'] = $request->strProduct;
        }
        if(isset($request->strProductionLocation) && trim($request->strProductionLocation)!="")
        {
            $arrImpmrovement['production_location'] = $request->strProductionLocation;
        }
        if(isset($request->strSupplier) && trim($request->strSupplier)!="")
        {
            $arrImpmrovement['supplier'] = $request->strSupplier;
        }
        if(isset($request->strWhereSold) && trim($request->strWhereSold)!="")
        {
            $arrImpmrovement['selling_location'] = $request->strWhereSold;
        }
        if(isset($request->strDateOfPurchase) && trim($request->strDateOfPurchase)!="")
        {
            $arrImpmrovement['purchase_date'] = $request->strDateOfPurchase;
        }
        if(isset($request->strDateOfPurchase) && trim($request->strDateOfPurchase)!="")
        {
            $arrImpmrovement['purchase_date'] = $request->strDateOfPurchase;
        }
        if(isset($request->strLotNr) && trim($request->strLotNr)!="")
        {
            $arrImpmrovement['lot_nr'] = $request->strLotNr;
        }
        if(isset($request->strDescription) && trim($request->strDescription)!="")
        {
            $arrImpmrovement['description'] = $request->strDescription;
        }
        if(isset($request->strResponse) && trim($request->strResponse)!="")
        {
            $arrImpmrovement['response_improvements'] = $request->strResponse;
        }
        $nAssignedTo = 0;
        if($request->nAssignedTo>0)
        {
            $nAssignedTo = $request->nAssignedTo;
            $objEmmployeeReceiver = Employees::find($request->nAssignedTo);
            $strReceiverName = $objEmmployeeReceiver->name;
            $arrImpmrovement['assigned_to'] = $nAssignedTo;
        }
        //$strDueDate = date("Y-m-d");
        $strDueDate = "";
        if($request->strDueDate!="")
        {
            $strDueDate = $request->strDueDate;
            $arrImpmrovement['due_date'] = $strDueDate;
        }
        Improvements::find($nImprovementID)->update($arrImpmrovement);

        Improvementsnotifications::where('improvements_id', $nImprovementID)->delete();

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
        if($request->file('Photos'))
        {
            $arrPhotos = $request->file('Photos');
            {
                foreach ($arrPhotos as $thispic)
                {
                    $file = $thispic['file_photo'];

                    $destination = 'uploads/improvements/'.$nImprovementID;
                    $strFileName = $file->getClientOriginalName();
                    $file->move($destination, $strFileName);
                    $arrPicRecord = array(
                        'improvements_id'=>$nImprovementID,
                        'file_name'=>$strFileName,
                        'file_creation_date' => date("Y-m-d H:i:s"),
                        'file_created_by' => $nEmployeeID
                    );
                    Improvementphotos::create($arrPicRecord);
                }
            }
        }
        return redirect()->route('improvements.index')
            ->with('success','Improvement record updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Improvements  $improvement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Improvements $improvement)
    {
        //
        $nImprovementID = $improvement->id;
        if($nImprovementID>0)
        {
            Improvementassigned::where('improvements_id', $nImprovementID)->delete();
            Improvementcomments::where('improvements_id', $nImprovementID)->delete();
            Improvementsnotifications::where('improvements_id', $nImprovementID)->delete();
            $photos = Improvementphotos::where('improvements_id', $nImprovementID)->get();
            foreach ($photos as $thisphoto)
            {
                $nPhotoID = $thisphoto->id;
                $strPhotoName = $thisphoto->file_name;
                $path = public_path('uploads/improvements/'.$nImprovementID.'/'.$strPhotoName);
                if(File::exists($path))
                {
                    File::delete($path);
                }
                Improvementphotos::find($nPhotoID)->delete();
            }
            $improvement->delete();
            return redirect()->route('improvements.index')
                ->with('success','Improvement record deleted successfully.');
        }
        else
        {
            return redirect()->route('improvements.index')
                ->with('error','Cannot find the requested improvement record.');
        }



    }

    public function process(Request $request)
    {

        $nID = $request->id;
        //$improvement = Improvements::find($nID);
        $improvements = DB::table('improvements')
            ->leftJoin('employees', 'complain_created_by', '=', 'employees.id')
            ->select('improvements.*', 'employees.name')
            ->where('improvements.id', $nID)
            ->get();

        if(count($improvements)>0)
        {
            $improvement = $improvements[0];
            $Notifications = Improvementsnotifications::where('improvements_id', $nID)->get();
            $employees = Employees::all();

            $ImprovementComments = DB::table('improvement_comments')
                ->leftJoin('employees', 'comment_added_by', '=', 'employees.id')
                ->select('improvement_comments.*','employees.name')
                ->where('improvements_id', $nID)
                ->get();
            $ImprovementPhotos = Improvementphotos::where('improvements_id', $nID)->get();
            return view('improvements.process', compact('improvement','Notifications', 'employees', 'ImprovementComments', 'ImprovementPhotos'));
        }
        else
        {
            return redirect()->route('improvements.index')
                ->with('error','The record you are looking for is not found in the system.');
        }

    }

    public function updateprocess(Request $request)
    {
        $strResponse = $request->strResponse;
        $nAssignedTo = $request->nAssignedTo;
        $strDueDate = $request->strDueDate;
        $nID = $request->id;

        if(isset($request->nAssignedTo) && is_numeric($request->nAssignedTo) && $request->nAssignedTo>0)
        {
            $rules['strDueDate'] = 'required|date';//your rule here
            $request->validate([
                'strDueDate' => 'required'
            ],
                [
                    'strDueDate.required' => 'Due date is required to assign improvement to someone!'
                ]
            );
        }

        $nCurrentEmployeeID = Auth::user()->getempid();
        $currentEmployee = Employees::find($nCurrentEmployeeID);
        $strCurrentEmployeeName = $currentEmployee->name;
        if(trim($strResponse)!="")
        {
            $arrComments = array(
                'improvements_id'=>$nID,
                'comment'=>$strResponse,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nCurrentEmployeeID
            );
            Improvementcomments::create($arrComments);
        }

        if($nAssignedTo>0 and trim($strDueDate)!="")
        {
            /**
             * The below piece of code will keep a track of when the task was assigned to someone.
             * This is not being displayed from this table, but just keeping a track, if needed to see somehow later.
             */
            $arrImprovementAssigned = array(
                'improvements_id'=>$nID,
                'assigned_to'=>$nAssignedTo,
                'assigned_by'=>$nCurrentEmployeeID,
                'due_date'=>$strDueDate,
                'action_taken_at'=>date("Y-m-d H:i:s")
            );
            Improvementassigned::create($arrImprovementAssigned);
            /*
             * Storing assignment logs end
             */

            $arrUpdate = array(
                'assigned_to'=>$nAssignedTo,
                'due_date'=>$strDueDate
            );

            Improvements::find($nID)->update($arrUpdate);

            $newAssignee = Employees::find($nAssignedTo);
            $strNewAssigneeName = $newAssignee->name;
            $strCommentNewAssignee = 'Assigned to '.$strNewAssigneeName.' by '.$strCurrentEmployeeName.'. Due date: '.$strDueDate;
            $arrComments = array(
                'improvements_id'=>$nID,
                'comment'=>$strCommentNewAssignee,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nCurrentEmployeeID
            );
            Improvementcomments::create($arrComments);

            $html = "<html><body>
        <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
        <div>
            <p>
            Hello $strNewAssigneeName,<br><br>
            $strCurrentEmployeeName has sent you this message with the below suggestion for improvement and put you in charge of resolving it:<br><br>
            <a href='https://innri.fisherman.is/improvements/process/$nID'>https://innri.fisherman.is/improvements/process/$nID</a></p></div></body></html>";
            //$to = 'ragnar@fisherman.is';
            //$to = 'atif.majid10@gmail.com';
            $to = $newAssignee->email;
            $subject = 'Improvement suggestion for Fisherman';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->cc('elias@fisherman.is');
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });
        }

        if( $request->has('chkCompleted') ){
            //...
            $arrUpdate = array("completed" => 'yes');

            $strCommentCompleted = 'Marked as completed by '.$strCurrentEmployeeName;
            $arrComments = array(
                'improvements_id'=>$nID,
                'comment'=>$strCommentCompleted,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nCurrentEmployeeID
            );
            Improvementcomments::create($arrComments);
            Improvements::find($nID)->update($arrUpdate);
        }
        else{
            $improvement = Improvements::find($nID);
            if($improvement->completed=='yes')
            {
                $arrUpdate = array("completed" => 'no');

                $strCommentCompleted = 'Marked as in progress by '.$strCurrentEmployeeName;
                $arrComments = array(
                    'improvements_id'=>$nID,
                    'comment'=>$strCommentCompleted,
                    'comment_add_date'=>date("Y-m-d H:i:s"),
                    'comment_added_by'=>$nCurrentEmployeeID
                );
                Improvementcomments::create($arrComments);
                Improvements::find($nID)->update($arrUpdate);
            }
        }


        $request->session()->flash('success', 'Improvement updated successfully.');
        return "{\"msg\":\"success\"}";


        /*return redirect()->route('improvements.process', [$nID])
            ->with('success','Comment successfully added.');*/
    }

    public function updatecomment(Request $request)
    {
        $strNewComment = $request->strNewComment;
        $nCommentID = $request->nCommentID;
        $nCurrentEmployeeID = Auth::user()->getempid();
        if($nCommentID>0 && trim($strNewComment)!="")
        {
            $arrComments = array(
                'comment'=>$strNewComment,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nCurrentEmployeeID
            );
            Improvementcomments::find($nCommentID)->update($arrComments);
            echo "success";
        }

    }

    public function updateimpstatus(Request $request)
    {

        $strNewStatus = $request->strNewStatus;
        $nID = $request->nID;

        if($nID>0 && ($strNewStatus=='yes' || $strNewStatus=='no'))
        {
            $arrUpdate = array("completed" => $strNewStatus);
            $nCurrentEmployeeID = Auth::user()->getempid();
            $currentEmployee = Employees::find($nCurrentEmployeeID);
            $strCurrentEmployeeName = $currentEmployee->name;

            $strCommentCompleted = 'Marked as in progress by '.$strCurrentEmployeeName;
            if($strNewStatus=='yes')
            {
                $strCommentCompleted = 'Marked as completed by '.$strCurrentEmployeeName;
            }


            $arrComments = array(
                'improvements_id'=>$nID,
                'comment'=>$strCommentCompleted,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nCurrentEmployeeID
            );
            Improvementcomments::create($arrComments);
            Improvements::find($nID)->update($arrUpdate);
        }
    }

    public function uploadpicture(Request $request)
    {
        /*$request->validate([
            'file' => 'required | mimes:jpeg,jpg,png',
            'nImpId' => 'required'
        ]);*/
        $nImpId = $request->nImpId;
        if(is_numeric($nImpId) && $nImpId>0 && $request->has('file'))
        {
            $nCurrentEmployeeID = Auth::user()->getempid();
            $file = $request->file('file');
            $destination = 'uploads/improvements/'.$nImpId."/";
            $strFileName = $file->getClientOriginalName();
            /*if (!file_exists(public_path($destination))) {
                $file->move($destination, $strFileName);
            }


            $height = Image::make($file)->height();
            $width = Image::make($file)->width();

            $image_resize = Image::make($file->getRealPath());
            $image_resize->orientate();
            if($width>500)
            {
                $image_resize->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            else if ($height>500)
            {
                $image_resize->resize(null, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }

            $image_resize->save(public_path($destination .$strFileName));*/


            $file->move($destination, $strFileName);
            $arrPicRecord = array(
                'improvements_id'=>$nImpId,
                'file_name'=>$strFileName,
                'file_creation_date' => date("Y-m-d H:i:s"),
                'file_created_by' => $nCurrentEmployeeID
            );
            Improvementphotos::create($arrPicRecord);
        }
        if($request->has('pgProcess') && $request->pgProcess>0)
        {
            $request->session()->flash('success', 'Improvement record updated successfully.');
        }
        else
        {
            $request->session()->flash('success', 'Improvement record added successfully.');
        }

    }
}
