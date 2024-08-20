@extends('pages.adminpanel.layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container-scroller">
        <!-- Nav bar section -->
            @include('pages.adminpanel.layouts.admin-nav')
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('pages.adminpanel.layouts.admin-nav-offcanvas')
            <!-- main panel -->
            @include('pages.adminpanel.layouts.admin-main-panel')
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
