@extends('layouts.app')

@section('title', 'Departments')

@section('content')
    <div class="flex justify-center items-center">
        <div class="container p-8 mx-auto mt-16 mb-10 bg-white rounded-sm shadow-lg shadow-gray-200">
            <h1 class="text-center text-5xl font-extrabold text-gray-800 mb-5" data-aos="fade-up" data-aos-delay="100">
                Departments
            </h1>
            <hr class="h-1 w-48 mx-auto my-4 bg-emerald-500 rounded mb-12" data-aos="fade-up" data-aos-delay="200">

            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-16">
                <!-- CSE Department -->
                <div class="transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <x-departments-card
                        name="Computer Science & Engineering"
                        image="images/card/cse-dept.jpg"
                        description="Unleash your creativity with Computer Science and Engineering! CSE is at the forefront of innovation, combining theory and practice to develop cutting-edge software and hardware solutions. From artificial intelligence and cybersecurity to data science and cloud computing, this field equips you with the skills to tackle complex problems and drive technological advancements. Join us and explore the limitless possibilities of computer science!"
                        url="{{route('departments.cse-department')}}"
                    />
                </div>

                <!-- EEE Department -->
                <div class="transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <x-departments-card
                        name="Electrical & Electronics Engineering"
                        image="images/card/cse-dept.jpg"
                        description="Explore the power of innovation with Electrical and Electronics Engineering! EEE focuses on the design, development, and maintenance of electrical systems and electronic devices. From circuit design and power generation to robotics and telecommunications, this field combines engineering principles with cutting-edge technology. Gain the skills to tackle complex electrical challenges."
                        url="{{route('departments.eee-department')}}"
                    />
                </div>

                <!-- CE Department -->
                <div class="transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <x-departments-card
                        name="Civil Engineering"
                        image="images/card/cse-dept.jpg"
                        description="Build the future with Civil Engineering! CE involves the design, construction, and maintenance of infrastructure such as bridges, roads, and buildings. This field blends engineering principles with architectural creativity to create safe, sustainable, and functional structures. From urban planning and structural analysis to environmental impact and project management, equip yourself with the expertise to shape the world around you."
                        url="{{route('departments.ce-department')}}"
                    />
                </div>

            </div>
        </div>
    </div>
@endsection
