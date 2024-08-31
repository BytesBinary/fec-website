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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$page->page_slug}}">
                            Edit
                        </button>
                    </td>
                </tr>
            @endforeach
            <x-modal modal-id="home" modal-title="Sections" >
                <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'hero_section'])}}" card-title="Hero Section" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="hero_section" />
                <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'administration_section'])}}" card-title="Administration" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="administration_section" />
                <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'short_details_section'])}}" card-title="Short Details" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="short_details_section" />
                <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'online_services_section'])}}" card-title="Online Services" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="online_services_section" />
                <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'faq_section'])}}" card-title="FAQ" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="faq_section" />
            </x-modal>
            </tbody>
        </table>
    </div>
@endsection
