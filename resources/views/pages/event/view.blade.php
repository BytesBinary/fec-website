@extends('pages.layouts.app')

@section('content')
    <div class="container page-top-section">
        <x-section-title title="{{$event->title}}" des="" animation="fade-up" />
        {!! $event->content !!}
    </div>
@endsection
