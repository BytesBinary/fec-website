<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    @include('layout.partials.styles')

    @yield('style')
</head>
<body>

@include('layout.header')

@yield('content')

@yield('script')

@include('layout.footer')

@include('layout.partials.below-footer')

@include('layout.partials.scripts')

</body>
</html>
