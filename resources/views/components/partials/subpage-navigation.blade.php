@php
$menus = config('menu.'.$menu);
@endphp
<nav class="mt-4 mx-auto">
    @foreach($menus as $menu)
        <a href="{{route($menu['route'],[$routeKey=>$page])}}" class="block px-4 py-2 text-md text-gray-700 hover:bg-lime-200 " wire:navigate>{{$menu['title']}}</a>
    @endforeach
</nav>

