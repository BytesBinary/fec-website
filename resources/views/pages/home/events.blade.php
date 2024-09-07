@extends('pages.layouts.app')

@section('content')
    <section class="section my-5">
        <x-section-title title="Recent and Upcoming Events"
                         des="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                         animation="fade-up" />

        <div class="container">
            <div class="row g-5">
                @foreach($events as $event)
                    <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                            image-url="{{ asset($event->cover) }}" image-alt="Features 3"
                            image-class="card-img-top img-fluid"
                            custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> {{$event->date}}</p><hr class="custom-line">'
                            card-title="{{$event->title}}" title-class="fw-bold mb-3"
                            card-text="{{getFirstTenWords($event->content)}}"
                            cardlink="true" card-link-url="{{route('event.view',['slug' => $event->slug])}}" card-link-class="btn btn-outline-primary rounded-pill"
                            card-url-text="Read More" card-link-icon="bi bi-plus-lg" />
                @endforeach
            </div>
        </div>
    </section>
@endsection

