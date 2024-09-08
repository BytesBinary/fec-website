@extends('pages.layouts.app')

@section('title', 'Infrastructure | FEC')

@section('styles')

@endsection

@section('content')
    <div class="container page-top-section">
        <div class="row">
            <div class="col-12">
                <x-section-title title="Infrastructure" animation="fade-up" des="" />

                <div class="container mb-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="mt-4 text-center ">Departments</h3>
                            <hr class="w-50 my-3 mx-auto">
                            <ul class="mb-5">
                                <li>Civil Engineering (CE)</li>
                                <li>Electrical and Electronics Engineering (EEE)</li>
                                <li>Computer Science and Engineering (CSE)</li>
                            </ul>

                            <h2 class="mt-4 text-center">Facilities</h2>
                            <hr class="w-50 mx-auto">

                            <p>The College has:</p>
                            <ul>
                                <li>01 administrative building</li>
                                <li>03 academic buildings</li>
                                <li>01 multipurpose building</li>
                                <li>01 bank-post office and cafeteria building</li>
                                <li>03 residential halls (one for female students and two for male students)</li>
                                <li>A Mosque</li>
                                <li>A residential building for the Principal</li>
                                <li>A playing field</li>
                                <li>A library with academic-related books</li>
                                <li>A modern computer lab with fast-paced Internet access and modern learning facilities, including
                                    sophisticated Labs/Workshops</li>
                            </ul>
                        </div>

                        <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide w-70 m-5 mx-auto">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/events/events.jpeg') }}" class="d-block w-100" alt="Event Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/events/events.jpeg') }}" class="d-block w-100" alt="Event Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/events/events.jpeg') }}" class="d-block w-100" alt="Event Image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
@endsection
