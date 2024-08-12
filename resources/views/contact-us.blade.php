@extends("layouts.app")

@section('title')
    {{ $page['page_title']  }}
@endsection

@section('content')
        <section id="contact" class="contact section">
            <div class="container section-title page-top-headline" data-aos="fade-down">
                <h2>{{ $page['page_title']  }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @include('layouts.contactuspage.main-address')
                    @include('layouts.contactuspage.others-details-accordion')
                    @include('layouts.contactuspage.maps-and-form')
                </div>
            </div>
        </section>
@endsection
