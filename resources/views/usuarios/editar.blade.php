<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <form action="{{url('updateUsuario')}}/{{$id_usuario}}" method="post">
        @csrf
        <label for="id_usuario">ID</label>
        <input type="text" name="id_usuario" value="{{ $id_usuario }}">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="{{ $usuario->apellidos }}">
        <label for="DNI">Nombre</label>
        <input type="text" name="DNI" value="{{ $usuario->DNI }}">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ $usuario->email }}">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{ $usuario->telefono }}">
        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña" value="{{ $usuario->contraseña }}">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" value="{{ $usuario->categoria }}">
        <label for="id_sede">ID Sede</label>
        <input type="text" name="id_sede" value="{{ $usuario->id_sede}}">
        <input type="submit" >
    </form>
    
</body>
</html>