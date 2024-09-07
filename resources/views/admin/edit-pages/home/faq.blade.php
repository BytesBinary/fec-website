@extends('admin.layouts.app')

@section('title')
Edit FAQ Section
@endsection

@section('content')
<x-forms action="{{route('admin.pages.edit', ['slug' => 'home', 'section'=> 'faq_section'])}}" method="POST">
    <div class="row">
        <h2 class="text-center"> Edit FAQ Section </h2>
        <x-breadcrumbs :breadcrumbs="[
                'Dashboard' => route('admin.dashboard'),
                'Pages' => route('admin.pages'),
                'Edit Home' => route('admin.page.view', ['slug' => 'home']),
                'Edit Faq Section' => route('admin.pages.edit', ['slug' => 'home', 'section' => 'faq_section']),
            ]" />
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') ?? '' }}
        </div>
        @endif
        <x-form-input name="question" label="Question" placeholder="Where is it located?" container-class="col-sm-6" />
        <x-form-input name="ans" label="Ans" placeholder="Give the ans" container-class="col-sm-6" />
        <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
    </div>
</x-forms>
@if(! empty($section))
    <table class="table table-striped" id="use-datatable">
        <thead>
        <tr>
            <th>
                Question
            </th>
            <th>
                Ans
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($section as $sec)
            <tr>
                <td>
                    {{$sec['meta_value']['question']}}
                </td>
                <td>
                    {{$sec['meta_value']['ans']}}
                </td>
                <td>
                    <a href="{{route('admin.pages.meta-delete',['id'=>$sec['id']])}}" class="btn btn-danger">Delete</a>
                </td>
        @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-info mt-4">No Questions Available. Please Add Some.</div>
@endif
@endsection
