<x-layouts.app :title="$title ?? ''">
    <div class="container mx-auto mt-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-6">
            <!-- Sidebar Menu -->
            <div class="w-full mx-auto mb-10 col-span-1 rounded-lg p-5 border {{!empty($sideNavCss) ? $sideNavCss : 'bg-lime-50 shadow-md border-gray-200'}}">
                <h2 class="text-xl font-bold text-gray-600 hover:text-blue-700 transition duration-300 mb-4">
                    <a href="{{!empty($cardRoute) ? route($cardRoute) : '#'}}" wire:navigate>{{$cardTitle}}</a>
                </h2>
                <hr class="border-gray-300 mb-4">
            <x-partials.subpage-navigation :route-key="$routeKey" :page="$page" :menu="$menu" />
            </div>
            <!-- Main Content -->
            <div class="w-full mb-10 lg:col-span-3 col-span-3 p-8 border rounded-lg {{!empty($mainContentCss) ? $mainContentCss : 'bg-white shadow-md border-gray-200'}}">
                {{$slot}}
            </div>
        </div>
    </div>
</x-layouts.app>
