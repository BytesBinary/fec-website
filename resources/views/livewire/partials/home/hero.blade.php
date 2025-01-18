<!-- Swiper Hero Section -->
<div class="relative h-[560px] lg:min-h-screen w-full overflow-hidden mt-[6.5rem] lg:mt-0">
    <!-- Background Image with Blur -->
    <img src="{{ $image['src'] }}" alt="{{ $image['title'] ?? 'Hero Slide' }} Background"
        class="absolute inset-0 w-full h-full object-cover blur-[4px] transition duration-500 ease-out loaded:blur-none"
        loading="lazy" decoding="async" onload="this.classList.add('loaded')" />

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-violet-400 to-transparent h-1/3 pointer-events-none"
        aria-hidden="true">
    </div>

    <!-- Content -->
    <div
        class="relative z-10 flex flex-col items-center justify-center h-[560px] lg:min-h-screen text-center space-y-6 px-6 pb-10 animate-fade-in">
        <!-- Tagline -->
        <span class="text-sm md:text-base text-white font-bold uppercase tracking-wide animate-slide-in-left">
            {{ $image['tagline'] ?? 'Innovate Your World' }}
        </span>

        <!-- Title with gradient text -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-yellow-400 drop-shadow-lg leading-tight">
            {{ $image['title'] ?? 'Empower Your Journey' }}
        </h1>

        <!-- Subtitle -->
        <p class="text-lg md:text-2xl text-white animate-slide-in-right max-w-2xl mx-auto">
            {{ $image['description'] ?? 'Discover solutions that redefine possibilities.' }}
        </p>

        <!-- Buttons -->
        <div class="flex flex-wrap items-center justify-center space-x-4 mt-6">
            <!-- Learn More Button -->
            <a href="#about"
                class="relative group inline-block bg-gradient-to-r from-yellow-500 to-orange-400 py-[14px] px-10 rounded-lg text-lg font-semibold shadow-lg transition-transform duration-300 ease-in-out hover:scale-95 hover:shadow-2xl">
                <span
                    class="absolute inset-0 bg-yellow-300 opacity-0 group-hover:opacity-10 rounded-lg transition duration-300"></span>
                <span class="relative z-10">Learn More</span>
            </a>

            <!-- Explore Now Button -->
            <a href="#administration"
                class="border-2 border-yellow-400 text-yellow-400 py-3 px-10 rounded-lg text-lg font-semibold hover:bg-yellow-400 hover:text-gray-900 transition duration-300 hidden lg:inline-block">
                Explore Now
            </a>
        </div>
    </div>
</div>
