@extends('pages.layouts.app')

@section('content')
    <div class="container page-top-section">
        <div class="container">
            <x-section-title title="{{ $event->title }}" des="" animation="fade-up" />
            <img class="img-fluid align-item-center" src="{{ $event->cover }}" alt="img">
        </div>

    </div>
    <div class="container p-3 m-5">
        {!! $event->content !!}
    </div>
    </div>
@endsection
