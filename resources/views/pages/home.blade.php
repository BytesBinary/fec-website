@extends('pages.layouts.app')

@section('title')
    {{ $page['page_title'] }}
@endsection

@section('style')
    @include('pages.layouts.homepage.css.style')
@endsection

@section('content')
    <main class="main">
        @include('pages.layouts.homepage.hero')

        @include('pages.layouts.homepage.administration-section')

        @include('pages.layouts.homepage.short-details')

        @include('pages.layouts.homepage.about')

        @include('pages.layouts.homepage.online-service')

        @include('pages.layouts.homepage.latest-news')

        @include('pages.layouts.homepage.events')

        @include('pages.layouts.homepage.research')

        @include('pages.layouts.homepage.faq')

   
    </main>
@endsection
