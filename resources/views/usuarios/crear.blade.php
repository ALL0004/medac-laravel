<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <form action="{{url('newUsuario')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <label for="DNI">DNI</label>
        <input type="text" name="DNI">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">
        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria">
        <label for="id_sede">ID Sede</label>
        <input type="text" name="id_sede">
        <input type="submit" >
    </form>
    
</body>
</html>