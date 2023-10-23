<section class="blog">
    <div class="container">
        <div class="blog-items">
            @foreach ($blogs as $blog)
            <article class="blog-item">
                <div class="blog-item__img">
                    <a href="blog-single">
                        <img src="images/blog-img-1.jpg" alt="article-img">
                    </a>
                </div>
                <a href="blog-single">
                    <h2 class="blog-item__title">{{$blog->title}}</h2>
                </a>
                <a href="blog-single/{{$blog->id}}" class="blog-item__more more">Подробнее
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="none">
                        <path
                            d="M0.499922 9.00008L23.5011 9.00111M23.5011 9.00111L15.5307 1.03071M23.5011 9.00111L15.5306 16.9716"
                            stroke="#BA9153" stroke-width="2" />
                    </svg>
                </a>
            </article>
            @endforeach
        </div>
        @if ($blogs->lastPage() > 1)
            <div class="pagination">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($blogs->onFirstPage())
                        <li class="pagination__prev disabled"><a href="#"><img src="images/arrow-white.svg" alt="" style="transform: rotate(180deg)"></a></li>
                    @else
                        <li class="pagination__prev"><a href="{{ $blogs->previousPageUrl() }}"><img src="images/arrow-white.svg" alt="" style="transform: rotate(180deg)"></a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                        @if ($i == $blogs->currentPage())
                            <li class="pagination--active"><a href="">{{ $i }}</a></li>
                        @else
                            <li><a href="{{ $blogs->url($i) }}">{{ $i }}</a></li>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    @if ($blogs->hasMorePages())
                        <li class="pagination__next"><a href="{{ $blogs->nextPageUrl() }}"><img src="images/arrow-white.svg" alt=""></a></li>
                    @else
                        <li class="pagination__next disabled"><a href="#"><img src="images/arrow-white.svg" alt=""></a></li>
                    @endif
                </ul>
            </div>
        @endif
    </div>
</section>