<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        @include('menu')
        <ul>
            <li>ID: {{$correspondencia->id}}</li>
                <li>Fecha:{{$correspondencia->fecha}}</li>
                <li>Remitente:{{$correspondencia->remitente}}</li>
                <li>Asunto:{{$correspondencia->asunto}}</li>
                <li>Cite{{$correspondencia->cite}}</li>
                <li>Id_destinatario:{{$correspondencia->destinatario_id}}</li>
        </ul>
        <meta http-equiv="refresh" content="3; url={{route('corresp.index')}}" />
    
    </body>
</html>