<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="py-2 pb-md-2">
        <span
            class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
            component</span>
        <h1 class="pt-1">Blog components</h1>
        <p class="text-body-secondary mb-4">Components associated with the blog/news section of the website.</p>
    </section>


    <!-- Info alert -->
    <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
        <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
        <div class="ps-sm-3 pe-sm-5 w-100">
            <p>The <span class="fw-semibold">featured post components</span> integrate the third-party <a
                    class="alert-link" href="https://biati-digital.github.io/glightbox/" target="_blank"
                    rel="noreferrer">Glightbox</a> plugin to enable video popup functionality.</p>
            <p>Ensure that you include the necessary references to the plugin's CSS and JavaScript files.</p>
            <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above
                <code>theme.min.css</code> reference in your document:</p>
            <pre class="code-highlight border mb-3" data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/glightbox/dist/css/glightbox.min.css&quot;&gt;</code></pre>
            <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
                <code>theme.min.js</code> reference in your document:</p>
            <pre class="code-highlight border" data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/glightbox/dist/js/glightbox.min.js&quot;&gt;&lt;/script&gt;</code></pre>
        </div>
    </section>


    <!-- Post preview card: Vertical -->
    <section id="post-card-vertical" class="cd-section pb-sm-2 mb-5">
        <h4>Post preview card: Vertical</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1"
                            role="tab" aria-controls="preview-1" aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1"
                            role="tab" aria-controls="html-1" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="d-flex flex-column flex-sm-row gap-4">
                            <article class="mb-3 mb-sm-2" style="max-width: 416px">
                                <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!"
                                    style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                                    <img src="../assets/img/blog/grid/v1/10.jpg" class="hover-effect-target"
                                        alt="Image">
                                </a>
                                <div class="pt-4">
                                    <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                        <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Gaming</a>
                                        <hr class="vr my-1 mx-1">
                                        <span class="text-body-tertiary fs-xs">July 27, 2024</span>
                                    </div>
                                    <h3 class="h5 mb-0">
                                        <a class="hover-effect-underline" href="#!">Immersive worlds: A dive into
                                            the latest VR gear and experiences</a>
                                    </h3>
                                </div>
                            </article>
                            <article class="mb-2" style="max-width: 416px">
                                <a class="ratio d-flex hover-effect-scale rounded-4 overflow-hidden" href="#!"
                                    style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                    <img src="../assets/img/blog/grid/v2/07.jpg" class="hover-effect-target"
                                        alt="Image">
                                </a>
                                <div class="pt-4">
                                    <div class="nav pb-2 mb-1">
                                        <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Interior
                                            design</a>
                                    </div>
                                    <h3 class="h5 mb-3">
                                        <a class="hover-effect-underline" href="#!">Feng shui your home: Interior
                                            design tips for positive energy</a>
                                    </h3>
                                    <div class="nav align-items-center gap-2 fs-xs">
                                        <a class="nav-link text-body-secondary fs-xs fw-normal p-0" href="#!">Emily
                                            Davies</a>
                                        <hr class="vr my-1 mx-1">
                                        <span class="text-body-secondary">June 27, 2024</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-card-vertical-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-card-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical post preview cards: Grid view --&gt;
&lt;!-- Variant 1 --&gt;
&lt;article&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;a class=&quot;ratio d-flex hover-effect-scale rounded-4 overflow-hidden&quot; href=&quot;#&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
&lt;img src=&quot;assets/img/blog/grid/v1/10.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
&lt;/a&gt;
&lt;div class=&quot;pt-4&quot;&gt;
&lt;div class=&quot;nav align-items-center gap-2 pb-2 mt-n1 mb-1&quot;&gt;
&lt;a class=&quot;nav-link text-body fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Gaming&lt;/a&gt;
&lt;hr class=&quot;vr my-1 mx-1&quot;&gt;
&lt;span class=&quot;text-body-tertiary fs-xs&quot;&gt;July 27, 2024&lt;/span&gt;
&lt;/div&gt;
&lt;h3 class=&quot;h5 mb-0&quot;&gt;
&lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;Immersive worlds: A dive into the latest VR gear and experiences&lt;/a&gt;
&lt;/h3&gt;
&lt;/div&gt;
&lt;/article&gt;

&lt;!-- Variant 2 --&gt;
&lt;article&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;a class=&quot;ratio d-flex hover-effect-scale rounded-4 overflow-hidden&quot; href=&quot;#&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
&lt;img src=&quot;assets/img/blog/grid/v2/07.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
&lt;/a&gt;
&lt;div class=&quot;pt-4&quot;&gt;
&lt;div class=&quot;nav pb-2 mb-1&quot;&gt;
&lt;a class=&quot;nav-link text-body fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Interior design&lt;/a&gt;
&lt;/div&gt;
&lt;h3 class=&quot;h5 mb-3&quot;&gt;
&lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;Feng shui your home: Interior design tips for positive energy&lt;/a&gt;
&lt;/h3&gt;
&lt;div class=&quot;nav align-items-center gap-2 fs-xs&quot;&gt;
&lt;a class=&quot;nav-link text-body-secondary fs-xs fw-normal p-0&quot; href=&quot;#&quot;&gt;Emily Davies&lt;/a&gt;
&lt;hr class=&quot;vr my-1 mx-1&quot;&gt;
&lt;span class=&quot;text-body-secondary&quot;&gt;June 27, 2024&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Post preview card: Horizontal -->
    <section id="post-card-horizontal" class="cd-section pb-sm-2 mb-5">
        <h4>Post preview card: Horizontal</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-2" role="tab" aria-controls="preview-2"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2"
                            role="tab" aria-controls="html-2" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <article class="row align-items-start align-items-md-center gx-0 gy-4">
                            <div class="col-sm-5 pe-sm-4">
                                <a class="ratio d-flex hover-effect-scale rounded overflow-hidden flex-md-shrink-0"
                                    href="#!" style="--cz-aspect-ratio: calc(226 / 306 * 100%)">
                                    <img src="../assets/img/blog/list/07.jpg" class="hover-effect-target"
                                        alt="Image">
                                </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="nav align-items-center gap-2 pb-2 mt-n1 mb-1">
                                    <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Buying
                                        guides</a>
                                    <hr class="vr my-1 mx-1">
                                    <span class="text-body-tertiary fs-xs">August 18, 2024</span>
                                </div>
                                <h3 class="h5 mb-2 mb-md-3">
                                    <a class="hover-effect-underline" href="#!">How to find the best deals and
                                        make secure transactions online</a>
                                </h3>
                                <p class="mb-0">This blog post will guide you through the dual objectives of snagging
                                    great bargains and protecting your financial...</p>
                            </div>
                        </article>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-card-horizontal-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-card-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Horizontal post preview cards: List view --&gt;
&lt;article class=&quot;row align-items-start align-items-md-center gx-0 gy-4&quot;&gt;
&lt;div class=&quot;col-sm-5 pe-sm-4&quot;&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;a class=&quot;ratio d-flex hover-effect-scale rounded overflow-hidden flex-md-shrink-0&quot; href=&quot;#&quot; style=&quot;--cz-aspect-ratio: calc(226 / 306 * 100%)&quot;&gt;
&lt;img src=&quot;assets/img/blog/list/07.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-7&quot;&gt;
&lt;div class=&quot;nav align-items-center gap-2 pb-2 mt-n1 mb-1&quot;&gt;
&lt;a class=&quot;nav-link text-body fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Buying guides&lt;/a&gt;
&lt;hr class=&quot;vr my-1 mx-1&quot;&gt;
&lt;span class=&quot;text-body-tertiary fs-xs&quot;&gt;August 18, 2024&lt;/span&gt;
&lt;/div&gt;
&lt;h3 class=&quot;h5 mb-2 mb-md-3&quot;&gt;
&lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;How to find the best deals and make secure transactions online&lt;/a&gt;
&lt;/h3&gt;
&lt;p class=&quot;mb-0&quot;&gt;This blog post will guide you through the dual objectives of snagging great bargains and protecting your financial...&lt;/p&gt;
&lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vlog card -->
    <section id="post-vlog" class="cd-section pb-sm-2 mb-5">
        <h4>Vlog card</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-3" role="tab" aria-controls="preview-3"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3"
                            role="tab" aria-controls="html-3" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <article class="hover-effect-scale position-relative mb-2" style="max-width: 306px">
                            <div class="ratio rounded overflow-hidden"
                                style="--cz-aspect-ratio: calc(200 / 306 * 100%)">
                                <div
                                    class="btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none">
                                    <i class="ci-play fs-base"></i>
                                </div>
                                <img src="../assets/img/blog/grid/v1/video01.jpg" class="hover-effect-target"
                                    alt="Image">
                            </div>
                            <div class="pt-3 mt-1">
                                <div class="text-body-tertiary fs-xs mb-2">06:12</div>
                                <h3 class="h6 mb-0">
                                    <a class="hover-effect-underline stretched-link" href="#!">A comprehensive
                                        review of the latest kitchen blenders on the market</a>
                                </h3>
                            </div>
                        </article>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-vlog-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-vlog-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Video blog (Vlog) post preview card --&gt;
&lt;article class=&quot;hover-effect-scale position-relative mb-2&quot; style=&quot;max-width: 306px&quot;&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;div class=&quot;ratio rounded overflow-hidden&quot; style=&quot;--cz-aspect-ratio: calc(200 / 306 * 100%)&quot;&gt;
&lt;div class=&quot;btn btn-icon btn-light position-absolute top-50 start-50 translate-middle z-2 rounded-circle pe-none&quot;&gt;
&lt;i class=&quot;ci-play fs-base&quot;&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;img src=&quot;assets/img/blog/grid/v1/video01.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;pt-3 mt-1&quot;&gt;
&lt;div class=&quot;text-body-tertiary fs-xs mb-2&quot;&gt;06:12&lt;/div&gt;
&lt;h3 class=&quot;h6 mb-0&quot;&gt;
&lt;a class=&quot;hover-effect-underline stretched-link&quot; href=&quot;#&quot;&gt;A comprehensive review of the latest kitchen blenders on the market&lt;/a&gt;
&lt;/h3&gt;
&lt;/div&gt;
&lt;/article&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Featured post: Style 1 -->
    <section id="post-featured-1" class="cd-section pb-sm-2 mb-5">
        <h4>Featured post: Style 1</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-4" role="tab" aria-controls="preview-4"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4"
                            role="tab" aria-controls="html-4" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5">
                            <div class="col position-relative">
                                <div class="ratio ratio-4x3"></div>
                                <img src="../assets/img/blog/grid/v2/video01.jpg"
                                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                    alt="Image">
                                <div
                                    class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
                                    <a class="btn btn-lg btn-light rounded-pill m-md-2"
                                        href="https://www.youtube.com/watch?v=X7lCwxswYnE" data-glightbox
                                        data-gallery="video1">
                                        <i class="ci-play fs-lg ms-n1 me-2"></i>
                                        Play
                                    </a>
                                </div>
                            </div>
                            <div class="col bg-dark py-5 px-4 px-xl-5" data-bs-theme="dark">
                                <div class="py-md-2 py-xl-4 px-md-3 px-xl-4">
                                    <div class="nav mb-3">
                                        <a class="nav-link text-body fs-xs text-uppercase p-0" href="#!">Home
                                            decoration</a>
                                    </div>
                                    <h2>Decorate your home in easy steps</h2>
                                    <p class="text-body pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Decorating your home can be a fun
                                        and creative process that transforms your living space.</p>
                                    <a class="btn btn-lg btn-outline-light rounded-pill" href="#!">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-featured-1-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-featured-1-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Featured post with video popup --&gt;
&lt;div class=&quot;row row-cols-1 row-cols-md-2 g-0 overflow-hidden rounded-5&quot;&gt;

&lt;!-- Video --&gt;
&lt;div class=&quot;col position-relative&quot;&gt;
&lt;!-- Add the &quot;ratio&quot; element to avoid content shifts on page load --&gt;
&lt;div class=&quot;ratio ratio-4x3&quot;&gt;&lt;/div&gt;
&lt;img src=&quot;assets/img/blog/grid/v2/video01.jpg&quot; class=&quot;position-absolute top-0 start-0 w-100 h-100 object-fit-cover&quot; alt=&quot;Image&quot;&gt;
&lt;div class=&quot;position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4&quot;&gt;
&lt;a class=&quot;btn btn-lg btn-light rounded-pill m-md-2&quot; href=&quot;https://www.youtube.com/watch?v=X7lCwxswYnE&quot; data-glightbox data-gallery=&quot;video&quot;&gt;
&lt;i class=&quot;ci-play fs-lg ms-n1 me-2&quot;&gt;&lt;/i&gt;
Play
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Title + text --&gt;
&lt;div class=&quot;col bg-dark py-5 px-4 px-xl-5&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;py-md-2 py-xl-4 px-md-3 px-xl-4&quot;&gt;
&lt;div class=&quot;nav mb-3&quot;&gt;
&lt;a class=&quot;nav-link text-body fs-xs text-uppercase p-0&quot; href=&quot;#&quot;&gt;Home decoration&lt;/a&gt;
&lt;/div&gt;
&lt;h2&gt;Decorate your home in easy steps&lt;/h2&gt;
&lt;p class=&quot;text-body pb-sm-2 pb-lg-0 mb-4 mb-lg-5&quot;&gt;Decorating your home can be a fun and creative process that transforms your living space.&lt;/p&gt;
&lt;a class=&quot;btn btn-lg btn-outline-light rounded-pill&quot; href=&quot;#&quot;&gt;Learn more&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Featured post: Style 2 -->
    <section id="post-featured-2" class="cd-section pb-sm-2 mb-5">
        <h4>Featured post: Style 2</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-5" role="tab" aria-controls="preview-5"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5"
                            role="tab" aria-controls="html-5" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="position-relative h-100">
                                    <div class="ratio ratio-16x9"></div>
                                    <img src="../assets/img/about/v1/video-cover.jpg"
                                        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5"
                                        alt="Image">
                                    <div
                                        class="position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4">
                                        <a class="btn btn-lg btn-light rounded-pill m-md-2"
                                            href="https://www.youtube.com/watch?v=Sqqj_14wBxU" data-glightbox
                                            data-gallery="video2">
                                            <i class="ci-play fs-lg ms-n1 me-2"></i>
                                            Play
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="bg-body-tertiary rounded-5 py-5 px-4 px-sm-5">
                                    <div class="p-xxl-2">
                                        <h2 class="h3 pb-sm-1 pb-lg-2">The role of philanthropy in building a better
                                            world</h2>
                                        <p class="pb-sm-2 pb-lg-0 mb-4 mb-lg-5">Charitable contributions are a vital
                                            aspect of building a better world. These contributions come in various
                                            forms...</p>
                                        <a class="btn btn-lg btn-outline-dark" href="#!">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-featured-2-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-featured-2-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Featured post with video popup --&gt;
&lt;div class=&quot;row row-cols-1 row-cols-md-2 g-4&quot;&gt;
&lt;div class=&quot;col&quot;&gt;
&lt;div class=&quot;position-relative h-100&quot;&gt;
&lt;!-- Add the &quot;ratio&quot; element to avoid content shifts on page load --&gt;
&lt;div class=&quot;ratio ratio-16x9&quot;&gt;&lt;/div&gt;
&lt;img src=&quot;assets/img/about/v1/video-cover.jpg&quot; class=&quot;position-absolute top-0 start-0 w-100 h-100 object-fit-cover rounded-5&quot; alt=&quot;Image&quot;&gt;
&lt;div class=&quot;position-absolute start-0 bottom-0 d-flex align-items-end w-100 h-100 z-2 p-4&quot;&gt;
&lt;a class=&quot;btn btn-lg btn-light rounded-pill m-md-2&quot; href=&quot;https://www.youtube.com/watch?v=Sqqj_14wBxU&quot; data-glightbox data-gallery=&quot;video&quot;&gt;
  &lt;i class=&quot;ci-play fs-lg ms-n1 me-2&quot;&gt;&lt;/i&gt;
  Play
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col&quot;&gt;
&lt;div class=&quot;bg-body-tertiary rounded-5 py-5 px-4 px-sm-5&quot;&gt;
&lt;div class=&quot;py-md-3 py-lg-4 py-xl-5 px-lg-4 px-xl-5&quot;&gt;
&lt;h2 class=&quot;h3 pb-sm-1 pb-lg-2&quot;&gt;The role of philanthropy in building a better world&lt;/h2&gt;
&lt;p class=&quot;pb-sm-2 pb-lg-0 mb-4 mb-lg-5&quot;&gt;Charitable contributions are a vital aspect of building a better world. These contributions come in various forms, including monetary donations...&lt;/p&gt;
&lt;a class=&quot;btn btn-lg btn-outline-dark&quot; href=&quot;#&quot;&gt;Learn more&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Post navigation -->
    <section id="post-navigation" class="cd-section">
        <h4>Post navigation</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-6" role="tab" aria-controls="preview-6"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6"
                            role="tab" aria-controls="html-6" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="border-top">
                            <div class="nav flex-nowrap align-items-center justify-content-between gap-4 pt-3">
                                <a class="nav-link flex-wrap flex-sm-nowrap justify-content-center position-relative w-50 p-0"
                                    href="#!" style="max-width: 330px">
                                    <div class="d-flex align-items-center mb-2 mb-sm-0">
                                        <i class="ci-chevron-left fs-xl ms-n3 ms-sm-n1 me-2"></i>
                                        <div class="ratio flex-shrink-0"
                                            style="width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                            <img src="../assets/img/blog/post/nav01.jpg" class="rounded-2"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div
                                        class="h6 fs-sm hover-effect-underline stretched-link text-center text-sm-start mb-0 ps-3">
                                        How modern technology builds communities</div>
                                </a>
                                <a class="nav-link flex-wrap flex-sm-nowrap justify-content-center position-relative w-50 p-0"
                                    href="#!" style="max-width: 330px">
                                    <div class="d-flex align-items-center order-sm-2 mb-2 mb-sm-0">
                                        <div class="ratio flex-shrink-0"
                                            style="width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)">
                                            <img src="../assets/img/blog/post/nav02.jpg" class="rounded-2"
                                                alt="Image">
                                        </div>
                                        <i class="ci-chevron-right fs-xl me-n3 me-sm-n1 ms-2"></i>
                                    </div>
                                    <div
                                        class="h6 fs-sm hover-effect-underline stretched-link text-center text-sm-end order-sm-1 mb-0 pe-3">
                                        Transform your home into a smart hub with the latest IoT</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#post-navigation-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="post-navigation-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Post navigation --&gt;
&lt;div class=&quot;border-top&quot;&gt;

&lt;!-- Previous post --&gt;
&lt;div class=&quot;nav flex-nowrap align-items-center justify-content-between gap-4 pt-3&quot;&gt;
&lt;a class=&quot;nav-link flex-wrap flex-sm-nowrap justify-content-center position-relative w-50 p-0&quot; href=&quot;#&quot; style=&quot;max-width: 330px&quot;&gt;
&lt;div class=&quot;d-flex align-items-center mb-2 mb-sm-0&quot;&gt;
&lt;i class=&quot;ci-chevron-left fs-xl ms-n3 ms-sm-n1 me-2&quot;&gt;&lt;/i&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;div class=&quot;ratio flex-shrink-0&quot; style=&quot;width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)&quot;&gt;
  &lt;img src=&quot;assets/img/blog/post/nav01.jpg&quot; class=&quot;rounded-2&quot; alt=&quot;Image&quot;&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;h6 fs-sm hover-effect-underline stretched-link text-center text-sm-start mb-0 ps-3&quot;&gt;How modern technology builds communities&lt;/div&gt;
&lt;/a&gt;

&lt;!-- Next post --&gt;
&lt;a class=&quot;nav-link flex-wrap flex-sm-nowrap justify-content-center position-relative w-50 p-0&quot; href=&quot;#&quot; style=&quot;max-width: 330px&quot;&gt;
&lt;div class=&quot;d-flex align-items-center order-sm-2 mb-2 mb-sm-0&quot;&gt;
&lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;div class=&quot;ratio flex-shrink-0&quot; style=&quot;width: 86px; --cz-aspect-ratio: calc(64 / 86 * 100%)&quot;&gt;
  &lt;img src=&quot;assets/img/blog/post/nav02.jpg&quot; class=&quot;rounded-2&quot; alt=&quot;Image&quot;&gt;
&lt;/div&gt;
&lt;i class=&quot;ci-chevron-right fs-xl me-n3 me-sm-n1 ms-2&quot;&gt;&lt;/i&gt;
&lt;/div&gt;
&lt;div class=&quot;h6 fs-sm hover-effect-underline stretched-link text-center text-sm-end order-sm-1 mb-0 pe-3&quot;&gt;Transform your home into a smart hub with the latest IoT&lt;/div&gt;
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
