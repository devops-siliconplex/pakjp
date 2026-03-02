<?php

namespace App\Mail;

use App\Http\Helpers\AppMessages;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data ;
        $address = env('MAIL_FROM_ADDRESS');
        $subject = AppMessages::FORM_SUBMISSION_SUBJECT;
        $name = env('MAIL_FROM_NAME');
        $view = $this->view('emails.submission_form',compact('data'))->from($address, $name)
        ->to('huzaif.siliconplex@gmail.com')
        ->replyTo($address, $name)
        ->subject($subject);
        // if(isset($data['file']) && !empty($data['file'])){
        //     foreach($data['file'] as $file){
        //         $view = $view->attach($file);
        //     }
        // }
        return $view;
        
    }
}
