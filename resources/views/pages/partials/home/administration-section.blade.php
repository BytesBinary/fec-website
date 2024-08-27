<section class="section administration-section">
    <div class="container">
       <x-section-title title="{{ $administration['title'] }}"
            des="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            animation="fade-up" />
        <div class="row g-4">
            @foreach ( $administration['members'] as $key => $member )
            <x-card
            row-class="col-sm-4"
            link="#"
            animation="{{$key === 0 ? 'fade-right' : ($key === 1 ? 'fade-up' : ($key === 2 ? 'fade-down' : 'fade-left')) }}"
            image="true"
            image-class="rounded-top"
            cardimage="true"
            imageUrl="{{ asset('assets/img/robin .jpg') }}"
            imageAlt="{{ $member['name'] }}"
            body-class="text-center" cardTitle="{{ $member['name'] }}" title-class="mb-3 fw-bold"
            cardText="{{ $member['designation'] }}"
            text-class="text-muted mb-4"
            />
            @endforeach
        </div>
    </div>
</section>
