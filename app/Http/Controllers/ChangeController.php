<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail2;
use Illuminate\Support\Facades\Mail;
use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;

class ChangeController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index (Request $request, $id)
    {
        
       // Enviar email =======>
       //$date = reserve::where('name_reserve',$id )->first();
       
        $date = reserve::where('id',$id )->first();
        
        
        
///////////////////////////////////////////////////////////////////////////// Incremento Quarto y eliminacion ///////////////////////////////////////////////////////////
       $id_quarto = $date->id_room;
       
       /*$x  = room::where ( 'available', 'LIKE', '%' . 0 . '%' )
                         ->where ( 'id', 'LIKE', '%' . $id_quarto  . '%' )
                         ->first(); */
                         
           $x = room::where('id',$id_quarto)
                ->first();
                                       
     
       //NO SUPERIOR
       
        if ($x->id == 1){
            
            $quartoid= 1;
            $numero = $x->infoConfirm;
            
            if( ($numero> -1) && ($numero< 6) ){
                
                
                  if($numero==5){
                      
                      $n=5;
                      
                       room::where('id', 1 )
                        ->update(['infoConfirm' => $n]); 
                        
                        reserve::where('id', $id)->delete();
                
                  }
                  else{
                      
                      $suno= $numero + 1;
                      
                       room::where('id', 1 )
                        ->update(['infoConfirm' => $numero + 1]); 
                        
                        
                         //Elimino el quarto en reserva table BD
                       reserve::where('id', $id)->delete();
                
                  }
                
            }
            
        }
        
        
        
        
        if ($x->id == 5){
            
             $numero = $x->infoConfirm;
            
            
            if( ($numero>-1) && ($numero<2) ){
                
                
                  if($numero==1){
                      
                      $n=1;
                      
                       room::where('id', 5 )
                        ->update(['infoConfirm' => $n]); 
                        
                        reserve::where('id', $id)->delete();
                
                  }
                  else{
                      
                      $suno= $numero + 1;
                      
                       room::where('id', 5 )
                        ->update(['infoConfirm' => $numero + 1]); 
                        
                        
                         //Elimino el quarto en reserva table BD
                       reserve::where('id', $id)->delete();
                
                  }
                
            }
          
            
        }
        
        
        //SUPERIOR
        
        if ($x->id == 3){
            
        
            $numero = $x->infoConfirm;
            
            
            if( ($numero>-1) && ($numero<8) ){
                
                
                  if($numero==7){
                      
                      $n=7;
                      
                       room::where('id', 3 )
                        ->update(['infoConfirm' => $n]); 
                        
                        reserve::where('id', $id)->delete();
                
                  }
                  else{
                      
                      $suno= $numero + 1;
                      
                       room::where('id', 3 )
                        ->update(['infoConfirm' => $numero + 1]); 
                        
                        
                         //Elimino el quarto en reserva table BD
                       reserve::where('id', $id)->delete();
                
                  }
                
            }
            
        }
        
        
        
        
        
        if ($x->id == 6){
            
           $numero = $x->infoConfirm;
            
            
            if( ($numero>-1) && ($numero<8) ){
                
                
                  if($numero==7){
                      
                      $n=7;
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' => $n]); 
                        
                        reserve::where('id', $id)->delete();
                
                  }
                  else{
                      
                      $suno= $numero + 1;
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' => $numero + 1]); 
                        
                        
                         //Elimino el quarto en reserva table BD
                       reserve::where('id', $id)->delete();
                
                  }
                
            }
        }
        
        
/////////////////////////////////////////////////////////////////////////////////////////////
       
       
        $cor =(explode("_",$date->name_reserve));
    
 
        $name ='Cancelar Reserva Rsaecolodge'; 
        $message = 'NOME:'.Auth::user()->name.',' . ' '.'EMAIL:'.Auth::user()->email.','.' '.'CHECKIN:'. $date->checkin.','. ' '.'CHEKOUT:'.$date->checkout.','. ' ' .'RESERVA:'.$cor[0] ; 
        
      // Email A empresa/admin
      //Mail::to('rsaeco@yahoo.com')->send(new Demoemail2($name,$message));
      Mail::to('serviruma.rocasantoantonio@gmail.com')->send(new Demoemail2($name,$message));
      
      // Email User
      $email_individuo= Auth::user()->email;
      Mail::to($email_individuo)->send(new Demoemail2($name,$message));


      //Activo el quarto en room table BD
      /*$n_room = room::find($id);
      $n_roomeng = roomeng::find($id);
      $person= $n_room->person;
      $personeng= $n_roomeng->person;
       room::where('id',$id )
             ->update(['available' => 0, 'vacancies' => $person ]); 

             roomeng::where('id',$id )
             ->update(['available' => 0, 'vacancies' => $personeng ]);*/
             
                        
     return redirect(route('home'));
       
    }

}
