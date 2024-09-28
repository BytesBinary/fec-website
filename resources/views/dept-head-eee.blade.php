@extends('layouts.app')

@section('title', 'Head of the Dept. EEE - FEC')

@section('content')

<div x-data="{ currentSection: 'about' }" class="container mx-auto mt-10 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-6">
        <!-- Sidebar Menu -->
        <div class="w-full mx-auto mb-10 col-span-1 bg-lime-50 rounded-lg shadow-md p-5 border border-gray-200">
            <h2 class="text-xl font-bold text-gray-600 hover:text-sky-700 transition duration-300 mb-4">
                <a href="#">Department of Computer Science and Engineering</a>
            </h2>
            <hr class="border-gray-300 mb-4">
            <nav class="mt-4 mx-auto">
                <a href="#" @click.prevent="currentSection = 'about'" class="block px-4 py-2 text-gray-700 hover:bg-lime-200 rounded transition duration-300">Department Head</a>
                <a href="#" @click.prevent="currentSection = 'biography'" class="block px-4 py-2 text-gray-700 hover:bg-lime-200 rounded transition duration-300">Biography</a>
                <a href="#" @click.prevent="currentSection = 'educational'" class="block px-4 py-2 text-gray-700 hover:bg-lime-200 rounded transition duration-300">Educational Background</a>
                <a href="#" @click.prevent="currentSection = 'cse'" class="block px-4 py-2 text-gray-700 hover:bg-lime-200 rounded transition duration-300">Department of CSE</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div x-show="currentSection === 'about'" class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md border border-gray-200">
            <div class="rounded-3xl shadow-2xl p-6 lg:border-l-4 lg:border-r-4 lg:border-t-0 border-emerald-500">
                <div class="flex w-3/4 mx-auto gap-6 justify-center items-center">
                    <img class="h-auto w-1/5 object-cover object-top rounded-lg shadow-md" src="{{ asset('images/administration/eee-head.jpg') }}" alt="Principal Image">
                    <div>
                        <h1 class="text-3xl font-extrabold text-green-900 mt-6">Md. Sanowar Hossain</h1>
                        <h3 class="text-xl text-green-700">Head of the Dept. EEE</h3>
                        <h4 class="text-md text-gray-500 mb-4">Faridpur Engineering College</h4>
                    </div>
                </div>
                <hr class="h-1 w-3/4 mx-auto my-5 bg-emerald-500 rounded mb-12" data-aos="fade-up" data-aos-delay="200">
                <div class="lg:w-full px-8 mx-auto mb-6">
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
            </div>
        </div>

        <div x-show="currentSection === 'biography'" class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <h1 class="text-center w-full text-4xl font-extrabold text-green-900 mb-5">
                Biography
            </h1>
            <hr class="h-1 w-1/2 mx-auto my-4 bg-emerald-500 rounded mb-12">
            <p class="text-lg text-gray-700 text-center">
                Details about the biography of the head of the department will go here.
            </p>
        </div>

        <div x-show="currentSection === 'educational'" class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <h1 class="text-center w-full text-4xl font-extrabold text-green-900 mb-5">
                Educational Background
            </h1>
            <hr class="h-1 w-1/2 mx-auto my-4 bg-emerald-500 rounded mb-12">
            <p class="text-lg text-gray-700 text-center">
                Information regarding the educational background will be provided here.
            </p>
        </div>

        <div x-show="currentSection === 'cse'" class="w-full mb-10 lg:col-span-3 col-span-3 bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <h1 class="text-center w-full text-4xl font-extrabold text-green-900 mb-5">
                Department of Computer Science and Engineering
            </h1>
            <hr class="h-1 w-1/2 mx-auto my-4 bg-emerald-500 rounded mb-12">
            <p class="text-lg text-gray-700 text-center">
                Welcome to the Department of Computer Science and Engineering. Explore our programs, research, and opportunities within the field.
            </p>
            <div class="text-center mt-8">
                <a href="/dept/eecs/learn-more" class="inline-block px-6 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
