<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Otras etiquetas head -->

    <!-- Agregar Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="font-sans bg-gray-100">
    <!-- Barra de navegación -->

    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">{{ config('app.name', 'Laravel') }}</h1>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Agregar Tailwind CSS y JavaScript (opcional) -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
