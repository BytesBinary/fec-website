@extends('layouts.app')

@section('title', 'Principal - FEC')

@section('content')
<div x-data="{ activeSection: 'overview' }" id="about" class="bg-white overflow-hidden mt-0 mb-20 lg:my-20 flex-col-reverse flex lg:flex-row justify-center lg:ml-20">
    <div class="max-w-6xl bg-lime-100 rounded-3xl shadow-2xl p-6 lg:flex border-t-4 lg:border-l-4 lg:border-t-0 border-emerald-500 w-full ">
        <!-- Image Section -->
        <div class="flex lg:flex-col lg:w-1/4 gap-4">
            <img class="h-auto w-2/4 lg:w-full object-cover object-top rounded-lg shadow-md" src="{{asset('images/administration/principal.jpg')}}" alt="Principal Image">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 mt-6">Prof. Dr. Engr. Md. Mizanur Rahman</h1>
                <h3 class="text-xl text-gray-700">Principal</h3>
                <h4 class="text-md text-gray-500 mb-4">Faridpur Engineering College</h4>
            </div>
        </div>

        <!-- Text and Button Section -->
        <div class="lg:w-2/3 lg:pl-10 mt-8 lg:mt-0 min-h-[200px]">
            <!-- Sections -->
            <div x-show="activeSection === 'overview'">
                <p class="mt-3 text-lg text-gray-700">
                    It is a pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College” that set out its journey in 2010. Its short form is FEC, whereas the Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক)”. The college is situated near Baitul Aman Bazar, about three kilometers from the heart of Faridpur town.
                </p>
                <p class="mt-3 text-lg text-gray-700">
                    Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and is affiliated with the University of Dhaka under the Faculty of Engineering & Technology. The students’ admission test is conducted, and the merit list is finalized by its mother institution, the Faculty of Engineering & Technology, University of Dhaka.
                </p>
                <p class="mt-3 text-lg text-gray-700">
                    The academic and intellectual discovery college is standing with three engineering disciplines: Civil Engineering, Electrical and Electronics Engineering, and Computer Science & Engineering, where labs are well equipped with cutting-edge technologies.
                </p>
            </div>

            <div x-show="activeSection === 'fullBiography'" x-cloak>
                <h2 class="text-2xl font-semibold">Full Biography</h2>
                <p class="mt-3 text-lg text-gray-700">
                    Full biography content goes here. You can replace this with the actual biography.
                </p>
            </div>

            <div x-show="activeSection === 'shortBiography'" x-cloak>
                <h2 class="text-2xl font-semibold">Short Biography</h2>
                <p class="mt-3 text-lg text-gray-700">
                    Short biography content goes here.
                </p>
            </div>

            <div x-show="activeSection === 'achievements'" x-cloak>
                <h2 class="text-2xl font-semibold">Achievements</h2>
                <p class="mt-3 text-lg text-gray-700">
                    Achievements content goes here.
                </p>
            </div>

            <div x-show="activeSection === 'googleScholar'" x-cloak>
                <h2 class="text-2xl font-semibold">Google Scholar</h2>
                <p class="mt-3 text-lg text-gray-700">
                    Google Scholar content goes here.
                </p>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="p-3 lg:p-0 text-center grid grid-cols-2 gap-2 lg:flex lg:flex-col lg:space-y-3 lg:mt-6">
        <a href="#" @click.prevent="activeSection = 'overview'"
           class="px-4 py-2 bg-secondColor text-center text-white font-semibold rounded-lg lg:rounded-l-none shadow-md hover:bg-[#e65b0f] transition-colors duration-300">
           Overview
        </a>
        <a href="#" @click.prevent="activeSection = 'fullBiography'"
           class="px-4 py-2 bg-secondColor text-center text-white font-semibold rounded-lg lg:rounded-l-none shadow-md hover:bg-[#e65b0f] transition-colors duration-300">
           Full Biography
        </a>
        <a href="#" @click.prevent="activeSection = 'shortBiography'"
           class="px-4 py-2 bg-secondColor text-center text-white font-semibold rounded-lg lg:rounded-l-none shadow-md hover:bg-[#e65b0f] transition-colors duration-300">
           Short Biography
        </a>
        <a href="#" @click.prevent="activeSection = 'achievements'"
           class="px-4 py-2 bg-secondColor text-center text-white font-semibold lg:rounded-l-none rounded-lg shadow-md hover:bg-[#e65b0f] transition-colors duration-300">
           Achievements
        </a>
        <a href="#" @click.prevent="activeSection = 'googleScholar'"
           class="px-4 py-2 bg-secondColor text-center text-white font-semibold lg:rounded-l-none rounded-lg shadow-md hover:bg-[#e65b0f] transition-colors duration-300">
           Google Scholar
        </a>
    </div>
</div>
@endsection
