<x-layouts.app>
    <div class="flex">
        <x-partials.subpage-navigation :department="$department" />
        <!-- Main Content -->
        <div class="w-3/4 p-4">
            {{$slot}}
        </div>
    </div>
</x-layouts.app>
