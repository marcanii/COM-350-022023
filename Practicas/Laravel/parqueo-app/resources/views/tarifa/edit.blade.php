<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('tarifa.update', $tarifa->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="descripcion">Descripcion: </label>
            <input type="text" name="descripcion" id="descripcion" value="{{$tarifa->descripcion}}">
        </div>
        <div>
            <label for="horas">Horas: </label>
            <input type="number" name="horas" id="horas" value="{{$tarifa->horas}}">
        </div>
        <div>
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" value="{{$tarifa->precio}}">
        </div>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>