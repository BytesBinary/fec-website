<!-- Hero Section -->
<section id="hero" class="hero section position-relative">
    <div id="heroCarousel" class="carousel slide position-absolute w-100 h-100 carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100" data-bs-interval="6000">
                <img src="{{ asset('assets/img/hero-img.jpg') }}" alt="" class="d-block w-100 h-100 object-fit-cover">
            </div>
            <div class="carousel-item h-100" data-bs-interval="6000">
                <img src="{{ asset('assets/img/hero-img1.jpg') }}" alt="" class="d-block w-100 h-100 object-fit-cover">
            </div>
            <div class="carousel-item h-100" data-bs-interval="6000">
                <img src="{{ asset('assets/img/hero-bg2.jpg') }}" alt="" class="d-block w-100 h-100 object-fit-cover">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container text-center position-relative z-index-2 temp-herotxt-margintop">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">
                <span class="hero-txt" data-text="Welcome To">{{$hero_section['short_title']}}</span>
                <br>
                <span class="hero-txt" data-text="Faridpur Engineering College">
                    {{$hero_section['main_title']}}
                </span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="100">{{$hero_section['sub_title']}}<br></p>
            {{-- <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="{{$hero_section['get_started_btn_url']}}" class="btn-get-started">{{$hero_section['get_started_btn']}}</a>
                <a href="{{$hero_section['watch_video_btn_url']}}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>{{$hero_section['watch_video_btn']}}</span></a>
            </div> --}}
            <img src="{{asset('assets/img/'.$hero_section['logo'])}}" class="img-fluid hero-img" alt="{{$hero_section['logo_alt']}}" style="height: 255pt" data-aos="zoom-out" data-aos-delay="300">
        </div>
    </div>
</section>
<!-- /Hero Section -->
