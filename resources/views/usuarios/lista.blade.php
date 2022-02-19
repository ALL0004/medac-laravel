<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sedes</title>
</head>
<body>

    <p align="center">
        <a href={{URL::asset("admin")}} class="btn btn-light" role="button">Volver a administrador</a>

    </p>

    <p align="center">
        <a href="./usuarios/crear">Crear</a>
    </p>

    <table align="center" border="1">
        @foreach ($usuarios as $usuario)
            <tr style="border: 1px solid black">
                <td style="border: 1px solid black">{{$usuario->id_usuario}}</td>
                <td style="border: 1px solid black">{{$usuario->nombre}}</td>
                <td style="border: 1px solid black">{{$usuario->apellidos}}</td>
                <td style="border: 1px solid black">{{$usuario->DNI}}</td>
                <td style="border: 1px solid black">{{$usuario->email}}</td>
                <td style="border: 1px solid black">{{$usuario->telefono}}</td>
                <td style="border: 1px solid black">{{$usuario->contraseña}}</td>
                <td style="border: 1px solid black">{{$usuario->categoria}}</td>
                <td style="border: 1px solid black">{{$usuario->id_sede}}</td>
                <td>
                    <a href="./verUsuario/{{$usuario->id_usuario}}">Ver</a>
                    <a href="./editUsuario/{{$usuario->id_usuario}}">Editar</a>
                    <a href="./deleteUsuario/{{$usuario->id_usuario}}">Borrar</a>
                    
                </td>
            </tr>
            
        @endforeach
    </table>
</body>
</html>