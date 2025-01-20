<div class="pt-24 pb-20 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Upcoming Events</h2>
            <p class="text-gray-600 mt-4 max-w-xl mx-auto">Discover the latest events happening around you. Join us
                and make unforgettable memories while exploring exciting opportunities to learn and connect.</p>
        </div>
        <!-- Event Cards -->
        <div class="flex flex-wrap justify-center gap-6">
            <!-- Event Card -->
            @foreach ($events as $event)
                <x-card.events-card :title="$event['post_title']" pic="{{ $event['event_details']['feature_image'] }}"
                    :date="\Carbon\Carbon::parse($event['event_details']['event_date'])->format('F j, Y')" :location="$event['event_details']['event_location']" :url="$event['post_slug']" wire:navigate :is-home-page="true"
                    class="flex-grow max-w-[350px] w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.33%-16px)]" />
            @endforeach
        </div>
    </div>
    <x-pagination :paginationLinks="$events->links()" />
</div>
