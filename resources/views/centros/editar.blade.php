<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Centro</title>
</head>
<body>
    
    <form action="{{url('updateCentro')}}/{{$id_sede}}" method="post">
        @csrf
        <label for="id_sede"></label>
        <input type="text" name="id_sede" value="{{ $id_sede }}">
        <label for="sector"></label>
        <input type="text" name="sector" value="{{ $sector->sector }}">
        <label for="localizacion"></label>
        <input type="text" name="localizacion" value="{{ $sector->localizacion }}">
        <input type="submit" >
    </form>
</body>
</html>