<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- <title>{{ config('app.name', 'Roça Santo António Ecolodge') }}</title> -->
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
  <style>

body{font-family:'Roboto';}
      .listing-box h4{line-height:30px; color:#e55122}
      .listing-box{background:#f2f4f4; padding:5px; float:left; width:100%; }
      .poperty-details-iob {margin:5px 0; padding:8px 0; display:inline-block; border-top:#e5e5e5 1px solid;  border-bottom:#e5e5e5 1px solid; 
      width:100%;}
      .poperty-details-iob li{margin:0; padding:8px 15px; display:inline-block; font-family:'Roboto'; color:#333; border-right:#e5e5e5 1px solid; }
      .poperty-details-iob li span{font-size:22px; color:#000;}
      .listing-box p{font-size:12px; color:#838383;}
      .list-of-ratings{margin:-40px 10px; padding:0; display:block; width:100%; float:left; position:relative;}
      .list-of-ratings li{margin:0; padding:10px 15px 0px 0px; display:block;  width:100%; font-size:16px;}
      .mr-iob-blr{margin-top:20px;}
      .listing-box ul li a{color:#e55122;}
      .cls-for-btn-listing{margin:0; padding:0; display:inline-block; text-align:center; width:100%; margin-top:130px;}
      .cls-for-btn-listing li{margin:0; padding:0; display:inline-block; }
      .cls-for-btn-listing li a{margin:0; padding:10px 15px; display:inline-block; background:#e55122 !important; border-radius:20px; color:#fff !important; }
	  .star-list-iob{margin:16px 0; padding:0; display:block; position:relative; float:right}
	  .star-list-iob li{margin:0; padding:0 3px; display:block; }
      
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
        @show
      