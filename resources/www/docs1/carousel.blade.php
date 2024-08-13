<x-www-app><x-www-layout>

    <!-- Page title -->
    <section class="pt-2 pb-md-2">
        <span
            class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
            component</span>
        <h1 class="pt-1">Carousel (Slider)</h1>
        <p class="text-body-secondary mb-4">A slideshow component for cycling through elements (images or slides with
            various content) like a carousel.</p>
    </section>


    <!-- Info alert -->
    <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
        <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
        <div class="ps-sm-3 pe-sm-5 w-100">
            <p>The Carousel component relies on the <a class="alert-link" href="https://swiperjs.com/" target="_blank"
                    rel="noreferrer">Swiper</a> plugin. To use a carousel, make sure to include the required reference
                to the plugin's .css and .js files.</p>
            <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above
                <code>theme.min.css</code> reference in your document:</p>
            <pre class="code-highlight border mb-3" data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/swiper/swiper-bundle.min.css&quot;&gt;</code></pre>
            <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
                <code>theme.min.js</code> reference in your document:</p>
            <pre class="code-highlight border" data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/swiper/swiper-bundle.min.js&quot;&gt;&lt;/script&gt;</code></pre>
            <p class="pt-3 pb-2 mt-2">You can apply virtually any slider option by specifying it within the
                <code>data-swiper="{}"</code> attribute in JSON format.</p>
            <div class="h6">Usefull links:</div>
            <ul class="list-unstyled d-inline-block mb-0">
                <li class="mb-2">
                    <a class="d-flex alert-link fw-medium text-decoration-none" href="https://swiperjs.com/demos"
                        target="_blank" rel="noopener">
                        <i class="ci-external-link mt-1 me-2"></i>
                        Swiper slider demos with code examples
                    </a>
                </li>
                <li class="mb-2">
                    <a class="d-flex alert-link fw-medium text-decoration-none" href="https://swiperjs.com/swiper-api"
                        target="_blank" rel="noopener">
                        <i class="ci-external-link mt-1 me-2"></i>
                        Swiper slider API: options, methods and events
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <!-- Navigation (Prev / next buttons) -->
    <section id="carousel-navigation" class="cd-section pb-sm-2 mb-5">
        <h4>Navigation (Prev / next buttons)</h4>
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
                        <div class="d-flex flex-wrap align-items-center gap-4">
                            <div class="d-flex gap-2">
                                <button type="button"
                                    class="btn btn-icon btn-lg btn-outline-secondary animate-slide-start rounded-circle me-1"
                                    aria-label="Prev">
                                    <i class="ci-chevron-left fs-xl animate-target"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-icon btn-lg btn-outline-secondary animate-slide-end rounded-circle"
                                    aria-label="Next">
                                    <i class="ci-chevron-right fs-xl animate-target"></i>
                                </button>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="button"
                                    class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1"
                                    aria-label="Prev">
                                    <i class="ci-chevron-left fs-lg animate-target"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle"
                                    aria-label="Next">
                                    <i class="ci-chevron-right fs-lg animate-target"></i>
                                </button>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="button"
                                    class="btn btn-icon btn-sm btn-outline-secondary animate-slide-start rounded-circle me-1"
                                    aria-label="Prev">
                                    <i class="ci-chevron-left fs-base animate-target"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-icon btn-sm btn-outline-secondary animate-slide-end rounded-circle"
                                    aria-label="Next">
                                    <i class="ci-chevron-right fs-base animate-target"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-navigation-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-navigation-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- You can use any available button style as Carousel controls --&gt;

&lt;!-- Large prev/next buttons --&gt;
&lt;div class=&quot;d-flex gap-2&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-outline-secondary animate-slide-start rounded-circle me-1&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ci-chevron-left fs-xl animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg btn-outline-secondary animate-slide-end rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ci-chevron-right fs-xl animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Normal prev/next buttons --&gt;
&lt;div class=&quot;d-flex gap-2&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-secondary animate-slide-end rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Small prev/next buttons --&gt;
&lt;div class=&quot;d-flex gap-2&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary animate-slide-start rounded-circle me-1&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ci-chevron-left fs-base animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary animate-slide-end rounded-circle&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ci-chevron-right fs-base animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pagination -->
    <section id="carousel-pagination" class="cd-section pb-sm-2 mb-5">
        <h4>Pagination</h4>
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
                        <div class="row row-cols-md-2 row-cols-xl-2 g-4">
                            <div class="col">
                                <div class="swiper hover-effect-opacity"
                                    data-swiper='{
                          "spaceBetween": 20,
                          "loop": true,
                          "pagination": {
                            "el": ".swiper-pagination",
                            "clickable": true
                          },
                          "navigation": {
                            "prevEl": ".btn-prev",
                            "nextEl": ".btn-next"
                          }
                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    1</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    2</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start"
                                            aria-label="Prev">
                                            <i class="ci-chevron-left fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div
                                        class="position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                                            aria-label="Next">
                                            <i class="ci-chevron-right fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="swiper hover-effect-opacity"
                                    data-swiper='{
                          "spaceBetween": 20,
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "progressbar"
                          },
                          "navigation": {
                            "prevEl": ".btn-prev",
                            "nextEl": ".btn-next"
                          }
                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    1</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    2</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start"
                                            aria-label="Prev">
                                            <i class="ci-chevron-left fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div
                                        class="position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                                            aria-label="Next">
                                            <i class="ci-chevron-right fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="swiper hover-effect-opacity"
                                    data-swiper='{
                          "spaceBetween": 20,
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "fraction"
                          },
                          "navigation": {
                            "prevEl": ".btn-prev",
                            "nextEl": ".btn-next"
                          }
                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    1</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    2</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-16x9 bg-body-tertiary">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                    3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start"
                                            aria-label="Prev">
                                            <i class="ci-chevron-left fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div
                                        class="position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0">
                                        <button type="button"
                                            class="btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end"
                                            aria-label="Next">
                                            <i class="ci-chevron-right fs-lg animate-target"></i>
                                        </button>
                                    </div>
                                    <div
                                        class="swiper-pagination text-body-secondary fs-6 opacity-50 fw-semibold mb-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ratio ratio-16x9">
                                    <div class="swiper"
                                        data-swiper='{
                            "direction": "vertical",
                            "mousewheel": true,
                            "spaceBetween": 20,
                            "scrollbar": {
                              "el": ".swiper-scrollbar"
                            }
                          }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="ratio ratio-16x9 bg-body-tertiary">
                                                    <div
                                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                        1</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="ratio ratio-16x9 bg-body-tertiary">
                                                    <div
                                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                        2</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="ratio ratio-16x9 bg-body-tertiary">
                                                    <div
                                                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                        3</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-pagination-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-pagination-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pagination: Bullets --&gt;
&lt;div class=&quot;swiper hover-effect-opacity&quot; data-swiper='{
  &quot;spaceBetween&quot;: 20,
  &quot;loop&quot;: true,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;clickable&quot;: true
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start&quot; aria-label=&quot;Prev&quot;&gt;
      &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Next button --&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end&quot; aria-label=&quot;Next&quot;&gt;
      &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Bullets --&gt;
  &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Progress bar --&gt;
&lt;div class=&quot;swiper hover-effect-opacity&quot; data-swiper='{
  &quot;spaceBetween&quot;: 20,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;type&quot;: &quot;progressbar&quot;
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start&quot; aria-label=&quot;Prev&quot;&gt;
      &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Next button --&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end&quot; aria-label=&quot;Next&quot;&gt;
      &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Progress bar --&gt;
  &lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Fraction --&gt;
&lt;div class=&quot;swiper hover-effect-opacity&quot; data-swiper='{
  &quot;spaceBetween&quot;: 20,
  &quot;pagination&quot;: {
    &quot;el&quot;: &quot;.swiper-pagination&quot;,
    &quot;type&quot;: &quot;fraction&quot;
  },
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 z-2 translate-middle-y ms-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-outline-secondary rounded-circle animate-slide-start&quot; aria-label=&quot;Prev&quot;&gt;
      &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Next button --&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 z-2 translate-middle-y me-3 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-outline-secondary rounded-circle animate-slide-end&quot; aria-label=&quot;Next&quot;&gt;
      &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Fraction --&gt;
  &lt;div class=&quot;swiper-pagination text-body-secondary fs-6 opacity-50 fw-semibold mb-2&quot;&gt;&lt;/div&gt;
&lt;/div&gt;


&lt;!-- Pagination: Scrollbar --&gt;
&lt;div class=&quot;swiper&quot; data-swiper='{
  &quot;direction&quot;: &quot;vertical&quot;,
  &quot;mousewheel&quot;: true,
  &quot;spaceBetween&quot;: 20,
  &quot;scrollbar&quot;: {
    &quot;el&quot;: &quot;.swiper-scrollbar&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Scrollbar --&gt;
  &lt;div class=&quot;swiper-scrollbar&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Multiple slides per view (Responsive) -->
    <section id="carousel-multiple-slides" class="cd-section pb-sm-2 mb-5">
        <h4>Multiple slides per view (Responsive)</h4>
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
                        <div class="position-relative px-5">
                            <button type="button" id="prev"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-start position-absolute top-50 start-0 translate-middle-y mt-n3"
                                aria-label="Prev">
                                <i class="ci-chevron-left fs-lg animate-target"></i>
                            </button>
                            <button type="button" id="next"
                                class="btn btn-icon btn-outline-secondary rounded-circle animate-slide-end position-absolute top-50 end-0 translate-middle-y mt-n3"
                                aria-label="Next">
                                <i class="ci-chevron-right fs-lg animate-target"></i>
                            </button>
                            <div class="swiper px-2"
                                data-swiper='{
                        "slidesPerView": 1,
                        "spaceBetween": 16,
                        "loop": true,
                        "pagination": {
                          "el": ".swiper-pagination",
                          "clickable": true
                        },
                        "navigation": {
                          "prevEl": "#prev",
                          "nextEl": "#next"
                        },
                        "breakpoints": {
                          "600": {
                            "slidesPerView": 2
                          },
                          "1000": {
                            "slidesPerView": 3
                          }
                        }
                      }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-4x3 bg-info-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-4x3 bg-success-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                2</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-4x3 bg-danger-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                3</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-4x3 bg-warning-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                4</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination position-static mt-3"></div>
                            </div>
                        </div>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-multiple-slides-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-multiple-slides-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Responsive slider with multiple slides, featuring external Prev/Next buttons and bullets positioned outside the slider. --&gt;
&lt;div class=&quot;position-relative px-5&quot;&gt;

  &lt;!-- External slider prev/next buttons --&gt;
  &lt;button type=&quot;button&quot; id=&quot;prev&quot; class=&quot;btn btn-icon btn-outline-secondary rounded-circle animate-slide-start position-absolute top-50 start-0 translate-middle-y mt-n3&quot; aria-label=&quot;Prev&quot;&gt;
    &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; id=&quot;next&quot; class=&quot;btn btn-icon btn-outline-secondary rounded-circle animate-slide-end position-absolute top-50 end-0 translate-middle-y mt-n3&quot; aria-label=&quot;Next&quot;&gt;
    &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Slider --&gt;
  &lt;div class=&quot;swiper px-2&quot; data-swiper='{
    &quot;slidesPerView&quot;: 1,
    &quot;spaceBetween&quot;: 16,
    &quot;loop&quot;: true,
    &quot;pagination&quot;: {
      &quot;el&quot;: &quot;.swiper-pagination&quot;,
      &quot;clickable&quot;: true
    },
    &quot;navigation&quot;: {
      &quot;prevEl&quot;: &quot;#prev&quot;,
      &quot;nextEl&quot;: &quot;#next&quot;
    },
    &quot;breakpoints&quot;: {
      &quot;600&quot;: {
        &quot;slidesPerView&quot;: 2
      },
      &quot;1000&quot;: {
        &quot;slidesPerView&quot;: 3
      }
    }
  }'&gt;
    &lt;div class=&quot;swiper-wrapper&quot;&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-info-subtle rounded&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;1&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-success-subtle rounded&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;2&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-danger-subtle rounded&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;3&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- Item --&gt;
      &lt;div class=&quot;swiper-slide&quot;&gt;
        &lt;div class=&quot;ratio ratio-4x3 bg-warning-subtle rounded&quot;&gt;
          &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;4&lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Pagination (Bullets) --&gt;
    &lt;div class=&quot;swiper-pagination position-static mt-3&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Fade transition -->
    <section id="carousel-fade" class="cd-section pb-sm-2 mb-5">
        <h4>Fade transition</h4>
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
                        <div class="swiper hover-effect-opacity"
                            data-swiper='{
                      "effect": "fade",
                      "loop": true,
                      "navigation": {
                        "prevEl": ".btn-prev",
                        "nextEl": ".btn-next"
                      }
                    }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide rounded">
                                    <div class="ratio ratio-16x9 bg-info-subtle rounded">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                            First</div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded">
                                    <div class="ratio ratio-16x9 bg-danger-subtle rounded">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                            Second</div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded">
                                    <div class="ratio ratio-16x9 bg-warning-subtle rounded">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                            Third</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-50 start-0 z-2 translate-middle-y ms-3 ms-sm-4 hover-effect-target opacity-0">
                                <button type="button"
                                    class="btn btn-prev btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-start"
                                    aria-label="Prev">
                                    <i class="ci-chevron-left fs-lg animate-target"></i>
                                </button>
                            </div>
                            <div
                                class="position-absolute top-50 end-0 z-2 translate-middle-y me-3 me-sm-4 hover-effect-target opacity-0">
                                <button type="button"
                                    class="btn btn-next btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-end"
                                    aria-label="Next">
                                    <i class="ci-chevron-right fs-lg animate-target"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-fade-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-fade-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- A slider that features a smooth fade transition between slides --&gt;
&lt;div class=&quot;swiper hover-effect-opacity&quot; data-swiper='{
  &quot;effect&quot;: &quot;fade&quot;,
  &quot;loop&quot;: true,
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide rounded&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-info-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;First&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide rounded&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-danger-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Second&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide rounded&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-warning-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;Third&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 z-2 translate-middle-y ms-3 ms-sm-4 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-start&quot; aria-label=&quot;Prev&quot;&gt;
      &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Next button --&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 z-2 translate-middle-y me-3 me-sm-4 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-end&quot; aria-label=&quot;Next&quot;&gt;
      &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Thumbnails -->
    <section id="carousel-thumbnails" class="cd-section pb-sm-2 mb-5">
        <h4>Thumbnails</h4>
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
                        <div style="max-width: 636px">
                            <div class="swiper hover-effect-opacity"
                                data-swiper='{
                        "spaceBetween": 24,
                        "loop": true,
                        "navigation": {
                          "prevEl": ".btn-prev",
                          "nextEl": ".btn-next"
                        },
                        "thumbs": {
                          "swiper": "#thumbs"
                        }
                      }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-primary-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-success-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                2</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-warning-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                3</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-danger-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                4</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-info-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                5</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-body-tertiary rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                6</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ratio ratio-16x9 bg-warning-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4">
                                                7</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="position-absolute top-50 start-0 z-2 translate-middle-y ms-3 ms-sm-4 hover-effect-target opacity-0">
                                    <button type="button"
                                        class="btn btn-prev btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-start"
                                        aria-label="Prev">
                                        <i class="ci-chevron-left fs-lg animate-target"></i>
                                    </button>
                                </div>
                                <div
                                    class="position-absolute top-50 end-0 z-2 translate-middle-y me-3 me-sm-4 hover-effect-target opacity-0">
                                    <button type="button"
                                        class="btn btn-next btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-end"
                                        aria-label="Next">
                                        <i class="ci-chevron-right fs-lg animate-target"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="swiper swiper-load swiper-thumbs pt-2 mt-1" id="thumbs"
                                data-swiper='{
                        "loop": true,
                        "spaceBetween": 12,
                        "slidesPerView": 3,
                        "watchSlidesProgress": true,
                        "breakpoints": {
                          "340": {
                            "slidesPerView": 4
                          },
                          "500": {
                            "slidesPerView": 5
                          },
                          "600": {
                            "slidesPerView": 6
                          },
                          "768": {
                            "slidesPerView": 4
                          },
                          "992": {
                            "slidesPerView": 5
                          },
                          "1200": {
                            "slidesPerView": 6
                          }
                        }
                      }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-primary-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-success-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                2</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-warning-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                3</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-danger-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                4</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-info-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                5</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-body-tertiary rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                6</div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-thumb">
                                        <div class="ratio ratio-1x1 bg-warning-subtle rounded">
                                            <div
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold">
                                                7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-thumbnails-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-thumbnails-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- A slider equipped with thumbnails that allow users to control and navigate the main slider --&gt;

&lt;!-- Main slider --&gt;
&lt;div class=&quot;swiper hover-effect-opacity&quot; data-swiper='{
  &quot;spaceBetween&quot;: 24,
  &quot;loop&quot;: true,
  &quot;navigation&quot;: {
    &quot;prevEl&quot;: &quot;.btn-prev&quot;,
    &quot;nextEl&quot;: &quot;.btn-next&quot;
  },
  &quot;thumbs&quot;: {
    &quot;swiper&quot;: &quot;#thumbs&quot;
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-primary-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-success-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-warning-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-danger-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;4&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-info-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;5&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-body-tertiary rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;6&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;!-- Item --&gt;
    &lt;div class=&quot;swiper-slide&quot;&gt;
      &lt;div class=&quot;ratio ratio-16x9 bg-warning-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-4&quot;&gt;7&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Prev button --&gt;
  &lt;div class=&quot;position-absolute top-50 start-0 z-2 translate-middle-y ms-3 ms-sm-4 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-prev btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-start&quot; aria-label=&quot;Prev&quot;&gt;
      &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Next button --&gt;
  &lt;div class=&quot;position-absolute top-50 end-0 z-2 translate-middle-y me-3 me-sm-4 hover-effect-target opacity-0&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-next btn-icon btn-secondary bg-body border-0 rounded-circle animate-slide-end&quot; aria-label=&quot;Next&quot;&gt;
      &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Thumbnails slider --&gt;
&lt;div class=&quot;swiper swiper-load swiper-thumbs pt-2 mt-1&quot; id=&quot;thumbs&quot; data-swiper='{
  &quot;loop&quot;: true,
  &quot;spaceBetween&quot;: 12,
  &quot;slidesPerView&quot;: 3,
  &quot;watchSlidesProgress&quot;: true,
  &quot;breakpoints&quot;: {
    &quot;340&quot;: {
      &quot;slidesPerView&quot;: 4
    },
    &quot;500&quot;: {
      &quot;slidesPerView&quot;: 5
    },
    &quot;600&quot;: {
      &quot;slidesPerView&quot;: 6
    },
    &quot;768&quot;: {
      &quot;slidesPerView&quot;: 4
    },
    &quot;992&quot;: {
      &quot;slidesPerView&quot;: 5
    },
    &quot;1200&quot;: {
      &quot;slidesPerView&quot;: 6
    }
  }
}'&gt;
  &lt;div class=&quot;swiper-wrapper&quot;&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-primary-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;1&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-success-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;2&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-warning-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;3&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-danger-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;4&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-info-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;5&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-body-tertiary rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;6&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;swiper-slide swiper-thumb&quot;&gt;
      &lt;div class=&quot;ratio ratio-1x1 bg-warning-subtle rounded&quot;&gt;
        &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center fs-3 fw-semibold&quot;&gt;7&lt;/div&gt;
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


    <!-- Synchronized sliders -->
    <section id="carousel-sync" class="cd-section">
        <h4>Synchronized sliders</h4>
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
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-4 mb-md-0 pb-1 pb-md-0">
                                <div class="swiper" id="images"
                                    data-swiper='{
                          "allowTouchMove": false,
                          "effect": "flip",
                          "flipEffect": {
                            "slideShadows": false
                          },
                          "loop": true
                        }'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-4x3 bg-success-subtle rounded">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                    <i class="ci-image text-success opacity-75"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-4x3 bg-warning-subtle rounded">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                    <i class="ci-image text-warning opacity-75"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-4x3 bg-info-subtle rounded">
                                                <div
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5">
                                                    <i class="ci-image text-info opacity-75"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 ps-xl-5">
                                <div class="swiper"
                                    data-swiper='{
                          "spaceBetween": 32,
                          "loop": true,
                          "speed": 400,
                          "controlSlider": "#images",
                          "navigation": {
                            "prevEl": "#prev-btn",
                            "nextEl": "#next-btn"
                          }
                        }'>
                                    <div class="swiper-wrapper text-center text-md-start">
                                        <div class="swiper-slide">
                                            <h3>First slide</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium
                                                posuere ut vitae arcu.</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <h3>Second slide</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium
                                                posuere ut vitae arcu.</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <h3>Third slide</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium
                                                posuere ut vitae arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center justify-content-md-start gap-2 pt-2">
                                    <button type="button"
                                        class="btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1"
                                        id="prev-btn" aria-label="Prev">
                                        <i class="ci-chevron-left fs-lg animate-target"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-outline-secondary animate-slide-end rounded-circle"
                                        id="next-btn" aria-label="Next">
                                        <i class="ci-chevron-right fs-lg animate-target"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#carousel-sync-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="carousel-sync-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Synchronized sliders example --&gt;
&lt;div class=&quot;row align-items-center&quot;&gt;

  &lt;!-- Controlled slider --&gt;
  &lt;div class=&quot;col-md-5 mb-4 mb-md-0 pb-1 pb-md-0&quot;&gt;
    &lt;div class=&quot;swiper&quot; id=&quot;images&quot; data-swiper='{
      &quot;allowTouchMove&quot;: false,
      &quot;effect&quot;: &quot;flip&quot;,
      &quot;flipEffect&quot;: {
        &quot;slideShadows&quot;: false
      },
      &quot;loop&quot;: true
    }'&gt;
      &lt;div class=&quot;swiper-wrapper&quot;&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;div class=&quot;ratio ratio-4x3 bg-success-subtle rounded&quot;&gt;
            &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
              &lt;i class=&quot;ci-image text-success opacity-75&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;div class=&quot;ratio ratio-4x3 bg-warning-subtle rounded&quot;&gt;
            &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
              &lt;i class=&quot;ci-image text-warning opacity-75&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;div class=&quot;ratio ratio-4x3 bg-info-subtle rounded&quot;&gt;
            &lt;div class=&quot;position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center display-5&quot;&gt;
              &lt;i class=&quot;ci-image text-info opacity-75&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Master slider --&gt;
  &lt;div class=&quot;col-md-7 ps-xl-5&quot;&gt;
    &lt;div class=&quot;swiper&quot; data-swiper='{
      &quot;spaceBetween&quot;: 32,
      &quot;loop&quot;: true,
      &quot;speed&quot;: 400,
      &quot;controlSlider&quot;: &quot;#images&quot;,
      &quot;navigation&quot;: {
        &quot;prevEl&quot;: &quot;#prev-btn&quot;,
        &quot;nextEl&quot;: &quot;#next-btn&quot;
      }
    }'&gt;
      &lt;div class=&quot;swiper-wrapper text-center text-md-start&quot;&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;h3&gt;First slide&lt;/h3&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;h3&gt;Second slide&lt;/h3&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;swiper-slide&quot;&gt;
          &lt;h3&gt;Third slide&lt;/h3&gt;
          &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pulvinar dui eu ullamcorper. Donec a nisl sed felis pretium posuere ut vitae arcu.&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;d-flex justify-content-center justify-content-md-start gap-2 pt-2&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-secondary animate-slide-start rounded-circle me-1&quot; id=&quot;prev-btn&quot; aria-label=&quot;Prev&quot;&gt;
        &lt;i class=&quot;ci-chevron-left fs-lg animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-secondary animate-slide-end rounded-circle&quot; id=&quot;next-btn&quot; aria-label=&quot;Next&quot;&gt;
        &lt;i class=&quot;ci-chevron-right fs-lg animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
