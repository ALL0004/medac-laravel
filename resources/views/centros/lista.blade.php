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
        @foreach ($centros as $sede)
            <tr style="border: 1px solid black">
                <td style="border: 1px solid black">{{$sede->id_sede}}</td>
                <td style="border: 1px solid black">{{$sede->sector}}</td>
                <td style="border: 1px solid black">{{$sede->localizacion}}</td>
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