<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sedes</title>
</head>
<body>
    <table style="border: 1px solid black">
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
                    <a href="">Aiudame</a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </td>
            </tr>
            
        @endforeach
    </table>
</body>
</html>