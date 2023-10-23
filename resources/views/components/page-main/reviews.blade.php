<section style="background-image: url(images/reviews-img.jpg)" class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <div class="reviews__header">
                <h2 class="reviews__title title">Отзывы клиентов</h2>
                <a href="" class="btn reviews__btn">Ещё отзывы
                    <img src="images/arrow-white.svg" alt="">
                </a>
            </div>
            @foreach ($rewiews as $rewiew)
            <div class="reviews__items">
                <div class="reviews__item">
                    <h3 class="reviews__item__title">
                        {{$rewiew->author}}
                    </h3>
                    <p class="reviews__item__descr">
                        {{$rewiew->subtitle}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>