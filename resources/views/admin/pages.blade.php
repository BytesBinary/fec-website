@extends('admin.layouts.app')

@section('title', 'All Pages')

@section('content')
    <x-admin.page-title title="All Pages" />
    <div class="overflow-auto">
        <table class="table align-middle mb-0 bg-white" id="use-datatable">
            <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Page Title</th>
                <th>Page Type</th>
                <th>Page Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>
                        <p class="text-muted mb-0">{{$page->id}}</p>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{$page->page_title}}</p>
                                <p class="text-muted mb-0">{{$page->page_slug}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{$page->page_type}}</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">{{$page->page_status}}</span>
                    </td>
                    <td>
                        <a href="{{route('admin.pages.edit', ['slug'=>$page->page_slug])}}">
                            <button type="button" class="btn btn-link">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
