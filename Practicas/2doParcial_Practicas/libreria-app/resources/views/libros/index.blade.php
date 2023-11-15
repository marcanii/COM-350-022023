
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        @include('menu')
        <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                  <thead class="border-b font-medium">
                    <tr>
                      <th scope="col" class="px-6 py-4">id</th>
                      <th scope="col" class="px-6 py-4">Titulo</th>
                      <th scope="col" class="px-6 py-4">Editorial</th>    
                      <th scope="col" class="px-6 py-4">Edicion</th>
                      <th scope="col" class="px-6 py-4">pais</th>
                      <th scope="col" class="px-6 py-4">precio</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($libros as $libro)
                      <tr class="border-b">
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->id}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->titulo}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->editorial->nombre}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->edicion}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->pais}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$libro->precio}}</td>
                          <td><a href="{{route('libro.edit',$libro->id)}}">Editar</a></td>
                          <td>
                            <form action="{{route('libro.destroy',$libro->id)}}" method="post">
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
    </body>
</html>