<!-- about section-->
@if(isset($page))
  <section class="about container-fluid" id="about">
    <div class="container">
      <div class="about__text">
        <div class="title-primary title-primary__light title-primary__left">
          <h1>{{ $page->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h1>
        </div>
        <div class="about__content"><span>{{ $page->getTranslatedAttribute('excerpt', \App::getLocale(), 'ru') }}</span></div>
        <div class="about__link"><a href="{{ route('about', ['slug'=>$page->slug]) }}">@lang('lang.podrobne')</a></div>
      </div>
      <div class="about__image">
        <div class="about__image--wrapper">
          <img src="{{ Voyager::image($page->image) }}">
        </div>
      </div>
    </div>
  </section>
@endif
  <!-- -- about section-->