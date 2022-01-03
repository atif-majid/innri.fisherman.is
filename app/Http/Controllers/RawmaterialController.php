<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Improvements;
use App\Models\Production;
use App\Models\Sitesettings;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rawfish;
use App\Models\Rawfishphoto;
use Illuminate\Support\Facades\DB;
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
            $Suppliers = Sitesettings::where('field', 'SupplierName')->orderBy('value')->get();
            $FishTypes = Sitesettings::where('field', 'FishType')->orderBy('value')->get();
            $ProductionSites = Sitesettings::where('field', 'ProductionSite')->orderBy('value')->get();
            return view('rawmaterial.index', compact('RawFish', 'Suppliers', 'FishTypes', 'ProductionSites'))
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
        try
        {
            $strPostData = "";
            $data = $request->all();

            foreach ($data as $key => $value) {
                $strPostData .=  $key." = ".$value;
            }
            $html = "<html><body>
            <div><img src='https://innri.fisherman.is/app-assets/images/logo/fisherman-2.png'></div>
            <div>
                <p>".$strPostData."</p></div></body></html>";
            $subject = 'Innri Rawmaetrial data';
            $formEmail = 'innri@fisherman.is';
            $formName = "Innri Fisherman";
            $to = "atif.majid10@gmail.com";
            Mail::send([], [], function($message) use($html, $to, $subject, $formEmail, $formName){
                $message->from($formEmail, $formName);
                $message->to($to);
                $message->subject($subject);
                $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' or your spam score will increase !
            });
        }
        catch (Exception $e)
        {
            //Do nothing
        }

        try {
            $request->validate([
                'strFishType' => 'required',
                'strLotNr' => 'required',
                'strSupplier' => 'required',
                'strProductionSite' => 'required',
                'nQuantity' => 'nullable|numeric',
                'strQuantityUnit' => 'required_with:nQuantity|nullable',
                'nCases' => 'nullable|numeric'
            ],
                [
                    'strFishType.required' => 'Please select type of fish',
                    'strLotNr.required' => 'Please provide lot nr.',
                    'strSupplier.required' => 'Please chose supplier',
                    'strProductionSite.required' => 'Please chose production site',
                    'nQuantity.numeric' => 'Quantity must be numeric',
                    'strQuantityUnit.required_with' => 'Quantity unit must be provided with quantity',
                    'nCases.numeric' => 'Cases must be numeric'
                ]
            );

            $arrRawFish = array(
                'fish_type'=>$request->strFishType,
                'lot_nr'=>$request->strLotNr,
                'supplier'=>$request->strSupplier,
                'production_site'=>$request->strProductionSite,
            );
            if(isset($request->nQuantity) && trim($request->nQuantity)!="")
            {
                $arrRawFish['quantity'] = $request->nQuantity;
                $arrRawFish['unit_quantity'] = $request->strQuantityUnit;
            }
            if(isset($request->strWhere) && trim($request->strWhere)!="")
            {
                $arrRawFish['sort'] = $request->strWhere;
            }
            if(isset($request->nCases) && trim($request->nCases)!="")
            {
                $arrRawFish['cases'] = $request->nCases;
            }
            if(isset($request->nPallets) && trim($request->nPallets)!="")
            {
                $arrRawFish['pallets'] = $request->nPallets;
            }
            if(isset($request->strLotNrProducer) && trim($request->strLotNrProducer)!="")
            {
                $arrRawFish['lot_nr_supplier'] = $request->strLotNrProducer;
            }
            if(isset($request->strFishRdceived) && trim($request->strFishRdceived)!="")
            {
                $arrRawFish['fish_received'] = date("Y-m-d", strtotime($request->strFishRdceived));
            }
            if(isset($request->fish_received_by) && trim($request->fish_received_by)!="")
            {
                $arrRawFish['fish_received_by'] = $request->fish_received_by;
            }
            if(isset($request->strAssessment) && trim($request->strAssessment)!="")
            {
                $arrRawFish['assessment'] = $request->strAssessment;
            }
            if(isset($request->strASCMSC) && trim($request->strASCMSC)!="")
            {
                $arrRawFish['asc_msc'] = $request->strASCMSC;
            }
            if(isset($request->strRecepTemp) && trim($request->strRecepTemp)!="")
            {
                $arrRawFish['temp_on_reception'] = str_replace(",", ".", $request->strRecepTemp);
            }
            if(isset($request->strSwabSure) && trim($request->strSwabSure)!="")
            {
                $arrRawFish['swabsure'] = $request->strSwabSure;
            }
            if(isset($request->strDescription) && trim($request->strDescription)!="")
            {
                $arrRawFish['comments'] = $request->strDescription;
            }
            $arrRawFish['added_by'] = Auth::user()->getempid();
            $arrRawFish['added_on'] = date("Y-m-d H:i:s");
            //exit;
            $rawfish = Rawfish::create($arrRawFish);
            $nRawFishID = $rawfish->id;
            //echo $nRawFishID;
        }
        catch (Exception $e)
        {
            $html = '<html><body><div><p>'.$e->getMessage().'</p></div></body></html>';
            $to = "atif.majid10@gmail.com";
            $subject = 'Error Report on Innri Rawmaterial!';
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
        $rawfishobj = DB::table('rawfish')
            ->leftJoin('employees', 'fish_received_by', '=', 'employees.id')
            ->select('rawfish.*', 'employees.name')
            ->where('rawfish.id', $id)
            ->get();
        $rawfish = $rawfishobj[0];
        $rawFishPhotos = Rawfishphoto::where('raw_fish_id', $id)->get();
        $strLotNr = $rawfish->lot_nr;
        //$productions = Production::where('lot_number', $strLotNr)->get();
        $productions = DB::table('production')
            ->leftJoin('recipes', 'recipe_id', '=', 'recipes.id')
            ->select('production.*','recipes.title')
            ->where('lot_number', $strLotNr)
            ->get();
        //$improvements = Improvements::where('lot_nr', $strLotNr)->get();
        $Improvements = DB::table('improvements')
            ->leftJoin('employees', 'assigned_to', '=', 'employees.id')
            ->select('improvements.*','employees.name')
            ->where('lot_nr', $strLotNr)
            ->get();

        return view('rawmaterial.show', compact('rawfish', 'rawFishPhotos', 'productions', 'Improvements'));
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
