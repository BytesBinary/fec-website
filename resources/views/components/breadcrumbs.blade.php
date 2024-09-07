<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $name => $link)
            <li class="breadcrumb-item">
                @if ($loop->last)
                    {{ $name }}
                @else
                    <a href="{{ $link }}">{{ $name }}</a>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
