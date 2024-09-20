<!-- Desktop Menu -->
<div class="hidden md:flex flex-wrap space-x-4">
    <!-- Home -->
    <a href="/" class="hover:bg-white px-3 py-2 rounded">Home</a>

    <!-- Academics Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'academics'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-white': currentDropdown === 'academics', 'hover:bg-white': currentDropdown !== 'academics'}" class="flex items-center  px-3 py-2 rounded">
            Academics
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'academics'" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg" x-transition>
            <a href="{{route('notices')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Notices</a>
            <a href="{{route('departments')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Departments</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Library</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Student Statistics</a>
        </div>
    </div>

    <!-- Research Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'research'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-white': currentDropdown === 'research', 'hover:bg-white': currentDropdown !== 'research'}" class="flex items-center  px-3 py-2 rounded">
            Activities
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'research'" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Publications</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Researches</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Events</a>
        </div>
    </div>

    <!-- Campus Life Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'campus_life'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-white': currentDropdown === 'campus_life', 'hover:bg-white': currentDropdown !== 'campus_life'}" class="flex items-center  px-3 py-2 rounded">
            Campus Life
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'campus_life'" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg" x-transition>
            <a href="{{route('discover-fec')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Discover FEC</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Residence and Cafeteria</a>
            <a href="{{ route('clubs') }}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Clubs</a>
        </div>
    </div>

    <!-- Administration Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'administration'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-white': currentDropdown === 'administration', 'hover:bg-white': currentDropdown !== 'administration'}" class="flex items-center  px-3 py-2 rounded">
            Administration
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'administration'" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg" x-transition>
            <a href="{{route('principal')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Principal</a>
            <a href="{{route('dept-cse')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Department Head Of CSE</a>
            <a href="{{route('dept-eee')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Department Head Of EEE</a>
            <a href="{{route('dept-ce')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Department Head Of CE</a>
            <a href="{{route('dept-non-tech')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Department Head Of Non-Tech</a>
        </div>
    </div>

    <!-- Links Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'links'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-white': currentDropdown === 'links', 'hover:bg-white': currentDropdown !== 'links'}" class="flex items-center  px-3 py-2 rounded">
            Links
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'links'" class="absolute left-0 mt-2 w-48 bg-white rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">FEC WebMail</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">FEC Alumni Association</a>
        </div>
    </div>

    <!-- About -->
    <a href="#" class="hover:bg-white px-3 py-2 rounded">About</a>
</div>

<div class="md:hidden text-txtColor">
    Faridpur Engineering College
</div>

<!-- Mobile Menu Toggle -->
<button class="md:hidden text-txtColor focus:outline-none p-5 z-10" @click="open = !open">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
</button>
