@extends('layouts/app1')
@include('layouts/head3')
@section('head3')
 <!-- Styles -->

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
         <h5 style="font-family:Century Gothic;font-size:16px">{{ __('messages.Conta1') }}</h5>
        </div>
          <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('messages.Nome1') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="font-family:Century Gothic;">
                                        <strong>{{ __('messages.ErroNome1') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="font-family:Century Gothic;">
                                        <strong>{{ __('messages.ErroEmail2') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('messages.Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="font-family:Century Gothic;">
                                        <strong>{{ __('messages.ErroSenha1') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-family:Century Gothic;">{{ __('Confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">
                                {{ __('messages.Registo1') }}
                                </button>
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
