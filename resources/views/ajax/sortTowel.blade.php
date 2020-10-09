@foreach($tovels as $tovel)
<div class="goods__item">
    <div class="goods__item--abxit">
        <p>@if($tovel->status==1) Новинка @else Наличие @endif</p>
    </div>
    <div class="goods__item--img">
        @php $images=json_decode($tovel->image) @endphp
        @foreach($images as $image)

        <img src="{{ Voyager::image($image) }}" alt="kuting">
        @break
        @endforeach
    </div>
    <h3 class="goods__item--avtor">{{ $tovel->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
    <p class="goods__item--text">
        @php $text=$tovel->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
        {{ str_limit($text, $limit = 60, $end = '...') }}
    </p>
    <a href="{{ route('product_view', ['id'=>$tovel->id]) }}" class="goods__item--podrob">Подробнее</a>
</div>
@endforeach