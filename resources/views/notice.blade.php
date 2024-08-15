@extends("layouts.app")

@section('title')
    Notice
@endsection

@section('style')
    <style>
        .dataTables_length label{
            float: left !important;
        }
        .dataTables_info{
            float: left !important;
        }
        .dataTables_filter label{
            float: right !important;
        }
        .dataTables_paginate ul {
            float: right !important;
        }
    </style>
@endsection

@section('content')
    <div class="container section-title page-top-section" data-aos="fade-down">
        <h2>{{ $page['page_title']  }}</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" class="row-select"></td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts.partials.datatable.datatable-script')
@endsection
