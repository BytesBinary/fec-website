<!-- Mobile Menu -->
<div x-show="open" class="md:hidden bg-gray-800 text-white" @click.away="open = false">
    <a href="/" class="block px-4 py-2">Home</a>

    <button @click="currentDropdown = currentDropdown === 'academics' ? null : 'academics'" class="w-full text-left px-4 py-2 flex justify-between">
        Academics
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'academics'" class="bg-gray-700">
        <a href="{{route('notices')}}" class="block px-4 py-2 text-sm hover:bg-gray-600">Notices</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Departments</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Library</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Student Statistics</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'research' ? null : 'research'" class="w-full text-left px-4 py-2 flex justify-between">
        Researches & Events
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'research'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Publications</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Researches</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Events</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'campus_life' ? null : 'campus_life'" class="w-full text-left px-4 py-2 flex justify-between">
        Campus Life
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'campus_life'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Discover FEC</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Residence and Cafeteria</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Clubs</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'administration' ? null : 'administration'" class="w-full text-left px-4 py-2 flex justify-between">
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

    <button @click="currentDropdown = currentDropdown === 'links' ? null : 'links'" class="w-full text-left px-4 py-2 flex justify-between">
        Links
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'links'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC WebMail</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">FEC Alumni Association</a>
    </div>

    <a href="#" class="block px-4 py-2">About</a>
</div>
