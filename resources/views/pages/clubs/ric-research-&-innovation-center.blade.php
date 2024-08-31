@extends("pages.layouts.club-app")

@section('title','Reaserch & Innovation Center | FEC')



@section('content')
<x-club.header logo="{{asset('images/FEClogo.png')}}" name="RIC" />

<section class="club-hero-section bg-light min-vh-100 text-white p-5 d-flex align-items-center" id="home">
    <div class="container">
        <div class="position-relative w-100 p-0 p-xl-5 text-center">
            <div>
                <p class="my-3 display-4" data-aos="fade-up">
                    Welcome to
                </p>
                <p class="my-3 display-5 fw-bold text-primary" data-aos="fade-up">
                    Research And Innovation Center <br />
                    - Faridpur Engineering College
                </p>
                <p class="lead my-3" data-aos="fade-down">
                    Smart Innovation For The Future
                </p>
                <button onclick="window.location.href='#about'" class="btn btn-primary btn-lg my-5" data-aos="fade-down">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>

<section class="hero-section bg-dark text-white p-5" id="about">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('images/events/events.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/events/events.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('images/events/events.jpeg')}}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 p-5">
                <div class="text-primary h3 mb-4" data-aos="fade-down">About Research And Innovation Centre</div>
                <ul class="list-unstyled text-light fs-5">
                    <li class="mb-4" data-aos="fade-up">
                        Research and Innovation Center (RIC) is the first official club on our campus.
                    </li>
                    <li class="mb-4" data-aos="fade-up">
                        Our main objective is to enrich the knowledge base of students beyond textbooks, alongside formal education.
                    </li>
                    <li class="mb-4" data-aos="fade-up">
                        Our goal is to dedicate ourselves to the service of the country and its people.
                    </li>
                    <li class="mb-4" data-aos="fade-up">
                        The contribution of our Research and Innovation Center is undeniable in ensuring a beautiful future for ourselves.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="review bg-dark pb-10 pt-10 px-5" id="events">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 fs-1" data-aos="fade-down">
            Events
        </div>
        <div class="row justify-content-evenly align-items-center card-container">
            <x-card row-class="col-lg-3 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> 21 Aug, 2024</p><hr class="custom-line">' card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-plus-lg"  />

            <x-card row-class="col-lg-3 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> 21 Aug, 2024</p><hr class="custom-line">' card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-plus-lg"  />

            <x-card row-class="col-lg-3 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            custom-html-in-card='<hr class="custom-line"><p class="text-muted mb-2 date"><i class="bi bi-calendar"></i> 21 Aug, 2024</p><hr class="custom-line">' card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-plus-lg"  />

        </div>
    </div>
</section>

<section class="review bg-dark pb-10 pt-10 px-5" id="achievement">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 fs-1" data-aos="fade-up">
            Achievement
        </div>
        <div class="row g-5">
            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-chevron-double-right"  />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-chevron-double-right"  />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-chevron-double-right"  />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{asset('images/latest-news/muzan.jpg')}}" image-alt="loading" image-class="card-img-top img-fluid"
            card-title="Dangers Alert"
            title-class="fw-bold mb-3" card-text="Muzan bhaya coming so agressively toward FEC for destroying cafeteria" cardlink="true" card-link-url="#"
            card-link-class="btn btn-outline-primary rounded-pill" card-url-text="Read More" card-link-icon="bi bi-chevron-double-right"  />

        </div>
    </div>
</section>
@endsection
