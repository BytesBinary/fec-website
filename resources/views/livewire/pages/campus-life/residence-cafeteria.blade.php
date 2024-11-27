<div class="mt-10 lg:w-3/4 mx-auto">
    <!-- Welcome Section -->
    <div class="mx-4 my-6">
        <div class="relative flex flex-col md:flex-row items-center p-4 md:p-12 bg-gradient-to-br from-orange-600 via-orange-400 to-orange-300 rounded-xl shadow-lg overflow-hidden">
            <div class="z-10 md:w-2/3 w-full text-center md:text-left">
                <h1 class="text-3xl md:text-6xl font-extrabold text-white leading-tight drop-shadow-lg">
                    Welcome to FEC Residence
                </h1>
                <p class="text-xl md:text-xl text-white mt-4 md:mt-6 leading-relaxed">
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
    <div class="mx-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 mt-12 mb-10">
        @foreach($residences as $residence)
            <x-card.residence-card :card="$loop->iteration" route="{{ route('residence', ['name' => $residence['post_slug']]) }}" :title="$residence['post_title']" :slogan="$residence['slogan']" />
        @endforeach
    </div>
</div>
