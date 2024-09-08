@extends("pages.layouts.club-app")

@section('title','Reaserch & Innovation Center | FEC')

@section('style')
@vite(['resources/css/club-header.css'])
@endsection


@section('content')
<x-club.header logo="{{asset('static/logo.png')}}" name="RIC" />

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

<section class="hero-section bg-dark text-white pb-10 pt-10 px-5" id="committee">
    <div class="container text-center">
        <div class="text-center text-white my-2 p-2 fs-2" data-aos="fade-up">
            <u>Committee</u>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12" data-aos="fade-down">

                <!-- Chief Advisor Table -->
                <div class="row justify-content-center align-items-center g-5 mb-3">
                    <div class="col-md-10">
                        <table class="table table-striped table-dark mx-auto">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <strong style="color: rgb(157, 157, 255)">Chief Advisor</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Social Accounts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Md. Shamsul Islam</td>
                                    <td>Assistant Professor & Head, Dept. of CSE</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Honorary Advisor Table -->
                <div class="row justify-content-center align-items-center g-5 mb-3">
                    <div class="col-md-10">
                        <table class="table table-striped table-dark mx-auto my-auto">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <strong style="color: rgb(157, 157, 255)">Honorary Advisor</strong>
                                    </td>
                                </tr>
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
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md. Sanwar Hossain</td>
                                    <td>Assistant Prof. & Head, Dept. of EEE</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Raihan Khan Opu</td>
                                    <td>Assistant Prof. & Head, Dept. of CE</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Vice-President Table -->
                <div class="row justify-content-center align-items-center g-5 mb-3">
                    <div class="col-md-10">
                        <table class="table table-striped table-dark mx-auto">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <strong style="color: rgb(157, 157, 255)">Vice-President</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Social Accounts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abu Nakib Siddique</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Siam - Ur - Rahman</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- General Secretary Table -->
                <div class="row justify-content-center align-items-center g-5 mb-3">
                    <div class="col-md-10">
                        <table class="table table-striped table-dark mx-auto">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <strong style="color: rgb(157, 157, 255)">General Secretary</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Social Accounts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abu Bakkar Siddque</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Joint Secretary Table -->
                <div class="row justify-content-center align-items-center g-5 mb-3">
                    <div class="col-md-10">
                        <table class="table table-striped table-dark mx-auto">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <strong style="color: rgb(157, 157, 255)">Joint Secretary</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Social Accounts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Md. Mahmudun Nobi</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
                                        <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-info mx-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="mailto:your-email@example.com" class="text-danger"><i class="bi bi-envelope"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Irin Akter</td>
                                    <td>
                                        <a href="https://facebook.com/your-profile" target="_blank" class="text-primary"><i class="bi bi-facebook"></i></a>
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
