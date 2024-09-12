<div class="container mx-auto py-16 px-2">
    <h2 class="text-center text-5xl font-semibold mb-8">ALUMNI</h2>
    <div class="relative">
        <!-- Previous Button -->
        <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-4 text-xl shadow-lg cursor-pointer hover:bg-teal-200 transition duration-300 z-10">
            <x-svg-icon.previous class="w-6 h-6" />
        </button>
        <!-- Next Button -->
        <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white border border-gray-300 rounded-full p-4 text-xl shadow-lg cursor-pointer hover:bg-teal-200 transition duration-300 z-10">
            <x-svg-icon.next class="w-6 h-6" />
        </button>
        <!-- Container for cards -->
        <div class="flex justify-center items-center px-16">
            <div class="flex space-x-4">
                <!-- Card components -->
                <x-alumniCard />
                <x-alumniCard />
                <x-alumniCard />
            </div>
        </div>
    </div>
</div>
