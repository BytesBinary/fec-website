<div>
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Upcoming Events</h2>
                <p class="text-gray-600 mt-4 max-w-xl mx-auto">Discover the latest events happening around you. Join us and make unforgettable memories while exploring exciting opportunities to learn and connect.</p>
            </div>
            @php dd($events) @endphp

            <!-- Event Cards -->
            <div class="grid grid-cols-1 place-items-center md:gap-x-10 md:place-items-stretch md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card 1 -->
                <x-card.events-card
                    title="Tech Innovators Conference 2025"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="10 JANUARY 2025"
                    location="Dhaka Convention Center, Bangladesh"
                    url="{{ route('event', ['slug' => 'tech-conference-2025']) }}"
                    wire:navigate
                    is-home-page="true"
                />

                <!-- Event Card 2 -->
                <x-card.events-card
                    title="Cultural Night Extravaganza"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="15 FEBRUARY 2025"
                    location="Chittagong Club, Bangladesh"
                    url="{{ route('event', ['slug' => 'cultural-night']) }}"
                    wire:navigate
                    is-home-page="true"
                />

                <!-- Event Card 3 -->
                <x-card.events-card
                    title="Annual Science Fair"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="20 MARCH 2025"
                    location="Rajshahi University Campus"
                    url="{{ route('event', ['slug' => 'science-fair']) }}"
                    wire:navigate
                    is-home-page="true"
                />

                <!-- Event Card 4 -->
                <x-card.events-card
                    title="Music Fest 2025"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="25 APRIL 2025"
                    location="Sylhet Auditorium, Bangladesh"
                    url="{{ route('event', ['slug' => 'music-fest-2025']) }}"
                    wire:navigate
                    is-home-page="true"
                />

                <!-- Event Card 5 -->
                <x-card.events-card
                    title="Startup Pitch Competition"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="30 MAY 2025"
                    location="Khulna Innovation Hub"
                    url="{{ route('event', ['slug' => 'startup-pitch-competition']) }}"
                    wire:navigate
                    is-home-page="true"
                />

                <!-- Event Card 6 -->
                <x-card.events-card
                    title="Photography Workshop"
                    pic="{{asset('images/gallery/2.jpg')}}"
                    date="05 JUNE 2025"
                    location="Faridpur Engineering College, Bangladesh"
                    url="{{ route('event', ['slug' => 'photography-workshop']) }}"
                    wire:navigate
                    is-home-page="true"
                />
            </div>
        </div>
    </section>
</div>
