<!-- about section-->
    <section class="banner container-fluid">
      <div class="fon1"></div>
      <div class="container">
        <div class="banner__text--top">
          <h1 class="text-center">@if(\App::getLocale()=='ru') {{ setting('site.home_title') }} @else  {{ setting('site.home_title_en') }} @endif</h1>
        </div>
        <div class="banner__text--bottom">
          <h6 class="text-center"> @if( \App::getLocale()=='ru' ) {{ setting('site.subtitle') }} @else {{ setting('site.home_subtitle_en') }} @endif</h6>
        </div><a class="banner__button btn btn--light" href="#contact">@lang('lang.svyaz')</a>
        <div class="row banner__info">
          <div class="banner__info--side">
            <div class="banner__info--icon text-center"><i class="fa fa-phone"></i></div>
            <div class="banner__info__text"><span class="banner__info--text">
            {{ setting('site.number1') }}</span><span class="banner__info--text">
            {{ setting('site.number2') }}</span></div>
          </div>
          <div class="banner__info--center">
            <div class="banner__info--icon text-center"><i class="fa fa-map-marker-alt"></i></div>
            <div class="banner__info__text"><span class="banner__info--text">
            {{ setting('site.addres') }}</span></div>
          </div>
          <div class="banner__info--side">
            <div class="banner__info--icon text-center"><i class="fa fa-envelope"></i></div>
            <div class="banner__info__text"><span class="banner__info--text">
            {{ setting('site.pochta') }}</span></div>
          </div>
        </div>
      </div>
    </section>
    <!-- -- about section-->