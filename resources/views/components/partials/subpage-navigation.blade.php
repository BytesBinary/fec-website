@php
$menus = config('menu.departments.'.$department);
@endphp
<div class="w-1/4 bg-gray-200 p-4 h-screen">
    <ul>
        @foreach($menus as $menu)
            <li class="mb-2">
                <a href="{{route($menu['route'],['department'=>$department])}}" wire:navigate>{{$menu['title']}}</a>
            </li>
        @endforeach
    </ul>
</div>
