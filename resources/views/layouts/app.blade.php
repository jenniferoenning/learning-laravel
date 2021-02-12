<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('site.title', 'ListDevs') }}</title>
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div>
        @include(PLATFORM . '/partials/header')
        <main>
            @yield('content')
        </main>
        @include(PLATFORM . '/partials/footer')
    </div>

    @stack('scripts')
</body>
</html>
