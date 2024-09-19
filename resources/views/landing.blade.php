@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.administration')
    @include('partials.landing.short-details')
    @include('partials.landing.about')
    @include('partials.landing.key-features')
    @include('partials.landing.fec-govt-links')
    {{-- @include('partials.landing.alumni') --}}
@endsection
