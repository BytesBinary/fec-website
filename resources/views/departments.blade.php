@extends('layouts.app')

@section('title', 'Departments')

@section('content')
    <div class="container mx-auto my-5">
        <h1 class="text-5xl font-bold text-center pt-10">Departments</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 mb-16 border-0 rounded md:my-10 dark:bg-gray-700">
        <div class="grid justify-center align-center gap-3 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!--  CSE Department -->
            <div class="card rounded glass mx-3 md:mx-0 shadow-lg shadow-gray-500 hover:shadow-2xl hover:shadow-gray-600 hover:cursor-pointer">
                <figure>
                  <img
                    src="{{asset('images/card/cse-dept.jpg')}}"
                    alt="car!" />
                </figure>
                <div class="rounded">
                    <div class="p-3 mt-3">
                        <p class="font-bold text-3xl text-center mb-2">Computer Science & Engineering</p>
                        <hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
                        <p class="text-justify mt-5">
                            Dive into the world of technology with Computer Science and Engineering! CSE merges computer science principles with engineering techniques to create innovative software and hardware solutions. From coding and algorithms to cybersecurity and AI, explore the foundations of modern technology and prepare for a dynamic career in software development, systems design, data analysis, and more. Equip yourself with the skills to drive the future of technology.
                        </p>
                        <div class="card-actions justify-end">
                            <button type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass">
                                Start Your Journey
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  EEE Department -->
            <div class="card rounded glass mx-3 md:mx-0 shadow-lg shadow-gray-500 hover:shadow-2xl hover:shadow-gray-600 hover:cursor-pointer">
                <figure>
                  <img
                    src="{{asset('images/card/cse-dept.jpg')}}"
                    alt="car!" />
                </figure>
                <div class="rounded">
                    <div class="p-3 mt-3">
                        <p class="font-bold text-3xl text-center mb-2">Electrical & Electronics Engineering</p>
                        <hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
                        <p class="text-justify mt-5">
                            Explore the power of innovation with Electrical and Electronics Engineering! EEE focuses on the design, development, and maintenance of electrical systems and electronic devices. From circuit design and power generation to robotics and telecommunications, this field combines engineering principles with cutting-edge technology. Gain the skills to tackle complex electrical challenges and drive advancements in energy, electronics, and automation.
                        </p>
                        <div class="card-actions justify-end">
                            <button type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass">
                                Start Your Journey
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--  CE Department -->
            <div class="card rounded glass mx-3 md:mx-0 shadow-lg shadow-gray-500 hover:shadow-2xl hover:shadow-gray-600 hover:cursor-pointer">
                <figure>
                  <img
                    src="{{asset('images/card/cse-dept.jpg')}}"
                    alt="car!" />
                </figure>
                <div class="rounded">
                    <div class="p-3 mt-3">
                        <p class="font-bold text-3xl text-center mb-2">Civil <br/> Engineering</p>
                        <hr class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
                        <p class="text-justify mt-5">
                            Build the future with Civil Engineering! CE involves the design, construction, and maintenance of infrastructure such as bridges, roads, and buildings. This field blends engineering principles with architectural creativity to create safe, sustainable, and functional structures. From urban planning and structural analysis to environmental impact and project management, equip yourself with the expertise to shape the world around you, improve communities, and drive global progress.
                        </p>
                        <div class="card-actions justify-end">
                            <button type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass">
                                Start Your Journey
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection