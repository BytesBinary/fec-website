@extends('pages.layouts.app')

@section('title','Home | Faridpur Engineering College')

@section('style')
    <style>
        .header .logo h1, .navmenu a{
            color: var(--background-color);
        }
        #header.scrolled .navmenu a{
            color: var(--nav-color);
        }
        #header.scrolled .navmenu li:hover>a,
        #header.scrolled .navmenu .active,
        #header.scrolled .navmenu .active:focus{
            color: var(--nav-hover-color);
        }
        #header.scrolled h1, #header.scrolled .mobile-nav-toggle{
            color: var(--nav-color);
        }

        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--background-color);
            }
            .navmenu ul{
                background-color: var(--background-color);
            }
            .navmenu ul a{
                color: var(--nav-color);
            }
            .foot-img img{
                height: auto;
            }
        }
    </style>
@endsection

@section('content')
    <main class="main homepage">
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
