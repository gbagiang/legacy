<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Цифровое наследие Севастополя: 3D-модели памятников">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <x-header :modifier="$headerModifier ?? ''" />

    <main class="main">
        @yield('content')
    </main>

    <x-footer />

    @vite(['resources/js/app.js'])
</body>

</html>
