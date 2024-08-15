@extends("layouts.app")

@section('title')
    {{ $page['page_title']  }}
@endsection

@section('style')
    @include('layouts.partials.datatable.datatable-style')
@endsection

@section('content')
    <div class="container section-title page-top-section" data-aos="fade-down">
        <h2>{{ $page['page_title']  }}</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th><input type="checkbox" id="select-all"></th>
                    <th>Publish Date</th>
                    <th>Notice Title</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $notices as $notice )
                    <tr>
                        <td><input type="checkbox" class="row-select"></td>
                        <td>{{ $notice->created_at->format('d-m-Y') }}</td>
                        <td>{{ $notice->title }}</td>
                        <td>
                            <a href="{{ asset('storage/notice/'.$notice->file) }}" class="btn btn-primary btn-sm" download>Download</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts.partials.datatable.datatable-script')
@endsection
