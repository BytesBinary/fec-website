@extends('pages.layouts.app')

@section('content')
    <div class="container page-top-section">
        <div class="row post-cover-image">
            <x-section-title title="{{ $research->title }}" des="" animation="fade-up" />
            <img class="img-fluid align-item-center text-center" src="{{ $research->cover }}" alt="img">
        </div>
        <div class="p-3">
            {!! $research->content !!}
        </div>
    </div>
@endsection
