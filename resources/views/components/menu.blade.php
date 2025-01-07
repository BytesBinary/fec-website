@props([
    'isDropdown' => false,
    'dropdowns' => [],
    'route' => null,
    'title' => null,
    'slug' => null,
    'mobile' => false,
])

@if(!$isDropdown)
    @if(!$mobile)
        <a href="{{route($route)}}" class="hover:bg-[#f5ad0d] px-3 py-2 rounded" wire:navigate>{{$title}}</a>
    @else
        <a href="{{route($route)}}" class="block px-4 py-2" wire:navigate>{{$title}}</a>
    @endif
@else
    @if(!$mobile)
        <div class="relative" @mouseover="currentDropdown = '{{$slug}}'" @mouseleave="currentDropdown = null">
            <button :class="{'bg-[#f5ad0d]': currentDropdown === '{{$slug}}', 'hover:bg-[#f5ad0d]': currentDropdown !== '{{$slug}}'}" class="flex items-center  px-3 py-2 rounded">
                {{$title}}
                <x-svg-icon.drop-down-icon />
            </button>
            <div x-show="currentDropdown === '{{$slug}}'" class="absolute left-0 mt-2 w-48 bg-lime-500 rounded shadow-lg z-10" x-transition>
                @foreach($dropdowns as $dropdown)
                    <a href="{{isset($dropdown['route']) ? route($dropdown['route']) : ''}}" class="block px-4 py-2 text-sm hover:bg-sky-950 hover:text-white" wire:navigate>{{$dropdown['title']}}</a>
                @endforeach
            </div>
        </div>
    @else
        <button @click="currentDropdown = currentDropdown === '{{$slug}}' ? null : '{{$slug}}'" class="w-full text-left px-4 py-2 flex justify-between">
            {{$title}}
            <x-svg-icon.drop-down-icon />
        </button>
        <div x-show="currentDropdown === '{{$slug}}'" class="bg-[#282828] border-gray-100">
            @foreach($dropdowns as $dropdown)
                <a href="{{ isset($dropdown['route']) ? route($dropdown['route']) : '' }}" class="block px-8 py-2 text-md hover:bg-bgColorLighter hover:text-black border-t border-gray-100 text-gray-100" wire:navigate>- {{$dropdown['title']}}</a>
            @endforeach
        </div>
    @endif
@endif
