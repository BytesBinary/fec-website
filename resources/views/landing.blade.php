@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.administration')
    @include('partials.landing.short-details')
    @include('partials.landing.about')
    @include('partials.landing.gallery')
    {{-- @include('partials.landing.alumni') --}}
    @include('partials.landing.fec-website-linking')
@endsection
