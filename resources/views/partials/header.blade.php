<div x-data="{ isMobile: window.innerWidth < 768 }" x-init="window.addEventListener('resize', () => isMobile = window.innerWidth < 768)" class="bg-gray-900 text-white p-4 hidden md:flex items-center justify-between">
    <!-- Left Side: University Logo -->
    <div class="flex items-center">
        <img src="{{asset('images/logo.png')}}" alt="University Logo" class="h-24">
    </div>
    <!-- Middle: University Details -->
    <div class="text-center">
        <h1 class="text-5xl font-bold">Faridpur Engineering College</h1>
        <p class="mt-3">Dr. Kaji Motaher Hossain Road</p>
        <p>Komolapur, Baitul Aman, Faridpur - 7800</p>
    </div>
    <!-- Right Side: Another Image -->
    <div class="flex items-center">
        <img src="{{asset('images/logo.png')}}" alt="University Logo" class="h-24">
    </div>
</div>
