<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LogIt | Behind every project hides an adventure</title>
    <meta name="description" content="Share every step of your project and wow your firends and colleagues!">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.es6.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" @if( Request::is('login') || Request::is('register') ) class="auth-page" @endif>
        @include('common.header')

        <main class="main @if( Request::is('login') || Request::is('register') ) {{Request::path()}}-section @endif">
            @yield('content')
        </main>

        @include('common.footer')
    </div>
</body>
</html>
