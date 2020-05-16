<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rating;

class RatingController extends Controller
{
    function index()
    {
     return view('welcome');
    }

    function send(Request $request)
    {


        //$posts = rating::all();
   

        $funcionario = (int)($request->funcionario);
        $comodidad = (int)($request->comodidad);
        $limpeza = (int)($request->limpeza);
        $conforto = (int)($request->conforto);
        $qualidade = (int)($request->qualidade);
        $localizacao = (int)($request->localizacao);
        $wifi = (int)($request->wifi);


        if ((  $funcionario ==null ) or ($comodidad ==null) or ($limpeza ==null) or ($conforto ==null) or ($qualidade ==null) or ($localizacao==null) or ($wifi ==null))
        {
           
            return back();
        }
      

        $total = $funcionario + $comodidad + $limpeza + $conforto + $qualidade + $localizacao + $wifi;

        $post = new rating;
        $post->funcionarios = $funcionario;
        $post->comodidades = $comodidad;
        $post->limpeza = $limpeza;
        $post->conforto = $conforto;
        $post->qualidade = $qualidade;
        $post->localizacao = $localizacao;
        $post->wifi = $wifi ;
        $post->total = $total;
        

        
        $post->save();
                        
        return redirect(route('welcome'));

        //return $total;
      //return view('environment',compact('posts'));
      //return $total;

    }
}

?>