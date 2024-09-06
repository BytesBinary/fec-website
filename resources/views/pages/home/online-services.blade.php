@if(! $online_services_section->isEmpty())
    <section class="section online-services-section">
        <div class="container">
            <x-section-title title="Online Services Section" des="" animation="fade-up" />
            <div class="row justify-content-center align-items-center card-container">
                @foreach ($online_services_section as $service)
                    <x-card
                        row-class="col-lg-4 mt-3 card-holder"
                        animation="zoom-in-up"
                        card-class="shadow-lg rounded-md h-100"
                        body-class="text-center"
                        image="true"
                        image-url="{{ $service['meta_value']['image'] }}"
                        image-class="img-fluid mb-3 card-image icon"
                        image-alt="image"
                        title-class="card-title card-title-fourth my-3"
                        card-title="{{ $service['meta_value']['title'] }}"
                        text-class="card-text card-text-fourth mb-4"
                        card-text="{{ $service['meta_value']['description'] }}"
                        button="true"
                        button-url="{{ $service['meta_value']['btn-url'] }}"
                        url-class="text-white stretched-link"
                        button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                        button-text="{{ $service['meta_value']['btn-txt'] }}"
                    />
                @endforeach
            </div>
        </div>
    </section>
@endif

