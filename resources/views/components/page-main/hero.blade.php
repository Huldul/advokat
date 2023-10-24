<div class="hero">
    <div class="container">
        <div class="hero__inner">
            <h1 class="hero__title">{{$indexPage->title}}</h1>
            <p class="hero__subtitle">{{$indexPage->subtitle}}</p>
            <button class="modal__btn btn hero__btn" data-modal="modal--2">Оставить заявку
                <img src="images/arrow-white.svg" alt="">
            </button>
        </div>
    </div>
    <!-- Slider main container -->
    <div class="hero__slider swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="hero__slide swiper-slide">
                <img src="images/{{$indexPage->image1}}" alt="">
            </div>
            <div class="hero__slide swiper-slide">
                <img src="images/{{$indexPage->image2}}" alt="">
            </div>
            <div class="hero__slide swiper-slide">
                <img src="images/{{$indexPage->image3}}" alt="">
            </div>
        </div>
    </div>
</div>