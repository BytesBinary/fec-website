@extends('layouts.app')

@section('title', 'FEC | Clubs')


@section('content')

<div class="container mx-auto my-5 p-5 px-10 bg-white shadow-lg shadow-gray-500 bg-gray-100 rounded">
    <h1 class="text-5xl font-bold text-center pt-10"> Clubs </h1>
    <hr class="w-48 h-1 mx-auto my-2 bg-gray-100 mb-16 border-0 rounded md:my-10 dark:bg-gray-700">
    <div class="grid place-content-between grid-cols-1 md:grid-cols-1 lg:grid-cols-2 ">

        {{-- card 1 --}}

        <div class="flex flex-col w-full items-center bg-white border border-gray-400 rounded-lg shadow-2xl md:flex-row md:max-w-xl ">
            <img class="object-cover w-full min-h-80 mx-3 rounded-t-lg h-100 lg:rounded md:h-auto md:w-80 md:rounded md:rounded-s-lg"
                src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Research & Innovation Center</h5>
                <hr class="mb-3 h-1">
                <p class="mb-3 font-normal text-gray-800">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi asperiores distinctio placeat ullam impedit consectetur.

                </p>
                <button onclick="window.location.href='#'" type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg" > View Club </button>
            </div>
        </div>

        {{-- card-2 --}}
        <div class="flex flex-col w-full items-center bg-white border border-gray-400 rounded-lg shadow-2xl md:flex-row md:max-w-xl ">
            <img class="object-cover w-full min-h-80 mx-3 rounded-t-lg h-100 lg:rounded md:h-auto md:w-80 md:rounded md:rounded-s-lg"
                src="images/card/cse-dept.jpg" alt="Computer Science Department Image">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Research & Innovation Center</h5>
                <hr class="mb-3 h-1">
                <p class="mb-3 font-normal text-gray-800">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum mollitia doloremque temporibus nobis unde fugit, magni laudantium obcaecati dolores vitae voluptas accusantium modi asperiores distinctio placeat ullam impedit consectetur.

                </p>
                <button onclick="window.location.href='#'" type="button" class="btn w-full mt-3 bg-gray-400 text-gray-900 hover:text-white glass text-lg" > View Club </button>
            </div>
        </div>


    </div>
</div>


@endsection
