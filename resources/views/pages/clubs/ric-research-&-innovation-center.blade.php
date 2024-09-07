@extends("pages.layouts.club-app")

@section('title','Reaserch & Innovation Center | FEC')

@section('style')
<style>
    #home{
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{asset('images/clubs/ric.jpg')}}');
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
@endsection

@section('content')
<x-club.header logo="{{asset('images/clubs/ric.jpg')}}" name="RIC" />

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

    <section class="hero-section bg-dark text-white pb-10 pt-10 px-5" id="committee">
        <div class="container text-center">
            <div class="text-center text-white my-2 p-2 fs-2" data-aos="fade-up">
                <u>Committee</u>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12" data-aos="fade-down">
                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)">Chief Advisor</strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Md. Shamsul Islam</td>
                                        <td>Assistant Professor & Head, Dept. of CSE </td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto my-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)">Honorary Advisor</strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Md. Aklasur Rahman</td>
                                        <td>Head, Non-tech Dept.</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Md. Sanwar Hossain</td>
                                        <td>Assistant Prof. & Head, Dept. of EEE</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raihan Khan Opu</td>
                                        <td>Assistant Prof. & Head, Dept. of CE</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)"></strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Md. Abid Hasan Roni Bokshi</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)">Vice-President</strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Abu Nakib Siddique</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Siam - Ur - Rahman</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)">General Secretary</strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Abu Bakkar Siddque</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center g-5 mb-3">
                        <div class="col-md-10">
                            <table class="table table-striped table-dark mx-auto">
                                <thead>
                                    <td colspan="3"><strong style="color: rgb(157, 157, 255)">Joint Secretary</strong></td>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Social Accounts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Md. Mahmudun Nobi</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Irin Akter</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mosharrof Hossain Sarkar</td>
                                        <td>
                                            <a href="https://facebook.com/your-profile" target="_blank" class="text-primary">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                            <a href="mailto:your-email@example.com" class="text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
