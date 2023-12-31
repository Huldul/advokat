{{-- класс alert--active для успешного отправления заявки --}}
{{-- класс alert--warning для предупреждения --}}
{{-- класс alert--error для ошибки при отправке заявки --}}
{{-- Классы должны добавляться в блок ниже "alert--fixed box-size" --}}

@if (session('error'))
<div class="alert--fixed alert--error box-size">
    <div class="alert--content alert--width alert--block box-size">
        <div class="alert--img">
            <div class="alert--img__item active box-size">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 329.954 329.954"
                    xml:space="preserve">
                    <path id="XMLID_89_" d="M99.85,299.045c2.813,2.813,6.629,4.393,10.607,4.393c3.979,0,7.794-1.581,10.606-4.393L325.56,94.548
      c2.814-2.813,4.394-6.628,4.394-10.606c0-3.979-1.58-7.794-4.394-10.607l-42.427-42.426c-5.857-5.857-15.355-5.858-21.213,0
      L110.461,182.37l-42.428-42.428c-2.813-2.813-6.629-4.394-10.607-4.394s-7.793,1.581-10.606,4.394L4.393,182.369
      c-5.857,5.858-5.857,15.355,0,21.213L99.85,299.045z" />
                </svg>
            </div>
            <div class="alert--img__item warning box-size">
                <svg height="512pt" viewBox="0 -18 512.00043 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                    <path d="m241 116h30v165h-30zm0 0" />
                    <path
                        d="m256 371c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0" />
                    <path
                        d="m502.53125 364.714844-180.890625-326.011719c-13.40625-24.230469-37.941406-38.703125-65.640625-38.703125s-52.234375 14.472656-65.640625 38.714844l-180.890625 325.988281c-12.976562 23.480469-12.597656 51.28125 1.027344 74.398437 13.621094 23.101563 37.777344 36.898438 64.597656 36.898438h361.8125c26.820312 0 50.976562-13.796875 64.597656-36.898438 13.625-23.117187 14.003906-50.917968 1.027344-74.386718zm-246.53125 66.285156c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm45-120h-90v-225h90zm0 0" />
                </svg>
            </div>
            <div class="alert--img__item error box-size">
                <svg class="box-size" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.111 455.111"
                    xml:space="preserve">
                    <circle style="fill:#E24C4B;" cx="227.556" cy="227.556" r="227.556" />
                    <path style="fill:#D1403F;" d="M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
    c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
    C422.4,91.022,455.111,155.022,455.111,227.556z" />
                    <path style="fill:#FFFFFF;" d="M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
    c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
    c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
    c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
    C339.911,308.622,339.911,322.844,331.378,331.378z" />
                </svg>
            </div>
        </div>
        <div class="alert-text box-size">
            <div class="alert--title box-size">Ваша заявка принята в обработку</div>

            <!-- <div class="alert--subtitle box-size"></div> -->
        </div>
        <div class="alert--x alert--close box-size">
            <svg class="box-size" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 284.559 284.559"
                xml:space="preserve">
                <path id="XMLID_90_" d="M4.394,237.739l42.427,42.427c2.812,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.606-4.394
    l74.246-74.246l74.246,74.246c2.813,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.607-4.394l42.427-42.427
    c5.858-5.858,5.858-15.355,0-21.213L205.92,142.28l74.245-74.247c2.814-2.813,4.394-6.628,4.394-10.606
    c0-3.979-1.58-7.794-4.394-10.607L237.739,4.393c-5.857-5.858-15.356-5.858-21.213,0.001L142.28,78.639L68.033,4.394
    c-5.857-5.858-15.356-5.858-21.213,0L4.394,46.82C1.58,49.633,0,53.448,0,57.426c0,3.978,1.58,7.793,4.394,10.606l74.245,74.247
    L4.394,216.526C-1.465,222.384-1.465,231.881,4.394,237.739z" />
            </svg>
        </div>
    </div>
    <div class="alert--bg alert--close box-size"></div>
</div> 
    
@endif

@if (session('waning'))
<div class="alert--fixed alert--warning box-size">
    <div class="alert--content alert--width alert--block box-size">
        <div class="alert--img">
            <div class="alert--img__item active box-size">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 329.954 329.954"
                    xml:space="preserve">
                    <path id="XMLID_89_" d="M99.85,299.045c2.813,2.813,6.629,4.393,10.607,4.393c3.979,0,7.794-1.581,10.606-4.393L325.56,94.548
      c2.814-2.813,4.394-6.628,4.394-10.606c0-3.979-1.58-7.794-4.394-10.607l-42.427-42.426c-5.857-5.857-15.355-5.858-21.213,0
      L110.461,182.37l-42.428-42.428c-2.813-2.813-6.629-4.394-10.607-4.394s-7.793,1.581-10.606,4.394L4.393,182.369
      c-5.857,5.858-5.857,15.355,0,21.213L99.85,299.045z" />
                </svg>
            </div>
            <div class="alert--img__item warning box-size">
                <svg height="512pt" viewBox="0 -18 512.00043 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                    <path d="m241 116h30v165h-30zm0 0" />
                    <path
                        d="m256 371c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0" />
                    <path
                        d="m502.53125 364.714844-180.890625-326.011719c-13.40625-24.230469-37.941406-38.703125-65.640625-38.703125s-52.234375 14.472656-65.640625 38.714844l-180.890625 325.988281c-12.976562 23.480469-12.597656 51.28125 1.027344 74.398437 13.621094 23.101563 37.777344 36.898438 64.597656 36.898438h361.8125c26.820312 0 50.976562-13.796875 64.597656-36.898438 13.625-23.117187 14.003906-50.917968 1.027344-74.386718zm-246.53125 66.285156c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm45-120h-90v-225h90zm0 0" />
                </svg>
            </div>
            <div class="alert--img__item error box-size">
                <svg class="box-size" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.111 455.111"
                    xml:space="preserve">
                    <circle style="fill:#E24C4B;" cx="227.556" cy="227.556" r="227.556" />
                    <path style="fill:#D1403F;" d="M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
    c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
    C422.4,91.022,455.111,155.022,455.111,227.556z" />
                    <path style="fill:#FFFFFF;" d="M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
    c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
    c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
    c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
    C339.911,308.622,339.911,322.844,331.378,331.378z" />
                </svg>
            </div>
        </div>
        <div class="alert-text box-size">
            <div class="alert--title box-size">Ваша заявка принята в обработку</div>

            <!-- <div class="alert--subtitle box-size"></div> -->
        </div>
        <div class="alert--x alert--close box-size">
            <svg class="box-size" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 284.559 284.559"
                xml:space="preserve">
                <path id="XMLID_90_" d="M4.394,237.739l42.427,42.427c2.812,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.606-4.394
    l74.246-74.246l74.246,74.246c2.813,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.607-4.394l42.427-42.427
    c5.858-5.858,5.858-15.355,0-21.213L205.92,142.28l74.245-74.247c2.814-2.813,4.394-6.628,4.394-10.606
    c0-3.979-1.58-7.794-4.394-10.607L237.739,4.393c-5.857-5.858-15.356-5.858-21.213,0.001L142.28,78.639L68.033,4.394
    c-5.857-5.858-15.356-5.858-21.213,0L4.394,46.82C1.58,49.633,0,53.448,0,57.426c0,3.978,1.58,7.793,4.394,10.606l74.245,74.247
    L4.394,216.526C-1.465,222.384-1.465,231.881,4.394,237.739z" />
            </svg>
        </div>
    </div>
    <div class="alert--bg alert--close box-size"></div>
</div> 
    
@endif

@if (session('success'))
<div class="alert--fixed alert--active box-size">
    <div class="alert--content alert--width alert--block box-size">
        <div class="alert--img">
            <div class="alert--img__item active box-size">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 329.954 329.954"
                    xml:space="preserve">
                    <path id="XMLID_89_" d="M99.85,299.045c2.813,2.813,6.629,4.393,10.607,4.393c3.979,0,7.794-1.581,10.606-4.393L325.56,94.548
      c2.814-2.813,4.394-6.628,4.394-10.606c0-3.979-1.58-7.794-4.394-10.607l-42.427-42.426c-5.857-5.857-15.355-5.858-21.213,0
      L110.461,182.37l-42.428-42.428c-2.813-2.813-6.629-4.394-10.607-4.394s-7.793,1.581-10.606,4.394L4.393,182.369
      c-5.857,5.858-5.857,15.355,0,21.213L99.85,299.045z" />
                </svg>
            </div>
            <div class="alert--img__item warning box-size">
                <svg height="512pt" viewBox="0 -18 512.00043 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                    <path d="m241 116h30v165h-30zm0 0" />
                    <path
                        d="m256 371c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0" />
                    <path
                        d="m502.53125 364.714844-180.890625-326.011719c-13.40625-24.230469-37.941406-38.703125-65.640625-38.703125s-52.234375 14.472656-65.640625 38.714844l-180.890625 325.988281c-12.976562 23.480469-12.597656 51.28125 1.027344 74.398437 13.621094 23.101563 37.777344 36.898438 64.597656 36.898438h361.8125c26.820312 0 50.976562-13.796875 64.597656-36.898438 13.625-23.117187 14.003906-50.917968 1.027344-74.386718zm-246.53125 66.285156c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm45-120h-90v-225h90zm0 0" />
                </svg>
            </div>
            <div class="alert--img__item error box-size">
                <svg class="box-size" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.111 455.111"
                    xml:space="preserve">
                    <circle style="fill:#E24C4B;" cx="227.556" cy="227.556" r="227.556" />
                    <path style="fill:#D1403F;" d="M455.111,227.556c0,125.156-102.4,227.556-227.556,227.556c-72.533,0-136.533-32.711-177.778-85.333
    c38.4,31.289,88.178,49.778,142.222,49.778c125.156,0,227.556-102.4,227.556-227.556c0-54.044-18.489-103.822-49.778-142.222
    C422.4,91.022,455.111,155.022,455.111,227.556z" />
                    <path style="fill:#FFFFFF;" d="M331.378,331.378c-8.533,8.533-22.756,8.533-31.289,0l-72.533-72.533l-72.533,72.533
    c-8.533,8.533-22.756,8.533-31.289,0c-8.533-8.533-8.533-22.756,0-31.289l72.533-72.533l-72.533-72.533
    c-8.533-8.533-8.533-22.756,0-31.289c8.533-8.533,22.756-8.533,31.289,0l72.533,72.533l72.533-72.533
    c8.533-8.533,22.756-8.533,31.289,0c8.533,8.533,8.533,22.756,0,31.289l-72.533,72.533l72.533,72.533
    C339.911,308.622,339.911,322.844,331.378,331.378z" />
                </svg>
            </div>
        </div>
        <div class="alert-text box-size">
            <div class="alert--title box-size">Ваша заявка принята в обработку</div>

            <!-- <div class="alert--subtitle box-size"></div> -->
        </div>
        <div class="alert--x alert--close box-size">
            <svg class="box-size" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 284.559 284.559"
                xml:space="preserve">
                <path id="XMLID_90_" d="M4.394,237.739l42.427,42.427c2.812,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.606-4.394
    l74.246-74.246l74.246,74.246c2.813,2.813,6.629,4.394,10.606,4.394c3.978,0,7.794-1.581,10.607-4.394l42.427-42.427
    c5.858-5.858,5.858-15.355,0-21.213L205.92,142.28l74.245-74.247c2.814-2.813,4.394-6.628,4.394-10.606
    c0-3.979-1.58-7.794-4.394-10.607L237.739,4.393c-5.857-5.858-15.356-5.858-21.213,0.001L142.28,78.639L68.033,4.394
    c-5.857-5.858-15.356-5.858-21.213,0L4.394,46.82C1.58,49.633,0,53.448,0,57.426c0,3.978,1.58,7.793,4.394,10.606l74.245,74.247
    L4.394,216.526C-1.465,222.384-1.465,231.881,4.394,237.739z" />
            </svg>
        </div>
    </div>
    <div class="alert--bg alert--close box-size"></div>
</div> 
    
@endif

<div class="modal__wrapper" id="modal--2">
    <div class="modal">
        <div class="modal__close" onclick="closeModal()"> <img src="{{ asset('images/modal-close.svg') }}"
                alt="cancel"></div>
        <div class="modal__body">
            <h2 class="modal__title">Оставьте заявку</h2>
            <p class="modal__descr">Оставьте свои контактные данные и я свяжусь с вами в ближайшее время</p>
            <form action="/sendmail" class="modal__form" method="post">
                @csrf
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="number" placeholder="Номер телефона" required>
                <button class="btn modal__form__btn" type="submit">Отправить
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                        fill="none">
                        <path
                            d="M4.9998 18L28.0011 18.0011M28.0011 18.0011L20.0306 10.0306M28.0011 18.0011L20.0306 25.9716"
                            stroke="#fff" stroke-width="2" />
                    </svg>
                </button>
            </form>
            <p class="modal__policy">Нажимая кнопку «Отправить», вы соглашаетесь с нашей <a href="">Политикой
                    конфиденциальности</a></p>
        </div>
    </div>
</div>
<div class="modal__wrapper modal__wrapper2" id="modal--1">
    <div class="modal">
        <div class="modal__close modal__close2" onclick="closeModal()"> <img src="{{ asset('images/modal-close.svg') }}"
                alt="cancel"></div>
        <div class="modal__body">
            <h2 class="modal__title">свяжитесь со мной</h2>
            <p class="modal__descr">Записаться на консультацию Вы можете, позвонив по телефону 87772987271 ежедневно с
                09:00 часов до 22:00 часов, либо, написав в WhatsApp на этот же номер в любое время суток.</p>
            <a href="tel:" class="btn modal__form__btn" type="submit">Позвонить
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                    fill="none">
                    <path d="M4.9998 18L28.0011 18.0011M28.0011 18.0011L20.0306 10.0306M28.0011 18.0011L20.0306 25.9716"
                        stroke="#fff" stroke-width="2" />
                </svg>
            </a>
            <a href="{{ $contact->whatsapp }}" class="btn btn-transparent modal__form__btn" type="submit">Написать в
                WhatsApp
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32"
                    fill="none">
                    <path d="M4.9998 18L28.0011 18.0011M28.0011 18.0011L20.0306 10.0306M28.0011 18.0011L20.0306 25.9716"
                        stroke="#BA9153" stroke-width="2"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="fixed-contact">
    <img src="images/fixed-contact.svg" alt="">
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__col footer__col__contacts">
                <h2 class="footer__col__title">Контакты</h2>
                <p class="footer__address">{{ $contact->adress }}</p>
                <a href="tel:+77772987271" class="footer__phone">{{ $contact->number }}</a>
                <a href="mailto:moroz_rinat@mail.ru" class="footer__mail">{{ $contact->email }}</a>
                <div class="footer-socials">
                    <a href="https://{{ $contact->instagram }}" target="_blank" class="footer-socials__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <g clip-path="url(#clip0_52_888)">
                                <path
                                    d="M23.9764 7.05607C23.9201 5.78082 23.7139 4.90418 23.4185 4.14447C23.1137 3.33811 22.6449 2.61618 22.0307 2.01602C21.4305 1.40652 20.7038 0.932901 19.9068 0.632936C19.1427 0.337566 18.2706 0.131276 16.9954 0.0751084C15.7106 0.0140652 15.3028 0 12.0443 0C8.78589 0 8.37804 0.0140652 7.09806 0.0703262C5.82286 0.126587 4.94617 0.332971 4.18669 0.628154C3.3801 0.932901 2.65818 1.40174 2.05801 2.01602C1.44852 2.61614 0.975128 3.34284 0.674928 4.13987C0.379558 4.90418 0.173315 5.77613 0.117101 7.05128C0.0561043 8.33605 0.0419922 8.7439 0.0419922 12.0023C0.0419922 15.2608 0.0561043 15.6687 0.112318 16.9486C0.168579 18.2239 0.374963 19.1005 0.670381 19.8602C0.975128 20.6666 1.44852 21.3885 2.05801 21.9887C2.65818 22.5982 3.38488 23.0718 4.18191 23.3718C4.94612 23.6671 5.81807 23.8734 7.09351 23.9296C8.37326 23.986 8.78134 23.9999 12.0398 23.9999C15.2982 23.9999 15.7061 23.986 16.9861 23.9296C18.2613 23.8734 19.138 23.6672 19.8974 23.3718C20.6951 23.0633 21.4195 22.5917 22.0243 21.987C22.629 21.3823 23.1007 20.6579 23.4092 19.8602C23.7044 19.096 23.9108 18.2238 23.967 16.9486C24.0233 15.6687 24.0374 15.2608 24.0374 12.0023C24.0374 8.7439 24.0326 8.336 23.9764 7.05607ZM21.8151 16.8549C21.7635 18.027 21.5666 18.6599 21.4025 19.0819C20.9992 20.1274 20.1694 20.9572 19.1238 21.3605C18.7019 21.5246 18.0644 21.7215 16.8968 21.7729C15.631 21.8294 15.2514 21.8432 12.0491 21.8432C8.84688 21.8432 8.46248 21.8294 7.20116 21.7729C6.02905 21.7215 5.39612 21.5246 4.97416 21.3605C4.45389 21.1682 3.98031 20.8634 3.59586 20.4649C3.19734 20.0758 2.8926 19.607 2.70028 19.0866C2.53618 18.6647 2.33932 18.027 2.28788 16.8596C2.23144 15.5938 2.21756 15.2139 2.21756 12.0117C2.21756 8.80944 2.23144 8.42504 2.28788 7.16395C2.33932 5.99184 2.53618 5.35891 2.70028 4.93695C2.8926 4.41644 3.19734 3.94296 3.60064 3.55841C3.98959 3.1599 4.45843 2.85515 4.97894 2.66307C5.4009 2.49897 6.03862 2.30206 7.20594 2.25044C8.47181 2.19418 8.85167 2.18011 12.0537 2.18011C15.2607 2.18011 15.6403 2.19418 16.9016 2.25044C18.0737 2.30211 18.7067 2.49893 19.1286 2.66302C19.6489 2.85515 20.1225 3.1599 20.5069 3.55841C20.9054 3.9476 21.2102 4.41644 21.4025 4.93695C21.5666 5.35891 21.7635 5.99639 21.8151 7.16395C21.8714 8.42982 21.8854 8.80944 21.8854 12.0117C21.8854 15.2139 21.8714 15.589 21.8151 16.8549Z"
                                    fill="#BA9153" />
                                <path
                                    d="M12.0442 5.83734C8.64048 5.83734 5.87891 8.59873 5.87891 12.0026C5.87891 15.4065 8.64048 18.1679 12.0442 18.1679C15.448 18.1679 18.2094 15.4065 18.2094 12.0026C18.2094 8.59873 15.448 5.83734 12.0442 5.83734ZM12.0442 16.0018C9.83602 16.0018 8.04486 14.2109 8.04486 12.0026C8.04486 9.79427 9.83602 8.00339 12.0441 8.00339C14.2525 8.00339 16.0434 9.79427 16.0434 12.0026C16.0434 14.2109 14.2524 16.0018 12.0442 16.0018ZM19.8927 5.59355C19.8927 6.38842 19.2482 7.03289 18.4531 7.03289C17.6583 7.03289 17.0138 6.38842 17.0138 5.59355C17.0138 4.79858 17.6583 4.1543 18.4532 4.1543C19.2482 4.1543 19.8927 4.79853 19.8927 5.59355Z"
                                    fill="#BA9153" />
                            </g>
                            <defs>
                                <clipPath id="clip0_52_888">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="https://{{ $contact->facebook }}" target="_blank" class="footer-socials__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                            fill="none">
                            <g clip-path="url(#clip0_52_894)">
                                <path
                                    d="M13.8584 24.5V13.5533H17.5313L18.0824 9.28588H13.8584V6.56176C13.8584 5.32664 14.2 4.48492 15.9732 4.48492L18.231 4.48399V0.667076C17.8406 0.616334 16.5002 0.5 14.9403 0.5C11.6827 0.5 9.45258 2.48836 9.45258 6.13912V9.28588H5.76855V13.5533H9.45258V24.5H13.8584Z"
                                    fill="#BA9153" />
                            </g>
                            <defs>
                                <clipPath id="clip0_52_894">
                                    <rect width="24" height="24" fill="white"
                                        transform="translate(0 0.5)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__col__item">
                    <p>Время для связи со мной
                        по телефону:</p>
                    <span>с 09:00 ч до 22:00 ч ежедневно</span>
                </div>
                <div class="footer__col__item">
                    <p>Время для оставления заявок
                        на WhatsApp и на сайте:</p>
                    <span>круглосуточно</span>
                </div>
            </div>
            <div class="footer__col footer__col__actions">
                <a class="modal__btn btn footer__col__btn" data-modal="modal--2" href="#">Оставить заявку
                    <img src="images/arrow-white.svg" alt="">
                </a>
                <p>{{ $contact->licenze }}</p>
            </div>
        </div>
        <div class="footer__copyright">
            <p>Ринат Мороз ©, 2015 - 2023 - Все права защищены</p>
        </div>
    </div>
</footer>
