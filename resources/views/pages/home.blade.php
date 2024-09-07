@extends('pages.layouts.app')

@section('title','Home | Faridpur Engineering College')

@section('style')
    @vite(['resources/css/home.css', 'resources/js/home.js'])
@endsection

@section('content')
    <main class="main homepage">
        @include('pages.home.hero')

        @include('pages.home.administration-section')

        @include('pages.home.short-details')

        @include('pages.home.about')

        @include('pages.home.online-services')

{{--    @include('pages.home.latest-news')  --}}

        @include('pages.home.events')

        @include('pages.home.research')

        @include('pages.home.faq')
    </main>
@endsection

