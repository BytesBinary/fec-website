<!-- Mobile Menu -->
<div x-show="open" class="md:hidden bg-gray-800 text-white" @click.away="open = false">
    <a href="/" class="block px-4 py-2">Home</a>
    <button @click="currentDropdown = currentDropdown === 'admission' ? null : 'admission'" class="w-full text-left px-4 py-2 flex justify-between">
        Admission
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'admission'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Student Fees</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Admission Roadmap</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Campus Life</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'academics' ? null : 'academics'" class="w-full text-left px-4 py-2 flex justify-between">
        Academics
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'academics'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Academic Life</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Academic Calendar</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Department</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Institutes</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Library</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Student Statistics</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'research' ? null : 'research'" class="w-full text-left px-4 py-2 flex justify-between">
        Research
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'research'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Publications</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Research Group</a>
    </div>

    <button @click="currentDropdown = currentDropdown === 'campus_life' ? null : 'campus_life'" class="w-full text-left px-4 py-2 flex justify-between">
        Campus Life
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'campus_life'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Discover FEC</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Culture and Diversity</a>
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

    <button @click="currentDropdown = currentDropdown === 'message' ? null : 'message'" class="w-full text-left px-4 py-2 flex justify-between">
        Message
        <x-svg-icon.drop-down-icon />
    </button>
    <div x-show="currentDropdown === 'message'" class="bg-gray-700">
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Message From Principal</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Message From Dept Head Of CSE</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Message From Dept Head Of EEE</a>
        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-600">Message From Dept Head Of CIVIL</a>
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
