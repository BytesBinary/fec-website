<!-- drawer component -->
<div x-show="open" class="md:hidden bg-gray-800 text-white" @click.away="open = false">
    <div class="fixed inset-y-0 left-0 w-2/3 bg-gray-900 text-white transform transition-transform off-canvas-enter-active off-canvas-leave-active"
        x-show="open" x-transition:enter="off-canvas-enter" x-transition:leave="off-canvas-leave-to">
        <div class="flex justify-between items-center p-4 border-b border-gray-700">
            <h2 class="text-lg font-semibold">Faridpur Engineering College</h2>
            <button @click="open = false" class="text-white">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="mt-4">

            <a href="/" class="block px-4 py-2">Home</a>

            <button @click="currentDropdown = currentDropdown === 'academics' ? null : 'academics'"
                class="w-full text-left px-4 py-2 flex justify-between">
                Academics
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === 'academics'" class="bg-gray-700">
                <a href="{{ route('notices') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Notices</a>
                <a href="{{ route('departments') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Departments</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Library</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Student Statistics</a>
            </div>

            <button @click="currentDropdown = currentDropdown === 'research' ? null : 'research'"
                class="w-full text-left px-4 py-2 flex justify-between">
                Researches & Events
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === 'research'" class="bg-gray-700">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Publications</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Researches</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Events</a>
            </div>

            <button @click="currentDropdown = currentDropdown === 'campus_life' ? null : 'campus_life'"
                class="w-full text-left px-4 py-2 flex justify-between">
                Campus Life
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === 'campus_life'" class="bg-gray-700">
                <a href="{{route('discover-fec')}}" class="block px-4 py-2 text-sm hover:bg-gray-600">Discover FEC</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Residence and Cafeteria</a>
                <a href="{{ route('clubs') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Clubs</a>
            </div>

            <button @click="currentDropdown = currentDropdown === 'administration' ? null : 'administration'"
                class="w-full text-left px-4 py-2 flex justify-between">
                Administration
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === 'administration'" class="bg-gray-700">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Principal</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of CSE</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of EEE</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of CE</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of Non-Tech</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Board Members</a>
            </div>

            <button @click="currentDropdown = currentDropdown === 'links' ? null : 'links'"
                class="w-full text-left px-4 py-2 flex justify-between">
                Links
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === 'links'" class="bg-gray-700">
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC WebMail</a>
                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC Alumni Association</a>
            </div>

            <a href="#" class="block px-4 py-2">About</a>
        </nav>
    </div>
</div>
