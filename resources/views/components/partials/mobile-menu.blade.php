<!-- drawer component -->
<div x-show="open" class="md:hidden" @click.away="open = false">
    <div class="fixed inset-y-0 left-0 w-3/4 bg-gradient-to-b from-gray-600 via-slate-600 to-gray-800 text-white transform transition-transform off-canvas-enter-active off-canvas-leave-active" x-show="open" x-transition:enter="off-canvas-enter" x-transition:leave="off-canvas-leave-to">
        <div class="flex justify-between items-center p-4 border-b border-txtColor">
            {{-- <h2 class="text-lg font-semibold">Faridpur Engineering College</h2> --}}
            <div class="flex items-center gap-1"><img src="{{asset('images/FEClogo.png')}}" alt="" class="w-12 h-12">
                <h2 class="text-white text-2xl font-semibold">FEC</h2>
            </div>
            <button @click="open = false" class="text-txtColor">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/4000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="mt-4">
            {{$slot}}
        </nav>
    </div>
</div>
