@extends('layouts/app1')
<link rel="shortcut icon" href="/user/img/rsa.png">
 
@include('layouts/head4')
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
</style>  
<br><br><br><br><br><br>


<body>

<div class="container">
	<div class="row">
    <!-- El Modal -->   
    <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <i class="icon-screen-desktop m-auto text-primary" data-toggle="modal"data-target="#product_view" ></i>
            </div> <div  class=" ">
            <h3 data-toggle="modal" data-target="#product_view" >{{ __('messages.TituloPrincipal1') }}</h3>
   <p class="lead mb-0"><a data-toggle="modal" data-target="#product_view">{{ __('messages.CuerpoPrincipal1') }}</a></p>
   </div>
            
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
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" style="color:gray;">
            <div class="features-icons-icon d-flex">
            <a class="m-auto" href="{{ route('services') }}"><i class="icon-layers m-auto text-primary"></i></a>
            </div>
            <h3><a href="{{ route('services') }}"  >{{ __('messages.TituloPrincipal2') }}</a></h3>
            <p class="lead mb-0"><a href="{{ route('services') }}"  style="color:black;">{{ __('messages.CuerpoPrincipal2') }}</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('hotels') }}" ><i class="icon-check m-auto text-primary"></i></a>
            </div>
            <h3><a href="{{ route('hotels') }}"  style="color:#191919;">{{ __('messages.TituloPrincipal3') }}</a></h3>
            <p class="lead mb-0"><a href="{{ route('hotels') }}"  style="color:black;">{{ __('messages.CuerpoPrincipal3') }}</a></p>
            </div>
          </div>
        </div>
      </div>

  </section>  </div>
    </div>
    <br>
    <br><br>
		<div class="col-md-12">
     <table class="table ">
  <thead>
    <tr>
      <th scope="">Icon</th>
      <th scope="col">{{ __('messages.Service') }}</th>
      <th scope="col">{{ __('messages.Area') }}</th>
      <th scope="col">Check</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><i class="fa fa-tree" style='font-size:24px'></i></th>
      <td>{{ __('messages.Mobiliário de exterior') }}</td>
      <td>{{ __('messages.AExterior') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-tree" style='font-size:24px'></i></th>
      <td>{{ __('messages.Terraço para banhos de sol') }}</td>
      <td>{{ __('messages.AExterior') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-tree" style='font-size:24px'></i></th>
      <td>{{ __('messages.Comodidades para churrascos') }}</td>
      <td>{{ __('messages.AExterior') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-tree" style='font-size:24px'></i></th>
      <td>{{ __('messages.Terraço') }}</td>
      <td>{{ __('messages.AExterior') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-tree" style='font-size:24px'></i></th>
      <td>{{ __('messages.Jardim') }}</td>
      <td>{{ __('messages.AExterior') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-dog" style='font-size:24px'></i></th>
      <td>{{ __('messages.Animais de estimação') }} </td>
      <td>{{ __('messages.AAnimais de estimação') }} </td>
      <th scope="row"><i class="fas fa-window-close" style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fa fa-directions" style='font-size:24px'></i></th>
      <td>{{ __('messages.Caminhadas') }}</td>
      <td>{{ __('messages.AActividades') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Café/cafetaria no local') }}</td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td>{{ __('messages.Chocolate ou biscoitos') }} </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Fruta') }}  </td>
      <td>{{ __('messages.AComida e Bebida') }}  </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Garrafa de água') }} </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Vinho/champanhe') }}</td>
      <td>{{ __('messages.AComida e Bebida') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td>{{ __('messages.Buffet adequado para crianças') }} </td>
      <td>{{ __('messages.AComida e Bebida') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Refeições para crianças') }}</td>
      <td>{{ __('messages.AComida e Bebida') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td>{{ __('messages.Menus especiais dietéticos') }}</td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Café') }} </td>
      <td>{{ __('messages.AComida e Bebida') }}  </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Snack-bar') }} </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Pequeno-almoço no quarto') }} </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td> {{ __('messages.Bar') }} </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-apple-alt" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Restaurante') }}  </td>
      <td>{{ __('messages.AComida e Bebida') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-wifi" style='font-size:24px'></i></th>
      <td> {{ __('messages.Wi-fi') }}  </td>
      <td>{{ __('messages.AInternet') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-car-side" style='font-size:24px'></i></th>
      <td> {{ __('messages.Estacionamento gratuito e privado') }} </td>
      <td>{{ __('messages.AEstacionamento') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-bus" style='font-size:24px'></i></th>
      <td> {{ __('messages.Transporte para o aeroporto') }} </td>
      <td> {{ __('messages.ATransporte') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-bus" style='font-size:24px'></i></th>
      <td>{{ __('messages.Recolha de passageiros no aeroporto') }} </td>
      <td> {{ __('messages.ATransporte') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-swimmer" style='font-size:24px'></i></th>
      <td> {{ __('messages.Piscina') }}</td>
      <td> {{ __('messages.APiscina e bem-estar') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-swimmer" style='font-size:24px'></i></th>
      <td> {{ __('messages.Guarda-sóis') }} </td>
      <td>{{ __('messages.APiscina e bem-estar') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-swimmer" style='font-size:24px'></i></th>
      <td> {{ __('messages.Cadeiras de praia/espreguiçadeiras') }} </td>
      <td>{{ __('messages.APiscina e bem-estar') }}  </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-swimmer" style='font-size:24px'></i></th>
      <td> {{ __('messages.Piscina exterior') }} </td>
      <td>{{ __('messages.APiscina e bem-estar') }}  </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-diagnoses" style='font-size:24px'></i></th>
      <td> {{ __('messages.Check-in/check-out privado') }}</td>
      <td>{{ __('messages.AServiços de receção') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fas fa-broom" style='font-size:24px'></i></th>
      <td> {{ __('messages.Serviço de limpeza diário') }} </td>
      <td> {{ __('messages.AServiços de limpeza') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Salão/área de televisão partilhados') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Transporte de/para o aeroporto') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Serviço de transporte') }}</td>
      <td>{{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Área específica para fumar') }}</td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Ar condicionado') }}</td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Lojas') }}</td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Aluguer de carro') }}</td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Quartos insonorizados') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Loja de recordações') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>{{ __('messages.Cofre') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Suite nupcial') }}</td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td> {{ __('messages.Quartos para não fumadores') }} </td>
      <td> {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    <tr>
      <th scope="row"><i class="fa fa-info" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Serviço de quartos') }}</td>
      <td>  {{ __('messages.AGeral') }}</td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>
    <tr>
   
    
    <tr>
      <th scope="row"><i class="far fa-comment" style='font-size:24px'></i></th>
      <td>  {{ __('messages.Idiomas') }}  </td>
      <td>{{ __('messages.AIdiomas falados') }} </td>
      <th scope="row"><i class='fas fa-check' style='font-size:24px'></i></th>
    </tr>  
  </tbody>
</table>
		</div>
	</div>
</div>


</body>

@section('footer')
@endsection