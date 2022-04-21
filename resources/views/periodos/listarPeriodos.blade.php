@extends('layouts.main-layout')
@section ('page-title','Inicio Reservum')
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
    <!--Formulario de entrada de reservas -->
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RESERVUM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/periodos/">Periodos</a>
              <a class="nav-link" href="/periodos/create">Crear</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
      </nav>
      <h3>Listado de periodos</h3>

        <table class="table">
            <thead>
              <tr>
              <th>id</th>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
              <th>Empleado</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($periodos as $periodo)
                <tr>
                <td>{{ $periodo -> id }}</td>
                <td>{{ $periodo -> fecha_inicio }}</td>
                <td>{{ $periodo -> fecha_fin }}</td>
                <td>{{ $periodo -> empleado_id }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
       
    </div><!--Fin container -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
@endsection