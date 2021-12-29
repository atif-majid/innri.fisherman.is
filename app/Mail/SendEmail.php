<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $path_to_file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($strPath)
    {
        //
        $this->path_to_file = $strPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->from('innri@fisherman.is')
                ->subject("Today's Production - ".date("d-m-Y"))
                ->view('email-birgdir')
                ->attach($this->path_to_file);
    }
}
