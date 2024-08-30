<div class="{{$rowClass}}">
    @if($link)
        <a href="{{$link}}">
            @endif
            <div class="card {{$cardClass}}" data-aos="{{$animation}}">
                @if($image)
                <img src="{{ $imageUrl }}" class="card-img-top {{$imageClass}}" alt="{{$imageAlt}}">
                @endif
                <div class="card-body {{$bodyClass}}">
                    {!! $customHtmlInCard !!}
                    <h5 class="card-title {{$titleClass}}">{{$cardTitle}}</h5>
                    <p class="card-text {{$textClass}}">{!! $cardText !!}</p>
                    @if($button)
                        <div class="{{$cardConClass}}">
                            <a href="{{$buttonUrl}}" class="{{$urlClass}}">
                                <button class="{{$buttonClass}}">
                                    {{$buttonText}}
                                </button>
                            </a>
                        </div>
                    @endif
                    @if($cardlink)
                        <a href="{{$cardLinkUrl}}" class="{{$cardLinkClass}}">
                            <i class="{{$cardLinkIcon}}"></i> {{$cardUrlText}}
                        </a>
                    @endif
                </div>
            </div>
            @if($link)
        </a>
    @endif
</div>
