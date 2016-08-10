@if(App::getLocale()== 'en')
{{$latest->title}}
@else
    {{$latest->titre}}
@endif
