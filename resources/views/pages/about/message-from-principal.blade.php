@extends("pages.layouts.app")

@section('content')
<main class="main page-top-section">
    <h1 class="text-center">Message from Principal</h1>
    <hr>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="card" style="align-items: right">
        <img src="{{ asset('assets/img/mia-bhai.jpg') }}" alt="principal" class="img-fluid mx-auto d-block" style="width:70%;">
    <h3>Prof. Dr. Engr. Md. Mizanur Rahman</h3>
    <p class="title">Principal</p>
    <p>Faridpur Engineering College</p>
    <a href="#"><i class="fa fa-envelop"></i></a>
    <p><button>Contact</button></p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>It is very pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College” that set out its journey since 2010. Its short form is FEC whereas Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক)”। The college is situated nearby Baitul Aman Bazar, about three km distance from the heart of Faridpur town. Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and affiliated with the University of Dhaka under the Faculty of Engineering & Technology. Students’ admission test is being taken and finalized the merit list by its mother institution the Faculty of Engineering & Technology, University of Dhaka. The academic and intellectual discovery college is standing with three engineering disciplines civil engineering, Electrical and Electronics Engineering and Computer Science & Engineering where labs are well decorated with cutting age technologies. Those who are appointed hereto learn, research, teach, work and grow dive nearly a decade of students and researchers in the pursuit of technological knowledge and ensure a better world. We are focused on creating a vibrant community of belonging that pursues diversity in innovation, builds inclusion and creates more equitable opportunities for making new ideas. The college has innovated a security drone and selected as the best educational institution at Faridpur in 2018. Our unique intention is to thrive the college as quite research base-university with unparallel creations in the technological world and take a multi-faceted approach to address the upcoming demands. Students of the college got the opportunity to study in world’s famous engineering university with various level of scholarships. I always appreciate new ideas and would like very much to hear other opinions and experiences. Best wishes to all.</p>
        </div>
    </div>
</main>
@endsection
