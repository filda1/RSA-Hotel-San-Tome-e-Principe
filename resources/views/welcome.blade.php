@extends('layouts/app1')
<link rel="shortcut icon" href="/user/img/rsa.png" sizes="64x64">


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
        top: -114px;
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


input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    * {
  box-sizing: border-box;
}

body1 {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-7 {width: 10%; height: 18px; background-color: #00bc;}
.bar-6 {width: 35%; height: 18px; background-color: #FF00FF;}
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>


@include('layouts/head')

@section('head')


@section('main-content')

 <!-- <div class="container">
The Modal 
 
 <div class="modal fade seminor-login-modal"  id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

     
        <div class="modal-body seminor-login-modal-body">

        <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
          </button>
          <br>
         <h4 class="modal-title text-center"> Descrição da Roça de Santo António Ecolodge</h4>
          


    <form class="seminor-login-form">
      <div class="form-group">
        
       
      </div>
      <div class="form-group">
        <input type='hidden' class="form-control" >
      
      </div>
      <div class="form-group">
        <label class="container-checkbox">
        O Roça Santo António Ecolodge, com 19 quartos, é o local perfeito de onde partir para conhecer toda a maravilhosa ilha de São Tomé. Está a 14 km da capital, a cidade de São Tomé, a cerca de 25 km da antiga Roça Rio do Ouro (atualmente conhecida por Agostinho Neto), a 1 km da antiga Roça de Água Izé, as duas maiores roças do país e a cerca de 60 km do extremo sul da ilha, com as melhores e mais virgens praias de São Tomé.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Ilha de São Tomé é uma das ilhas que já foi um dos maiores produtores de cacau do mundo. Atualmente, São Tomé e Príncipe continua a ser produtor de um dos sete cacaus finos, um cacau conhecido pela sua qualidade de excelência.
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          O nosso Ecolodge irá permitir-lhe conhecer de perto uma plantação de cacau ainda em atividade e é no meio dela que ficam as nossas instalações, numa propriedade com 72 hectares. Venha conhecer de perto a lide do cacau, venha participar dela e ficar a conhecer tudo de este delicioso fruto. Ou então venha simplesmente descansar na nossa piscina, conhecer as praias próximas de nós e as tantas outras roças antigas que nos rodeiam e que nos narram a história deste país.
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         O recinto onde está o hotel está ornamentado com diferentes espécies das flores são-tomenses com cores vibrantes e formatos inéditos e inúmeras árvores dos mais diversificados frutos tropicais, que criam uma atmosfera de tranquilidade e relaxamento, em harmonia com a floresta e a plantação envolventes. 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Estaremos aqui para o receber e para lhe proporcionar a melhor experiência na nossa ilha.
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         Até já...
        </label>
        <hr>
           
  </div>
             
      </form>
        </div>
      </div>
    </div>
  </div>
  </div>-->
 

  <!-- Icons Grid -->              
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex" >
              <a class="m-auto" href="{{ route('environment') }}"><i class="fas fa-globe-africa" style="color:#47775D;"></i></a>
            </div>
            <!-- Galeria, dentro de modal 
            <h3 ><a data-toggle="modal" data-target="#product_view">  {{ __('messages.TituloPrincipal1') }}</a></h3>-->  
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal1') }}</a></h3>

         
            
            <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
     
       <!-- Galeria, dentro de modal -->   
        <div class="row justify-content-center">
    <div class="col-md-8">

    <!-- Galeria, dentro de modal -->  
        <div class="row">
            <a href="{{url('/storage/'. $posts[19]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[19]->picturehotel )}}" class="img-fluid">
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
            
            
            <!-- Galeria, dentro de modal 
            <h3 ><a data-toggle="modal" data-target="#product_view">  {{ __('messages.TituloPrincipal1') }}</a></h3>-->  
            <h3>
            <a href="{{ route('services') }}"  style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal2') }}</a>
            </h3>
          
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle" style="color:#47775D;"></i></a>
            </div>
            <h3><a href="{{ route('hotels') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal3') }}</a></h3>
            <!--
              <a class="m-auto" href="{{ route('hotels') }}"><i class="icon-check m-auto text-primary"></i></a>
              
               <p class="lead mb-0"><a href="{{ route('hotels') }}"  style="color:black;">  {{ __('messages.CuerpoPrincipal3') }}</a></p> -->
            
          </div>
        </div>
      </div>
    </div>
  </section>

 

<!--QUEM SOMOS-->
 <section class="testimonials text-center " style="">
    <div class="container" >
      <h2 class="mb-5" style="color:#47775D;font-weight:bold;">{{ __('messages.Quem') }}</h2>
      <div class="row" >
           
            <p align = "justify"   style="font-family:Century Gothic;font-size:18px;">
            {{ __('messages.Or') }}
          </p>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="{{url('/storage/'. $posts[63]->picturehotel )}}"
     
        alt="First slide">
    </div>
    <div class="carousel-item">
    <img src="{{url('/storage/'. $posts[64]->picturehotel )}}"
     
        alt="Second slide">
    </div>
    <div class="carousel-item">
    <img  src="{{url('/storage/'. $posts[65]->picturehotel )}}"
        alt="Third slide">
    </div>
    <div class="carousel-item">
    <img  src="{{url('/storage/'. $posts[66]->picturehotel )}}"
        alt="Third slide">
    </div>
    <br>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <br>
</div>
<br>

<p align = "justify"  style="font-family:Century Gothic;font-size:18px" >
{{ __('messages.Or1') }}.

          </p>
          <p align = "justify"   style="font-family:Century Gothic;font-size:18px">
          {{ __('messages.Or2') }}
          </p>
            
        </div>
      </div>
    </div>
  </section>
  
  
<div class="container"></div>
  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Testimonio') }}</h2>
      <br><br><br><br><br>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <!-- <img class="img-fluid rounded-circle mb-3" src="user/img/testimonials-1.jpg" alt=""> -->
          <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px;font-style:italic;">João</p>
            <h5></h5>
            <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px">{{ __('messages.Testimonio1') }}</p>
           
          </div>
          <br>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <!-- <img class="img-fluid rounded-circle mb-3" src="user/img/testimonials-1.jpg" alt=""> -->
          <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px;font-style:italic;">Denise</p>
            <h5></h5>
            <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px">{{ __('messages.Testimonio2') }}</p>
            
          </div>
          
             <br>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <!-- <img class="img-fluid rounded-circle mb-3" src="user/img/testimonials-1.jpg" alt=""> -->
          <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px;font-style:italic;">Rui</p>
            <h5></h5>
            <p class="font-weight-light mb-0" style="font-family:Century Gothic;font-size:18px">{{ __('messages.Testimonio3') }}</p>
            
          </div>
             <br>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
          <i class="fa fa-star" aria-hidden="true" ></i>
          
        </div>
        
      </div>
    </div>
     
    
  </section>
  
<div class="mb-5" align="center"> <h1><a href="{{ route('validation') }}"  style="color:#47775D;font-weight:bold;font-family:Century Gothic;font-size:27px">
{{ __('messages.experiencia') }}</a></h1>
    </div>
    
    
 <br><br><br><br>
 
  
  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="col">
      <div class="row">
        <div class="col-xl-9 mx-auto">
        <br>
          <h2 class="mb-4" style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;margin-top: 50px;">{{ __('messages.TituloFooter') }}</h2>
        </div>
        <div class="col-md-10  mx-auto">

        <div class="container">
  
</div>
<section>

   <!-- BUSCADOR -->
   
   @if (app()->getLocale()=="pt")
<section class="search-sec" height="70" style="margin-top: 160px;">
    <div class="container">
        
     <form action="/searchpt" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                
                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check In') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate23" type='date'  class="form-control search-slt" placeholder="Check-in" name='checkin' required="required" data-validation-required-message="Please enter a date."  style="font-weight:bold;font-family:Century Gothic;">
                        </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check Out') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate24" type='date'  class="form-control search-slt" placeholder="Check-out"  name='checkout' required="required" data-validation-required-message="Please enter a date." style="font-weight:bold;font-family:Century Gothic;"/>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Adults') }}</label>
                        <i class="fa fa-user icon"></i><label>&nbsp;&nbsp;</label>
                        <select  required id="person" class="form-control search-slt" id="exampleFormControlSelect1"  name='person' style="font-weight:bold;font-family:Century Gothic;" 
                           >
                                <option value="" >{{ __('messages.Persona') }}</option>
                                  
                                   
                                <option value="1" >1</option>
                                <option value="2" >2 </option>
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
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Children') }}</label>
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
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Infants') }}</label>
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
                        
                        <!--  <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Quartos') }}</label>
                        <i class="fa fa-bed icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="quarto" name="quarto" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="1">{{ __('messages.duplosi') }}</option>
                                <option value="2" >{{ __('messages.TodososDuplos') }}</option>
                                
                                <option value="4">{{ __('messages.SoIndividual') }}</option>
                                <option value="5">{{ __('messages.SoDuplo') }}</option>
                                <option value="6">{{ __('messages.So Duplo Superior') }}</option>
                                
                               
                            </select>
                        </div>-->
                        <div  class="col-lg-2 col-md-4 col-sm-1 p-0" style="margin-top: 6px;">
                        <label>&nbsp;</label>
                            <button type="submit" class="btn btn-danger wrn-btn"><i class='fas fa-search' style='font-size:16px' onclick="myFunction()" ></i></button><div></div>
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
    </div>
</section>




@else

<section class="search-sec" height="70" style="margin-top: 160px;">
    <div class="container">
        
     <form action="/searchpt" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                   
                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check In') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate23" type='date'  class="form-control search-slt" placeholder="Check-in" name='checkin' required="required" data-validation-required-message="Please enter a date."  style="font-weight:bold;font-family:Century Gothic;">
                        </div>

                    <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                    <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Check Out') }}</label>
                    <i class="fa fa-calendar-alt"></i><label>&nbsp;&nbsp;</label>
                            <input id="myDate24" type='date'  class="form-control search-slt" placeholder="Check-out"  name='checkout' required="required" data-validation-required-message="Please enter a date." style="font-weight:bold;font-family:Century Gothic;"/>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Adults') }}</label>
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
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Children') }}</label>
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
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Infants') }}</label>
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
                        
                        <!--  <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Quartos') }}</label>
                        <i class="fa fa-bed icon"></i><label>&nbsp;&nbsp;</label>
                        <select class="form-control search-slt" id="quarto" name="quarto" style="font-weight:bold;font-family:Century Gothic;" >
                   
                                <option value="1">{{ __('messages.duplosi') }}</option>
                                <option value="2" >{{ __('messages.TodososDuplos') }}</option>
                                
                                <option value="4">{{ __('messages.SoIndividual') }}</option>
                                <option value="5">{{ __('messages.SoDuplo') }}</option>
                                <option value="6">{{ __('messages.So Duplo Superior') }}</option>
                                
                               
                            </select>
                        </div>-->
                        
                        <!--   <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                        <label style="color:#FFFFFF;font-weight:bold;font-family:Century Gothic;" >{{ __('messages.Quartos') }}</label>
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
                      
                        
                        
                        
                        <div class="col-lg-2 col-md-3 col-sm-1 p-1" style="margin-top: 6px;">
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
    </div>
</section>

@endif
  </section>
        
        </div>
      </div>
    </div>
  </section>

 <br><br><br><br><br>
 
 <!--<div class="container">

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://comentarios-b3se9vxeuy.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript> <a href="https://disqus.com/?ref_noscript"></a></noscript>
                                                   
    </div>
    </div>

<br><br><br><br> -->
  



<!--Validation -->
<!--<div class="container"  >


  <div class="col-lg-7 col-md-1">
            <div class="form">
             
              <div id="errormessage"></div>
              <form method="post" action="{{url('rating/send')}}">
    {{ csrf_field() }}
                <div class="form-row">
                  <div class="form-group col-lg-6">

                  <div class="card" style="width: 70rem;">
  <div class="card-body">
    <h6 class="card-title" style="font-family:Century Gothic;font-size:18px">{{ __('messages.Validação') }}</h6>
    <div class="rate1">
     <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Funcionários') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="funcionario" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="funcionario" value="4">
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="funcionario" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="funcionario" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="funcionario" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Comodidades') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="comodidad" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="comodidad" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="comodidad" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="comodidad" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="comodidad" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Limpeza') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="limpeza" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="limpeza" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="limpeza" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="limpeza" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="limpeza" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Conforto') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="conforto" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="conforto" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="conforto" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="conforto" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="conforto" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Qualidade/Preço') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="qualidade" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="qualidade" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="qualidade" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="qualidade" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="qualidade" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Localização') }}</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="localizacao" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="localizacao" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="localizacao" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="localizacao" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="localizacao" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>
    <br>
    <label style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">Wi-fi</span> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="star5" name="wifi" value="5" href="#" />
    <label for="star5" title="text5" href="#">5 pts</label>
    <input type="radio" id="star4" name="wifi" value="4" href="#"/>
    <label for="star4" title="text4">4 pts</label>
    <input type="radio" id="star3" name="wifi" value="3" href="#"/>
    <label for="star3" title="text3">3 pts</label>
    <input type="radio" id="star2" name="wifi" value="2" href="#"/>
    <label for="star2" title="text2">2 pts</label>
    <input type="radio" id="star1" name="wifi" value="1" href="#"/>
    <label for="star1" title="text1">1 pts</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" title="Send Message" value="Send" name="send" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Publicar') }}</button>
  </div>
  
  </div>
  <br>
  <div class="alert alert-dark" role="alert" >
  {{ __('messages.Para') }}
</div>
<div >
 <h5 style="font-family:Century Gothic;font-size:18px">&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-danger">{{ __('messages.Valor') }} {{ $total }}</span></h5>
  </div> 
  </div>
  </div>
  
              </form>
            </div></div></div><a onclick=""   href="{{url('searchpt',2)}}"  > Cancel</a>cccccccc</td> -->

    

 
@if(isset($message))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">{{@message}}</span>
  </button>
</div>
@endif
@endsection
@section('footer')
@endsection