<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>

    @include('pages.adminpanel.layouts.partials.admin-styles')

    @yield('style')

</head>

<body>

    @include('pages.adminpanel.layouts.admin-nav')

    @yield('content')

    @include('pages.adminpanel.layouts.admin-footer')

    @include('pages.adminpanel.layouts.partials.admin-scripts')

    @yield('script')

</body>

</html>
