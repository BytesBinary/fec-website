@extends('layouts.app')

@section('title', 'Principal - FEC')

@section('content')
<div id="about" class=" bg-white overflow-hidden mt-0 mb-20 lg:my-20 flex-col-reverse flex lg:flex-row justify-end lg:mr-7 ">
    <div class="max-w-6xl  bg-lime-100 rounded-3xl shadow-2xl p-6 lg:flex border-t-4 lg:border-l-4 lg:border-t-0 border-emerald-500">
        <!-- Image Section -->
        <div class="flex lg:flex-col lg:w-1/4 gap-4">
            <img class="h-auto w-2/4 lg:w-full object-cover object-top rounded-lg shadow-md" src="{{asset('images/administration/principal.jpg')}}" alt="Principal Image">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 mt-6">Prof. Dr. Engr. Md. Mizanur Rahman</h1>
                <h3 class="text-xl text-gray-700 ">Principal</h3>
                <h4 class="text-md text-gray-500 mb-4">Faridpur Engineering College</h4>
            </div>
        </div>

        <!-- Text and Button Section -->
        <div class="lg:w-2/3 lg:pl-10 mt-8 lg:mt-0">
            <!-- Heading and Subtitle -->


            <!-- Paragraphs -->
            <p class="mt-3 text-lg text-gray-700">
                It is a pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College” that set out its journey in 2010. Its short form is FEC, whereas the Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক)”. The college is situated near Baitul Aman Bazar, about three kilometers from the heart of Faridpur town.
            </p>
            <p class="mt-3 text-lg text-gray-700">
                Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and is affiliated with the University of Dhaka under the Faculty of Engineering & Technology. The students’ admission test is conducted, and the merit list is finalized by its mother institution, the Faculty of Engineering & Technology, University of Dhaka.
            </p>
            <p class="mt-3 text-lg text-gray-700">
                The academic and intellectual discovery college is standing with three engineering disciplines: Civil Engineering, Electrical and Electronics Engineering, and Computer Science & Engineering, where labs are well equipped with cutting-edge technologies.
            </p>

            <!-- Action Buttons -->
        </div>
    </div>
    <div class="p-3 lg:p-0 text-center grid grid-cols-2 gap-2 lg:flex lg:flex-col lg:space-y-3 lg:mt-6">
        <a href="#" class="px-4 py-2 bg-secondColor text-center text-white font-semibold rounded-lg  lg:rounded-l-none shadow-md hover:bg-yellow-600">Full Biography</a>
        <a href="#" class="px-4 py-2 bg-secondColor text-center text-white font-semibold rounded-lg  lg:rounded-l-none shadow-md hover:bg-yellow-600">Short Biography</a>
        <a href="#" class="px-4 py-2 bg-secondColor text-center text-white font-semibold  lg:rounded-l-none rounded-lg shadow-md hover:bg-yellow-600">Achivements</a>
        <a href="#" class="px-4 py-2 bg-secondColor text-center text-white font-semibold  lg:rounded-l-none rounded-lg shadow-md hover:bg-yellow-600">Google Scholar</a>
    </div>

</div>
@endsection
