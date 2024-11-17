@props([
    'pic' => '',
    'title' => '',
    'date' => '', // Ensure this is in a parsable format like "YYYY-MM-DD HH:MM:SS"
    'url' => '',
    'location' => '',
    'interestCount' => 0,
])

<div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition duration-200 flex flex-col delay-100 hover:scale-[1.03] shadowm-md shadow-slate-400 min-w-[365px] lg:min-w-[300px] max-w-[370px] max-h-[480px] mb-10">
    <!-- Header Image and Main Info -->
    <div class="p-2 bg-slate-100">
        <div class="w-full">
            <img class="w-full max-h-[240px]" src="{{ asset($pic) }}" alt="Event pic">
            <div class="bg-slate-300 w-full">
                <h3 class="pl-4 pt-2 text-lg font-semibold tracking-tight">09 DECEMBER 2024</h3>
                <h2 class="text-xl font-semibold text-sky-950 hover:text-blue-900 transition-colors duration-200 pl-4">
                    {{ $title }}</h2>
                <p class="text-sm text-gray-700 py-1 pl-4">{{ $location }}</p>

                <div class="flex gap-8 flex-nowrap pl-4 pr-3">
                    <div class='inline-block mt-2 rounded-md shadow-sm p-1 shadow-slate-600'>
                        <span class="text-sm text-blue-800 cursor-pointer flex items-center p-[2px] gap-[2px] font-semibold">
                            <x-svg-icon.star></x-svg-icon.star>
                            {{ $interestCount }} interested
                        </span>
                    </div>
                    <div id="timer-{{ $attributes->get('id') }}" class="mt-2 text-[15px] text-sky-950 font-medium tracking-tight p-1">
                        <span id="days-{{ $attributes->get('id') }}">0</span>D
                        <span id="hours-{{ $attributes->get('id') }}">0</span>Hr
                        <span id="minutes-{{ $attributes->get('id') }}">0</span>Min
                        <span id="seconds-{{ $attributes->get('id') }}">0</span>S
                    </div>
                </div>
                <div class="w-full p-2 pt-4 flex">
                    <a href="{{ $url }}" class="mx-auto text-center w-[70%] bg-sky-950 hover:bg-sky-900 text-white py-2 px-4 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg" wire:navigate>
                        Learn more
                    </a>
                </div>
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
