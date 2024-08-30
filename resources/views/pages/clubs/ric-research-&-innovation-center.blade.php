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
        <div class="text-center my-4">
            <h2 class="text-purple" data-aos="fade-down">Advisory Committee</h2>
        </div>

        <div class="text-center my-3">
            <h3 class="text-cyan" data-aos="fade-down">Chief Advisor</h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 mb-4" data-aos="zoom-in">
                <div class="card bg-secondary text-white shadow">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/image.jpeg" class="card-img-top rounded-lg" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Md. Shamsul Islam</h5>
                        <p class="card-text text-cyan">Assistant Professor &amp; Head, Dept. of CSE</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/facebook.png" alt="Facebook" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/whatsapp.png" alt="WhatsApp" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/gmail.png" alt="Gmail" class="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h3 class="text-cyan" data-aos="fade-down">Honorary Advisors</h3>
        </div>

        <div class="row justify-content-center my-4">
            <!-- Honorary Advisor 1 -->
            <div class="col-md-4 col-lg-3 mb-4" data-aos="zoom-in">
                <div class="card bg-secondary text-white shadow">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/image.jpeg" class="card-img-top rounded-lg" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Md. Aklasur Rahman</h5>
                        <p class="card-text text-cyan">Head, Non-tech Dept.</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/facebook.png" alt="Facebook" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/whatsapp.png" alt="WhatsApp" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/gmail.png" alt="Gmail" class="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Honorary Advisor 2 -->
            <!-- Repeat structure for other advisors -->

        </div>

        <div class="text-center mt-5">
            <h3 class="text-cyan" data-aos="fade-down">Advisors</h3>
        </div>

        <div class="row justify-content-center my-4">
            <!-- Advisor 1 -->
            <div class="col-md-4 col-lg-3 mb-4" data-aos="zoom-in">
                <div class="card bg-secondary text-white shadow">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/image.jpeg" class="card-img-top rounded-lg" alt="">
                    <div class="card-body text-center">
                        <h5 class="card-title">Partha Mandal</h5>
                        <p class="card-text text-cyan">Lecturer, EEE</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/facebook.png" alt="Facebook" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/whatsapp.png" alt="WhatsApp" class="icon">
                            </a>
                            <a href="#" class="btn btn-purple mx-1">
                                <img src="https://clubhub.jakiurrahman.info/assets/images/gmail.png" alt="Gmail" class="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat structure for other advisors -->
        </div>
    </div>
</section>

<section class="examiners bg-gray-900 px-5 pt-10 pb-10" id="committee">
    <div class="container mx-auto">
        <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
            Committee
        </div>

        <!-- President Section -->
        <div class="text-4xl text-center text-cyan-300 mb-3" data-aos="fade-down">
            President
        </div>
        <div class="grid grid-cols-1 gap-3 justify-center lg:mx-[250px] md:mx-[200px]">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="{{ asset('images/image.jpeg') }}" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">
                    Md. Abid Hasan Roni Bokshi
                </p>
                <p class="text-lg text-cyan-400 text-center my-5">
                    <!-- Dynamic content -->
                </p>
                <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
                    @foreach (['facebook', 'whatsapp', 'gmail'] as $social)
                    <div class="bg-purple-500 p-2 rounded-md cursor-pointer" onclick="window.location.href='#'">
                        <img src="{{ asset('images/' . $social . '.png') }}" alt="{{ $social }}" class="h-6 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Vice President Section -->
        <div class="text-3xl text-center text-cyan-300 mt-10" data-aos="fade-down">
            Vice President
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-3 justify-center my-5">
            @foreach ([['Abu Nakib Siddique', 'images/image.jpeg'], ['Siam - Ur - Rahman', 'images/image.jpeg']] as $vp)
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="{{ asset($vp[1]) }}" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">
                    {{ $vp[0] }}
                </p>
                <p class="text-lg text-cyan-400 text-center my-5">
                    <!-- Dynamic content -->
                </p>
                <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
                    @foreach (['facebook', 'whatsapp', 'gmail'] as $social)
                    <div class="bg-purple-500 p-2 rounded-md cursor-pointer" onclick="window.location.href='#'">
                        <img src="{{ asset('images/' . $social . '.png') }}" alt="{{ $social }}" class="h-6 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- General Secretary Section -->
        <div class="text-3xl text-center text-cyan-300 mt-10" data-aos="fade-down">
            General Secretary
        </div>
        <div class="grid grid-cols-1 gap-3 justify-center my-5 lg:mx-[250px] md:mx-[200px]">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="{{ asset('images/image.jpeg') }}" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">
                    Abu Bakkar Siddque
                </p>
                <p class="text-lg text-cyan-400 text-center my-5">
                    <!-- Dynamic content -->
                </p>
                <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
                    @foreach (['facebook', 'whatsapp', 'gmail'] as $social)
                    <div class="bg-purple-500 p-2 rounded-md cursor-pointer" onclick="window.location.href='#'">
                        <img src="{{ asset('images/' . $social . '.png') }}" alt="{{ $social }}" class="h-6 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Joint Secretary Section -->
        <div class="text-3xl text-center text-cyan-300 mt-10" data-aos="fade-down">
            Joint Secretary
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 gap-3 justify-center my-5">
            @foreach ([['Md. Mahmudun Nobi', 'images/image.jpeg'], ['Irin Akter', 'images/image.jpeg'], ['Mosharrof Hossain Sarkar', 'images/image.jpeg']] as $js)
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="{{ asset($js[1]) }}" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">
                    {{ $js[0] }}
                </p>
                <p class="text-lg text-cyan-400 text-center my-5">
                    <!-- Dynamic content -->
                </p>
                <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
                    @foreach (['facebook', 'whatsapp', 'gmail'] as $social)
                    <div class="bg-purple-500 p-2 rounded-md cursor-pointer" onclick="window.location.href='#'">
                        <img src="{{ asset('images/' . $social . '.png') }}" alt="{{ $social }}" class="h-6 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- Other Committee Members Section -->
        <div class="text-3xl text-center text-cyan-300 mt-10" data-aos="fade-down">
            Other Committee Members
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 gap-3 justify-center my-5">
            @foreach ([['Istiak Hossain Shawon', 'Organizing Secretary'], ['JM Jakaria', 'Joint Organizing Secretary'], ['Mashrafi Bin Moin', 'Joint Organizing Secretary'], ['Sharmin Sultana Mim', 'Joint Organizing Secretary']] as $member)
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="{{ asset('images/image.jpeg') }}" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">
                    {{ $member[0] }}
                </p>
                <p class="text-lg text-cyan-400 text-center my-5">
                    {{ $member[1] }}
                </p>
                <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
                    @foreach (['facebook', 'whatsapp', 'gmail'] as $social)
                    <div class="bg-purple-500 p-2 rounded-md cursor-pointer" onclick="window.location.href='#'">
                        <img src="{{ asset('images/' . $social . '.png') }}" alt="{{ $social }}" class="h-6 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="review bg-gray-800 pb-10 pt-10 px-5" id="events">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 text-4xl" data-aos="fade-up">
            Events - Ongoing
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ric.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Techno Fest 2K24</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ongoing-2.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Blockchain technology Quiz</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center text-white my-10 mb-3 p-3 text-4xl" data-aos="fade-up">
            Events - Upcoming
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/coming-soon.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Coming soon 1</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/coming-soon.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Coming soon 2</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center text-white my-10 mb-3 p-3 text-4xl" data-aos="fade-up">
            Events - Previous
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/past.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Previous Event 1</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/past.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-xl mt-5 text-center">Previous Event 2</p>
                <p class="text-lg text-red-500 text-center my-5"></p>
                <div class="flex lg:flex flex-row justify-center">
                    <button onclick="window.location.href='https://clubhub.jakiurrahman.info/events'" class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                        View Details
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="examiners bg-gray-900 px-5 pt-10 pb-10" id="achievement">
    <div class="container mx-auto">
        <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
            Achievement
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-y-5">
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
            <div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
                <div class="text-center mx-auto">
                    <img src="https://clubhub.jakiurrahman.info/assets/images/ach.jpeg" alt="" class="rounded-lg h-[200px] mx-auto">
                </div>
                <p class="text-md mt-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
