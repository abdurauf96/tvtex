  <!-- process section-->
  @if(isset($progress))
    <section class="proccess container-fluid">
      <div class="container">
        <div class="title-primary title-primary__dark">
          <h1 class="text-center">@lang('lang.nasha')</h1>
        </div>
        <div class="row proccess__proccesses">
          @foreach($progress as $progres)
          <div class="col-md-4 proccess__proccess" style="margin-bottom: 2rem;">
            <div class="proccess__proccess--image">
              <img src="{{ Voyager::image($progres->image) }}" alt="">
            </div>
            <div class="proccess__proccess--title">
              <h3>{{ $progres->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
            </div>
            <div class="proccess__proccess--content"><span>{{ $progres->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}</span></div>
          </div>
          @endforeach
        </div>
        <a href="{{ route('excurse') }}"><div class="proccess__button btn btn--light">@lang('lang.eks')</div></a>
      </div>
    </section>
  @endif
    <!-- -- process section-->