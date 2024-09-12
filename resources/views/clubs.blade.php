@extends('layouts.app')

@section('title', 'FEC | Clubs')


@section('content')
    <div class="container mx-auto my-5 p-5 px-10 bg-white shadow-lg shadow-gray-500 mb-16 rounded">
        <h1 class="text-5xl font-bold text-center pt-10">Clubs</h1>
        <hr class="w-48 h-1 mx-auto my-2 bg-gray-600 mb-16 border-0 rounded md:my-10 ">
        <div class="grid gap-6 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mb-16">

            {{-- card 1 --}}
            <div
                class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Research & Innovation Center</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque
                        temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi
                        asperiores distinctio placeat ullam impedit consectetur.
                    </p>
                    <button onclick="window.location.href='#'" type="button"
                        class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg"> View Club
                    </button>
                </div>
            </div>

            {{-- card 2 --}}
            <div
                class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row ">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Programming Club</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque
                        temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi
                        asperiores distinctio placeat ullam impedit consectetur.
                    </p>
                    <button onclick="window.location.href='#'" type="button"
                        class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg"> View Club
                    </button>
                </div>
            </div>

            {{-- card-3  --}}
            <div
                class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">FEC Sports Association</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque
                        temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi
                        asperiores distinctio placeat ullam impedit consectetur.
                    </p>
                    <button onclick="window.location.href='#'" type="button"
                        class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg"> View Club
                    </button>
                </div>
            </div>

            {{-- card 1 --}}
            <div
                class="flex flex-col w-full my-3 items-center bg-white shadow-gray-500 rounded-lg hover:scale-105 duration-150 hover:cursor-pointer shadow-2xl md:flex-row">
                <img class="object-cover mx-3 w-full h-80 rounded-t-lg md:w-80 md:h-auto md:rounded-l-lg"
                    src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Islamic Research & Dawah Center</h5>
                    <hr class="mb-3 h-1">
                    <p class="mb-3 text-justify font-normal text-gray-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque
                        temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi
                        asperiores distinctio placeat ullam impedit consectetur.
                    </p>
                    <button onclick="window.location.href='#'" type="button"
                        class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg"> View Club
                    </button>
                </div>
            </div>

        </div>
    </div>



@endsection
