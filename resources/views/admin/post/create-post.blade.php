@extends('admin.layouts.app')

@section('title', 'Add New Post')

@section('content')
    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-admin.page-title title="Add a post" />
        <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Create Post' => route('admin.posts.create'),
            ]" />
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') ?? '' }}
            </div>
        @endif
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="col-sm-12">
                    <x-form-input type="text" name="title" label="Title" />
                </div>
                <div class="col-sm-12">
                    <label for="type">Select Type</label>
                    <select class="form-select" name="type">
                        <option>Select</option>
                        <option value="event">Event</option>
                        <option value="research">Research</option>
                    </select>
                </div>
                <div class="col-sm-12">
                    <x-form-input type="date" name="date" label="Post Date" />
                </div>
                <div class="col-sm-12">
                    <x-form-input type="file" name="cover_image" label="Cover Photo" />
                </div>
                <div>
                    <label for="content">Content</label>
                    <div id="content" style="height:400px;"></div>
                    <textarea name="content" id="hidden-content" style="display:none;"></textarea>
                </div>
                <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12 my-3"
                              class="btn btn-primary" />
            </div>
        </div>
    </form>
@endsection
