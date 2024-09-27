@extends('layouts.app')

@section('title', 'Computer Science and Engineering | FEC')


@section('content')
<div x-data="{ currentDropdown: null }" class="container mx-auto mt-10 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-6">
        <!-- Sidebar Menu -->
        <div class="w-full mx-auto mb-10 col-span-1 bg-lime-50 rounded-lg shadow-md p-5 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-600 hover:text-blue-700 transition duration-300 mb-4">
                <a href="#">Department of Computer Science and Engineering</a>
            </h2>
            <hr class="border-gray-300 mb-4">
            <nav class="mt-4 mx-auto">
                <a href="/" class="block px-4 py-2 text-gray-700 rounded transition duration-300">Home</a>

                <button @click="currentDropdown = currentDropdown === 'academics' ? null : 'academics'"
                    class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Academics
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'academics'" class="bg-orange-100 p-2 rounded">
                    <a href="{{ route('notices') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Notices</a>
                    <a href="{{ route('departments') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Departments</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Library</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Student Statistics</a>
                </div>

                <button @click="currentDropdown = currentDropdown === 'research' ? null : 'research'"
                    class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Researches & Events
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'research'" class="bg-orange-100 p-2 rounded">
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Publications</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Researches</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Events</a>
                </div>

                <button @click="currentDropdown = currentDropdown === 'campus_life' ? null : 'campus_life'"
                    class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Campus Life
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'campus_life'" class="bg-orange-100 p-2 rounded">
                    <a href="{{ route('discover-fec') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Discover FEC</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Residence and Cafeteria</a>
                    <a href="{{ route('clubs') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Clubs</a>
                </div>

                <button @click="currentDropdown = currentDropdown === 'administration' ? null : 'administration'"
                    class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Administration
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'administration'" class="bg-orange-100 p-2 rounded">
                    <a href="{{ route('principal') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Principal</a>
                    <a href="{{ route('dept-head-cse') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Department Head Of CSE</a>
                    <a href="{{ route('dept-head-eee') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Department Head Of EEE</a>
                    <a href="{{ route('dept-head-ce') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Department Head Of CE</a>
                    <a href="{{ route('dept-head-non-tech') }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Department Head Of Non-Tech</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">Board Members</a>
                </div>

                <button @click="currentDropdown = currentDropdown === 'links' ? null : 'links'"
                    class="w-full text-left px-4 py-2 flex justify-between items-center text-gray-700 rounded transition duration-300">
                    Links
                    <x-svg-icon.drop-down-icon />
                </button>
                <div x-show="currentDropdown === 'links'" class="bg-orange-100 p-2 rounded">
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">FEC WebMail</a>
                    <a href="#" class="block px-8 py-2 text-md hover:bg-bgColorLighter text-txtColor">FEC Alumni Association</a>
                </div>

                <a href="#" class="block px-4 py-2 text-gray-700 rounded transition duration-300">About</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <h1 class="text-center w-full text-4xl font-extrabold text-green-900 mb-5" data-aos="fade-up" data-aos-delay="100">
                Welcome to the Department of Computer Science and Engineering
            </h1>
            <hr class="h-1 w-full mx-auto my-4 bg-emerald-500 rounded mb-12" data-aos="fade-up" data-aos-delay="200">
            <p class="text-center text-gray-700 mb-4 text-lg">
                Explore our programs, research, and opportunities within the field of computer science and engineering.
            </p>
            <p class="text-center text-gray-600 mb-2">
                Join us to innovate and shape the future of technology!
            </p>
            <div class="text-center mt-8">
                <a href="/dept/eecs/learn-more"
                    class="inline-block px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
