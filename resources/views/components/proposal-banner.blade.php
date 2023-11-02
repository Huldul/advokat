<section style="background-image: url({{asset('images/proposal-banner-img.jpg')}})" class="proposal-banner">
    <div class="container">
        <div class="proposal-banner__inner">
            <h2 class="title title-mb-40">{{$indexPage->consultation}}</h2>
            <p class="proposal-banner__descr">{{$indexPage->subtitle2}}</p>
            </p>
            <div class="proposal-banner__buttons">
                <button class="modal__btn btn proposal-banner__btn" data-modal="modal--2">Оставить заявку
                    <img src="{{asset('images/arrow-white.svg')}}" alt="">
                </button>
                <a href="https://{{$contact->whatsapp}}" target="_blank" class="btn btn-transparent proposal-banner__btn">Перейти в WhatsApp
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                        <path
                            d="M0.499797 8.99995L23.5011 9.00111M23.5011 9.00111L15.5306 1.03062M23.5011 9.00111L15.5306 16.9716"
                            stroke="#BA9153" stroke-width="2" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>