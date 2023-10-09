<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('tarifa.store')}}" method="POST">
        @csrf
        <div>
            <label for="descripcion">Descripcion: </label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div>
            <label for="horas">Horas: </label>
            <input type="number" name="horas" id="horas">
        </div>
        <div>
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio">
        </div>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>