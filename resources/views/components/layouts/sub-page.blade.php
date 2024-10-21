<x-layouts.app :title="$title ?? ''">
    <div class="flex">
        <x-partials.subpage-navigation :route-key="$routeKey" :page="$page" :menu="$menu" />
        <!-- Main Content -->
        <div class="w-3/4 p-4">
            {{$slot}}
        </div>
    </div>
</x-layouts.app>
