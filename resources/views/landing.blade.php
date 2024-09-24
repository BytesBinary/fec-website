@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.administration')
    @include('partials.landing.short-details')
    @include('partials.landing.about')
    @include('partials.landing.key-features')
    @include('partials.landing.dept-and-notice')
    @include('partials.landing.alumni')
@endsection
