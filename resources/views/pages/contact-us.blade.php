@extends("layouts.app")

@section('title')
    {{ $page['page_title']  }}
@endsection

@section('content')
    <main class="main">
        <section id="contact" class="contact section">
            <div class="container section-title page-top-headline" data-aos="fade-down">
                <h2>{{ $page['page_title']  }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @include('pages.layouts.contactuspage.main-address')
                    @include('pages.layouts.contactuspage.contact-details-accordion')
                    @include('pages.layouts.contactuspage.maps-and-form')
                </div>
            </div>
        </section>
    </main>
@endsection
