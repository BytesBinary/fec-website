@extends('pages.layouts.app')

@section('title','FEC | Researches')

@section('content')
    <div class="container page-top-section">
        <x-section-title title="Research Activities" des="Learn, Achieve, and Believe" animation="fade-up" />

        <div class="container mb-3">
            <div class="row g-5">
                @foreach ( $researches as $research )
                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset($research->cover) }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> {{$research->date}}</p><hr class="custom-line">'
                    card-title="{{ $research->title }}" title-class="fw-bold mb-3"
                    card-text="{{ Str::limit(strip_tags($research->content), 100) }}"
                    cardlink="true" card-link-url="{{ route('research.view',['slug'=>$research->slug]) }}" card-link-class="btn btn-outline-primary rounded-pill"
                    card-url-text="Read More" card-link-icon="bi bi-plus-lg" />

                @endforeach
            </div>
        </div>
    </div>

@endsection
