<div>
    <section class="mb-10">
        <div class="landing-about container mx-auto pt-5 px-5 pb-10 my-10">
            <p class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold text-gray-950">Upcoming Events</p>
            <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
            <div class="swiper event-research-page-swiper mt-10">
                <div class="swiper-wrapper mb-10">
                    @foreach ($events as $event)
                        <div class="swiper-slide">
                            <x-card.events-card title="{{ $event['title'] }}" pic="{{ asset('images/gallery/4.jpg') }}"
                                date="{{ $event['date'] }}" location="{{ $event['location'] }}" url="{{ $event['url'] }}" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="card-actions mt-8 mb-4 flex justify-center">
                <a href="{{ route('events') }} " wire:navigate
                    class="flex items-center justify-center space-x-2 w-1/2 md:w-1/3 lg:w-1/4 text-white py-3 px-6 bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 hover:cursor-pointer">
                    <span class="text-white text-sm lg:text-lg font-semibold">View More</span>
                    <x-svg-icon.external-url class="w-6 h-6 text-gray-900" />
                </a>
            </div>

        </div>
    </section>

    <section class="mb-10">
        <div class="landing-about container mx-auto pt-5 px-5 pb-10 my-10">
            <h2 class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold">
                Researches & Publications
            </h2>
            <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10">

            <div class="swiper event-research-page-swiper mt-10">
                <div class="swiper-wrapper mb-10">
                    @foreach ($researches as $research)
                        <div class="swiper-slide">
                            <x-card.research-card image="{{ $research['image'] }}" title="{{ $research['title'] }}"
                                description="{{ $research['description'] }}" date="{{ $research['date'] }}"
                                url="{{ $research['url'] }}" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="card-actions mt-8 mb-4 flex justify-center">
                <a href="{{ route('researches') }}" wire:navigate
                    class="flex items-center justify-center space-x-2 w-1/2 md:w-1/3 lg:w-1/4 text-white py-3 px-6 bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 hover:cursor-pointer">
                    <span class="text-white text-sm lg:text-lg font-semibold">View More</span>
                    <x-svg-icon.external-url class="w-6 h-6 text-gray-900" />
                </a>
            </div>
        </div>
    </section>

</div>


@push('scripts')
    @vite(['resources/js/home/departments.js'])
@endpush
