
<!-- drawer component -->
<div x-data="{ open: false }" class="relative"
    x-init="$watch('open', value => document.body.style.overflow = value ? 'hidden' : 'auto')">

    <!-- Overlay -->
    <div x-show="open"
         class="fixed inset-0 bg-gray-900 bg-opacity-50 -z-40 transition-opacity duration-300"
         @click="open = false">
    </div>

    <!-- Button to toggle the drawer -->
    <button @click="open = true"
            class="lg:hidden px-4 z-1 py-2 border-2 border-[#f5ad0d] text-[#f5ad0d] rounded hover:bg-[#f5ad0d] hover:text-white transition-all delay-300 ease-in">
        Menu
    </button>

    <!-- Drawer -->
    <div x-show="open"
    class="custom-scrollbar fixed inset-y-0 left-0 w-64 md:w-80 bg-deepBlue text-white text-lg shadow-lg z-50 transition-all delay-300 ease-in overflow-y-auto"
    @click.away="open = false">

        <!-- Close button -->
        <div class="flex justify-between p-4">
            <div class="flex items-center space-x-3">
                <a href="/" wire:navigate class="flex items-center ml-1 space-x-2">
                    <img src="{{ asset('images/FEClogo.png') }}" alt="FEC Logo" class="h-12 md:h-14">
                </a>
                <h1 class="block lg:hidden text-3xl font-bold">FEC</h1>
            </div>

            <button @click="open = false" class="text-white">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Navigation links -->
        <nav class="mt-4 px-4">
            {{ $slot }}
        </nav>
    </div>
</div>



