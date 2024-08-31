@extends('admin.layouts.app')

@section('title')
    Edit Hero Section
@endsection

@section('content')
    <x-forms action="{{route('admin.pages.edit',['slug'=>'home','section'=>'hero_section'])}}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <h2 class="text-center">Edit Hero Section</h2>

            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif

            <x-form-input name="title" label="Title" placeholder="Welcome To" container-class="col-sm-12" />
            <x-form-input name="name" label="Name" placeholder="Fardipur Engineering College" container-class="col-sm-12" />
            <x-form-input name="slogan" label="Slogan" placeholder="A place to learn and grow" container-class="col-sm-12" />
            <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />

            <h6>Hero Background Image</h6>
            <div id="background-images" class="row">
                <div class="col-sm-4">
                    <input type="file" name="bg_image[]" id="bg_image" class="form-control">
                    <small class="text-danger">@error('bg_image.*')
                        {{ $message }}
                        @enderror</small>
                </div>
            </div>

            <div class="col-sm-12">
                <button type="button" id="add-image" class="btn btn-secondary my-3">Add More Images</button>
            </div>

            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
        </div>
    </x-forms>
@endsection
@section('script')
    <script>
        @vite(['resources/js/home.js'])
    </script>
@endsection
