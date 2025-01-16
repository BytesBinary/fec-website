<section class="container mx-auto p-8 bangla-font">
    <h1 class="text-center text-5xl mb-5">অনলাইন সেবা সমূহ</h1>
    <hr class="w-48 h-1 mx-auto bg-blue-400 border-0 rounded">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">

        @foreach ($govtCards as $card)
            <div class="rounded-lg p-6 bg-zinc-50 shadow-lg shadow-gray-300">
                <!-- Card Content -->
                <div class="flex items-center space-x-4">
                    <!-- Image -->
                    <img src="{{ $card['src'] }}" alt="Service" class="w-24 h-24">
                    <!-- Text Section -->
                    <div>
                        <h2 class="text-xl font-bold mb-2">{{ $card['title'] }}</h2>
                        <ul class="list-none">
                            @foreach ($card['sub_links'] as $link)
                                <li class="text-gray-800 hover:underline hover:text-blue-900"><a
                                        href="{{ $link['url'] }}" target="_blank">{{ $link['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
