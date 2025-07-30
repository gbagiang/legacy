<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <header>
        <div>
            <a href="{{ url('/') }}">
                {{ config('app.name', 'LaravelApp') }}
                <img src="/images/logo.png" alt={{ config('app.name') }}>
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            &copy; {{ date('Y') }} {{ config('app.name') }}. Все права защищены.
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>

</html>
