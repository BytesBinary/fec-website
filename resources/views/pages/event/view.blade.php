@extends('pages.layouts.app')

@section('content')
    <div class="container page-top-section">
        <div class="row">
            <x-section-title title="{{ $event->title }}" des="" animation="fade-up" />
            <img class="img-fluid align-item-center text-center" src="{{ $event->cover }}" alt="img">
        </div>
        <div class="p-3">
            {!! $event->content !!}
        </div>
    </div>
@endsection
