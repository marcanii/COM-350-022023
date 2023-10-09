<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('cliente.store')}}" method="POST">
        @csrf
        <div>
            <label for="placa">Placa</label>
            <input type="text" name="placa" id="placa">
            <label for="tipo_documento_id">Tipo Documento</label>
            <input type="number" name="tipo_documento_id" id="tipo_documento_id">
            <label for="numero_documento">Numero Documento</label>
            <input type="number" name="numero_documento" id="numero_documento">
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" id="telefono">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
            
        </div>
        <div>
            <input type="submit" value="Registrar">
        </div>
    </form>
    
</body>
</html>
