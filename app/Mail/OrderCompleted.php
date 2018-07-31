<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCompleted extends Mailable
{
    use Queueable, SerializesModels;

    protected $pdfPath;
    public $subject;
    protected $recipientName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($path, $subject, $recipientName)
    {
        $this->pdfPath = $path;
        $this->subject = $subject;
        $this->recipientName = $recipientName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invoice', array('recipientName' => $this->recipientName))
        ->subject($this->subject)
        ->attach($this->pdfPath);
    }
}
