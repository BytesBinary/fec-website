<div class="flex justify-center" id="administration">
    <div class="container max-w-5xl mx-auto p-5 my-10">
        <div class="container mx-auto p-5 my-10">
            <p class="text-center mb-8 text-3xl md:text-5xl font-bold text-deepBlue">
                Administration
            </p>
            <hr class="w-48 h-1 mx-auto bg-blue-400 border-0 rounded">

            <div class="grid gap-6 grid-cols-1 mt-10 lg:grid-cols-4 hover:cursor-pointer">
                <a href="{{ route('principal') }}" wire:navigate>
                    <div class="flex justify-center transform ">
                        <div class="max-w-[18rem] w-full bg-[#f2f0ef] shadow-xl rounded-lg overflow-hidden h-[28rem] hover:shadow-2xl transition duration-300">
                            <img class="w-full h-56 object-cover" src="{{ $principal['image'] }}" alt="Principal Image">
                            <div class="p-6">
                                <hr class="border-blue-400">
                                <h2 class="text-2xl font-semibold text-deepBlue">{{ $principal['name'] }}</h2>
                                <p class="text-deepBlue mt-2">{{ $principal['title'] }}</p>
                                <hr class="border-blue-400">
                            </div>
                        </div>
                    </div>
                </a>
                <div class="lg:col-span-3 flex">
                    <div class="w-full bg-[#f2f0ef] shadow-xl rounded-lg overflow-scroll lg:overflow-hidden md:overflow-hidden transform transition duration-300 hover:shadow-2xl h-[28rem] flex flex-col justify-between">
                        <div class="p-8">
                            <h1 class="text-xl md:text-3xl font-bold text-deepBlue mt-4">Message From Principal</h1>
                            <p class="mt-3 md:text-lg text-deepBlue text-justify">
                                {{ substr($principal['message'], 0, 331) }}
                            </p>
                            <p class="mt-3 md:text-lg text-deepBlue text-justify">
                                {{ substr($principal['message'], 331) }}
                                <a href="{{ route('principal') }}" class="text-blue-400 hover:text-[#f5ad0d] font-semibold hover:underline" wire:navigate >Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 grid-cols-1 mt-10 pb-5 lg:grid-cols-3">
                @foreach ($departmentHead as $head)
                    <a href="{{ $head['route'] }}" wire:navigate>
                        <div class="flex justify-center hover:cursor-pointer">
                            <div class="max-w-[20rem] w-full bg-[#f2f0ef] shadow-xl rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 h-[23rem]">
                                <img class="w-full h-56 object-cover" src="{{ $head['image'] }}" alt="Image of {{ $head['name'] }}">
                                <div class="p-6">
                                    <hr class="border-blue-400">
                                    <h2 class="text-xl font-semibold text-deepBlue">{{ $head['name'] }}</h2>
                                    <p class="text-deepBlue mt-2">{{ $head['title'] }}</p>
                                    <hr class="border-blue-400">
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
