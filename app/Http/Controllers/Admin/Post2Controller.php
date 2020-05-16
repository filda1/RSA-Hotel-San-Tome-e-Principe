<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Hotelpicture;
use App\Roompicture;


class Post2Controller extends Controller
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
       $posts = hotelpicture::all();
        return view('admin.post.show',compact('posts'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('public');
    
                //$path = $request->image->getClientOriginalName();
                          
            }else{
                
                return 'No';
            }
           
          
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
            
            $post = new hotelpicture;
            $post->name_hotel = $imageName ;
            $post->id_hotel = 1;
            $post->picturehotel = $name_imag_md5 ;
          
            $post->save();
 
        return redirect(route('post.index'));
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
        // if (Auth::user()->can('posts.update')) {
            $post = hotelpicture::where('id',$id)->first();
             
            return view('admin.post.edit',compact('post','id'));
       // }
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
        
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }
        if (!empty(image) ){
            $name_imag_md5 = $request->image->hashName(); /// OBTIENE NOMBRE ENCRIPTADO
        }else{
            $name_imag_md5 = "null"; 
        }
        
        $post = hotelpicture::find($id);
        $post->name_hotel = $imageName ;
        $post->id_hotel = 1;
        $post->picturehotel = $name_imag_md5 ;
        $post->save();
      
        $post->save();

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
