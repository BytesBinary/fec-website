<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    @include('layouts.partials.styles')

    @yield('style')

</head>
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

@include('layouts.partials.below-footer')

@include('layouts.partials.scripts')

@yield('script')

</body>
</html>
