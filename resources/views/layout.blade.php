<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yanpol - Tier Lists</title>
        <link rel="icon" type="image/png" href="./storage/img/Yanpol.png" />
        <!-- Resources -->
        @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
    <body class="antialiased">
        <noscript>
            <strong>Lo sentimos, pero {{env('APP_NAME')}} no funciona correctamente 
                    sin JavaScript habilitado. 
                    Por favor, activelo para continuar.</strong>
        </noscript>
        @yield('content')
        <div id="app">
            {{-- <app-component></app-component> --}}
            @yield('vue')
        </div>
    </body>
</html>
