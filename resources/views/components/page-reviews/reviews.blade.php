<section class="reviews">
    <div class="container">
        <div class="card__items reviews__items">
            @foreach ($rewiews as $rewiew)
            <div class="card__item reviews__item">
                <h2 class="card__item__title reviews__item__title">{{$rewiew->author}}</h2>
                <p class="card__item__descr reviews__item__descr">{{$rewiew->subtitle}}</p>
                <a href="#" class="modal__info__open more reviews__item__more" data-modal="modal-{{$rewiew->id}}">Читать полностью
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                        <path
                            d="M0.499797 8.99995L23.5011 9.00111M23.5011 9.00111L15.5306 1.03062M23.5011 9.00111L15.5306 16.9716"
                            stroke="#BA9153" stroke-width="2" />
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
        @if ($rewiews->lastPage() > 1)
            <div class="pagination">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($rewiews->onFirstPage())
                        <li class="pagination__prev disabled"><a href="#"><img src="images/arrow-white.svg" alt="" style="transform: rotate(180deg)"></a></li>
                    @else
                        <li class="pagination__prev"><a href="{{ $rewiews->previousPageUrl() }}"><img src="images/arrow-white.svg" alt="" style="transform: rotate(180deg)"></a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @for ($i = 1; $i <= $rewiews->lastPage(); $i++)
                        @if ($i == $rewiews->currentPage())
                            <li class="pagination--active"><a href="">{{ $i }}</a></li>
                        @else
                            <li><a href="{{ $rewiews->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    @if ($rewiews->hasMorePages())
                        <li class="pagination__next"><a href="{{ $rewiews->nextPageUrl() }}"><img src="images/arrow-white.svg" alt=""></a></li>
                    @else
                        <li class="pagination__next disabled"><a href="#"><img src="images/arrow-white.svg" alt=""></a></li>
                    @endif
                </ul>
            </div>
        @endif
    </div>
</section>
@foreach ($rewiews as $practick)
    
<div class="modal__wrapper modal__wrapper3" id="modal-{{$practick->id}}">
    <div class="modal">
        <div class="modal__close modal__close3" onclick="closeModal()"> <img src="images/modal-close.svg" alt="cancel"></div>
        <div class="modal__body">
            <h2 class="modal__title">{{$practick->title}}</h2>
            <div class="modal__img">
                <img src="{{asset('images/'.$practick->image)}}" alt="">
            </div>
            <div class="modal__descr">
               {{$practick->main}}
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