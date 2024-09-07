@if(!empty($aboutUs))
    @php
        $content = strip_tags($aboutUs->content);
        $words = explode(' ', $content);
        $first100Words = implode(' ', array_slice($words, 0, 100));
    @endphp
    <section class="about-section section">
        <div class="container">
            <x-section-title title="About Us"
                             des="This is about us page"
                             animation="fade-up" />

            <div class="row temp">
                <div class="col-sm-6 text" data-aos="fade-up-right">
                    <p>
                        {!! nl2br(e($first100Words)) !!}
                    </p>
                    <a href="{{ route('at-a-glance') }}">
                        <div class="d-grid">
                            <button class="btn btn-warning" type="button">
                                Read More <span><i class="bi bi-box-arrow-in-right"></i></span>
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 img-side rounded px-3 mobile-height" data-aos="fade-up-left">
                    <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <a href="{{$aboutUs->video_url}}" class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-caret-right-fill text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

