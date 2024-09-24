<div x-data="carousel()" class="relative h-screen w-full overflow-hidden">
    <template x-for="(image, index) in images" :key="index">
        <div
            x-show="currentIndex === index"
            class="absolute inset-0 w-full h-full transition-opacity duration-500 ease-in-out zoom-in-out"
            :class="{'zoom-in': currentIndex === index, 'zoom-out': currentIndex !== index}">
            <img :src="image.src" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-[2px]">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
                    <h1 class="text-5xl font-bold leading-tight mb-4" style="color: whitesmoke" x-text="image.title"></h1>
                    <p class="text-xl text-gray-300 mb-8" x-text="image.description"></p>
                    <a href="#administration" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 mt-5 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
                </div>
            </div>
        </div>
    </template>

    <!-- Indicators -->
    <div class="absolute bottom-4 w-full flex justify-center space-x-2">
        <template x-for="(image, index) in images" :key="index">
            <div
                @click="currentIndex = index"
                :class="{'bg-gray-300': currentIndex === index, 'bg-gray-600': currentIndex !== index}"
                class="w-3 h-3 rounded-full cursor-pointer transition-colors duration-300 ease-in-out"
            ></div>
        </template>
    </div>

    <!-- Carousel Controls -->
    <button @click="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full">
        &#10094;
    </button>
    <button @click="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full">
        &#10095;
    </button>
</div>

<script>
    function carousel() {
        return {
            currentIndex: 0,
            images: [
                { src: '{{ asset('images/hero-img.jpg') }}', title: 'Welcome to Faridpur Engineering College', description: 'A Place to learn and Grow.' },
                { src: '{{ asset('images/hero-img1.jpg') }}', title: 'Explore New Opportunities', description: 'Join us in our journey.' },
                { src: '{{ asset('images/hero-bg2.jpg') }}', title: 'Innovative Learning', description: 'Embrace the future of education.' }
            ],
            interval: null,
            startAutoPlay() {
                this.interval = setInterval(() => {
                    this.next();
                }, 5000);
            },
            resetAutoPlay() {
                clearInterval(this.interval);
                this.startAutoPlay();
            },
            prev() {
                this.currentIndex = this.currentIndex === 0 ? this.images.length - 1 : this.currentIndex - 1;
                this.resetAutoPlay();
            },
            next() {
                this.currentIndex = this.currentIndex === this.images.length - 1 ? 0 : this.currentIndex + 1;
                this.resetAutoPlay();
            },
            init() {
                this.startAutoPlay();
            }
        };
    }
</script>
