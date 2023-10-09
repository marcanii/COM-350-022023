<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de las Tarifas</h1>

    <table>
        <tr>
            <th>Descripcion</th>
            <th>Horas</th>
            <th>Precio</th>
        </tr>
        @foreach ($tarifas as $tarifa)
        <tr>
            <td>{{$tarifa->descripcion}}</td>
            <td>{{$tarifa->horas}}</td>
            <td>{{$tarifa->precio}}</td>
            <td><a href="{{route('tarifa.edit',$tarifa->id)}}">Editar</a></td>
            <td>
                <form action="{{route('tarifa.destroy',$tarifa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('tarifa.create')}}">Registrar Tarifa</a>
</body>
</html>