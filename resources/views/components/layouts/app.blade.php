<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>

<body class="bg-[url({{asset("common-background.jpeg")}})]">
    <x-partials.header />
    <x-partials.navigation />
    {{ $slot }}
    <x-partials.footer />
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>

</html>
