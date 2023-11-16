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
    <h1>Listado de las Películas</h1>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Titulo</th>
                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Descripcion</th>
                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Duracion en min</th>
                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Genero</th>
                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peliculas as $pelicula)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $pelicula->titulo }}</td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $pelicula->descripcion }}</td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $pelicula->duracion_min }}</td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                        {{ $pelicula->genero }}</td>
                                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"><a
                                            href="{{ route('pelicula.edit', $pelicula->id) }}">Editar</a></td>
                                    <td>
                                        <form action="{{ route('pelicula.destroy', $pelicula->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('pelicula.create') }}">Agregar Pelicula</a>

</body>

</html>
