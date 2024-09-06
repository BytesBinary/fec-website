<!-- Hero Section -->
@if(!empty($hero_section))
    <section id="hero" class="hero section position-relative">
        <div id="heroCarousel" class="carousel slide position-absolute w-100 h-100 carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                @foreach($hero_section->bg_images as $bg_image)
                    <div class="carousel-item active h-100" data-bs-interval="6000">
                        <img src="{{ asset($bg_image) }}" alt="" class="d-block w-100 h-100 object-fit-cover">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="carousel-overlay position-absolute w-100 h-100 top-0 start-0"></div>

        <div class="container text-center position-relative temp-herotxt-margintop">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 data-aos="fade-up">
                    <span class="hero-txt" data-text="Welcome To">{{$hero_section->title}}</span>
                    <br>
                    <span class="hero-txt" data-text="Faridpur Engineering College">
                    {{$hero_section->name}}
                </span>
                </h1>
                <p data-aos="fade-up" data-aos-delay="100">{{$hero_section->slogan}}<br></p>
                <img src="{{asset($hero_section->image)}}" class="img-fluid hero-img" style="height: 255pt" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
@endif

