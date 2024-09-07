@extends('pages.layouts.app')

@section('title','At a Glance | FEC')

@section('content')
<div class="container page-top-section">
    <div class="row">
        @if(!empty($section))
            <x-section-title title="At a Glance" des="" animation="" />
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6 img-side rounded px-3 mobile-height d-flex align-items-center" data-aos="fade-up-left">
                    <div class="position-relative w-100">
                        <img src="{{asset('images/'.$section->image)}}" class="img-fluid rounded px-3 mobile-height" alt="FEC Image" style="object-fit: cover;">
                        <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <a href="{{$section->video_url}}" class="glightbox btn-watch-video d-flex align-items-center">
                                <i class="bi bi-caret-right-fill text-light"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <p style="text-align: justify">
                    {!! nl2br(e($section->content))  !!}
                </p>
            </div>
        @endif
    </div>
</div>

@endsection
