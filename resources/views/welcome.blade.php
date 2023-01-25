<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav>
            <a href="/">Principal</a>
            <a href="/">Nosotros</a>
            <a href="/">Tienda</a>
        </nav>
        <h1 class="text-4xl font-extrabold">Página Principal</h1>
    </body>
</html>
