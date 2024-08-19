@extends('pages.layouts.app')


@section('title')
    {{ $page['page_title']  }}
@endsection

@section('content')
    <main class="main">
        @include('pages.layouts.homepage.hero')

        @include('pages.layouts.homepage.administration-section')

        @include('pages.layouts.homepage.short-details')

        @include('pages.layouts.homepage.about')

        @include('pages.layouts.homepage.features')

        @include('pages.layouts.homepage.online-service')

        @include('pages.layouts.homepage.service')

        @include('pages.layouts.homepage.faq')

        @include('pages.layouts.homepage.testimonial')

        @include('pages.layouts.homepage.client-section')
    </main>
@endsection
