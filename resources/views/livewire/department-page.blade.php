<div x-data="{ currentDropdown: null }" class="container mx-auto mt-10 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-6">
        <!-- Sidebar Menu -->
        <div class="w-full mx-auto mb-10 col-span-1 bg-lime-50 rounded-lg shadow-md p-5 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-600 hover:text-blue-700 transition duration-300 mb-4">
                <a href="#">Department of Computer Science and Engineering</a>
            </h2>
            <hr class="border-gray-300 mb-4">
            <nav class="mt-4 mx-auto">

                <button @click="currentDropdown = currentDropdown === 'academics' ? null : 'academics'"
                        class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Dept. Head of CSE
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'academics'" class="bg-orange-100 p-2 rounded">
                    <a href="#" wire:click.prevent="change('head')" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Message from Head</a>
                    <a href="#"wire:click.prevent="change('biography')"  class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Biography</a>
                    <a href="#" wire:click.prevent="change('background')"  class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Educational Background</a>
                </div>

                <button @click="currentDropdown = currentDropdown === 'research' ? null : 'research'"
                        class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Administration
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'research'" class="bg-orange-100 p-2 rounded">
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Faculty Members</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Officer's Lists
                    </a>
                </div>

                <a href="#" class="block px-4 py-2 text-md text-gray-700">Students</a>


                <button @click="currentDropdown = currentDropdown === 'administration' ? null : 'administration'"
                        class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Exam Dates
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'administration'" class="bg-orange-100 p-2 rounded">
                    <a href="{{ route('dept-head-cse') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Incourse</a>
                    <a href="{{ route('dept-head-eee') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Semester Final</a>
                </div>

                <a href="#" class="block px-4 py-2 text-gray-700 rounded transition duration-300">Semester Plan</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md p-8 border border-gray-200">
            @include($content)
        </div>
    </div>
</div>
