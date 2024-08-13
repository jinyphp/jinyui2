<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/content/images/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Images &amp; figures</h1>
    <p class="text-body-secondary mb-4">Image styles and figure component for displaying images and text.</p>
  </section>


  <!-- Image shapes -->
  <section id="image-shapes" class="cd-section pb-sm-2 mb-5">
    <h4>Image shapes</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab"
              aria-controls="preview-1" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab"
              aria-controls="html-1" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4 gy-4">
              <div class="col">
                <img src="../assets/img/shop/furniture/product/06.jpg" class="d-block" width="290" alt="Square image">
              </div>
              <div class="col">
                <img src="../assets/img/blog/list/02.jpg" class="d-block rounded-4" width="290" alt="Rounded image">
              </div>
              <div class="col">
                <img src="../assets/img/blog/list/03.jpg" class="d-block rounded-circle" width="290" alt="Circle image">
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#image-shapes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="image-shapes-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Square image (default) --&gt;
&lt;img src=&quot;assets/img/shop/furniture/product/06.jpg&quot; alt=&quot;Square image&quot;&gt;

&lt;!-- Rounded image --&gt;
&lt;img src=&quot;assets/img/blog/list/02.jpg&quot; class=&quot;rounded-4&quot; alt=&quot;Rounded image&quot;&gt;

&lt;!-- Circle image --&gt;
&lt;img src=&quot;assets/img/blog/list/03.jpg&quot; class=&quot;rounded-circle&quot; alt=&quot;Circle image&quot;&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Thumbnails -->
  <section id="image-thumbnails" class="cd-section pb-sm-2 mb-5">
    <h4>Thumbnails</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab"
              aria-controls="preview-2" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab"
              aria-controls="html-2" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4 gy-4">
              <div class="col">
                <img src="../assets/img/shop/furniture/product/06.jpg" class="d-block img-thumbnail rounded-0"
                  width="290" alt="Square thumbnail">
              </div>
              <div class="col">
                <img src="../assets/img/blog/list/02.jpg" class="d-block img-thumbnail" width="290"
                  alt="Rounded thumbnail">
              </div>
              <div class="col">
                <img src="../assets/img/blog/list/03.jpg" class="d-block img-thumbnail rounded-circle" width="290"
                  alt="Circle thumbnail">
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#image-thumbnails-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="image-thumbnails-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Square thumbnail --&gt;
&lt;img src=&quot;assets/img/shop/furniture/product/06.jpg&quot; class=&quot;img-thumbnail rounded-0&quot; alt=&quot;Square thumbnail&quot;&gt;

&lt;!-- Rounded thumbnail (default) --&gt;
&lt;img src=&quot;assets/img/blog/list/02.jpg&quot; class=&quot;img-thumbnail&quot; alt=&quot;Rounded thumbnail&quot;&gt;

&lt;!-- Circle thumbnail --&gt;
&lt;img src=&quot;assets/img/blog/list/03.jpg&quot; class=&quot;img-thumbnail rounded-circle&quot; alt=&quot;Circle thumbnail&quot;&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Figures with caption -->
  <section id="figures" class="cd-section pb-sm-2 mb-5">
    <h4>Figures with caption</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab"
              aria-controls="preview-3" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab"
              aria-controls="html-3" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4 gy-4">
              <div class="col">
                <figure class="figure mb-0" style="max-width: 290px;">
                  <img src="../assets/img/shop/furniture/product/06.jpg" class="figure-img rounded" alt="Image">
                  <figcaption class="figure-caption">Caption on the left</figcaption>
                </figure>
              </div>
              <div class="col">
                <figure class="figure mb-0" style="max-width: 290px;">
                  <img src="../assets/img/blog/list/02.jpg" class="figure-img rounded" alt="Image">
                  <figcaption class="figure-caption text-center">Caption in the center</figcaption>
                </figure>
              </div>
              <div class="col">
                <figure class="figure mb-0" style="max-width: 290px;">
                  <img src="../assets/img/blog/list/03.jpg" class="figure-img rounded" alt="Image">
                  <figcaption class="figure-caption text-end">Caption on the right</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#figures-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="figures-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Caption on the left --&gt;
&lt;figure class=&quot;figure&quot;&gt;
  &lt;img src=&quot;assets/img/shop/furniture/product/06.jpg&quot; class=&quot;figure-img rounded&quot; alt=&quot;Image&quot;&gt;
  &lt;figcaption class=&quot;figure-caption&quot;&gt;Caption on the left&lt;/figcaption&gt;
&lt;/figure&gt;

&lt;!-- Caption in the center --&gt;
&lt;figure class=&quot;figure&quot;&gt;
  &lt;img src=&quot;assets/img/blog/list/02.jpg&quot; class=&quot;figure-img rounded&quot; alt=&quot;Image&quot;&gt;
  &lt;figcaption class=&quot;figure-caption text-center&quot;&gt;Caption in the center&lt;/figcaption&gt;
&lt;/figure&gt;

&lt;!-- Caption on the right --&gt;
&lt;figure class=&quot;figure&quot;&gt;
  &lt;img src=&quot;assets/img/blog/list/03.jpg&quot; class=&quot;figure-img rounded&quot; alt=&quot;Image&quot;&gt;
  &lt;figcaption class=&quot;figure-caption text-end&quot;&gt;Caption on the right&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Image swap on hover -->
  <section id="image-swap" class="cd-section pb-sm-2 mb-5">
    <h4>Image swap on hover</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-4" role="tab"
              aria-controls="preview-4" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4" role="tab"
              aria-controls="html-4" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="position-relative hover-effect-opacity rounded overflow-hidden" style="max-width: 306px;">
              <img src="../assets/img/shop/furniture/04.png" class="hover-effect-target opacity-100" alt="Image idle">
              <img src="../assets/img/shop/furniture/04-hover.jpg"
                class="position-absolute top-0 start-0 hover-effect-target opacity-0" alt="Image hover">
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#image-swap-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="image-swap-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Swap images on hover --&gt;
&lt;div class=&quot;position-relative hover-effect-opacity rounded overflow-hidden&quot; style=&quot;max-width: 306px;&quot;&gt;
  &lt;img src=&quot;assets/img/shop/furniture/04.png&quot; class=&quot;hover-effect-target opacity-100&quot; alt=&quot;Image idle&quot;&gt;
  &lt;img src=&quot;assets/img/shop/furniture/04-hover.jpg&quot; class=&quot;position-absolute top-0 start-0 hover-effect-target opacity-0&quot; alt=&quot;Image hover&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Image scale (zoom) on hover -->
  <section id="image-scale" class="cd-section">
    <h4>Image scale (zoom) on hover</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-5" role="tab"
              aria-controls="preview-5" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5" role="tab"
              aria-controls="html-5" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="hover-effect-scale rounded overflow-hidden" style="max-width: 306px;">
              <img src="../assets/img/shop/furniture/product/06.jpg" class="hover-effect-target" alt="Image">
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#image-scale-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="image-scale-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Scale (zoom) image on hover --&gt;
&lt;div class=&quot;hover-effect-scale rounded overflow-hidden&quot; style=&quot;max-width: 306px;&quot;&gt;
  &lt;img src=&quot;assets/img/shop/furniture/product/06.jpg&quot; class=&quot;hover-effect-target&quot; alt=&quot;Image&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
