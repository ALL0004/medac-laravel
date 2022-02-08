<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Centro</title>
</head>
<body>
    
    <form action="{{url('newCentro')}}" method="post">
        @csrf
        <label for="id_sede"></label>
        <input type="text" name="id_sede">
        <label for="sector"></label>
        <input type="text" name="sector">
        <label for="localizacion"></label>
        <input type="text" name="localizacion">
        <input type="submit" >
    </form>
</body>
</html>