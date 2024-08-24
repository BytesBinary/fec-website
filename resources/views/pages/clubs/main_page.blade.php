@extends('pages.layouts.app')

@section('title','Club | Faridpur Engineering College')

@section('content')
<section class="about-section section">
    <div class="container page-top-section">
        <x-section-title title="Clubs | Faridpur Engineering College" des="Learn, Achieve, and Believe" animation="fade-up" />
        <div class="container">
            <div class="row g-5">
                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Reasearch & innovation Center" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/ric-research-&-innovation-center')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Sports Association" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecsa-sports-association')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Photographic Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecpc-photographic-club')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Programming Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecpc-programming-club')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Cyber Defense Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/feccdc-cyber-defense-club')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Islamic Dawah & Reasearch Center" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecirdc-islamic-research-&-dawah-center')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Debating Club" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecdc-debating-club')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="Club of Profession" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/feccp-club-of-profession')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>

                <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true"
                    image-url="{{ asset('assets/img/events/events.jpeg') }}" image-alt="Features 3"
                    image-class="card-img-top img-fluid"
                    card-title="FEC Rover Scout Group" title-class="fw-bold mb-3"
                    card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur."
                    cardlink="true" card-link-url="{{route('clubs/fecrsg-rover-scout-group')}}" card-link-class="btn btn-outline-success rounded"
                    card-url-text="Visit the Club"/>
            </div>
        </div>
    </div>
</section>

@endsection
