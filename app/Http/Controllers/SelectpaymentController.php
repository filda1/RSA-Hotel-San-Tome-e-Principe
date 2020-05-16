<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use Illuminate\Support\Facades\Mail;

class SelectpaymentController extends Controller
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

    
    public function save()
    {
         // $hotel = Input::get ( 'hotel' );


         // OJO con fechas poner en : //config/database.php
         // 'mysql' => [
         // 'strict' => false,
         
         $cama = Input::get ('cama');
         
         $camaroom1 = Input::get ('cama0');
         $camaroom2 = Input::get ('cama1');
         $camaroom3 = Input::get ('cama2');
         $camaroom4 = Input::get ('cama3');
       
         
          $camaex = Input::get ('camaex');

         $person = Input::get ( 'persona');
         $children = Input::get ( 'children');
         $baby = Input::get ( 'baby');
         $person_extraroom = Input::get ( 'persona_extraroom');
         $person_extraroom2 = Input::get ( 'persona_extraroom2');
         //$total = Input::get ( 'total');
         $totalfinal = Input::get ( 'totalfinal');
         $iva = Input::get ( 'iva');
         $infoiva = Input::get ( 'infoiva');
         $lang = Input::get ( 'lang');
         
         $precio_children = Input::get ('precio_children');
         $precio_baby = Input::get ('precio_baby');
                   
         
         $checkin = Input::get ( 'checkini');
         $checkout = Input::get ( 'checkouti');
         

         $time = strtotime($checkin);
         $time2 = strtotime($checkout);
         $newformat = date('Y-m-d',$time);
         $newformat2 = date('Y-m-d',$time2);
         
         $superior = Input::get ( 'superior');
         
         /*$uno = Input::get ( 'uno');
         $endd = Input::get ( 'endd');
         $endi = Input::get ( 'endi');
         $endds = Input::get ( 'endds' );
         $duplosu = Input::get ( 'duplosu');
         $endis = Input::get ( 'endis');*/
         
         $uno = Input::get ( 'uno');
         $endd = Input::get ( 'numeroquarto');
         $endi = Input::get ( 'numeroquarto_individual');
         $endds = Input::get ( 'numeroquarto_duplos' );
         $duplosu = Input::get ( 'numeroquarto_duplos');
         $endis = Input::get ( 'numeroquarto_individuals');
         
         $cama = Input::get ( 'cama');
         $precio_duplo = Input::get ( 'precio_duplo');
         $precio_individual = Input::get ( 'precio_individual');
         $precio_duplos = Input::get ( 'precio_duplos');
         $precio_individuals = Input::get ( 'precio_individuals');
         
         ///////////////////////////////////////////////////////////////
         
         
         
         //////////////////////////////////////////////////////////////
         

         $id_extraroom = Input::get ( 'id_extraroom');
         $price_extraroom = Input::get ( 'price_extraroom');
         //$name_extraroom = Input::get ( 'name_extraroom');
         $checkin_extraroom = Input::get ( 'checkin_extraroom'); 
         $checkout_extraroom = Input::get ( 'checkout_extraroom'); 
         $time_extraroom  = strtotime($checkin_extraroom );
         $time2_extraroom  = strtotime($checkout_extraroom );
         $newformat_extraroom  = date('Y-m-d',$time_extraroom );
         $newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

         
         $id_extraroom2 = Input::get ( 'id_extraroom2');
         $price_extraroom2 = Input::get ( 'price_extraroom2');
         //$name_extraroom2 = Input::get ( 'name_extraroom2');
         $checkin_extraroom2 = Input::get ( 'checkin_extraroom2'); 
         $checkout_extraroom2 = Input::get ( 'checkout_extraroom2'); 
         $time_extraroom2  = strtotime($checkin_extraroom2);
         $time2_extraroom2  = strtotime($checkout_extraroom2 );
         $newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
         $newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
         
          $numero_dias = Input::get ('numero_dias');
          
          
          ///////////////////////////////////////////// CUARTOS ////////////////////////////////////////
          
          
          if(  (($person =="2")  && ( $endd +$endi <1)) or  (($person =="1")  && ( $endd +$endi <1)) or
               (($person =="4")  && ( $endd +$endi <2)) or  (($person =="3")  && ( $endd +$endi <2)) or
               (($person =="6")  && ( $endd +$endi <3)) or  (($person =="5")  && ( $endd +$endi <3)) or
               (($person =="8")  && ( $endd +$endi <4)) or  (($person =="7")  && ( $endd +$endi <4)) or
               (($person =="10")  && ( $endd +$endi <5)) or  (($person =="9")  && ( $endd +$endi <5)) 
          
          )
          {
              return back()->withErrors([' ERRO: O número de adultos não ha cuarto']);
              
          }
          
          
          
         /*if ($superior=="no"){
          
          
             if ((($person =="2")  && ( $endd!=1))  or (($person =="1")  && ( $endd!=1)) or
               (($person =="3")  && ( $endd!= 2)) or (($person =="4")  && ( $endd!=2))  or
               (($person =="5")  && ( $endd!=3))  or (($person =="6")  && ( $endd!=3))  or
               (($person =="7")  && ( $endd!=4))  or (($person =="8")  && ( $endd!=4))  or
               (($person =="9")  && ( $endd!=5))  or (($person =="10")  && ( $endd!=5))
            
            )  {
           
                   //return view('welcome');
                   //return redirect::back();
                   return back()->withErrors([' ERRO: O número de adultos não coincide com o número da capacidade do cuarto']);
            }
            
         }
         
         if ($superior=="si"){
         
          
            if ((($person =="2")  && ( $endds!=1)) or (($person =="1")  && ( $endds!=1))  or 
               (($person =="3")  && ( $endds!= 2)) or (($person =="4")  && ( $endds!=2))  or
               (($person =="5")  && ( $endds!=3))  or (($person =="6")  && ( $endds!=3))  or
               (($person =="7")  && ( $endds!=4))  or (($person =="8")  && ( $endds!=4))  or
               (($person =="9")  && ( $endds!=5))  or (($person =="10")  && ( $endds!=5))
            
            )  {
           
                   //return view('welcome');
                   //return redirect::back();
                   return back()->withErrors([' ERRO: O número de adultos não coincide com o número da capacidade do cuarto']);
            }
         }
           */
         /////////////////////////////////////////// CALCULO  /////////////////////////////////////////////
         
         $uno = Input::get ( 'uno');
         $endd = Input::get ( 'numeroquarto');
         $endi = Input::get ( 'numeroquarto_individual');
         $endds = Input::get ( 'numeroquarto_duplos' );
         $duplosu = Input::get ( 'numeroquarto_duplos');
         $endis = Input::get ( 'numeroquarto_individuals');
         
         
            if (  ($endd!=0) && ($endi!=0)){
                  
                  $ncuarto1= ( ((int)$endd)*$precio_duplo );
                  $ncuarto2= ( ((int)1)*$precio_individual );
                  $total = ($ncuarto1 + $ncuarto2)* $numero_dias;
                  
              }
              
              if (  ($endd!=0) && ($endi==0)){
                  
                $ncuarto1= ( ((int)$endd)*$precio_duplo );
                 
                  $total = $ncuarto1* $numero_dias;
                  
              }
              
              if (  ($endd==0) && ($endi!=0)){
                  
                  $ncuarto2= ( ((int)$endi)*$precio_individual );
                  $total = $ncuarto2 * $numero_dias;
                  
              }
              
               if (  ($endd==0) && ($endi==0)){
               
                     return back()->withErrors(['Disculpe, mas não há quartos disponíveis para o número de adultos selecionado']);
              }
         
         
         
         
         
         
          //////////////////////////////////////  /////////////////////////////////////////
           
             /* if ($endd!=0){
                  
                  $ncuarto= ( ((int)$endd)*$precio_duplo );
                  $total = $ncuarto * $numero_dias;
                  
              }
              
               if ($endi!=0){
                   
                   $ncuarto= ( ((int)$endi)*$precio_individual );
                  $total = $ncuarto * $numero_dias;
                  
              }
              
               if ($endds!=0){
                  $ncuarto= ( ((int)$endds)*$precio_duplos );
                  $total = ($ncuarto +$precio_children + $precio_baby)* $numero_dias;
              }
              
               if ($endis!=0){
                   $ncuarto= ( ((int)$endis)*$precio_individuals );
                  $total = ($ncuarto +$precio_children  +$precio_baby ) * $numero_dias;
                  
              }*/
              
          
          
          /////////////////////////////////////////////////////////////////////////////////////////////
         
         $end = Input::get ( 'end');
           $fin= (int)$end;

         if($lang=="pt"){

            $dataroom1 = room::where( 'id', $id_extraroom )   
                      ->first();
            $dataroom2 = room::where( 'id', $id_extraroom2 )   
                      ->first();

                  $name_extraroom = $dataroom1->name_room;
                  $name_extraroom2 = $dataroom2->name_room;
                  
                  
                  if( ($camaroom1=="1") || ($camaroom1=="1 cama de casal grande") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom1=="cama") ){
                      
                     $roomcama1="cama extra";
                  }
                  
                  
                   if( ($camaroom2=="1") ){
                      
                     $roomcama2="1 cama de casal grande";
                  }
                  
                    if( ($camaroom2=="cama") ){
                      
                     $roomcama2="cama extra";
                  }
                  
                  
                ////////////////////////////////////////////
                
                  if( ($camaroom3=="1") ){
                      
                     $roomcama3="1 cama de casal grande";
                  }
                  
                    if( ($camaroom3=="2") ){
                      
                     $roomcama3="2 camas individuais";
                  }
                  
                    if( ($camaroom4=="1") ){
                      
                     $roomcama4="1 cama de casal grande";
                  }
                  
                    if( ($camaroom4=="2") ){
                      
                     $roomcama4="2 camas individuais";
                  }

               ////////////////////////////////////////////////
               
        
               
         return view('selectpayment',compact('person', 'children', 'baby', 'person_extraroom', 'person_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
         , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
         , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2',
         'newformat2_extraroom2', 'end','lang','totalfinal','iva','infoiva','precio_children','precio_baby','numero_dias','roomcama1','roomcama2','roomcama3','roomcama4','superior','uno','endd','endds','endi','endis','duplosu','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals'));

      

         }
         
         if($lang=="en"){

        /*$dataroom1 = roomeng::where( 'id', $id_extraroom )   
            ->first();
        $dataroom2 = roomeng::where( 'id', $id_extraroom2 )   
            ->first();*/

            $dataroom10 = roomeng::where( 'id', $id_extraroom )   
            ->first();
             $dataroom20 = roomeng::where( 'id', $id_extraroom2 )   
            ->first();

        $name_extraroom = $dataroom10->name_room;
        $name_extraroom2 = $dataroom20->name_room;
        
        
        
                  if( ($camaroom1=="one") ){
                      
                     $roomcama1="one large double bed";
                  }
                  
                    if( ($camaroom1=="extra") ){
                      
                     $roomcama1="extra bed";
                  }
                  
                  
                   if( ($camaroom2=="one") ){
                      
                     $roomcama2="one large double bed";
                  }
                  
                    if( ($camaroom2=="extra") ){
                      
                     $roomcama2="extra bed";
                  }
                  
                  
                ////////////////////////////////////////////
                
                  if( ($camaroom3=="large") ){
                      
                     $roomcama3="large casal bed";
                  }
                  
                    if( ($camaroom3=="two") ){
                      
                     $roomcama3="two single beds";
                  }
                  
                    if( ($camaroom4=="large") ){
                      
                     $roomcama4="large casal bed";
                  }
                  
                    if( ($camaroom4=="two") ){
                      
                     $roomcama4="two single beds";
                  }

               ////////////////////////////////////////////////


        return view('selectpayment',compact('person', 'children', 'baby', 'person_extraroom', 'person_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
      , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
       , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','lang','totalfinal','iva','infoiva','precio_children','precio_baby','numero_dias','roomcama1','roomcama2','roomcama3','roomcama4','superior','endd','endds','endi','endis','cama','precio_duplo','precio_duplos','precio_individual','precio_individuals'));
        
              

         }


        

   
    }
   
}
