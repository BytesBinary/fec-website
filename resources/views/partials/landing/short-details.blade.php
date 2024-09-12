<!-- Image and Stats Section -->
<div class="relative bg-fixed bg-cover bg-center py-16" style="background-image: url('{{ asset('images/gallery/5.jpg') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <!-- Heading Section -->
    <div class="relative z-10 text-center py-8">
        <h2 class="text-4xl font-bold text-white mb-4">Short Details of FEC</h2>
        <div class="border-t-4 border-yellow-500 w-28 mx-auto mb-8 mt-5"></div>
    </div>
    <!-- Content -->
    <div class="relative z-10 flex justify-center items-center h-full">
        <div class="container grid grid-cols-1 lg:grid-cols-4 gap-6">
            <x-short-details />
            <x-short-details />
            <x-short-details />
            <x-short-details />
        </div>
    </div>
</div>
