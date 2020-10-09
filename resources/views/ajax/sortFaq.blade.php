@foreach($faqs as $faq)
<div class="accordion">
  <div class="accordion__head">
    <p>{{ $faq->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#"><i class="fa fa-angle-right"> </i></a>
  </div>
  <div class="accordion__body">
    <div class="news__right--text">
      <p>{!! $faq->getTranslatedAttribute('body', \App::getLocale(), 'ru') !!}</p>
    </div>
  </div>
</div>
@endforeach