<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Hotelpicture;
use App\Reserve;
use App\Room;
use App\User;



class ReserveController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $posts = reserve::all();
        
       $user = user::all();
       
       $count = user::count();
       
       //$posts = user::leftJoin('reserve', 'reserve.children', '=', 'user.id')
       //->get();
               
               
        return view('admin.reserve.show',compact('posts','user','count'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reserve.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $post = reserve::where('id',$id)->first();
             
        return view('admin.reserve.edit',compact('post','id'));
   
    return redirect(route('admin.home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
        $post = reserve::find($id);
        $post->name_reserve =  $request->name_reserve;
        //$post->id_usuario=  $request->id_user;
        $post->id_room =  $request->id_room;
        $post->checkin =  $request->checkin;
        $post->checkout =  $request->checkout;
        $post->price =  $request->price;
        $post->total =  $request->total;
        $post->person =  $request->person;   
        $post->children =  $request->id_user;  //=========================================> Id_user
        $post->cancel =  $request->cancel;
        $post->info =  $request->info;
     
        $post->save();

        return redirect(route('reserve.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
       /* $n_room = reserve::where('id',$id)
                ->join ('room','reserve.id_room','=','room.id')
                ->first();

        $person= $n_room ->person;*/
        
        

        /////room::where('id',$id )
         //////    ->update(['available' => 0, 'vacancies' => $person->person ]); 
       
       
       $n_room = reserve::where('id',$id)
                ->first();
                
        $id_cuarto= $n_room->id_room;
        
        
         $qq = room::where('id',$id_cuarto)
                ->first();
        
        $incremento = $qq -> infoConfirm;
        
        //NO SUPERIOR
                //Duplo
                
            if ($id_cuarto == 1){
            
               if( ($incremento>-1) && ($incremento< 6) ){
                
                
                      if($incremento==5){
                      
                         $n=5;
                      
                          room::where('id', 1 )
                           ->update(['infoConfirm' => $n]); 
                           //return redirect()->back();
                           
                           reserve::where('id',$n_room->id)->delete();
                
                   }
                  else{
                      
                      $suno= $incremento + 1;
                      
                       room::where('id', 1 )
                        ->update(['infoConfirm' =>$incremento + 1]); 
                        

                            reserve::where('id',$n_room->id)->delete();
                            //return redirect()->back();
                
                  }
                
               }
            }
            
            
            //Individual 
            
             if ($id_cuarto == 5){
            
               if( ($incremento>-1) && ($incremento< 2) ){
                
                
                      if($incremento==1){
                      
                         $n=1;
                      
                          room::where('id', 5 )
                           ->update(['infoConfirm' => $n]); 
                           //return redirect()->back();
                           
                           reserve::where('id',$n_room->id)->delete();
                
                   }
                  else{
                      
                      $suno= $incremento + 1;
                      
                       room::where('id', 5 )
                        ->update(['infoConfirm' =>$incremento + 1]); 
                        

                            reserve::where('id',$n_room->id)->delete();
                            //return redirect()->back();
                
                  }
                
               }
            }
            
            
            // NO SUPERIOR
            // DUPLO SUPERIOR
            
             if ($id_cuarto == 3){
            
               if( ($incremento>-1) && ($incremento< 8) ){
                
                
                      if($incremento==7){
                      
                         $n=7;
                      
                          room::where('id', 3 )
                           ->update(['infoConfirm' => $n]); 
                           //return redirect()->back();
                           
                           reserve::where('id',$n_room->id)->delete();
                
                   }
                  else{
                      
                      $suno= $incremento + 1;
                      
                       room::where('id', 3 )
                        ->update(['infoConfirm' =>$incremento + 1]); 
                        

                            reserve::where('id',$n_room->id)->delete();
                            //return redirect()->back();
                
                  }
                
               }
            }
            
            
            // INDIVIDUAL SUPERIOR
            
             if ($id_cuarto == 6){
            
               if( ($incremento>-1) && ($incremento< 8) ){
                
                
                      if($incremento==7){
                      
                         $n=7;
                      
                          room::where('id', 6 )
                           ->update(['infoConfirm' => $n]); 
                           //return redirect()->back();
                           
                           reserve::where('id',$n_room->id)->delete();
                
                   }
                  else{
                      
                      $suno= $incremento + 1;
                      
                       room::where('id', 6 )
                        ->update(['infoConfirm' =>$incremento + 1]); 
                        

                            reserve::where('id',$n_room->id)->delete();
                            //return redirect()->back();
                
                  }
                
               }
            }
            
             //return redirect()->back();
                return view("admin.home");
    
    }
}
