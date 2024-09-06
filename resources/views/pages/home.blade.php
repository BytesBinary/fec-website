@extends('pages.layouts.app')

@section('title','Home | Faridpur Engineering College')

@section('style')
    <style>
        .header .logo h1, .navmenu a {
            color: var(--background-color);
        }

        #header.scrolled .navmenu a {
            color: var(--nav-color);
        }

        #header.scrolled .navmenu li:hover > a,
        #header.scrolled .navmenu .active,
        #header.scrolled .navmenu .active:focus {
            color: var(--nav-hover-color);
        }

        #header.scrolled h1, #header.scrolled .mobile-nav-toggle {
            color: var(--nav-color);
        }

        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--background-color);
            }

            .navmenu ul {
                background-color: var(--background-color);
            }

            .navmenu ul a {
                color: var(--nav-color);
            }

            .foot-img img {
                height: auto;
            }
        }
    </style>
@endsection

@section('content')
    <main class="main homepage">
        @include('pages.home.hero')

        @include('pages.home.administration-section')

        @include('pages.home.short-details')

       @include('pages.home.about')

        @include('pages.home.online-services')

       {{-- @include('pages.home.latest-news') --}}

{{--        @include('pages.home.events')--}}

{{--        @include('pages.home.research')--}}

       @include('pages.home.faq')
    </main>
@endsection

