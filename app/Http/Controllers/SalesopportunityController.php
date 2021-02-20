<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Salesopportunity;
use App\Models\Saleopassigned;
use App\Models\Saleopcomments;
use App\Models\Saleopphotos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Image;

class SalesopportunityController extends Controller
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
            $SaleOps = DB::table('sales_opportunity')
            ->leftJoin('employees', 'assigned_to', '=', 'employees.id')
            ->select('sales_opportunity.*','employees.name')
            ->get();
            return view('salesopportunity.index', compact('SaleOps'));
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
        return view('salesopportunity.create', compact('employees'));
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
            'strWhoNotified' => 'required',
            'strPhoneNumber' => 'sometimes',
            'strEmail' => 'sometimes',
            'strDescription' => 'sometimes',
            'nAssignedTo' => 'sometimes',
            'strResponse' => 'sometimes'
        ],
            [
                'strWhoNotified.required' => 'Name of notifying person is required',
                'strPhoneNumber.required' => 'Phone number is required',
                'strEmail.required' => 'Email address is required',
                'strDescription.required' => 'Complain description is required',
                'nAssignedTo.required' => 'Please select who will work on this improvement?',
                'strResponse.required' => 'Response is required'
            ]
        );

        $nEmployeeID = Auth::user()->getempid();
        $objEmployeeSender = Employees::find($nEmployeeID);
        $strSenderName = $objEmployeeSender->name;

        $arrSalesOpportunity = array(
            'who_notified'=> $request->strWhoNotified,
            'phone_number' => $request->strPhoneNumber,
            'email' => $request->strEmail,
            'description' => $request->strDescription,
            'response' => $request->strResponse,
            'creation_time' => date("Y-m-d H:i:s"),
            'created_by' => $nEmployeeID
        );

        $nAssignedTo = 0;
        if($request->nAssignedTo>0)
        {
            $nAssignedTo = $request->nAssignedTo;
            $objEmmployeeReceiver = Employees::find($request->nAssignedTo);
            $strReceiverName = $objEmmployeeReceiver->name;
            $arrSalesOpportunity['assigned_to'] = $nAssignedTo;
        }

        $SalesOp = Salesopportunity::create($arrSalesOpportunity);
        $nSalesID = $SalesOp->id;

        if($nAssignedTo>0)
        {
            $strCommentNewAssignee = 'Assigned to '.$strReceiverName.' by '.$strSenderName;
            $arrComments = array(
                'salesop_id'=>$nSalesID,
                'comment'=>$strCommentNewAssignee,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nEmployeeID
            );
            Saleopcomments::create($arrComments);

            /**
             * The below piece of code will keep a track of when the task was assigned to someone.
             * This is not being displayed from this table, but just keeping a track, if needed to see somehow later.
             */
            $arrSaleoptAssigned = array(
                'salesop_id'=>$nSalesID,
                'assigned_to'=>$nAssignedTo,
                'assigned_by'=>$nEmployeeID,
                'action_taken_at'=>date("Y-m-d H:i:s")
            );
            Saleopassigned::create($arrSaleoptAssigned);
            /**
             * Storing assignment logs done
             */

            $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>
                Hello $strReceiverName,<br><br>
                $strSenderName has sent you this message with the below sales opportunity and put you in charge of resolving it:<br><br>
                <a href='https://innri.fisherman.is/salesopportunity/process/$nSalesID'>https://innri.fisherman.is/salesopportunity/process/$nSalesID</a></p></div></body></html>";
            $to = $objEmmployeeReceiver->email;
            //$to = 'atif.majid10@gmail.com';
            $subject = 'Sales opportunity for Fisherman';
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
        $request->session()->flash('success', 'Sales opportunity added successfully.');
        echo $nSalesID;
        /*return redirect()->route('improvements.index')
            ->with('success','Improvement record added successfully.');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salesopportunity  $salesopportunity
     * @return \Illuminate\Http\Response
     */
    public function show(Salesopportunity $salesopportunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salesopportunity  $salesopportunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Salesopportunity $salesopportunity)
    {
        //
        $nSaleOPId = $salesopportunity->id;
        $employees = Employees::all();
        return view('salesopportunity.edit', compact('salesopportunity', 'employees'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salesopportunity  $salesopportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salesopportunity $salesopportunity)
    {
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";

        //
        /*$nEmployeeID = Auth::user()->getempid();
        $objEmployeeSender = Employees::find($nEmployeeID);
        $strSenderName = $objEmployeeSender->name;

        $nSalesOpID = $salesopportunity->id;
        $objSaleOP = Salesopportunity::find($nSalesOpID);

        $arrSalesOp = array();
        $arrSalesOp['who_notified'] = $request->strWhoNotified;
        $arrSalesOp['phone_number'] = $request->strPhoneNumber;
        $arrSalesOp['email'] = $request->strEmail;
        $arrSalesOp['description'] = $request->strDescription;
        $arrSalesOp['assigned_to'] = $request->nAssignedTo;
        $arrSalesOp['response'] = $request->strResponse;
        $salesopportunity->update($arrSalesOp);


        $strCommentEdited = 'Edited by '.$strSenderName;
        $arrComments = array(
            'salesop_id'=>$nSalesOpID,
            'comment'=>$strCommentEdited,
            'comment_add_date'=>date("Y-m-d H:i:s"),
            'comment_added_by'=>$nEmployeeID
        );
        Saleopcomments::create($arrComments);*/


        $request->session()->flash('success', 'Sales opportunity updated successfully.');
        return "{\"msg\":\"success\"}";
    }

    public function updatepost(Request $request)
    {
        $nSalesOpID = $request->nSalesOpID;

        $nEmployeeID = Auth::user()->getempid();
        $objEmployeeSender = Employees::find($nEmployeeID);
        $strSenderName = $objEmployeeSender->name;

        $objSaleOP = Salesopportunity::find($nSalesOpID);

        $arrSalesOp = array();
        $arrSalesOp['who_notified'] = $request->strWhoNotified;
        $arrSalesOp['phone_number'] = $request->strPhoneNumber;
        $arrSalesOp['email'] = $request->strEmail;
        $arrSalesOp['description'] = $request->strDescription;
        $arrSalesOp['assigned_to'] = $request->nAssignedTo;
        $arrSalesOp['response'] = $request->strResponse;
        Salesopportunity::find($nSalesOpID)->update($arrSalesOp);

        $strCommentEdited = 'Edited by '.$strSenderName;
        $arrComments = array(
            'salesop_id'=>$nSalesOpID,
            'comment'=>$strCommentEdited,
            'comment_add_date'=>date("Y-m-d H:i:s"),
            'comment_added_by'=>$nEmployeeID
        );
        Saleopcomments::create($arrComments);

        $request->session()->flash('success', 'Sales opportunity updated successfully.');

        return "{\"msg\":\"success\"}";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salesopportunity  $salesopportunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salesopportunity $salesopportunity)
    {
        //
        $nSaleOPID = $salesopportunity->id;
        if($nSaleOPID>0)
        {
            Saleopcomments::where('salesop_id', $nSaleOPID)->delete();
            Saleopassigned::where('salesop_id', $nSaleOPID)->delete();
            $SalesOpPhotos = Saleopphotos::where('so_id', $nSaleOPID)->get();
            foreach ($SalesOpPhotos as $thisphoto)
            {
                $nPhotoID = $thisphoto->id;
                $strPhotoName = $thisphoto->file_name;
                $path = public_path('uploads/salesopportunity/'.$nSaleOPID.'/'.$strPhotoName);
                if(File::exists($path))
                {
                    File::delete($path);
                }
                Saleopphotos::find($nPhotoID)->delete();
            }
            Salesopportunity::find($nSaleOPID)->delete();
            return redirect()->route('salesopportunity.index')
                ->with('success','Sales opportunity deleted successfully.');
        }
        else
        {
            return redirect()->route('salesopportunity.index')
                ->with('error','Cannot find the requested sales opportunity.');
        }

    }

    public function uploadpicture(Request $request)
    {
        /*$request->validate([
            'file' => 'required | mimes:jpeg,jpg,png',
            'nImpId' => 'required'
        ]);*/
        $nSoId = $request->nSoId;
        if(is_numeric($nSoId) && $nSoId>0 && $request->has('file'))
        {
            $nCurrentEmployeeID = Auth::user()->getempid();
            $file = $request->file('file');
            $destination = 'uploads/salesopportunity/'.$nSoId."/";
            $strFileName = $file->getClientOriginalName();
            /*if (!file_exists(public_path($destination))) {
                $file->move($destination, $strFileName);
            }


            $height = Image::make($file)->height();
            $width = Image::make($file)->width();

            $image_resize = Image::make($file->getRealPath());
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
                'so_id'=>$nSoId,
                'file_name'=>$strFileName,
                'file_creation_date' => date("Y-m-d H:i:s"),
                'file_created_by' => $nCurrentEmployeeID
            );
            Saleopphotos::create($arrPicRecord);
        }
        if($request->has('pgProcess') && $request->pgProcess>0)
        {
            $request->session()->flash('success', 'Sales opportunity updated successfully.');
        }
        else if($request->has('pgEdit') && $request->pgEdit>0)
        {
            $request->session()->flash('success', 'Sales opportunity edited successfully.');
        }
        else
        {
            $request->session()->flash('success', 'Sales opportunity added successfully.');
        }

    }

    public function process(Request $request)
    {
        //Do nothing for now
        $nID = $request->id;
        //$improvement = Improvements::find($nID);
        $SaleOps = DB::table('sales_opportunity')
            ->leftJoin('employees', 'created_by', '=', 'employees.id')
            ->select('sales_opportunity.*','employees.name')
            ->where('sales_opportunity.id', $nID)
            ->get();


        if(count($SaleOps)>0)
        {
            $SaleOp = $SaleOps[0];
            $employees = Employees::all();

            $SaleOpComments = DB::table('salesop_comments')
                ->leftJoin('employees', 'comment_added_by', '=', 'employees.id')
                ->select('salesop_comments.*','employees.name')
                ->where('salesop_id', $nID)
                ->get();
            $SalesOpPhotos = Saleopphotos::where('so_id', $nID)->get();
            return view('salesopportunity.process', compact('SaleOp','employees', 'SaleOpComments', 'SalesOpPhotos'));
        }
        else
        {
            return redirect()->route('salesopportunity.index')
                ->with('error','The record you are looking for is not found in the system.');
        }
    }

    public function updateprocess(Request $request)
    {
        //Do nothing
        $strResponse = $request->strResponse;
        $nSalesID = $request->id;
        $nEmployeeID = Auth::user()->getempid();
        $objEmployeeSender = Employees::find($nEmployeeID);
        $strSenderName = $objEmployeeSender->name;

        $arrComments = array(
            'salesop_id'=>$nSalesID,
            'comment'=>$strResponse,
            'comment_add_date'=>date("Y-m-d H:i:s"),
            'comment_added_by'=>$nEmployeeID
        );
        Saleopcomments::create($arrComments);
        $nAssignedTo = $request->nAssignedTo;
        if($nAssignedTo>0)
        {
            $arrSalesOpportunity = array('assigned_to' => $nAssignedTo);
            Salesopportunity::find($nSalesID)->update($arrSalesOpportunity);

            $objEmmployeeReceiver = Employees::find($request->$nAssignedTo);
            $strReceiverName = $objEmmployeeReceiver->name;
            $strCommentNewAssignee = 'Assigned to '.$strReceiverName.' by '.$strSenderName;
            $arrComments = array(
                'salesop_id'=>$nSalesID,
                'comment'=>$strCommentNewAssignee,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nEmployeeID
            );
            Saleopcomments::create($arrComments);

            $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>
                Hello $strReceiverName,<br><br>
                $strSenderName has sent you this message with the below sales opportunity and put you in charge of resolving it:<br><br>
                <a href='https://innri.fisherman.is/salesopportunity/process/$nSalesID'>https://innri.fisherman.is/salesopportunity/process/$nSalesID</a></p></div></body></html>";
            $to = $objEmmployeeReceiver->email;
            //$to = 'atif.majid10@gmail.com';
            $subject = 'Sales opportunity for Fisherman';
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
        if($request->has('chkCompleted'))
        {
            $chkCompleted = $request->chkCompleted;
            $arrSalesOpportunity = array('status' => $chkCompleted);
            Salesopportunity::find($nSalesID)->update($arrSalesOpportunity);

            $strCommentCompleted = 'Marked as completed by '.$strSenderName;
            $arrComments = array(
                'salesop_id'=>$nSalesID,
                'comment'=>$strCommentCompleted,
                'comment_add_date'=>date("Y-m-d H:i:s"),
                'comment_added_by'=>$nEmployeeID
            );
            Saleopcomments::create($arrComments);
        }
        else
        {
            $objSalesOp = Salesopportunity::find($nSalesID);
            if($objSalesOp->status=='Completed')
            {
                $arrSalesOpportunity = array('status' => "In Progress");
                Salesopportunity::find($nSalesID)->update($arrSalesOpportunity);

                $strCommentCompleted = 'Marked as in progress by '.$strSenderName;
                $arrComments = array(
                    'salesop_id'=>$nSalesID,
                    'comment'=>$strCommentCompleted,
                    'comment_add_date'=>date("Y-m-d H:i:s"),
                    'comment_added_by'=>$nEmployeeID
                );
                Saleopcomments::create($arrComments);
            }
        }
        $request->session()->flash('success', 'Sales opportunity updated successfully.');
        return "{\"msg\":\"success\"}";
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
            Saleopcomments::find($nCommentID)->update($arrComments);
            echo "success";
        }
    }
}
