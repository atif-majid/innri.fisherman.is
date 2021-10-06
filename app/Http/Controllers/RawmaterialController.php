<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Sitesettings;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rawfish;
use App\Models\Rawfishphoto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class RawmaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            //return redirect(route('change-password'));
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' );
        }
        else
        {
            $RawFish = Rawfish::all();
            return view('rawmaterial.index', compact('RawFish'))
                ;
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
        $Suppliers = Sitesettings::where('field', 'SupplierName')->orderBy('value')->get();
        $FishTypes = Sitesettings::where('field', 'FishType')->orderBy('value')->get();
        $ProductionSites = Sitesettings::where('field', 'ProductionSite')->orderBy('value')->get();
        return view('rawmaterial.create', compact('employees', 'Suppliers',  'FishTypes', 'ProductionSites'));
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
        try {
            $request->validate([
                'strFishType' => 'required',
                'strQuantityUnit' => 'required'
            ],
                [
                    'strFishType.required' => 'Please select type of fish',
                    'strQuantityUnit.required' => 'Please chose the unit for quanity'
                ]
            );

            $arrRawFish = array(
                'fish_type'=>$request->strFishType,
                'sort'=>$request->strWhere,
                'cases'=>$request->nCases,
                'pallets'=>$request->nPallets,
                'lot_nr'=>$request->strLotNr,
                'supplier'=>$request->strSupplier,
                'lot_nr_supplier'=>$request->strLotNrProducer,
                'fish_received'=>date("Y-m-d", strtotime($request->strFishRdceived)),
                'fish_received_by'=>$request->strReceivedBy,
                'production_site'=>$request->strProductionSite,
                'assessment'=>$request->strAssessment,
                'asc_msc'=>$request->strASCMSC,
                'temp_on_reception'=>str_replace(",", ".", $request->strRecepTemp),
                'swabsure'=>$request->strSwabSure,
                'comments'=>$request->strDescription,
                'added_by'=>Auth::user()->getempid(),
                'added_on'=>date("Y-m-d H:i:s")
            );
            if(isset($request->nQuantity) && trim($request->nQuantity)!="")
            {
                $request->validate([
                    'nQuantity' => 'required|numeric',
                    'strQuantityUnit' => 'required'
                ],
                    [
                        'nQuantity.required' => 'Quantity must be provided and numeric',
                        'strQuantityUnit.required' => 'Please chose the unit for quanity'
                    ]
                );
                $arrRawFish['quantity'] = $request->nQuantity;
                $arrRawFish['unit_quantity'] = $request->strQuantityUnit;
            }
            //exit;
            $rawfish = Rawfish::create($arrRawFish);
            $nRawFishID = $rawfish->id;
            //echo $nRawFishID;
        }
        catch (QueryException $e)
        {
            $html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri!';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });
            //return back()->withInput()->withErrors('An error occured. The developer has been notified!');
            $request->session()->flash('Error', 'An error occured. The developer has been notified!');
        }
        $request->session()->flash('success', 'Raw fish added successfully.');
        echo $nRawFishID;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rawfish = Rawfish::find($id);
        $employees = Employees::all();
        $Suppliers = Sitesettings::where('field', 'SupplierName')->orderBy('value')->get();
        $FishTypes = Sitesettings::where('field', 'FishType')->orderBy('value')->get();
        $ProductionSites = Sitesettings::where('field', 'ProductionSite')->orderBy('value')->get();
        return view('rawmaterial.edit', compact('employees', 'Suppliers',  'FishTypes', 'ProductionSites', 'rawfish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try {
            $arrRawFish = array(
                'fish_type' => $request->strFishType,
                'sort' => $request->strWhere,
                'cases' => $request->nCases,
                'pallets' => $request->nPallets,
                'lot_nr' => $request->strLotNr,
                'supplier' => $request->strSupplier,
                'lot_nr_supplier' => $request->strLotNrProducer,
                'fish_received' => date("Y-m-d", strtotime($request->strFishRdceived)),
                'fish_received_by' => $request->strReceivedBy,
                'production_site' => $request->strProductionSite,
                'assessment' => $request->strAssessment,
                'asc_msc' => $request->strASCMSC,
                'temp_on_reception' => str_replace(",", ".", $request->strRecepTemp),
                'swabsure' => $request->strSwabSure,
                'comments' => $request->strDescription,
                'added_by' => Auth::user()->getempid(),
                'added_on' => date("Y-m-d H:i:s")
            );
            if (isset($request->nQuantity) && trim($request->nQuantity) != "") {
                $request->validate([
                    'nQuantity' => 'required|numeric',
                    'strQuantityUnit' => 'required'
                ],
                    [
                        'nQuantity.required' => 'Quantity must be provided and numeric',
                        'strQuantityUnit.required' => 'Please chose the unit for quanity'
                    ]
                );
                $arrRawFish['quantity'] = $request->nQuantity;
                $arrRawFish['unit_quantity'] = $request->strQuantityUnit;
            }

            Rawfish::find($id)->update($arrRawFish);
        }
        catch (QueryException $e)
        {
            /*$html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri!';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });*/
            echo $e->getMessage();
            //return back()->withInput()->withErrors('An error occured. The developer has been notified!');
            $request->session()->flash('Error', 'An error occured. The developer has been notified!');
        }
        //$request->session()->flash('success', 'Raw fish added successfully.');
        return redirect()->route('rawmaterial.index')
            ->with('success','Rawmaterial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $photos = Rawfishphoto::where('raw_fish_id', $id)->get();
        foreach ($photos as $thisphoto)
        {
            $nPhotoID = $thisphoto->id;
            $strPhotoName = $thisphoto->file_name;
            $path = public_path('uploads/raw-material/'.$id.'/'.$strPhotoName);
            if(File::exists($path))
            {
                File::delete($path);
            }
            Rawfishphoto::find($nPhotoID)->delete();
        }
        Rawfish::find($id)->delete();
        return redirect()->route('rawmaterial.index')
            ->with('success','Rawmaterial deleted successfully.');
    }

    public function uploadfile(Request $request)
    {
        $nRawMaterial = $request->nRawMaterial;
        if(is_numeric($nRawMaterial) && $nRawMaterial>0 && $request->has('file'))
        {
            //$nCurrentEmployeeID = Auth::user()->getempid();
            $file = $request->file('file');
            $destination = 'uploads/raw-material/'.$nRawMaterial;
            $strFileName = $file->getClientOriginalName();
            $strType = $file->getMimeType();
            $file->move($destination, $strFileName);
            $arrPicRecord = array(
                'raw_fish_id'=>$nRawMaterial,
                'file_name'=>$strFileName,
                'file_creation_date' => date("Y-m-d H:i:s"),
                'file_created_by' => Auth::user()->getempid(),
                'file_type'=>$strType
            );
            Rawfishphoto::create($arrPicRecord);
        }
        $request->session()->flash('success', 'Raw material added successfully.');

    }

    function getfiles(Request $request)
    {

        $result  = array();
        $nRawFishID = $request->id;
        $photos = Rawfishphoto::where('raw_fish_id', $nRawFishID)->get();
        $destination = 'uploads/raw-material/'.$nRawFishID."/";
        foreach($photos as $thisphoto)
        {
            $obj['name'] = $thisphoto->file_name;
            $obj['size'] = filesize($destination.$thisphoto->file_name);
            $obj['id'] = $thisphoto->id;
            $obj['type'] = $thisphoto->file_type;
            $result[] = $obj;
        }

        header('Content-type: text/json');              //3
        header('Content-type: application/json');
        echo json_encode($result);
    }

    function delfiles(Request $request)
    {
        $nFileId = $request->fileid;
        $nRawFishID = $request->rawfishid;


        $File = Rawfishphoto::where('raw_fish_id', $nRawFishID)
            ->where('id', $nFileId)
            ->get();
        $destination = 'uploads/raw-material/'.$nRawFishID."/";
        if($File)
        {
            $strFileName = $File[0]->file_name;
            if(File::exists($destination.$strFileName))
            {
                File::delete($destination.$strFileName);
                Rawfishphoto::where('raw_fish_id', $nRawFishID)
                    ->where('id', $nFileId)
                    ->delete();
            }
        }
    }
}
