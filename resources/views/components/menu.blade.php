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
        @if (!empty($dropdowns))
            <div x-data="{ currentDropdown: null }" class="relative">
                <!-- Container for Scrollable Sections -->
                <div
                    class="max-h-[80vh] overflow-y-auto scrollbar-thin scrollbar-thumb-yellow-400 scrollbar-track-gray-800">
                    <!-- Dropdown Button -->
                    <button
                        @click="currentDropdown = (currentDropdown === '{{ $slug }}' ? null : '{{ $slug }}')"
                        class="w-full text-left px-4 py-2 flex justify-between items-center bg-[#030f27] text-gray-100 rounded-md transition duration-300 ease-in-out">
                        {{ $title }}
                        <x-svg-icon.drop-down-icon />
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="currentDropdown === '{{ $slug }}'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-100"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="bg-[#08142b] border-t border-gray-600 shadow-md overflow-hidden z-20"
                        style="display: none;" wire:ignore>
                        @foreach ($dropdowns as $dropdown)
                            <a href="{{ isset($dropdown['route']) ? route($dropdown['route']) : '#' }}"
                                class="block px-6 py-3 text-md text-gray-100 hover:text-gray-300 border-t border-gray-600 first:border-t-0 transition duration-300 ease-in-out"
                                wire:navigate>
                                - {{ $dropdown['title'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif
