<section id="faq" class="faq section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                <div class="faq-container">
                    @foreach ($faq_section as $faq )
                    <div class="faq-item {{ ($faq['meta_key'] === "faq_section" ) ? 'faq-active' : '' }} ">
                        <h3>{{$faq['meta_value']['question']}}</h3>
                        <div class="faq-content">
                            <p>{{$faq['meta_value']['ans']}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    @endforeach

                </div>

            </div><!-- End Faq Column-->

        </div>

    </div>

</section><!-- /Faq Section -->
