@extends('admin.layouts.app')

@section('title')
    Edit Administration Section
@endsection

@section('content')
    <x-forms action="{{route('admin.pages.edit', ['slug' => 'home', 'section'=> 'short_details_section'])}}" method="POST" >
        <div class="row">
            <h2 class="text-center"> Edit Short Details Section </h2>
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') ?? '' }}
                </div>
            @endif
            <x-form-input name="established_text" label="Established" value="Established" container-class="col-sm-6" />
            <x-form-input name="established_year" label="Established Year" placeholder="Enter Established Year" container-class="col-sm-6" />

            <x-form-input name="departments_text" label="Departments" value="Departments" container-class="col-sm-6" />
            <x-form-input name="departments_value" label="Departments Number" placeholder="Enter Department Value" container-class="col-sm-6" />

            <x-form-input name="students_text" label="Students" value="Students" container-class="col-sm-6" />
            <x-form-input name="students_value" label="Students Number" placeholder="Enter Students Value" container-class="col-sm-6" />

            <x-form-input name="faculty_member_text" label="Faculty" value="Faculty" container-class="col-sm-6" />
            <x-form-input name="faculty_member_value" label="Faculty Number" placeholder="Enter Faculty Value" container-class="col-sm-6" />

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
                    Count
                </th>
            </tr>
        </thead>
        <tbody>
            @if (! empty($short_details_section->meta_value) )
                <tr>
                    <td>
                        {{$sh['establish_text']}}
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
            @endif

        </tbody>
    </table>
@endsection
