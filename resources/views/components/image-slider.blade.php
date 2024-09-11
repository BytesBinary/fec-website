@props([
    'id' => '1',
    'src' => 'images/gallery/1.jpg',
    'prev' => '1',
    'next' => '1',
])
<div id="slide{{$id}}" class="carousel-item relative w-full">
    <img
        src="{{asset($src)}}"
        class="w-full h-screen" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide{{$prev}}" class="btn btn-circle">❮</a>
        <a href="#slide{{$next}}" class="btn btn-circle">❯</a>
    </div>
</div>