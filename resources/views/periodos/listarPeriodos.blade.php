<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Periodos</title>
  </head>
  <body>
    
    <!--Formulario de entrada de reservas -->
    <div class="container">
     
        <table class="table">
            <thead>
              <tr>
              <th>id</th>
              <th>FechaInicio</th>
              <th>FechaFin</th>
              <th>Empleado</th>
              
            </tr>
            </thead>
            <tbody>
              {{-- @foreach ($periodos as $periodo) --}}
            <tr>
                <td>{{ $periodo -> id }}</td>
                <td>{{ $periodo -> fechaInicio }}</td>
                <td>{{ $periodo -> fechaFin }}</td>
                <td>{{ $periodo -> empleadoId }}</td>

                
                
                <td> 
                <a href="{{ route('periodos.show', $periodo->id)}}">
                  {{ $periodo -> nombre }}
                  </a>
                </td> 
                <td>
                <!-- aqui ponemos boton de borrar por post ***** AZUL *****-->
                <td>
                    <div class="form-group">
                        <form action="{{ route('periodos.destroy',$periodo->id)}}" method="post">
                        @method ('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary">BORRAR</button>
                        </form>
                    </div>
                </td>
                </form>
                        </div>
                    </div>
                  </div>
                </div>
                </td>
              
               
            
            
            </tr>
                {{-- @endforeach --}}
                </tbody>
                </h5>
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