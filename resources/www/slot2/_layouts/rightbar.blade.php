<button class="btn btn-link p-md-0 mb-2 mb-md-0 text-decoration-none bd-toc-toggle d-md-none"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#tocContents"
    aria-expanded="false"
    aria-controls="tocContents">

    서브목차
    <svg class="bi d-md-none ms-2" aria-hidden="true">
        <use xlink:href="#chevron-expand"></use>
    </svg>
</button>


<strong class="d-none d-md-block h6 mb-2">
    Page Bookmark
</strong>

<hr class="d-none d-md-block mb-2">

<div class="collapse bd-toc-collapse" id="tocContents">
    <nav id="TableOfContents">
        {{$slot}}
    </nav>
</div>
