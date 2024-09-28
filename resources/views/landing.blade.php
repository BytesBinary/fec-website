@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.administration')
    @include('partials.landing.dept-and-notice')
    @include('partials.landing.clubs')
    @include('partials.landing.short-details')
    @include('partials.landing.about')
    @include('partials.landing.research-events-news')
    {{-- @include('partials.landing.alumni') --}}
    @include('partials.landing.fec-website-linking')
    @include('partials.landing.gallery')
@endsection
