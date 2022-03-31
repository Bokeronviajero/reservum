<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Vacaciones</title>
  </head>
  <body>
    
    <!--Formulario de entrada de reservas -->
    <div class="container">
     
        <form action="{{route('/periodos.store')}}" enctype="multipart/form-data" method="post">
          @csrf
      <!-- Content here -->
      <div class="row justify-content-center">
        <h1>Entrada de Vacaciones</h1>
        <div class="col-4">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre Empleado</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="nombreEmpleadoHelp">
          <div id="nombreEmpleadoHelp" class="form-text">Indica tu nombre y apellido.</div>
        </div>
        <div class="mb-3">
          <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
          <input type="date" class="form-control" id="fechaInicio" aria-describedby="fechaInicioHelp">
          <div id="fechaInicioHelp" class="form-text">Indica la fecha de inicio de las vacaciones del empleado.</div>
        </div>
        <div class="mb-3">
          <label for="fechaFin" class="form-label">Fecha de Fin</label>
          <input type="date" class="form-control" id="fechaFin" aria-describedby="fechaFinHelp">
          <div id="fechaFinHelp" class="form-text">Indica la fecha de Fin de las vacaciones del empleado.</div>
        </div>
        
        
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div><!--Fin columna -->
      </form>
       
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