@extends('layouts.app')

@section('title', 'Home - FEC')

@section('content')
    @include('partials.landing.hero')
    @include('partials.landing.key-features')
    @include('partials.landing.alumni')
@endsection
