@extends('pages.layouts.app')

@section('title','At a Glance | FEC')

@section('content')
<div class="container page-top-section">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">At a Glance | Faridpur Engineering College</h1>
            <p class="text-center">Located about 2.7 kilometers away from the main city of Faridpur.</p>
            <hr>
            <h2 class="mt-4">About Us</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" data-aos="fade-up-right">
            <p>
                Faridpur Engineering College (FEC) is a public undergraduate college in Faridpur, Bangladesh. It was established in 2010. The college is just 2.7 km away from Faridpur city Located at Dr. Kazi Motaher Hossain Road, Char Kamalapur, Baitul Aman, Faridpur.
            </p>
            <p>
                Construction of the Education Engineering Department began in 2005, financed by the government of Bangladesh. The main work was completed in 2010, while the electricity and water connections were finished in 2013.
            </p>
            <p>
                The college currently offers three departments: BSc in Civil Engineering, BSc in Electrical and Electronic Engineering, and BSc in Computer Science and Engineering. Each department has 60 seats, making a total of 180 seats. Presently, around 750 students are studying at the college. Semester-based merit scholarships are provided to 50% of the enrolled students at government-prescribed rates. Approximately 30 teachers and staff, including full-time and part-time teachers, are employed at the institution.
            </p>
        </div>
        <div class="col-sm-6 img-side rounded px-3 mobile-height d-flex align-items-center" data-aos="fade-up-left">
            <div class="position-relative w-75">
                <img src="{{asset('images/hero-img1.jpg')}}" class="img-fluid rounded px-3 mobile-height" alt="FEC Image" style="object-fit: cover;">
                <div class="play-button-container rounded-circle position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center bg-warning pulse" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    <a href="https://youtu.be/_H9B4iynTY0?si=fqqwPZIopk3jn4X_" class="glightbox btn-watch-video d-flex align-items-center">
                        <i class="bi bi-caret-right-fill text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <p>
            The college campus includes 1 administrative building, 3 academic buildings, 1 multipurpose building, a two-story building for a bank, post office, and canteen, 2 dormitories with a total of 320 seats, a girls' hostel with 96 seats, 1 mosque, and a duplex residence for the principal. The institution offers modern educational facilities such as a playground, a library with subject-specific books, high-speed internet, a modern computer lab, and state-of-the-art labs/workshops.

             Additionally, in 2018, the institution achieved the honor of being the best in Faridpur at the Digital Innovation Fair.
        </p>
        <p>
            Each semester, the government of Bangladesh awards scholarships of 1,950 BDT per student based on his/her CGPA (Top 30% per batch or department with the majority 50% female quota). After graduation, students receive further opportunities to study abroad through scholarships awarded according to the University of Dhaka's merit list.
        </p>
    </div>
</div>

@endsection
