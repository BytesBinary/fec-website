<!-- drawer component -->
<div x-data="{ open: false }" class="relative">
    <!-- Button to toggle the drawer -->
    <button @click="open = true" class="md:hidden px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
        Open Menu
    </button>

    <!-- Drawer -->
    <div x-show="open" class="fixed inset-y-0 left-0 w-64 bg-gray-800 text-white shadow-lg z-50"
        @click.away="open = false">
        <!-- Close button -->
        <div class="flex justify-end p-4">
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
