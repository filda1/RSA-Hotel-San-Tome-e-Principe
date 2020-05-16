@extends('layouts/app1')

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

<h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Localização') }}</h3><br>
<h5  ><i class='fa fa-map' style='font-size:24px;color:#47775D; '></i>&nbsp; &nbsp; <a style="color:#191919;font-family:Century Gothic;font-weight:bold;" href="https://www.google.pt/maps/place/Roça+Santo+António+Ecolodge+Hotel/@0.234321,6.7237133,17z/data=!3m1!4b1!4m8!3m7!1s0x107615c2f9ed2b17:0xc89ecd054e0c0b76!5m2!4m1!1i2!8m2!3d0.234321!4d6.725902">Roça Santo Antonio, Sao Tome Island</a> </h5>
<hr>
<h5><i class='fas fa-location' style='font-size:24px;color:#47775D; ></i>' style='font-size:24px; '></i>&nbsp; &nbsp; <a  style="color:#191919;font-family:Century Gothic;font-weight:bold;" href="https://goo.gl/maps/5G79TTVSZ7mrNyjA9">GPS: 6PMG+P9 Santo António </a>  </h5>

 <div><img src="user/img/Maps.png" height="600" width="1100" ></div>

<hr>

<h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;"> <p align = "justify">{{ __('messages.Indicações') }} </p></h3><br>
<h5  style="font-family:Century Gothic;font-size:18px"><i class='' style='font-size:24px; '></i>&nbsp; &nbsp;<p align = "justify">{{ __('messages.Siga') }}</P></h5>

<!-- <h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e1') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e2') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e3') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e4') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e5') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e6') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e7') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e8') }}</h5>
<h5 style="font-family:Century Gothic;font-size:16px"><i class='' style='font-size:24px; '></i>{{ __('messages.e9') }}</h5> -->   


</div>


</body>

@section('footer')
@endsection