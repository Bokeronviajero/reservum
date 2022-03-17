@extends('layouts.main-layout')
@section ('page-title','Nuevo periodo ')
@section ('content-area')
    <!-- validacion de errores -->
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>
            <strong>{{$error}}</strong>           
        </li>
    @endforeach    
    </ul>
    </div>
@endif    
<!-- ******************************** -->
<h5>
<div class="container">
  <h1>Nuevo Periodo</h1>
  <!-- aqui creo el formulario   -->
  
    <form action="{{route('periodos.store')}}" enctype="text/plain" method="post">
    @csrf
    @include("periodos.entradaPeriodo",['FormType'=>'create'])
    {{-- *************** boton enviar y volver ********** --}}
    <div class="button-group">
        <input class="btn btn-primary btn-small" type="submit" value="Enviar">
        <a href="{{route('periodos.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Volver</a>
    </div>
      <!-- ***********fin boton enviar y volver -->
    </form>
  
</div>
@endsection
