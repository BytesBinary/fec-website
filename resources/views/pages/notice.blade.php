@extends("pages.layouts.app")

@section('title','Notices | Faridpur Engineering College')

@section('content')
    <div class="container section-title page-top-section" data-aos="fade-down">

        <x-section-title title="{{ $page['page_title'] }}" des="" animation="fade-up" />

        <div class="table-responsive">
            <table id="use-datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Publish Date</th>
                    <th class="text-center">Notice Title</th>
                    <th class="text-center">Download</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $notices as $notice )
                    <tr>
                        <td class="text-center">{{ $loop->iteration  }}</td>
                        <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                        <td>{{ $notice->title }}</td>
                        <td>
                            <a href="{{ $notice->pdf }}" class="btn btn-primary btn-md" download><i class="bi bi-download"></i></a>
                        </td>
                        {{-- @php
                            dd($notice)
                        @endphp --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
