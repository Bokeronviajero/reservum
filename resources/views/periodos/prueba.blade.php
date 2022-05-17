<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    formulario prueba
    <form action="{{route ('periodos.prueba_store')}}" method="POST">
        @csrf
        <label for="nombre">empleado_id</label>
        <input type="text" name="empleado_id" id="empleado_id">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>