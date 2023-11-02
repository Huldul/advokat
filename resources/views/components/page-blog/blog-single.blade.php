<section class="blog-single">
    <div class="container">
        <div class="blog-single__inner">
            <div class="blog-single__info">
                <p style="white-space: pre-line;">{{$blog->main}}</p>
            </div>
            <div class="blog-single__sidebar">
                <div class="blog-single__img">
                    <img src="{{asset('images/'.$blog->image)}}" alt="">
                </div>
                <aside class="blog-single__socials">
                    <h2 class="blog-single__socials__title">Поделитесь интересной статьей в соц сетях</h2>
                    <p class="blog-single__socials__descr">Чтобы поделиться с друзьями интересными сведениями, выберетие
                        нужную социальную сеть ниже.</p>
                    <div class="blog-single__socials__items">
                        <a href="https://{{$contact->instagram}}" target="_blank" class="blog-single__socials__item">
                            <img src="{{asset('images/inst-social-icon.svg')}}" alt="">
                        </a>
                        <a href="https://{{$contact->facebook}}" target="_blank" class="blog-single__socials__item">
                            <img src="{{asset('images/facebook-social-icon.svg')}}" alt="">
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>