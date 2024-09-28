<!-- Desktop Menu -->
<div class="hidden md:flex flex-wrap space-x-4">
    <!-- Home -->
    <a href="/" class="hover:bg-lime-50 px-3 py-2 rounded">Home</a>

    <!-- Academics Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'academics'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-lime-50': currentDropdown === 'academics', 'hover:bg-lime-50': currentDropdown !== 'academics'}" class="flex items-center  px-3 py-2 rounded">
            Academics
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'academics'" class="absolute left-0 mt-2 w-48 bg-lime-50 rounded shadow-lg" x-transition>
            <a href="{{route('notices')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Notices</a>
            <a href="{{route('departments')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Departments</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Library</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Student Statistics</a>
        </div>
    </div>

    <!-- Research Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'research'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-lime-50': currentDropdown === 'research', 'hover:bg-lime-50': currentDropdown !== 'research'}" class="flex items-center  px-3 py-2 rounded">
            Activities
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'research'" class="absolute left-0 mt-2 w-48 bg-lime-50 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Publications</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Researches</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Events</a>
        </div>
    </div>

    <!-- Campus Life Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'campus_life'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-lime-50': currentDropdown === 'campus_life', 'hover:bg-lime-50': currentDropdown !== 'campus_life'}" class="flex items-center  px-3 py-2 rounded">
            Campus Life
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'campus_life'" class="absolute left-0 mt-2 w-48 bg-lime-50 rounded shadow-lg" x-transition>
            <a href="{{route('discover-fec')}}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Discover FEC</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Residence and Cafeteria</a>
            <a href="{{ route('clubs') }}" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">Clubs</a>
        </div>
    </div>
    
    <!-- Links Dropdown -->
    <div class="relative" @mouseover="currentDropdown = 'links'" @mouseleave="currentDropdown = null">
        <button :class="{'bg-lime-50': currentDropdown === 'links', 'hover:bg-lime-50': currentDropdown !== 'links'}" class="flex items-center  px-3 py-2 rounded">
            Links
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === 'links'" class="absolute left-0 mt-2 w-48 bg-lime-50 rounded shadow-lg" x-transition>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">FEC WebMail</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-bgColorLighter">FEC Alumni Association</a>
        </div>
    </div>

    <!-- About -->
    <a href="#" class="hover:bg-lime-50 px-3 py-2 rounded">About</a>
</div>

<div class="md:hidden flex items-center gap-6">
    <img src="{{asset('images/FEClogo.png')}}" alt="" class="w-12 h-12">
    {{-- <h2 class="text-txtColor text-2xl font-semibold">FEC</h2> --}}
    <h2 class="text-lg font-semibold">Faridpur Engineering College</h2>
</div>


<!-- Mobile Menu Toggle -->
<button class="md:hidden text-txtColor focus:outline-none p-5 z-10" @click="open = !open">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
</button>

<!-- Overlay when the offcanvas menu is open -->
<div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-5" click="open = false" x-transition></div>
