<section class="section online-services-section">
    <div class="container">
        <x-section-title title="Online Services" des="Here is our online services from which you can get your information instant." animation="fade-up"/>
        <div class="row justify-content-center align-items-center card-container">
            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{asset('images/services/notice.svg')}}"
                    image-class="img-fluid mb-3 card-image icon" image-alt="Notices" title-class="card-title card-title-fourth my-3" card-title="Notices"
                    text-class="card-text card-text-fourth mb-4" card-text="Anyone can get any notices of this institution from here."
                    button="true" button-url="{{route('notices')}}" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="View All Notices" />

            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{asset('images/services/result .svg')}}"
                    image-class="img-fluid mb-3 card-image icon" image-alt="Result" title-class="card-title card-title-fourth my-3" card-title="Results"
                    text-class="card-text card-text-fourth mb-4" card-text="Check your academic results by logged into your student account."
                    button="true" button-url="{{route('login/students-login')}}" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="View Results" />

            <x-card row-class="col-lg-4 mt-3 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{asset('images/services/application.svg')}}"
                    image-class="img-fluid mb-3 card-image icon" image-alt="Apply" title-class="card-title card-title-fourth my-3" card-title="Apply Online"
                    text-class="card-text card-text-fourth mb-4" card-text="Want to get admission here? Click here to get your admission"
                    button="true" button-url="https://collegeadmission.eis.du.ac.bd/bn/b45de047fde9788cadae3cfe8e88dcc2" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="Apply Now" />
            <x-card row-class="col-lg-4 mt-4 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{asset('images/services/syllabus.svg')}}"
                    image-class="img-fluid mb-3 card-image icon" image-alt="Apply" title-class="card-title card-title-fourth my-3" card-title="Academic Syllabus"
                    text-class="card-text card-text-fourth mb-4" card-text="Click to view syllabus"
                    button="true" button-url="{{route('academics/syllabus')}}" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="View Syllabus" />
            <x-card row-class="col-lg-4 mt-4 card-holder" animation="zoom-in-up" card-class="shadow-lg rounded-md h-100" body-class="text-center" image="true" image-url="{{asset('images/services/calendar.svg')}}"
                    image-class="img-fluid mb-3 card-image icon" image-alt="Apply" title-class="card-title card-title-fourth my-3" card-title="Academic Callendar"
                    text-class="card-text card-text-fourth mb-4" card-text="Click to view calendar"
                    button="true" button-url="{{route('academics/calender')}}" url-class="text-white stretched-link" button-class="btn btn-success btn-outline-light px-4 py-2 rounded-pill shadow-sm"
                    button-text="View Calendar" />

        </div>
    </div>
</section>
