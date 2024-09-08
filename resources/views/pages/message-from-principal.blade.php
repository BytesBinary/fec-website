@extends("pages.layouts.app")

@section('title','Principal | FEC')

@section('content')
    <main class="main page-top-section">

        <x-section-title title="Message from Principal" animation="fade-up" des="" />

        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-3">
                    <x-card
                    row-class="col-sm-"
                    card-class="col-sm-12"
                    link="#"
                    animation="fade-down"
                    image="true"
                    image-class="rounded-top"
                    cardimage="true"
                    imageUrl="{{ asset('images/administration/mia-bhai.jpg') }}"
                    imageAlt="mia bhai"
                    body-class="text-center"
                    cardTitle="Prof. Dr. Mizanur Rahman"
                    title-class="mb-3 fw-bold"
                    cardText="Principal"
                    text-class="text-muted"
                />
                </div>

                <div class="col-md-8">
                    <p>
                        It is very pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College” that set out its journey since 2010. Its short form is FEC whereas Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক)”। The college is situated nearby Baitul Aman Bazar, about three km distance from the heart of Faridpur town.
                    </p>
                    <p>
                        Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and affiliated with the University of Dhaka under the Faculty of Engineering & Technology. Students’ admission test is being taken and finalized the merit list by its mother institution the Faculty of Engineering & Technology, University of Dhaka. The academic and intellectual discovery college is standing with three engineering disciplines civil engineering, Electrical and Electronics Engineering and Computer Science & Engineering where labs are well decorated with cutting edge technologies.
                    </p>
                    <p>
                        Those who are appointed here to learn, research, teach, work and grow dive nearly a decade of students and researchers in the pursuit of technological knowledge and ensure a better world. We are focused on creating a vibrant community of belonging that pursues diversity in innovation, builds inclusion and creates more equitable opportunities for making new ideas. The college has innovated a security drone and selected as the best educational institution at Faridpur in 2018.
                    </p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <p>
                        Our unique intention is to thrive the college as quite research base-university with unparalleled creations in the technological world and take a multi-faceted approach to address the upcoming demands. Students of the college got the opportunity to study in world’s famous engineering university with various level of scholarships. I always appreciate new ideas and would like very much to hear other opinions and experiences. Best wishes to all.
                    </p>
                </div>
            </div>
        </div>

    </main>
@endsection
