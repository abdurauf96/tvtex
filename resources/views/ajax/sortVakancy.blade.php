<div class="right__head">

  <p>{{ $vacancy->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#"> Зарплата: <span>{{ $vacancy->salary }}</span></a>
</div>
<div class="right__content">
  <div class="right__content--item">
    <div class="item__head">
      <p>Обязанности:</p>
    </div>
    <ul>
      @foreach($infos as $info)
      @isset($info->obligations)
      <li>{{ $info->getTranslatedAttribute('obligations', \App::getLocale(), 'ru') }}</li>
      @endisset
      @endforeach
    </ul>
  </div>
  <div class="right__content--item">
    <div class="item__head">
      <p>Требования:</p>
    </div>
    <ul>
      @foreach($infos as $info)
      @if($info->requirements!=null)
      <li>{{ $info->getTranslatedAttribute('requirements', \App::getLocale(), 'ru') }}</li>
      @endif
      @endforeach
    </ul>
  </div>
</div>
