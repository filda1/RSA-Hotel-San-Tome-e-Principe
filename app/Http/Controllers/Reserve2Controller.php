<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use Datetime;
use Carbon\Carbon;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use App\Mail\Demoemail2;
use App\Mail\Demoemail;
use Illuminate\Support\Facades\Mail;


class Reserve2Controller extends Controller
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
         $info2 = Input::get ( 'info');
         
         
         $camaroom1 = Input::get ( 'roomcama1');
         $camaroom2 = Input::get ( 'roomcama2');
         $camaroom3 = Input::get ( 'roomcama3');
         $camaroom4 = Input::get ( 'roomcama4');
         
       
         
         $precio_children2 = Input::get ( 'precio_children');
    
         $precio_baby2 = Input::get ( 'precio_baby');

         $cama = Input::get ( 'cama');
         
         $person = Input::get ( 'persona');
         $children = Input::get ( 'children');
         $baby = Input::get ( 'baby');
         $person_extraroom = Input::get ( 'persona_extraroom');
         $person_extraroom2 = Input::get ( 'persona_extraroom2');
         $total = Input::get ( 'total');
         $iva = Input::get ( 'iva');
         $totalfinal = Input::get ( 'totalfinal');
                   
         $precio_temporada = Input::get ( 'precio_temporada');
         
         //$checkin = Input::get ( 'checkini');
         //$checkout = Input::get ( 'checkouti');

         $checkin = Input::get ( 'checkin');
         $checkout = Input::get ( 'checkout');
         
         $superior = Input::get ('superior');

         $time = strtotime($checkin);
         $time2 = strtotime($checkout);
         $newformat = date('Y-m-d',$time);
         $newformat2 = date('Y-m-d',$time2);

         $id_extraroom = Input::get ( 'id_extraroom');
         $price_extraroom = Input::get ( 'price_extraroom');
         $name_extraroom = Input::get ( 'name_extraroom');
         $checkin_extraroom = Input::get ( 'checkin_extraroom'); 
         $checkout_extraroom = Input::get ( 'checkout_extraroom'); 
         $time_extraroom  = strtotime($checkin_extraroom );
         $time2_extraroom  = strtotime($checkout_extraroom );
         $newformat_extraroom  = date('Y-m-d',$time_extraroom );
         $newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

          $superior = Input::get ( 'superior');
         $uno = Input::get ( 'uno');
         $endd = Input::get ( 'endd');
         $endi = Input::get ( 'endi');
         $endds = Input::get ( 'endds');
         $endis = Input::get ( 'endis');

         
         $id_extraroom2 = Input::get ( 'id_extraroom2');
         $price_extraroom2 = Input::get ( 'price_extraroom2');
         $name_extraroom2 = Input::get ( 'name_extraroom2');
         $checkin_extraroom2 = Input::get ( 'checkin_extraroom2'); 
         $checkout_extraroom2 = Input::get ( 'checkout_extraroom2'); 
         $time_extraroom2  = strtotime($checkin_extraroom2);
         $time2_extraroom2  = strtotime($checkout_extraroom2 );
         $newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
         $newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
         
      
      
         $precioextra = Input::get ( 'precioextra'); 
         
         $precio_individual = Input::get ( 'precio_individual');
         
         
         
          /////////////////////////////////////////////////////////////////////////////VALIDACIONES /////////////////////////////////////////////////////////////////////////
       $duplo   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get();  
          
           $individual   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get();  
                                       
                                       
            $duplos   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
          
           $individuals   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
            
            $contDuplo1= $duplo[0] ->infoConfirm;
            $contIndividual1 = $individual[0] ->infoConfirm;
            $contDuplos1= $duplos[0] ->infoConfirm;
            $contIndividuals1 = $individuals[0]->infoConfirm;
            
            $person1 = Input::get ( 'persona');
            
       
        if($superior=="si"){
            
             if ( (($person1  =="3")  && ( $contIndividuals1<2) ) or (($person1 =="4")  && ($contIndividuals1<2)) or
                  (($person1 =="5")  && ( $contIndividuals1<3))  or (($person1 =="6")  && ($contIndividuals1<3)) or
                  (($person1 =="7")  && ( $contIndividuals1<4))  or (($person1 =="8")  && ($contIndividuals1<4)) or
                  (($person1 =="9")  && ( $contIndividuals1<5))  or (($person1 =="10")  && ($contIndividuals1<5)) or
                  (($person1 =="2")  && ( $contIndividuals1<1))  or (($person1 =="1")  && ($contIndividuals1<1))
                  )  {
            
                   return view('exitnoreserve');
                  }
            
        }
         
         if($superior=="no"){
             
              if ( (($person1  =="2")  && ( $contIndividual1<1) ) or (($person1 =="1")  && ($contIndividual1<1))  )  {
            
                   return view('exitnoreserve');
                  }
                  
            
        }
        
         
      ////////////////////////////////////////////////////////////////////////////// FECHAS RESTAS N DIAS //////////////////////////////////////////////////////////////////

        $fechaActual = $checkout;
        $fechaMenor = Carbon::parse($checkin);
        $diferencia = $fechaMenor->diffInDays($fechaActual);
        $numero_dias = (int)$diferencia;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
/////////////////////////////////////////////  PRECIO CHILDREN, PRECIO BABY ///////////////////////////////////////////////////////////////////////////////////////////////

      


      //$precio_children = $d->children;
      //$precio_baby = $d->capacity;

      if ($numero_dias > 3){
         
        $d = room::where ( 'id', 1 )
                        ->first(); 

                        if ($children!=0){
                          $precio_children = ($d->children)*$children;
                        }
                        else{
                          $precio_children = 0;
                        }
                  
                        if ($baby!=0){
                          
                          $precio_baby = ($d->capacity)*$baby;
                        }
                        else{
                  
                          $precio_baby = 0;
                  
                        }              


      }

      if ($numero_dias <= 3){

     $d = room::where ( 'id', 1 )
        ->first();  

      $precio2_children = room::where ( 'id', 2 )
      ->first(); 

                   if ($children!=0){
                    $precio_children = ($precio2_children->children)*$children;
                   }
                   else{
                    $precio_children = 0;
                  }

                  if ($baby!=0){
        
                   $precio_baby = ($d->capacity)*$baby;
                  }
                  else{

                   $precio_baby = 0;

      }

      }

 

      //$precio2_children2 = $precio2_children ->children;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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



     $checkin = Input::get ( 'checkin' );
            $checkout = Input::get ( 'checkout' );
            
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
       else {

        $T1 = " ";
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


            /////////////////////////////////////////////////////////////////// CAMAS //////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
               
               
               
               
               ////////// ENGLISH ///////////////////////////
               
            
                  
                  
                ////////////////////////////////////////////
         

               ////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////// CONTADOR /////////////////////////////////////////////////////////////////////////////////////////////////////

   $duplo   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get();  
          
           $individual   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get();  
                                       
                                       
            $duplos   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
          
           $individuals   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
            
            $contDuplo= $duplo[0] ->infoConfirm;
            $contIndividual = $individual[0] ->infoConfirm;
            $contDuplos= $duplos[0] ->infoConfirm;
            $contIndividuals = $individuals[0]->infoConfirm;
            

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  


$superior = Input::get ('superior');

        $end = Input::get ( 'end');
           $fin= (int)$end;

           //$uniqid = uniqid();
           $uniqid = Input::get ('uniqid');
           
           
           
            //INDIVIDUAL SUPERIOR
    if ($endis!=0){
        
           $camass= "1 cama individual";
        
           $endis = Input::get ( 'endis');
           $fin= (int)$endis;
           
           
           
           for ($i =0; $i<$fin; $i++){
           
            $y = (string)$i;
            $id_room = 6;
            $dataDB = room::where('id',$id_room)->first();

            $name_room= $dataDB->name_room;
            //$price_room= $dataDB->price;
            
            $id = $dataDB->id;
            
            $activity= $dataDB->activity;
            $service= $dataDB->service;
            $precio= $dataDB->price;
            $precio2= $dataDB->price2;
            
            
            

            $post = new reserve;
            $post->name_reserve = $uniqid."_". $name_room ;
            //$post->id_user = Auth::user()->id; 
            $post->id_room =  $id_room ;
            $post->id_hotel = 1 ;
            
            
           if ($checkin >$checkout) {
                
                $time8 = strtotime($checkin);
	            $time9 = strtotime($checkout);
	            $newformat8 = date('Y-m-d',$time8);
	            $newformat9 = date('Y-m-d',$time9);
	            
	            $post->checkin =  $newformat9;
                $post->checkout = $newformat8;
           
            }
            else{
                $post->checkin =  $newformat;
                $post->checkout = $newformat2;
            }
            
            
            
            // NUEVO
            
            if(($T1 =="OK") && ($numero_dias > 3)){
                
                $aa = number_format($activity, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
                
            }
            
            if(($T1 =="OK") && ($numero_dias <= 3)){
                
                $aa = $precio;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ////////////////////////////////////////////////////
            
             if(($T3 =="OK") && ($numero_dias > 3)){
                 
                 
                $aa = number_format($activity, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            if(($T3 =="OK") && ($numero_dias <= 3)){
                
                $aa = $precio;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ////////////////////////////////////////////////////
            
             if(($T2 =="OK") && ($numero_dias > 3)){
                 
                 
                $aa = number_format($service, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
                
            }
            
            if(($T2 =="OK") && ($numero_dias <= 3)){
                
                
                $aa = $precio2;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            //////////////////////////////////////////////////
            
            if(($T4 =="OK") && ($numero_dias > 3)){
                
                
                $aa = number_format($service, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            if(($T4 =="OK") && ($numero_dias <= 3)){
                
                     
                $aa = $precio2;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ///////////////////////////////////////////////////
            
            if($id_room ==1 ){
                
                  if( ($camaroom1=="1") || ($camaroom1=="1 cama de casal grande") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom1=="cama") ){
                      
                     $roomcama1="cama extra";
                  }
            
            
            }
            
            
           if($id_room ==2 ){
            
                if( ($camaroom2=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom2=="cama") ){
                      
                     $roomcama1="cama extra";
                  }
                  
            
            
            }
            
            
             if($id_room ==3 ){
            
             if( ($camaroom3=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom3=="2") ){
                      
                     $roomcama1="2 camas individuais";
                  }
                  
            
            }
            
            if($id_room ==4 ){
            
             if( ($camaroom4=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom4=="2") ){
                      
                     $roomcama1="2 camas individuais";
                  }
                  
            
            }
            
            
            if(($id_room ==5 ) || ($id_room ==6)){
            
                     $roomcama1="1 cama individual";
                
            }
            
            
            
         
                  
                  
                ////////////////////////////////////////////
            
          
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            
            $post->total = $total ;
            $post->person = $person;
            $post->children =Auth::user()->id;  // ===========> User ID
            //$post->cancel = "" ;
            $post->cancel = $info2 ;
            $post->info = "TIPO:".$camass." "."CRIANÇAS:"." ".$children.","." "."PREÇO DAS CRIANÇAS:"." ".$precio_children2.","." "."BEBÉS:"." ".$baby.","." "."PREÇO DOS BEBÉS:"." ".$precio_baby2;
          
        
            $post->save();

            // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$change = room::find($id_room);
            $change->available = 1 ;
            $change->vacancies = 0 ;       
            $change->save();

            roomeng::where('id', $id_room )
            ->update(['available' => 1, 'vacancies' => 0 ]); */ 
            
            
               //Descremento contador Individual Superior
           $qindividuals   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
            $qcontIndividuals = $qindividuals[0]->infoConfirm;
            
            
            if( ($qcontIndividuals> -1) && ($qcontIndividuals<8) ){
                
                
                  if($qcontIndividuals==0){
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' => 0]); 
                
                  }
                  else{
                      
                      $menosuno= $qcontIndividuals-1;
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' => $menosuno]); 
                
                  }
                
            }
            
            
            
            
           
         }
    
         if (($id_extraroom !== 0) && ($id_extraroom2 !== 0)){

            $namedataDB = room::where('id',$id_extraroom)->first();
               
            $post = new reserve;
            $post->name_reserve = $uniqid."_".$namedataDB->name_room;
            //$post->id_user = Auth::user()->id;
            $post->id_room =  $id_extraroom ;
            $post->id_hotel = 1 ;
            $post->checkin =  $newformat;
            $post->checkout = $newformat2;
            $post->price = $price_extraroom;
            $post->total = $totalfinal ;
            $post->person = $person;
            $post->children = Auth::user()->id;  // ===========> User ID
            //$post->cancel = ""
            $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post->save();


            $namedataDB2 = room::where('id',$id_extraroom2)->first();
            
            // Change Activation in room table
            // Discount total person in vacancies ,room table
    

            /*room::where('id', $id_extraroom)
            ->update(['available' => 1, 'vacancies' => 0 ]); 

            roomeng::where('id', $id_extraroom)
            ->update(['available' => 1, 'vacancies' => 0 ]); */


            
            $post2 = new reserve;
            $post2->name_reserve = $uniqid."_".$namedataDB2->name_room;
            //$post2->id_user = Auth::user()->id;
            $post2->id_room =  $id_extraroom2 ;
            $post2->id_hotel = 1 ;
            $post2->checkin =  $newformat;
            $post2->checkout = $newformat2;
            $post2->price = $price_extraroom2;
            $post2->total = $totalfinal;
            $post2->person = $person;
            $post2->children = Auth::user()->id; // ===========> User ID
            //$post2->cancel = "" ;
            $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post2->save();

            
            
            // Change Activation in room table
            // Discount total person in vacancies ,room tab
          
            /*room::where('id', $id_extraroom2 )
                        ->update(['available' => 1, 'vacancies' => 0 ]); 

          roomeng::where('id', $id_extraroom2 )
                        ->update(['available' => 1, 'vacancies' => 0 ]); */

   
         }
         elseif( (($id_extraroom !== 0) && ($id_extraroom2== 0))  ) {

            $namedataDB = room::where('id',$id_extraroom)->first();
             
            $post = new reserve;
            $post->name_reserve = $uniqid."_".$namedataDB->name_room;
            //$post->id_user = Auth::user()->id;
            $post->id_room =  $id_extraroom ;
            //$post->id_usuario = 1 ;
            $post->id_hotel = 1 ;
            $post->checkin =  $newformat;
            $post->checkout = $newformat2;
            $post->price = $price_extraroom;
            $post->total = $totalfinal;
            $post->person = $person;
            $post->children = Auth::user()->id;   // ===========> User ID
            //$post->cancel = "" ;
            $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post->save();

        
            // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$change = room::find($id_extraroom);
            $change->available = 1 ;
            $change->vacancies = 0 ;       
            $change->save();

            roomeng::where('id', $id_extraroom )
            ->update(['available' => 1, 'vacancies' => 0 ]);*/ 
                  
                           
         }
         elseif( (($id_extraroom2 !== 0) && ($id_extraroom == 0))  ) {
   

            $namedataDB2 = room::where('id',$id_extraroom2)->first();
         

            $post2 = new reserve;
            $post2->name_reserve = $uniqid."_".$namedataDB2->name_room;
            //$post->id_user = Auth::user()->id;
            $post2->id_room =  $id_extraroom2 ;
            $post2->id_hotel = 1 ;
            $post2->checkin =  $newformat;
            $post2->checkout = $newformat2;
            $post2->price = $price_extraroom2;
            $post2->total = $totalfinal;
            $post2->person = $person;
            $post2->children = Auth::user()->id;  // ===========> User ID
            //$post->cancel = "" ;
            $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post2->save();

            
             // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$id_extraroom2 = Input::get ( 'id_extraroom2');
            $muda = room::find($id_extraroom2);
            $muda->available = 1 ; 
            $muda->vacancies = 0 ;      
            $muda->save();    
            
            roomeng::where('id', $id_extraroom2 )
            ->update(['available' => 1, 'vacancies' => 0 ]); */
   
         }
         
         reserve::where ( 'id_room', null )   
                        ->delete();

         $count = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )
                           ->where ( 'id_room', 'LIKE', '%' . 6 . '%' )
                          ->count();

      
         for ($i =0; $i<$count; $i++){

           

            $first = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )
                             ->where ( 'id_room', 'LIKE', '%' . 6 . '%' )
                            ->get();
            
           $otroq= $first[$i]->name_reserve;
            
             $str =(explode("_",$otroq)) ;

          
            $id_individuo= Auth::user()->id;
            $email_individuo= Auth::user()->email;

            $currentuser = User::find($id_individuo);
             $name_user = $currentuser->name;
             $email_user = $currentuser->email;
             
             ///////////////////////////////////////////////////////////////////////////////////////////////
             
          $numero_reserva = $uniqid;
          $checkinA = $first[$i]->checkin;
          $checkoutA =  $first[$i]->checkout;
          //$checkoutA =  $first[0]->checkout;
          //$tipo_quarto = $first[$i]->name_reserve;
          $tipo_quarto =  $str[1];
          $n_quartos = $fin;
          $n_adultos = $person;
          $n_criancas =  $children;
          $n_bebes =  $baby;
          $precio_quartoA  = floor($first[$i]->price);
          //$precio_quartoA = $first[0]->price;
          $precio_crianca = $precio_children;
          $precio_bebe = $precio_baby;
          $n_dias = $numero_dias;
          $totalA = $total;
          $name_cliente = Auth::user()->name;
          $name_email = Auth::user()->email;
          $cancel = $first[$i]->cancel;
          
          
          $in= $first[$i]->info;
          $camas1 =(explode("CRIANÇAS",$in)) ;
          $camas =(explode(":",$camas1[0])) ;
          $camass= "1 cama individual";
         
         $checkinB =(explode(" ",$checkinA)) ;
             
         $A = $numero_reserva."*".$checkinB[0]."*".$checkoutA."*".$total."*". $n_adultos."*".$tipo_quarto."*".$n_quartos."*".$precio_quartoA 
          ."*".$name_user."*".$email_user."*".$n_criancas."*".$precio_children2."*".$n_bebes."*".$precio_baby2."*".$n_dias."*".$cancel."*".$camass;
          
          
            // Email Admin
            $message = $A;
            $name = $uniqid;
            Mail::to('rsaeco@yahoo.com')->send(new Demoemail3($uniqid,$message));
            // Mail::to('serviruma.rocasantoantonio@gmail.com')->send(new Demoemail3($uniqid,$message));
            

              // Email User
             
             Mail::to($email_individuo)->send(new Demoemail3($name,$message));
             
             
             
         }
         
           
    }
    
     // DUPLO SUPERIOR
  if ($endds!=0){
      
       if( ($cama=="1") ){
                      
                     $camadu="1 cama de casal grande";
                 }
                  
                   if( ($cama=="2") ){
                      
                     $camadu="2 camas individuais";
                  }

        
          $endds = Input::get ( 'endds');
           $fin= (int)$endds;
           
           
           
           for ($i =0; $i<$fin; $i++){
           
            $y = (string)$i;
            $id_room = 3;
            $dataDB = room::where('id',$id_room)->first();

            $name_room= $dataDB->name_room;
            //$price_room= $dataDB->price;
            
            $id = $dataDB->id;
            
            $activity= $dataDB->activity;
            $service= $dataDB->service;
            $precio= $dataDB->price;
            $precio2= $dataDB->price2;
            
            
            

            $post = new reserve;
            $post->name_reserve = $uniqid."_". $name_room ;
            //$post->id_user = Auth::user()->id; 
            $post->id_room =  $id_room ;
            $post->id_hotel = 1 ;
            
            
            if ($checkin >$checkout) {
                
                $time8 = strtotime($checkin);
	            $time9 = strtotime($checkout);
	            $newformat8 = date('Y-m-d',$time8);
	            $newformat9 = date('Y-m-d',$time9);
	            
	            $post->checkin =  $newformat9;
                $post->checkout = $newformat8;
           
            }
            else{
                $post->checkin =  $newformat;
                $post->checkout = $newformat2;
            }
            
            
            
            // NUEVO
            
            if(($T1 =="OK") && ($numero_dias > 3)){
                
                $aa = number_format($activity, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
                
            }
            
            if(($T1 =="OK") && ($numero_dias <= 3)){
                
                $aa = $precio;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ////////////////////////////////////////////////////
            
             if(($T3 =="OK") && ($numero_dias > 3)){
                 
                 
                $aa = number_format($activity, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            if(($T3 =="OK") && ($numero_dias <= 3)){
                
                $aa = $precio;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ////////////////////////////////////////////////////
            
             if(($T2 =="OK") && ($numero_dias > 3)){
                 
                 
                $aa = number_format($service, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
                
            }
            
            if(($T2 =="OK") && ($numero_dias <= 3)){
                
                
                $aa = $precio2;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            //////////////////////////////////////////////////
            
            if(($T4 =="OK") && ($numero_dias > 3)){
                
                
                $aa = number_format($service, 0);
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            if(($T4 =="OK") && ($numero_dias <= 3)){
                
                     
                $aa = $precio2;
                $price_room = $aa;
                
                $post->price = $price_room;
                
            }
            
            ///////////////////////////////////////////////////
            
            if($id_room ==1 ){
                
                  if( ($camaroom1=="1") || ($camaroom1=="1 cama de casal grande") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom1=="cama") ){
                      
                     $roomcama1="cama extra";
                  }
            
            
            }
            
            
           if($id_room ==2 ){
            
                if( ($camaroom2=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom2=="cama") ){
                      
                     $roomcama1="cama extra";
                  }
                  
            
            
            }
            
            
             if($id_room ==3 ){
            
             if( ($camaroom3=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom3=="2") ){
                      
                     $roomcama1="2 camas individuais";
                  }
                  
            
            }
            
            if($id_room ==4 ){
            
             if( ($camaroom4=="1") ){
                      
                     $roomcama1="1 cama de casal grande";
                  }
                  
                    if( ($camaroom4=="2") ){
                      
                     $roomcama1="2 camas individuais";
                  }
                  
            
            }
            
            
            if(($id_room ==5 ) || ($id_room ==6)){
            
                     $roomcama1="1 cama individual";
                
            }
            
            
            
         
                  
                  
                ////////////////////////////////////////////
            
          
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            
            $post->total = $total ;
            $post->person = $person;
            $post->children =Auth::user()->id;  // ===========> User ID
            //$post->cancel = "" ;
            $post->cancel = $info2 ;
            $post->info = "TIPO:".$camadu." "."CRIANÇAS:"." ".$children.","." "."PREÇO DAS CRIANÇAS:"." ".$precio_children2.","." "."BEBÉS:"." ".$baby.","." "."PREÇO DOS BEBÉS:"." ".$precio_baby2;
          
        
            $post->save();

            // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$change = room::find($id_room);
            $change->available = 1 ;
            $change->vacancies = 0 ;       
            $change->save();

            roomeng::where('id', $id_room )
            ->update(['available' => 1, 'vacancies' => 0 ]); */ 
            
            
            //Descremento contador Duplo
            $qduplo   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get(); 
                                       
            $qcontDuplo= $qduplo[0] ->infoConfirm;
            
            if( ($qcontDuplo> -1) && ($qcontDuplo<8) ){
                
                
                  if($qcontDuplo==0){
                      
                       room::where('id', 3)
                        ->update(['infoConfirm' => 0]); 
                
                  }
                  else{
                      
                      $menosuno= $qcontDuplo-1;
                      
                       room::where('id', 3 )
                        ->update(['infoConfirm' => $menosuno]); 
                
                  }
                
            }
            
            
            
           
           }
    
         if (($id_extraroom !== 0) && ($id_extraroom2 !== 0)){

            $namedataDB = room::where('id',$id_extraroom)->first();
               
            $post = new reserve;
            $post->name_reserve = $uniqid."_".$namedataDB->name_room;
            //$post->id_user = Auth::user()->id;
            $post->id_room =  $id_extraroom ;
            $post->id_hotel = 1 ;
            $post->checkin =  $newformat;
            $post->checkout = $newformat2;
            $post->price = $price_extraroom;
            $post->total = $totalfinal ;
            $post->person = $person;
            $post->children = Auth::user()->id;  // ===========> User ID
            //$post->cancel = ""
            $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post->save();


            $namedataDB2 = room::where('id',$id_extraroom2)->first();
            
            // Change Activation in room table
            // Discount total person in vacancies ,room table
    

            /*room::where('id', $id_extraroom)
            ->update(['available' => 1, 'vacancies' => 0 ]); 

            roomeng::where('id', $id_extraroom)
            ->update(['available' => 1, 'vacancies' => 0 ]); */


            
            $post2 = new reserve;
            $post2->name_reserve = $uniqid."_".$namedataDB2->name_room;
            //$post2->id_user = Auth::user()->id;
            $post2->id_room =  $id_extraroom2 ;
            $post2->id_hotel = 1 ;
            $post2->checkin =  $newformat;
            $post2->checkout = $newformat2;
            $post2->price = $price_extraroom2;
            $post2->total = $totalfinal;
            $post2->person = $person;
            $post2->children = Auth::user()->id; // ===========> User ID
            //$post2->cancel = "" ;
            $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post2->save();

            
            
            // Change Activation in room table
            // Discount total person in vacancies ,room tab
          
            /*room::where('id', $id_extraroom2 )
                        ->update(['available' => 1, 'vacancies' => 0 ]); 

          roomeng::where('id', $id_extraroom2 )
                        ->update(['available' => 1, 'vacancies' => 0 ]); */

   
         }
         elseif( (($id_extraroom !== 0) && ($id_extraroom2== 0))  ) {

            $namedataDB = room::where('id',$id_extraroom)->first();
             
            $post = new reserve;
            $post->name_reserve = $uniqid."_".$namedataDB->name_room;
            //$post->id_user = Auth::user()->id;
            $post->id_room =  $id_extraroom ;
            //$post->id_usuario = 1 ;
            $post->id_hotel = 1 ;
            $post->checkin =  $newformat;
            $post->checkout = $newformat2;
            $post->price = $price_extraroom;
            $post->total = $totalfinal;
            $post->person = $person;
            $post->children = Auth::user()->id;   // ===========> User ID
            //$post->cancel = "" ;
            $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post->save();

        
            // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$change = room::find($id_extraroom);
            $change->available = 1 ;
            $change->vacancies = 0 ;       
            $change->save();

            roomeng::where('id', $id_extraroom )
            ->update(['available' => 1, 'vacancies' => 0 ]);*/ 
                  
                           
         }
         elseif( (($id_extraroom2 !== 0) && ($id_extraroom == 0))  ) {
   

            $namedataDB2 = room::where('id',$id_extraroom2)->first();
         

            $post2 = new reserve;
            $post2->name_reserve = $uniqid."_".$namedataDB2->name_room;
            //$post->id_user = Auth::user()->id;
            $post2->id_room =  $id_extraroom2 ;
            $post2->id_hotel = 1 ;
            $post2->checkin =  $newformat;
            $post2->checkout = $newformat2;
            $post2->price = $price_extraroom2;
            $post2->total = $totalfinal;
            $post2->person = $person;
            $post2->children = Auth::user()->id;  // ===========> User ID
            //$post->cancel = "" ;
            $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

            
            $post2->save();

            
             // Change Activation in room table
            // Discount total person in vacancies ,room table
            /*$id_extraroom2 = Input::get ( 'id_extraroom2');
            $muda = room::find($id_extraroom2);
            $muda->available = 1 ; 
            $muda->vacancies = 0 ;      
            $muda->save();    
            
            roomeng::where('id', $id_extraroom2 )
            ->update(['available' => 1, 'vacancies' => 0 ]); */
   
         }
         
         reserve::where ( 'id_room', null )   
                        ->delete();

         $count = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )
                           ->where ( 'id_room', 'LIKE', '%' . 3 . '%' )
                           ->count();

      
         for ($i =0; $i<$count; $i++){

           

            $first = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )
                              ->where ( 'id_room', 'LIKE', '%' . 3 . '%' )
                               ->get();
            
           $otroq= $first[$i]->name_reserve;
            
             $str =(explode("_",$otroq)) ;

          
            $id_individuo= Auth::user()->id;
            $email_individuo= Auth::user()->email;

            $currentuser = User::find($id_individuo);
             $name_user = $currentuser->name;
             $email_user = $currentuser->email;
             
             ///////////////////////////////////////////////////////////////////////////////////////////////
             
          $numero_reserva = $uniqid;
          $checkinA = $first[$i]->checkin;
          $checkoutA =  $first[$i]->checkout;
          //$checkoutA =  $first[0]->checkout;
          //$tipo_quarto = $first[$i]->name_reserve;
          $tipo_quarto =  $str[1];
          $n_quartos = $fin;
          $n_adultos = $person;
          $n_criancas =  $children;
          $n_bebes =  $baby;
          $precio_quartoA  = floor($first[$i]->price);
          //$precio_quartoA = $first[0]->price;
          $precio_crianca = $precio_children;
          $precio_bebe = $precio_baby;
          $n_dias = $numero_dias;
          $totalA = $total;
          $name_cliente = Auth::user()->name;
          $name_email = Auth::user()->email;
          $cancel = $first[$i]->cancel;
          
          
          $in= $first[$i]->info;
          $camas1 =(explode("CRIANÇAS",$in)) ;
          $camas =(explode(":",$camas1[0])) ;
         
          

          $checkinB =(explode(" ",$checkinA)) ;
         
             
         $A = $numero_reserva."*".$checkinB[0]."*".$checkoutA."*".$total."*". $n_adultos."*".$tipo_quarto."*".$n_quartos."*".$precio_quartoA 
          ."*".$name_user."*".$email_user."*".$n_criancas."*".$precio_children2."*".$n_bebes."*".$precio_baby2."*".$n_dias."*".$cancel."*".$camadu;
          
          $variable="ola";
          
            // Email Admin
            $message = $A;
            $name = $uniqid;
             Mail::to('rsaeco@yahoo.com')->send(new Demoemail3($uniqid,$message));
             //Mail::to('serviruma.rocasantoantonio@gmail.com')->send(new Demoemail3($uniqid,$message));

              // Email User
             
             Mail::to($email_individuo)->send(new Demoemail3($name,$message));
             
             
             
         }
        
         
         
         
         
         
         
         
         
           
   // FIN SUPERIOR     
    }
    
    
    
    

         

     
     
     
     
          
          
          
         return view('exitreserve');
        

   
   
    }
   
}
