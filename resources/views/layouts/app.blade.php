<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Financial</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/logo-small.svg') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/js/ajax.js') }}"></script>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4305420001332167" crossorigin="anonymous"></script>
    </head>
    <body>
        @if (Auth::check())
            <div class="d-flex">
                @include('layouts.sidebar')
                <div class="background-app">
                    @yield('content')
                </div>
            </div>
        @else
            @yield('content')
        @endif

        <script src="https://unpkg.com/lucide@latest"></script>
        <script>lucide.createIcons();</script>
    </body>
</html>
