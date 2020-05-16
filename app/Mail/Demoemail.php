<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Demoemail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $sub;
     public $mes;
    public function __construct($name,$message)
    {
        $this ->$sub =$name;
        $this ->$mes =$message;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject = $this ->$sub;
        $e_message = $this ->$mes;
        //$all = "name:". $e_subject." Message:".$e_message;
        return $this->view('sendemail', compact('e_message'))->Subject( $e_subject);
      
    }
}