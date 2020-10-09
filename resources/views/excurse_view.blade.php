@extends('layouts.index')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
@endsection

@section('content')
@isset($info)
<!-- section about-->
    <section class="about container-fluid">
      <div class="container d-block">
        <div class="page__navigation">
          <ul class="list-inline page__navigation--list">
            <li class="list-inline-item page__navigation--list-item"><a href="{{ route('home') }}">@lang('lang.home') </a></li>
            <li class="list-inline-item page__navigation--list-item"><span class="current">{{ $info->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</span></li>
          </ul>
        </div>
        <div class="about__text d-flex">
          <div class="about__content">
            <div class="title-primary title-primary__light title-primary__left">
              <h1>{{ $info->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h1>
            </div><span>{{ $info->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</span>
          </div>
          <div class="about__image">
            <div class="about__image--wrapper">
              <img src="{{ Voyager::image($info->image) }}">
            </div>
          </div>
        </div>
        <div class="about__content">
            {!! $info->getTranslatedAttribute('body', \App::getLocale(), 'ru') !!}
        </div>
        
      </div>
     
    </section>
    <!-- -- section about-->
@endisset
@endsection

@section('extra-js')
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endsection