@extends('admin.layouts.app')

@section('title', 'All Pages')

@section('content')
    <div class="container p-3">
        <x-admin.page-title title="Modify Notice" />

        <table class="table table-striped" id="use-datatable">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Publish Date</th>
                    <th>Notice Title</th>
                    <th>Download</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($notice_section))
                    @foreach ($notice_sections as $section)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $section['publish_date'] }}</td>
                            <td>{{ $section['title'] }}</td>
                            <td>

                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#sectionModal{{ $section['id'] }}">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <x-modal modal-id="sectionModal{{ $section['id'] }}" modal-title="Edit Notice">
                            
                        </x-modal>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
