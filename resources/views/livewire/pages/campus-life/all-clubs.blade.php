<body class="bg-gradient-to-r from-gray-100 via-white to-gray-100 bg-opacity-30 backdrop-blur-3xl">
    <div class="mx-auto my-5 px-2 mb-16 rounded lg:w-[90%]">
        <h1 class="text-5xl font-bold text-center pt-10">Clubs</h1>
        <hr class="w-48 h-1 mx-auto my-2 bg-emerald-600 mb-16 border-0 rounded md:my-10">

        <div class="grid gap-6 grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mb-6">
            @foreach ($clubs as $club )
            <x-card.club-page-card :image="$club['image']" :title="$club['title']" :short_des="$club['short_des']" :route="$club['route']"/>
            @endforeach
        </div>
    </div>
</body>
