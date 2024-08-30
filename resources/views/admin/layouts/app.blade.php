<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    
    @include('admin.layouts.partials.styles')

    @yield('style')
</head>

<body>
    <div class="container-scroller">

        @include('admin.layouts.nav')

        <div class="container-fluid page-body-wrapper">

            @include('admin.layouts.sidebar')

            @yield('content')
        </div>

        @include('admin.layouts.footer')

    </div>

    @include('admin.layouts.partials.scripts')

    @yield('script')
</body>

</html>
