<!-- info section-->
@if(isset($advantages))
    <section class="info container-fluid">
      <div class="container">
        <div class="title-primary title-primary__light">
          <h1 class="text-center">@lang('lang.info') </h1>
        </div>
        <div class="row info__center">
          <div class="col-lg-6 info__image d-sm-none d-md-block">
            <div class="info__image--wrapper"></div>
          </div>
          <div class="col-lg-6 info__text">
            <ul class="info__text--list">
              @foreach($advantages as $advantage)
              <li class="info__text--list-item">
                <div class="info__text--list-icon">
                  @php $images=json_decode($advantage->image) @endphp
                  @foreach($images as $image)
                  <img src="/storage/{{ $image->download_link }}"/>
                  @endforeach
                </div>
                  <span>
                    {{ $advantage->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}
                  </span>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>
  @endif
    <!-- -- info section-->