<div class="max-w-7xl mx-auto py-16 px-2" x-data="{
    currentIndex: 0,
    cards: [
        { name: 'AbdullahRafi', email: 'AbdullahRafi@example.com', position: 'Position 1', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 2', email: 'AbdullahRafi2@example.com', position: 'Position 2', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 3', email: 'AbdullahRafi3@example.com', position: 'Position 3', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 4', email: 'AbdullahRafi4@example.com', position: 'Position 4', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 5', email: 'AbdullahRafi5@example.com', position: 'Position 5', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 6', email: 'AbdullahRafi6@example.com', position: 'Position 6', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 7', email: 'AbdullahRafi7@example.com', position: 'Position 7', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 8', email: 'AbdullahRafi8@example.com', position: 'Position 8', image: '{{asset('images/Profile Pic.jpg')}}' },
        { name: 'AbdullahRafi 9', email: 'AbdullahRafi9@example.com', position: 'Position 9', image: '{{asset('images/Profile Pic.jpg')}}' }
    ],
    showNextSet() {
        this.currentIndex = (this.currentIndex + 3) % this.cards.length;
    }
}">
    <h2 class="text-center text-5xl font-semibold mb-8">ALUMNI</h2>
    <div class="relative overflow-hidden">
        <!-- Cards Container -->
        <div class="flex transition-transform duration-500" :style="{ transform: 'translateX(' + (-currentIndex * (100 / 3)) + '%)' }">
            <!-- Alumni Cards -->
            <template x-for="card in cards" :key="card.email">
                <div class="flex-shrink-0 w-1/3 px-4">
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center group cursor-pointer hover:bg-gradient-to-r from-teal-400 via-blue-500 to-purple-600 hover:text-white transition duration-300">
                        <img :src="card.image" alt="Alumni Image" class="w-24 h-24 rounded-full mb-4">
                        <div class="text-center">
                            <h3 class="text-xl font-semibold mb-2" x-text="card.name"></h3>
                            <p class="text-gray-500 text-sm mb-4 group-hover:text-white" x-text="card.email"></p>
                            <p class="text-gray-700 mb-4 group-hover:text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pretium.</p>
                            <p class="font-semibold group-hover:text-white" x-text="card.position"></p>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <!-- Navigation Buttons -->
        <button @click="currentIndex = (currentIndex - 3 + cards.length) % cards.length"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-3 shadow-lg cursor-pointer hover:bg-teal-100 transition duration-300">
            <x-svg-icon.previous />
        </button>
        <button @click="showNextSet"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-3 shadow-lg cursor-pointer hover:bg-teal-100 transition duration-300">
            <x-svg-icon.next />
        </button>
    </div>
</div>
