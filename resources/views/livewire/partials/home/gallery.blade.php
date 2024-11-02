<div class="swiper-container swiper-container-gallery py-10">
    <div class="swiper-wrapper mb-10">

        @foreach ($galleries as $gallery)
        <div class="swiper-slide">
            <div class="relative">
                <figure class="overflow-hidden">
                    <a href="{{ asset($gallery['src']) }}">
                        class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset($gallery['src']) }}" alt="Gallery Image"
                             class="w-full h-64 sm:h-72 md:h-80 lg:h-96 object-cover transition-transform duration-300 hover:scale-105 hover:cursor-zoom-in" />
                        <div class="overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 hover:opacity-100 hover:cursor-zoom-in"></div>
                    </a>
                </figure>
            </div>
            </div>
        @endforeach

    </div>
</div>
@push('scripts')
    @vite(['resources/js/home/gallery.js'])
@endpush
