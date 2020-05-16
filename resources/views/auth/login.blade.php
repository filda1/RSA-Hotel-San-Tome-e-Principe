@extends('layouts/app1')
@include('layouts/head3')
@section('head3')
 <!-- Styles -->
 <link href="{{ asset('css/new.css') }}" rel="stylesheet">
 
@section('main-content')
<br>
<div class="wrapper fadeInDown">
  <br><br>
    <div id="formContent">
     <br>
      <!-- Icon -->
        <div class="fadeIn first">
         <h5 style="font-family:Century Gothic;font-size:16px">Log In</h5>
        </div>
          <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('messages.E-Mail1') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="font-family:Century Gothic;">
                                        <strong>{{ __('messages.Errorpssw') }}<</strong>
                                       
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('messages.Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('messages.Errorpssw') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-family:Century Gothic;font-size:14px">
                                        {{ __('messages.Lembre') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#6ec071;font-family:Century Gothic;">
                                        {{ __('messages.Esqueceu') }}?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <br>
                </div>
      
</div>
<br><br><br><br><br>
@endsection
@section('footer')
@endsection
