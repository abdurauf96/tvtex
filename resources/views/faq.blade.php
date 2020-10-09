@extends('layouts.index')
@section('content')

   <!-- codes for faq -->
    <section class="about container-fluid">
            <div class="container d-block">
              <div class="page__navigation">
                <ul class="list-inline page__navigation--list">
                  <li class="list-inline-item page__navigation--list-item"><a href="index.html">@lang('lang.home') </a></li>
                  <li class="list-inline-item page__navigation--list-item"><span class="current">FAQ</span></li>
                </ul>
              </div>
            </div>
    </section>
    <section class="container-fluid news produksiya2 vakansi__content">
        <div class="container vakansi__head"><a href="#">Часто задаваемые вопросы</a></div>
        <div class="container vakansi__content--left">
            <ul class="nav flex-column">
                @foreach($categories as $category)
                <li class="nav-item cat" data-id="{{ $category->id }}"><a class="nav-link" href="#">{{ $category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</a></li>
                @endforeach
            </ul>
            <div class="news__right">
            @foreach($faqs as $faq)
                <div class="accordion">
                    <div class="accordion__head">
                    <p>{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#"><i class="fa fa-angle-right"> </i></a>
                    </div>
                    <div class="accordion__body">
                    <div class="news__right--text">
                        <p>{!! $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') !!}</p>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- faq the end -->

@endsection