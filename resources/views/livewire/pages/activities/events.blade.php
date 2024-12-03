<div>
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">Upcoming Events</h2>
                <p class="text-gray-600 mt-4 max-w-xl mx-auto">Discover the latest events happening around you. Join us
                    and make unforgettable memories while exploring exciting opportunities to learn and connect.</p>
            </div>
            {{-- @php dd($events) @endphp --}}

            <!-- Event Cards -->
            <div
                class="grid grid-cols-1 place-items-center md:gap-x-10 md:place-items-stretch md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event Card -->
                @foreach ($events as $event)
                    <x-card.events-card :title="$event['post_title']" pic="{{ asset('storage/'.$event['event_details']['feature_image']) }}"
                    date="10 JANUARY 2025" location="Dhaka Convention Center, Bangladesh"
                    url="{{ route('event', ['slug' => 'tech-conference-2025']) }}" wire:navigate is-home-page="true" />
                @endforeach
            </div>
        </div>
    </section>
</div>
