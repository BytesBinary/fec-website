@extends('admin.layouts.app')

@section('title')
    Edit Administration Section
@endsection

@section('content')
    <x-forms action="{{route('admin.pages.edit',['slug'=>'home','section'=>'administration_section'])}}" method="POST" enctype="multipart/form-data" >
        <div class="row">
            <h2 class="text-center"> Edit Administration Section </h2>
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif

            <x-form-input name="name" label="Name" placeholder="Enter your name" container-class="col-sm-12" />
            <x-form-input name="designation" label="Name" placeholder="Designation" container-class="col-sm-12" />
            <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />
            <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />

        </div>
    </x-forms>
    <table class="table table-striped">
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
        @foreach($administration_section as $key=>$section)
            <tr>
                <td>
                    {{$section['meta_value']['name']}}
                </td>
                <td>
                    {{$section['meta_value']['designation']}}
                </td>
                <td>
                    <img src="{{asset($section['meta_value']['image'])}}" alt="{{$section['meta_value']['name']}}" style="width: 50px; height: 50px;">
                </td>
                <td>
                    <a href="{{route('admin.pages.meta-delete',['id'=>$section['id']])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
