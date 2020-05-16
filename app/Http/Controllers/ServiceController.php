<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Room;
use App\Reserve;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;

class ServiceController extends Controller
{

    public function index()
    {
   
     $posts = hotelpicture::all();
                        
      return view('services',compact('posts'));

    }

}
