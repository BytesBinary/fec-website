@extends('admin.layouts.app')

@section('title')
    Edit Hero Section
@endsection

@section('content')
    <x-forms action="{{ route('admin.pages.edit', ['slug' => 'home', 'section' => 'hero_section']) }}" method="POST"
        enctype="multipart/form-data">
        <div class="row">
            <h2 class="text-center">Edit Hero Section</h2>
            <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Pages' => route('admin.pages'),
                'Edit Home' => route('admin.page.view', ['slug' => 'home']),
                'Edit Hero Section' => route('admin.pages.edit', ['slug' => 'home', 'section' => 'hero_section']),
            ]" />
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif

            <x-form-input name="title" label="Title" placeholder="Welcome To" container-class="col-sm-12" />
            <x-form-input name="name" label="Name" placeholder="Fardipur Engineering College"
                container-class="col-sm-12" />
            <x-form-input name="slogan" label="Slogan" placeholder="A place to learn and grow"
                container-class="col-sm-12" />
            <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />

            <h6>Hero Background Image</h6>
            <div id="background-images" class="row">
                <div class="col-sm-4">
                    <input type="file" name="bg_image[]" id="bg_image" class="form-control">
                    <small class="text-danger">
                        @error('bg_image.*')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>

            <div class="col-sm-12">
                <button type="button" id="add-image" class="btn btn-secondary my-3">Add More Images</button>
            </div>

            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12"
                class="btn btn-primary" />
        </div>
    </x-forms>
@if(!empty($section))
    <table class="table table-striped" id="use-datatable">
        <thead>
        <tr>
            <th>
                Title
            </th>
            <th>
                Name
            </th>
            <th>
                Slogan
            </th>
            <th>
                Image
            </th>
            <th>
                BG-Image
            </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{ $section['title'] }}
                </td>
                <td>
                    {{ $section['name'] }}
                </td>
                <td>
                    {{ $section['slogan'] }}
                </td>
                <td>
                    <img src="{{ asset($section['image']) }}" alt="img" class="admin-panel-table-image" />
                </td>
                <td>
                    @foreach($section['bg_images'] as $image)
                        <img src="{{ asset($image) }}" alt="img" class="admin-panel-table-image" />
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('admin.pages.meta-delete', ['id' => 'hero_section']) }}"
                       class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@else
    <div class="alert alert-info mt-4">No Data Available. Please Add Some.</div>
@endif
@endsection
@section('script')
    <script>
        @vite(['resources/js/home.js'])
    </script>
@endsection
