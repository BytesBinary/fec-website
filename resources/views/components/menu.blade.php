@props([
    'isDropdown' => false,
    'dropdowns' => [],
    'route' => null,
    'title' => null,
    'slug' => null,
    'mobile' => false,
])
@if (!$isDropdown)
    @if (!$mobile)
        <a href="{{ route($route) }}"
            class="relative inline-block px-3 py-2 rounded text-lg text-[#000] hover:text-[#f5ad0d] transition-colors duration-300"
            wire:navigate>
            <span
                class=" relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-[#f5ad0d] after:w-0 after:transition-all after:duration-500 hover:after:w-full">
                {{ $title }}
            </span>
        </a>
    @else
        <a href="{{ route($route) }}" class="block px-4 py-2" wire:navigate>{{ $title }}</a>
    @endif
@else
    @if (!$mobile)
        <div class="relative" @mouseover="currentDropdown = '{{ $slug }}'" @mouseleave="currentDropdown = null">
            <button
                class="relative inline-block px-3 py-2 rounded text-lg text-[#000] hover:text-[#f5ad0d] transition-colors duration-300"
                wire:navigate>
                <span
                    class="flex items-center relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-[#f5ad0d] after:w-0 after:transition-all after:duration-500 hover:after:w-full">
                    {{ $title }}
                    <x-svg-icon.drop-down-icon />
                </span>
            </button>
            <div x-show="currentDropdown === '{{ $slug }}'"
                class="absolute left-0 mt-4 w-56 bg-white rounded-md shadow-lg z-10 overflow-hidden" x-transition>
                @foreach ($dropdowns as $dropdown)
                    <a href="{{ isset($dropdown['route']) ? route($dropdown['route']) : '' }}"
                        class="relative flex items-center px-4 py-2 text-md text-gray-800 transition-all duration-300 hover:text-[#f5ad0d] hover:bg-gray-100"
                        wire:navigate>
                        <span class="relative z-10">{{ $dropdown['title'] }}</span>
                    </a>
                @endforeach
            </div>

        </div>
    @else
        <button @click="currentDropdown = currentDropdown === '{{ $slug }}' ? null : '{{ $slug }}'"
            class="w-full text-left px-4 py-2 flex justify-between">
            {{ $title }}
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === '{{ $slug }}'" class="bg-[#282828] border-gray-100">
            @foreach ($dropdowns as $dropdown)
                <a href="{{ isset($dropdown['route']) ? route($dropdown['route']) : '' }}"
                    class="block px-8 py-2 text-lg hover:bg-bgColorLighter hover:text-black border-t border-gray-100 text-gray-100"
                    wire:navigate>- {{ $dropdown['title'] }}</a>
            @endforeach
        </div>
    @endif
@endif
