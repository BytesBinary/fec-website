@props([
    'pic' => '',
    'title' => '',
    'date' => '',
    'url' => '',
    'location' => '',
    'interestCount' => 0,
    'timerId' => '',
])
<div
class="bg-white rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-transform duration-300 flex flex-col w-[350px] mx-auto overflow-hidden relative">
<!-- Event Image -->
<div class="relative overflow-hidden">
    <img class="w-full h-56 object-cover transition-transform duration-300 hover:scale-110"
        src="{{ asset('storage/' . $pic) }}" alt="Event Image">
    <!-- Timer Badge -->
    <div
        class="absolute top-4 left-4 bg-gradient-to-r from-blue-600 to-indigo-500 text-white px-3 py-1.5 rounded-full shadow-lg flex items-center text-sm font-medium">
        <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3M12 2a10 10 0 100 20 10 10 0 000-20z" />
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
<div class="bg-gradient-to-b from-blue-50 to-white p-6 flex flex-col justify-between h-[19rem]">
    <!-- Title and Location -->
    <div class="text-center mb-4">
        <h2 class="text-xl font-bold text-gray-900 truncate">
            {{ $title }}
        </h2>
        <p class="text-sm font-medium text-gray-600 mt-1 truncate">
            {{ $location }}
        </p>
    </div>

    <!-- Date and Interested Section -->
    <div class="flex justify-between items-center text-sm font-medium text-gray-700">
        <!-- Event Date -->
        <div class="flex items-center space-x-1 text-blue-700">
            <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3M12 2a10 10 0 100 20 10 10 0 000-20z" />
            </svg>
            <span>{{ $date }}</span>
        </div>

        <!-- Interested Section -->
        <div class="flex items-center space-x-2 text-yellow-600">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 .587l3.668 7.568L24 9.743l-6 5.857L19.335 24 12 20.354 4.665 24 6 15.6l-6-5.857 8.332-1.588L12 .587z" />
            </svg>
            <span>{{ $interestCount }} Interested</span>
        </div>
    </div>

    <!-- Action Button -->
    <a href="{{ route('event', ['slug' => $url]) }}" wire:navigate
        class="mt-4 block text-center text-white bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 font-semibold">
        Learn More
    </a>
</div>
</div>

{{-- JavaScript for Event Timer --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
    const targetDate = new Date("{{ $date }}");
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
