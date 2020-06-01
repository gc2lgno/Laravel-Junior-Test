<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Se ha registrado una nueva Compañía";

    public $data;
    public $logo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $logo)
    {
        $this->data = $data;
        $this->logo = $logo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('companies.email')->attachFromStorage($this->logo);
    }
}
