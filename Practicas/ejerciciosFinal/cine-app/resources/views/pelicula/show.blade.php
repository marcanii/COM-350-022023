<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h2>Datos Actualizados:</h2>
    <ul>
        <li>Id: {{$pelicula->id}}</li>
        <li>Titulo: {{$pelicula->titulo}}</li>
        <li>Descripcion: {{$pelicula->descripcion}}</li>
        <li>Duracion en min: {{$pelicula->duracion_min}}</li>
        <li>Genero: {{$pelicula->genero}}</li>
    </ul>
    <a href="{{route('pelicula.index')}}">Inicio</a>
</body>
</html>