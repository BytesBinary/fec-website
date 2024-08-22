@extends("pages.layouts.app")

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
                    @include('pages.partials.contactus.main-address')
                    @include('pages.partials.contactus.contact-details-accordion')
                    @include('pages.partials.contactus.maps-and-form')
                </div>
            </div>
        </section>
    </main>
@endsection
