@extends('layouts/app1')
@include('layouts/head88')
@section('head')
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

      <!--Datepicker -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
           $('.date').datepicker({  
             
               format: 'dd-mm-yyyy',       
		           endDate: '+ 0d',
               //clearBtn: true,
               startDate: '0d'          
            
            });  
        
    </script> 


     <script>
       // Limpia datapicker, al presionar btn Search
      $("#reset-date").click(function(){
    $('.date').val("").datepicker("update");
})
    </script>
 <style> 
 .call-to-action {
  position: relative;
  background-color: #343a40;
  /**background: url("../user/img/bg-masthead.jpg") no-repeat center center; /** =======>  IMAGENES REPETIDAS DE OTRAS PAG */

   background:url("http://www.rsaecolodge.pt//user/img/1 (1).jpg")
   
  background-size: cover;
  padding-top: 7rem;
  padding-bottom: 7rem;
}

.call-to-action2 {
  position: relative;
  background-color: #343a40;
  background: url("http://www.rsaecolodge.pt//user/img/1 (1).jpg") no-repeat center center; /** =======>  IMAGENES REPETIDAS DE OTRAS PAG */

 
  
  background-size: cover;
  padding-top: 7rem;
  padding-bottom: 7rem;
}

.call-to-action .overlay {
  position: absolute;
  background-color: #212529;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  opacity: 0.3;
}
 
 
 
 

.fill { 
    min-height: 0%;
    height: 0%;
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
  -ms-flex-preferred-size: 33.333%;
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

  }
}

.table-hover>tbody>tr.no-hover:hover {
    background-color: #ffffff;
}
 </style>
</head> 

@section('main-content')
<body> 


 <br>
 <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fas fa-globe-africa" style="color:#47775D;"></i></a>
            </div>
            <!-- Galeria, dentro de modal 
            <h3 ><a data-toggle="modal" data-target="#product_view">  {{ __('messages.TituloPrincipal1') }}</a></h3>-->  
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal1') }}</a></h3>
            
            <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
     
       <!-- Galeria, dentro de modal -->   
        <div class="row justify-content-center">
    <div class="col-md-8">
       <div class="row">
            <a href="{{url('/storage/'. $posts[5]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[5]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[6]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[6]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[7]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[7]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[8]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[8]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[9]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[9]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[10]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[10]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[11]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[11]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[12]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[12]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[13]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[13]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
    </div>
</div>
	</div>
</div>
</div>
</div>
</div>
      <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building" style="color:#47775D;"></i></a>
            </div>
            <h3><a href="{{ route('services') }}"  style="color:#191919;font-family:Century Gothic;font-weight:bold;">{{ __('messages.TituloPrincipal2') }}</a></h3>
        
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('hotels') }}" ><i class="far fa-check-circle" style="color:#47775D;"></i></a>
            </div>
            <h3><a href="{{ route('hotels') }}"  style="color:#191919;font-family:Century Gothic;font-weight:bold;">{{ __('messages.TituloPrincipal3') }}</a></h3>
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>  </div>
    </div>

<!------------------------  , , {{Session::get('person' )}},,--- {{ Session::get('children')}},--- {{ Session::get('total')}},-----{{ $today}},,-----{{ $numero_dias }}
 
 ------ {{ $superior}}-->
 
 
    
<div class="col"  style="width:100%;">

 
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
        
    
    @endif
    
</div>
    
  </div>
</div>
 
</div>
    
    
 </div>
  
 <br><br><br><br>
          @if($errors->any())
           <p class="card-text"><div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong></strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{$errors->first()}}
</div>
</p>
           @endif
    
      
 @if ($superior== "no")
 
  <div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <h4> <a style="color:#47775D; ;font-family:Century Gothic;font-weight:bold;font-size:23px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;({{ __('messages.de') }}  {{ $checkin }} {{ __('messages.a') }} {{ $checkout }}),  <span style="color:black;font-family:Century Gothic;font-size:23px;font-weight:bold;">{{ __('messages.Persona') }}: {{ Session::get('person' )}}</span></a> </h4></div>
 
	  @if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

         <p class="card-text" alig><div class="alert alert-danger alert-dismissible" align="center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong align="center" style=";font-family:Century Gothic;font-weight:bold;font-size:16px">{{ __('messages.tempo') }}</strong> 
</div>
</p>
    
    <div class="card">
  <div class="card-body">
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10/01/{{ __('messages.ano') }}&nbsp;&nbsp;{{ __('messages.a') }}&nbsp;&nbsp; 30/06/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 01/07/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 31/10/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 01/11/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 15/12/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16/12/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 09/01/{{ __('messages.ano') }}+1</p>
  </div>
</div>
  </div>

    
    @else 
         
    
			@if(isset($dat))
			<p> </b></p>
			

    
        
         <div align="right">
               
        <div class="col">
			<table class="table-hover">
				<tbody style="height: 50px; overflow:auto;">    
     
        <form action="/selectpayment" method="POST" >
     {{ csrf_field() }}
     
        @for ($i=0; $i<$endd; $i++)
    <thead>
          <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$dat[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                        
                                         <div class="col-xl-8">
                                          &nbsp;&nbsp;
                                        </div>
                                         <div align="right" class="col-xs-6">
    
                         
                        <select  class="form-control search-slt" id="quarto" name="numeroquarto" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                          @for ($i=0; $i<=$contDuplo; $i++)
                          
                                <option value={{ $i }}>{{ $i }} {{ __('messages.Quartos') }} </option>
                           
                           @endfor
                               
                            </select>
                    
                                        
                                     </div>
                            
                                
                              
                                 
                                
                                </div>
                                           
                                </h3>
                            
    
                              
                               <div style="width:80%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                   {{$dat[0] ->bed1}}, <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i> <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i>
                                   <br>
                                 {{$dat[0] ->descripcion}}<br> {{$dat[0] ->include}} 
                               
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                                 
                                 
                               <input  type='hidden' value={{$dat[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ Session::get('person' )}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ Session::get('checkin')}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ Session::get('checkout')}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
                            
                             <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
          
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************-->
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->activity  }}&nbsp;€ 
                            <div style="display: none">
               
	                          {{ $precio_duplo = number_format($dat[0]->activity, 0)  }}
                            </div>

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price}}&nbsp;€
                            
                            <div style="display: none">
               
	                          {{ $precio_duplo = $dat[0]->price }}
                            </div>
                            
                            @endif


                            <!--*************************************************************************************************-->

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->service}}&nbsp;€  
                            
                            <div style="display: none">
               
	                          {{ $precio_duplo = number_format($dat[0]->service, 0)  }}
                            </div>
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price2}}&nbsp;€  
                            
                             <div style="display: none">
               
	                          {{ $precio_duplo = $dat[0] ->price2  }}
                            </div>
                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->activity}}&nbsp;€
                            <div style="display: none">
               
	                          {{ $precio_duplo = number_format($dat[0]->activity, 0)  }}
                            </div>
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price}}&nbsp;€ 
                            
                            <div style="display: none">
               
	                          {{ $precio_duplo = $dat[0]->price }}
                            </div>

                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->service}}&nbsp;€  
                            
                             <div style="display: none">
               
	                          {{ $precio_duplo = number_format($dat[0]->service, 0)  }}
                            </div>
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price2}}&nbsp;€
                            
                             <div style="display: none">
               
	                          {{ $precio_duplo = $dat[0] ->price2  }}
                            </div>

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                       
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr></thead>
                        
            @endfor
           
				</tbody>
			</table>
      @endif
     
    

				</tbody>
     
			</table>  
			
	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

                        

    
    @else
    
      
       <!--CHILDREN -->
       @if(($children!=0) && ($end!=0))
      
   
    <!-- <hr>--> <br>

          <div class="col" align= "left">
                     <div class="row">
                     <div class="col-sm">
                       <h3 align= "left"> <a   align="left" href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.NCrianças') }}: {{ $children}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp; <i class="fa fa-child icon" style='font-size:24px; color:#47775D;'></i></h3></a>
                    </div>
                 <div class="col-sm-2">
                
                </div>
            
                   <div class="col-sm-2" >
                    <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px;margin-top: 0.0em;"><p align="right" style="color:green;" >{{ $precio_children }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>  
                 </div>
                 
                </div>
            </div> 
         
                            
      
       @endif
     
      
         
         <!-- BABY-->
 
      @if(($baby!=0) && ( $end!=0)) 
      
        <!-- <hr>--><br>
   
        
      <div class="col" align= "left">
          
                     <div class="row">
                     <div class="col-sm">
                      
      <h3 align= "left"> <a  href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;"></span>&nbsp;&nbsp;&nbsp;&nbsp; {{ __('messages.NBebes') }}: {{ $baby}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp;  <i class="fas fa-baby" style='font-size:24px; color:#47775D;'></i>
                                </a>            
                                </h3>
                    </div>
                    
                    <div class="col-sm-2">
                    
                    </div>
                    
                   <div class="col-sm-2">
                   <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px"><p align="right" style="color:green;">{{ $precio_baby }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>
                 </div>

              
                 
                 
                 
                </div>
            </div> 
      

       @endif
       
       
    @endif
        




      <div class="row">
     
      <div class="col">

          <div class="float-right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                  
         </div>
          <div class="float-right" style="color:red;font-family:Century Gothic;font-size:16px" ><p>

                  <div style="display: none">
	                    {{ $total = 0 }}
                  </div>

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @for ($i = 0; $i <$endd; $i++)
          
         

            <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                  <div style="display: none">
                    @if (($T1 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total += number_format($dat[0] ->activity, 2)  }} € 

                            
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price }} €  
                    @endif
                  
                    <!--*************************************************************************************************-->

                    @if (($T2 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->service, 2)  }} € 

                    @endif

                    @if (($T2 =="OK") && ($numero_dias <= 3)) 

                     <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price2 }} €                        
                   @endif


                   <!--*************************************************************************************************-->

                   @if (($T3 =="OK") && ($numero_dias > 3))
 
                     <<td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->activity, 2)  }} € 
 
                   @endif

                   @if (($T3 =="OK") && ($numero_dias <= 3)) 

                   <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price }} €  

                  @endif


                 <!--*************************************************************************************************-->

                  @if (($T4 =="OK") && ($numero_dias > 3))

                  <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->service, 2)  }} € 

                  @endif

                 @if (($T4 =="OK") && ($numero_dias <= 3)) 

                 <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price2 }} €    

                 @endif

              </div>
  
            @endfor
         
        


           <!-- TOTAL 1/2-->
        

            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ $total + (($total)*$iva )}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total)*$iva }}  name='iva'  style=" width:20px; height:5px;"/>
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
             <input  type='hidden' value={{$precio_children}}  name='precio_children' />  
            <input  type='hidden' value={{$precio_baby}}  name='precio_baby'  />  
            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
            
            <input  type='hidden' value={{$precio_duplo}}  name='precio_duplo'  />
           

             <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
          
           
            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;font-family:Century Gothic;font-size:16px"/> 
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      </div>
      
</div>
      </div>
      
      <!-- @if(($endd!=0))
         
           @if (($dat==0) && ($numeroquarto==0))
           
           
           @else
       
          	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

          <label align="left" style="font-family:Century Gothic;font-size:16px;font-weight: bold;">Total: {{ (($total + $precio_children + $precio_baby) )*$numero_dias }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       
           
           @endif
           
           
       
            <div  class=" pull-right">
            
            @guest
          
            <span class="pull-right">
             <a href="{{ route('login') }}" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
               </span>          
              @else
              <span class="pull-right">
                <button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 </span>                
             @endguest

            <div>
                @endif
          @endif-->
      
        <!--</form>-->
      
   
		</div>
		</div>
    </div> 
    <br>
     <!--********************************************************************************* 1 solo IMPAR + DUPLO PARALELO NO SUPERIOR  **************************************************************************-->
 

              
        <div class="col">
          
			<table class="table-hover">
				<tbody style="height: 50px; overflow:auto;">   
				
				<div class="container">
				
                     @for ($i=0; $i<$endd-1; $i++)
                     
   
         <div align="right">
            <thead>  
                 <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div> 
                             
                                
          
                              
                               @if(($dat[0] ->id==5) || ($dat[0]  ->id==6))
                               
                               
                                 
                                                <div class="row" >
                                        <div class="col-xs-6"  >
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                               &nbsp;&nbsp;{{$dat[0] ->name_room}}</a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-3">
                                        <i class="fa fa-bed" style='font-size:24px; color:#47775D;'></i>
                                        </div>
                                      
                                         
                                     </div>
                                
                                
                               @else
                               
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$dat[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                     
                                     </div>
                            
                                
                               @endif
                                 
                                
                                </div>
                                           
                                </h3>
                                <a style="font-family:Century Gothic;font-size:16px">
                              
                              
                                
                                 
                               
                               </a>
                               <div style="width:90%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                   
                                   {{$dat[0] ->bed1}},<i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i>
                                   <br>
                                 {{$dat[0] ->descripcion}}<br> {{$dat[0] ->include}}
                                                                  
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                          <h6 style="font-family:Century Gothic;font-size:16px"></h6>
                             
                               
                             
                               <input  type='hidden' value={{$dat[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ Session::get('person' )}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ Session::get('checkin')}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ Session::get('checkout')}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                  <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                  <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************-->
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->activity  }}&nbsp;€ 

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price}}&nbsp;€
                            @endif


                            <!--*************************************************************************************************-->

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->service}}&nbsp;€  
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price2}}&nbsp;€                        
                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->activity}}&nbsp;€
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price}}&nbsp;€ 

                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->service}}&nbsp;€  
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dat[0] ->price2}}&nbsp;€

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                            <!--  @guest
                          
                            <td class="" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</a></td>
                            
                            @else
                            
                            <td class=""><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</button></td>
                            
                        
                            @endguest-->
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr></thead>
				    @endfor
				    
     
				    
				</tbody>
				
			
				    
				
			</table>
			
			<br><br>
			<br>
			
			<!-- QUARTO EXTRA NO SUPERIOR -->
		
		@if(( $extra !=0 ))	
		
			<table align="left">
			    
			    <tr>
				        <td>
				            
				             <div align="right">
            <thead>  
                 <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div> 
                             
                                
          
                              
                               @if(($extra[0] ->id==5) || ($extra[0]  ->id==6))
                               
                               
                                 
                                                <div class="row" >
                                        <div class="col-xs-6"  >
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                               &nbsp;&nbsp;{{$extra[0] ->name_room}}</a>
                                        </div>
                                          <div class="col-xs-1">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-3">
                                        <i class="fa fa-bed" style='font-size:24px; color:#47775D;'></i>
                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <div class="col-lg-7">
                                         
                                        </div>
                                         <div align="right" class="col-xs-6">
                    
                         
                        <select  class="form-control search-slt" id="quarto" name="numeroquarto_individual" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                                 <option value="0">0 {{ __('messages.Quartos') }} </option>
                                <option value="1">1 {{ __('messages.Quartos') }} </option>
                              
                            
                               
                            </select>
                            
                                         </div>
                                     </div>
                                
                                
                               @else
                               
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$extra[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                        
                                        
                                           <div class="col-xl-8">
                                          &nbsp;&nbsp;
                                        </div>
                                         <div align="right" class="col-xs-6">
                    
                         
                        <select  class="form-control search-slt" id="numeroquarto_individual" name="numeroquarto_individual" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                                @for ($i=0; $i<=$contIndividual; $i++)
                          
                                <option value={{ $i }}>{{ $i }} {{ __('messages.Quartos') }} </option>
                           
                               @endfor
                             
                            
                               
                            </select>
                                     
                                     </div>
                            
                                
                               @endif
                                 
                                
                                </div>
                                           
                                </h3>
                                
                              
                               
                                @if(($extra[0]  ->id==5) || ($extra[0]  ->id==6))
                                
                        
                                <div style="font-family:Century Gothic;font-size:16px">{{$extra[0] ->bed1}}, <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i></div>
                                
                                @else
                                <!-- <div><input type="text"   name={{ 'cama'.(string)$i }} value={{ $data[$i] ->bed1 }} checked="true" > {{$data[$i] ->bed1}}<i class="" style='font-size:16px;color:#47775D;'></i>
                                ,&nbsp;<input type="text"  name={{ 'cama'.(string)$i }} value={{ $data[$i] ->bed2 }} > {{$data[$i] ->bed2}} <i class="" style='font-size:16px;color:#47775D;'></i>
                                </div>-->
                                
                                 <div style="font-family:Century Gothic;font-size:16px"><label > {{$extra[0] ->bed1}}</label></label><i class="" style='font-size:16px;color:#47775D;'></i>
                                ,&nbsp;<label> {{$extra[0] ->bed2}},<i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i></div>  </label>
                                </div>
                                
                                
                                
                                @endif
                               
                           
                               <div style="width:80%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                 {{$extra[0] ->descripcion}}<br> {{$extra[0] ->include}} 
          
                                 </p>
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                    
                               
                             
                               <input  type='hidden' value={{$extra[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ Session::get('person' )}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ Session::get('checkin')}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ Session::get('checkout')}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value="1"  name="endi"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
                            
                            <input  type='hidden' value={{$endi}}  name="uno"  style="  width:20px; 
                                  height:5px;"/> 
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************-->
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->activity  }}&nbsp;€ 
                            
                            <div style="display: none">
               
	                          {{ $precio_individual = number_format($extra[0]->activity, 0) }}
                            </div>

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->price}}&nbsp;€
                            
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = $extra[0] ->price  }}
                            </div>
                            @endif


                            <!--*************************************************************************************************-->

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->service}}&nbsp;€ 
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = number_format($extra[0]->service, 0) }}
                            </div>
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->price2}}&nbsp;€   
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = $extra[0] ->price2  }}
                            </div>
                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->activity}}&nbsp;€
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = number_format($extra[0]->activity, 0) }}
                            </div>
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->price}}&nbsp;€ 
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = $extra[0] ->price  }}
                            </div>

                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->service}}&nbsp;€  
                             <div style="display: none">
               
	                          {{ $precio_individual = number_format($extra[0]->service, 0) }}
                            </div>
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra[0] ->price2}}&nbsp;€
                            
                             <div style="display: none">
               
	                          {{ $precio_individual = $extra[0] ->price2  }}
                            </div>

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                            <!--  @guest
                          
                            <td class="" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</a></td>
                            
                            @else
                            
                            <td class=""><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</button></td>
                            
                        
                            @endguest-->
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr>
				        </td>
				        
				    </tr>
			</table>
	@endif
	
	<div align="right">
	    @guest
          
            <span class="pull-right">
             <a href="{{ route('login') }}" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
               </span>          
              @else
              <input  type='hidden' value={{ (($total+  $precio_extra + $precio_children + $precio_baby) )*$numero_dias }}  name='total' style=" width:20px; height:5px;"/>
              <span class="pull-right">
                  
              <button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 </span>                
             @endguest
	</div>
	
		
	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

                        

    
    @else
    
      
       <!--CHILDREN -->
       @if(($children!=0) && ($end!=0))
      
   
    <!-- <hr>--> <br>

          <div class="col" align= "left">
                     <div class="row">
                     <div class="col-sm">
                       <h3 align= "left"> <a   align="left" href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.NCrianças') }}: {{ $children}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp; <i class="fa fa-child icon" style='font-size:24px; color:#47775D;'></i></h3></a>
                    </div>
                 <div class="col-sm-2">
                
                </div>
            
                   <div class="col-sm-2" >
                    <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px;margin-top: 0.0em;"><p align="right" style="color:green;" >{{ $precio_children }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>  
                 </div>
                 
                </div>
            </div> 
         
                            
      
       @endif
     
      
         
         <!-- BABY-->
 
      @if(($baby!=0) && ( $end!=0)) 
      
        <!-- <hr>--><br>
   
        
      <div class="col" align= "left">
          
                     <div class="row">
                     <div class="col-sm">
                      
      <h3 align= "left"> <a  href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;"></span>&nbsp;&nbsp;&nbsp;&nbsp; {{ __('messages.NBebes') }}: {{ $baby}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp;  <i class="fas fa-baby" style='font-size:24px; color:#47775D;'></i>
                                </a>            
                                </h3>
                    </div>
                    
                    <div class="col-sm-2">
                    
                    </div>
                    
                   <div class="col-sm-2">
                   <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px"><p align="right" style="color:green;">{{ $precio_baby }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>
                 </div>

              
                 
                 
                 
                </div>
            </div> 
      

       @endif
       
       
    @endif
        
        <div class="row">
     
      <div class="col">

          <div class="float-right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                  
         </div>
          <div class="float-right" style="color:red;font-family:Century Gothic;font-size:16px" ><p>

                  <div style="display: none">
	                    {{ $total = 0 }}
                  </div>

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @for ($i = 0; $i <$endd-1; $i++)
          
         

            <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                  <div style="display: none">
                    @if (($T1 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total += number_format($dat[0] ->activity, 2)  }} € 

                            
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price }} €  
                    @endif
                  
                    <!--*************************************************************************************************-->

                    @if (($T2 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->service, 2)  }} € 

                    @endif

                    @if (($T2 =="OK") && ($numero_dias <= 3)) 

                     <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price2 }} €                        
                   @endif


                   <!--*************************************************************************************************-->

                   @if (($T3 =="OK") && ($numero_dias > 3))
 
                     <<td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->activity, 2)  }} € 
 
                   @endif

                   @if (($T3 =="OK") && ($numero_dias <= 3)) 

                   <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price }} €  

                  @endif


                 <!--*************************************************************************************************-->

                  @if (($T4 =="OK") && ($numero_dias > 3))

                  <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dat[0] ->service, 2)  }} € 

                  @endif

                 @if (($T4 =="OK") && ($numero_dias <= 3)) 

                 <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dat[0] ->price2 }} €    

                 @endif

              </div>
  
            @endfor
            
              <!--TOTAL-->
        

            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ $total + (($total)*$iva )}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total)*$iva }}  name='iva'  style=" width:20px; height:5px;"/>
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
             <input  type='hidden' value={{$precio_children}}  name='precio_children' />  
            <input  type='hidden' value={{$precio_baby}}  name='precio_baby'  />  
            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
           

            <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
       
                                  
             
           
            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;font-family:Century Gothic;font-size:16px"/> 
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      </div>
      
</div>
      </div>
      
       
      
       <!--CALCULO EXTRA-->
            @if ( (isset($extra)) ) 
            
           


             <!--*************************************************************************************************-->

             @if (($T1 =="OK") && ($numero_dias > 3))

              
             
             <div style="display: none">
                 Total: {{ (($total + number_format($extra[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = number_format($extra[0]->activity, 0)  }}
                  </div>
          
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + number_format($extra[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->activity, 2)) + (($total + number_format($extra_room2->activity, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->activity, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>
            
            <input  type='hidden' value={{ number_format($extra[0]->activity, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/>  

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
            
            


             @endif 

             @if (($T1 =="OK") && ($numero_dias <= 3))

               <div style="display: none">
                    Total: {{ (($total + $extra[0] ->price + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extra[0] ->price  }}
                  </div>
               
         
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + $extra[0] ->price + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{ $extra[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/>  

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 


             @endif


             <!--*************************************************************************************************-->

             @if (($T2 =="OK") && ($numero_dias > 3))

              
             
              <div style="display: none">
                  Total: {{ (($total + number_format($extra[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }} €<
	                    {{ $precio_extra = number_format($extra[0]->service, 0)  }}
                  </div>
          
          
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + number_format($extra[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->service, 2)) + (($total + number_format($extra_room2->service, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->service, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{ number_format($extra[0]->service, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @endif

            @if (($T2 =="OK") && ($numero_dias <= 3)) 

             
            
            
            <div style="display: none">
                  Total: {{ (($total + $extra[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extra[0] ->price2  }}
                  </div>
          
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + $extra[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price2) + (($total + $extra_room2 ->price2)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price2)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{ $extra[0] ->price2 }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

           @endif


             <!--*************************************************************************************************-->

           @if (($T3 =="OK") && ($numero_dias > 3))
 
               
       
             
            <div style="display: none">
                 Total: {{ (($total + number_format($extra[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = number_format($extra[0]->activity, 0)  }}
                  </div>
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + number_format($extra[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->activity, 2)) + (($total + number_format($extra_room2->activity, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->activity, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{ number_format($extra[0]->activity, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
 
           @endif

           @if (($T3 =="OK") && ($numero_dias <= 3)) 

              
               
          
             
            <div style="display: none">
                Total: {{ (($total + $extra[0] ->price + $precio_children + $precio_baby)*$numero_dias) }} €<br>  
	                    {{ $precio_extra = $extra[0] ->price  }}
                  </div>
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + $extra[0] ->price + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{$extra[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 



          @endif



          <!--*************************************************************************************************-->

          @if (($T4 =="OK") && ($numero_dias > 3))

             
                
            <div style="display: none">
             Total: {{ (($total + number_format($extra[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }} €<br> 
	                    {{ $precio_extra = number_format($extra[0]->service, 0) }}
                  </div>
            
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + number_format($extra[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->service, 2)) + (($total + number_format($extra_room2->service, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->service, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{number_format($extra[0]->service, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

         @endif

         @if (($T4 =="OK") && ($numero_dias <= 3)) 

             
                 
            <div style="display: none">
             Total: {{ (($total + $extra[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extra[0] ->price2  }}
                  </div>
            
            
            <!--<input  type='hidden' value={{  (($total + $extra_room2 ->price)) }}  name='total'  style=" width:20px; height:5px;"/> -->
            <input  type='hidden' value={{  (($total + $extra[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price2) + (($total + $extra_room2 ->price2)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price2)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $precio_individual}}  name='precio_individual'  />
            
            <input  type='hidden' value={{$extra[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

         @endif
          
        
    @endif 
  
    
                                  
        <div style="display:none">
            
            {{ $final= $endd-1}}
            
        </div>
      
       
       
          	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

           @else
           
              @if(($extra==0))
           <input type='hidden'  value="0"  name="uno"  style="width:20px height:5px;"/>
           
           @else
           <input type='hidden'  value="1"  name="uno"  style="width:20px height:5px;"/>
            <input type='hidden'  value={{ $precio_individual }}  name="precio_individual"  style="width:20px height:5px;"/>
             @endif
        
        
           @if ( (($numeroquarto ==1) && ($extra ==0)) ||  (($dat ==0) && ($extra==0)) )
          
           @else
                    
                    @if ((($dat ==0) && ($extra!=0)) )
         <label align="left" style="font-family:Century Gothic;font-size:16px;font-weight: bold;">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;
         Total: {{ (($total+  $precio_extra + $precio_children + $precio_baby) )*$numero_dias }} €</label>
         <input type='hidden'  value={{ $precio_extra }}  name="precio_extra"  style="width:20px height:5px;"/>
                    @else
                    
                    <!--  <label align="left" style="font-family:Century Gothic;font-size:16px;font-weight: bold;">Total: {{ (($total+  $precio_extra + $precio_children + $precio_baby) )*$numero_dias }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
     -->
                    
                    @endif
          
           @endif
       
           
       
           @endif
       @endif    
            <div  class=" pull-right">
            @if ( (isset($total)) )
            
            
        
    
            <div>
                
          
      </form>
            
            </div></div>
				    
				    </form>
				    	</div> 
				</body>
			</table>
			
			
			
		
			</div>
		</div>
    </div> 
 
 
        
  
@endif 
  
  
  
  
     @else
      <!--********************************************************************************* PARARLELO PARTE2 OTROS CUARTOS,  SUPERIOR IGUAL  **************************************************************************-->

 <div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <h4> <a style="color:#47775D; ;font-family:Century Gothic;font-weight:bold;font-size:23px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;({{ __('messages.de') }}  {{ $checkin }} {{ __('messages.a') }} {{ $checkout }}), <span style="color:black;font-family:Century Gothic;font-size:23px;font-weight:bold;">{{ __('messages.Persona') }}: {{ Session::get('person' )}}, {{ __('messages.NCrianças') }}: {{$children}}, {{ __('messages.NBebes') }}: {{$baby}}</span></a> </h4></div>
      
      @if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

         <p class="card-text" alig><div class="alert alert-danger alert-dismissible" align="center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong align="center" style=";font-family:Century Gothic;font-weight:bold;font-size:16px">{{ __('messages.tempo') }}</strong> 
</div>
</p>
    
    <div class="card">
  <div class="card-body">
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10/01/{{ __('messages.ano') }}&nbsp;&nbsp;{{ __('messages.a') }}&nbsp;&nbsp; 30/06/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 01/07/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 31/10/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 01/11/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 15/12/{{ __('messages.ano') }}</p>
    <p style=";font-family:Century Gothic;font-weight:bold;font-size:16px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 16/12/{{ __('messages.ano') }}&nbsp;&nbsp; {{ __('messages.a') }}&nbsp;&nbsp; 09/01/{{ __('messages.ano') }}+1</p>
  </div>
</div>
  </div>

    
    @else 
         
    
			@if(isset($dats))
			<p> </b></p>
			

    
        
         <div align="right">
               
        <div class="col">
			<table class="table-hover">
				<tbody style="height: 50px; overflow:auto;">    
     
        <form action="/selectpayment2" method="POST" >
     {{ csrf_field() }}
     
        @for ($i=0; $i<1; $i++)
    <thead>
        
      
        
          <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div> 
                             
                                
          
                              
                               @if(($dats[0] ->id==5) || ($dats[0]  ->id==6))
                               
                               
                                 
                                                <div class="row" >
                                        <div class="col-xs-6"  >
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                               &nbsp;&nbsp;{{$dats[0] ->name_room}}</a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-3">
                                        <i class="fa fa-bed" style='font-size:24px; color:#47775D;'></i>
                                        </div>
                                      
                                         
                                     </div>
                                
                                
                               @else
                               
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$dats[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                        
                                        &nbsp;&nbsp;&nbsp;
                                         <div class="col-lg-7">
                                         
                                        </div>
                                         <div align="right" class="col-xs-6">
                    
                         
                        <select  class="form-control search-slt" id="quarto" name="numeroquarto_duplos" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                               @for ($i=0; $i<=$contDuplos; $i++)
                          
                                <option value={{ $i }}>{{ $i }} {{ __('messages.Quartos') }} </option>
                           
                               @endfor
                            
                               
                            </select>
                            
                                         </div>
                                     
                                     </div>
                            
                                
                               @endif
                                 
                                
                                </div>
                                           
                                </h3>
                               
                              
                               <div style="width:80%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                 
                                  <input type="radio" id="cama1" name="cama" value={{$dats[0] ->bed1}} checked>
                                  {{$dats[0] ->bed1}},
                                   <input type="radio" id="cama2" name="cama" value={{$dats[0] ->bed2}}>
                                  {{$dats[0] ->bed2}},
                                  <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i> <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i>
                                  <br>
                                 {{$dats[0] ->descripcion}}<br> {{$dats[0] ->include}}
                                  <br>
                                  {{ __('messages.obs') }}: {{ __('messages.obs0') }}
                                 </p>
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                             
                               <input  type='hidden' value={{$dats[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ Session::get('person' )}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ Session::get('checkin')}}   name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ Session::get('checkout')}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                   <input  type='hidden' value={{ $end}}  name="endds"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
                            
                            
                            <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px; 
                                  height:5px;"/> 


            <input  type='hidden' value={{ $endis}}  name="endis"  style="  width:20px; 
                                  height:5px;"/> 
                                  
  
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************-->
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->activity  }}&nbsp;€ 
                            <div style="display: none">
               
	                          {{ $precio_duplos = number_format($dats[0]->activity, 0)  }}
                            </div>

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->price}}&nbsp;€
                            
                            <div style="display: none">
               
	                          {{ $precio_duplos = $dats[0] ->price  }}
                            </div>
                            @endif


                            <!--*************************************************************************************************-->

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->service}}&nbsp;€  
                               <div style="display: none">
               
	                          {{ $precio_duplos = number_format($dats[0]->service, 0)  }}
                            </div>
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->price2}}&nbsp;€ 
                            <div style="display: none">
               
	                          {{ $precio_duplos = $dats[0] ->price2  }}
                            </div>
                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->activity}}&nbsp;€
                            
                            <div style="display: none">
               
	                          {{ $precio_duplos = number_format($dats[0]->activity, 0)  }}
                            </div>
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->price}}&nbsp;€ 
                            
                            <div style="display: none">
               
	                          {{ $precio_duplos = $dats[0] ->price  }}
                            </div>

                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->service}}&nbsp;€  
                            
                              <div style="display: none">
               
	                          {{ $precio_duplos = number_format($dats[0]->service, 0)  }}
                            </div>
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$dats[0] ->price2}}&nbsp;€
                            <div style="display: none">
               
	                          {{ $precio_duplos = $dats[0] ->price2  }}
                            </div>

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                            <!--  @guest
                          
                            <td class="" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</a></td>
                            
                            @else
                            
                            <td class=""><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</button></td>
                            
                        
                            @endguest-->
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr></thead>
                        
            @endfor
           
				</tbody>
			</table>
      @endif
     
    

				</tbody>
     
			</table> 
			
			<!-- 	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

                        

    
    @else-->
			

    
      
       <!--CHILDREN 
        @if(($children!=0) && ($endds!=0))
      
    <br>

          <div class="col" align= "left">
                     <div class="row">
                     <div class="col-sm">
                       <h3 align= "left"> <a   align="left" href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.NCrianças') }}: {{ $children}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp; <i class="fa fa-child icon" style='font-size:24px; color:#47775D;'></i></h3></a>
                    </div>
                 <div class="col-sm-2">
                
                </div>
            
                   <div class="col-sm-2" >
                    <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px;margin-top: 0.0em;"><p align="right" style="color:green;" >{{ $precio_children }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>  
                 </div>
                 
                </div>
            </div> 
         
                            
      
       @endif
       
       
       -->
      
    
         <!-- BABY
           @if(($baby!=0) && ( $endds!=0)) 
      
        <br>
   
        
      <div class="col" align= "left">
          
                     <div class="row">
                     <div class="col-sm">
                      
      <h3 align= "left"> <a  href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;"></span>&nbsp;&nbsp;&nbsp;&nbsp; {{ __('messages.NBebes') }}: {{ $baby}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp;  <i class="fas fa-baby" style='font-size:24px; color:#47775D;'></i>
                                </a>            
                                </h3>
                    </div>
                    
                    <div class="col-sm-2">
                    
                    </div>
                    
                   <div class="col-sm-2">
                   <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px"><p align="right" style="color:green;">{{ $precio_baby }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>
                 </div>

              
                 
                 
                 
                </div>
            </div> 
      

       @endif
       
       
    @endif
         
         -->




      <div class="row">
     
      <div class="col">

          <div class="float-right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                  
         </div>
          <div class="float-right" style="color:red;font-family:Century Gothic;font-size:16px" ><p>

                  <div style="display: none">
	                    {{ $total = 0 }}
                  </div>

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @for ($i = 0; $i <$endds; $i++)
          
         

            <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                  <div style="display: none">
                    @if (($T1 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total += number_format($dats[0] ->activity, 2)  }} € 

                            
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dats[0] ->price }} €  
                    @endif
                  
                    <!--*************************************************************************************************-->

                    @if (($T2 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dats[0] ->service, 2)  }} € 

                    @endif

                    @if (($T2 =="OK") && ($numero_dias <= 3)) 

                     <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dats[0] ->price2 }} €                        
                   @endif


                   <!--*************************************************************************************************-->

                   @if (($T3 =="OK") && ($numero_dias > 3))
 
                     <<td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dats[0] ->activity, 2)  }} € 
 
                   @endif

                   @if (($T3 =="OK") && ($numero_dias <= 3)) 

                   <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dats[0] ->price }} €  

                  @endif


                 <!--*************************************************************************************************-->

                  @if (($T4 =="OK") && ($numero_dias > 3))

                  <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($dats[0] ->service, 2)  }} € 

                  @endif

                 @if (($T4 =="OK") && ($numero_dias <= 3)) 

                 <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$dats[0] ->price2 }} €    

                 @endif

              </div>
  
            @endfor
        

           <!-- TOTAL 1/2-->
        

            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ $total + (($total)*$iva )}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total)*$iva }}  name='iva'  style=" width:20px; height:5px;"/>
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
             <input  type='hidden' value={{$precio_children}}  name='precio_children' />  
            <input  type='hidden' value={{$precio_baby}}  name='precio_baby'  />  
            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
            
            <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px;height:5px;"/> 
            <input  type='hidden' value={{$precio_duplos}}  name='precio_duplos'  />
              
    
                                 
           <input  type='hidden' value={{$endds}}  name="endds"  style="width:20px;height:5px;"/> 
            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;font-family:Century Gothic;font-size:16px"/> 
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
     
      </div>
      
</div>
      </div>
       <!-- @if ($endds!=0)
      
          	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

           @else
          
           
           @endif
       @endif    
            <div  class=" pull-right">
            @if ( ($total == 0) or (!isset($total)) )

            @else
            @guest
          
            <span class="pull-right">
             <a href="{{ route('login') }}" align="right" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">
                 
                 {{ __('messages.Reserva') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
               </span>          
              @else
              <span class="pull-right">
                <button type="submit" align="right" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">
                    
                    {{ __('messages.Reserva') }}</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 </span>                
             @endguest
          
         </div>
         
         @endif-->
       
      <!--</form>-->
   
		</div>
		</div>
    </div> 
    <br>
     <!--*********************************************************************************  INDIVIDUAL SUPERIOR,  **************************************************************************-->
 

               <br><br>
               <br>
               
               
  @if ($contIndividuals==0)
  
  @else
        <div class="col">
			<table class="table-hover">
				<tbody style="height: 50px; overflow:auto;">  
			
                  
     
                     @for ($i=0; $i<1; $i++)
                     
   
         <div align="right">
            <thead>  
                 <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div> 
                             
                                
          
                              
                               @if(($extras[0] ->id==5) || ($extras[0]  ->id==6))
                               
                               
                                 
                                                <div class="row" >
                                        <div class="col-xs-6"  >
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                               &nbsp;&nbsp;{{$extras[0] ->name_room}}</a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                        
                                        <div class="col-xs-3">
                                        <i class="fa fa-bed" style='font-size:24px; color:#47775D;'></i>
                                        </div>
                                     &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;   &nbsp;&nbsp;  &nbsp;
                                         <div class="col-lg-6">
                                         
                                        </div>
                                         <div align="right" class="col-xs-6">
                    
                         
                        <select  class="form-control search-slt" id="quarto" name="numeroquarto_individuals" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                                @for ($i=0; $i<=$contIndividuals; $i++)
                          
                                <option value={{ $i }}>{{ $i }} {{ __('messages.Quartos') }} </option>
                           
                               @endfor
                               
                            </select>
                            
                                         </div>
                                         
                                     </div>
                                
                                
                               @else
                               
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$extras[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                    
                                         <div class="col-lg-7">
                                         
                                        </div>
                                         <div align="right" class="col-xs-6">
                    
                         
                        <select  class="form-control search-slt" id="quarto" name="numeroquarto_individuals" style="font-weight:bold;font-family:Century Gothic;height: 32px !important" >
                   
                              @for ($i=0; $i<=$contIndividuals; $i++)
                          
                                <option value={{ $i }}>{{ $i }} {{ __('messages.Quartos') }} </option>
                           
                               @endfor
                               
                            </select>
                            
                                         </div>
                                     </div>
                            
                                
                               @endif
                                 
                                
                                </div>
                                           
                                </h3>
                                <a style="font-family:Century Gothic;font-size:16px">
                              
                               
                                @if(($extras[0]  ->id==5) || ($extras[0]  ->id==6))
                                
                        
                                <div>{{$extras[0] ->bed1}}, <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i> <i class="fa fa-user" aria-hidden="true" style='font-size:24px; color:#47775D;'></i></div>
                                
                                @else
                                <!-- <div><input type="text"   name={{ 'cama'.(string)$i }} value={{ $data[$i] ->bed1 }} checked="true" > {{$data[$i] ->bed1}}<i class="" style='font-size:16px;color:#47775D;'></i>
                                ,&nbsp;<input type="text"  name={{ 'cama'.(string)$i }} value={{ $data[$i] ->bed2 }} > {{$data[$i] ->bed2}} <i class="" style='font-size:16px;color:#47775D;'></i>
                                </div>-->
                                
                                 <div><label > {{$extras[0] ->bed1}}</label></label><i class="" style='font-size:16px;color:#47775D;'></i>
                                ,&nbsp;<label> {{$extras[0] ->bed2}} </label><i class="" style='font-size:16px;color:#47775D;'></i>
                                </div>
                                
                                
                                
                                @endif
                               
                               </a>
                               <div style="width:80%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                 {{$extras[0] ->descripcion}}<br> {{$extras[0] ->include}}
                                 <br>
                                  {{ __('messages.obs') }}: {{ __('messages.obs0') }}
                                 </p>
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                          <h6 style="font-family:Century Gothic;font-size:16px"></h6>
                             
                               
                             
                               <input  type='hidden' value={{$extras[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ Session::get('person' )}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ Session::get('checkin')}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ Session::get('checkout')}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                   <input  type='hidden' value={{ $end}}  name="endis"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
                            
                            
                            <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px; 
                                  height:5px;"/> 


     <input  type='hidden' value={{ $endds}}  name="endds"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endis}}  name="endis"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                                  
           <input  type='hidden' value="1"  name="uno"  style="  width:20px; 
                                  height:5px;"/> 
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************-->
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->activity  }}&nbsp;€ 
                            
                             <div style="display: none">
               
	                         {{ $precio_individuals = number_format($extras[0]->activity, 0)  }}
                             </div>

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price}}&nbsp;€
                             <div style="display: none">
               
	                         {{ $precio_individuals = $extras[0] ->price  }}
                             </div>
                            @endif


                            <!--*************************************************************************************************-->

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->service}}&nbsp;€  
                            
                            <div style="display: none">
               
	                         {{ $precio_individuals = number_format($extras[0]->service, 0)  }}
                             </div>
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price2}}&nbsp;€ 
                             <div style="display: none">
               
	                         {{ $precio_individuals = $extras[0] ->price2  }}
                             </div>
                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->activity}}&nbsp;€
                            
                            <div style="display: none">
               
	                         {{ $precio_individuals = number_format($extras[0]->activity, 0)  }}
                             </div>
                             
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price}}&nbsp;€ 
                            
                             <div style="display: none">
               
	                         {{ $precio_individuals = $extras[0] ->price  }}
                             </div>

                            @endif



                            <!--*************************************************************************************************-->
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->service}}&nbsp;€  
                            
                            <div style="display: none">
               
	                         {{ $precio_individuals = number_format($extras[0]->service, 0)  }}
                             </div>
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price2}}&nbsp;€
                            <div style="display: none">
               
	                         {{ $precio_individuals = $extras[0] ->price2  }}
                             </div>

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                            <!--  @guest
                          
                            <td class="" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</a></td>
                            
                            @else
                            
                            <td class=""><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</button></td>
                            
                        
                            @endguest-->
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr></thead>
				    @endfor
				    
     
				    
				</tbody>
				
			
				    
				
			</table>
			
			
			
			<!-- QUARTO EXTRA -->
			
			  <!-- <table align="left">
			    
			    <tr>
				        <td>
				            
				             <div align="right">
            <thead>  
                 <tr class="no-hover">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
                             <td  style="font-weight:bold;font-family:Century Gothic;"></td>
                           
                                <td class="text-left"><h3>
                               <div> 
                             
                                
          
                              
                               @if(($extras[0] ->id==5) || ($extras[0]  ->id==6))
                               
                               
                                 
                                                <div class="row" >
                                        <div class="col-xs-6"  >
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                               &nbsp;&nbsp;{{$extras[0] ->name_room}}</a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-3">
                                        <i class="fa fa-bed" style='font-size:24px; color:#47775D;'></i>
                                        </div>
                                      
                                         
                                     </div>
                                
                                
                               @else
                               
                                 
                                                <div class="row">
                                        <div class="col-xs-6">
                                        <a  align="left" href="{{ route('hotels')}}" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
                                        &nbsp;&nbsp;{{$extras[0] ->name_room}} </a>
                                        </div>
                                          <div class="col-xs-6">
                                          &nbsp;&nbsp;
                                        </div>
                                      
                                        <div class="col-xs-6">
                                        <img  src="/user/img/bed.png" style='font-size:24px; color:#47775D;' width="32" height="32">
                                        </div>
                                     
                                     </div>
                            
                                
                               @endif
                                 
                                
                                </div>
                                           
                                </h3>
                                
                              
                               
                                @if(($extras[0]  ->id==5) || ($extras[0]  ->id==6))
                                
                        
                                <div style="font-family:Century Gothic;font-size:16px">{{$extras[0] ->bed1}} <i  style='font-size:16px;color:#47775D;'></i></div>
                                
                                @else
                             
                                
                                 <div style="font-family:Century Gothic;font-size:16px"><label > {{$extras[0] ->bed1}}</label></label><i class="" style='font-size:16px;color:#47775D;'></i>
                                ,&nbsp;<label> {{$extras[0] ->bed2}} </label><i class="" style='font-size:16px;color:#47775D;'></i>
                                </div>
                                
                                
                                
                                @endif
                               
                           
                               <div style="width:90%;">  <p align ="justify" style="font-family:Century Gothic;font-size:16px">
                                 {{$extras[0] ->descripcion}}<br> {{$extras[0] ->include}} </p>
                                 <p style="font-family:Century Gothic;font-size:16px"></p>
                                 </div>
                    
                               
                             
                               <input  type='hidden' value={{$extras[0]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{$persona}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ $checkin}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ $checkout}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                                  
                            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
                            
                            <input  type='hidden' value={{$superior}}  name='superior'  /> 
           
                            </td>
                         
                            
                            


                           <!--*************************************************************************************************
                            @if (($T1 =="OK") && ($numero_dias > 3))
                        
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->activity  }}&nbsp;€ 

                             @endif 
                            @if (($T1 =="OK") && ($numero_dias <= 3))
                         
                            <td class="" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price}}&nbsp;€
                            @endif


                            <!--*************************************************************************************************

                            @if (($T2 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->service}}&nbsp;€  
                            
                            @endif

                            @if (($T2 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price2}}&nbsp;€                        
                            @endif



                            <!--*************************************************************************************************-
                            @if (($T3 =="OK") && ($numero_dias > 3))
                             
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->activity}}&nbsp;€
                             
                            @endif
                            @if (($T3 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price}}&nbsp;€ 

                            @endif



                            <!--*************************************************************************************************
                            @if (($T4 =="OK") && ($numero_dias > 3))

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->service}}&nbsp;€  
                            
                            @endif

                            @if (($T4 =="OK") && ($numero_dias <= 3)) 

                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extras[0] ->price2}}&nbsp;€

                            @endif
                            
                      
                     

                            <br><br>
                        
                           
                           
                             
                            </td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            
                           @guest
                          
                            <td class="" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</a></td>
                            
                            @else
                            
                            <td class=""><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;margin-top: -1em;">{{ __('messages.Reserva') }}</button></td>
                            
                        
                            @endguest
                          
                            
                            <td>&nbsp;&nbsp;&nbsp;</td>

                        </tr>
				        </td>
				        
				    </tr>
			</table>-->
			
	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

                        

    
    @else
    
      
       <!--CHILDREN -->
       @if(($children!=0) && ($endis!=0))
      
   
    <!-- <hr>--> <br>

          <div class="col" align= "left">
                     <div class="row">
                     <div class="col-sm">
                       <h3 align= "left"> <a   align="left" href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.NCrianças') }}: {{ $children}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp; <i class="fa fa-child icon" style='font-size:24px; color:#47775D;'></i></h3></a>
                    </div>
                 <div class="col-sm-2">
                
                </div>
            
                   <div class="col-sm-2" >
                    <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px;margin-top: 0.0em;"><p align="right" style="color:green;" >{{ $precio_children }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>  
                 </div>
                 
                </div>
            </div> 
         
                            
      
       @endif
     
      
         
         <!-- BABY-->
 
      @if(($baby!=0) && ( $endis!=0)) 
      
        <!-- <hr>--><br>
   
        
      <div class="col" align= "left">
          
                     <div class="row">
                     <div class="col-sm">
                      
      <h3 align= "left"> <a  href="#" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">
         <span style="color:black;"></span>&nbsp;&nbsp;&nbsp;&nbsp; {{ __('messages.NBebes') }}: {{ $baby}}  &nbsp; &nbsp;  <i class="" style='font-size:24px; color:#47775D;'></i>&nbsp;  <i class="fas fa-baby" style='font-size:24px; color:#47775D;'></i>
                                </a>            
                                </h3>
                    </div>
                    
                    <div class="col-sm-2">
                    
                    </div>
                    
                   <div class="col-sm-2">
                   <h6 align="right" style="color:black; font-family:Century Gothic;font-size:16px"><p align="right" style="color:green;">{{ $precio_baby }} €&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></h6>
                 </div>

              
                 
                 
                 
                </div>
            </div> 
      

       @endif
       
       
    @endif
        
        <div class="row">
     
      <div class="col">

          <div class="float-right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                  
         </div>
          <div class="float-right" style="color:red;font-family:Century Gothic;font-size:16px" ><p>

                  <div style="display: none">
	                    {{ $total = 0 }}
                  </div>

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @for ($i = 0; $i <$endis; $i++)
          
         

            <!-- NUEVO -->
                 
                    <!--*************************************************************************************************-->
                  <div style="display: none">
                    @if (($T1 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total += number_format($extras[0] ->activity, 2)  }} € 

                            
                    @endif 

                    @if (($T1 =="OK") && ($numero_dias <= 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$extras[0] ->price }} €  
                    @endif
                  
                    <!--*************************************************************************************************-->

                    @if (($T2 =="OK") && ($numero_dias > 3))

                      <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($extras[0] ->service, 2)  }} € 

                    @endif

                    @if (($T2 =="OK") && ($numero_dias <= 3)) 

                     <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$extras[0] ->price2 }} €                        
                   @endif


                   <!--*************************************************************************************************-->

                   @if (($T3 =="OK") && ($numero_dias > 3))
 
                     <<td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($extras[0] ->activity, 2)  }} € 
 
                   @endif

                   @if (($T3 =="OK") && ($numero_dias <= 3)) 

                   <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$extras[0] ->price }} €  

                  @endif


                 <!--*************************************************************************************************-->

                  @if (($T4 =="OK") && ($numero_dias > 3))

                  <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=number_format($extras[0] ->service, 2)  }} € 

                  @endif

                 @if (($T4 =="OK") && ($numero_dias <= 3)) 

                 <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{ $total +=$extras[0] ->price2 }} €    

                 @endif

              </div>
  
            @endfor
            
              <!--TOTAL-->
        

            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ $total + (($total)*$iva )}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total)*$iva }}  name='iva'  style=" width:20px; height:5px;"/>
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
             <input  type='hidden' value={{$precio_children}}  name='precio_children' />  
            <input  type='hidden' value={{$precio_baby}}  name='precio_baby'  />  
            <input  type='hidden' value={{$numero_dias}}  name='numero_dias'  /> 
           

            <input  type='hidden' value={{ $endd}}  name="endd"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endi}}  name="endi"  style="  width:20px; 
                                  height:5px;"/> 


     <input  type='hidden' value={{ $endds}}  name="endds"  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $endis}}  name="endis"  style="  width:20px; 
                                  height:5px;"/> 
          <input  type='hidden' value={{ $precio_individuals}}  name='precio_individuals'  />       
                                  
           <input  type='hidden' value="1"  name="uno"  style="  width:20px; 
                                  height:5px;"/> 
           
            <input  type='hidden' value={{ (($total + $precio_children + $precio_baby )*$numero_dias ) }}  name='total'  style=" width:20px; height:5px;font-family:Century Gothic;font-size:16px"/> 
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      </div>
      
</div>
      </div>
      <div align="right">
          
             @guest
          
            <span class="pull-right">
             <a href="{{ route('login') }}" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
               </span>          
              @else
              <span class="pull-right">
                <button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px;">{{ __('messages.Reserva') }}</button>&nbsp;&nbsp;&nbsp;&nbsp;
                 </span>                
             @endguest
      </div>
      
      
       <!--CALCULO EXTRA
            @if ( (isset($extra)) ) 
            
            


             <!--*************************************************************************************************

             @if (($T1 =="OK") && ($numero_dias > 3))

              
             
             <div style="display: none">
                 Total: {{ (($total + number_format($extras[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = number_format($extras[0]->activity, 0)  }}
                  </div>
          
            
            
          
            <input  type='hidden' value={{  (($total + number_format($extras[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->activity, 2)) + (($total + number_format($extra_room2->activity, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->activity, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>
            
            <input  type='hidden' value={{ number_format($extras[0]->activity, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/>  

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
            
            


             @endif 

             @if (($T1 =="OK") && ($numero_dias <= 3))

               <div style="display: none">
                    Total: {{ (($total + $extras[0] ->price + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extras[0] ->price  }}
                  </div>
               
         
            
            
          
            <input  type='hidden' value={{  (($total + $extras[0] ->price + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{ $extras[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/>  

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 


             @endif


             <!--*************************************************************************************************

             @if (($T2 =="OK") && ($numero_dias > 3))

              
             
              <div style="display: none">
                  Total: {{ (($total + number_format($extras[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }} €<
	                    {{ $precio_extra = number_format($extras[0]->service, 0)  }}
                  </div>
          
          
            
            
            
            <input  type='hidden' value={{  (($total + number_format($extras[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->service, 2)) + (($total + number_format($extra_room2->service, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->service, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{ number_format($extras[0]->service, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @endif

            @if (($T2 =="OK") && ($numero_dias <= 3)) 

             
            
            
            <div style="display: none">
                  Total: {{ (($total + $extras[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extras[0] ->price2  }}
                  </div>
          
            
            
           
            <input  type='hidden' value={{  (($total + $extras[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price2) + (($total + $extra_room2 ->price2)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price2)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{ $extras[0] ->price2 }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

           @endif


             <!--*************************************************************************************************

           @if (($T3 =="OK") && ($numero_dias > 3))
 
               
       
             
            <div style="display: none">
                 Total: {{ (($total + number_format($extras[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = number_format($extras[0]->activity, 0)  }}
                  </div>
            
           
            <input  type='hidden' value={{  (($total + number_format($extras[0]->activity, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->activity, 2)) + (($total + number_format($extra_room2->activity, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->activity, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{ number_format($extras[0]->activity, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
 
           @endif

           @if (($T3 =="OK") && ($numero_dias <= 3)) 

              
               
          
             
            <div style="display: none">
                Total: {{ (($total + $extras[0] ->price + $precio_children + $precio_baby)*$numero_dias) }} €<br>  
	                    {{ $precio_extra = $extras[0] ->price  }}
                  </div>
            

            <input  type='hidden' value={{  (($total + $extra[0] ->price + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            
            <input  type='hidden' value={{$extras[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 



          @endif



          <!--*************************************************************************************************

          @if (($T4 =="OK") && ($numero_dias > 3))

             
                
            <div style="display: none">
             Total: {{ (($total + number_format($extras[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }} €<br> 
	                    {{ $precio_extra = number_format($extras[0]->service, 0) }}
                  </div>
            
            
            
            <input  type='hidden' value={{  (($total + number_format($extra[0]->service, 0) + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + number_format($extra_room2->service, 2)) + (($total + number_format($extra_room2->service, 2))*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + number_format($extra_room2->service, 2))*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{number_format($extras[0]->service, 0) }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

         @endif

         @if (($T4 =="OK") && ($numero_dias <= 3)) 

             
                 
            <div style="display: none">
             Total: {{ (($total + $extras[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }} €
	                    {{ $precio_extra = $extras[0] ->price2  }}
                  </div>
            
            
    
            <input  type='hidden' value={{  (($total + $extra[0] ->price2 + $precio_children + $precio_baby)*$numero_dias) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price2) + (($total + $extra_room2 ->price2)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price2)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/> 
            
            <input  type='hidden' value={{$extras[0] ->price }}  name='precio_nuevo'  style=" width:20px; height:5px;"/> 

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

         @endif
          
        
    @endif  -->
    
   
        @if($endis!=0)
       
          	@if (($T0 =="OK") && ($T1=" ")&& ($T2=" ")&& ($T3=" ")&& ($T4=" ") ) 

           @else
           
       <label align="right" style="font-family:Century Gothic;font-size:16px;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <!--Total:{{ (($total + $precio_children + $precio_baby) )*$numero_dias }} €</label>-->
           @endif
       @endif    
            <div class="col" style="width:0%;">

             
        
                
              
          
        
           
         
        
            </div> 
            
    
     
      </form>
            
            </div></div>
				    
				    </form>
				</body>
			</table>
			
			</div>
		</div>
    </div> 
 
 
        
  @endif
      

 @endif
 @endif
      <br><br><br>
    
<br><br><br>

@endsection
@section('footer')
@endsection


