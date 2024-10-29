<div>
    <!--Swiper Hero Section-->
    <div class="swiper-container swiper-container-hero-section relative h-screen w-full overflow-hidden">
        <div class="swiper-wrapper">
            <!-- Loading details from livewire-->
            @foreach ($images as $index => $image)
                <div class="swiper-slide bg-gray-400 h-screen">
                    <div
                        class="absolute inset-0 w-full h-full transition-opacity duration-500 ease-in-out"
                    >
                        <img src="{{ $image['src'] }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-[1px]">
                        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
                                <h1 class="text-5xl font-bold leading-tight mb-4" style="color: whitesmoke">{{ $image['title'] }}</h1>
                                <p class="text-xl text-gray-300 mb-8">{{ $image['description'] }}</p>
                                <a href="#administration" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 mt-5 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@push('scripts')
    @vite(['resources/js/home/hero.js'])
@endpush
