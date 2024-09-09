<div class="breadcrumbs text-sm">
    <ul>
        @foreach ($links as $index => $link)
            <li>
                @if (isset($link['url']) && $index < count($links) - 1)
                    <a href="{{ $link['url'] }}" class="inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $link['icon'] }}"></path>
                        </svg>
                        {{ $link['label'] }}
                    </a>
                @else
                    <span class="inline-flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-4 w-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $link['icon'] }}"></path>
                        </svg>
                        {{ $link['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ul>
</div>
