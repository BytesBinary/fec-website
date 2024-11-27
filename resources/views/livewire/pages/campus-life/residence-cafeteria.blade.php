<div class="mx-auto mt-10 lg:w-3/4">
    <!-- Welcome Section -->
    <div class="mx-4 my-6">
        <div class="flex overflow-hidden relative flex-col items-center p-4 bg-gradient-to-br from-orange-600 via-orange-400 to-orange-300 rounded-xl shadow-lg md:flex-row md:p-12">
            <div class="z-10 w-full text-center md:w-2/3 md:text-left">
                <h1 class="text-3xl font-extrabold leading-tight text-white drop-shadow-lg md:text-6xl">
                    Welcome to FEC Residence
                </h1>
                <p class="mt-4 text-xl leading-relaxed text-white md:text-xl md:mt-6">
                    Discover top-tier living with our thoughtfully designed halls <br> of residence. Your comfort, our priority.
                </p>
            </div>
            <div class="relative mt-6 md:mt-0 md:absolute md:-right-16 w-[80%] md:w-[50%] h-[200px] md:h-[120%] bg-orange-600 rounded-full overflow-hidden shadow-md flex items-center justify-center">
                <img src="{{ asset('images/pngwing.com.png') }}" alt="Welcome"
                     class="w-[19rem] h-[19rem] object-cover opacity-90">
            </div>

        </div>
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 gap-6 mx-4 mt-12 mb-10 md:grid-cols-2 lg:grid-cols-3 md:gap-10">
        @foreach($residences as $residence)
            <x-card.residence-card :card="$loop->iteration" route="{{ route('residence', ['name' => $residence['post_slug']]) }}" :title="$residence['post_title']" :slogan="$residence['slogan']" />
        @endforeach
    </div>
</div>
