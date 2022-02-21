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
        <p>ID: {{ $id_sede }}</p>
        <label for="sector"></label>
        <p>Sector: </p><input type="text" name="sector" value="{{ $sector->sector }}">
        <label for="localizacion"></label>
        <p>Localización: </p><input type="text" name="localizacion" value="{{ $sector->localizacion }}">
        <input type="submit" >
    </form>
</body>
</html>