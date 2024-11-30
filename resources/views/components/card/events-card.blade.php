@props([
    'pic' => '',
    'title' => '',
    'date' => '',
    'url' => '',
    'location' => '',
    'interestCount' => 0,
])

<div class="flex flex-wrap justify-center gap-6 lg:gap-4 p-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform duration-300 flex flex-col w-[95%] lg:w-[35%] min-w-[400px] max-w-[500px] mx-auto overflow-hidden relative">
        <!-- Event Image -->
        <div class="relative">
            <img class="w-full h-56 object-cover hover:scale-105 overflow-hidden duration-300" src="{{ asset($pic) }}" alt="Event Image">
            <!-- Timer Badge -->
            <div class="absolute top-4 left-4 bg-gradient-to-r from-blue-600 to-indigo-500 text-white px-4 py-2 rounded-full shadow-md flex items-center text-xs font-bold">
                <svg class="w-5 h-5 text-white " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M12 2a10 10 0 100 20 10 10 0 000-20z" />
                </svg>

                <span id="timer-{{ $attributes->get('id') }}" class="tracking-wide">
                    <span id="days-{{ $attributes->get('id') }}">0</span>D
                    <span id="hours-{{ $attributes->get('id') }}">0</span>H
                    <span id="minutes-{{ $attributes->get('id') }}">0</span>M
                    <span id="seconds-{{ $attributes->get('id') }}">0</span>S
                </span>
            </div>
        </div>

        <!-- Content Section -->
        <div class="relative bg-gradient-to-br from-blue-100 via-emerald-50 to-blue-100 p-8 lg:p-6 lg:space-y-3 h-[16rem] flex flex-col justify-between space-y-6">

            <!-- Title and Location -->
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-900 text-wrap">
                    {{ $title }}
                </h2>
                <p class="text-base font-medium text-gray-600 mt-2 text-wrap">
                    {{ $location }}
                </p>
            </div>

            <!-- Date and Interested Section -->
            <div class="flex justify-between items-center text-sm font-semibold text-blue-800 mt-4">
                <!-- Event Date -->
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg class="block w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    </svg>

                    <span>09 DEC 2024</span>
                </div>

                <!-- Interested Section -->
                <div class="flex items-center space-x-2">
                    <svg class="block w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .587l3.668 7.568L24 9.743l-6 5.857L19.335 24 12 20.354 4.665 24 6 15.6l-6-5.857 8.332-1.588L12 .587z" />
                    </svg>
                    <span>{{ $interestCount }} Interested</span>
                </div>
            </div>

            <!-- Action Button -->
            <div class="pt-4">
                <a href="{{ $url }}" wire:navigate class="block text-center text-sm font-semibold text-white bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-300" >
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>
{{-- JavaScript event timer --}}

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const targetDate = new Date("{{ $date }}").getTime();
        const timerId = "{{ $attributes->get('id') }}";

        function updateTimer() {
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining <= 0) {
                document.getElementById(`timer-${timerId}`).textContent = "Event Started!";
                return;
            }

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById(`days-${timerId}`).textContent = days;
            document.getElementById(`hours-${timerId}`).textContent = hours;
            document.getElementById(`minutes-${timerId}`).textContent = minutes;
            document.getElementById(`seconds-${timerId}`).textContent = seconds;
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    });
</script>
