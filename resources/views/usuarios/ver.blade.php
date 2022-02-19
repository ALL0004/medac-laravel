<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver centro: {{$usuario->nombre}}</title>
</head>
<body>

   <p>Id: {{$usuario->id_usuario}}</p>
   <p>Nombre: {{$usuario->nombre}}</p>
   <p>Apellidos: {{$usuario->apellidos}}</p>
   <p>DNI: {{$usuario->DNI}}</p>
   <p>Email: {{$usuario->email}}</p>
   <p>Telefono: {{$usuario->telefono}}</p>
   <p>Contraseña: {{$usuario->contraseña}}</p>
   <p>Categoria: {{$usuario->categoria}}</p>
   <p>Centro: {{$usuario->id_sede}}</p>
    <a href="/medac-laravel/public/usuarios">ATRÁS </a>
</body>
</html>