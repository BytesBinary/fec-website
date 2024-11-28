<div>
    <div class="container mx-auto p-5 mb-3 shadow-lg shadow-gray-500 bg-gray-100 rounded">
        <h1 class="text-4xl font-bold mb-6 text-center  p-3 rounded-lg">Notice Board</h1>
        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" placeholder="Search by title..."
                   class="w-full p-2 bg-white border border-gray-400 rounded" />
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-0 lg:gap-4">
            <div class="col-span-1 cursor-pointer">
                <ul class="space-y-4">
                    @foreach($notices as $notice)
                        <li class="p-4 rounded-lg shadow hover:bg-cyan-300 flex items-center justify-between" wire:click="changeNotice({{ json_encode($notice) }})">
                            <!-- Title and Date -->
                            <div class="w-4/5">
                                <a class="text-md font-semibold">{{$notice['title']}}</a>
                                <p class="text-sm text-gray-600">{{$notice['date']}}</p>
                            </div>
                            <!-- Download icon (only visible on mobile) -->
                            <a href="{{asset($notice['path'])}}" download class="flex items-center">
                            <div class="lg:hidden">
                                <x-svg-icon.download />
                            </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Pagination Links -->
                <div class="mt-4">

                </div>
            </div>

            <div class="col-span-3 invisible lg:visible">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">{{$currentTitle}}</h2>
                    <embed src="{{$currentPdf}}" type="application/pdf" class="w-full h-screen" />
                </div>
            </div>
        </div>
    </div>
</div>
