@extends('pages.layouts.app')

@section('title','Club | Faridpur Engineering College')

@section('content')
<section class="about-section section">
    <div class="container page-top-section">
        <x-section-title title="Clubs | Faridpur Engineering College" des="Learn, Achieve, and Believe" animation="fade-up" />
        <div class="container">
            <div class="row g-5">
                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Reasearch & innovation Center" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/ric-research-&-innovation-center')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill" button-text="Visit the Club" />

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Sports Association" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecsa-sports-association')}}" url-class="text-center" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Photographic Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecpc-photographic-club')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Programming Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecpc-programming-club')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Cyber Defense Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/feccdc-cyber-defense-club')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Islamic Dawah & Reasearch Center" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecirdc-islamic-research-&-dawah-center')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Debating Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecdc-debating-club')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Club of Professionals" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/feccp-club-of-profession')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('images/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Rover Scout Group" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." card-con-class="d-flex align-items-center justify-content-center"
                    button="true" button-url="{{route('clubs/fecrsg-rover-scout-group')}}" button-class="btn px-5 btn-success shadow-xl rounded-pill"
                    button-text="Visit the Club"/>
            </div>
        </div>
    </div>
</section>

@endsection
