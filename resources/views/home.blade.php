@extends('layouts.app')


@section('title')
    {{ $page['page_title']  }}
@endsection

@section('content')
    <main class="main">
        @include('layouts.homepage.hero')

        @include('layouts.homepage.feature-service')

        @include('layouts.homepage.features')

        @include('layouts.homepage.online-service')

        @include('layouts.homepage.service')

        @include('layouts.homepage.faq')

        @include('layouts.homepage.testimonial')

        @include('layouts.homepage.client-section')
    </main>
@endsection
