<?php

namespace App\Console\Commands;

use App\Mail\SendEmail;
use App\Models\Production;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class TaskCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Send CSV export of today's production in email";
    protected $location = "";
    protected $nRowCount = 0;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$allProduction = Production::all();
        $strDateToday = date("Y-m-d");
        $allProduction = Production::where('production_date', $strDateToday)->get();
        $this->nRowCount = $allProduction->count();
        if($this->nRowCount>0)
        {
            $strOutPut = "";
            foreach ($allProduction as $aProduction)
            {
                $strDate = date("d-m-Y", strtotime($aProduction->production_date));
                $strWareHouse = $aProduction->warehouse;
                $strQty = $aProduction->quantity_scaled;
                $strProductNumber = $aProduction->product_number;
                $strLotNumber = $aProduction->lot_number;
                //$strOutPut .= $strProductNumber.";".$strDate.";;".$strWareHouse.";".$strQty.";".$strLotNumber."\r\n";
                $strOutPut .= $strProductNumber.";;".$strQty.";;;".$strLotNumber.";\r\n";
            }

            $disk = Storage::disk('local');
            $path = 'csv-files/';
            $fileName = "birgdir-".date("d-m-Y").".csv";

            $csvFile = tmpfile();
            $csvPath = stream_get_meta_data($csvFile)['uri'];
            $fd = fopen($csvPath, 'w');
            fwrite($fd, $strOutPut);
            fclose($fd);
            $disk->putFileAs('', $csvPath, $path.$fileName);
            $this->location = storage_path("app/".$path.$fileName);
        }

        //Mail::to("atif.majid10@gmail.com")->send(new SendEmail($location));
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return 0;
        //Mail::to("atif.majid10@gmail.com")->send(new SendEmail);
        if($this->nRowCount>0)
        {
            Mail::to("jon.arnar@fisherman.is")
                ->bcc("atif.majid10@gmail.com")
                ->send(new SendEmail($this->location));
        }
    }
}
