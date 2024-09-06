@extends('admin.layouts.app')

@section('title', 'All Pages')

@section('content')
    <x-admin.page-title title="Upload Notice" />
    <div class="row">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') ?? '' }}
            </div>
        @endif

        <div class="container d-flex align-items-center justify-content-center">

            <div class="col-sm-6">
                <x-forms action="{{ route('admin.resources.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-form-input name="title" label="Notice Title" placeholder="Add Title" container-class="col-sm-12" />
                    <x-form-input type="date" name="date" label="Publish Date" container-class="col-sm-12" />
                    <div class="form-group col-sm-12">
                        <label for="type">File Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select File Type</option>
                            <option value="notice">Notice</option>
                            <option value="syllabus">Syllabus</option>
                            <option value="curriculumns">Curriculumns</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <x-form-input type="file" name="pdf" label="Notice PDF" container-class="col-sm-12" />
                    <x-form-input type="submit" name="submit" value="Submit" container-class="col-sm-12"
                        class="btn btn-primary" />
                </x-forms>

            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        const today = new Date().toISOString().split('T')[0];
        document.querySelector('input[type="date"]').value = today;
    </script>
@endsection
