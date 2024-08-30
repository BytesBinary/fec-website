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
                <img src="https://clubhub.jakiurrahman.info/assets/images/ric-banner.jpeg" alt="RIC Banner" class="img-fluid">
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

<section class="examiners bg-dark text-light py-5" id="advisory_commitee">
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="text-center">
                <h2 class="text-primary">Advisory Committee</h2>
                <h3 class="text-info">Chief Advisor</h3>

                <x-card row-class="col-sm-12" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>

        <div class="text-center mt-5">
            <h3 class="text-info" data-aos="fade-down">Honorary Advisors</h3>
            <div class="row g-4">
                <x-card row-class="col-sm-4" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-left" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>
        <div class="text-center mt-5">
            <h3 class="text-info" data-aos="fade-down">Advisors</h3>
            <div class="row g-4">
                <x-card row-class="col-sm-4" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-left" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-left" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-left" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>
    </div>
</section>


<section class="examiners bg-black text-light py-5" id="advisory_commitee">
    <div class="container">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="text-center">
                <h2 class="text-primary">Committee</h2>
                <h3 class="text-info">President</h3>

                <x-card row-class="col-sm-12" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>

        <div class="text-center mt-5">
            <h3 class="text-info" data-aos="fade-down">Vice President</h3>
            <div class="row g-4">
                <x-card row-class="col-sm-6" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-6" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="text-center">
                <h3 class="text-info">General Secretary</h3>

                <x-card row-class="col-sm-12" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>

        <div class="text-center mt-5">
            <h3 class="text-info" data-aos="fade-down">Joint Secretary</h3>
            <div class="row g-4">
                <x-card row-class="col-sm-4" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>
        <div class="text-center mt-5">
            <h3 class="text-info" data-aos="fade-down">Other Commitee Members</h3>
            <div class="row g-4">
                <x-card row-class="col-sm-4" link="#" animation="fade-right" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
                <x-card row-class="col-sm-4" link="#" animation="fade-up" image="true" image-class="rounded-top" cardimage="true" imageUrl="{{ asset('images/research/research.png') }}" imageAlt="" body-class="text-center" cardTitle="Md. Aklasur Rahman" title-class="mb-3 fw-bold" cardText="Head, Non-tech Dept." text-class="text-muted mb-4" />
            </div>
        </div>
    </div>
</section>

<section class="review bg-dark pb-10 pt-10 px-5" id="events">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 fs-1" data-aos="fade-up">
            Events - Ongoing
        </div>
        <div class="row justify-content-evenly align-items-center card-container">
            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

        </div>
        <div class="text-center text-white my-3 p-3 fs-1" data-aos="fade-up">
            Events - Upcoming
        </div>
        <div class="row justify-content-evenly align-items-center card-container">
            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

        </div>
        <div class="text-center text-white my-3 p-3 fs-1" data-aos="fade-up">
            Events - Previous
        </div>
        <div class="row justify-content-evenly align-items-center card-container">
            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{ asset('images/research/research.png') }}" image-class="img-fluid mb-3 card-image icon" image-alt="" title-class="card-title card-title-fourth my-3" card-title="dfsdfsdfsdfsd" text-class="card-text card-text-fourth mb-4" card-text="kdfjklsjdflisjdlfjsdlfjl" button="true" button-url="" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm" button-text="Fuck" />

        </div>
    </div>
</section>

<section class="examiners bg-black px-5 pt-10 pb-10" id="achievement">
    <div class="container mx-auto">
        <div class="fs-1 text-center my-10 text-purple-500" data-aos="fade-down">
            Achievement
        </div>
        <div class="row g-5">
            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="FEC er unnoyon" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="Visit of srilanka cheif officer" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="Lufy declare war against world government" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />
            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="FEC er unnoyon" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="Visit of srilanka cheif officer" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />

            <x-card row-class="col-lg-4 col-md-6 mb-4" card-class="h-100 shadow-lg border-0" image="true" image-url="{{ asset('images/research/research.png') }}" image-alt="Features 3" image-class="card-img-top img-fluid" card-title="Lufy declare war against world government" title-class="fw-bold mb-3" card-text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate dolore eveniet autem expedita consectetur." />
        </div>
    </div>
</section>
@endsection
