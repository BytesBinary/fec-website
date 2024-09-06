@extends('admin.layouts.app')

@section('title')
Edit FAQ Section
@endsection

@section('content')
<x-forms action="{{route('admin.pages.edit', ['slug' => 'home', 'section'=> 'faq_section'])}}" method="POST">
    <div class="row">
        <h2 class="text-center"> Edit FAQ Section </h2>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') ?? '' }}
        </div>
        @endif
        <x-form-input name="question" label="Question" value="Where is it located?" container-class="col-sm-6" />
        <x-form-input name="ans" label="Ans" placeholder="Give the ans" container-class="col-sm-6" />

        <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
    </div>
</x-forms>
<table class="table table-striped">
    <thead>
        <tr>
            <th>
                Question
            </th>
            <th>
                Ans
            </th>
        </tr>
    </thead>
    <tbody>
         @if(! empty($faq))
            @foreach($faq as $value)
            <tr>
                <td>
                    {{$value['meta_value']['question']}}
                </td>
                <td>
                    {{$value['meta_value']['ans']}}
                </td>
                <td>
                    <a href="{{route('admin.pages.meta-delete',['id'=>$value['id']])}}" class="btn btn-danger">Delete</a>
                </td>
            @endforeach
            @else
            <tr>
                <td colspan="4">
                    <div class="alert alert-info mt-4">No Questions Available. Please Add Some.</div>
                </td>
            </tr>
         @endif
    </tbody>
</table>
@endsection
