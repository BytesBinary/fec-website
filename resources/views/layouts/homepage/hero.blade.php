<!-- Hero Section -->
<section id="hero" class="hero section">
    <div class="hero-bg">
        <img src="{{asset('assets/img/'.$hero_section['img'])}}" alt="{{$hero_section['img_alt']}}">
    </div>
    <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 data-aos="fade-up">{{$hero_section['short_title']}} <br><span>{{$hero_section['main_title']}}</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">{{$hero_section['sub_title']}}<br></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="{{$hero_section['get_started_btn_url']}}" class="btn-get-started">{{$hero_section['get_started_btn']}}</a>
                <a href="{{$hero_section['watch_video_btn_url']}}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>{{$hero_section['watch_video_btn']}}</span></a>
            </div>
            <img src="{{asset('assets/img/'.$hero_section['logo'])}}" class="img-fluid hero-img" alt="{{$hero_section['logo_alt']}}" style="height: 255pt" data-aos="zoom-out" data-aos-delay="300">
        </div>
    </div>
</section>
<!-- /Hero Section -->
