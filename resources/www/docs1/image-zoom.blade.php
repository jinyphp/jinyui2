<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Image zoom</h1>
    <p class="text-body-secondary mb-4">JavaScript based component that adds "zoom on hover" functionality to images.
    </p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The image zoom is powered by <a class="alert-link" href="https://github.com/imgix/drift" target="_blank"
          rel="noreferrer">Drift.js</a> plugin. Ensure that you include links to the plugin's CSS and JavaScript files
        in your document.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/drift-zoom/dist/drift-basic.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border mb-md-2"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/drift-zoom/dist/Drift.min.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p class="pt-3 pb-2 mt-2">You can apply any Drift.js option by specifying it within the
        <code>data-zoom-options="{}"</code> attribute in JSON format.</p>
      <div class="h6">Usefull links:</div>
      <ul class="list-unstyled d-inline-block mb-0">
        <li class="mb-2">
          <a class="d-flex alert-link fw-medium text-decoration-none"
            href="https://github.com/imgix/drift?tab=readme-ov-file#options--defaults" target="_blank" rel="noopener">
            <i class="ci-external-link mt-1 me-2"></i>
            All available Drift.js options
          </a>
        </li>
      </ul>
    </div>
  </section>


  <!-- External zoom pane -->
  <section id="img-zoom-external-pane" class="cd-section pb-sm-2 mb-5">
    <h4>External zoom pane</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="row align-items-md-center justify-content-center g-0">
              <div class="col-10 col-sm-6">
                <div class="ratio ratio-1x1">
                  <img src="../assets/img/shop/electronics/product/gallery/01.png"
                    data-zoom="../assets/img/shop/electronics/product/gallery/01.png" data-zoom-options='{
                            "paneSelector": "#zoomPane",
                            "hoverDelay": 300
                          }' alt="Image">
                </div>
              </div>
              <div class="col-sm-6 col-lg-5">
                <div class="position-relative p-2" id="zoomPane">
                  <div class="d-none d-md-flex align-items-center gap-2 text-decoration-none mb-3">
                    <div class="d-flex gap-1 fs-sm">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-half text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">68 reviews</span>
                  </div>
                  <h2 class="h4">Apple iPhone 14 Plus 128GB</h2>
                  <ul class="list-unstyled">
                    <li class="form-label fw-semibold m-0">
                      Model: <span class="text-body fw-normal">128GB</span>
                    </li>
                    <li class="form-label fw-semibold m-0">
                      Color: <span class="text-body fw-normal">Gray blue</span>
                    </li>
                    <li class="form-label fw-semibold m-0">
                      Capacity: <span class="text-body fw-normal">128GB</span>
                    </li>
                  </ul>
                  <div class="h4 mb-4">$940.00</div>
                  <button type="button"
                    class="btn btn-lg btn-primary animate-slide-end order-sm-2 order-md-4 order-lg-2">
                    <i class="ci-shopping-cart fs-lg animate-target me-2"></i>
                    Add to cart
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#img-zoom-external-pane-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="img-zoom-external-pane-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- External ZoomPane example --&gt;
&lt;div class=&quot;row align-items-md-center justify-content-center g-0&quot;&gt;
  &lt;div class=&quot;col-10 col-sm-6&quot;&gt;
    &lt;div class=&quot;ratio ratio-1x1&quot;&gt;
      &lt;img src=&quot;assets/img/shop/electronics/product/gallery/01.png&quot; data-zoom=&quot;assets/img/shop/electronics/product/gallery/01.png&quot; data-zoom-options='{
        &quot;paneSelector&quot;: &quot;#zoomPane&quot;,
        &quot;hoverDelay&quot;: 300
      }' alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6 col-lg-5&quot;&gt;
    &lt;div class=&quot;position-relative p-2&quot; id=&quot;zoomPane&quot;&gt;
      &lt;div class=&quot;d-none d-md-flex align-items-center gap-2 text-decoration-none mb-3&quot;&gt;
        &lt;div class=&quot;d-flex gap-1 fs-sm&quot;&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-half text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;span class=&quot;text-body-tertiary fs-xs&quot;&gt;68 reviews&lt;/span&gt;
      &lt;/div&gt;
      &lt;h2 class=&quot;h4&quot;&gt;Apple iPhone 14 Plus 128GB&lt;/h4&gt;
      &lt;ul class=&quot;list-unstyled&quot;&gt;
        &lt;li class=&quot;form-label fw-semibold m-0&quot;&gt;
          Model: &lt;span class=&quot;text-body fw-normal&quot; id=&quot;colorOption&quot;&gt;128GB&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;form-label fw-semibold m-0&quot;&gt;
          Color: &lt;span class=&quot;text-body fw-normal&quot; id=&quot;colorOption&quot;&gt;Gray blue&lt;/span&gt;
        &lt;/li&gt;
        &lt;li class=&quot;form-label fw-semibold m-0&quot;&gt;
          Capacity: &lt;span class=&quot;text-body fw-normal&quot; id=&quot;colorOption&quot;&gt;128GB&lt;/span&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;div class=&quot;h4 mb-4&quot;&gt;$940.00&lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-primary animate-slide-end order-sm-2 order-md-4 order-lg-2&quot;&gt;
        &lt;i class=&quot;ci-shopping-cart fs-lg animate-target me-2&quot;&gt;&lt;/i&gt;
        Add to cart
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


  <!-- Inline zoom pane -->
  <section id="img-zoom-inline-pane" class="cd-section">
    <h4>Inline zoom pane</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="ratio ratio-1x1 overflow-hidden" style="max-width: 540px">
              <img src="../assets/img/shop/grocery/product/02.png" data-zoom="../assets/img/shop/grocery/product/02.png"
                data-zoom-options='{
                        "inlinePane": true,
                        "hoverDelay": 300
                      }' alt="Image">
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#img-zoom-inline-pane-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="img-zoom-inline-pane-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Inline ZoomPane example --&gt;
&lt;div class=&quot;ratio ratio-1x1 overflow-hidden&quot; style=&quot;max-width: 540px&quot;&gt;
  &lt;img src=&quot;assets/img/shop/grocery/product/02.png&quot; data-zoom=&quot;assets/img/shop/grocery/product/02.png&quot; data-zoom-options='{
    &quot;inlinePane&quot;: true,
    &quot;hoverDelay&quot;: 300
  }' alt=&quot;Image&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
