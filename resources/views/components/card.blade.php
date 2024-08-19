<div class="{{$rowClass}}">
    @if($link)
        <a href="{{$link}}">
            @endif
            <div class="card {{$cardClass}}" data-aos="{{$animation}}">
                <img src="{{ $imageUrl }}" class="card-img-top {{$imageClass}}" alt="{{$imageAlt}}">
                <div class="card-body {{$bodyClass}}">
                    <h5 class="card-title {{$titleClass}}">{{$cardTitle}}</h5>
                    <p class="card-text {{$textClass}}">{!! $cardText !!}</p>
                </div>
            </div>
            @if($link)
        </a>
    @endif
</div>
