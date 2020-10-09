@extends('layouts.index')
@section('content')

<div class="container-fluid ekskursiya">
    <section class="container-fluid what">
        <div class="container what__wrapper">
            @foreach($infos as $info)
            <div class="what__left">
                <h3 class="what__head">{{ $info->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
                <p class="what__text">{{ $info->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
               <!--  <h3 class="premer__head">Примерный текст</h3>
                <p class="what__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <h3 class="premer__head">Примерный текст</h3>
                <p class="what__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
            </div>
            <div class="what__right"><img src="{{ Voyager::image($info->image) }}" alt="kuting"/></div>
            @break
            @endforeach
        </div>
    </section>
    <section class="container-fluid pitem">
        <div class="container pitem__wrapper">
            @foreach($infos as $info)
            @if(!$loop->first)
            <div class="pitem__item">
                <div class="pitem__left">
                    <img class="pitem--img" src="{{ Voyager::image($info->image) }}" alt="kuting"/>
                </div>
                
                <div class="pitem__right">
                    <h3 class="pitem--avtor">{{ $info->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
                    <p class="pitem--text">{{ $info->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</p>
                    <a href="{{ route('excurse_view', ['id'=>$info->id]) }}" class="pitem--link">@lang('lang.podrobne') </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
</div>

@endsection