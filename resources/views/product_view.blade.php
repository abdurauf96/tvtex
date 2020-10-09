@extends('layouts.index')
@section('content')

<!-- codes produk kart -->
        <div class="container-fluid cart">
            <div class="container cart__wrapper">
                <div class="row">
                   
                    <div class="col-lg-6">
                        <div class="cart__slider1">
                            @php $images=json_decode($product->image) @endphp
                            @foreach($images as $image)
                            <div class="cart__slider1--item">
                                <img src="{{ Voyager::image($image) }}" alt="kuting" id="myimage">
                            </div>
                            @endforeach
                        </div>
                        <div class="cart__slider2">
                            @php $images=json_decode($product->image) @endphp
                            @foreach($images as $image)
                            <div class="cart__slider2--item">
                                <img src="{{ Voyager::image($image) }}" alt="kuting" id="myimage">
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="trovel__name">
                            {{ $product->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}
                        </h1>
                        <div class="opisaniye">
                            <h3 class="opisaniye__head">
                                @lang('lang.opisanie')
                            </h3>
                            <p class="opisaniye__text">
                               {{ $product->getTranslatedAttribute('description', \App::getLocale(), 'ru') }}
                            </p>
                        </div>
                        <div class="parametr">
                            <h3 class="parametr__head">@lang('lang.params')</h3>
                            <p class="parametr__text">@lang('lang.tip'):  <span>{{ $product->type->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span></p>
                            <p class="parametr__text">@lang('lang.tkan'): <span>{{ $product->tkan->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span></p>
                            <!-- <p class="parametr__text">Цвет: <span>чёрний</span></p> -->
                            <p class="parametr__text">@lang('lang.sostav'): <span>
                                {{ $product->getTranslatedAttribute('tarkibi', \App::getLocale(), 'ru') }}</span>
                            </p>
                            <p class="parametr__text">@lang('lang.size'): <span>{{ $product->size->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span></p>
                            <p class="parametr__text">@lang('lang.plot'): <span>{{ $product->plotnost->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span></p>
                            
                            
                            
                            <p class="parametr__text">@if($product->status==1) @lang('lang.novinki') @else @lang('lang.nalich') @endif<span></span></p>
                            
                            
                            
                        </div>
                        <div class="razmer">
                            <h3 class="razmer__head">
                                    @lang('lang.dostup_raz') 
                            </h3>
                            <div class="a1">
                                <div class="olcham">
                                    <div class="olcham__item">
                                        <span>30X30</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>30X50</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>30X60</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>35X60</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>40X70</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>50X70</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>50X90</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>50X100</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>70X130</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>100X150</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>100X180</span>
                                    </div>
                                    <div class="olcham__item">
                                            <span>215X150</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="rang">
                            <div class="infoabsolute">
                                <div class="exit">
                                    <span>&times;</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, consequuntur.

                                </p>
                            </div>
                            <div class="infob">
                                <h3 class="rang__head">
                                    @lang('lang.dostup_svet') &nbsp;
                                </h3>
                                <i class="fa fa-info-circle"></i> 
                            </div>
                            <div class="a2">
                                <div class="sveti">
                                    @foreach($colors as $color)
                                    <div class="sveti__item" data-id="{{ $color->id }}">
                                        <img src="{{ Voyager::image($color->icon) }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- produk cart the end -->

      @endsection