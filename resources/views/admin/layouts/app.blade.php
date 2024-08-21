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

@include('admin.layouts.nav')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> @yield('curren_page')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@yield('curren_keyword') <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</div>

@include('admin.layouts.sidebar')

@include('admin.layouts.footer')

@include('admin.layouts.partials.scripts')

@yield('script')

</body>

</html>
