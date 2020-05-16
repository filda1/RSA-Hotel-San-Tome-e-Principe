<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Room;
use App\Roomeng;
use App\Reserve;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;

class EnvironmentController extends Controller
{

    public function index()
    {
   
     $posts = hotelpicture::all();
     $rooms = room::all();
     $engs = roomeng::all();
                        
      return view('environment',compact('posts','rooms','engs'));

    }

}
