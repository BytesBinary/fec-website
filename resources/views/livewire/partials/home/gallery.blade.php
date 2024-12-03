<div class="swiper-container swiper-container-gallery" id="gallery">
    <div class="swiper-wrapper lg:gap-4 mb-10 mt-8 lg:px-2 sm:gap-6 sm:mt-16 sm:px-4">
        @foreach ($galleries as $gallery)
        <div class="swiper-slide">
            <div class="relative group overflow-hidden rounded-lg shadow-md sm:rounded-xl sm:shadow-lg transform transition-transform duration-500 hover:scale-105">
                <figure>
                    <a href="{{ asset($gallery['src']) }}" class="glightbox" data-gallery="gallery1">
                        <!-- Image -->
                        <img src="{{ asset($gallery['src']) }}" alt="Gallery Image"
                             class="w-full h-48 sm:h-64 md:h-72 lg:h-80 xl:h-96 object-cover transition-transform duration-500 ease-in-out group-hover:scale-110" />
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/50 to-black/80 opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out"></div>
                        <!-- Icon on Hover -->
                        <div class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                            <i class="fas fa-search-plus text-3xl sm:text-4xl"></i>
                        </div>
                    </a>
                </figure>
            </div>
        </div>
        @endforeach
    </div>
</div>
