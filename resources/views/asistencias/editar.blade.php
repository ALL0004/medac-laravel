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
        <label for="id_asistencia"></label>
        <input type="text" name="id_asistencia" value="{{ $registroeditable->id_asistencia }}">
        <label for="name"></label>
        <input type="datetime-local" name="Fecha_entrada" value="{{ date('Y-m-d\Th:m:s', strtotime($registroeditable->Fecha_entrada)) }}">
        <label for="Fecha_salida"></label>
        <input type="datetime-local" name="Fecha_salida" value="{{ date('Y-m-d\Th:m:s', strtotime($registroeditable->Fecha_salida)) }}">
        <label for="id_sede"></label>
        <input type="number" name="validacion" value="{{ $registroeditable ->validacion}}">
        
        <label for="id_usuario"></label>
        <input type="text" name="id_usuario" value="{{ $registroeditable->id_usuario }}">


        <input type="submit" >
    </form>
</body>
</html>