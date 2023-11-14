<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de clientes</h1>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Editorial ID</th>
                <th>Edcion</th>    
                <th>Pais</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{$libro->tirulo}}</td>
                <td>{{$libro->editorial_id}}</td>
                <td>{{$libro->edicion}}</td>
                <td>{{$libro->pais}}</td>
                <td>{{$libro->precio}}</td>
                <td><a href="{{route('cliente.show',$cliente->id)}}">Mostrar</a>
                    <a href="{{route('cliente.edit',$cliente->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('cliente.destroy',$cliente->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>