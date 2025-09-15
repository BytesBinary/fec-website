<div>
<!-- Main Events Section -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Upcoming Events</h2>
            <p class="text-gray-600 mt-4 max-w-xl mx-auto">Explore the exciting events organized by the {{$event['dept']}} at Faridpur Engineering College.</p>
        </div>
        <!-- Event Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Event 1 -->
            @foreach ($event['randomEvents'] as $randomEvent)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{asset($randomEvent['img'])}}" alt="randomEvent 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-gray-800">{{$randomEvent['cardTitle']}}</h3>
                    <p class="text-gray-600 mt-2">{{$randomEvent['cardDesc']}}</p>
                    <div class="flex items-center justify-between mt-4">
                        <span class="text-gray-500 text-sm">{{$randomEvent['date']}}</span>
                        <a href="#" class="text-blue-600 hover:underline">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</div>
