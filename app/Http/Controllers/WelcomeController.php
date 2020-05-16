<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Room;
use App\Reserve;
use App\Hotelpicture;
use App\Roompicture;
use App\User;
use App\Rating;
use Datetime;

class WelcomeController extends Controller
{
    
    public function index()
    {   
        // Elimina registros de sobra en BD
        $data = reserve::where ( 'id_room', null )   
                        ->delete();


    
     $posts = hotelpicture::all();

     //Validation
     $funcionarios = rating::all()->sum('funcionarios');
     $comodidades = rating::all()->sum('comodidades');
     $limpeza = rating::all()->sum('limpeza');
     $conforto = rating::all()->sum('conforto');
     $qualidade = rating::all()->sum('qualidade');
     $localizacao = rating::all()->sum('localizacao');
     $wifi = rating::all()->sum('wifi');
    
     $numero = rating::all()->count();  
     $sum = rating::all()->sum('total');
 
     $fun= $funcionarios;
     $como= $comodidades;
     $lim= $limpeza; 
     $confo= $conforto;
     $qual= $qualidade;
     $local= $localizacao;
     $wi= $wifi;

     $Stotal = ($fun + $como + $lim + $confo + $qual + $local + $wi );
     $total = round(($Stotal)/7) ;
 
 
     if ( $funcionarios<=100 ){
         $pfuncionarios = ($funcionarios * 100)/100;
     }
     else{
         $pfuncionarios = 100;
     }
 
 
    if ( $comodidades<=100 ){
         $pcomodidades = ($comodidades * 100)/100;
     }
     else{
         $pcomodidades = 100;
     }
 
     if ( $limpeza<=100 ){
         $plimpeza = ($limpeza *100)/100;
     }
     else{
         $plimpeza = 100;
     }
 
     if ( $conforto<=100 ){
         $porconforto = ($conforto * 100)/100;
     }
     else{
         $porconforto = 100;
     }
 
     if ( $qualidade <=100 ){
         $porqualidade  = ($qualidade  * 100)/100;
     }
     else{
         $porqualidade  = 100;
     }
 
     if ( $localizacao <=100 ){
         $porlocalizacao  = ($localizacao  * 100)/100;
     }
     else{
         $porlocalizacao  = 100;
     }
 
     
     if ( $wifi <=100 ){
         $porcewifi  = ($wifi * 100)/100;
     }
     else{
         $porcewifi  = 100;
     }
     
     

     
      return view('welcome',compact('posts','total'));

        //return view('welcome'); 
    }

}
