@extends('layouts/app1')
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
.bar-7 {width: {{ $porcewifi }}%; height: 18px; background-color: #00bc;}
.bar-6 {width: {{ $porlocalizacao }}%; height: 18px; background-color: #FF00FF;}
.bar-5 {width: {{$pfuncionarios}}%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: {{$pcomodidades}}%; height: 18px; background-color: #2196F3;}
.bar-3 {width: {{$plimpeza}}%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: {{ $porconforto}}%; height: 18px; background-color: #ff9800;}
.bar-1 {width: {{ $porqualidade }}%; height: 18px; background-color: #f44336;}

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






<body>
<div class="container">
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fas fa-globe-africa"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal1') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('services') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal2') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('hotels') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal3') }}</a></h3>
      
            
          </div>
        </div>
        </div>
        
 
  </section>
  



<!-- VALIDACION -->
<div class="container" >


     
       
<h3 align="left" style="color:#47775D;font-weight:bold;font-family:Century Gothic;">&nbsp;&nbsp;&nbsp;&nbsp;{{ __('messages.TituloValidações') }}</h3><br>

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



<br><br><br><br>

  <div class="col-lg-5 col-md-8">
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
  </div>
  </div>
  
              </form>
            </div>


   <br>
 
  <!-- RESULTADO DE VALIDACION -->
   <div class="card" style="width: 70rem;">
  <div class="card-body">
    <h5 class="card-title" style="font-family:Century Gothic;font-size:18px">{{ __('messages.Resultado') }}</h5>
    <hr style="border:3px solid #f1f1f1">
    
<div class="row">
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Funcionários') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$funcionarios}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Comodidades') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$comodidades}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Limpeza') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$limpeza}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Conforto') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$conforto}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Qualidade/Preço') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$qualidade}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">{{ __('messages.Localização') }}</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-6"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$localizacao}}</div>
  </div>
  <div class="side">
    <div style="font-family:Century Gothic;font-size:15px">Wi-fi</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-7"></div>
    </div>
  </div>
  <div class="side right">
    <div>{{$wifi}}</div><h5 style="font-family:Century Gothic;font-size:18px"><span class="badge badge-success">{{ __('messages.Valor') }}{{ $total }}</span></h5>
  </div>
 
  </div>
</div>


</div></div></div>

</div>


</body>

@section('footer')
@endsection