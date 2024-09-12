<div class="container mx-auto shadow-2xl shadow-gray-100 bg-white p-5 my-10 rounded-lg shadow-inner">
    <p class="text-center mt-10 mb-8 text-5xl font-bold text-gray-950">Administration</p>
    <hr class="w-48 h-1 mx-auto bg-gray-400 border-0 rounded dark:bg-gray-700">
    <div class="grid gap-5 grid-cols-1 mt-5 lg:grid-cols-4">
        <x-administration-card name="AJDM Jakiur Rahman" designation="Principal" image="images/gallery/1.jpg" url="{{route('landing')}}" />
        <div class="col-span-3 card w-full shadow-2xl shadow-gray-500 mt-5 hover:shadow-gray-700 hover:cursor-pointer">
            <div class="card-body">
                <h1 class="text-2xl">Message From Principal</h1>
                <p class="mt-3 text-lg text-gray-950">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus et nunc
                    vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus et nunc
                    vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus et nunc
                    vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus et nunc
                    vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies. Nullam nec purus et nunc vestibulum ultricies.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus et nunc
                    vestibulum ultricies.
                </p>
            </div>
        </div>
    </div>
    <div class="grid gap-5 grid-cols-1 mt-5 pb-5 lg:grid-cols-3">
        <x-administration-card name="AJDM Jakiur Rahman" designation="Principal" image="images/gallery/1.jpg" url="{{route('landing')}}" />
        <x-administration-card name="AJDM Jakiur Rahman" designation="Principal" image="images/gallery/1.jpg" url="{{route('landing')}}" />
        <x-administration-card name="AJDM Jakiur Rahman" designation="Principal" image="images/gallery/1.jpg" url="{{route('landing')}}" />
    </div>
</div>
