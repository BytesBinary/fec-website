@extends('layouts.app')

@section('title', 'Departments')

@section('content')
    <div class="container mx-auto my-5">
        <h1 class="text-5xl font-bold text-center pt-10">Departments</h1>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 mb-16 border-0 rounded md:my-10 dark:bg-gray-700">
        <div class="grid justify-center align-center gap-3 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!--  CSE Department -->
            <x-departments-card name="Computer Science & Engineering"
                                image="images/card/cse-dept.jpg"
                                description="Unleash your creativity with Computer Science and Engineering! CSE is at the forefront of innovation, combining theory and practice to develop cutting-edge software and hardware solutions. From artificial intelligence and cybersecurity to data science and cloud computing, this field equips you with the skills to tackle complex problems and drive technological advancements. Join us and explore the limitless possibilities of computer science!"
                                url="#"/>
            <!--  EEE Department -->
            <x-departments-card name="Electrical & Electronics Engineering"
                                image="images/card/cse-dept.jpg"
                                description="Explore the power of innovation with Electrical and Electronics Engineering! EEE focuses on the design, development, and maintenance of electrical systems and electronic devices. From circuit design and power generation to robotics and telecommunications, this field combines engineering principles with cutting-edge technology. Gain the skills to tackle complex electrical challenges."
                                url="#"/>
            <!--  CE Department -->
            <x-departments-card name="Civil <br/> Engineering"
                                image="images/card/cse-dept.jpg"
                                description="Build the future with Civil Engineering! CE involves the design, construction, and maintenance of infrastructure such as bridges, roads, and buildings. This field blends engineering principles with architectural creativity to create safe, sustainable, and functional structures. From urban planning and structural analysis to environmental impact and project management, equip yourself with the expertise to shape the world around you."
                                url="#"/>
        </div>
    </div>
@endsection