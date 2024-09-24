<div x-data="carousel()" class="container mx-auto py-16 px-2">
    <h2 class="text-center text-5xl font-semibold mb-8">ALUMNI</h2>
    <div class="relative w-full max-w-4xl mx-auto overflow-hidden">
        <!-- Previous Button -->
        <button @click="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-4 text-xl shadow-lg cursor-pointer hover:bg-teal-200 transition duration-300 z-10">
            <x-svg-icon.previous class="w-6 h-6" />
        </button>
        <!-- Next Button -->
        <button @click="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-4 text-xl shadow-lg cursor-pointer hover:bg-teal-200 transition duration-300 z-10">
            <x-svg-icon.next class="w-6 h-6" />
        </button>
        <!-- Container for cards -->
        <div class="flex justify-center items-center overflow-hidden">
            <div class="flex space-x-4 transition-transform duration-500" :style="{ transform: `translateX(-${currentIndex * 33.33}%)` }">
                <template x-for="(card, index) in alumniCards" :key="index">
                    <!-- Each card -->
                    <div :class="{'scale-100': index === middleIndex, 'scale-90': index !== middleIndex}"
                         class="flex-none w-1/3 transition-transform duration-500 ease-out transform">
                        <x-alumniCard />
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>

<script>
    function carousel() {
        return {
            alumniCards: [1, 2, 3, 4, 5, 6], // Example data for 6 cards
            currentIndex: 0,
            middleIndex: 1, // Middle card index when first visible
            visibleCards: 3, // Only 3 cards will be visible

            next() {
                this.currentIndex = (this.currentIndex + 1) % this.alumniCards.length;
                this.updateMiddleIndex();
            },

            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.alumniCards.length) % this.alumniCards.length;
                this.updateMiddleIndex();
            },

            updateMiddleIndex() {
                // Update the middle index based on the currentIndex
                this.middleIndex = (this.currentIndex + Math.floor(this.visibleCards / 2)) % this.alumniCards.length;
            },

            // Auto-slide every 3 seconds
            init() {
                setInterval(() => {
                    this.next();
                }, 3000);
            }
        }
    }
</script>
