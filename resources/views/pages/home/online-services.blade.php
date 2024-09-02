@php
    dd($online_services_section)
@endphp
{{-- <section class="section online-services-section">
    <div class="container">
        <x-section-title title="{{ $online_services[0]['meta_value']['section_title'] }}" des="{{ $online_services[0]['meta_value']['section_heading'] }}" animation="fade-up" />
        <div class="row justify-content-center align-items-center card-container">
            @foreach ($online_services as $service)
                <x-card
                    row-class="col-lg-4 mt-3 card-holder"
                    animation="zoom-in-up"
                    card-class="shadow-lg rounded-md h-100"
                    body-class="text-center"
                    image="true"
                    image-url="{{ asset($service->meta_value['image']) }}"
                    image-class="img-fluid mb-3 card-image icon"
                    image-alt="{{ $service->meta_value['title'] }}"
                    title-class="card-title card-title-fourth my-3"
                    card-title="{{ $service->meta_value['title'] }}"
                    text-class="card-text card-text-fourth mb-4"
                    card-text="{{ $service->meta_value['description'] }}"
                    button="true"
                    button-url="{{ $service->meta_value['btn_url'] }}"
                    url-class="text-white stretched-link"
                    button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="{{ $service->meta_value['btn_txt'] }}"
                />
            @endforeach
        </div>
    </div>
</section> --}}
