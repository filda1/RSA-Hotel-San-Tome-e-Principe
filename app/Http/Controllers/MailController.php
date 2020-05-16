<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Demoemail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function home()
    {
        return view("welcome");
    }
    public function send(Request $get)
    {
        $email= $get->email; 
        $name = $get->name; 
        $message = $get->message; 
        $phone = $get->phone; 
       
//Mail::to('candidaturas.urh@gmail.com')->send(new DemoEmail($name,$message));
     
Mail::to('rsaeco@yahoo.com')->send(new Demoemail($name,$message));
 
    }
}