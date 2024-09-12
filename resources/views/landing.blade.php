@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.administration')
    @include('partials.landing.key-features')
    @include('partials.landing.alumni')
    @include('partials.landing.short-details')
@endsection
