@extends('layouts.index')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/about.css') }}"/>
@endsection

@section('content')
<!-- section about-->
    <section class="about container-fluid">
      <div class="container d-block">
        <div class="page__navigation">
          <ul class="list-inline page__navigation--list">
            <li class="list-inline-item page__navigation--list-item"><a href="{{ route('home') }}">@lang('lang.home') </a></li>
            <li class="list-inline-item page__navigation--list-item"><span class="current">{{ $product->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</span></li>
          </ul>
        </div>
        
        {!! $product->getTranslatedAttribute('body', \App::getLocale(), 'ru') !!}

      </div>
    </section>
    <!-- -- section about-->


    @if($product->id==2)
    @include('partials.filter')
    @include('partials.novinki')
    @endif
@endsection

@section('extra-js')

@endsection