<div class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Header Section -->
    <div class="bg-white p-4 shadow-md flex justify-between items-center rounded-lg mb-6">
        <div class="flex items-center space-x-6">
            <img src="event-image.jpg" alt="Event Image" class="w-16 h-16 rounded-lg shadow-md transform transition-all hover:scale-105">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 hover:text-orange-500 transition-colors duration-300">Event Name</h1>
                <p class="text-sm text-gray-600">Interested Count Interested</p>
            </div>
        </div>
        <button class="bg-orange-500 text-white font-semibold px-6 py-3 rounded-md hover:bg-orange-600 transition-colors duration-300">Find Tickets</button>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto p-6">
        <!-- Event Banner -->
        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 mb-6">
            <img src="event-banner.jpg" alt="Event Banner" class="w-full rounded-md mb-4">
            <p class="text-center text-xs text-gray-500 font-light italic">Event Slogan</p>
        </div>

        <!-- Event Description -->
        <section class="mt-6 bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">About the event</h2>
            <p class="text-gray-700 mb-4">Event Name</p>
            <p class="text-gray-600 text-sm">Event Description</p>
        </section>

        <!-- Details Section -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Date & Time -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="font-semibold text-gray-800 text-lg mb-2">Date & Time</h3>
                <p class="text-sm text-gray-600">Event Date and Time</p>
                <a href="calendar-link" class="text-blue-500 text-sm mt-2 inline-block hover:underline transition-all">Add to Calendar</a>
            </div>

            <!-- Location -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="font-semibold text-gray-800 text-lg mb-2">Location</h3>
                <p class="text-sm text-gray-600">Event Location</p>
                <a href="map-link" class="text-blue-500 text-sm mt-2 inline-block hover:underline transition-all">View on Map</a>
            </div>
        </div>

        <!-- Social Sharing and Host Details -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Social Sharing -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 flex flex-col items-start">
                <h3 class="font-semibold mb-2 text-gray-800 text-lg">Spread the word</h3>
                <div class="flex space-x-6 mt-2">
                    <a href="facebook-link" class="text-blue-600 hover:text-blue-700 text-lg transition-all"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="twitter-link" class="text-cyan-500 hover:text-cyan-600 text-lg transition-all"><i class="fab fa-twitter-square"></i> Twitter</a>
                    <a href="pinterest-link" class="text-red-600 hover:text-red-700 text-lg transition-all"><i class="fab fa-pinterest-square"></i> Pinterest</a>
                </div>
            </div>

            <!-- Host Details -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="font-semibold mb-2 text-gray-800 text-lg">Host Details</h3>
                <div class="flex items-center mt-2">
                    <img src="host-image.jpg" alt="Host Image" class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                    <div>
                        <p class="text-gray-700 font-semibold">Host Name</p>
                        <a href="host-contact-link" class="text-blue-500 text-sm hover:underline transition-all">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
