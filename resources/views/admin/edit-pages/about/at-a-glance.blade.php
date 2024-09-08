@extends('admin.layouts.app')

@section('title')
    Edit At A Glance
@endsection

@section('content')
    <x-forms action="{{ route('admin.pages.edit', ['slug' => 'at-a-glance', 'section' => 'at-a-glance']) }}" method="POST"
             enctype="multipart/form-data">
        <div class="row">
            <h2 class="text-center">Edit At A Glance</h2>
            <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Pages' => route('admin.pages'),
                'Edit At A Glance' => route('admin.page.view', ['slug' => 'home']),
            ]" />
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">About</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="10">Write here about college</textarea>
            </div>
            <x-form-input name="text" label="Youtube Video Url" name="video_url" placeholder="https://youtube.com/" container-class="col-sm-12" />
            <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />
            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12"
                          class="btn btn-primary" />
        </div>
    </x-forms>
@endsection

@section('script')
    <script>
        @vite(['resources/js/home.js'])
    </script>
@endsection
