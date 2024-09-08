@extends('pages.layouts.app')

@section('title','At a Glance | FEC')

@section('style')
    <style>
        .play-button-container {
            height: 60px !important;
            width: 60px !important;
        }
    </style>
@endsection

@section('content')
<div class="container page-top-section">
    <x-section-title title="At a Glance" des="" animation="" />
    @if(!empty($section))
        <div class="row">
            <div class="clearfix">
                <div class="col-sm-6 float-md-end mb-3 ms-md-3 at-a-glance" style="z-index: 1;" data-aos="flip-right">
                    <img src="{{asset('images/'.$section->image)}}" class="img-fluid rounded px-3 mobile-height" alt="FEC Image" style="object-fit: cover;">
                    <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
                        <a href="{{$section->video_url}}" class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-caret-right-fill text-light"></i>
                        </a>
                    </div>
                </div>
                <p class="col-sm-12">
                    {!! nl2br(e($section->content))  !!}
                </p>
            </div>
        </div>
    @endif
</div>

@endsection
