@php
$menus = config('menu.'.$menu);
@endphp
<nav class="mt-4 mx-auto">
    @foreach($menus as $menu)
        <a href="{{route($menu['route'],[$routeKey=>$page])}}" class="block px-4 py-2 text-md text-gray-200 hover:text-[#f5ad0d] hover:bg-[#08142b]" wire:navigate>{{$menu['title']}}</a>
    @endforeach
</nav>

