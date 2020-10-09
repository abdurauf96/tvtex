<!-- codes for xit -->
    <div class="container-fluid xit goods">
        <div class="container">
            <h3 class="xit__head">
                 @lang('lang.nev_items')
            </h3>
        </div>
        <div class="container ">
            <div class="xit__slayder">
                @foreach($tovels_new as $tovel)
                <div class="goods__item">
                    <div class="goods__item--abxit">
                        <p>@lang('lang.novinki')</p>
                    </div>
                    <div class="goods__item--img">
                        @php $images=json_decode($tovel->image) @endphp
                        @foreach($images as $image)
                        <img src="{{ Voyager::image($image) }}" alt="kuting">
                        @break
                        @endforeach
                    </div>
                    <h3 class="goods__item--avtor">
                        {{ $tovel->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}
                    </h3>
                    <p class="goods__item--text">
                        @php $text=$tovel->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
                        {{ str_limit($text, $limit = 60, $end = '...') }}
                    </p>
                    <a href="{{ route('product_view', ['id'=>$tovel->id]) }}" class="goods__item--podrob">@lang('lang.podrobne')</a>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <!-- xit the end -->