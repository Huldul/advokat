<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="/" class="header__logo">
                <h2>Ринат Мороз</h2>
                <span>адвокат по уголовным делам</span>
            </a>
            <nav class="header__nav">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">О себе</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/practics">Из моей практики</a></li>
                    <li><a href="/reviews">Отзывы</a></li>
                    <li><a href="/blog">Блог</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </nav>
            <nav class="header__nav__mobile">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about">О себе</a></li>
                    <li><a href="/services">Услуги</a></li>
                    <li><a href="/practics">Из моей практики</a></li>
                    <li><a href="/reviews">Отзывы</a></li>
                    <li><a href="/blog">Блог</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
                <div class="header-actions__contacts">
                    <a href="tel:{{$contact->number}}">{{$contact->number}}</a>
                    <span>{{$contact->shortadress}}</span>
                </div>
            </nav>
            <div class="header-actions">
                <div class="header-actions__socials">
                    <a class="header-actions__socials__item" href="https://{{$contact->instagram}}">
                        <img src="{{asset('images/inst-icon.svg')}}" alt="">
                    </a>
                    <a class="header-actions__socials__item" href="https://{{$contact->facebook}}">
                        <img src="{{asset('images/facebook-icon.svg')}}" alt="">
                    </a>
                </div>
                <div class="header-actions__contacts">
                    <a href="tel:{{$contact->number}}">{{$contact->number}}</a>
                    <span>{{$contact->shortadress}}</span>
                </div>
            </div>
            <div class="header-burger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>