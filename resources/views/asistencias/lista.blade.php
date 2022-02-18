<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>
</head>
<body>
    <p align="center">
        <a href="./asistencias/crear">Crear</a>
    </p>

    <table align="center" border="1">
        @foreach ($asistencias as $asistencia)
            <tr style="border: 1px solid black">
                <td style="border: 1px solid black">{{$asistencia->id_asistencia}}</td>
                <td style="border: 1px solid black">{{$asistencia->Fecha_entrada}}</td>
                <td style="border: 1px solid black">{{$asistencia->Fecha_salida}}</td>
                <td style="border: 1px solid black">{{$asistencia->validacion}}</td>
                <td style="border: 1px solid black">{{$asistencia->id_usuario}}</td>
                <td>
                    <a href="./verAsistencia/{{$asistencia->id_asistencia}}">Ver</a>
                    <a href="./editAsistencia/{{$asistencia->id_asistencia}}">Editar</a>
                    <a href="./deleteAsistencias/{{$asistencia->id_asistencia}}">Borrar</a>
                </td>
                
            </tr>
            
        @endforeach
    </table>
</body>
</html>