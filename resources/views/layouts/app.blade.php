<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home - FEC')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @stack('styles')
</head>
<body>
<header>
    @include('partials.header')
    @include('partials.navbar')
</header>

<main>
    @yield('content')
</main>

<footer>
    @include('partials.footer')
</footer>

@stack('scripts') <!-- For additional scripts -->
</body>
</html>
