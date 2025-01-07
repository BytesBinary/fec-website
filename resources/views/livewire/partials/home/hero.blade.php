<div>
    <!-- Swiper Hero Section -->
    <div
        class="swiper-container swiper-container-hero-section relative h-[560px] lg:min-h-screen w-full overflow-hidden">
        <div class="swiper-wrapper">
            @foreach ($images as $index => $image)
                <div class="swiper-slide relative h-[560px] lg:min-h-screen overflow-hidden">
                    <!-- Added overflow-hidden here -->
                    <!-- Background Image -->
                    <img src="{{ $image['src'] ?? '#' }}" alt="{{ $image['title'] ?? 'Hero Slide' }} Background"
                        class="absolute inset-0 w-full h-full object-cover filter blur-[4px]" loading="lazy">

                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-violet-400 to-transparent h-1/3"></div>

                    <!-- Content -->
                    <div
                        class="relative z-10 flex flex-col items-center justify-center h-[560px] lg:min-h-screen text-center space-y-6 px-6 pb-10 animate-fade-in-zoom">
                        <!-- Tagline -->
                        <span
                            class="text-sm md:text-base text-white font-bold uppercase tracking-wide animate-slide-in-left">
                            {{ $image['tagline'] ?? 'Innovate Your World' }}
                        </span>

                        <!-- Title with gradient text -->
                        <h1 class="text-4xl md:text-6xl font-extrabold text-yellow-400 drop-shadow-lg">
                            {{ $image['title'] ?? 'Empower Your Journey' }}
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-lg md:text-2xl text-white animate-slide-in-right">
                            {{ $image['description'] ?? 'Discover solutions that redefine possibilities.' }}
                        </p>

                        <!-- Buttons -->
                        <div class="flex items-center space-x-4">
                            <!-- Secondary Button -->
                            <a href="#about"
                                class="relative group inline-block bg-gradient-to-r from-yellow-500 to-orange-400 py-[14px] px-10 rounded-lg text-lg font-semibold shadow-lg transition duration-300 ease-in-out hover:scale-95 hover:shadow-2xl">
                                <span
                                    class="absolute inset-0 bg-yellow-300 opacity-0 group-hover:opacity-10 rounded-lg transition duration-300"></span>
                                <span class="relative z-10">
                                    Learn More
                            </a>
                            <!-- Primary Button -->

                            <a href="#gallery"
                                class="inline-block border-2 border-yellow-400 text-yellow-400 py-3 px-10 rounded-lg text-lg font-semibold hover:bg-yellow-400 hover:text-gray-900 transition duration-300 hidden lg:block">Explore
                                Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Swiper Navigation -->
        <div class="swiper-button-next hover:text-yellow-400 transition duration-300"></div>
        <div class="swiper-button-prev hover:text-yellow-400 transition duration-300"></div>
    </div>
</div>

@push('scripts')
    @vite(['resources/js/home/hero.js'])
@endpush
