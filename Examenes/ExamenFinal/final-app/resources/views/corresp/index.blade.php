
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
                      <th scope="col" class="px-6 py-4">ID</th>
                      <th scope="col" class="px-6 py-4">Fecha</th>
                      <th scope="col" class="px-6 py-4">Remitente</th>    
                      <th scope="col" class="px-6 py-4">Asunto</th>
                      <th scope="col" class="px-6 py-4">Cite</th>
                      <th scope="col" class="px-6 py-4">Destinatario</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($correspondencias as $correspondencia)
                      <tr class="border-b">
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->id}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->fecha}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->remitente}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->asunto}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->cite}}</td>
                          <td class="whitespace-nowrap px-6 py-4">{{$correspondencia->destinatario_id}}</td>
                          <td><a href="{{ route('corresp.edit', $correspondencia->id) }}">Editar</a>
                            <a href="{{route('corresp.show', $correspondencia->id)}}">Mostrar</a>
                          </td>
                          <td>
                            <form action="{{route('corresp.destroy', $correspondencia->id)}}" method="post">
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