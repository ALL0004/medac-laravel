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
        <label for="sector">Sector</label>
        <input type="text" name="sector">
        <br><label for="localizacion">Localizacion</label>
        <input type="text" name="localizacion">
        <input type="submit" >
    </form>
</body>
</html>