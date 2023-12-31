<section class="certificates">
    <div class="container">
        <div class="certificates__inner">
            <!-- Slider main container -->
            <div class="swiper certificates__slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($sertificates as $sertificate)
                    <div class="certificates__item swiper-slide"><img src="images/{{$sertificate->image}}" alt=""></div>
                    @endforeach
                </div>
                <!-- If we need pagination -->

                <!-- If we need navigation buttons -->

                <div class="about-pagination swiper-pagination"></div>
            </div>
            <div class="certificates__slider__btns">
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">
                        <path
                            d="M27.0005 10.2722L1.54339 10.2709M1.54339 10.2709L10.3649 19.0924M1.54339 10.2709L10.3649 1.44945"
                            stroke="white" stroke-width="1.5" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="none">
                        <path
                            d="M-0.000521084 9.72778L25.4566 9.72907M25.4566 9.72907L16.6351 0.907582M25.4566 9.72907L16.6351 18.5506"
                            stroke="white" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>