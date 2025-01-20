@props(['paginationLinks' => ''])
<div class="mt-6 flex justify-center">
    <nav class="inline-flex space-x-2 bg-white shadow-md rounded-md p-2">
        @if ($paginationLinks)
            {!! $paginationLinks !!}
        @endif
    </nav>
</div>
