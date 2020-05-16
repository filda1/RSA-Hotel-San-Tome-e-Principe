<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;
use Carbon\Carbon;
use App\Mail\Demoemail2;
use Illuminate\Support\Facades\Mail;
//use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchengController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        
         // VERIFICA QUE LAS FECHAS SEAN MAYORES QUE HOY
            $checkin = Input::get ( 'checkin' );
            $checkout = Input::get ( 'checkout' );
           
            //$today = Carbon::today();
            $today = Carbon::yesterday();
    
         
            if ((  $checkin < $today ) or (  $checkout <  $today ) or ( $checkin==$checkout )){
           
                   //return view('welcome');
                   //return redirect::back();
                   return back()->withErrors(['Error: As datas não podem ser menor que a data de  hoje / Dates cannot be less than today s date', 'The Message']);
            }

            
       // Para pasar el Banner dede BD  a view  app.blade ====> por hotel.blade
        $posts = hotelpicture::all();

      //////////////////////////////// Despues de acabar la reserva, se activa los quartos ///////////////////////////////
        $today = date("Y-m-d H:i:s");     
            
            
    
        $dato=reserve::where('checkout', '<', $today)
                      ->get();
                      

         foreach ($dato as $datos) {
        
           //if($datos->checkout < $today ){
          $data = room::where ( 'id', $datos->id_room )
                            ->first();   
                            
             $id_reserve= $datos->id;
                            
            //NO SUPERIOR
                //Duplo
                
            if ($data->id == 1){
                     
                      $incremento = $data -> infoConfirm;
            
                 if( ($incremento>-1) && ($incremento< 6) ){
                
                
                      if($incremento==5){
                      
                         $n=5;
                      
                          room::where('id', 1 )
                           ->update(['infoConfirm' => $n]); 
                           
                           reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      } 
                   else {
                      
                      $suno= $incremento+1;
                      
                       room::where('id', 1 )
                        ->update(['infoConfirm' => $incremento+1]); 
                        
                        
                        
                    //ELIMINO EL QUARTO EN RESERVA
                         reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      }
                
                  }
              }
              
              
               // Indiviadual
             if ($data->id == 5){
                     
                      $incremento = $data -> infoConfirm;
            
                 if( ($incremento>-1) && ($incremento< 2) ){
                
                
                      if($incremento==1){
                      
                         $n=1;
                      
                          room::where('id', 5 )
                           ->update(['infoConfirm' => $n]); 
                           
                           reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      } 
                   else {
                      
                      $suno= $incremento+1;
                      
                       room::where('id', 5 )
                        ->update(['infoConfirm' => $incremento+1]); 
                        
                        
                        
                    //ELIMINO EL QUARTO EN RESERVA
                         reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      }
                
                  }
              }
              
            
            
            
            //SUPERIOR
            // DuploSuperior
            
           if ($data->id == 3){
                     
                      $incremento = $data -> infoConfirm;
            
                 if( ($incremento>-1) && ($incremento< 8) ){
                
                
                      if($incremento==7){
                      
                         $n=7;
                      
                          room::where('id', 3 )
                           ->update(['infoConfirm' => $n]); 
                           
                           reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      } 
                   else {
                      
                      $suno= $incremento+1;
                      
                       room::where('id', 3 )
                        ->update(['infoConfirm' => $incremento+1]); 
                        
                        
                        
                    //ELIMINO EL QUARTO EN RESERVA
                         reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      }
                
                  }
              }
              
 
              
              
                //Individual Superior
            
             
            if ($data->id == 6){
                     
                      $incremento = $data -> infoConfirm;
            
                 if( ($incremento>-1) && ($incremento< 8) ){
                
                
                      if($incremento==7){
                      
                         $n=7;
                      
                          room::where('id', 6 )
                           ->update(['infoConfirm' => $n]); 
                           
                           reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      } 
                   else {
                      
                      $suno= $incremento+1;
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' => $incremento+1]); 
                        
                        
                        
                    //ELIMINO EL QUARTO EN RESERVA
                         reserve::where ( 'id',$id_reserve )   
                                   ->delete();
                
                      }
                
                  }
              }
              
              
             
            
                     
       }
         

       
        /////////////////////////////////////////////////////////////////////////////////////////////////////////
                      
                      
                      
        /////////////////////////////////////////////////////////////////////////////////////////////////////////


         // $hotel = Input::get ( 'hotel' );
          $checkin = Input::get ( 'checkin' );
          $checkout = Input::get ( 'checkout' );
          $person = Input::get ( 'person' );

          $children = Input::get ( 'children' );
          $baby = Input::get ( 'baby' );

          $numeroquarto = Input::get ( 'numeroquarto' );

          //$quarto = Input::get ( 'quarto' );

          $quarto = 1;
          
          ////////////////////////////////////////////////////////////////////////////////////////////////////////////
          
           //Cambio de idioma en BD (O sea cambio de tablas)    
         
         $lang = Input::get ( 'lang' );

         // IVa, en primer registro de Room pt, Campo price2 = iva y info2= info_iva
         $reg_iva   = room::all()
                        ->first();
         $iva = $reg_iva ->price2;
         $infoiva= $reg_iva ->info2;
         
         
           /////////////////////////////////////////// Cuartos/No  ///////////////////////////////////////////////////////////////////////////
          
        
          
         
        if ( (($person==1)&&($numeroquarto>=1)) || (($person ==2)&& ($numeroquarto>= 1)) 
        || (($person==3)&& ($numeroquarto>=2))  || (($person==4)&& ($numeroquarto>=2)) 
        || (($person==5)&& ($numeroquarto>=3)) || (($person==6)&& ($numeroquarto>=3)) 
        || (($person==7)&& ($numeroquarto>=4))   || (($person==8)&& ($numeroquarto>=4)) 
        || (($person==9)&& ($numeroquarto>=5))   || (($person==10)&& ($numeroquarto>=5))  ) {
              
              
             
          }
          else{
              
              return back(); 
          }
          
          ////////////////////////////////////////////////////////////////////////////// FECHAS RESTAS N DIAS //////////////////////////////////////////////////////////////////

        $fechaActual = $checkout;
        $fechaMenor = Carbon::parse($checkin);
         $diferencia = $fechaMenor->diffInDays($fechaActual);
         $numero_dias = (int)$diferencia;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          
    /////////////////////////////////////////////  PRECIO CHILDREN, PRECIO BABY ///////////////////////////////////////////////////////////////////////////

      


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
                    $precio_children = ($precio2_children->children + 5)*$children;
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
/////////////////////////////////////////////////   PRECIOS TEMPORADA (10/01/2020 a 30/06/2020) y (01/07/2020 a 31/10/2020), en BD activity (A), service (B) //////////////////////////////////

  $number_A = '1.34';
  $number_B = '1.34';

   $precio_A = number_format($number_A, 2);

    $precio_B = number_format($number_B, 2);

  $C = $precio_A + $precio_B;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////   PRECIOS TEMPORADA (10/01/2020 a 30/06/2020) y (01/07/2020 a 31/10/2020), en BD price (A), price2 (B) //////////////////////////////////



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
            
         if (($checkin1 >= $dateTemporadaA1 ) && ( $checkout1 <= $dateTemporadaA2)) {
       
          $T1 = "OK";

        }
      /* else {

        $T1 = " ";
       }*/

       
        // TEMPORADA2
        //if ( ($dateHoy >= $dateTemporadaB1 ) && ( $dateHoy <= $dateTemporadaB2) ) {
            
        elseif ( ($checkin1 >= $dateTemporadaB1 ) && ( $checkout1 <= $dateTemporadaB2) ) {
       
          $T2 = "OK";

        }
       /*else {

        $T2 = " ";
       }*/


        // TEMPORADA3
        //if ( ($dateHoy >= $dateTemporadaC1 ) && ( $dateHoy <= $dateTemporadaC2) ) {
        
        elseif ( ($checkin1 >= $dateTemporadaC1 ) && ( $checkout1 <= $dateTemporadaC2) ) {
       
          $T3 = "OK";

        }
       /*else {

          $T3 = " ";
       }*/


        // TEMPORADA4
        //if ( ($dateHoy >= $dateTemporadaD1 ) && ( $dateHoy <= $dateTemporadaD2) ) {
            
         elseif ( ($checkin1 >= $dateTemporadaD1 ) && ( $checkout1 <= $dateTemporadaD2) ) {
       
          $T4 = "OK";

        }
        
        elseif ( ($checkin1 >= $dateTemporadaD1i ) && ( $checkout1 <= $dateTemporadaD2i) ) {
       
          $T4 = "OK";

        }
        
        
       else {

          $T0 = "OK";
       }
       


       if ($numero_dias > 3){

        $dataO = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                         ->get();

                       

       }

       if ($numero_dias <= 3){

        $dataO = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                      ->get();

      }



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
            
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7/
            
            
//////////////////////////////////////////////////////////////////////////// PROGRAMA /////////////////////////////////////////////////////////////////////////////////////

                                      $data = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                     ->get();

                  $total_quartosllenos = $data->count('available'); // o sea  available = 0
                  
                  
          ////////////////////////////////////////////// Superior/No ////////////////////////////////////////////////////////////////////////////
    
          
          if(($children==0) && ($baby==0)){
              
              $superior="no";
              
          }
      
          
        if (($children!=0) && ($baby!=0)){
              
              $superior="si";
          }
          
          
         if (($children!=0) && ($baby==0)){
              
              $superior="si";
          }
          
               
         if (($children==0) && ($baby!=0)){
              
              $superior="si";
          }
              
    ///////////////////////////////////////////////////////////////////////////BEGIN /////////////////////////////////////////////////////////////////////
            
             if($lang=="en"){
                 
                 
               if ($numeroquarto  == 1){
                
                
                  // person
                   
                  
                 
                      if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get(); 
                                       
                                       
                                       $endd=1; 
                      }
                      else{
                          $endd=1; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
                             //$end=1;
                             $endi=1; 
    
                     } 
                      else{
                          //$extra=0;
                          $endi=0; 
                      }
                    
                      
//////////////////////////////////////////  SUPERIOR ////////////////////////////////////////////////////////////////////////////////////////////////////                

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                                       
                              //if (   ( ( $contDuplos==7 )|| ($contDuplos==6) || ($contDuplos==5) || ($contDuplos==4) || ($contDuplos==3) || ($contDuplos==2) )  ){
                                
                                  $endds=1;
                            
                                // }
                                // else{
                                     
                                 //$endds=$contDuplos;
                                 
                                 //}
                                     
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                       
                                       
                             //if (   ( ( $contIndividuals==7 )|| ($contIndividuals==6) || ($contIndividuals==5) || ($contIndividuals==4) || ($contIndividuals==3) || ($contIndividuals==2) )  ){
                                
                                  $endis=1;
                            
                                // }
                                // else{
                                     
                                 //$endis=$contIndividuals;
                                 
                                 //}
                                       
        
                    }
                    else
                    {
                        //$end=0; 
                        $endis=0; 
                    }
                   
                }
                
                
                
                   ////////////////////////////   CUARTO 2 ////////////////////////////////////////////////// 
  

                if ($numeroquarto  == 2){
                       

                        // person
                    
                  
                
                      
                      if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get();  
                                       
                                       
                                    
                                           
                                 //$endd=2; 
                                          
                                          
                               if (( $contDuplo>1 )){
                                
                                  $endd=2;
                            
                                 }
                                 else{
                                     
                                 $endd=$contDuplo;
                                 
                                 }
                                       
                      }
                      else{
                          $endd=0; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
                                    
                                 
                                          $endi=2; 
                                       
                         
                     } 
                      else{
                          $extra=0;
                          $endi=0;
                      }
                    
                      
        //////////////////////////////////////// SUPERIOR ///////////////////////////////////////////////////////////////              

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                                       
                                if ( ( $contDuplos>1 )  ){
                                
                                  $endds=2;
                            
                                 }
                                 else{
                                     
                                 $endds=$contDuplos;
                                 
                                 }
                                      
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                    if (  ( $contIndividuals>1 )  ){
                                
                                  $endis=2;
                            
                                 }
                                 else{
                                     
                                 $endis=$contIndividuals;
                                 
                                 }
        
                    }
                    else
                    {
                        $endis=0; 
                        
                    }
                     
                }
                
                
                     
                   //////////////////////// Cuarto 3 ///////////////////////////////


    if ($numeroquarto  == 3){
                       
       //ROOM
       
                      
                       if  (($contDuplo>2) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get();  
                                  
                                if ( ( $contDuplo>2 )  ){
                                
                                  $endd=3;
                            
                                 }
                                 else{
                                     
                                 $endd=$contDuplo;
                                 
                                 }
                                       
                      }
                      else{
                          $endd=0; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
                                       
                                       
                        
                                          $endi=3; 
                              
                         
                     } 
                      else{
                          //$extra=0;
                           $endi=0; 
                      }
                    
                      
    //////////////////////////////////////////////// SUPEIOR //////////////////////////////////////////////////////////////////////////////////                

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get(); 
                                       
                                 if ( ( $contDuplos>2 )  ){
                                
                                  $endds=3;
                            
                                 }
                                 else{
                                     
                                 $endds=$contDuplos;
                                 
                                 }
                                      
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                       
                                           
                                if (  ( $contIndividuals>2 )  ){
                                
                                  $endis=3;
                            
                                 }
                                 else{
                                     
                                 $endis=$contIndividuals;
                                 
                                 }
                                       
        
                    }
                    else
                    {
                        $endis=0; 
                        
                    }
                   
               }
               
               
                 ///////////////////////////// Cuarto 4 //////////////////////////////////////
if ($numeroquarto  == 4){
                
                
     // person
                   
                 
                    if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get(); 
                                       
                                                
                                if (  ( $contDuplo>3 )  ){
                                
                                  $endd=4;
                            
                                 }
                                 else{
                                     
                                 $endd=$contDuplo;
                                 
                                 }
                      }
                      else{
                          $endd=0; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
           
                         $endi=4; 
                     } 
                      else{
                          //$extra=0;
                          $endi=0; 
                      }
                    
                      
                      
                      
    //////////////////////////////////////////////////////////////////////////////// SUPERIOR //////////////////////////////////////////////////////////////////////
                      
                      

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                             
                             if (  ( $contDuplos>3)  ){
                                
                                  $endds=4;
                            
                                 }
                                 else{
                                     
                                 $endds=$contDuplos;
                                 
                                 }
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                       
                                  
                                   
                            if ( ( $contIndividuals>3 )  ){
                                
                                  $endis=4;
                            
                                 }
                                 else{
                                     
                                 $endis=$contIndividuals;
                                 
                                 }
                                       
        
                    }
                    else
                    {
                        $endis=0; 
                        //$extras=0;
                    }
                                       
                 }
                
                
                    
               ///////////////////////////// Cuarto 5 //////////////////////////////////////
if ($numeroquarto  == 5){
                
                
     // person
                   
                 
                    if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get(); 
                                       
                                 if (( $contDuplo==5 )){
                                
                                  $endd=5;
                            
                                 }
                                 else{
                                     
                                 $endd=$contDuplo;
                                 
                                 }
                      }
                      else{
                          $endd=0; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
           
                         $endi=5; 
                     } 
                      else{
                          //$extra=0;
                          $endi=0; 
                      }
                    
                      
                      
                      
    //////////////////////////////////////////////////////////////////////////////// SUPERIOR //////////////////////////////////////////////////////////////////////
                      
                      

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                             
                             
                            if (   ( $contDuplos>4)  ){
                                
                                  $endds=5;
                            
                                 }
                                 else{
                                     
                                 $endds=$contDuplos;
                                 
                                 }
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                       
                                    
                            if (   ( ( $contIndividuals>4 ))  ){
                                
                                  $endis=5;
                            
                                 }
                                 else{
                                     
                                 $endis=$contIndividuals;
                                 
                                }
                                       
                                       
        
                    }
                    else
                    {
                        $endis=0; 
                        //$extras=0;
                    }
                                       
                 }
                 
                 
                 
                 
                 
                 
                 
                     ///////////////////////////// Cuarto 6 //////////////////////////////////

if ($numeroquarto  == 6){
                
                
      // person
                    
                      
                      if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get();  
                                       
                                if (( $contDuplo==5 )){
                                
                                  $endd=5;
                            
                                 }
                                 else{
                                     
                                 $endd=$contDuplo;
                                 
                                 }
                      }
                      else{
                          $endd=0; 
                      }
                      
                      
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 5 . '%' )
                                       ->get(); 
           
                         $endi=6;
                     } 
                      else{
                          //$extra=0;
                          $endi=0;
                      }
                    
                      
       //////////////////////////////////// SUPERIOR //////////////////////////////////////////////               

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                                       
                                       
                                 if (  ( $contDuplos==6 ) || ( $contDuplos==7 ) ){
                                
                                  $endds=6;
                            
                                 }
                                 else{
                                     
                                 $endds=$contDuplos;
                                 
                                 }
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get();
                                       
                                       
                            if (  ( $contIndividuals==6 ) || ( $contIndividuals==7 )  ){
                                
                                  $endis=6;
                            
                                }
                                 else{
                                     
                                 $endis=$contIndividuals;
                                 
                                 }
                                      
                                       
        
                    }
                    else
                    {
                        $endis=0; 
                        //$extras=0;
                    }
                                      
            }
                
                
                
                

              $checkin = Input::get ( 'checkin' );
              $checkout = Input::get ( 'checkout' );
              $persona = Input::get ( 'person' );                
                           
               if ($checkin > $checkout) {

                      $checkout = $checkin ;  
                      //$checkout = $checkin ;
                      $checkin = Input::get ( 'checkout' );
     
return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva','precio_children',
'precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','menosyear','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto'  )) ;
                       
                } 
                
                elseif ($checkin < $checkout) {

                      $checkout = Input::get ( 'checkout' );  
                      //$checkout = $checkin ;
                      $checkin = $checkin ;
     
return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva','precio_children',
'precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','menosyear','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto'  )) ;
                       
                } 
                
                
                elseif ($checkin== $checkout) {
                   $checkout=$checkin ;
                   $checkin =$checkin;
      
      
return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva',
'precio_children','precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto'  )) ; 
                       
                   } else {
                      $checkout;
                      $checkin;
     
 return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva','precio_children',
'precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto'  )) ;
                       
                   }
                
                 
             }
    
    
    
          /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                      
                      
        
      
      }
   
 } 
