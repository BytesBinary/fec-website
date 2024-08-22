@extends('pages.layouts.app')

@section('title')
    {{ $page['page_title'] }}
@endsection

@section('style')
    @include('pages.partials.home.css.style')
@endsection

@section('content')
    <main class="main">
        @include('pages.partials.home.hero')

        @include('pages.partials.home.administration-section')

        @include('pages.partials.home.short-details')

        @include('pages.partials.home.about')

        @include('pages.partials.home.online-service')

        @include('pages.partials.home.latest-news')

        @include('pages.partials.home.events')

        @include('pages.partials.home.research')

        @include('pages.partials.home.faq')
    </main>
@endsection
