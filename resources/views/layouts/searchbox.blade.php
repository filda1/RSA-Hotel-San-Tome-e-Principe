<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Roça Santo António Ecolodge') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Limpia campos de Search-->
    <script>
    function myFunction() {
     document.getElementById("myDate").value = "";
     document.getElementById("myDate1").value = "";
     document.getElementById("hotel").value = "Selecione hotel";
     document.getElementById("person").value = "Nº Pessoa";
    }
    </script>
</head>

  <!-- Bootstrap core CSS -->
  <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="user/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="user/css/landing-page.min.css" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  

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
        top: -312px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
</style>
  <!-- Navigation -->

  @section('head')
        @show
        
        <header class="text-white text-center">
    
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
       
        <div class="col-md-19 col-lg-28 col-xl-7 mx-auto">
        <div class="input-group">
              <div class="form-group">
                
     <section class="search-sec">
    <div class="container">
     <form action="/search" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-19">
                    <div class="row">
                      <!--  <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup Hotel">
                        </div>-->
                        
                      
                        <div class="col-lg-3 col-md-2 col-sm-12 p-0" >   
                       
                          <!-- <input type='text' class="form-control search-slt"  placeholder="Check-in"  />    -->                
                             <input id="myDate" type='date' class="form-control search-slt"  data-placeholder="Check-in" name='checkin' 
                            /> 
                                                                   
                        </div>
                                
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input id="myDate1" type='date' class="form-control search-slt" placeholder="Check-out"  name='checkout'>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select id="person" class="form-control search-slt" id="exampleFormControlSelect1"  name='person'>
                                <option>Nº Pessoa</option>
                                <option value="2">1</option>
                                <option value="2">2</option>
                                <option value="2">3</option>
                                <option value="2">4</option>
                                <option value="2">5</option>
                                <option value="2">6</option>
                            </select>
                        </div>
                     
               
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn"  onclick="myFunction()" >Pesquisar</button>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>
              </div>
        </div>
      </div>
    </div>
  </header>
  