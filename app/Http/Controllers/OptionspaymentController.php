<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use Carbon\Carbon;
use Datetime;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use Illuminate\Support\Facades\Mail;



class OptionspaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {
      $ide3 = $request->ide3;
      $ide4 = $request->ide4;
      $ide5 = $request->ide5;
      $ide6 = $request->ide6;
      
      $precio3 = $request->precio3;
      $precio4 = $request->precio4;
      $precio5 = $request->precio5;
      $precio6 = $request->precio6;
      
      $roomcama1 = $request->roomcama1;
      $roomcama2 = $request->roomcama2;
      $roomcama3 = $request->roomcama3;
      $roomcama4 = $request->roomcama4;
      
     $superior = $request->superior;
     
      $uno = $request->uno;
      
       $endi = $request->endi;
       $endis = $request->endis;
       $endd = $request->endd;
       $endds = $request->endds;
       
       $cama = $request->cama;
       $precio_duplo = $request->precio_duplo;
       $precio_duplos= $request->precio_duplos;
       $precio_individual = $request->precio_individual;
       $precio_individuals = $request->precio_individuals;
      
      
      $persona = $request->persona;
      $children = $request->children;
      $baby = $request->baby;
      $persona_extraroom = $request->persona_extraroom;
      $persona_extraroom2 = $request->persona_extraroom2;
      $iva = $request->iva;
      $infoiva = $request->infoiva;
      $total = $request->total;
      $totalfinal = $request->totalfinal;
      $end = $request->end;
      $lang = $request->lang;
      
      $precio_children= $request->precio_children;
      $precio_baby= $request->precio_baby;
      
       $checkin= $request->checkini;
       $checkout= $request->checkouti;
       
      $time = strtotime($checkin);
      $time2 = strtotime($checkout);
      $newformat = date('Y-m-d',$time);
      $newformat2 = date('Y-m-d',$time2);

      $id_extraroom= $request->id_extraroom;
      //$price_extraroom= $request->price_extraroom;
      //$name_extraroom= $request->name_extraroom;
      $checkin_extraroom= $request->checkin_extraroom;
      $checkout_extraroom= $request->checkout_extraroom;
      $time_extraroom  = strtotime($checkin_extraroom );
      $time2_extraroom  = strtotime($checkout_extraroom );
      $newformat_extraroom  = date('Y-m-d',$time_extraroom );
      $newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

      
      $id_extraroom2= $request->id_extraroom2;
      //$price_extraroom2= $request->price_extraroom2;
      //$name_extraroom2= $request->name_extraroom2;
      $checkin_extraroom2= $request->checkin_extraroom2;
      $checkout_extraroom2= $request->checkout_extraroom2;
      $time_extraroom2  = strtotime($checkin_extraroom2);
      $time2_extraroom2  = strtotime($checkout_extraroom2 );
      $newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
      $newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
      
/////////////////////////////////////////////////////////////////// NUMERO DE DIAS /////////////////////////////////////////////////////////////////////////////////////////////////////

         $fechaActual = $checkout;
         $fechaMenor = Carbon::parse($checkin);
         $diferencia = $fechaMenor->diffInDays($fechaActual);
         $numero_dias = (int)$diferencia;
      
/////////////////////////////////////////////////////////////////// FECHAS /////////////////////////////////////////////////////////////////////////////////////////////////////////////

// TEMPORADAS 
$date = Carbon::now();
$date2 = Carbon::now();


$day = $date->format('d');
$month = $date->format('m');
$year = $date->format('Y');

$addyear1= $date->addYear(1);
$addyear= $addyear1->format('Y');

$hoy = $year ;

$date3 = Carbon::now();
$menosyear1= $date3->subYears(1);
$menosyear = $menosyear1->format('Y');


/*$dtemporada1A2 = $date->format('30-06-'.$year); // DIA, MES, ANO
$dtemporada1A3 = $date->format('10-01-'.$year);

$dtemporada1B1 = $date->format('07-01-'.$year);
$dtemporada1B2 = $date->format('10-31-'.$year);


$dtemporada1C1 = $date->format('11-01-'.$year);
$dtemporada1C2 = $date->format('12-15-'.$year);


$dtemporada1D1 = $date->format('12-16-'.$year);
$dtemporada1D2 = $date->format('01-09-'.$addyear);*/

//$temporadaA1 = strtotime($temporadaA);

//$nowHoy = $day.'-'.$month.'-'.$year;  // HOY
//$nowHoy1 = strtotime($nowHoy);
//$nowHoy = $month."-".$day."-".$year;  // HOY


 $Y = date("Y");
 $M = date("m");
 $D = date("d");


$nowHoy = $D."-".$M."-".$Y;  // HOY

// TEMPORADA 1
$temporadaAA = "10-01-".$year;                    //  Dia, Mes , Ano
$temporadaAB = "30-06-".$year; 

// TEMPORADA 2
$temporadaBA = "01-07-".$year;                    //  Dia, Mes , Ano
$temporadaBB = "31-10-".$year; 


// TEMPORADA 3
$temporadaCA = "01-11-".$year;                    //  Dia, Mes , Ano
$temporadaCB = "15-12-".$year; 


// TEMPORADA 4
$temporadaDA = "16-12-".$year;                    //  Dia, Mes , Ano
$temporadaDB = "09-01-".$addyear; 


// TEMPORADA 4 inicio de ano
$temporadaDAi = "16-12-".$menosyear;                    //  Dia, Mes , Ano
$temporadaDBi = "09-01-".$year; 



     $checkin= $request->checkini;
       $checkout= $request->checkouti;
       
       if($checkin < $checkout){
                
                $checkin0 = $checkin;
                $checkout0 = $checkout;
            }
            
            if($checkin > $checkout){
                
                $checkin0 =  $checkout;
                $checkout0 = $checkin;
            }
            
     $checkin1 = new DateTime($checkin0);
      $checkout1 = new DateTime($checkout0);
    

      $dateHoy = new DateTime($nowHoy); 

      $dateTemporadaA1 = new DateTime($temporadaAA); 
      $dateTemporadaA2 = new DateTime($temporadaAB); 

      $dateTemporadaB1 = new DateTime($temporadaBA); 
      $dateTemporadaB2 = new DateTime($temporadaBB); 

      $dateTemporadaC1 = new DateTime($temporadaCA); 
      $dateTemporadaC2 = new DateTime($temporadaCB); 

      $dateTemporadaD1 = new DateTime($temporadaDA); 
      $dateTemporadaD2 = new DateTime($temporadaDB); 
      
       $dateTemporadaD1i = new DateTime($temporadaDAi); 
      $dateTemporadaD2i = new DateTime($temporadaDBi); 


        // Compare the dates , TEMPORADA1
        //if ( ($dateHoy >= $dateTemporadaA1 ) && ( $dateHoy <= $dateTemporadaA2) ) {
       if ( ($checkin1 >= $dateTemporadaA1 ) && ( $checkout1 <= $dateTemporadaA2) ) {
           
          $T1 = "OK";

        }
       

       
        // TEMPORADA2
        //if ( ($dateHoy >= $dateTemporadaB1 ) && ( $dateHoy <= $dateTemporadaB2) ) {
       if ( ($checkin1 >= $dateTemporadaB1 ) && ( $checkout1 <= $dateTemporadaB2) ) {
           
          $T2 = "OK";

        }
       else {

        $T2 = " ";
       }


        // TEMPORADA3
        //if ( ($dateHoy >= $dateTemporadaC1 ) && ( $dateHoy <= $dateTemporadaC2) ) {
       if ( ($checkin1 >= $dateTemporadaC1 ) && ( $checkout1 <= $dateTemporadaC2) ) {
           
          $T3 = "OK";

        }
       else {

          $T3 = " ";
       }


        // TEMPORADA4
        //if ( ($dateHoy >= $dateTemporadaD1 ) && ( $dateHoy <= $dateTemporadaD2) ) {
       if ( ($checkin1 >= $dateTemporadaD1 ) && ( $checkout1 <= $dateTemporadaD2) ) {
           
          $T4 = "OK";

        }
     


       if ( ($checkin1 >= $dateTemporadaD1i ) && ( $checkout1 <= $dateTemporadaD2i) ) {
       
          $T4 = "OK";

        }
    
       

       if ($numero_dias > 3){

        $dataO = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                         ->get();

                       

       }

       if ($numero_dias <= 3){

        $dataO = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                      ->get();

      }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////      
      
      
      $uniqid = uniqid();
        $fin= (int)$end;

        if( $lang=="pt" ){

          if( ($request->options ==0)){
            // Cash
            if($superior=="no"){
                
               $data = room::where ( 'id', 'LIKE', '%' . 1 . '%' )
                          ->get(); 
                          
               $dataex = room::where ( 'id', 'LIKE', '%' . 5 . '%' )
                          ->get(); 
               
            }
            else{
                
                $datas = room::where ( 'id', 'LIKE', '%' . 3 . '%' )
                          ->get(); 
                          
                $dataexs = room::where ( 'id', 'LIKE', '%' . 6 . '%' )
                          ->get();
            
            }  

     
            
            return view('invoice',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2','newformat', 
            'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 
            'time2_extraroom', 'newformat_extraroom','newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 
            'checkout_extraroom2','time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end',
            'fin','person_roomindividual','uniqid','totalfinal','iva','infoiva','precio_children','precio_baby','T1','T2','T3','T4','numero_dias',
            'ide3','ide4','ide5','ide6','precio3','precio4','precio5','precio6','roomcama1','roomcama2','roomcama3','roomcama4','datas','dataex','dataexs','superior','endd','endds','endi','endis','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals','uno'));
  
  
           
           }
           else{
           // Credit Card

           
           if($superior=="no"){
                
               $data = room::where ( 'id', 'LIKE', '%' . 1 . '%' )
                          ->get(); 
                          
               $dataex = room::where ( 'id', 'LIKE', '%' . 5 . '%' )
                          ->get(); 
               
            }
            else{
                
                $datas = room::where ( 'id', 'LIKE', '%' . 3 . '%' )
                          ->get(); 
                          
                $dataexs = room::where ( 'id', 'LIKE', '%' . 6 . '%' )
                          ->get();
            
            };

           $name_extraroom = $dataroom1->name_room;
           $name_extraroom2 = $dataroom2->name_room;
           $person_roomindividual = 1;
           $price_extraroom = $dataroom1->price;
           $price_extraroom2 = $dataroom2->price;

           return view('stripe',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
           , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
           , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 
           'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual',
           'uniqid','totalfinal','iva','infoiva','precio_children','precio_baby','T1','T2','T3','T4','numero_dias','ide3','ide4','ide5',
           'ide6','precio3','precio4','precio5','precio6','roomcama1','roomcama2','roomcama3','roomcama4','datas','dataex','dataexs','superior','endd','endds','endi','endis','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals','uno'));
         


           }
  
        }
        else{  // ENGLISH IDIOMA

          if( ($request->options ==0)){
            // Cash
   
           if($superior=="no"){
                
               $data = roomeng::where ( 'id', 'LIKE', '%' . 1 . '%' )
                          ->get(); 
                          
               $dataex = roomeng::where ( 'id', 'LIKE', '%' . 5 . '%' )
                          ->get(); 
               
            }
            else{
                
                $datas = roomeng::where ( 'id', 'LIKE', '%' . 3 . '%' )
                          ->get(); 
                          
                $dataexs = roomeng::where ( 'id', 'LIKE', '%' . 6 . '%' )
                          ->get();
            
            }
            $name_extraroom = $dataroom1->name_room;
            $name_extraroom2 = $dataroom2->name_room;
            $person_roomindividual = 1;
            $price_extraroom = $dataroom1->price;
            $price_extraroom2 = $dataroom2->price;
           
            
           return view('invoice',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
        , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
        , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 
        'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual',
        'uniqid','totalfinal','iva','infoiva','precio_children','precio_baby','T1','T2','T3','T4','numero_dias','ide3','ide4','ide5',
        'ide6','precio3','precio4','precio5','precio6','roomcama1','roomcama2','roomcama3','roomcama4','datas','dataex','dataexs','superior','endd','endds','endi','endis','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals','uno'));
  
  
           
           }
           else{
           // Credit Card

          if($superior=="no"){
                
               $data = roomeng::where ( 'id', 'LIKE', '%' . 1 . '%' )
                          ->get(); 
                          
               $dataex = roomeng::where ( 'id', 'LIKE', '%' . 5 . '%' )
                          ->get(); 
               
            }
            else{
                
                $datas = roomeng::where ( 'id', 'LIKE', '%' . 3 . '%' )
                          ->get(); 
                          
                $dataexs = roomeng::where ( 'id', 'LIKE', '%' . 6 . '%' )
                          ->get();
            
            }

           $name_extraroom = $dataroom1->name_room;
           $name_extraroom2 = $dataroom2->name_room;
           $person_roomindividual = 1;
           $price_extraroom = $dataroom1->price;
           $price_extraroom2 = $dataroom2->price;

               
           return view('stripe',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
           , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
           , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2',
           'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual',
           'uniqid','totalfinal','iva','infoiva','precio_children','precio_baby','T1','T2','T3','T4','numero_dias','ide3','ide4','ide5',
           'ide6','precio3','precio4','precio5','precio6','roomcama1','roomcama2','roomcama3','roomcama4','datas','dataex','dataexs','superior','endd','endds','endi','endis','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals','uno'));
         
           }


        }

     
         
 
         //return  $person;
       
   
   
    }
   
}
