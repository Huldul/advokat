<section class="page-services services">
    <div class="container">
        <div class="services__inner">
            <div class="services__items">
                @foreach ($services as $service)
                @if ($loop->iteration <= 9)
                <div class="services__item">

                    <div class="services__item__num">
                        0{{$loop->iteration}}
                    </div>
                    <a href="/services">
                        <h3 class="services__item__title" style="white-space: pre-line;">{{$service->title}}</h3>
                    </a>
                    <a href="/services">
                        <p class="services__item__descr" style="white-space: pre-line;">{{$service->subtitle}}</p>
                    </a>
                    <a href="/services-single-2/{{$service->id}}" class="services__item__more">Узнать больше
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                            <path
                                d="M0.499797 8.99995L23.5011 9.00111M23.5011 9.00111L15.5306 1.03062M23.5011 9.00111L15.5306 16.9716"
                                stroke="#BA9153" stroke-width="2" />
                        </svg>
                    </a>
                </div>
                @if ($loop->iteration == 2)
                <div class="services__item services__item__img">
                    <img src="images/services-img-1.jpg" alt="">
                </div>
                @endif
                @if ($loop->iteration == 6)
                <div class="services__item services__item__img">
                    <img src="images/services-img-2.jpg" alt="">
                </div>
                @endif
                @else
                <div class="services__item">
                    <div class="services__item__num">
                        {{$loop->iteration}}
                    </div>
                    <a href="/services">
                        <h3 class="services__item__title" style="white-space: pre-line;">{{$service->title}}</h3>
                    </a>
                    <a href="/services">
                        <p class="services__item__descr" style="white-space: pre-line;">{{$service->subtitle}}</p>
                    </a>
                    <a href="/services-single-2/{{$service->id}}" class="services__item__more">Узнать больше
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                            <path
                                d="M0.499797 8.99995L23.5011 9.00111M23.5011 9.00111L15.5306 1.03062M23.5011 9.00111L15.5306 16.9716"
                                stroke="#BA9153" stroke-width="2" />
                        </svg>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>