<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Reservum</title>
  </head>
  <body>
    
    <!--Formulario de entrada de reservas -->
    <div class="container">
      <form>
      <!-- Content here -->
      <div class="row justify-content-center">
        <h1>Entrada de Reserva</h1>
        <div class="col-4">
        <div class="mb-3">
          <label for="nombreCliente" class="form-label">Nombre Cliente</label>
          <input type="text" class="form-control" id="nombreCliente" aria-describedby="nombreClienteHelp">
          <div id="nombreClienteHelp" class="form-text">Indica tu nombre y apellido.</div>
        </div>
        <div class="mb-3">
          <label for="fechaEntrada" class="form-label">Fecha de Entrada</label>
          <input type="date" class="form-control" id="fechaEntrada" aria-describedby="fechaEntradaHelp">
          <div id="fechaEntradaHelp" class="form-text">Indica la fecha de entrada del cliente en el alojamiento.</div>
        </div>
        <div class="mb-3">
          <label for="fechaSalida" class="form-label">Fecha de Salida</label>
          <input type="date" class="form-control" id="fechaSalida" aria-describedby="fechaSalidaHelp">
          <div id="fechaSalidaHelp" class="form-text">Indica la fecha de salida del cliente en el alojamiento.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">No compartiremos tu email con nadie.</div>
        </div>
        </div>
        <div class="col-4">
          <div class="mb-3">
            <label for="agencia" class="form-label">Agencia</label>
            <input type="text" class="form-control" id="agencia" aria-describedby="nombreAgenciaHelp">
            <div id="nombreAgenciaHelp" class="form-text">Indica nombre de la agencia que aporta cliente.</div>
          </div>
          <div class="mb-3">
            <label for="alojamiento" class="form-label">Alojamiento</label>
            <input type="text" class="form-control" id="alojamiento" aria-describedby="alojamientoHelp">
            <div id="alojamientoHelp" class="form-text">Indica nombre del alojamiento donde se queda el cliente.</div>
          </div>
          <div class="mb-3">
            <label for="numeroReserva" class="form-label">Numero de la Reserva</label>
            <input type="text" class="form-control" id="numeroReserva" aria-describedby="numeroReservaHelp">
            <div id="numeroReservaHelp" class="form-text">Indica el numero o referencia de la reserva.</div>
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