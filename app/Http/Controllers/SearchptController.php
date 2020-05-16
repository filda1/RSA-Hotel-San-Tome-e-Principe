<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use App\Hotelpicture;
use App\Roompicture;
use App\hotelpictures;
use Datetime;
use Carbon\Carbon;
use App\Mail\Demoemail2;
use Illuminate\Support\Facades\Mail;
//use Redirect;
use Auth;
use Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
  

    public function search()
    {
        
          $person1 = Input::get ( 'person' );
          $sPerson = Input::get ( 'person' );
         
          $checkin = Input::get ( 'checkin' );
          $checkout = Input::get ( 'checkout' );
          
          $children = Input::get ( 'children' );
          $baby = Input::get ( 'baby' );
          
          $lang = Input::get ( 'lang' );
           
         
       //LOGEADO
      if( isset(Auth::user()->id)){
          
            if ($sPerson==0){
                
            }
            else{
                
            $person1 = Input::get ( 'person' );
             
             hotelpicture::where('id', 145 )
                           ->update(['person' => $person1]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['checkin' => $checkin]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['checkout' => $checkout]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['children' => $children]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['total' => $baby]);
                           
            hotelpicture::where('id', 145 )
                           ->update(['info' => $lang]);
                           
                           
                           
            $b=hotelpicture::where('id', 145 )
                               -> first();
                           
            Session::put('person', $b->person );
            Session::put('checkin', $b->checkin ); 
            Session::put('checkout', $b->checkout );
            Session::put('children', $b->children ); 
            Session::put('total', $b->total ); 
            Session::put('info', $b->info ); 
            
            
            
           $lang= Session::put('info', $b->info );
           $checkin= Session::put('checkin', $b->checkin ); 
           $checkout =Session::put('checkout', $b->checkout );
           $children=Session::put('children', $b->children ); 
           $baby= Session::put('total', $b->total ); 
           
           
           
                
            }
                           
             
      }//FIN LOGEADO
      
      //NO LOGEADO
      else
      {
          
             
             hotelpicture::where('id', 145 )
                           ->update(['person' => $person1]);
                           
            hotelpicture::where('id', 145 )
                           ->update(['checkin' => $checkin]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['checkout' => $checkout]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['children' => $children]);
                           
             hotelpicture::where('id', 145 )
                           ->update(['total' => $baby]);
                           
              hotelpicture::where('id', 145 )
                           ->update(['info' => $lang]);
                           
                           
            $b=hotelpicture::where('id', 145 )
                               -> first();
                               
                           
            Session::put('person', $b->person );
            Session::put('checkin', $b->checkin ); 
            Session::put('checkout', $b->checkout );
            Session::put('children', $b->children ); 
            Session::put('total', $b->total );
            Session::put('info', $b->info );
            

           $lang= Session::put('info', $b->info );
           $checkin= Session::put('checkin', $b->checkin ); 
           $checkout =Session::put('checkout', $b->checkout );
           $children=Session::put('children', $b->children ); 
           $baby= Session::put('total', $b->total ); 
            
      }//FiN NO LOGEAD
      
         $checkin= Session::get('checkin' );
         $checkout= Session::get('checkout' );
      
            $today = date("Y-m-d");
            //$today = Carbon::yesterday();
            
            
            
            ////////////////////////////////////////////////////////////////////// FECHAS //////////////////////////////////////////
            
            
            if (( $checkin < $today ) or (  $checkout <  $today ) or ( $checkin==$checkout ) ){
           
                   //return view('welcome');
                   //return redirect::back();
                   return back()->withErrors(['Error: As datas n���o podem ser menor que a data de  hoje / Dates cannot be less than today s date', 'The Message']);
            }
            
            
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            //////////////////////////////////////////////////////////////////////// VALIDACIONES  /////////////////////////////////////////////////////////////////////////////////////////////////////

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
            
            
             $children=Session::get('children'); 
             $baby= Session::get('total' );   
              $person1 = Input::get ( 'person' );
        
              if( ($children!=0) or ($baby!=0)){
                  
                        
              if(  (($person1 =="2")  && ( $contDuplos1 + $contIndividuals1 <1)) or  (($person1 =="1")  && ( $contDuplos1 + $contIndividuals1 <1)) or
               (($person1 =="4")  && ( $contDuplos1 + $contIndividuals1 <2)) or  (($person1 =="3")  && ( $contDuplos1 + $contIndividuals1 <2)) or
               (($person1 =="6")  && ( $contDuplos1 + $contIndividuals1 <3)) or  (($person1 =="5")  && ( $contDuplos1 + $contIndividuals1 <3)) or
               (($person1 =="8")  && ( $contDuplos1 + $contIndividuals1 <4)) or  (($person1 =="7")  && ( $contDuplos1 + $contIndividuals1 <4)) or
               (($person1 =="10")  && ( $contDuplos1 + $contIndividuals1 <5)) or  (($person1 =="9")  && ( $contDuplos1 + $contIndividuals1 <5)) 
          
                      )
               {
                    return back()->withErrors(['  Disculpe, n���o ha cuarto/s de vaga da anterior quantidade de adultos']);
              
               } 

                  
              }
              
              else{
                  
                  if(  (($person1 =="2")  && ( $contDuplo1 + $contIndividual1 <1)) or  (($person1 =="1")  && ( $contDuplo1 + $contIndividual1 <1)) or
               (($person1 =="4")  && ( $contDuplo1 + $contIndividual1 <2)) or  (($person1 =="3")  && ( $contDuplo1 + $contIndividual1 <2)) or
               (($person1 =="6")  && ( $contDuplo1 + $contIndividual1 <3)) or  (($person1 =="5")  && ( $contDuplo1 + $contIndividual1 <3)) or
               (($person1 =="8")  && ( $contDuplo1 + $contIndividual1 <4)) or  (($person1 =="7")  && ( $contDuplo1 + $contIndividual1 <4)) or
               (($person1 =="10")  && ( $contDuplo1 + $contIndividual1 <5)) or  (($person1 =="9")  && ( $contDuplo1 + $contIndividual1 <5)) 
          
                      )
               {
                    return back()->withErrors(['Disculpe, n���o ha cuarto/s de vaga da anterior quantidade de adultos']);
              
               } 

              }
              
            
              

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
        
            
         
         /////////////////////////////////////////////////////////////// ELIMINA RESERVA Y ACTIVA CUARTO ///////////////////////////////////////
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
        
        ////////////////////////////////////////////////////////////////////////////// FECHAS RESTAS N DIAS //////////////////////////////////////////////////////////////////

   
         
         $fechaActual = $checkout;
         $fechaMenor = Carbon::parse($checkin);
         $diferencia = $fechaMenor->diffInDays($fechaActual);
         $numero_dias = (int)$diferencia;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////  PRECIO CHILDREN, PRECIO BABY ///////////////////////////////////////////////////////////////////////////

           $children=Session::get('children'); 
           $baby= Session::get('total' ); 
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
      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      
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



            //$checkin = Input::get ( 'checkin' );
            //$checkout = Input::get ( 'checkout' );
            
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



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      
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
            

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////// Superior/No ////////////////////////////////////////////////////////////////////////////
    
            $children=Session::get('children'); 
           $baby= Session::get('total' ); 
           
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
          
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            
            
            if ($checkin < $checkout) {
                
                $checkout=$checkout;
                $checkin = $checkin;
            }
            
            if ($checkin > $checkout) {
                
             
                      $checkout = Session::get('checkin' );
                      $checkin = Session::get('checkout' );
            }
            
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    $lang= Session::get('info' );
          if($lang=="pt"){
              
                     
                     //DUPLO
                      if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get(); 
                                       
                                       
                                       $endd=1; 
                      }
                      else{
                          $endd=1; 
                      }
                      
                      
                      //INDIVIDUAL
                               
                     if  ( $contIndividual == 1)  {
                         
                        $extra   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
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

                     //DUPLO SUPERIOR

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                                
                                  $endds=1;
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    //INDIVIDUAL SUPERIOR
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                  $endis=1;
                               
        
                    }
                    else
                    {
                        //$end=0; 
                        $endis=0; 
                    }
                
                 
                   
                
return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva','precio_children',
'precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','menosyear','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto','contDuplo','contIndividual','contDuplos','contIndividuals'  )) ;
              
              
          }//Fin pt
          
          // Lang=en
          if($lang=="en"){
              
              
                     //DUPLO
                      if  (($contDuplo>0) && ($contDuplo<6)) {
                      
                      $dat   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 1 . '%' )
                                       ->get(); 
                                       
                                       
                                       $endd=1; 
                      }
                      else{
                          $endd=1; 
                      }
                      
                      
                      //INDIVIDUAL
                               
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

                     //DUPLO SUPERIOR

                      if  (($contDuplos>0) && ($contDuplos<8)) {
                       $dats   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 3 . '%' )
                                       ->get();  
                                       
                                
                                  $endds=1;
                                       
                      }
                      else{
                          
                          $endds=0; 
                      }
                      
                        
                    //INDIVIDUAL SUPERIOR
                    if  (($contIndividuals>0) && ($contIndividuals<8)) {            
                      $extras   = roomeng::where ( 'available', 'LIKE', '%' . 0 . '%' )
                                       ->where ( 'id', 'LIKE', '%' . 6 . '%' )
                                       ->get(); 
                                       
                                       
                                  $endis=1;
                               
        
                    }
                    else
                    {
                        //$end=0; 
                        $endis=0; 
                    }
                
              
return view('hotel',compact('data','end','extra_room','extra_room2', 'checkin','checkout','persona','posts','children','baby','numero_dias','iva','infoiva','precio_children',
'precio_baby','hoy','day','month','T1','T2','T3','T4','roomparalelo3','end2','roomparalelo4','roomparalelo5','roomparalelo6','T0','menosyear','dat','extra','superior','dats','extras','endds','endis','endd','endi','numeroquarto','contDuplo','contIndividual','contDuplos','contIndividuals'  )) ;

          }//fin en
          
            
          
          
          
            
      
      }
   
  } 
