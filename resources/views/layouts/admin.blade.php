<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'sito bello') }} - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- defer per mettere script nell'head  --}}
</head>
<body>
    {{-- chiamo componente navbar e imposto il colore --}}
    <x-navbar color="dark" />

    @yield('content')
</body>
</html>
