@extends('admin.layouts.app')

@section('title', 'All Pages')

@section('content')
<div class="container p-3">
    <x-admin.page-title title="Modify Notices" />

    @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') ?? '' }}
            </div>
        @endif
    <div class="container p-3">
        <table class="table table-striped" id="use-datatable">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Publish Date</th>
                    <th>Type</th>
                    <th>Session</th>
                    <th>Notice Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resources as $resource)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $resource->date }}</td>
                        <td>{{ $resource->type }}</td>
                        <td>{{ $resource->title }}</td>
                        <td>{{ $resource->session }}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#resourceModal{{ $resource->id }}">
                                Edit
                            </button>
                            <a href="{{ route('resources.delete', $resource->id) }}" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete?');">
                                 Delete
                            </a>
                        </td>
                    </tr>
                    <x-modal modal-id="resourceModal{{ $resource->id }}" modal-title="Edit Notice">

                    </x-modal>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
