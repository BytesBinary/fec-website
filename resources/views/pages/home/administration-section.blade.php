@if(!$administration->isEmpty())
    <section class="section administration-section">
        <div class="container">
            <x-section-title title="Administration Section"
                             des="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                             animation="fade-up" />
            <div class="row g-4">
                @foreach ( $administration as $key => $member )
                    <x-card
                        row-class="col-sm-3"
                        link="#"
                        animation="{{$key === 0 ? 'fade-right' : ($key === 1 ? 'fade-up' : ($key === 2 ? 'fade-down' : 'fade-left')) }}"
                        image="true"
                        image-class="rounded-top"
                        cardimage="true"
                        imageUrl="{{ asset($member['meta_value']['image']) }}"
                        imageAlt="{{ $member['meta_value']['name'] }}"
                        body-class="text-center" cardTitle="{{ $member['meta_value']['name'] }}" title-class="mb-3 fw-bold"
                        cardText="{{ $member['meta_value']['designation'] }}"
                        text-class="text-muted mb-4"
                    />
                @endforeach
            </div>
        </div>
    </section>
@endif
