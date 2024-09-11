<!-- Desktop Menu -->
<div class="hidden md:flex flex-wrap space-x-4">
    <!-- Home -->
    <a href="/" class="hover:bg-gray-700 px-3 py-2 rounded">Home</a>

    <!-- Academics Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'academics'" @mouseleave="currentDropdown = null">
        <button class="flex items-center hover:bg-gray-700 px-3 py-2 rounded">
            Academics
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'academics'" class="absolute left-0 mt-2 w-48 bg-gray-700 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Academic Life</a>
            <a href="{{route('notices')}}" class="block px-4 py-2 text-sm hover:bg-gray-600">Notices</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Departments</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Institutes</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Library</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Student Statistics</a>
        </div>
    </div>

    <!-- Research Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'research'" @mouseleave="currentDropdown = null">
        <button class="flex items-center hover:bg-gray-700 px-3 py-2 rounded">
            Researches & Events
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'research'" class="absolute left-0 mt-2 w-48 bg-gray-700 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Publications</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Research Group</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Researches</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Events</a>
        </div>
    </div>

    <!-- Campus Life Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'campus_life'" @mouseleave="currentDropdown = null">
        <button class="flex items-center hover:bg-gray-700 px-3 py-2 rounded">
            Campus Life
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'campus_life'" class="absolute left-0 mt-2 w-48 bg-gray-700 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Discover FEC</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Culture and Diversity</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Residence and Cafeteria</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Clubs</a>
        </div>
    </div>

    <!-- Administration Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'administration'" @mouseleave="currentDropdown = null">
        <button class="flex items-center hover:bg-gray-700 px-3 py-2 rounded">
            Administration
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'administration'" class="absolute left-0 mt-2 w-48 bg-gray-700 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Principal</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of CSE</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of EEE</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of CE</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department Head Of Non-Tech</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Board Member</a>
        </div>
    </div>

    <!-- Links Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'links'" @mouseleave="currentDropdown = null">
        <button class="flex items-center hover:bg-gray-700 px-3 py-2 rounded">
            Links
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'links'" class="absolute left-0 mt-2 w-48 bg-gray-700 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC WebMail</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC Alumni Association</a>
        </div>
    </div>

    <!-- About -->
    <a href="#" class="hover:bg-gray-700 px-3 py-2 rounded">About</a>
</div>

<div class="md:hidden text-white">
    Faridpur Engineering College
</div>

<!-- Mobile Menu Toggle -->
<button class="md:hidden text-white focus:outline-none" @click="open = !open">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
</button>
