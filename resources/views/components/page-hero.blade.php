    <section style="background-image: url({{$background}});" class="page-hero">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li>
                    <a href="/">
                        Главная
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 6L15 12L9 18" stroke="#BA9153" stroke-width="2" />
                    </svg>
                </li>
                <li>
                    <a class="this-element" href="#">
                        {{$breadcrumbs}}
                    </a>
                </li>
            </ul>
        </div>
        <h1 class="page-hero__title">
            {{$title}}
        </h1>
    </div>
</section>