<section class="relative">
    <!-- Heading Section -->
    <div class="text-center py-8">
        <h2 class="text-4xl font-bold text-blue-900 mb-4">Faridpur Engineering College in Numbers</h2>
        <div class="border-t-4 border-yellow-500 w-28 mx-auto mb-8"></div>
    </div>

    <!-- Image and Stats Section -->
    <div class="relative bg-fixed bg-cover bg-center py-16" style="background-image: url('{{ asset('images/gallery/5.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

        <!-- Content -->
        <div class="container flex justify-evenly items-center relative z-10">
            <x-short-details />
            <x-short-details />
            <x-short-details />
            <x-short-details />
        </div>
    </div>
</section>
