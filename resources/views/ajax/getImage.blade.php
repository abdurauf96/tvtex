<div class="container" >
    <div class="row">
        <div class="col-lg-4 offset-lg-4 modal__wrapper">
            <div class="svet__exit">
                &times;
            </div>
            <div class="modal__img">
              <img src="{{ Voyager::image($image->image) }} " alt=" kuting">  
            </div>
            
            <div class=" modal__parametr paramert">
                <p class="parametr__text">Цвет: <span>{{ $image->name }}</span></p>
                <p class="parametr__text">Код цвета: <span>{{ $image->kod }}</span></p>
            </div>
        </div>
    </div>
</div>