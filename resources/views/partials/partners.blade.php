<!-- partners section-->
@if(isset($partners))
    <section class="partner container-fluid">
      <div class="container">
        <div class="title-primary title-primary__dark">
          <h1 class="text-center">@lang('lang.partner')</h1>
        </div>
        <div class="partner__partners">
          @foreach($partners as $partner)
          <div class="partner__item">
            <div class="partner__image"><a href="{{ $partner->link }}"><img src="{{ Voyager::image($partner->image) }}"/></a>
            </div>
          </div>
          @endforeach
        </div>
        @if(isset($thoughts))
        <div class="title-primary title-primary__dark text-center">
          <h1>@lang('lang.otziv')</h1><span class="title-primary__sub">@lang('lang.tsenim')</span>
        </div>
        <div class="partner__slider">
          @foreach($thoughts as $thought)
          <div class="partner__slider__item">
            <div class="partner__slider__wrapper">
              <div class="partner__slider--image">
                <img src="{{ Voyager::image($thought->image) }}">
              </div>
              <div class="partner__slider--content">
                <div class="partner__name"><span>{{ $thought->author }}</span></div>
                <div class="partner__job"><span>@lang('lang.director') “{{ $thought->company }}”</span></div>
                <div class="partner__comment"><span>{{ $thought->getTranslatedAttribute('content', \App::getLocale(), 'ru') }}</span></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endif
      </div>
    </section>
    @endif
    <!-- -- partners section-->