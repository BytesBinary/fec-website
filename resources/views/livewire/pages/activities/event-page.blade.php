<div class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header Section -->
    <div class="bg-white p-6 shadow-md flex flex-col md:flex-row justify-between items-center rounded-lg mx-6 md:mx-12">
        <div class="flex items-center space-x-6 mb-6 md:mb-0">
            <img src="{{ asset('images/BytesBinary.png') }}" alt="Event Image" class="w-16 h-16 rounded-lg shadow-md hover:scale-105 transition">
            <div>
                <h1 class="text-xl md:text-2xl font-bold text-gray-900 hover:text-orange-500 transition">Event Name</h1>
                <p class="text-sm text-gray-600">Interested Count Interested</p>
            </div>
        </div>
        <button class="bg-orange-500 text-white px-5 py-3 md:px-6 md:py-3 rounded-md hover:bg-orange-600 transition">Register</button>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col lg:flex-row mx-auto p-6 md:p-8 gap-2 mx-4">
        <!-- Event Banner -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition w-full order-2 lg:order-1 ">
            <img src="{{ asset('images/gallery/10.jpg') }}" alt="Event Banner" class="w-full rounded-md mb-6">
            <p class="text-center text-xs text-gray-500 italic mb-6">Event Slogan</p>
            <h2 class="text-lg md:text-xl font-semibold text-gray-900 mb-4">About the event</h2>
            <p class="text-gray-700 mb-4">Event Name</p>
            <p class="text-gray-600 text-sm">Event Description</p>
        </div>

        <!-- Date & Time Section (Reordered for mobile) -->
        <div class="order-1 lg:order-2 flex md:flex-col gap-4">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition w-3/5 lg:w-full">
                <h3 class="font-semibold text-gray-800 text-lg mb-4">Date & Time</h3>
                <p class="text-sm text-gray-600 mb-4">Event Date and Time</p>
                <a href="calendar-link" class="text-blue-500 text-sm hover:underline transition">Add to Calendar</a>
                <h3 class="font-semibold text-gray-800 text-lg mt-6 mb-4">Location</h3>
                <p class="text-sm text-gray-600 mb-4">Event Location</p>
                <a href="map-link" class="text-blue-500 text-sm hover:underline transition">View on Map</a>
                <h3 class="font-semibold text-gray-800 text-lg mt-6 mb-4">Spread the word</h3>
                <div class="flex space-x-6">
                    <a href="facebook-link" class="text-blue-600 hover:text-blue-700 transition"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="twitter-link" class="text-cyan-500 hover:text-cyan-600 transition"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href="pinterest-link" class="text-red-600 hover:text-red-700 transition"><i class="fab fa-pinterest-square"></i> Pinterest</a>
                </div>
            </div>

            <!-- Host Details -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition w-2/5 lg:w-full">
                <h3 class="font-semibold text-gray-800 text-lg mb-4">Host Details</h3>
                <div class="flex items-center mt-4">
                    <img src="host-image.jpg" alt="Host Image" class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                    <div>
                        <p class="text-gray-700 font-semibold">Host Name</p>
                        <a href="host-contact-link" class="text-blue-500 text-sm hover:underline transition">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
