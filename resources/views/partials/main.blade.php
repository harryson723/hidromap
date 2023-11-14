<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>

<body>
    <nav class="nav">
        <li>
            @if (session('rol') == 'proveedor')
                <div class="nav-options">
                    <ul><a href="{{ route('points') }}">Ver puntos</a></ul>
                    <ul><a href="{{ route('addPoint') }}">Añadir punto</a></ul>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @endif
            @if (session('rol') == 'usuario')
                <div class="nav-options">
                    <ul><a href="{{ route('dashboard') }}">Inicio</a></ul>
                    <ul><a href="{{ route('addsuggestion') }}">Añadir una sugerencia</a></ul>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @endif
            @if (session('rol') == 'admin')
                <div class="nav-options">
                    <ul><a href="{{ route('usersAdmin') }}">Proveedores</a></ul>
                    <ul><a href="{{ route('registerProvider') }}">Registrar proveedor</a></ul>
                    <ul><a href="{{ route('suggestion') }}">Ver sugerencias</a></ul>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @endif
        </li>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
