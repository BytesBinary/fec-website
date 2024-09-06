@extends('admin.layouts.app')

@section('title')
    Edit Administration Section
@endsection

@section('content')
    <x-forms action="{{ route('admin.pages.edit', ['slug' => 'home', 'section' => 'administration_section']) }}" method="POST"
        enctype="multipart/form-data">
        <div class="row">
            <h2 class="text-center"> Edit Administration Section </h2>
            <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Pages' => route('admin.pages'),
                'Edit Home' => route('admin.page.view', ['slug' => 'home']),
                'Edit Administration Section' => route('admin.pages.edit', ['slug' => 'home', 'section' => 'administration_section']),
            ]" />
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif

            <x-form-input name="name" label="Name" placeholder="Enter your name" container-class="col-sm-12" />
            <x-form-input name="designation" label="Name" placeholder="Designation" container-class="col-sm-12" />
            <x-form-input type="file" name="cover" label="Image" container-class="col-sm-12" />
            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12"
                class="btn btn-primary" />

        </div>
    </x-forms>
    @if (!empty($section))
    <table class="table table-striped" id="use-datatable">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Designation
                </th>
                <th>
                    Image
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
                @foreach ($section as $key => $sec)
                    <tr>
                        <td>
                            {{ $sec['meta_value']['name'] }}
                        </td>
                        <td>
                            {{ $sec['meta_value']['designation'] }}
                        </td>
                        <td>
                            <img src="{{ asset($sec['meta_value']['image']) }}"
                                alt="{{ $sec['meta_value']['name'] }}" class="admin-panel-table-image">
                        </td>
                        <td>
                            <a href="{{ route('admin.pages.meta-delete', ['id' => $sec['id']]) }}"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-info mt-4">No Administrator available. Please add some.</div>
    @endif
@endsection
