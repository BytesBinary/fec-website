<div class="container mx-auto bg-white p-5 my-10 rounded-lg shadow-inner">
    <p class="text-center mt-10 mb-8 text-5xl font-bold text-gray-950" data-aos="fade-up">Administration</p>
    <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
    <div class="grid gap-5 grid-cols-1 mt-5 lg:grid-cols-4">
        <x-administration-card name="Prof. Dr. Engr. Md. Mizanur Rahman" designation="Principal" image="images/administration/mia-bhai.jpg" url="{{route('principal')}}" animation="fade-right" />
        <div class="col-span-3 card w-full shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer" data-aos="fade-left">
            <div class="card-body">
                <h1 class="text-2xl">Message From Principal</h1>
                <p class="mt-3 text-lg text-gray-950">
                    It is very pleasure to introduce my heart-touching engineering institution “The Faridpur Engineering College” that set out its journey since 2010. It's short form is FEC whereas Bangla pronunciation is “ফরিদপুর ইঞ্জিনিয়ারিং কলেজ (ফইক)”।
                </p>
                <p class="mt-3 text-lg text-gray-950">The college is situated nearby Baitul Aman Bazar, about three km distance from the heart of Faridpur town. Faridpur Engineering College is a mainstream government undergraduate college in engineering disciplines and affiliated with the University of Dhaka under the Faculty of Engineering & Technology. Students’ admission test is being taken and finalized the merit list by its mother institution the Faculty of Engineering & Technology, University of Dhaka.
                </p>
                <p class="mt-3 text-lg text-gray-950">
                    The academic and intellectual discovery college is standing with three engineering disciplines civil engineering, Electrical and Electronics Engineering and Computer Science & Engineering where labs are well decorated with cutting age technologies ....
                    <a href="{{route('principal')}}">
                        <button id="toggle-btn" class=" text-blue-500 focus:outline-none">
                            Read More
                        </button>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="grid gap-5 grid-cols-1 mt-5 pb-5 lg:grid-cols-3">
        <x-administration-card name="Md. Shamsul Islam" designation="Head of the Dept. CSE" image="images/administration/mia-bhai3.jpg" url="{{route('dept-cse')}}" animation="fade-up"  />
        <x-administration-card name="Md. Sanowar Hossain" designation="Head of the Dept. EEE" image="images/administration/mia-bhai2.jpg" url="{{route('dept-eee')}}" animation="fade-up" />
        <x-administration-card name="Md. Rayhan Khan Apu" designation="Head of the Dept. CE" image="images/administration/mia-bhai1.jpg" url="{{route('dept-ce')}}" animation="fade-up" />
    </div>
</div>
