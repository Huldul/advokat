
<section class="advantages">
    <div class="container">
        <div class="advantages__inner">
            <h2 class="title title-mb-60 advantages__title">МОИ ПРЕИМУЩЕСТВА</h2>
            <div class="advantages__items">
                @foreach ($advantages as $advantage)
                @if ($advantage->id == 2)
                <div class="advantages__item advantages__item__img">
                    <img src="images/advantages-img.jpg" alt="">
                </div>
                @endif
                <div class="advantages__item">
                    <div class="advantages__item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                            <g clip-path="url(#clip0_402_1468)">
                                <path
                                    d="M32.0003 8.15918C31.3731 8.63596 22.7727 15.0346 11.7428 17.2431C10.2887 42.6958 31.9865 55.8733 32.0003 55.8657C32.0141 55.8733 53.712 42.6959 52.2579 17.2425C41.2274 15.0346 32.0003 8.15918 32.0003 8.15918Z"
                                    fill="#BA9153" />
                                <path
                                    d="M59.4297 13.1419C59.4081 12.7659 59.2624 12.4077 59.0155 12.1234C58.7686 11.8391 58.4344 11.6447 58.0652 11.5707C44.6146 8.87839 33.1305 0.421328 33.0173 0.336897C32.7214 0.116326 32.3617 -0.00192298 31.9926 2.36545e-05C31.6236 0.00197028 31.2652 0.124007 30.9716 0.347687C30.5187 0.692152 19.7253 8.81163 5.9364 11.5715C5.56709 11.6455 5.23273 11.8399 4.98572 12.1242C4.7387 12.4085 4.59297 12.7668 4.57135 13.1428C3.46647 32.484 12.5411 46.3975 20.3488 54.6627C23.2788 57.7655 26.0281 60.059 27.8188 61.4362C28.8462 62.2259 29.6759 62.806 30.1906 63.1535C31.1518 63.8036 31.4284 63.9897 31.9588 63.9993C31.9809 64.0001 32.0026 64.0001 32.0236 64.0001C32.5469 64.0001 32.8627 63.789 33.6953 63.2311C34.1461 62.9284 34.8765 62.4245 35.7863 61.7361C37.3715 60.5396 39.8224 58.5476 42.5002 55.8516C47.531 50.7873 51.5362 45.1481 54.4027 39.0918C58.2571 30.9507 59.9485 22.22 59.4297 13.1419ZM44.53 48.4705C39.365 54.9472 34.0272 58.8926 32.0007 60.2706C29.9747 58.8926 24.6368 54.948 19.4698 48.4674C11.3874 38.3298 7.50133 26.9515 7.90946 14.6287C19.5514 11.9995 28.9686 5.9178 32.0096 3.7918C35.0916 5.9147 44.6711 12.0363 56.0917 14.6278C56.5 26.9522 52.6141 38.3322 44.53 48.4705Z"
                                    fill="#BA9153" />
                            </g>
                            <defs>
                                <clipPath id="clip0_402_1468">
                                    <rect width="64" height="64" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <p class="advantages__item__descr" style="white-space: pre-line;">{{$advantage->subtitle}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>