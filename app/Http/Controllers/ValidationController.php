<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use Illuminate\Support\Facades\Mail;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use App\Rating;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;

class ValidationController extends Controller
{
    function index()
    {
        
        
        $posts = hotelpicture::all();
        $rooms = room::all();
        $engs = roomeng::all();
     
     
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
    
        return view('validation',compact('funcionarios', 'comodidades', 'limpeza', 'conforto', 'qualidade', 'localizacao', 'wifi', 'total','pfuncionarios','pcomodidades','plimpeza', 'porconforto', 'porqualidade', 'porlocalizacao','porcewifi','posts','rooms','engs'));
    }

 
}

?>