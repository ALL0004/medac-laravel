<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver fichaje: {{$registroeditable->id_asistencia}}</title>
</head>
<body>
    <p>Id: {{$registroeditable->id_asistencia}}</p>
    <p>Entrada: {{$registroeditable->Fecha_entrada}}</p>
    <p>Salida: {{$registroeditable->Fecha_salida}}</p>
    <p>Validación: {{$registroeditable->validacion?"Validada":"No Validada"}}</p>
    <p>Usuario: {{$registroeditable->id_usuario}}</p>
    <a href="/medac-laravel/public/asistencias">ATRÁS </a>
</body>
</html>