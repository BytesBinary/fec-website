<div class="container mx-auto pt-5 px-5 pb-10 my-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="col-span-1 lg:col-span-2 w-full">
            <p class="text-center text-deepBlue mb-8 text-3xl md:text-5xl font-bold ">
                Departments
            </p>
            <hr class="w-48 h-1 mx-auto bg-blue-400 border-0 rounded mb-10">
            <div class="swiper-container swiper-container-coverflow-section">
                <div class="swiper-wrapper mb-10">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg"
                            url="{{ route('cse') }}" wire:navigate is-home-page="true" />
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Electrical & Electronics Engineering"
                            image="images/card/cse-dept.jpg" url="{{ route('eee') }}"
                            is-home-page="true" />
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Civil Engineering" image="images/card/cse-dept.jpg"
                            url="{{ route('ce') }}" is-home-page="true" />
                    </div>
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Computer Science & Engineering" image="images/card/cse-dept.jpg"
                            url="{{ route('cse') }}" is-home-page="true" />
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Electrical & Electronics Engineering"
                            image="images/card/cse-dept.jpg" url="{{ route('eee') }}"
                            is-home-page="true" />
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <x-card.departments-card name="Civil Engineering" image="images/card/cse-dept.jpg"
                            url="{{ route('ce') }}" is-home-page="true" />
                    </div>
                    <!-- More slides as needed... -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="w-full col-span-1">
            <p class="text-center text-deepBlue mb-8 text-3xl md:text-5xl font-bold ">
                Notices
            </p>
            <hr class="w-48 h-1 mx-auto bg-blue-400 border-0 rounded mb-10" />
            <div class="relative rounded-lg overflow-hidden h-auto mx-auto">
                <!-- Notice Container -->
                <div class="overflow-hidden relative h-full">
                    <div class="notice-wrapper space-y-4 animate-scroll p-3">

                        @foreach (array_slice($notices, 0, 5) as $notice)

                            <div class="flex items-center bg-[#f2f0ef] text-deepBlue p-2 rounded-lg shadow-md">
                                <div class="flex flex-col items-center px-4 border-r-2 border-blue-400">
                                    <span class="text-xl font-bold">{{ $notice['date']['day'] }}</span>
                                    <span class="text-sm">{{ strtoupper(substr($notice['date']['month'], 0, 3)) }}</span>
                                </div>
                                <div class="ml-4 flex-grow text-md text-bold">
                                    {{ $notice['title'] }}
                                </div>
                                <div class="ml-4">
                                    <a href="{{asset($notice['pdf'])}}" download class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-deepBlue" viewBox="0 0 24 24"
                                            fill="black">
                                            <path fill-rule="evenodd"
                                                d="M12 16a1 1 0 01-.707-.293l-3.5-3.5a1 1 0 111.414-1.414L11 12.586V4a1 1 0 112 0v8.586l1.793-1.793a1 1 0 011.414 1.414l-3.5 3.5A1 1 0 0112 16zm-6 2a1 1 0 100 2h12a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="card-actions mt-6 flex justify-center">
                <button href='{{route('notices')}}' type="button"
                    class="w-full max-w-xs bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-500 hover:bg-gradient-to-r hover:from-blue-500 hover:via-indigo-500 hover:to-purple-600 text-white rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg hover:cursor-pointer" wire:navigate>
                    <span>View All</span>
                    <x-svg-icon.external-url />
                </button>
            </div>
        </div>

    </div>
</div>
@push('scripts')
    @vite(['resources/js/home/departments.js'])
@endpush
