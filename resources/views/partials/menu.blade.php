 <nav class="navigationbar">
    <input class="navigationbar--toggler" id="nav-toggler" type="checkbox" name="navbartoggler"/>
    <ul class="navigationbar--list">
      @foreach($items as $item)
      <li class="navigationbar--list--item"><a class="navigationbar--list-link" href="{{ $item->link() }}">{{ $item->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</a></li>
      @endforeach
    </ul>

    <div class="navigationbar__gradient d-md-none">&nbsp;</div>

    <label for="nav-toggler">
      <div class="navigationbar--toggler--button btn btn--light"><i class="fa fa-bars"></i><span class="d-md-none">&nbsp;</span></div>
    </label>
        <ul class="headerUl">
            <li><a href="/lang/ru"><img src="/images/ru.png"></a></li>
            <li><a href="/lang/en"><img src="/images/en.png"></a></li>
         </ul>
  </nav>