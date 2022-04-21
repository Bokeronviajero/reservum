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
  
    
    @include("periodos.entradaPeriodo",['FormType'=>'create'])
    {{-- *************** boton enviar y volver ********** --}}
    
      <!-- ***********fin boton enviar y volver -->
    
  
</div>
@endsection
