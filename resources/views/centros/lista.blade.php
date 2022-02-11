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
        <a href="./centros/crear">Crear</a>
    </p>

    <table align="center" border="1">
        @foreach ($centros as $sede)
        <tr>
            <td>{{$sede->id_sede}}</td>
            <td>{{$sede->sector}}</td>
            <td>{{$sede->localizacion}}</td>
            <td>
                <a href="./verCentro/{{$sede->id_sede}}">Ver</a>
                <a href="./editCentro/{{$sede->id_sede}}">Editar</a>
                <a href="./deleteCentro/{{$sede->id_sede}}">Borrar</a>

            </td>
        </tr>

        @endforeach
    </table>
</body>

</html>