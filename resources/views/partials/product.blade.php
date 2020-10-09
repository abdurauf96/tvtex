 <!-- products section-->
 @if(isset($products))
    <section class="product container-fluid">
      <div class="container" id="product">
        <div class="title-primary title-primary__light">
          <h1 class="text-center">@lang('lang.nasha')</h1>
        </div>
        <div class="product__slides">
          @foreach($products as $product)
          <div class="product__slides--wrapper">
            <div class="product__slides--slide">
              <div class="slide__image"><img src="{{ Voyager::image($product->image) }}"/></div>
              <div class="slide__title">
                <h3>{{ $product->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
              </div>
              <div class="slide__content"><span class="color">@lang('lang.sveta'): 	{{ $product->getTranslatedAttribute('color', \App::getLocale(), 'ru') }}</span><br/><span class="size">@lang('lang.razmer'): 	{{ $product->getTranslatedAttribute('size', \App::getLocale(), 'ru') }}</span><br/><span class="country">@lang('lang.proizvod'): {{ $product->getTranslatedAttribute('region', \App::getLocale(), 'ru') }}</span><br/><span class="ad"> {{ $product->getTranslatedAttribute('pay', \App::getLocale(), 'ru') }}</span></div>
              <a href="{{ route('view', ['id'=>$product->id]) }}"><div class="slide__button btn btn--dark">@lang('lang.podrobne')</div></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif
    <!-- -- products section-->