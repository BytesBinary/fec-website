@extends('layouts.app')


@section('title')
    {{ $page['page_title']  }}
@endsection

@section('style')
<style>
    .event-area {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .author-items {
        background-color: white;
        overflow: scroll;
        height: 551px;
    }
</style>
@endsection

@section('content')
    <main class="main">
        @include('layouts.homepage.hero')

        @include('layouts.homepage.feature-service')

        @include('layouts.homepage.features')

        @include('layouts.homepage.service')

        @include('layouts.homepage.notice')

        @include('layouts.homepage.faq')

        @include('layouts.homepage.testimonial')

        @include('layouts.homepage.client-section')
    </main>
@endsection
