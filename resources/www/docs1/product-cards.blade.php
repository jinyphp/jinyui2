<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Product cards</h1>
    <p class="text-body-secondary mb-4">Components associated with the blog/news section of the website.</p>
  </section>


  <!-- Electronics product card -->
  <section id="product-card-electronics" class="cd-section pb-sm-2 mb-5">
    <h4>Electronics product card</h4>
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
            <div class="product-card animate-underline hover-effect-opacity bg-body rounded mb-lg-4"
              style="max-width: 306px">
              <div class="position-relative">
                <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                  <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex"
                      aria-label="Add to Wishlist">
                      <i class="ci-heart fs-base animate-target"></i>
                    </button>
                    <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex"
                      aria-label="Compare">
                      <i class="ci-refresh-cw fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
                <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                  <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown"
                    aria-expanded="false" aria-label="More actions">
                    <i class="ci-more-vertical fs-lg"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-heart fs-sm ms-n1 me-2"></i>
                        Add to Wishlist
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!">
                        <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                        Compare
                      </a>
                    </li>
                  </ul>
                </div>
                <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                  <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                  <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                    <img src="../assets/img/shop/electronics/01.png" alt="VR Glasses">
                  </div>
                </a>
              </div>
              <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div class="d-flex gap-1 fs-xs">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-half text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                  <span class="text-body-tertiary fs-xs">(123)</span>
                </div>
                <h3 class="pb-1 mb-2">
                  <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                    <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                  </a>
                </h3>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                  <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                    aria-label="Add to Cart">
                    <i class="ci-shopping-cart fs-base animate-target"></i>
                  </button>
                </div>
              </div>
              <div
                class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Display:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">OLED 1440x1600</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Graphics:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">Adreno 540</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Sound:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">2x3.5mm jack</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="fs-xs">Input:</span>
                    <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                    <span class="text-dark-emphasis fs-xs fw-medium text-end">4 built-in cameras</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#product-card-electronics-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="product-card-electronics-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Electronics strore product card example --&gt;
&lt;div class=&quot;product-card animate-underline hover-effect-opacity bg-body rounded&quot;&gt;
  &lt;div class=&quot;position-relative&quot;&gt;
    &lt;div class=&quot;position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3&quot;&gt;
      &lt;div class=&quot;d-flex flex-column gap-2&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex&quot; aria-label=&quot;Add to Wishlist&quot;&gt;
          &lt;i class=&quot;ci-heart fs-base animate-target&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex&quot; aria-label=&quot;Compare&quot;&gt;
          &lt;i class=&quot;ci-refresh-cw fs-base animate-target&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-secondary bg-body&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot; aria-label=&quot;More actions&quot;&gt;
        &lt;i class=&quot;ci-more-vertical fs-lg&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;ul class=&quot;dropdown-menu dropdown-menu-end fs-xs p-2&quot; style=&quot;min-width: auto&quot;&gt;
        &lt;li&gt;
          &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;
            &lt;i class=&quot;ci-heart fs-sm ms-n1 me-2&quot;&gt;&lt;/i&gt;
            Add to Wishlist
          &lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;
          &lt;a class=&quot;dropdown-item&quot; href=&quot;#!&quot;&gt;
            &lt;i class=&quot;ci-refresh-cw fs-sm ms-n1 me-2&quot;&gt;&lt;/i&gt;
            Compare
          &lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;a class=&quot;d-block rounded-top overflow-hidden p-3 p-sm-4&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3&quot;&gt;-21%&lt;/span&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(240 / 258 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/electronics/01.png&quot; alt=&quot;VR Glasses&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center gap-2 mb-2&quot;&gt;
      &lt;div class=&quot;d-flex gap-1 fs-xs&quot;&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-half text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star text-body-tertiary opacity-75&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;span class=&quot;text-body-tertiary fs-xs&quot;&gt;(123)&lt;/span&gt;
    &lt;/div&gt;
    &lt;h3 class=&quot;pb-1 mb-2&quot;&gt;
      &lt;a class=&quot;d-block fs-sm fw-medium text-truncate&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;animate-target&quot;&gt;VRB01 Virtual Reality Glasses&lt;/span&gt;
      &lt;/a&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
      &lt;div class=&quot;h5 lh-1 mb-0&quot;&gt;$340.99 &lt;del class=&quot;text-body-tertiary fs-sm fw-normal&quot;&gt;$430.00&lt;/del&gt;&lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;product-card-button btn btn-icon btn-secondary animate-slide-end ms-2&quot; aria-label=&quot;Add to Cart&quot;&gt;
        &lt;i class=&quot;ci-shopping-cart fs-base animate-target&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1&quot;&gt;
    &lt;span class=&quot;position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2&quot;&gt;&lt;/span&gt;
    &lt;ul class=&quot;list-unstyled d-flex flex-column gap-2 m-0&quot;&gt;
      &lt;li class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;fs-xs&quot;&gt;Display:&lt;/span&gt;
        &lt;span class=&quot;d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-dark-emphasis fs-xs fw-medium text-end&quot;&gt;OLED 1440x1600&lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;fs-xs&quot;&gt;Graphics:&lt;/span&gt;
        &lt;span class=&quot;d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-dark-emphasis fs-xs fw-medium text-end&quot;&gt;Adreno 540&lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;fs-xs&quot;&gt;Sound:&lt;/span&gt;
        &lt;span class=&quot;d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-dark-emphasis fs-xs fw-medium text-end&quot;&gt;2x3.5mm jack&lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;d-flex align-items-center&quot;&gt;
        &lt;span class=&quot;fs-xs&quot;&gt;Input:&lt;/span&gt;
        &lt;span class=&quot;d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2&quot;&gt;&lt;/span&gt;
        &lt;span class=&quot;text-dark-emphasis fs-xs fw-medium text-end&quot;&gt;4 built-in cameras&lt;/span&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Fashion product card -->
  <section id="product-card-fashion" class="cd-section pb-sm-2 mb-5">
    <h4>Fashion product card</h4>
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
            <div class="animate-underline hover-effect-opacity mb-2" style="max-width: 306px">
              <div class="position-relative mb-3">
                <span
                  class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">Sale</span>
                <button type="button"
                  class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                  aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-flex bg-body-tertiary rounded p-3" href="#!">
                  <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                    <img src="../assets/img/shop/fashion/06.png" alt="Image">
                  </div>
                </a>
                <div
                  class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                  <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                    <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                    <div class="nav">
                      <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="#!">+2</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav mb-2">
                <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="#!">
                  <span class="text-truncate">Classic cotton men's shirt</span>
                </a>
              </div>
              <div class="h6 mb-2">$27.00 <del class="fs-sm fw-normal text-body-tertiary">$35.00</del></div>
              <div class="position-relative">
                <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+3 colors</div>
                <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
                  <label for="color-6-1" class="btn btn-color fs-base" style="color: #c1cde7">
                    <span class="visually-hidden">Blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
                  <label for="color-6-2" class="btn btn-color fs-base" style="color: #526f99">
                    <span class="visually-hidden">Dark blue</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
                  <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                    <span class="visually-hidden">White</span>
                  </label>
                  <input type="radio" class="btn-check" name="colors-6" id="color-6-4">
                  <label for="color-6-4" class="btn btn-color fs-base" style="color: #364254">
                    <span class="visually-hidden">Black</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#product-card-fashion-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="product-card-fashion-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Fashion strore product card example --&gt;
&lt;div class=&quot;animate-underline hover-effect-opacity&quot;&gt;
  &lt;div class=&quot;position-relative mb-3&quot;&gt;
    &lt;span class=&quot;badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3&quot;&gt;Sale&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2&quot; aria-label=&quot;Add to Wishlist&quot;&gt;
      &lt;i class=&quot;ci-heart animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;a class=&quot;d-flex bg-body-tertiary rounded p-3&quot; href=&quot;#&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(308 / 274 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/fashion/06.png&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
    &lt;div class=&quot;hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3&quot;&gt;
      &lt;div class=&quot;d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2&quot;&gt;
        &lt;span class=&quot;fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2&quot;&gt;S&lt;/span&gt;
        &lt;span class=&quot;fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2&quot;&gt;M&lt;/span&gt;
        &lt;span class=&quot;fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2&quot;&gt;L&lt;/span&gt;
        &lt;span class=&quot;fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2&quot;&gt;XL&lt;/span&gt;
        &lt;div class=&quot;nav&quot;&gt;
          &lt;a class=&quot;nav-link fs-xs text-body-tertiary py-1 px-2&quot; href=&quot;#&quot;&gt;+2&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;nav mb-2&quot;&gt;
    &lt;a class=&quot;nav-link animate-target min-w-0 text-dark-emphasis p-0&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;text-truncate&quot;&gt;Classic cotton men's shirt&lt;/span&gt;
    &lt;/a&gt;
  &lt;/div&gt;
  &lt;div class=&quot;h6 mb-2&quot;&gt;$27.00 &lt;del class=&quot;fs-sm fw-normal text-body-tertiary&quot;&gt;$35.00&lt;/del&gt;&lt;/div&gt;
  &lt;div class=&quot;position-relative&quot;&gt;
    &lt;div class=&quot;hover-effect-target fs-xs text-body-secondary opacity-100&quot;&gt;+3 colors&lt;/div&gt;
    &lt;div class=&quot;hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0&quot;&gt;
      &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-6&quot; id=&quot;color-6-1&quot; checked&gt;
      &lt;label for=&quot;color-6-1&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #c1cde7&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Blue&lt;/span&gt;
      &lt;/label&gt;
      &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-6&quot; id=&quot;color-6-2&quot;&gt;
      &lt;label for=&quot;color-6-2&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #526f99&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Dark blue&lt;/span&gt;
      &lt;/label&gt;
      &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-6&quot; id=&quot;color-6-3&quot;&gt;
      &lt;label for=&quot;color-6-3&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #e0e5eb&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;White&lt;/span&gt;
      &lt;/label&gt;
      &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-6&quot; id=&quot;color-6-4&quot;&gt;
      &lt;label for=&quot;color-6-4&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #364254&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Black&lt;/span&gt;
      &lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Furniture product card -->
  <section id="product-card-furniture" class="cd-section pb-sm-2 mb-5">
    <h4>Furniture product card</h4>
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
            <div class="animate-underline mb-2" style="max-width: 306px">
              <a class="hover-effect-opacity ratio ratio-1x1 d-block mb-3" href="#!">
                <div class="position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">
                  <span class="badge text-bg-danger">-14%</span>
                </div>
                <img src="../assets/img/shop/furniture/01.png" class="hover-effect-target opacity-100" alt="Product">
                <img src="../assets/img/shop/furniture/01-hover.jpg"
                  class="position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4" alt="Room">
              </a>
              <div class="d-flex gap-2 mb-3">
                <input type="radio" class="btn-check" name="colors-1" id="color-1-1" checked>
                <label for="color-1-1" class="btn btn-color fs-base" style="color: #32808e">
                  <span class="visually-hidden">Emerald</span>
                </label>
                <input type="radio" class="btn-check" name="colors-1" id="color-1-2">
                <label for="color-1-2" class="btn btn-color fs-base" style="color: #767e93">
                  <span class="visually-hidden">Bluish gray</span>
                </label>
                <input type="radio" class="btn-check" name="colors-1" id="color-1-3">
                <label for="color-1-3" class="btn btn-color fs-base" style="color: #cd8d01">
                  <span class="visually-hidden">Mustard</span>
                </label>
              </div>
              <h3 class="mb-2">
                <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                  <span class="animate-target">Soft chair with cushion and wooden legs</span>
                </a>
              </h3>
              <div class="h6">$245.00 <del class="fs-sm fw-normal text-body-tertiary">$280.00</del></div>
              <div class="d-flex gap-2">
                <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse"
                  aria-label="Add to wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#product-card-furniture-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="product-card-furniture-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Furniture strore product card example --&gt;
&lt;div class=&quot;animate-underline&quot;&gt;
  &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load --&gt;
  &lt;a class=&quot;hover-effect-opacity ratio ratio-1x1 d-block mb-3&quot; href=&quot;#&quot;&gt;
    &lt;div class=&quot;position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3&quot;&gt;
      &lt;span class=&quot;badge text-bg-danger&quot;&gt;-14%&lt;/span&gt;
    &lt;/div&gt;
    &lt;img src=&quot;assets/img/shop/furniture/01.png&quot; class=&quot;hover-effect-target opacity-100&quot; alt=&quot;Product&quot;&gt;
    &lt;img src=&quot;assets/img/shop/furniture/01-hover.jpg&quot; class=&quot;position-absolute top-0 start-0 hover-effect-target opacity-0 rounded-4&quot; alt=&quot;Room&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;d-flex gap-2 mb-3&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-1&quot; id=&quot;color-1-1&quot; checked&gt;
    &lt;label for=&quot;color-1-1&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #32808e&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Emerald&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-1&quot; id=&quot;color-1-2&quot;&gt;
    &lt;label for=&quot;color-1-2&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #767e93&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Bluish gray&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;colors-1&quot; id=&quot;color-1-3&quot;&gt;
    &lt;label for=&quot;color-1-3&quot; class=&quot;btn btn-color fs-base&quot; style=&quot;color: #cd8d01&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Mustard&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
  &lt;h3 class=&quot;mb-2&quot;&gt;
    &lt;a class=&quot;d-block fs-sm fw-medium text-truncate&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;animate-target&quot;&gt;Soft chair with cushion and wooden legs&lt;/span&gt;
    &lt;/a&gt;
  &lt;/h3&gt;
  &lt;div class=&quot;h6&quot;&gt;$245.00 &lt;del class=&quot;fs-sm fw-normal text-body-tertiary&quot;&gt;$280.00&lt;/del&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex gap-2&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-dark w-100 rounded-pill px-3&quot;&gt;Add to cart&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary rounded-circle animate-pulse&quot; aria-label=&quot;Add to wishlist&quot;&gt;
      &lt;i class=&quot;ci-heart fs-base animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Grocery product card -->
  <section id="product-card-grocery" class="cd-section pb-sm-2 mb-5">
    <h4>Grocery product card</h4>
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
            <div class="card product-card h-100 bg-transparent border-0 shadow-none" style="max-width: 224px">
              <div class="position-relative z-2">
                <span
                  class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-1 mt-sm-2 ms-1 ms-sm-2">-30%</span>
                <button type="button"
                  class="btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2"
                  aria-label="Add to Wishlist">
                  <i class="ci-heart animate-target"></i>
                </button>
                <a class="d-block p-2 p-lg-3" href="#!">
                  <div class="ratio" style="--cz-aspect-ratio: calc(160 / 191 * 100%)">
                    <img src="../assets/img/shop/grocery/02.png" alt="Image">
                  </div>
                </a>
                <div class="position-absolute w-100 start-0 bottom-0">
                  <div class="d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3">
                    <div
                      class="count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2">
                      <button type="button" class="btn btn-icon btn-sm btn-primary" data-decrement
                        aria-label="Decrement quantity">
                        <i class="ci-minus fs-sm"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm bg-primary text-white w-100" value="0"
                        min="0" readonly>
                      <button type="button" class="product-card-button btn btn-icon btn-sm btn-secondary ms-auto"
                        data-increment aria-label="Increment quantity">
                        <span data-count-input-value></span>
                        <i class="ci-plus fs-sm"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-2">
                <div class="h6 mb-2">$3.12 <del class="fs-sm fw-normal text-body-tertiary ms-1">$4.05</del></div>
                <h3 class="fs-sm lh-base mb-0">
                  <a class="hover-effect-underline fw-normal" href="#!">Fresh orange Klementina, Spain</a>
                </h3>
              </div>
              <div class="fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3">1kg</div>
            </div>

          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#product-card-grocery-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="product-card-grocery-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Grocery strore product card example --&gt;
&lt;div class=&quot;card product-card h-100 bg-transparent border-0 shadow-none&quot;&gt;
  &lt;div class=&quot;position-relative z-2&quot;&gt;
    &lt;span class=&quot;badge text-bg-danger position-absolute top-0 start-0 z-2 mt-1 mt-sm-2 ms-1 ms-sm-2&quot;&gt;-30%&lt;/span&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-secondary animate-pulse fs-sm bg-body border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2&quot; aria-label=&quot;Add to Wishlist&quot;&gt;
      &lt;i class=&quot;ci-heart animate-target&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;a class=&quot;d-block p-2 p-lg-3&quot; href=&quot;#&quot;&gt;
      &lt;!-- Wrap the image with a &quot;ratio&quot; element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(160 / 191 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/grocery/02.png&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
    &lt;div class=&quot;position-absolute w-100 start-0 bottom-0&quot;&gt;
      &lt;div class=&quot;d-flex justify-content-end px-2 px-lg-3 pb-2 pb-lg-3&quot;&gt;
        &lt;div class=&quot;count-input count-input-collapsible collapsed justify-content-between w-100 bg-transparent border-0 rounded-2&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm btn-primary&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
            &lt;i class=&quot;ci-minus fs-sm&quot;&gt;&lt;/i&gt;
          &lt;/button&gt;
          &lt;input type=&quot;number&quot; class=&quot;form-control form-control-sm bg-primary text-white w-100&quot; value=&quot;0&quot; min=&quot;0&quot; readonly&gt;
          &lt;button type=&quot;button&quot; class=&quot;product-card-button btn btn-icon btn-sm btn-secondary ms-auto&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
            &lt;span data-count-input-value&gt;&lt;/span&gt;
            &lt;i class=&quot;ci-plus fs-sm&quot;&gt;&lt;/i&gt;
          &lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-0 px-1 px-md-2 px-lg-3 pb-2&quot;&gt;
    &lt;div class=&quot;h6 mb-2&quot;&gt;$3.12 &lt;del class=&quot;fs-sm fw-normal text-body-tertiary ms-1&quot;&gt;$4.05&lt;/del&gt;&lt;/div&gt;
    &lt;h3 class=&quot;fs-sm lh-base mb-0&quot;&gt;
      &lt;a class=&quot;hover-effect-underline fw-normal&quot; href=&quot;#&quot;&gt;Fresh orange Klementina, Spain&lt;/a&gt;
    &lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class=&quot;fs-xs text-body-secondary px-1 px-md-2 px-lg-3 pb-2 pb-md-3&quot;&gt;1kg&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Cart items list -->
  <section id="cart-items" class="cd-section">
    <h4>Cart items list</h4>
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
            <div class="d-flex flex-column gap-4" style="max-width: 435px">
              <div class="d-flex align-items-center">
                <a class="position-relative flex-shrink-0" href="#!">
                  <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
                  <img src="../assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
                </a>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                  <h5 class="d-flex animate-underline mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Tablet Apple iPad Pro
                      M2</a>
                  </h5>
                  <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-2">
                      <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm" value="1" readonly>
                      <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                      data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="#!">
                  <img src="../assets/img/shop/fashion/thumbs/07.png" class="bg-body-tertiary rounded" width="110"
                    alt="Thumbnail">
                </a>
                <div class="w-100 min-w-0 ps-3">
                  <h5 class="d-flex animate-underline mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Leather sneakers with
                      golden laces</a>
                  </h5>
                  <div class="h6 pb-1 mb-2">$74.00</div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-2">
                      <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm" value="1" readonly>
                      <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                      data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <a class="flex-shrink-0" href="#!">
                  <img src="../assets/img/shop/grocery/thumbs/02.png" width="110" alt="Thumbnail">
                </a>
                <div class="w-100 ps-3">
                  <h5 class="fs-sm fw-medium lh-base mb-2">
                    <a class="hover-effect-underline" href="#!">Pesto sauce Barilla with basil, Italy</a>
                  </h5>
                  <div class="h6 pb-1 mb-2">$3.95</div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="count-input rounded-pill">
                      <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                        <i class="ci-minus"></i>
                      </button>
                      <input type="number" class="form-control form-control-sm" value="1" readonly>
                      <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                        <i class="ci-plus"></i>
                      </button>
                    </div>
                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                      data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#cart-items-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="cart-items-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Examples of products added to the cart --&gt;

&lt;!-- Electronics store cart item --&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;a class=&quot;position-relative flex-shrink-0&quot; href=&quot;#&quot;&gt;
    &lt;span class=&quot;badge text-bg-danger position-absolute top-0 start-0&quot;&gt;-10%&lt;/span&gt;
    &lt;img src=&quot;assets/img/shop/electronics/thumbs/09.png&quot; width=&quot;110&quot; alt=&quot;iPad Pro&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;w-100 min-w-0 ps-2 ps-sm-3&quot;&gt;
    &lt;h5 class=&quot;d-flex animate-underline mb-2&quot;&gt;
      &lt;a class=&quot;d-block fs-sm fw-medium text-truncate animate-target&quot; href=&quot;#&quot;&gt;Tablet Apple iPad Pro M2&lt;/a&gt;
    &lt;/h5&gt;
    &lt;div class=&quot;h6 pb-1 mb-2&quot;&gt;$989.00 &lt;del class=&quot;text-body-tertiary fs-xs fw-normal&quot;&gt;$1,099.00&lt;/del&gt;&lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
      &lt;div class=&quot;count-input rounded-2&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
          &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;input type=&quot;number&quot; class=&quot;form-control form-control-sm&quot; value=&quot;1&quot; readonly&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
          &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn-close fs-sm&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; data-bs-title=&quot;Remove&quot; aria-label=&quot;Remove from cart&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Fashion store cart item --&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;a class=&quot;flex-shrink-0&quot; href=&quot;#&quot;&gt;
    &lt;img src=&quot;assets/img/shop/fashion/thumbs/07.png&quot; class=&quot;bg-body-tertiary rounded&quot; width=&quot;110&quot; alt=&quot;Thumbnail&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;w-100 min-w-0 ps-3&quot;&gt;
    &lt;h5 class=&quot;d-flex animate-underline mb-2&quot;&gt;
      &lt;a class=&quot;d-block fs-sm fw-medium text-truncate animate-target&quot; href=&quot;#&quot;&gt;Leather sneakers with golden laces&lt;/a&gt;
    &lt;/h5&gt;
    &lt;div class=&quot;h6 pb-1 mb-2&quot;&gt;$74.00&lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
      &lt;div class=&quot;count-input rounded-2&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
          &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;input type=&quot;number&quot; class=&quot;form-control form-control-sm&quot; value=&quot;1&quot; readonly&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
          &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn-close fs-sm&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; data-bs-title=&quot;Remove&quot; aria-label=&quot;Remove from cart&quot;&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Grocery store cart item --&gt;
&lt;div class=&quot;d-flex align-items-center&quot;&gt;
  &lt;a class=&quot;flex-shrink-0&quot; href=&quot;#&quot;&gt;
    &lt;img src=&quot;assets/img/shop/grocery/thumbs/02.png&quot; width=&quot;110&quot; alt=&quot;Thumbnail&quot;&gt;
  &lt;/a&gt;
  &lt;div class=&quot;w-100 ps-3&quot;&gt;
    &lt;h5 class=&quot;fs-sm fw-medium lh-base mb-2&quot;&gt;
      &lt;a class=&quot;hover-effect-underline&quot; href=&quot;#&quot;&gt;Pesto sauce Barilla with basil, Italy&lt;/a&gt;
    &lt;/h5&gt;
    &lt;div class=&quot;h6 pb-1 mb-2&quot;&gt;$3.95&lt;/div&gt;
    &lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
      &lt;div class=&quot;count-input rounded-pill&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
          &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;input type=&quot;number&quot; class=&quot;form-control form-control-sm&quot; value=&quot;1&quot; readonly&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
          &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn-close fs-sm&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; data-bs-title=&quot;Remove&quot; aria-label=&quot;Remove from cart&quot;&gt;&lt;/button&gt;
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
