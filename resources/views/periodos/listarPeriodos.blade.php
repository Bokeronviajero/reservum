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
              @foreach ($periodos as $periodo)
            <tr>
                <td>{{ $periodo -> id }}</td>
                <td>{{ $periodo -> fechaInicio }}</td>
                <td>{{ $periodo -> fechaFin }}</td>
                <td>{{ $periodo -> empleadoId }}</td>

                
                
                <td> 
                <a href="{{ route('articulos.show', $articulo->id)}}">
                  {{ $articulo -> nombre }}
                  </a>
                </td> 
                <td>
                <!-- aqui ponemos boton de borrar por post ***** AZUL *****-->
                <td>
                    <div class="form-group">
                        <form action="{{ route('periodos.destroy',$articulo->id)}}" method="post">
                        @method ('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary">BORRAR</button>
                        </form>
                    </div>
                </td>
                <!-- Button trigger modal  1 ****** ROJO ********-->
                <td>            
                <button type="button" class="btn btn-danger" id="btn_confirm" data-toggle="modal" data-target="#delete_modal_{{$articulo->id}}">
                Borrar con modal
                </button>
                </td>
                <td>
                
                <!-- formulario para la eliminacion -->
                <form id="delete_form" action="{{ route('periodos.destroy',$articulo->id)}}" method="post">
                @method ('DELETE')
                @csrf
                </form>
                <!-- Modal ROJO ******* MODAL PARA ELIMINACION **************************-->
                <div class="modal fade" id="delete_modal_{{$periodo->id}}" tabindex="-1" role="dialog">   >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Borrado de periodo</h5>
                            <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                            <p>Vas a eliminar el periodo <span id="zona_de_nombre">{{$periodo->id}}</span>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                            <form action="{{ route('periodos.destroy',$periodo->id)}}" method="post">
                            @method ('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">BORRAR</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
                </td>
                <!-- fin del modal ******************* -->
                <!-- Button trigger modal  2 ****** GRIS ********-->
                <td>            
                <button type="button" class="btn btn-secondary" id="btn_confirm2" data-toggle="modal" data-target="#delete_modal2_{{$periodo->id}}">
                Borrar con modal jquery
                </button>
                </td>
            
                <!-- ********** Button trigger EDITAR  ************* -->
                <td>
                <!-- formulario para la editar -->
                <div class="form-group">
                <a href="{{ route('periodos.edit',$periodo->id)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
                        
                </div>
                </td>
               
            
            
            </tr>
                @endforeach
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