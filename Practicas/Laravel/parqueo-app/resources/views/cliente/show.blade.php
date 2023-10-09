<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Placa: {{$cliente->placa}}</li>
            <li>Tipo:{{$cliente->tipo_documento_id}}</li>
            <li>Doc:{{$cliente->numero_documento}}</li>
            <li>Nombre:{{$cliente->nombre}}</li>
            <li>Apellido{{$cliente->apellido}}</li>
            <li>Telefono:{{$cliente->telefono}}</li>
            <li>fecha:{{$cliente->fecha_nacimiento}}</li>
    </ul>
    <a href="{{route('cliente.index')}}">Inicio</a>
</body>
</html>
