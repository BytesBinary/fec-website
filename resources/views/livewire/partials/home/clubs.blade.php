<div class="landing-about container mx-auto pt-5 px-5 pb-10 my-10">
    <p class="text-center mt-10 mb-8 text-3xl md:text-5xl font-bold text-gray-950">Clubs</p>
    <hr class="w-48 h-1 mx-auto bg-blue-400 border-0 rounded ">
    <div class="swiper clubs-page-swiper mt-10">
        <div class="swiper-wrapper mb-10">
            @foreach ($clubs as $club)
                <div class="swiper-slide">
                    <x-card.club-card
                     logo="{{ $club['logo'] }}"
                     short-name="{{ $club['short_name'] }}"
                     full-name="{{ $club['full_name'] }}"
                     description="{{ $club['description'] }}"
                     url="{{ $club['url'] }}" />
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@push('scripts')
    @vite(['resources/js/home/clubs.js'])
@endpush
