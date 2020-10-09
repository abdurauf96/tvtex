<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ setting('site.home_title') }}</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ setting('site.home_title') }}">
    <!-- stylesheets-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}"/>
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css"/>
    
    @yield('extra-css')
    <!-- --stylesheets-->
  </head>
  <body>
    <!-- main content-->
    <!-- header-->
    
    <header class="header container-fluid">
      <div class="container">
        <a class="logo" href="{{ route('home') }}">
          <div class="logo--top"><span>{{ setting('site.title') }}</span></div>
          <div class="logo--bottom"><span>{{ setting('site.description') }}</span></div>
        </a>
        
         {{ menu('main', 'partials.menu') }}
         
      </div>
    </header>
    <!-- -- header-->
    
    @yield('content')

    <!-- contact section-->
    <section class="contact container-fluid">
      <div class="container" id="contact">
        <div class="contact__text">
          <div class="title-primary title-primary__dark title-primary__left">
            <h1>@lang('lang.kontakti')</h1>
          </div>
          <ul class="contact__list">
            <li class="contact__list--item">
              <div class="contact__list--icon"><i class="fa fa-phone"></i></div>
              <div class="contact__list--text"><span class="tel">
              {{ setting('site.number1') }} </span><br/><span class="tel">
              {{ setting('site.number2') }}</span><span>(@lang('lang.faks'))</span></div>
            </li>
            <li class="contact__list--item">
              <div class="contact__list--icon"><i class="fa fa-map-marker-alt"></i></div>
              <div class="contact__list--text"><span>
              @if( \App::getLocale()=='ru' ){{ setting('site.addres') }} @else {{ setting('site.addres_en') }} @endif</span></div>
            </li>
            <li class="contact__list--item">
              <div class="contact__list--icon"><i class="fa fa-envelope"></i></div>
              <div class="contact__list--text"><span>{{ setting('site.pochta') }}</span></div>
            </li>
          </ul>
          <hr/>
          <div class="producter"><span>Copyright © 2019</span><br/><span>Разработка и поддержка сайта <a href='#'>Webmasters</a></span></div>
        </div>
        <div class="contact__form"><img class="contact__form--image" src="/images/operator.png"/>
          <form class="contact__form--form" id="form" action="/connect" method="post">
            {{ csrf_field() }}
            <div class="title-secondary title-secondary__light title-secondary__left">
              <h2>@lang('lang.xotite')</h2>
            </div>
            <p class="contact__form--text">@lang('lang.ostavte')</p>
            <input class="contact__form--input" name="name" type="text" name="uname" placeholder="@lang('lang.imya'):"/>
            <input class="contact__form--input" name="number" type="number" placeholder="@lang('lang.phone'):"/>
            <input class="contact__form--submit btn btn--light" type="submit" value="@lang('lang.send')"/>
          </form>
        </div>
      </div>
    </section>
    <!-- -- contact section-->
     <!-- modal -->
     <div class="container-fluid svet__modal" id="getImage">
          
      </div>
    <!--   modal end -->
    <!-- -- content-->
    <!-- all scripts goes here-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>    
    @yield('extra-js')
    <script>
        $(document).ready(function () {
        $('#form').validate({ // initialize the plugin
            rules: {
                name: {
                    required: true
                },
                number: {
                    required: true,
                    digits: true                 
                },
            }
        });
    });
    </script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
      $(document).ready(function(){
          $(".product__slides").slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: false,
              dots: true,
              arrows: true,
              prevArrow: "<i class='fa fa-chevron-left'></i>",
              nextArrow: "<i class='fa fa-chevron-right'></i>",
              responsive: [
                  {
                  breakpoint: 1200,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      //- infinite: true,
                      //- dots: true
                  }
                  },
                  {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: true,
                      arrows: false
                  }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
              ]
          });
          // $(".partner__partners").slick({
      
          //     responsive: [
          //         {
          //             breakpoint: 3048,
          //             settings: "unslick"
          //         },
          //         {
          //             breakpoint: 768,
          //             settings: {
          //                 slidesToShow: 1,
          //                 unslick: true,
          //                 arrows: false,
          //                 dots: true,
          //                 slidesToScroll: 1,
          //                 autoplay: true
          //             }
          //         }
          //     ]
          // })
          $(".partner__slider").slick({
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: false,
              dots: false,
              arrows: true,
              prevArrow: "<i class='fa fa-chevron-left'></i>",
              nextArrow: "<i class='fa fa-chevron-right'></i>",
              responsive: [
                  {
                  breakpoint: 1200,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      //- infinite: true,
                      //- dots: true
                  }
                  },
                  {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: true,
                      arrows: false,
                      dots: true
                  }
                  }
                  // You can unslick at a given breakpoint now by adding:
                  // settings: "unslick"
                  // instead of a settings object
              ]
          });
      });
    </script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/my.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $('body').delegate(".accordion__head", 'click',function(e){
          e.preventDefault();
            if($(this).siblings(".accordion__body").is(":visible")){
                $(this).siblings(".accordion__body").slideToggle();
                $(this).toggleClass("accordion__active");
            }
            else{
                $(".accordion__body").slideUp();
                $(this).siblings(".accordion__body").slideToggle();
                $(".accordion__head").removeClass("accordion__active");  
                $(this).addClass("accordion__active");

            }
        });
    </script>
    <!-- --- scripts-->
   
  </body>
</html>