<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Id: {{$tarifa->id}}</li>
        <li>Descripcion: {{$tarifa->descripcion}}</li>
        <li>Horas: {{$tarifa->horas}}</li>
        <li>Precio: {{$tarifa->precio}}</li>
    </ul>
    <a href="{{route('tarifa.index')}}">Inicio</a>
</body>
</html>