<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Reserve;
use App\Room;

class CommentsController extends Controller
{
   
    public function index()
    {

        
        $id = Auth::user()->id ;
        $datos = reserve::where('id_user',$id)->get();
        $fin = reserve::where('id_user',$id)->count();
                        
      return view('comments',compact('datos','fin'));
    }
}
