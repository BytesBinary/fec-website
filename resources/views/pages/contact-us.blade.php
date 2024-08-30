@extends("pages.layouts.app")

@section('title','Contact Us | Faridpur Engineering College')

@section('content')
    <main class="main">
        <section id="contact" class="contact section">
            <div class="container section-title page-top-headline" data-aos="fade-down">
                <h2>{{ $page['page_title']  }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @include('pages.contactus.main-address')
                    @include('pages.contactus.contact-details-accordion')
                    @include('pages.contactus.maps-and-form')
                </div>
            </div>
        </section>
    </main>
@endsection
