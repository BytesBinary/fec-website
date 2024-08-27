@extends("pages.layouts.app")

@section('title','Notices | Faridpur Engineering College')

@section('style')
    @include('assets.css.datatable-style')
@endsection

@section('content')
    <div class="container section-title page-top-section" data-aos="fade-down">
        <h2>{{ $page['page_title']  }}</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
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
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                        <td>{{ $notice->title }}</td>
                        <td>
                            <a href="{{ asset('storage/notice/'.$notice->file) }}" class="btn btn-primary btn-md" download><i class="bi bi-download"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    @include('assets.js.datatable-script')
@endsection
