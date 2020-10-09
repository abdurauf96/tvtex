@extends('layouts.index')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
@endsection

@section('content')
@isset($page)
<!-- section about-->
    <section class="about container-fluid">
      <div class="container d-block">
        <div class="page__navigation">
          <ul class="list-inline page__navigation--list">
            <li class="list-inline-item page__navigation--list-item"><a href="{{ route('home') }}">@lang('lang.home') </a></li>
            <li class="list-inline-item page__navigation--list-item"><span class="current">{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</span></li>
          </ul>
        </div>
        <div class="about__text d-flex">
          <div class="about__content">
            <div class="title-primary title-primary__light title-primary__left">
              <h1>{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h1>
            </div><span>{{ $page->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru') }}</span>
          </div>
          <div class="about__image">
            <div class="about__image--wrapper">
              <img src="{{ Voyager::image($page->image) }}">
            </div>
          </div>
        </div>
        <div class="about__content">
            {!! $page->getTranslatedAttribute('body', \App::getLocale(), 'ru') !!}
        </div>
        
      </div>
      @if(isset($images))
      <div class="container">
        <div class="about__gallery row">
          @foreach($images as $image)
          <div class="col-lg-3 col-md-4 col-sm-6 about__gallery--item"><a href="{{ Voyager::image($image->image) }}" data-fancybox="gallery"></a></div>
          @endforeach
        </div>
      </div>
      @endif
    </section>
    <!-- -- section about-->
@endisset
@endsection

@section('extra-js')
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endsection