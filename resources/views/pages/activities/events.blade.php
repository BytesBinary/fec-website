@extends('pages.layouts.app')

@section('title', 'FEC | Events')

@section('content')
    <div class="container page-top-section">
        <x-section-title title="Upcoming Events" des="Participate & Compete" animation="fade-up" />

        <div class="container mb-3">
            <div class="row g-5">
                @foreach ( $events as $event )
                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset($event->cover) }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> 21 Aug, 2024</p><hr class="custom-line">'
                    card-title="{{ $event->title }}" title-class="fw-bold mb-3"
                    card-text="{{ Str::limit(strip_tags($event->content), 100) }}"
                    cardlink="true" card-link-url="{{ route('event.view',['slug'=>$event->slug]) }}" card-link-class="btn btn-outline-primary rounded-pill"
                    card-url-text="Read More" card-link-icon="bi bi-plus-lg" />

                @endforeach
            </div>

        </div>

    </div>

@endsection
