
<section class="page-contacts">
    <div class="container">
        <div class="page-contacts__inner">
            <div class="page-contacts__items">
                <div class="page-contacts__item">
                    <span class="page-contacts__item__title">Адрес в г. Астана:</span>
                    <p class="page-contacts__item__info"> {{$contact->shortadress}}</p>
                </div>
                <div class="page-contacts__item">
                    <span class="page-contacts__item__title">Для связи со мной</span>
                    <a href="tel:+77772987271" class="page-contacts__item__info">{{$contact->number}}</a>
                </div>
                <div class="page-contacts__item">
                    <span class="page-contacts__item__title">e-mail</span>
                    <a href="mailto:moroz_rinat@mail.ru" class="page-contacts__item__info">{{$contact->email}}</a>
                </div>
                <div class="page-contacts__socials">
                    <a href="https://{{$contact->instagram}}" target="_blank">
                        <img src="images/inst-icon.svg" alt="">
                    </a>
                    <a href="https://{{$contact->facebook}}" target="_blank">
                        <img src="images/facebook-icon.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="page-contacts__map">
                <iframe id="map_524207489" frameborder="0" width="100%" height="675px"
                    sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe>
            </div>
        </div>
    </div>
</section>