<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Asistencia</title>
</head>
<body>
    
    <form action="{{url('newAsistencia')}}" method="post">
        @csrf
        <label for="id_asistencia"></label>
        <input type="text" name="id_asistencia">
        <label for="Fecha_entrada"></label>
        <input type="datetime-local" name="Fecha_entrada">
        <label for="Fecha_salida"></label>
        <input type="datetime-local" name="Fecha_salida">
        <label for="validacion"></label>
        <input type="number" name="validacion" >
        <label for="id_usuario"></label>
        <input type="text" name="id_usuario">
       
        <input type="submit" >
    </form>
</body>
</html>