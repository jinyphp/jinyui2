<x-www-app><x-www-layout>

    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/card/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Card</h1>
        <p class="text-body-secondary mb-4">Flexible and extensible content container.</p>
    </section>


    <!-- Basic example -->
    <section id="card-basic" class="cd-section pb-sm-2 mb-5">
        <h4>Basic example</h4>
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
                    <div id="preview-1" class="tab-pane pt-4 pb-2 mt-2 fade show active" role="tabpanel">
                        <div class="card" style="max-width: 350px">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a class="btn btn-primary" href="#!">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-basic-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic card example --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Alternative card style -->
    <section id="card-alt-style" class="cd-section pb-sm-2 mb-5">
        <h4>Alternative card style</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2"
                            role="tab" aria-controls="preview-2" aria-selected="true">
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
                    <div id="preview-2" class="tab-pane pt-4 pb-2 mt-2 fade show active" role="tabpanel">
                        <div class="d-flex flex-column flex-sm-row gap-4">
                            <div class="card bg-body-tertiary border-0" style="max-width: 350px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card border-0 shadow" style="max-width: 350px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-alt-style-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-alt-style-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Alternative card style: no border + gray background --&gt;
&lt;div class=&quot;card bg-body-tertiary border-0&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Alternative card style: no border + shadow --&gt;
&lt;div class=&quot;card border-0 shadow&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Image caps -->
    <section id="card-image-caps" class="cd-section pb-sm-2 mb-5">
        <h4>Image caps</h4>
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
                        <div class="d-flex flex-column flex-sm-row gap-4">
                            <div class="card" style="max-width: 350px">
                                <div class="ratio" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                                    <img src="../assets/img/blog/grid/v1/07.jpg" class="card-img-top"
                                        alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="max-width: 350px">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                                <img src="../assets/img/blog/grid/v1/10.jpg" class="card-img-bottom"
                                    alt="Card image">
                            </div>
                        </div>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-image-caps-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-image-caps-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Card with image on top --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
  &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/grid/v1/07.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card with image on bottom --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
  &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
  &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/blog/grid/v1/10.jpg&quot; class=&quot;card-img-bottom&quot; alt=&quot;Card image&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Image hover effects -->
    <section id="card-image-hover" class="cd-section pb-sm-2 mb-5">
        <h4>Image hover effects</h4>
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
                        <div class="d-flex flex-column flex-sm-row gap-4">
                            <div class="card" style="max-width: 350px">
                                <div
                                    class="hover-effect-scale hover-effect-opacity card-img-top position-relative overflow-hidden">
                                    <span
                                        class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                                    <div
                                        class="hover-effect-target d-flex position-absolute top-0 start-0 w-100 h-100 align-items-center justify-content-center z-2 opacity-0">
                                        <div
                                            class="d-flex align-items-center gap-3 fs-sm bg-dark bg-opacity-50 text-white rounded-pill py-2 px-3">
                                            <span class="d-flex align-items-center fw-medium">
                                                <i class="ci-heart fs-base me-1"></i>
                                                12
                                            </span>
                                            <span class="d-flex align-items-center fw-medium">
                                                <i class="ci-message-square fs-base me-1"></i>
                                                8
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ratio hover-effect-target"
                                        style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/07.jpg" alt="Card image">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card" style="max-width: 350px">
                                <div class="position-relative hover-effect-opacity card-img-top overflow-hidden">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(255 / 348 * 100%)">
                                        <img src="../assets/img/docs/card/img.png"
                                            class="hover-effect-target opacity-100" alt="Image idle">
                                        <img src="../assets/img/docs/card/img-hover.jpg"
                                            class="hover-effect-target position-absolute top-0 start-0 opacity-0"
                                            alt="Image hover">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#!">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-image-hover-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-image-hover-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Image hover effect: Overlay content + image zoom --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;hover-effect-scale hover-effect-opacity card-img-top position-relative overflow-hidden&quot;&gt;
    &lt;span class=&quot;hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1&quot;&gt;&lt;/span&gt;
    &lt;div class=&quot;hover-effect-target d-flex position-absolute top-0 start-0 w-100 h-100 align-items-center justify-content-center z-2 opacity-0&quot;&gt;
      &lt;div class=&quot;d-flex align-items-center gap-3 fs-sm bg-dark bg-opacity-50 text-white rounded-pill py-2 px-3&quot;&gt;
        &lt;span class=&quot;d-flex align-items-center fw-medium&quot;&gt;
          &lt;i class=&quot;ci-heart fs-base me-1&quot;&gt;&lt;/i&gt;
          12
        &lt;/span&gt;
        &lt;span class=&quot;d-flex align-items-center fw-medium&quot;&gt;
          &lt;i class=&quot;ci-message-square fs-base me-1&quot;&gt;&lt;/i&gt;
          8
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio hover-effect-target&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v2/07.jpg&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Image hover effect: Image swap --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;position-relative hover-effect-opacity card-img-top overflow-hidden&quot;&gt;
    &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(255 / 348 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/docs/card/img.png&quot; class=&quot;hover-effect-target opacity-100&quot; alt=&quot;Image idle&quot;&gt;
      &lt;img src=&quot;assets/img/docs/card/img-hover.jpg&quot; class=&quot;hover-effect-target position-absolute top-0 start-0 opacity-0&quot; alt=&quot;Image hover&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Horizontal layout -->
    <section id="card-horizontal" class="cd-section pb-sm-2 mb-5">
        <h4>Horizontal layout</h4>
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
                        <div class="card overflow-hidden mb-4">
                            <div class="row g-0">
                                <div class="col-sm-4 position-relative" style="min-height: 220px">
                                    <img src="../assets/img/blog/grid/v2/09.jpg"
                                        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                        alt="Card image">
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-sm-4 position-relative order-sm-2" style="min-height: 220px">
                                    <img src="../assets/img/blog/grid/v2/11.jpg"
                                        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                        alt="Card image">
                                </div>
                                <div class="col-sm-8 order-sm-1">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-horizontal-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Horizontal card: Image on the left --&gt;
&lt;div class=&quot;card overflow-hidden&quot;&gt;
  &lt;div class=&quot;row g-0&quot;&gt;
    &lt;div class=&quot;col-sm-4 position-relative&quot; style=&quot;min-height: 220px&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v2/09.jpg&quot; class=&quot;position-absolute top-0 start-0 w-100 h-100 object-fit-cover&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-8&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
        &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Horizontal card: Image on the right --&gt;
&lt;div class=&quot;card overflow-hidden&quot;&gt;
  &lt;div class=&quot;row g-0&quot;&gt;
    &lt;div class=&quot;col-sm-4 position-relative order-sm-2&quot; style=&quot;min-height: 220px&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v2/11.jpg&quot; class=&quot;position-absolute top-0 start-0 w-100 h-100 object-fit-cover&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-sm-8 order-sm-1&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
        &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
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


    <!-- Header and footer -->
    <section id="card-header-footer" class="cd-section pb-sm-2 mb-5">
        <h4>Header and footer</h4>
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
                        <div class="card text-center" style="max-width: 650px">
                            <h6 class="card-header">Featured</h6>
                            <div class="card-body">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a class="btn btn-primary" href="#!">Go somewhere</a>
                            </div>
                            <div class="card-footer fs-sm text-body-secondary">3 days ago</div>
                        </div>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-header-footer-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-header-footer-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Card with header and footer --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;h6 class=&quot;card-header&quot;&gt;Featured&lt;/h6&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h4 class=&quot;card-title&quot;&gt;Special title treatment&lt;/h4&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer fs-sm text-body-secondary&quot;&gt;3 days ago&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Text alignment -->
    <section id="card-text-alignment" class="cd-section pb-sm-2 mb-5">
        <h4>Text alignment</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-7" role="tab" aria-controls="preview-7"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7"
                            role="tab" aria-controls="html-7" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-end">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-text-alignment-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-text-alignment-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Left aligned (default) --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Center aligned --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Right aligned --&gt;
&lt;div class=&quot;card text-end&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Navigation: Tabs -->
    <section id="card-nav-tabs" class="cd-section pb-sm-2 mb-5">
        <h4>Navigation: Tabs</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-8" role="tab" aria-controls="preview-8"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8"
                            role="tab" aria-controls="html-8" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-header border-0">
                                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#" data-bs-toggle="tab"
                                                    role="tab">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-bs-toggle="tab"
                                                    role="tab">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#" data-bs-toggle="tab"
                                                    role="tab">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-header bg-transparent py-0">
                                        <ul class="nav nav-underline nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link py-3 active" href="#" data-bs-toggle="tab"
                                                    role="tab">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3" href="#" data-bs-toggle="tab"
                                                    role="tab">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 disabled" href="#" data-bs-toggle="tab"
                                                    role="tab">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-nav-tabs-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-nav-tabs-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav tabs inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header border-0&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs card-header-tabs&quot; role=&quot;tablist&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Nav underline inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header bg-transparent py-0&quot;&gt;
    &lt;ul class=&quot;nav nav-underline nav-justified&quot; role=&quot;tablist&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link py-3 active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link py-3&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link py-3 disabled&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Navigation: Pills -->
    <section id="card-nav-pills" class="cd-section pb-sm-2 mb-5">
        <h4>Navigation: Pills</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-9" role="tab" aria-controls="preview-9"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-9"
                            role="tab" aria-controls="html-9" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-9" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-header bg-transparent">
                                        <ul class="nav nav-pills card-header-pills gap-2 gap-sm-3">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#!">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#!">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-header bg-transparent">
                                        <ul class="nav nav-pills card-header-pills gap-2 gap-sm-3">
                                            <li class="nav-item">
                                                <a class="nav-link rounded active" href="#!">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link rounded" href="#!">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link rounded disabled" href="#!">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-9" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-nav-pills-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-nav-pills-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default pills inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header bg-transparent&quot;&gt;
    &lt;ul class=&quot;nav nav-pills card-header-pills&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Rounded pills inside card header --&gt;
&lt;div class=&quot;card text-center&quot;&gt;
  &lt;div class=&quot;card-header bg-transparent&quot;&gt;
    &lt;ul class=&quot;nav nav-pills card-header-pills&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link rounded active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link rounded&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link rounded disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- List group inside card -->
    <section id="card-list-group" class="cd-section pb-sm-2 mb-5">
        <h4>List group inside card</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-10" role="tab" aria-controls="preview-10"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-10"
                            role="tab" aria-controls="html-10" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-10" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-body-secondary">Some quick example text to build on
                                            the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush fs-base">
                                        <li class="list-group-item">Lorem ipsum dolor sit</li>
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                    <div class="card-body">
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-body-secondary">Some quick example text to build on
                                            the card title and make up the bulk of the card's content.</p>
                                    </div>
                                    <div class="list-group list-group-flush fs-base">
                                        <a class="list-group-item list-group-item-action" href="#!">Lorem ipsum
                                            dolor sit</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Cras justo
                                            odio</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Dapibus ac
                                            facilisis in</a>
                                        <a class="list-group-item list-group-item-action" href="#!">Vestibulum at
                                            eros</a>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-primary" href="#!">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-10" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-list-group-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-list-group-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Simple list group inside card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text text-body-secondary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class=&quot;list-group list-group-flush fs-base&quot;&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Lorem ipsum dolor sit&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Actionable list group inside card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text text-body-secondary&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class=&quot;list-group list-group-flush fs-base&quot;&gt;
    &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;Lorem ipsum dolor sit&lt;/a&gt;
    &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;Cras justo odio&lt;/a&gt;
    &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
    &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;Vestibulum at eros&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Card styles: Solid background -->
    <section id="card-bg-solid" class="cd-section pb-sm-2 mb-5">
        <h4>Card styles: Solid background</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-11" role="tab" aria-controls="preview-11"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-11"
                            role="tab" aria-controls="html-11" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-11" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-sm-2 g-4">
                            <div class="col">
                                <div class="card text-bg-primary">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-secondary">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-success">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-danger">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-warning">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-info">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-body-secondary">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Body secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-body-tertiary">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Body tertiary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-bg-dark">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-11" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-bg-solid-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-bg-solid-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card text-bg-primary&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Primary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary card --&gt;
&lt;div class=&quot;card text-bg-secondary&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Secondary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card text-bg-success&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Success card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card text-bg-danger&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Danger card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card text-bg-warning&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Warning card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info card --&gt;
&lt;div class=&quot;card text-bg-info&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Info card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Body secondary card --&gt;
&lt;div class=&quot;card bg-body-secondary&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Body secondary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Body tertiary card --&gt;
&lt;div class=&quot;card bg-body-tertiary&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Body tertiary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark card --&gt;
&lt;div class=&quot;card text-bg-dark&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-white&quot;&gt;Dark card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Card styles: Subtle background -->
    <section id="card-bg-subtle" class="cd-section pb-sm-2 mb-5">
        <h4>Card styles: Subtle background</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-12" role="tab" aria-controls="preview-12"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-12"
                            role="tab" aria-controls="html-12" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-12" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-sm-2 g-4">
                            <div class="col">
                                <div class="card bg-primary-subtle border-primary-subtle">
                                    <div class="card-header border-primary-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-secondary-subtle border-secondary-subtle">
                                    <div class="card-header border-secondary-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-success-subtle border-success-subtle">
                                    <div class="card-header border-success-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-danger-subtle border-danger-subtle">
                                    <div class="card-header border-danger-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-warning-subtle border-warning-subtle">
                                    <div class="card-header border-warning-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-info-subtle border-info-subtle">
                                    <div class="card-header border-info-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card bg-dark-subtle border-dark-subtle">
                                    <div class="card-header border-dark-subtle">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-12" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-bg-subtle-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-bg-subtle-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card bg-primary-subtle border-primary-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-primary-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Primary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary card --&gt;
&lt;div class=&quot;card bg-secondary-subtle border-secondary-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-secondary-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card bg-success-subtle border-success-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-success-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Success card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card bg-danger-subtle border-danger-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-danger-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Danger card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card bg-warning-subtle border-warning-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-warning-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Warning card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info card --&gt;
&lt;div class=&quot;card bg-info-subtle border-info-subtle&quot;&gt;
  &lt;div class=&quot;card-header border-info-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Info card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark card --&gt;
&lt;div class=&quot;card bg-dark-subtle border-dark-subtle&quot;&gt;
  &lt;div class=&quot;card-headerborder-dark-subtle&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Dark card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Card styles: Border and text color -->
    <section id="card-border-color" class="cd-section pb-sm-2 mb-5">
        <h4>Card styles: Border and text color</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-13" role="tab" aria-controls="preview-13"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-13"
                            role="tab" aria-controls="html-13" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-13" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-sm-2 g-4">
                            <div class="col">
                                <div class="card text-primary border-primary">
                                    <div class="card-header bg-primary-subtle border-primary">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-secondary">
                                    <div class="card-header bg-secondary-subtle border-secondary">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-success border-success">
                                    <div class="card-header bg-success-subtle border-success">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-danger border-danger">
                                    <div class="card-header bg-danger-subtle border-danger">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-danger">Danger card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-warning border-warning">
                                    <div class="card-header bg-warning-subtle border-warning">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-warning">Warning card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-info border-info">
                                    <div class="card-header bg-info-subtle border-info">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-info">Info card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-body-emphasis border-dark">
                                    <div class="card-header bg-dark-subtle border-dark">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title text-body-emphasis">Dark card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-13" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-border-color-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-border-color-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary card --&gt;
&lt;div class=&quot;card text-primary border-primary&quot;&gt;
  &lt;div class=&quot;card-header bg-primary-subtle border-primary&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-primary&quot;&gt;Primary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary card --&gt;
&lt;div class=&quot;card border-secondary&quot;&gt;
  &lt;div class=&quot;card-header bg-secondary-subtle border-secondary&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success card --&gt;
&lt;div class=&quot;card text-success border-success&quot;&gt;
  &lt;div class=&quot;card-header bg-success-subtle border-success&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-success&quot;&gt;Success card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger card --&gt;
&lt;div class=&quot;card text-danger border-danger&quot;&gt;
  &lt;div class=&quot;card-header bg-danger-subtle border-danger&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-danger&quot;&gt;Danger card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning card --&gt;
&lt;div class=&quot;card text-warning border-warning&quot;&gt;
  &lt;div class=&quot;card-header bg-warning-subtle border-warning&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-warning&quot;&gt;Warning card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Info card --&gt;
&lt;div class=&quot;card text-info border-info&quot;&gt;
  &lt;div class=&quot;card-header bg-info-subtle border-info&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-info&quot;&gt;Info card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Dark card --&gt;
&lt;div class=&quot;card text-body-emphasis border-dark&quot;&gt;
  &lt;div class=&quot;card-header bg-dark-subtle border-dark&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title text-body-emphasis&quot;&gt;Dark card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Layout: Card group -->
    <section id="card-group" class="cd-section pb-sm-2 mb-5">
        <h4>Layout: Card group</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-14" role="tab" aria-controls="preview-14"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-14"
                            role="tab" aria-controls="html-14" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-14" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="card-group">
                            <div class="card">
                                <div class="ratio" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                                    <img src="../assets/img/blog/grid/v1/07.jpg" class="card-img-top"
                                        alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                </div>
                                <div class="card-footer text-body-tertiary bg-transparent border-0 fs-sm pt-0 pb-4">
                                    Last updated 3 mins ago
                                </div>
                            </div>
                            <div class="card">
                                <div class="ratio" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                                    <img src="../assets/img/blog/grid/v1/10.jpg" class="card-img-top"
                                        alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                </div>
                                <div class="card-footer text-body-tertiary bg-transparent border-0 fs-sm pt-0 pb-4">
                                    Last updated 5 mins ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-14" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-group-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-group-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Card group --&gt;
&lt;div class=&quot;card-group&quot;&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v1/07.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-footer text-body-tertiary bg-transparent border-0 fs-sm pt-0 pb-4&quot;&gt;
      Last updated 3 mins ago
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v1/10.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card-footer text-body-tertiary bg-transparent border-0 fs-sm pt-0 pb-4&quot;&gt;
      Last updated 5 mins ago
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Layout: Card grid -->
    <section id="card-grid" class="cd-section">
        <h4>Layout: Card grid</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-15" role="tab" aria-controls="preview-15"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-15"
                            role="tab" aria-controls="html-15" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-15" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/01.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/02.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/03.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/04.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/05.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="ratio" style="--cz-aspect-ratio: calc(466 / 636 * 100%)">
                                        <img src="../assets/img/blog/grid/v2/06.jpg" class="card-img-top"
                                            alt="Image">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-15" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#card-grid-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="card-grid-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Grid of cards --&gt;
&lt;div class=&quot;row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4&quot;&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/01.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/02.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/03.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/04.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/05.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Card --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;card&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/blog/grid/v2/06.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
        &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title.&lt;/p&gt;
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
</x-www-layout></x-www-app>
