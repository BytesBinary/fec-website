<section class="section short-description position-relative">
    <div class="overlay position-absolute w-100 h-100 top-0 start-0"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center ">
            @foreach ($short_details['short_details'] as $detail)
                <x-short-details iconClass="{{ $detail['icon'] }}"
                    text="{{ $detail['title'] }}: <br/> <span class='count-up' data-count='{{ $detail['value'] }}'>0</span>" animation="{{ $detail['animation'] }}"/>
            @endforeach
        </div>
    </div>
</section>
