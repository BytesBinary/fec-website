<section class="about-section section">
    <div class="container">
        <x-section-title title="About Us" des="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." animation="fade-up" />
        <div class="row">
            <div class="col-sm-6 text px-5" data-aos="fade-up-right">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <a href="{{ route('about-college/at-a-glance') }}">
                    <div class="d-grid">
                        <button class="btn btn-warning" type="button">Read More <span><i class="bi bi-box-arrow-in-right"></i></span></button>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 position-relative img-side rounded px-3" data-aos="fade-up-left">
                <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    <a href="https://www.youtube.com/embed/_H9B4iynTY0?si=hssoHPSX4b3isoSt" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-caret-right-fill text-light"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
