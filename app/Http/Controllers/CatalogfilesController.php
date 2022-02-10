<?php

namespace App\Http\Controllers;

use App\Models\Catelogfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogfilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $strStatus = Auth::user()->getempStatus();
            if($strStatus=='inactive')
            {
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/');
            }
            else
            {
                return $next($request);
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
        $catelogfiles = Catelogfiles::where('status', 'active')->get();
        return view('catelogfiles.index', compact('catelogfiles'));
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
        $file = $request->file('file');
        $destination = 'uploads/catalogs';
        $strFileName = $file->getClientOriginalName();
        $strType = $file->getMimeType();

        //$strType = $file->getMimeType();
        $strTitle = $request->file_caption;
        if(empty($strTitle))
        {
            $strTitle = pathinfo($strFileName,PATHINFO_FILENAME);
        }
        $file->move($destination, $strFileName);

        $arrFileRec = array(
            'title'=>$strTitle,
            'filename'=>$strFileName,
            'file_type'=>$strType,
            'uploaded_by'=>Auth::user()->getempid(),
            'uploaded_on'=>date("Y-m-d H:i:s"),
            'status'=>'active'
        );
        Catelogfiles::create($arrFileRec);
    }

    function getfiles()
    {
        $result  = array();
        $catelogfiles = Catelogfiles::where('status', 'active')->get();
        $destination = 'uploads/catalogs/';
        foreach($catelogfiles as $thisfile)
        {
            $obj['name'] = $thisfile->filename;
            $obj['size'] = filesize($destination.$thisfile->filename);
            $obj['id'] = $thisfile->id;
            $obj['type'] = $thisfile->file_type;
            $obj['caption'] = $thisfile->title;
            $result[] = $obj;
        }

        header('Content-type: text/json');              //3
        header('Content-type: application/json');
        echo json_encode($result);
    }

    function delfiles(Request $request)
    {
        $nFileId = $request->fileid;
        if($nFileId>0)
        {
            $arrUpdate = array('status'=>'inactive');
            Catelogfiles::find($nFileId)->update($arrUpdate);
            echo "File deleted successfully";
        }
        else{
            echo "File could not be deleted at this time. Please try again later.";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catelogfiles  $catelogfiles
     * @return \Illuminate\Http\Response
     */
    public function show(Catelogfiles $catelogfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catelogfiles  $catelogfiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Catelogfiles $catelogfiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catelogfiles  $catelogfiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catelogfiles $catelogfiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catelogfiles  $catelogfiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catelogfiles $catelogfiles)
    {
        //
    }
}
