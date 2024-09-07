@props([
    'formCon' => '',
    'formClass' => '',
    'method' => 'POST',
    'action' => '',
    'enctype' => '',
])
<div class="{{$formCon}}">
    <form class="{{$formClass}}" method="{{$method}}" action="{{$action}}" enctype="{{$enctype}}">
        @csrf
        {{$slot}}
    </form>
</div>
