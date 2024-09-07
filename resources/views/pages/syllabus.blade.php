@extends("pages.layouts.app")

@section('title','Syllabus | FEC')

@section('content')
    @if ( ! empty($page) )
    <div class="container section-title page-top-section" data-aos="fade-down">
        <x-section-title title="{{ $page['page_title'] }}" des="" animation="fade-up" />
        <div class="table-responsive">
            <table id="use-datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Session</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Syllabus</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $syllabuses as $syllabus )
                    <tr>
                        <td class="text-center">{{ $loop->iteration  }}</td>
                        <td>{{ $syllabus->session }}</td>
                        <td>{{ $syllabus->title }}</td>
                        <td>
                            <a href="{{ $syllabus->pdf }}" class="btn btn-primary btn-md" download><i class="bi bi-download"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endsection

