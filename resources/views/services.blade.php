@extends('layouts/appB')

 <link rel="shortcut icon" href="/user/img/rsa.png">


<style>







</style>  

@include('layouts/head')

@section('head')

<body>
<div class="container">
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fas fa-globe-africa" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('environment') }}"style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal1') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('services') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal2') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle" style="color:#47775D;"> </i></a>
            </div>
          
            <h3 ><a href="{{ route('hotels') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal3') }}</a></h3>
      
            
          </div>
        </div>
        </div>
        
 
  </section>
  </section>


<div>
     <!--P<img class="" src="{{url('/storage/'. $posts[72]->picturehotel )}}" alt="slide 7" width="1100" height="800">-->
    
  
  <!--
  <img class="" src="/user/img/f1.jpg" alt="slide 7" width="1100" height="600">
  <img class="" src="{{url('/storage/'. $posts[72]->picturehotel )}}" alt="slide 7" width="1100" height="800">r-->

  </div>

<!--
  <div>
<h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_Instalacion') }}</p></h4><br>
<h5><label style="color:green; font-family:Century Gothic;font-size:18px">{{ __('messages.CasaPrincipal') }}</label><label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCasaPrincipal') }}</label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.CasaComboio') }}</label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCasaComboio') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Recepcomloja') }}</label><label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cRecepcomloja') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Restaurante/Bar') }}</label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cRestaurante/Bar') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Saladeestar') }} </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cSaladeestar') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Piscina') }} </label> <label style="font-family:Century Gothic;font-size:18px"> –{{ __('messages.cPiscina') }} </label></h5>
<hr>
-->

<div class="container">
<h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_Instalacion') }}</p></h4><br>
  <div class="row">
    <div class="col-sm">
    <h5><label align = "justify" style="color:black;font-weight:bold; font-family:Century Gothic;font-size:18px;">.{{ __('messages.CasaPrincipal') }}</label>
    <br><label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray"> {{ __('messages.cCasaPrincipal') }}</label> <br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">.{{ __('messages.CasaComboio') }}</label> 
<br><label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cCasaComboio') }} </label><br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">.{{ __('messages.Recepcomloja') }}</label>
<br>
<label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cRecepcomloja1') }} </label>
<label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cRecepcomloja') }} </label><br><br>
<label  align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">.{{ __('messages.Restaurante/Bar') }}</label> 
<br><label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray"> {{ __('messages.cRestaurante/Bar') }} </label>
<br><label style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray"> {{ __('messages.cRestaurante/Bar1') }} </label><br><br>
    </div>
    <div class="col-sm">
    <label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px;margin:-7px;">&nbsp;&nbsp; .{{ __('messages.Saladeestar') }}
    <div> <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;&nbsp;{{ __('messages.cSaladeestar') }}&nbsp;&nbsp;{{ __('messages.cSaladeestar00') }} &nbsp;{{ __('messages.cSaladeestar01') }} 
    <div><label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;&nbsp;{{ __('messages.cSaladeestar2') }}
    &nbsp;&nbsp;{{ __('messages.cSaladeestar22') }}&nbsp;&nbsp;{{ __('messages.cSaladeestar23') }} &nbsp;&nbsp;{{ __('messages.cSaladeestar230') }}&nbsp;&nbsp; {{ __('messages.cSaladeestar231') }}
    <div><label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;&nbsp;{{ __('messages.cSaladeestar24') }}&nbsp; {{ __('messages.cSaladeestar3') }} </div></div>
    </label></div>
    </label> 
   <br>
    <label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px;margin:6px;">.{{ __('messages.Piscina') }}
    <div> <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray"> {{ __('messages.cPiscina') }} 
    
    <div><label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray"> {{ __('messages.cPiscina1') }} </label></div>
    </label></h5>
    
    </div></label>
  
     </h5>
    </div>
    </div>
  
  </div>
</div>
<br><br>




  <div class="container">
      <div class="row">
          <!-- <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="" data-toggle="modal" data-target="#product_viewS2"></i>
            </div>
            <h3  ><a data-toggle="modal" data-target="#product_viewS2" style="color:#7AAC8F;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Galeria') }}...</a></h3>
            <div class="modal fade product_view" id="product_viewS2">
    <div class="modal-dialog">
        <div class="modal-content">
      
        <div class="row justify-content-center">
    <div class="col-md-8">
    <br>
        <div class="row">
            <a href="{{url('/storage/'. $posts[54]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[54]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[55]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[55]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[56]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[56]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[57]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[57]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[58]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[58]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[59]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[59]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[60]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[60]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[61]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[61]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[62]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[62]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <br>
    </div>
</div>
</div>
</div>
</div> -->   
          


   <div class="col"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000" >
        <div class="carousel-inner" role="listbox" >
            
             <!--CASA PRINCIPAL 
               <div class="carousel-item col-md-3 active" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[59]->picturehotel )}}" alt="slide 5"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[59]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>
             -->
             
            
            
            <!--    <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[61]->picturehotel )}}" alt="slide 7"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[61]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>-->
                
              <!--TERRAÇO
              
                    <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[62]->picturehotel )}}" alt="slide 6"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[62]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>-->
            
            <!--IGUARIAS 
            
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
              <img   class="" src="/user/img/s2.jpg"  alt="slide 7"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p align="center" style="font-family:Century Gothic;font-size:16px;background-color:black;">Algumas das iguarias que poderá saborear no nosso restaurante........</p>
                </div>

                  </div>
               
                </div>
            </div>
            
            -->
                     
            
              <!--IGUARIAS Cor
               <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
              <img   class="" src="/user/img/s3.jpg"  alt="slide 8"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Iguarias Cor</p>
                </div>

                  </div>
               
                </div>
            </div>
              -->
                      
            
            
            <!--IGUARIAS Pasteles 
            
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 9" class="thumb">
              <img   class="" src="/user/img/s4.jpg"  alt="slide 9"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">IGUARIAS Pasteles </p>
                </div>

                  </div>
               
                </div>
            </div>
            -->
                      
            
            
              <!--IGUARIAS 4 Platos 
              
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 10" class="thumb">
              <img   class="" src="/user/img/s5.jpg"  alt="slide 10"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Iguarias 4 Platos</p>
                </div>

                  </div>
               
                </div>
            </div>
            
              -->
                       
            
             <!--IGUARIAS Comida 
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
              <img   class="" src="/user/img/s6.jpg"  alt="slide 11"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Iguarias Comida</p>
                </div>

                  </div>
               
                </div>
            </div>
             -->
                      
            
            
            <!--Final da tarde 
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 12" class="thumb">
              <img   class="" src="/user/img/s8.jpg"  alt="slide 12"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Final tarde</p>
                </div>

                  </div>
               
                </div>
            </div>
            
            -->
                     
            
             <!--TERRAÇO Simple 
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 13" class="thumb">
              <img   class="" src="/user/img/s9.jpg"  alt="slide 13"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">TERRAÇO Simple</p>
                </div>

                  </div>
               
                </div>
            </div>
             -->
                       
            
            
              <!--Patilla 
              
               <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 14" class="thumb">
              <img   class="" src="/user/img/s10.jpg"  alt="slide 14"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Patilla</p>
                </div>

                  </div>
               
                </div>
            </div>
              -->
                      
            
            
               <!--Pequeno almoçom Pao 
               
                <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 15" class="thumb">
              <img   class="" src="/user/img/s11.jpg"  alt="slide 15"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">P Pao</p>
                </div>

                  </div>
               
                </div>
            </div>
               -->
                      
            
                <!--Pequeno A Comida 
                
                <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 16" class="thumb">
              <img   class="" src="/user/img/s12.jpg"  alt="slide 16"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">P Comida</p>
                </div>

                  </div>
               
                </div>
            </div>
            
                -->
                       
             <!--Pequeno A Mesa 
             
             
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 17" class="thumb">
              <img   class="" src="/user/img/s13.jpg"  alt="slide 17"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">P a Mesa</p>
                </div>

                  </div>
               
                </div>
            </div>
             -->
                       
            
            
            
              <!--Pratos tipicos 
              
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 17" class="thumb">
              <img   class="" src="/user/img/s14.jpg"  alt="slide 17"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">P tipicos</p>
                </div>

                  </div>
               
                </div>
            </div>
              -->
                       
            
            
              <!-- Vista Area general 
              
               <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 18" class="thumb">
              <img   class="" src="/user/img/se7.jpg"  alt="slide 18"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Vista Area general..............................</p>
                </div>

                  </div>
               
                </div>
            </div>
              
              
              -->
                      
            
            
              <!--Vista Aerea Piscina 
              
               <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 19" class="thumb">
              <img   class="" src="/user/img/se8.jpg"  alt="slide 19"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">Vista Aerea Piscina </p>
                </div>

                  </div>
               
                </div>
            </div>
              
              -->
                      
            
            
            
            
            <!--TERRACO 2 
            
            
                       <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
              <img   class="" src="/user/img/terraco2.jpg"  alt="slide 6"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[62]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>
            
            -->
            
            
      
          <!--APROVETE PARA MERGULHO 
          
          
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[57]->picturehotel )}}" alt="slide 4"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[57]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>
          
          -->
            
          
               
            
            
            <!--CASA PRINCIPAL 
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[60]->picturehotel )}}" alt="slide 3"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[60]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>
            
            -->
            
                
         
        
        
        <!--APROVETE PARA MERGULHO 
        
        
        
         <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[54]->picturehotel )}}" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;"></p>
                </div>

                  </div>
                </div>
            </div>
        
        -->
           
            
            
                         <!-- Piscina
                  
                  
                  <div class="carousel-item col-md-3 " >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
              <img   class="" src="{{url('/storage/'. $posts[56]->picturehotel )}}" alt="slide 2"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;background-color:black;">{{$posts[56]->info }}</p>
                </div>

                  </div>
               
                </div>
            </div>
              </div>
                  -->   
        
        
            
              
              
              <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
              <img   class="" src="/user/img/servi2.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
              <img   class="" src="/user/img/servi3.jpg" alt="slide 3"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
              
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
              <img   class="" src="/user/img/servi4.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
              <img   class="" src="/user/img/servi5.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
           
             
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
              <img   class="" src="/user/img/servi6.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
             
             
             <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
              <img   class="" src="/user/img/servi7.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>

          
          <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
              <img   class="" src="/user/img/servi8.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>

           
           <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 9" class="thumb">
              <img   class="" src="/user/img/servi9.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 10" class="thumb">
              <img   class="" src="/user/img/servi10.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
              <img   class="" src="/user/img/servi11.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 12" class="thumb">
              <img   class="" src="/user/img/servi12.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 13" class="thumb">
              <img   class="" src="/user/img/servi13.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            <!--  <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 19" class="thumb">
              <img   class="" src="/user/img/servi19.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>-->
           
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 14" class="thumb">
              <img   class="" src="/user/img/servi14.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 15" class="thumb">
              <img   class="" src="/user/img/servi15.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 16" class="thumb">
              <img   class="" src="/user/img/servi16.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
           
           
           
           <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 17" class="thumb">
              <img   class="" src="/user/img/servi17.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
            
            <div class="carousel-item col-md-3 active" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 18" class="thumb">
              <img   class="" src="/user/img/servi18.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

                  </div>
               
                </div>
            </div>
            
            
           
            
            
            <div class="carousel-item col-md-3" >
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 20" class="thumb">
              <img   class="" src="/user/img/servi20.jpg" alt="slide 1"  width="1080">
                    </a>
                     <br><br><br>
                    <div class="carousel-caption" style="right: -2%;top:87%;left:6%">
                 <h3 class="h3-responsive"></h3>
                                 
                    
                </div>

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
</div>


<!--
  <h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_Servicio') }} </p></h4><br>
<h5><label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Lavandaria') }} </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cLavandaria') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Serviçodequartos') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cServiçodequartos') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Wi-figratuito') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cWi-figratuito') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Organizaçãodeeventos') }}   </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cOrganizaçãodeeventos') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Transfersaeroporto') }} </label> <label style="font-family:Century Gothic;font-size:18px"> –{{ __('messages.cTransfersaeroporto') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Aluguerdeviaturas') }}   </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cAluguerdeviaturas') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Estacionamento gratuito') }}  </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Check-inde') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCheck-inde') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Check-outde') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCheck-outde') }} </label></h5><br>

-->

<div class="container">
<h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp;  {{ __('messages.Titulo_Servicio') }} </p></h4><br>
  <div class="row">
   
    <div class="col-sm">
    <h5><label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">&nbsp;  .{{ __('messages.Lavandaria') }} </label> 
   <br> <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;    {{ __('messages.cLavandaria') }} </label> <br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">&nbsp;  .{{ __('messages.Serviçodequartos') }}  </label>
<br><label  align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;    {{ __('messages.cServiçodequartos') }} </label><br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">&nbsp;  .{{ __('messages.Wi-figratuito') }}  </label>
<!--<br><label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cWi-figratuito') }} </label>-->
 <br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">&nbsp;  .{{ __('messages.Organizaçãodeeventos') }}   </label><br>
 <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;    {{ __('messages.cOrganizaçãodeeventos') }} </label><br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">&nbsp;  .{{ __('messages.Transfersaeroporto') }} </label> 
<label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">&nbsp;   {{ __('messages.cTransfersaeroporto') }} </label><br><br>
    </div>
    <div class="col-sm">
    <label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">.{{ __('messages.Aluguerdeviaturas') }}   
    
    <div> <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cAluguerdeviaturas') }} </label><div
    <div></div>
    </div>
    
    </label> 
   <br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px;margin:-14px;">&nbsp;&nbsp; .{{ __('messages.Estacionamento gratuito') }}

</label><br><br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px;font-weight: bold;">.{{ __('messages.Check-inde') }}  </label>
 <label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cCheck-inde') }} </label> <br><br>
<label align = "justify" style="color:black;font-weight:bold;font-family:Century Gothic;font-size:18px">.{{ __('messages.Check-outde') }}  </label> 
<br><label align = "justify" style="font-family:Century Gothic;font-size:18px;font-weight: bold;color:gray">  {{ __('messages.cCheck-outde') }} </label></h5>
    </div>
  </div>
</div>
<br>

</div> 
</div>



</body>

@section('footer')

<script language="javascript">
$('#myCarousel').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 1;
    var totalItems = $('.carousel-item').length;
  
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

</script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

@endsection