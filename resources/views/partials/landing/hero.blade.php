<div x-data="carousel()" class="relative w-full overflow-hidden">
    <!-- Carousel Inner Wrapper -->
    <div class="relative w-full h-[550px]">
        <template x-for="(image, index) in images" :key="index">
            <div x-show="currentIndex === index" class="absolute inset-0 w-full h-full bg-cover bg-center"
                :style="`background-image: url(${image.src})`">
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                
                <!-- Dynamic Text on Image with Animation -->
                <div :class="image.position" class="absolute text-center text-white px-4 w-full"
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-y-10" 
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-500"
                     x-transition:leave-start="opacity-100 translate-y-0" 
                     x-transition:leave-end="opacity-0 translate-y-10">
                    <div>
                        <h2 class="text-3xl font-bold" x-text="image.text"
                            x-transition:enter="transition ease-out duration-1000"
                            x-transition:enter-start="opacity-0 scale-50"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-500"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-50"></h2>
                        <p class="mt-4 text-lg" x-text="image.description"
                            x-transition:enter="transition ease-out duration-1000"
                            x-transition:enter-start="opacity-0 translate-y-5"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-500"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-5"></p>
                    </div>
                </div>
            </div>
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

<!-- Alpine.js Script -->
<script>
    function carousel() {
        return {
            currentIndex: 0,
            images: [
                { 
                    src: 'images/gallery/2.jpg', 
                    text: 'Image 1 Text', 
                    description: 'Description for image 1',
                    position: 'top-10'  // Text position at the top
                },
                { 
                    src: 'images/gallery/4.jpg', 
                    text: 'Image 2 Text', 
                    description: 'Description for image 2',
                    position: 'bottom-10'  // Text position at the bottom
                },
                { 
                    src: 'images/gallery/6.jpg', 
                    text: 'Image 3 Text', 
                    description: 'Description for image 3',
                    position: 'left-10'  // Text position on the left
                },
                { 
                    src: 'images/gallery/8.jpg', 
                    text: 'Image 4 Text', 
                    description: 'Description for image 4',
                    position: 'right-10'  // Text position on the right
                }
            ],
            init() {
                setInterval(() => {
                    this.next();
                }, 3000);
            },
            prev() {
                this.currentIndex = (this.currentIndex === 0) ? this.images.length - 1 : this.currentIndex - 1;
            },
            next() {
                this.currentIndex = (this.currentIndex === this.images.length - 1) ? 0 : this.currentIndex + 1;
            }
        };
    }
</script>
