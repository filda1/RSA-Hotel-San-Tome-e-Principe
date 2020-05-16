@extends('layouts/app1')
<script>window.location = "/";</script>
@include('layouts/head7')
@section('head')
<div style="display:none;visibility: hidden; display:inline;">
          Cancelamento de Reserva Roça Santo António Ecolodge, São Tomé - 
    </div>
@section('main-content')
    <h1>Cancelamento!!</h1>
    {{ $e_message}}
  <br>
@endsection