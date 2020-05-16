@extends('layouts/app1')

<link rel="shortcut icon" href="/user/img/rsa.png">

@section('main-content')


<body> 

@if(app()->getLocale() == "pt" )



<div class="card">
  <div class="card-header">
    
  </div>
  <div class="card-body">
  
    <p class="card-text"><div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{ __('messages.sus') }}</strong> {{ __('messages.sucedida') }}
</div>
</p>
    <a href="{{ route('welcome') }}" class="btn btn-primary" style="background-color: #47775D;font-family:Century Gothic;font-size:15px">{{ __('messages.regresar') }}</a>
  </div>
</div>

@else
<div class="card-header">
  </div>
  <div class="card-body">
   
    <p class="card-text"><div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{ __('messages.sus') }}</strong> {{ __('messages.sucedida') }}
</div>
</p>
    <a href="{{ route('welcome') }}" class="btn btn-primary" style="background-color: #47775D;font-family:Century Gothic;font-size:15px">{{ __('messages.regresar') }}</a>
  </div>
</div>
<br>
@endif
 <br><br>
 <br><br><br>
 <br>
 <br><br>


</body>

@endsection
@section('footer')
@endsection


