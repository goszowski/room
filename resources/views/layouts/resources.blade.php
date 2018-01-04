<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {!! Minify::stylesheet([
        '/assets/bootstrap/css/bootstrap.min.css',
        '/assets/iconic/open-iconic-bootstrap.min.css',
    ]) !!}
</head>
<body>
    @yield('app')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {!! Minify::javascript([
        '/assets/bootstrap/js/bootstrap.min.js',
    ]) !!}
</body>
</html>
