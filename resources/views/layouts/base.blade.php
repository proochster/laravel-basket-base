<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    @include('components.navigation')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    @yield('title')
                </h1>
                <h2 class="subtitle">
                    Primary subtitle
                </h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @yield('content')
        </div>
    </section>

    @include('components.footer')    
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>