<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Asistencia</title>
</head>
<body>
    
    <form action="{{url('updateAsistencia')}}/{{$registroeditable -> id_asistencia}}" method="post">
        @csrf
        <label for="id_asistencia">ID:{{ $registroeditable->id_asistencia }}</label>
      
        <br><label for="Fecha_entrada">Fecha Entrada</label>
        <input type="datetime-local" name="Fecha_entrada" value="{{ date('Y-m-d\Th:m:s', strtotime($registroeditable->Fecha_entrada)) }}">
        <br><label for="Fecha_salida">Fecha Salida</label>
        <input type="datetime-local" name="Fecha_salida" value="{{ date('Y-m-d\Th:m:s', strtotime($registroeditable->Fecha_salida)) }}">
        <br><label for="validacion">Validación</label>
        <input type="number" name="validacion" value="{{ $registroeditable ->validacion}}">
        
        <br><label for="id_usuario">ID_Usuario</label>
        <input type="text" name="id_usuario" value="{{ $registroeditable->id_usuario }}">


        <br><input type="submit" >
    </form>
</body>
</html>