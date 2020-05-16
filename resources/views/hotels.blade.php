@extends('layouts/appC')
<link rel="shortcut icon" href="/user/img/rsa.png">
 @include('layouts/head')

@section('head')




<style>

.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: 111px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}


.product_view .modal-dialog{max-width: 1050px; width: 65%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

        *,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-prefer#b18350-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}
</style>  
<body>

  <!-- Page Content -->
  <div class="col">

  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fas fa-globe-africa"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal1') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('services') }}" style="color:#191919;;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal2') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('hotels') }}" style="color:#191919;;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal3') }}</a></h3>
      
            
          </div>
        </div>
        </div>
        
 
  </section>
  
  
  
  <div class="card">
  <div class="card-body">
      
      
      
      
        <!-- BUSCADOR -->

    <div class="container">
       
       
     @if (app()->getLocale()=="pt") 
     
     <form action="/searchpt" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                   
                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check In') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate23" type='date'  class="form-control search-slt" placeholder="Check-in" name='checkin' required="required" data-validation-required-message="Please enter a date."  style="font-weight:bold;font-family:Century Gothic;">
                        </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check Out') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate24" type='date'  class="form-control search-slt" placeholder="Check-out"  name='checkout' required="required" data-validation-required-message="Please enter a date." style="font-weight:bold;font-family:Century Gothic;"/>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Adults') }}</label>
                        <i class="fa fa-user icon"></i><label>&nbsp;&nbsp;</label>
                        <select  required id="person" class="form-control search-slt" id="exampleFormControlSelect1"  name='person' style="font-weight:bold;font-family:Century Gothic;" 
                           >
                                <option value="" >{{ __('messages.Persona') }}</option>
                             
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                       
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Children') }}</label>
                        <i class="fa fa-child icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="children" name="children" style="font-weight:bold;font-family:Century Gothic;" >
                                <option value="0" >{{ __('messages.NCrianças') }}</option>
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Infants') }}</label>
                        <i class="fa fa-baby icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="baby" name="baby" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="0">{{ __('messages.NBebes') }}</option>
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                               
                            </select>
                        </div>
                        
                      <!--    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Quartos') }}</label>
                        <i class="fa fa-bed icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="quarto" name="numeroquarto" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="1">1 {{ __('messages.Quartos') }} </option>
                                <option value="2" >2 {{ __('messages.Quartos') }} </option>                        
                                <option value="3">3 {{ __('messages.Quartos') }} </option>
                                <option value="4">4 {{ __('messages.Quartos') }} </option>
                                <option value="5">5 {{ __('messages.Quartos') }}</option>
                                <option value="6">6 {{ __('messages.Quartos') }}</option>
                            
                               
                            </select>
                        </div> -->
                     
                        <div class="col-lg-2 col-md-3 col-sm-1 p-0">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <button type="submit" class="btn btn-danger wrn-btn"><i class='fas fa-search' style='font-size:16px' onclick="myFunction()" ></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <input type='hidden'  value="{{ app()->getLocale() }}"  name="lang"  style="width:20px height:5px;"/> 
            <p align = "justify">*{{ __('messages.data') }}</p>
        </form>
        
          @if($errors->any())
          <h5 style="color:red;">{{$errors->first()}}</h5>
           @endif
           
           
           
    @else
    
    <form action="/searchpt" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                   
                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check In') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate23" type='date'  class="form-control search-slt" placeholder="Check-in" name='checkin' required="required" data-validation-required-message="Please enter a date."  style="font-weight:bold;font-family:Century Gothic;">
                        </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check Out') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate24" type='date'  class="form-control search-slt" placeholder="Check-out"  name='checkout' required="required" data-validation-required-message="Please enter a date." style="font-weight:bold;font-family:Century Gothic;"/>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Adults') }}</label>
                        <i class="fa fa-user icon"></i><label>&nbsp;&nbsp;</label>
                        <select  required id="person" class="form-control search-slt" id="exampleFormControlSelect1"  name='person' style="font-weight:bold;font-family:Century Gothic;" 
                           >
                                <option value="" >{{ __('messages.Persona') }}</option>
                             
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                        </div>
                       
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Children') }}</label>
                        <i class="fa fa-child icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="children" name="children" style="font-weight:bold;font-family:Century Gothic;" >
                                <option value="0" >{{ __('messages.NCrianças') }}</option>
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Infants') }}</label>
                        <i class="fa fa-baby icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="baby" name="baby" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="0">{{ __('messages.NBebes') }}</option>
                                <option value="1" >1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                               
                            </select>
                        </div>
                        
                      <!--      <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:black;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Quartos') }}</label>
                        <i class="fa fa-bed icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="quarto" name="numeroquarto" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="1">1 {{ __('messages.Quartos') }} </option>
                                <option value="2" >2 {{ __('messages.Quartos') }} </option>                        
                                <option value="3">3 {{ __('messages.Quartos') }} </option>
                                <option value="4">4 {{ __('messages.Quartos') }} </option>
                                <option value="5">5 {{ __('messages.Quartos') }}</option>
                                <option value="6">6 {{ __('messages.Quartos') }}</option>
                            
                               
                            </select>
                        </div>-->
                   

                        <div class="col-lg-2 col-md-3 col-sm-1 p-1">
                        <label>&nbsp;</label>
                            <button type="submit" class="btn btn-danger wrn-btn"><i class='fas fa-search' style='font-size:16px' onclick="myFunction()" ></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <input type='hidden'  value="{{ app()->getLocale() }}"  name="lang"  style="width:20px height:5px;"/> 
            <p align = "justify">*{{ __('messages.data') }}</p>
        </form>
        
          @if($errors->any())
          <h5 style="color:red;">{{$errors->first()}}</h5>
           @endif
    
    @endif
    
</div>

    
    
    
    
    
    
    
  </div>
</div>
  
  
  
 
<div>
    
 
  
 <br><br>
 
 <!--   <h1 class="my-4" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp;{{ __('messages.Lista de Quartos') }}
          <small >são tomé e príncipe</small>
        </h1>
 <div class="col">
  <p align="justify" style="font-weight:bold;font-family:Century Gothic;font-size:18px"> &nbsp;&nbsp;{{ __('messages.MsgQuartos') }}</p>

  <br> -->











    <div class="row">
        

      <!-- Blog Entries Column -->
      <div class="col-md-12">
            <!-- <div><button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button></div><br>-->
      
  @if (app()->getLocale() == "pt" )
  
<!-- ////////////////////////////////////////////////////  Quarto Duplo Superior /////////////////////////////////////////////////////////////////// -->
        <div class="card mb-8">
     
          <div class="card-body">
            
            <div class="row align-items-center my-7">
      <div class="col-lg-5">
          <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$rooms[2]->name_room}}</h3><br>
          
          <!--<h1 class="font-weight-light" style="color:#b18350;font-weight:bold;font-family:Century Gothic;">{{$rooms[2]->name_room}}</h1>-->
        
        <p class="card-text" align="justify" style="font-family:Century Gothic;font-size:18px">{{$rooms[2]->pictureroom}}</p>
      
        
        
      </div>   
      <div class="col-lg-7">
      <div class="col" >


    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            
     <!--    <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[9]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[10]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


            <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[11]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[12]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[13]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>   -->       
          

            <!-- <div class="carousel-item col-md-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[14]->picturehotel )}}" alt="slide 1"  width="700">
                    </a>

                  </div>                   
            </div>   
            </div> -->
            
      
            <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="/user/img/cds1.jpg" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                      <img class="" src="/user/img/cds2.jpg" alt="slide 2"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/cds3.jpg" alt="slide 3"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                      <img class="" src="/user/img/cds4.jpg" alt="slide 4"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                      <img class="" src="/user/img/cds5.jpg" alt="slide 5"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="" src="/user/img/cds6.jpg" alt="slide 6"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
            
            
            
            
            
          

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
        
      </div>

    </div>
    <br>
    <!--    <img src="user/img/rating.png" height="30" width="200" align="right"> -->
 
</div>  
  </div>
  <br>





 <!-- ////////////////////////////////////////////////////  Individual S //////////////////////////////////////////////////////////////////// -->
         
 <div class="card mb-200">
     
     <div class="card-body">
       
       <div class="row align-items-center my-7">
 <div class="col-lg-5">
     <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$rooms[5]->name_room}}</h3><br>
     <!--<h1 class="font-weight-light" style="color:#b18350;font-weight:bold;font-family:Century Gothic;">{{$rooms[5]->name_room}}</h1>-->
   
   <p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$rooms[5]->pictureroom}}</p>
   
   <!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->
   
 </div>
 <div class="col-lg-7">
 <div class="col" >
<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="4000">
   <div class="carousel-inner row w-100 mx-auto" role="listbox">

           <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[18]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[19]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[20]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[21]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[22]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


   <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next text-faded" href="#myCarousel2" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
   </a>
</div>
</div>
</div>
   
 </div>

</div>
<br>

</div>  
</div>
<br>
  



 
  <!-- //////////////////////////////////////////////////// Quarto Duplo ////////////////////////////////////////////////////////////////////// --> 
  <div class="card mb-200">
     
     <div class="card-body">
       
       <div class="row align-items-center my-7">
 <div class="col-lg-5">
     <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$rooms[0]->name_room}}</h3><br>
  
   <p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$rooms[0]->pictureroom}}</p>
   
   <!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->
  
 </div>
 <div class="col-lg-7">
 <div class="col" >
<div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="4000">
   <div class="carousel-inner row w-100 mx-auto" role="listbox">

<!--FLor-->
<!--  <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[27]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  -->
 
                
            <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[28]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

<!--Ventana-->
<!--  <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[30]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
-->
          
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[32]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div> 
            
            
              <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/qd.jpg" alt="slide 3"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  



   <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next text-faded" href="#myCarousel3" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
   </a>
</div>
</div>
</div>
   
 </div>

</div>
<br>

</div>  
</div>
<br>

   <!--/////////////////////////////////////////////////// Quarto Individual /////////////////////////////////////////////////////////////////// -->
        
   <div class="card mb-200">
     
     <div class="card-body">
       
       <div class="row align-items-center my-7">
 <div class="col-lg-5">
      <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$rooms[4]->name_room}}</h3><br>

   <p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$rooms[4]->pictureroom}}</p>
   
    <!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->
    
 </div>
 <div class="col-lg-7">
 <div class="col" >
<div id="myCarousel4" class="carousel slide" data-ride="carousel" data-interval="4000">
   <div class="carousel-inner row w-100 mx-auto" role="listbox">
       
       
         <div class="carousel-item col-md-3 active ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/qu7.jpg" alt="slide 1"  width="1000"  height="667">
                    </a>

                  </div>                   
            </div>   
            </div>
   
   <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[36]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[37]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

             
            
         
         

     

   <a class="carousel-control-prev" href="#myCarousel4" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next text-faded" href="#myCarousel4" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
   </a>
</div>
</div>
</div>
   
 </div>

</div>
<br>

</div>  
</div>
<br>
      


    
  @endif
 @if(app()->getLocale() == "en" )

 
  
<!-- /////////////////////////////////////////// Quarto Duplo S ENG ////////////////////////////////// -->

 <div class="card mb-200">
     
     <div class="card-body">
       
       <div class="row align-items-center my-7">
 <div class="col-lg-5">
     
      <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$engs[2]->name_room}}</h3><br>
   
   <p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$engs[2]->pictureroom}}</p>

    <!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->
     
 </div>
 <div class="col-lg-7">
 <div class="col" >
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
   <div class="carousel-inner row w-100 mx-auto" role="listbox">
   
   
   <!--  <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[9]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[10]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


            <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[11]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[12]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[13]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>   -->
  

            <!-- <div class="carousel-item col-md-3">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[14]->picturehotel )}}" alt="slide 1"  width="700">
                    </a>

                  </div>                   
            </div>   
            </div> -->
            
            
             <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="/user/img/cds1.jpg" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                      <img class="" src="/user/img/cds2.jpg" alt="slide 2"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/cds3.jpg" alt="slide 3"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                      <img class="" src="/user/img/cds4.jpg" alt="slide 4"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                      <img class="" src="/user/img/cds5.jpg" alt="slide 5"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="" src="/user/img/cds6.jpg" alt="slide 6"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
            
            

   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
   </a>
</div>
</div>
</div>
   
 </div>

</div>
<br>

</div>  
</div>
<br>





<!-- ////////////////////////////////////////////////////  Individual S ENG //////////////////////////////////////////////////////////////////// -->
    
<div class="card mb-200">

<div class="card-body">
  
  <div class="row align-items-center my-7">
<div class="col-lg-5">
    <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$engs[5]->name_room}}</h3><br>

<p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$engs[5]->pictureroom}}</p>

<!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->


</div>
<div class="col-lg-7">
<div class="col" >
<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="4000">
<div class="carousel-inner row w-100 mx-auto" role="listbox">


<div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[18]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[19]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[20]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[21]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[22]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


<a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next text-faded" href="#myCarousel2" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
</div>

</div>

</div>
<br>

</div>  
</div>
<br>





<!-- //////////////////////////////////////////////////// Quarto Duplo ENG ////////////////////////////////////////////////////////////////////// --> 
<div class="card mb-200">

<div class="card-body">
  
  <div class="row align-items-center my-7">
<div class="col-lg-5">
    <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$engs[0]->name_room}}</h3><br>

<p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$engs[0]->pictureroom}}</p>


<!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->

</div>
<div class="col-lg-7">
<div class="col" >
<div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="4000">
<div class="carousel-inner row w-100 mx-auto" role="listbox">

<div class="carousel-item col-md-3 ">
    
    <!--This is a comment. Comments are not displayed in the browser-->
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[32]->picturehotel )}}" alt="slide 2"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[28]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

<!--This is a comment. Comments are not displayed in the browser-->
          

        
            
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/qd.jpg" alt="slide 3"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  

<a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next text-faded" href="#myCarousel3" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
</div>

</div>

</div>
<br>

</div>  
</div>
<br>

<!--/////////////////////////////////////////////////// Quarto Individual ENG /////////////////////////////////////////////////////////////////// -->
   
<div class="card mb-200">

<div class="card-body">
  
  <div class="row align-items-center my-7">
<div class="col-lg-5">
    <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{$engs[4]->name_room}}</h3><br>

<p class="card-text" align="justify"  style="font-family:Century Gothic;font-size:18px">{{$engs[4]->pictureroom}}</p>


<!--<button type="submit" onclick="window.location.href='{{ route('reserveemail') }}'" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reservaremail') }}</button>-->

</div>
<div class="col-lg-7">
<div class="col" >
<div id="myCarousel4" class="carousel slide" data-ride="carousel" data-interval="4000">
<div class="carousel-inner row w-100 mx-auto" role="listbox">

<div class="carousel-item col-md-3 active ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[36]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
                
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[37]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  


            <!-- <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[38]->picturehotel )}}" alt="slide 1"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  -->
            
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                      <img class="" src="/user/img/cds3.jpg" alt="slide 3"  width="1000">
                    </a>

                  </div>                   
            </div>   
            </div>  
           

<a class="carousel-control-prev" href="#myCarousel4" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next text-faded" href="#myCarousel4" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
</div>

</div>

</div>
<br>

</div>  
</div>
<br>
 

        
   @endif
  <div align="left">
              
                <h5 class="" style="color:#47775D;font-weight:bold;font-family:Century Gothic;font-size:18px">{{ __('messages.Condiçõesdereserva') }}</h5>
         <h1> <p style="font-family:Century Gothic;font-size:12px">
          {{ __('messages.Pré') }}<br>
          {{ __('messages.Cancelamentos') }}<br>
           {{ __('messages.Reser') }}<br>
          {{ __('messages.Saídas') }}<br>
          {{ __('messages.Taxas') }} </p>
              
          </div></h1>
        

    </div>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
        
          </li>
          <li class="page-item disabled">
        
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget
         <div class="card my-4">
          <h5 class="card-header">Pesquisar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Pesquise por...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>   
         -->
       
        <!-- Categories Widget
        <div class="card my-4">
          <h5 class="card-header">{{ __('messages.Categorias') }}</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">{{ __('messages.Preços') }}</a>
                  </li>
                  <li>
                    <a href="#">{{ __('messages.Quartos') }}</a>
                  </li>
                  <li>
                    <a href="#">{{ __('messages.Localização') }}</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">{{ __('messages.Vagas') }}</a>
                  </li>
                  <li>
                    <a href="#">{{ __('messages.Ofertas') }}</a>
                  </li>
                  <li>
                    <a href="#">{{ __('messages.Promoções') }}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
         -->
        
 
    <!-- /.row -->

  </div>
  
        <!-- Side Widget
        
         <div class="card my-4">
          <h5 class="card-header" style="color:#47775D;font-weight:bold;font-family:Century Gothic;font-size:18px">{{ __('messages.Tabelasdepreços') }}</h5>
          <div class="card-body" style="color:#47775D;font-family:Century Gothic;font-size:14px">{{ __('messages.cTabelasdepreços') }}<br>
             <label style="color:green;font-family:Century Gothic;font-size:15px">* {{ __('messages.épocasbaixas') }}</label> {{ __('messages.cépocasbaixas') }} <br>
             <label style="color:green;font-family:Century Gothic;font-size:15px">* {{ __('messages.épocasaltas') }}</label>  {{ __('messages.cépocasaltas') }}  <br>
             <label style="color:green;font-family:Century Gothic;font-size:15px">* {{ __('messages.reembolsáveis') }}</label>  {{ __('messages.creembolsáveis') }} <br>
             <label style="color:green;font-family:Century Gothic;font-size:15px">* {{ __('messages.standard') }}</label>  {{ __('messages.cstandard') }} 
          </div>
        </div>

        
        
         -->
       

      

        <!--  <div class="card my-4">
          
          <h5 class="card-header" style="color:#47775D;font-weight:bold;font-family:Century Gothic;font-size:18px">{{ __('messages.Condiçõesdereserva') }}</h5>
          <p style="color:#db7485;font-family:Century Gothic;font-size:14px">
          &nbsp; {{ __('messages.Pré') }}<br>
          &nbsp;{{ __('messages.Cancelamentos') }}<br>
          &nbsp; {{ __('messages.Reser') }}<br>
          &nbsp;{{ __('messages.Saídas') }}<br>
          &nbsp;{{ __('messages.Taxas') }} </p>
          
          </div>-->
 
        



          
           <!-- Side Widget 
           
            <div class="card my-4">
          <h5 class="card-header" style="color:#47775D;font-weight:bold;font-family:Century Gothic;font-size:18px">Info</h5>
          <ul class="list-unstyled mb-0">
                  <li>
                  <a href="{{ route('contact') }}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp; {{ __('messages.Contactame') }}</a>
                  </li>
                  <li>
                  <a href="{{ route('location') }}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp; {{ __('messages.Localização') }}</a>
                  </li>
                
                </ul>
          </div>
        </div>
           -->
          
  <!-- /.container -->



</body>

@section('footer')
@endsection