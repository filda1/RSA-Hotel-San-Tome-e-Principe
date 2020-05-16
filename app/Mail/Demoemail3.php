<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Demoemail3 extends Mailable
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
        
     
        $str =(explode("*",$e_message));
        
        $or =(explode(" ",$str[0]));
              
        
        //$all = "name:". $e_subject." Message:".$e_message;
        
        return $this->view('sendemail', compact('e_message'))->subject("Reserva Roça Santo António Ecolodge");
        
        //return $this->view('voucher', compact('e_message'))->subject($e_subject);
    }
}