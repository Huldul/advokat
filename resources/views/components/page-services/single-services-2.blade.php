<section class="services-single">
    <div class="container">
        <div class="services__inner">
            <div class="services-single__items">
                @foreach ($subservices as $subservice)
                @if ($loop->iteration <= 9)
                <div class="services-single__item">
                    <div class="services-single__item__info">
                        <div class="services-single__item__num">0{{$loop->iteration}}</div>
                        <h3 class="services-single__item__title">{{$subservice->title}}</h3>
                    </div>
                    <a href="#" class="modal__info__open services-single__more services__item__more" data-modal="modal-{{$subservice->id}}">Подробнее
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                            <path
                                d="M-0.000203335 8.99995L23.0011 9.00111M23.0011 9.00111L15.0306 1.03062M23.0011 9.00111L15.0306 16.9716"
                                stroke="#BA9153" stroke-width="2" />
                        </svg>
                    </a>
                </div>
                @else
                <div class="services-single__item">
                    <div class="services-single__item__info">
                        <div class="services-single__item__num">{{$loop->iteration}}</div>
                        <h3 class="services-single__item__title">{{$subservice->title}}</h3>
                    </div>
                    <a href="#" class="modal__info__open services-single__more services__item__more">Подробнее
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                            <path
                                d="M-0.000203335 8.99995L23.0011 9.00111M23.0011 9.00111L15.0306 1.03062M23.0011 9.00111L15.0306 16.9716"
                                stroke="#BA9153" stroke-width="2" />
                        </svg>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <button class="services-single__items__btn modal__btn btn">Оставить заявку
                <img src="images/arrow-white.svg" alt="">
            </button>
        </div>
    </div>
</section>
@foreach ($subservices as $subservice)
    
<div class="modal__wrapper modal__wrapper3" id="modal-{{$subservice->id}}">
    <div class="modal">
        <div class="modal__close modal__close3" onclick="closeModal()"> <img src="{{asset('images/modal-close.svg')}}" alt="cancel"></div>
        <div class="modal__body">
            <h2 class="modal__title">{{$subservice->title}}</h2>
            <div class="modal__img">
                <img src="{{asset('images/'.$subservice->image)}}" alt="">
            </div>
            <div class="modal__descr">
               {{$subservice->description}}
            </div>
            <button class="btn modal__form__btn modal__btn" data-modal="modal--2">Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                    <path d="M4.9998 18L28.0011 18.0011M28.0011 18.0011L20.0306 10.0306M28.0011 18.0011L20.0306 25.9716"
                        stroke="#fff" stroke-width="2" />
                </svg>
            </button>
        </div>
    </div>
</div>
@endforeach