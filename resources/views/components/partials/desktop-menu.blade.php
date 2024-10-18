<!-- Desktop Menu -->
<div class="hidden md:flex flex-wrap space-x-4">
    {{$slot}}
</div>

<div class="md:hidden flex items-center gap-6">
    <img src="{{asset('images/FEClogo.png')}}" alt="" class="w-12 h-12">
    {{-- <h2 class="text-txtColor text-2xl font-semibold">FEC</h2> --}}
    <h2 class="text-lg font-semibold">Faridpur Engineering College</h2>
</div>


<!-- Mobile Menu Toggle -->
<button class="md:hidden text-txtColor focus:outline-none p-5 z-10" @click="open = !open">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
    </svg>
</button>

<!-- Overlay when the offcanvas menu is open -->
<div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-5" click="open = false" x-transition></div>
