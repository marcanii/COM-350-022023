<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Estilos básicos del menú */
        .menu {
            background-color: #333;
            /* Color de fondo */
            padding: 10px;
            /* Espaciado interno */
        }

        .menu ul {
            list-style-type: none;
            /* Eliminar los puntos de la lista */
            margin: 0;
            padding: 0;
        }

        .menu li {
            display: inline-block;
            /* Mostrar elementos en línea */
            margin-right: 20px;
            /* Espaciado entre elementos */
        }

        .menu a {
            text-decoration: none;
            /* Eliminar subrayado del enlace */
            color: white;
            /* Color del texto */
            font-weight: bold;
            /* Negrita */
        }

        /* Estilo de enlace al pasar el ratón por encima */
        .menu a:hover {
            color: #ffcc00;
            /* Cambiar color al pasar el ratón por encima */
        }
    </style>
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('pelicula.index') }}">Listar Peliculas</a></li>
            <li><a href="{{ route('pelicula.create') }}">Agregar Pelicula</a></li>
        </ul>
    </nav>
    <form action="{{route('pelicula.store')}}" method="POST">
        @csrf
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div>
            <label for="duracion_min">Duracion en min</label>
            <input type="number" name="duracion_min" id="duracion_min">
        </div>
        <div>
            <label for="genero">Genero</label>
            <select name="genero" id="genero">
                <option value="Accion">Accion</option>
                <option value="Comedia">Comedia</option>
                <option value="Drama">Drama</option>
                <option value="Terror">Terror</option>
                <option value="CienciaFiccion">Ciencia Ficcion</option>
                <option value="Musical">Musical</option>
            </select>
        </div>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>