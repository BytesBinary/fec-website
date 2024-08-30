<section class="about-section section">
    <div class="container">
        <x-section-title title="{{ $about_section['section_title'] }}"
                         des="{{ $about_section['section_heading'] }}"
                         animation="fade-up" />

        <div class="row temp">
            <div class="col-sm-6 text" data-aos="fade-up-right">
                <p>
                    {!! ($about_section['section_des']) !!}
                </p>
                <a href="{{ route('about-college/infrastructure') }}">
                    <div class="d-grid">
                        <button class="btn btn-warning" type="button">
                            Read More <span><i class="bi bi-box-arrow-in-right"></i></span>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 img-side rounded px-3 mobile-height" data-aos="fade-up-left">
                <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    <a href="{{ $about_section['video_url'] }}" class="glightbox btn-watch-video d-flex align-items-center">
                        <i class="bi bi-caret-right-fill text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
