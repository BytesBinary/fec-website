<div class="mx-auto w-full md:w-3/5 lg:w-3/5 p-3 text-cng">
    <div class="bg-white m-0 leading-normal">
        <!-- Header Section -->
        <div class="bg-white pt-0 lg:pt-3 md:p-4 lg:pb-0 mt-3 flex flex-col justify-between md:space-y-0 w-full">
            <div class="flex-1 text-center md:text-left mb-5 pl-5 md:pl-0 lg:pl-0 pr-5 lg:pr-0">
                <h1

                    class="text-3xl text-wrap md:text-4xl lg:text-5xl font-extrabold text-gray-900 leading-snug text-left">
                    {{$event['post_title']}}
                </h1>
                <p class="text-lg mt-3 text-gray-700 italic text-left">Innovating the Future Together</p>

                <div class="flex gap-3 mt-5">
                    <img src="{{ asset('images/BytesBinary.png') }}" alt="prof"
                        class="size-12 rounded-[50%] object-cover">
                    <div class="justify-start">
                        <h3 class="text-start font-semibold">
                            {{ reset($event['contact_details'])['contact_name'] }}
                        </h3>
                            <p class="text-start text-gray-700">{{ \Carbon\Carbon::parse($event['created_at'])->format('d F Y') }}
                        </p>
                    </div>
                </div>
                <div class="flex justify-between lg:w-full items-end">
                    <div class="flex items-end justify-start mt-1 space-y-4 lg:space-x-4 lg:w-full lg:shrink">
                        <div class="flex items-center lg:bg-gray-200 lg:hover:bg-gray-300 rounded lg:px-2 py-2 mt-4">
                            <img src="{{ asset('images/event/leadership.png') }}" alt="people interested"
                                class="size-5 mr-1">
                            <p class="text-sm text-gray-800">1,200+ Interested</p>
                        </div>
                        <button
                            class="flex items-center lg:bg-orange-100 lg:text-orange-600 rounded lg:shadow-sm lg:hover:shadow-md lg:hover:bg-orange-200 p-2 px-2 lg:px-4 ml-2 lg:ml-0">
                            <img src="{{ asset('images/event/star.png') }}" alt="Interested" class="h-5 w-5 mr-2">
                            <span class="hidden lg:flex text-sm">Interested</span>
                        </button>
                        <button
                            class="flex items-center lg:bg-blue-100 lg:text-blue-600 rounded lg:shadow-sm lg:hover:shadow-md lg:hover:bg-blue-200 p-2 px-[2px] lg:px-4">
                            <img src="{{ asset('images/event/share.png') }}" alt="Share" class="h-5 w-5 mr-2">
                            <span class="hidden lg:flex text-sm">Share</span>
                        </button>
                    </div>
                    <button wire:click="redirectTo('{{ $event['event_details']['registration_url'] }}')"
                        class="flex lg:hidden space-y-4 place-self-end font-medium rounded text-orange-600 text-md sm:text-lg underline underline-offset-4 mb-1">
                        Register Now
                    </button>
                    <div class="hidden lg:flex pt-4">
                        <button wire:click="redirectTo('{{ $event['event_details']['registration_url'] }}')"
                            class="bg-orange-500 text-white text-nowrap font-medium py-3 px-4 rounded shadow-md hover:bg-orange-600 hover:shadow-lg text-sm">
                            Register Now
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col mx-auto lg:gap-1">
            <div class="bg-white p-4 w-full order-2 lg:order-1">
                <img src="{{ asset($event['event_details']['feature_image']) }}" alt="Event Banner"
                    class="w-full h-72 object-cover rounded-md mb-4">
                <p class="text-center text-sm text-gray-600 italic mb-6">{{ $event['event_details']['short_description']}}</p>
                <h2 class="text-xl md:text-3xl font-semibold text-gray-900 mb-3">About the Event</h2>
                <p class="text-gray-900 text-md lg:text-lg tracking-wide mb-2">
                   {!!$event['post_content']!!}
                </p>

                <div class="mb-6">
                    <h3 class="text-lg lg:text-xl font-semibold text-black mb-2">Segments</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach ($event['event_segments'] as $segments)
                        <div class="bg-gray-200 p-3 rounded-md shadow-md hover:shadow-lg">
                            <h4 class="font-semibold text-gray-800">{{$segments['segment_title']}}</h4>
                            <p class="text-sm text-gray-700">{{$segments['segment_description']}}</p>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="w-full order-2 lg:order-2">
                <div class="lg:flex w-full lg:justify-between">
                    <div class="bg-white p-4">
                        <h3 class="font-semibold text-gray-800 text-lg mb-3">Date & Time</h3>
                        <p class="text-sm text-gray-600 mb-4">
                            {{ \Carbon\Carbon::parse($event['event_details']['event_date'])->isoFormat('dddd, MMM D, YYYY | h:mm A') }}
                        </p>
                        <a href="calendar-link" class="text-blue-500 text-sm hover:underline">Add to Calendar</a>
                    </div>
                    <div class="bg-white p-4">
                        <h3 class="font-semibold text-gray-800 text-lg mb-3">Location</h3>
                        <p class="text-sm text-gray-600 mb-4">{{$event['event_details']['event_location']}}</p>
                        {{-- <a href="map-link" class="text-blue-500 text-sm hover:underline">View on Map</a> --}}
                    </div>
                </div>
                <div class="bg-white p-4">
                    <h3 class="font-semibold text-gray-800 text-lg mb-3">Contact for Any Query</h3>
                    <div class="lg:flex lg:justify-between w-full">

                        @foreach ($event['contact_details'] as $contact)
                        <div class="bg-gray-200 p-3 mb-3 rounded-md shadow-md hover:shadow-lg lg:w-[48%]">
                            <div class="flex items-center mt-4">
                                <img src="{{ asset('images/BytesBinary.png') }}" alt="Host Image"
                                    class="w-12 h-12 rounded-full mr-4 border-2 border-orange-500">
                                <div>
                                    <p class="text-gray-700 font-semibold">{{$contact['contact_name']}}</p>
                                    <p class="text-sm text-gray-600">{{$contact['designation']}}</p>
                                </div>
                            </div>
                            <div class="mt-4 text-sm text-gray-600">
                                <p><strong>Email:</strong> <a href="mailto:{{$contact['contact_email']}}"
                                        class="text-blue-500 hover:underline">{{$contact['contact_email']}}</a></p>
                                <p class="mt-1"><strong>Phone:</strong> <a href="tel:{{$contact['contact_phone']}}"
                                        class="text-blue-500 hover:underline">{{$contact['contact_phone']}}</a></p>
                                <p class="mt-1"><strong>WhatsApp:</strong> <a href="https://wa.me/{{$contact['contact_phone']}}
                                        class="text-blue-500 hover:underline">{{$contact['contact_phone']}}</a></p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
