<section class="section online-services-section">
    <div class="container">
        <x-section-title title="{{ $online_services['section_title'] }}" des="{{ $online_services['section_heading'] }}"
            animation="fade-up" />
        <div class="row justify-content-center align-items-center card-container">

            @php
                use Illuminate\Support\Str;
            @endphp

            @foreach ($online_services['services'] as $service)
                <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up"
                    card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true"
                    image-url="{{ $service['image_url'] }}" image-class="img-fluid mb-3 card-image icon"
                    image-alt="{{ $service['name'] }}" title-class="card-title card-title-fourth my-3"
                    card-title="{{ $service['name'] }}" text-class="card-text card-text-fourth mb-4"
                    card-text="{{ $service['description'] }}" button="true"
                    button-url="{{ Str::startsWith($service['button_url'], 'https') ? $service['button_url'] : route($service['button_url']) }}"
                    url-class="text-white stretched-link"
                    button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="{{ $service['button_text'] }}" />
            @endforeach

        </div>
    </div>
</section>
