<!-- Image and Stats Section -->
<div class="bg-[#f2f0fe] py-16 ">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <!-- Heading Section -->
    <div class="relative z-10 text-center py-8">
        <h1 class="text-center mb-8 text-3xl md:text-5xl font-bold text-deepBlue" >Short Details of FEC</h1>
        <hr class="w-48 h-1 mx-auto bg-blue-400 rounded">
    </div>
    <!-- Content -->
    <div class="relative z-10 flex justify-center items-center h-full">
        <div class="container grid grid-cols-1 lg:grid-cols-4 gap-6">
            <x-card.short-details :details="$details" />
        </div>
    </div>
</div>
