<div>
    <div class="container mx-auto my-5 p-5 px-10 bg-white shadow-gray-500 mb-16 rounded">
        <h1 class="text-5xl font-bold text-center pt-10">Clubs</h1>
        <hr class="w-48 h-1 mx-auto my-2 bg-gray-600 mb-16 border-0 rounded md:my-10">

        <div class="grid gap-6 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mb-16">
            {{--  Research & Innovation Center --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/ric.jpg')}}" alt="Research & Innovation Center Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Research & Innovation Center</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Join the Research & Innovation Center to explore cutting-edge technological advancements,
                        participate in groundbreaking research, and innovate future solutions.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'ric'])}}" wire:navigate>
                            <button
                                class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                                <span class="text-xl text-gray-800">View Club</span>
                                <x-svg-icon.external-url />
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            {{--  FEC Cyber Protector Club --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/cyber-protector.jpg" alt="Cyber Protector Club Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Cyber Protector Club</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Learn and practice the latest in cybersecurity strategies, ethical hacking, and protection
                        methodologies to keep digital spaces secure.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'feccpc'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>


            {{--  FEC Sports Association --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-down">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/fecsa.jpg')}}" alt="Sports Association Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Sports Association</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Embark on adventures, learn leadership, and engage in community service with the FEC Sports Association.
                        Prepare yourself for real-life challenges.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">Ric
                        <a href="{{route('single-club',['name'=>'fecsa'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>


            {{--  FEC Photographic Club --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/photography.jpg')}}" alt="Photographic Club Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Photographic Club</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Capture moments and tell stories through the lens. Learn photography techniques and express your
                        creative vision with the FEC Photographic Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'fecpc'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>

                        {{--  FEC Programming Club --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/programming.jpg')}}" alt="Programming Club Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Programming Club</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Capture moments and tell stories through the lens. Learn photography techniques and express your
                        creative vision with the FEC Programming Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'fecpc2'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>

            {{--  FEC Debating Club --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/debate.jpg" alt="Debating Club Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Debating Club</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Hone your public speaking skills, engage in competitive debates, and develop the ability to argue
                        confidently with the FEC Debating Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'debating'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>

            {{--  FEC Islamic Dawah and Research Center  --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/fecrdc.jpg')}}" alt="Islamic Dawah and Research Center  Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Islamic Dawah and Research Center </h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Capture moments and tell stories through the lens. Learn photography techniques and express your
                        creative vision with the FEC Islamic Dawah and Research Center Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'islamic-dawah'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                    </a>
                    </div>
                </div>
            </div>

            {{--  FEC Bani Archana Committee  --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                src="#" alt="Bani Archana Committee  Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Bani Archana Committee </h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Capture moments and tell stories through the lens. Learn photography techniques and express your
                        creative vision with the FEC Bani Archana Committee Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'bani-archana'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                    </a>
                    </div>
                </div>
            </div>

            {{--  FEC Professionals Club --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-up">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="{{asset('images/club/professionals.jpg')}}" alt="Professionals Club Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Club of Professionals</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Connect with industry experts, attend professional development workshops, and prepare for a
                        successful career with the FEC Professionals Club.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'professionals'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                    </a>
                    </div>
                </div>
            </div>

            {{--  FEC Rover Scout --}}
            <div class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row"
                data-aos="fade-down">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/roverscout.jpg" alt="Rover Scout Image">
                <div class="flex flex-col justify-between p-6 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Rover Scout</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Embark on adventures, learn leadership, and engage in community service with the FEC Rover Scout.
                        Prepare yourself for real-life challenges.
                    </p>
                    <div class="card-actions mt-auto flex justify-center">
                        <a href="{{route('single-club',['name'=>'fecrsg'])}}" wire:navigate>
                        <button
                            class="btn w-full max-w-xs bg-gradient-to-r from-lime-500 to-emerald-500 text-white hover:bg-gradient-to-l hover:from-lime-600 hover:to-emerald-600 rounded-lg py-3 transition-all flex items-center justify-center space-x-2 shadow-md hover:shadow-lg">
                            <span class="text-xl text-gray-800">View Club</span>
                            <x-svg-icon.external-url />
                        </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
