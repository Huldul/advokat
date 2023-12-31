<section class="principles">
    <div class="container">
        <div class="principles__inner">
            <div class="principles__info">
                <h2 class="title title-mb-60">Мои принципы</h2>
                <div class="principles__items">
                    @foreach ($principes as $principe)
                    <div class="principles__item">
                        <div class="principles__item__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20 40C31.0457 40 40 31.0457 40 20C40 16.9214 39.3044 14.0052 38.0618 11.4001L21.0887 28.0926L19.6863 29.4718L18.2839 28.0926L7.93095 17.9108L10.7357 15.0589L19.6863 23.8615L35.9217 7.89448C32.2683 3.09676 26.4958 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z"
                                    fill="#BA9153" />
                            </svg>
                        </div>
                        <div class="principles__item__descr">
                            <p style="white-space: pre-line;">{{$principe->subtitle}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="principles__img">
                <img src="images/{{$indexPage->image5}}" alt="">
            </div>
        </div>
    </div>
</section>