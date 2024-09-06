@extends('admin.layouts.app')

@section('title')
    Edit Online Services Section
@endsection

@section('content')
    <x-forms action="{{ route('admin.pages.edit', ['slug' => 'home', 'section' => 'online_services_section']) }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <h2 class="text-center mb-4"> Edit Online Services Section </h2>
            <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Pages' => route('admin.pages'),
                'Edit Home' => route('admin.page.view', ['slug' => 'home']),
                'Edit Online Services Section' => route('admin.pages.edit', ['slug' => 'home', 'section' => 'online_services_section']),
            ]" />
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <x-form-input name="title" label="Title" placeholder="Enter Title" container-class="col-sm-12 mb-3" />
            <x-form-input name="description" label="Description" placeholder="Enter Description" container-class="col-sm-12 mb-3" />
            <x-form-input name="btn-url" label="Button URL" placeholder="Enter Button URL" container-class="col-sm-12 mb-3" />
            <x-form-input name="btn-txt" label="Button Text" placeholder="Enter Button Text" container-class="col-sm-12 mb-3" />
            <x-form-input type="file" name="image" label="Upload Image" container-class="col-sm-12 mb-3" />
            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12 mb-3" class="btn btn-primary" />
        </div>
    </x-forms>

    @if (!empty($section))
        <table class="table table-striped mt-4" id="use-datatable">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($section as $sec)
                    <tr>
                        <td>{{ $sec['meta_value']['title'] }}</td>
                        <td>{{ $sec['meta_value']['description'] }}</td>
                        <td>
                            <img src="{{ asset($sec['meta_value']['image']) }}" alt="{{ $sec['meta_value']['title'] }}" style="width: 50px; height: 50px;">
                        </td>
                        <td>
                            <a href="{{ route('admin.pages.meta-delete', ['id' => $sec['id']]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info mt-4">No online services available. Please add some.</div>
    @endif
@endsection
