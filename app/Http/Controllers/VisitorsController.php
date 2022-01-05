<?php

namespace App\Http\Controllers;

use App\Models\Visitors;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bPass = false;
        $strIP = $_SERVER['REMOTE_ADDR'];
        $arrIP = explode(".", $strIP);
        $integer_IP = (16777216 * $arrIP[0]) + (65536 * $arrIP[1]) + (256*$arrIP[2]) + $arrIP[3];
        $arrIceland = array();
        $arrIceland[] = array('start'=>85409792, 'end'=>85417983);
        $arrIceland[] = array('start'=>521105408, 'end'=>521107455);
        $arrIceland[] = array('start'=>533825536, 'end'=>533831679);
        $arrIceland[] = array('start'=>533839872, 'end'=>533856255);
        $arrIceland[] = array('start'=>630734848, 'end'=>630736895);
        $arrIceland[] = array('start'=>634200064, 'end'=>634202111);
        $arrIceland[] = array('start'=>636170496, 'end'=>636170751);
        $arrIceland[] = array('start'=>773218304, 'end'=>773222399);
        $arrIceland[] = array('start'=>773625856, 'end'=>773627903);
        $arrIceland[] = array('start'=>781520896, 'end'=>781524991);
        $arrIceland[] = array('start'=>783726592, 'end'=>783728639);
        $arrIceland[] = array('start'=>787464192, 'end'=>787480575);
        $arrIceland[] = array('start'=>961937408, 'end'=>961945599);
        $arrIceland[] = array('start'=>1049722880, 'end'=>1049731071);
        $arrIceland[] = array('start'=>1311307776, 'end'=>1311309823);
        $arrIceland[] = array('start'=>1334239232, 'end'=>1334239487);
        $arrIceland[] = array('start'=>1334240000, 'end'=>1334240255);
        $arrIceland[] = array('start'=>1334242304, 'end'=>1334242559);
        $arrIceland[] = array('start'=>1334243328, 'end'=>1334247423);
        $arrIceland[] = array('start'=>1336631296, 'end'=>1336633343);
        $arrIceland[] = array('start'=>1358434304, 'end'=>1358438399);
        $arrIceland[] = array('start'=>1359937536, 'end'=>1359970303);
        $arrIceland[] = array('start'=>1383088128, 'end'=>1383096319);
        $arrIceland[] = array('start'=>1385447424, 'end'=>1385455615);
        $arrIceland[] = array('start'=>1390215168, 'end'=>1390280703);
        $arrIceland[] = array('start'=>1403846656, 'end'=>1403863039);
        $arrIceland[] = array('start'=>1433681920, 'end'=>1433690111);
        $arrIceland[] = array('start'=>1439023104, 'end'=>1439039487);
        $arrIceland[] = array('start'=>1440481280, 'end'=>1440514047);
        $arrIceland[] = array('start'=>1475158016, 'end'=>1475158527);
        $arrIceland[] = array('start'=>1475159296, 'end'=>1475160063);
        $arrIceland[] = array('start'=>1486159872, 'end'=>1486192639);
        $arrIceland[] = array('start'=>1486303232, 'end'=>1486305279);
        $arrIceland[] = array('start'=>1494319104, 'end'=>1494327295);
        $arrIceland[] = array('start'=>1500020736, 'end'=>1500028927);
        $arrIceland[] = array('start'=>1503690752, 'end'=>1503723519);
        $arrIceland[] = array('start'=>1539802624, 'end'=>1539802879);
        $arrIceland[] = array('start'=>1540363776, 'end'=>1540364031);
        $arrIceland[] = array('start'=>1540947712, 'end'=>1540947967);
        $arrIceland[] = array('start'=>1541172736, 'end'=>1541172991);
        $arrIceland[] = array('start'=>1541179904, 'end'=>1541180159);
        $arrIceland[] = array('start'=>1542129152, 'end'=>1542129407);
        $arrIceland[] = array('start'=>1546371072, 'end'=>1546373119);
        $arrIceland[] = array('start'=>1566525440, 'end'=>1566527487);
        $arrIceland[] = array('start'=>1566564352, 'end'=>1566566399);
        $arrIceland[] = array('start'=>1586403328, 'end'=>1586405375);
        $arrIceland[] = array('start'=>2153387264, 'end'=>2153387519);
        $arrIceland[] = array('start'=>2156718080, 'end'=>2156720127);
        $arrIceland[] = array('start'=>2194669568, 'end'=>2194735103);
        $arrIceland[] = array('start'=>2508083200, 'end'=>2508085247);
        $arrIceland[] = array('start'=>2548832256, 'end'=>2548832511);
        $arrIceland[] = array('start'=>2572976128, 'end'=>2572984319);
        $arrIceland[] = array('start'=>2640379904, 'end'=>2640388095);
        $arrIceland[] = array('start'=>2644312064, 'end'=>2644376575);
        $arrIceland[] = array('start'=>2644376832, 'end'=>2644377599);
        $arrIceland[] = array('start'=>2698117120, 'end'=>2698182655);
        $arrIceland[] = array('start'=>2953453568, 'end'=>2953455615);
        $arrIceland[] = array('start'=>2956582912, 'end'=>2956587007);
        $arrIceland[] = array('start'=>2987601920, 'end'=>2987606015);
        $arrIceland[] = array('start'=>3002601472, 'end'=>3002603519);
        $arrIceland[] = array('start'=>3105165312, 'end'=>3105166335);
        $arrIceland[] = array('start'=>3105240832, 'end'=>3105241087);
        $arrIceland[] = array('start'=>3105357824, 'end'=>3105358847);
        $arrIceland[] = array('start'=>3105487872, 'end'=>3105488895);
        $arrIceland[] = array('start'=>3105563648, 'end'=>3105564671);
        $arrIceland[] = array('start'=>3105735680, 'end'=>3105736703);
        $arrIceland[] = array('start'=>3105798144, 'end'=>3105799167);
        $arrIceland[] = array('start'=>3106141184, 'end'=>3106142207);
        $arrIceland[] = array('start'=>3106269184, 'end'=>3106269439);
        $arrIceland[] = array('start'=>3106437120, 'end'=>3106438143);
        $arrIceland[] = array('start'=>3106729984, 'end'=>3106731007);
        $arrIceland[] = array('start'=>3106753536, 'end'=>3106754559);
        $arrIceland[] = array('start'=>3107458048, 'end'=>3107459071);
        $arrIceland[] = array('start'=>3107863552, 'end'=>3107864575);
        $arrIceland[] = array('start'=>3108197376, 'end'=>3108198399);
        $arrIceland[] = array('start'=>3108221952, 'end'=>3108222975);
        $arrIceland[] = array('start'=>3109477376, 'end'=>3109478399);
        $arrIceland[] = array('start'=>3109919744, 'end'=>3109920767);
        $arrIceland[] = array('start'=>3110435840, 'end'=>3110436863);
        $arrIceland[] = array('start'=>3110812672, 'end'=>3110813695);
        $arrIceland[] = array('start'=>3110953984, 'end'=>3110955007);
        $arrIceland[] = array('start'=>3111068672, 'end'=>3111069695);
        $arrIceland[] = array('start'=>3111161856, 'end'=>3111162879);
        $arrIceland[] = array('start'=>3111177216, 'end'=>3111178239);
        $arrIceland[] = array('start'=>3111526400, 'end'=>3111527423);
        $arrIceland[] = array('start'=>3111615488, 'end'=>3111616511);
        $arrIceland[] = array('start'=>3111896064, 'end'=>3111897087);
        $arrIceland[] = array('start'=>3112038400, 'end'=>3112039423);
        $arrIceland[] = array('start'=>3112057856, 'end'=>3112058879);
        $arrIceland[] = array('start'=>3112307712, 'end'=>3112308735);
        $arrIceland[] = array('start'=>3112872960, 'end'=>3112873983);
        $arrIceland[] = array('start'=>3113453568, 'end'=>3113454591);
        $arrIceland[] = array('start'=>3113464832, 'end'=>3113465855);
        $arrIceland[] = array('start'=>3113776128, 'end'=>3113777151);
        $arrIceland[] = array('start'=>3113907200, 'end'=>3113908223);
        $arrIceland[] = array('start'=>3114013696, 'end'=>3114014719);
        $arrIceland[] = array('start'=>3114191872, 'end'=>3114192895);
        $arrIceland[] = array('start'=>3114245632, 'end'=>3114245887);
        $arrIceland[] = array('start'=>3114288640, 'end'=>3114289151);
        $arrIceland[] = array('start'=>3114641920, 'end'=>3114642175);
        $arrIceland[] = array('start'=>3114908672, 'end'=>3114909695);
        $arrIceland[] = array('start'=>3115233280, 'end'=>3115234303);
        $arrIceland[] = array('start'=>3115332608, 'end'=>3115333631);
        $arrIceland[] = array('start'=>3115418624, 'end'=>3115419647);
        $arrIceland[] = array('start'=>3115535360, 'end'=>3115536383);
        $arrIceland[] = array('start'=>3115543552, 'end'=>3115544575);
        $arrIceland[] = array('start'=>3116361728, 'end'=>3116362751);
        $arrIceland[] = array('start'=>3116797952, 'end'=>3116798975);
        $arrIceland[] = array('start'=>3118175232, 'end'=>3118176255);
        $arrIceland[] = array('start'=>3118283776, 'end'=>3118284799);
        $arrIceland[] = array('start'=>3118313472, 'end'=>3118314495);
        $arrIceland[] = array('start'=>3118327808, 'end'=>3118328831);
        $arrIceland[] = array('start'=>3225934336, 'end'=>3225934591);
        $arrIceland[] = array('start'=>3230867968, 'end'=>3230868223);
        $arrIceland[] = array('start'=>3237870080, 'end'=>3237870335);
        $arrIceland[] = array('start'=>3238264832, 'end'=>3238330367);
        $arrIceland[] = array('start'=>3245036544, 'end'=>3245037567);
        $arrIceland[] = array('start'=>3245150208, 'end'=>3245154303);
        $arrIceland[] = array('start'=>3256827136, 'end'=>3256827391);
        $arrIceland[] = array('start'=>3261718528, 'end'=>3261726719);
        $arrIceland[] = array('start'=>3264217088, 'end'=>3264282623);
        $arrIceland[] = array('start'=>3280126208, 'end'=>3280126463);
        $arrIceland[] = array('start'=>3280130816, 'end'=>3280131071);
        $arrIceland[] = array('start'=>3558785024, 'end'=>3558801407);
        $arrIceland[] = array('start'=>3565084672, 'end'=>3565092863);
        $arrIceland[] = array('start'=>3565494272, 'end'=>3565494527);
        $arrIceland[] = array('start'=>3584524288, 'end'=>3584532479);
        $arrIceland[] = array('start'=>3585114112, 'end'=>3585122303);
        $arrIceland[] = array('start'=>3585433600, 'end'=>3585441791);
        $arrIceland[] = array('start'=>3586023424, 'end'=>3586031615);
        $arrIceland[] = array('start'=>3587538944, 'end'=>3587547135);
        $arrIceland[] = array('start'=>3587981312, 'end'=>3587997695);
        $arrIceland[] = array('start'=>3627842048, 'end'=>3627842303);
        $arrIceland[] = array('start'=>3641278464, 'end'=>3641282559);
        $arrIceland[] = array('start'=>3642535936, 'end'=>3642540031);
        $arrIceland[] = array('start'=>3650592768, 'end'=>3650600959);
        $arrIceland[] = array('start'=>3651915776, 'end'=>3651919871);
        foreach($arrIceland as $iprange)
        {
            if($iprange['start']<=$integer_IP && $integer_IP<=$iprange['end'])
            {
                $bPass = true;
                break;
            }
        }
        if($bPass)
        {
            return view('visitors.index');
        }
        else {
            return view('visitors.not_allowed');
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
        /*$request->validate(
            [
                'strFullName' => 'required',
                'strCompanyInvited' => 'required',
                'strCompany' => 'required',
                'strPurpose' => 'required'
            ],
            [
                'strFullName.required' => 'Please provide full name',
                'strCompanyInvited.required' => 'Please chose if you are invited or just visiting',
                'strCompany.required' => 'Please provide company name',
                'strPurpose.required' => 'Please chose purpose of visit'
            ]
        );*/
        $arrErrors = array();
        if(!$request->strFullName)
        {
            $arrErrors[] = "Please enter your name!";
        }
        if(!$request->strStatus)
        {
            $arrErrors[] = "Please chose if you have been invited or just visiting";
        }
        if(!$request->strCompany)
        {
            $arrErrors[] = "Please provide company name";
        }
        if(!$request->strPurpose)
        {
            $arrErrors[] = "Please chose purpose of visit";
        }
        if($request->strPurpose=='Other' && !$request->strReason)
        {
            $arrErrors[] = "Please provide reason for visit";
        }
        if(empty($arrErrors))
        {
            //Store in db
            $arrData = array(
                'fullname'=>$request->strFullName,
                'status'=>$request->strStatus,
                'company'=>$request->strCompany,
                'purpose'=>$request->strPurpose,
                'visit_date_time'=>date("Y-m-d H:i:s"),
                'ip'=>$_SERVER['REMOTE_ADDR']
            );
            if($request->strPurpose=='Other')
            {
                $arrData['purpose_other'] = $request->strReason;
            }
            Visitors::create($arrData);
            echo "Data recorded successfully";
        }
        else{
            for($i=0;$i<count($arrErrors);$i++)
            {
                echo $arrErrors[$i]."<br>";
            }
        }
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function show(Visitors $visitors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitors $visitors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitors $visitors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitors  $visitors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitors $visitors)
    {
        //
    }
}
