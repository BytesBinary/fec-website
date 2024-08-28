<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>

    @include('pages.layouts.partials.styles')

    @yield('style')

</head>
<body>

@include('pages.layouts.header')

@yield('content')

@include('pages.layouts.footer')

@include('pages.layouts.partials.below-footer')

@include('pages.layouts.partials.scripts')

@yield('script')

</body>
</html>
