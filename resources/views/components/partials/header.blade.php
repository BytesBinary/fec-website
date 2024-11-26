<div x-data="{ isMobile: window.innerWidth < 768 }" x-init="window.addEventListener('resize', () => isMobile = window.innerWidth < 768)" class="hidden overflow-hidden relative justify-between items-center p-4 text-white bg-gradient-to-b from-gray-600 to-gray-800 via-slate-600 md:flex">
    <!-- Left: University Logo -->
    <div class="flex items-center">
        <img src="{{asset('images/logo.png')}}" alt="University Logo" class="h-24">
    </div>

    <!-- Middle: University Details -->
    <div class="text-center">
        <h1 class="text-5xl font-bold">Faridpur Engineering College</h1>
        <p class="mt-3">Dr. Kaji Motaher Hossain Road</p>
        <p>Komolapur, Baitul Aman, Faridpur - 7800</p>
    </div>

    <!-- Right: Another Image -->
    <div class="flex items-center">
        <img src="{{asset('images/logo.png')}}" alt="University Logo" class="h-24">
    </div>
</div>
