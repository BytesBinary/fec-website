<div>
    <section class="mb-10">
        <h2 class="text-center mb-8 text-3xl md:text-5xl font-bold">
            Upcoming Events
        </h2>
        <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10">

        <div class="swiper-container swiper-container-event-section">
            <div class="swiper-wrapper mb-10">
                @foreach ($events as $event)
                    <div class="swiper-slide">
                        <x-card.research-card image="{{ $event['image'] }}" title="{{ $event['title'] }}"
                            description="{{ $event['description'] }}" date="{{ $event['date'] }}"
                            url="{{ $event['url'] }}" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="card-actions mt-8 mb-4 flex justify-center">
            <button href='{{ route('events') }}' type="button"
                class="w-full max-w-xs bg-gradient-to-r from-lime-300 to-emerald-400 text-white hover:bg-gradient-to-l hover:from-lime-300 hover:to-emerald-400 rounded-lg py-4 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg hover:cursor-pointer"
                wire:navigate>
                <span class="text-gray-900 text-xl">View More</span>
                <x-svg-icon.external-url />
            </button>
        </div>

    </section>

    <section class="mt-5 mb-5">
        <h2 class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold">
            Publications
        </h2>
        <hr class="w-48 h-1 mx-auto bg-green-400 border-0 rounded mb-10">

        <div class="swiper-container swiper-container-research-section">
            <div class="swiper-wrapper mb-10">
                @foreach ($publications as $publication)
                    <div class="swiper-slide">
                        <x-card.research-card image="{{ $publication['image'] }}" title="{{ $publication['title'] }}"
                            description="{{ $publication['description'] }}" date="{{ $publication['date'] }}"
                            url="{{ $publication['url'] }}" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="card-actions mt-8 mb-4 flex justify-center">
            <button href='{{ route('publications') }}' type="button"
                class="w-full max-w-xs bg-gradient-to-r from-lime-300 to-emerald-400 text-white hover:bg-gradient-to-l hover:from-lime-300 hover:to-emerald-400 rounded-lg py-4 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg hover:cursor-pointer"
                wire:navigate>
                <span class="text-gray-900 text-xl">View More</span>
                <x-svg-icon.external-url />
            </button>
        </div>

    </section>
</div>

@push('scripts')
    @vite(['resources/js/home/research.js'])
    @vite(['resources/js/home/event.js'])
@endpush
