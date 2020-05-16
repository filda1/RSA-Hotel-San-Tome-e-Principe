<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!--  <title>{{ config('app.name', 'Roça Santo António Ecolodge') }}</title> -->
   

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
     document.getElementById("person").value = {{ __('messages.Persona2') }};
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
        top: -114px;
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
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--  <a class="navbar-brand" href="{{ url('/') }}">
                Roça Santo António Ecolodge  
                </a> -->
                <a class="navbar-brand" href="{{ url('/') }}">
                
                <img src="/user/img/LogoRoca2.png" alt="" title="" height="70" style="margin-top: -20px;"></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px">{{ __('messages.Register1') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px">Home</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px" v-pre>
                                {{ __('messages.Lang') }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('locale/en') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;font-size:15px">
                                        en
                                    </a>
                                    <a class="dropdown-item" href="{{ url('locale/pt') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;font-size:15px">
                                       pt
                                    </a>
                                    

                                </div>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:#47775D;font-family:Century Gothic;font-weight:bold;font-size:15px">
                                        {{ __('Logout') }}
                                    </a>

                                </div>
                            </li>
                    </ul>
                    &nbsp;
                </div>
            </div>
        </nav>
  </nav>

  @section('head')
  <!-- Aqui la imgen es fija -->
  <header class="call-to-action2 text-white text-center fill" >
    
    <div class="col"></div>
    <div class="container">
      <div class="row">
      <div class="col-xl-9 mx-auto">
           
          <h1 class="mb-4" style="color:#FFFF;;font-family:Century Gothic;font-weight:bold;margin-top: 280px; "></h1>
        </div>
        <div class="col-md-19 mx-auto">
     
     <!-- <section class="search-sec">
    <div class="container">
     <form action="/search" method="POST" role="search" >
     {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-19">
                    <div class="row">
                      


                        <div class="col-lg-3 col-md-2 col-sm-12 p-0"  >                    
                                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                                                                    
                        </div>
                        
                        <div class="col-lg-3 col-md-2 col-sm-12 p-0" >   
                                    
                              <input id="myDate23" type='date' class="form-control search-slt"  data-placeholder="Check-in" name='checkin' 
                             required="required" data-validation-required-message="Please enter a date." /> 
                                                                   
                        </div>
                                
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">

                        <input id="myDate24" type='date' class="form-control search-slt" placeholder="Check-out"  name='checkout'
                            required="required" data-validation-required-message="Please enter a date."/>

                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <select required id="person" class="form-control search-slt" id="exampleFormControlSelect1"  name='person'>
                            <option value="">{{ __('messages.Persona2') }}</option>
                                <option value="1">1</option>
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
                     
               
                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn"  onclick="myFunction()" ><i class='fas fa-search' style='font-size:16px'></i></button>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
        </form>
    </div>
    </section> -->

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
                        <!--       <div class="col-lg-2 col-md-3 col-sm-12 p-0">
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
                        </div>
                        -->
                
                        <div class="col-lg-2 col-md-3 col-sm-1 p-0">
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
                        
                        <!-- <div class="col-lg-2 col-md-3 col-sm-12 p-0">
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
                        </div>-->
                        
                        <div class="col-lg-2 col-md-3 col-sm-1 p-0">
                        <label>&nbsp;</label>
                            <button type="submit" class="btn btn-danger wrn-btn" ><i class='fas fa-search' style='font-size:16px' onclick="myFunction()" ></i></button>
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


        </div>
      </div>
    </div>

  </header>
<br>
 <!-- HOME -->

 <div class="container" id="minhaDiv" >
			<p> </b></p>
			<h2>{{ __('messages.Reserva1') }}</h2>
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>{{ __('messages.Reserva1') }}</th>
						<th>Checkin</th>
						<th>Checkout</th>
						<th>{{ __('messages.Preços') }}</th>
						<th>Total</th>
                        <th>{{ __('messages.Adults') }}</th>
						<th>{{ __('messages.Cerrar') }}</th>
					
					</tr>
				</thead>
				<tbody>	
                <form action="/home" method="POST" role="home" >
                {{ csrf_field() }}		 
                @foreach($datos as $datoss)
					<tr>
						<td>{{$datoss->name_reserve}}</td>
						<td>{{$datoss->checkin}}</td>
						<td>{{$datoss->checkout}}</td>
						<td>{{$datoss->price}}</td>
						<td>{{$datoss->total}}</td>
                        <td>{{$datoss->person}}</td>
						<td>   
                          
                      <a onclick="return confirm('{{ __('messages.CancelReserve') }}')"   href="{{url('change',$datoss->id)}}"  > Cancel</a></td>
                        
									
					</tr>
                @endforeach
                </form>
				</tbody>
			</table>
            <br> <br>
            <br> <br>
            
		</div>

        <br> <br>

        <div class="container">
        <label>*{{ __('messages.Ao') }}</label>
        </div>