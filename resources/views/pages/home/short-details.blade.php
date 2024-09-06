@if(!empty($short_details))
    <section class="section short-description position-relative">
        <div class="overlay position-absolute w-100 h-100 top-0 start-0"></div>
        <div class="container position-relative">
            <div class="row justify-content-center align-items-center ">
            <x-short-details iconClass="bi bi-bank" text="{{ $short_details['established_text'] }}: <br/> <span class='count-up' data-count='{{ $short_details['established_year'] }}'>0</span>" animation="fade-up"/>
            <x-short-details iconClass="bi bi-building" text="{{ $short_details['departments_text'] }}: <br/> <span class='count-up' data-count='{{ $short_details['departments_value'] }}'>0</span>" animation="fade-up"/>
            <x-short-details iconClass="bi bi-mortarboard" text="{{ $short_details['students_text'] }}: <br/> <span class='count-up' data-count='{{ $short_details['students_value'] }}'>0</span>" animation="fade-up"/>
            <x-short-details iconClass="bi bi-people" text="{{ $short_details['faculty_member_text'] }}: <br/> <span class='count-up' data-count='{{ $short_details['faculty_member_value'] }}'>0</span>" animation="fade-up"/>
            </div>
        </div>
    </section>
@endif

