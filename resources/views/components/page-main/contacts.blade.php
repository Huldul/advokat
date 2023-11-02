<section class="contacts">
    <div class="map">
        <iframe id="map_524207489" frameborder="0" width="100%" height="675px"
            sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>

    </div>
    <div class="container">
        <div class="contacts__inner">
            <h2 class="contacts__title title">{{$contact->title}}</h2>
            <p class="contacts__descr" style="white-space: pre-line;">
                {{$contact->subtitle}}
            </p>
            <a href="" class="modal__btn btn contacts__btn" data-modal="modal--2">Оставить заявку
                <img src="images/arrow-white.svg" alt="">
            </a>
        </div>
    </div>
</section>