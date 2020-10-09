@extends('layouts.index')

@section('content')

 <!-- codes for faq -->
    <section class="about container-fluid">
            <div class="container d-block">
              <div class="page__navigation">
                <ul class="list-inline page__navigation--list">
                  <li class="list-inline-item page__navigation--list-item"><a href="index.html">Главная </a></li>
                  <li class="list-inline-item page__navigation--list-item"><span class="current">Вакансии</span></li>
                </ul>
              </div>
            </div>
    </section>
    <section class="container-fluid news produksiya2 vakansi__content">
        <div class="container vakansi__head"><a href="#">Ваканси</a></div>
        <div class="container vakansi__content--left">
            <ul class="nav flex-column">
              @foreach($vacancies as $vacancy)
            <li class="nav-item vac_id" data-id="{{ $vacancy->id}}">
              <a class="nav-link @if($loop->first) active2 cat_id @endif " href="#">{{ $vacancy->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</a>
            </li>
            @endforeach
                
            </ul>
            <div class="news__right">
                    <div class="vakansi__content--right">
                        <div id="resVac">
                            <div class="right__head">
                              @foreach($vacancies as $vacancy)
                                @if($loop->first)
                                <p>{{ $vacancy->getTranslatedAttribute('title', \App::getLocale(), 'ru') }}</p><a href="#">Зарплат: <span>{{ $vacancy->salary }} сум</span></a>
                                @endif
                              @endforeach 
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
                                    @isset($info->requirements)
                                    <li>{{ $info->getTranslatedAttribute('requirements', \App::getLocale(), 'ru') }}</li>
                                    @endisset
                                  @endforeach
                                </ul>
                              </div>
                            </div>
                        </div>
                            <div class="right__form">
                              <div class="form__head">
                                <p>Форма для заявки:</p>
                              </div>
                              <form class="form-group" action="/resume" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form">

                                  <input class="form-control" name="vacancy" type="text" required="" placeholder="Название вакансий"/>
                                  <input required="" name="name" class="form-control" type="text" placeholder="Ваше имя"/>
                                  <input required="" name="email" class="form-control" type="text" placeholder="Почта"/>
                                  <input required="" name="phone" class="form-control" type="text" placeholder="Номер телефона"/>
                                </div>
                                <div class="form2">
                                  <label for="texta">Расскажите о себе:</label>
                                  <textarea required="" name="about" class="form-control"></textarea>
                                </div>
                                <div class="form form3">
                                  
                                    <p>Прикрепить резюме<input class="form-control" required="" type="file" name="resume"></p>

                                  <input type="submit" value="оставить заявку"/>
                                </div>
                              </form>
                            </div>
                          </div>
            </div>
        </div>
    </section>

    <!-- faq the end -->

@endsection