
        <div class="container-fluid filter">
            <div class="container filter__wrapper">
                <h3 class="filter__head">
                        @lang('lang.filtr')
                </h3>
                <div class="filter__button">
                    <!-- <button class="btn">Применить</button> -->
                    <button class="btn reset">@lang('lang.reset')</button>
                </div>
            </div>
        </div>
        <!-- filter the end -->
        <!-- codes for search -->
        <form action="" class="form-group" id="form">
            <div class="container-fluid search">
                <div class="container search__wrapper">
                    <div class="search__item">
                        <div class="search__item--top">    
                            <a href="" class="search__link">@lang('lang.tkan')</a>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="search__item--bottom">
                            @foreach($tkans as $tkan)
                            <div class="br">
                                
                                <label>
                                    <input type="radio" name="tkan" class="sort" value="{{ $tkan->id }}">
                                    <span>{{ $tkan->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span>

                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="search__item">
                        <div class="search__item--top">    
                            <a href="" class="search__link">@lang('lang.tip')</a>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="search__item--bottom">
                            @foreach($types as $type)
                            <div class="br">
                                
                                <label>
                                    <input type="radio" value="{{$type->id }}"  class="sort" id="type" name="type">
                                    <span>{{ $type->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>   
                    </div>
                    <div class="search__item">
                        <div class="search__item--top">    
                            <a href="" class="search__link">@lang('lang.plot')</a>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="search__item--bottom">
                            @foreach($plotnosts as $plot)
                            <div class="br">
                                
                                <label >
                                    <input type="radio" value="{{$plot->id }}" class="sort" name="plotnost">
                                    <span>{{ $plot->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span>
                                    </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="search__item">
                        <div class="search__item--top">    
                            <a href="" class="search__link">@lang('lang.size')</a>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="search__item--bottom">
                            @foreach($sizes as $size)
                            <div class="br">
                                
                                <label >
                                    <input type="radio" value="{{$size->id }}" class="sort" name="size">
                                    <span>{{ $size->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- search the end -->
        <!-- codes for goods -->
        <div class="container-fluid goods main_div">
            <div class="container goods__wrapper" >
                @foreach($tovels as $tovel)
                <div class="goods__item">
                    <div class="goods__item--abxit">
                        <p>@if($tovel->status==1) @lang('lang.novinki') @else @lang('lang.nalich') @endif</p>
                    </div>
                    <div class="goods__item--img">
                        @php $images=json_decode($tovel->image) @endphp
                        @foreach($images as $image)

                        <img src="{{ Voyager::image($image) }}" alt="kuting">
                        @break
                        @endforeach
                    </div>
                    <h3 class="goods__item--avtor">{{ $tovel->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
                    <p class="goods__item--text">
                        @php $text=$tovel->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
                        {{ str_limit($text, $limit = 60, $end = '...') }}
                    </p>
                    <a href="{{ route('product_view', ['id'=>$tovel->id]) }}" class="goods__item--podrob">@lang('lang.podrobne')</a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- ajax -->
        <div class="container-fluid goods ajax_div" >
            <div class="container goods__wrapper" id="resultSort">
                @foreach($tovels as $tovel)
                <div class="goods__item">
                    <div class="goods__item--abxit">
                        <p>@if($tovel->status==1) @lang('lang.novinki') @else @lang('lang.nalich') @endif</p>
                    </div>
                    <div class="goods__item--img">
                        @php $images=json_decode($tovel->image) @endphp
                        @foreach($images as $image)

                        <img src="{{ Voyager::image($image) }}" alt="kuting">
                        @break
                        @endforeach
                    </div>
                    <h3 class="goods__item--avtor">{{ $tovel->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</h3>
                    <p class="goods__item--text">
                        @php $text=$tovel->getTranslatedAttribute('description', \App::getLocale(), 'ru') @endphp
                        {{ str_limit($text, $limit = 60, $end = '...') }}
                    </p>
                    <a href="{{ route('product_view', ['id'=>$tovel->id]) }}" class="goods__item--podrob">@lang('lang.podrobne')</a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- ajax end -->
        <div class="container-fluid yana">
            <div class="container">
                <div class="yana__link">
                    <a href="#" class="btn more">@lang('lang.zagruzit')</a>
                </div>
                <div class="nav_right">
                   {{ $tovels->links('layouts.paginate') }}
                </div>            
            </div>
        </div>
        <!-- goods the end