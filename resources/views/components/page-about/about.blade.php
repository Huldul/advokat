<section class="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__info">
                <h2 class="about__title title title-mb-40" style="white-space: pre-line;">
                    {!!$aboutPage->title!!}
                </h2>
                <div class="about__descr">
                    {{-- @dd($aboutPage->subtitle) --}}
                    <p style="white-space: pre-line;">{!!$aboutPage->subtitle!!}</p>
                    <blockquote style="white-space: pre-line;">
                        {!!$aboutPage->subtitle2!!}
                    </blockquote>
                </div>
                <button href="" class="modal__btn btn about__btn" data-modal="modal--2">Оставить заявку
                    <img src="images/arrow-white.svg" alt="">
                </button>
            </div>
            <!-- Slider main container -->
            <div class="swiper about__images">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="images/{{$aboutPage->image1}}" alt=""></div>
                    <div class="swiper-slide"><img src="images/{{$aboutPage->image2}}" alt=""></div>
                    <div class="swiper-slide"><img src="images/{{$aboutPage->image1}}" alt=""></div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="about-pagination swiper-pagination"></div>

            </div>
        </div>
    </div>
</section>