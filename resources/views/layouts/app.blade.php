<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title', 'Laravel Dc Comics')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- favicon -->
        <link rel="icon" href="{{asset('images/favicon.icon')}}">
    </head>
    <body>
        <header>
            @include('partials.header')
        </header>
        <section>
        @yield('content')
        </section>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
