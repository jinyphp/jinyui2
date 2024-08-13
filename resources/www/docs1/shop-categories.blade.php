<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Shop categories</h1>
    <p class="text-body-secondary mb-4">Provide a navigational structure with links to different product categories for
      easy access and exploration.</p>
  </section>


  <!-- Category card: Style 1 -->
  <section id="category-card-1" class="cd-section pb-sm-2 mb-5">
    <h4>Category card: Style 1</h4>
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
            <div class="hover-effect-scale" style="max-width: 306px">
              <a class="d-block bg-body-tertiary rounded p-4 mb-4" href="#!">
                <div class="ratio" style="--cz-aspect-ratio: calc(184 / 258 * 100%)">
                  <img src="../assets/img/shop/electronics/categories/04.png" class="hover-effect-target"
                    alt="Wearable Electronics">
                </div>
              </a>
              <h2 class="h6 d-flex w-100 pb-2 mb-1">
                <a class="animate-underline animate-target d-inline text-truncate" href="#!">Wearable Electronics</a>
              </h2>
              <ul class="nav flex-column gap-2 mt-n1">
                <li class="d-flex w-100 pt-1">
                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                    href="#!">Smart Watches</a>
                </li>
                <li class="d-flex w-100 pt-1">
                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                    href="#!">Fitness Trackers</a>
                </li>
                <li class="d-flex w-100 pt-1">
                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                    href="#!">Smart Glasses</a>
                </li>
                <li class="d-flex w-100 pt-1">
                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                    href="#!">Clips, Arm &amp; Wristbands</a>
                </li>
                <li class="d-flex w-100 pt-1">
                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                    href="#!">Voice Recorders</a>
                </li>
              </ul>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#category-card-1-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="category-card-1-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Category card: Style 1 --&gt;
&lt;div class=&quot;hover-effect-scale&quot;&gt;
  &lt;a class=&quot;d-block bg-body-tertiary rounded p-4 mb-4&quot; href=&quot;#&quot;&gt;
    &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(184 / 258 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/shop/electronics/categories/04.png&quot; class=&quot;hover-effect-target&quot; alt=&quot;Wearable Electronics&quot;&gt;
    &lt;/div&gt;
  &lt;/a&gt;
  &lt;h2 class=&quot;h6 d-flex w-100 pb-2 mb-1&quot;&gt;
    &lt;a class=&quot;animate-underline animate-target d-inline text-truncate&quot; href=&quot;#&quot;&gt;Wearable Electronics&lt;/a&gt;
  &lt;/h2&gt;
  &lt;ul class=&quot;nav flex-column gap-2 mt-n1&quot;&gt;
    &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Smart Watches&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Fitness Trackers&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Smart Glasses&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Clips, Arm &amp; Wristbands&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Voice Recorders&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Category card: Style 2 -->
  <section id="category-card-2" class="cd-section pb-sm-2 mb-5">
    <h4>Category card: Style 2</h4>
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
            <div class="hover-effect-opacity position-relative" style="max-width: 416px">
              <div class="d-flex justify-content-between position-relative z-2 ps-2 ps-xl-3">
                <div class="d-flex flex-column min-w-0 p-3">
                  <h2 class="h5 text-nowrap pt-2 pt-xl-3">For men</h2>
                  <ul class="nav flex-column gap-2 mt-n1">
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                        href="#!">Sports suits</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                        href="#!">Trousers</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                        href="#!">Jackets and coats</a>
                    </li>
                    <li class="d-flex w-100 pt-1">
                      <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                        href="#!">Shirts</a>
                    </li>
                  </ul>
                  <div class="nav hover-effect-target opacity-0 pb-2 pb-xl-3 mt-auto">
                    <a class="nav-link animate-underline text-body-emphasis text-nowrap p-0" href="#!">
                      <span class="animate-target">Shop now</span>
                      <i class="ci-arrow-up-right fs-base ms-1"></i>
                    </a>
                  </div>
                </div>
                <div class="ratio w-100 align-self-end"
                  style="max-width: 220px; --cz-aspect-ratio: calc(305 / 220 * 100%)">
                  <img src="../assets/img/home/fashion/v2/categories/01.png" alt="Image">
                </div>
              </div>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark"
                style="background: linear-gradient(124deg, #e2daec -29.7%, #e4eefd 65.5%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark"
                style="background: linear-gradient(124deg, #37343b -29.7%, #222a36 65.5%)"></span>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#category-card-2-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="category-card-2-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Category card: Style 2 --&gt;
&lt;div class=&quot;hover-effect-opacity position-relative&quot;&gt;
  &lt;div class=&quot;d-flex justify-content-between position-relative z-2 ps-2 ps-xl-3&quot;&gt;
    &lt;div class=&quot;d-flex flex-column min-w-0 p-3&quot;&gt;
      &lt;h2 class=&quot;h5 text-nowrap pt-2 pt-xl-3&quot;&gt;For men&lt;/h2&gt;
      &lt;ul class=&quot;nav flex-column gap-2 mt-n1&quot;&gt;
        &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
          &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Sports suits&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
          &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Trousers&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
          &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Jackets and coats&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;d-flex w-100 pt-1&quot;&gt;
          &lt;a class=&quot;nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0&quot; href=&quot;#&quot;&gt;Shirts&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
      &lt;div class=&quot;nav hover-effect-target opacity-0 pb-2 pb-xl-3 mt-auto&quot;&gt;
        &lt;a class=&quot;nav-link animate-underline text-body-emphasis text-nowrap p-0&quot; href=&quot;#&quot;&gt;
          &lt;span class=&quot;animate-target&quot;&gt;Shop now&lt;/span&gt;
          &lt;i class=&quot;ci-arrow-up-right fs-base ms-1&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio w-100 align-self-end&quot; style=&quot;max-width: 220px; --cz-aspect-ratio: calc(305 / 220 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/home/fashion/v2/categories/01.png&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark&quot; style=&quot;background: linear-gradient(124deg, #e2daec -29.7%, #e4eefd 65.5%)&quot;&gt;&lt;/span&gt;
  &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark&quot; style=&quot;background: linear-gradient(124deg, #37343b -29.7%, #222a36 65.5%)&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Category card: Style 3 -->
  <section id="category-card-3" class="cd-section pb-sm-2 mb-5">
    <h4>Category card: Style 3</h4>
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
            <div
              class="position-relative d-flex justify-content-between align-items-center bg-primary-subtle rounded-5 overflow-hidden ps-2 ps-xl-3"
              style="max-width: 416px">
              <div class="d-flex flex-column pt-4 px-3 pb-3">
                <p class="fs-xs pb-2 mb-1">124 products</p>
                <h2 class="h5 mb-2 mb-xxl-3">Only fresh fish to your table</h2>
                <div class="nav">
                  <a class="nav-link animate-underline stretched-link text-body-emphasis text-nowrap px-0" href="#!">
                    <span class="animate-target">Shop now</span>
                    <i class="ci-chevron-right fs-base ms-1"></i>
                  </a>
                </div>
              </div>
              <div class="ratio w-100 align-self-end rtl-flip"
                style="max-width: 216px; --cz-aspect-ratio: calc(240 / 216 * 100%)">
                <img src="../assets/img/home/grocery/featured/01.png" alt="Image">
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#category-card-3-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="category-card-3-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Category card: Style 3 --&gt;
&lt;div class=&quot;position-relative d-flex justify-content-between align-items-center bg-primary-subtle rounded-5 overflow-hidden ps-2 ps-xl-3&quot;&gt;
  &lt;div class=&quot;d-flex flex-column pt-4 px-3 pb-3&quot;&gt;
    &lt;p class=&quot;fs-xs pb-2 mb-1&quot;&gt;124 products&lt;/p&gt;
    &lt;h2 class=&quot;h5 mb-2 mb-xxl-3&quot;&gt;Only fresh fish to your table&lt;/h2&gt;
    &lt;div class=&quot;nav&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline stretched-link text-body-emphasis text-nowrap px-0&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;animate-target&quot;&gt;Shop now&lt;/span&gt;
        &lt;i class=&quot;ci-chevron-right fs-base ms-1&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
  &lt;div class=&quot;ratio w-100 align-self-end rtl-flip&quot; style=&quot;max-width: 216px; --cz-aspect-ratio: calc(240 / 216 * 100%)&quot;&gt;
    &lt;img src=&quot;assets/img/home/grocery/featured/01.png&quot; alt=&quot;Image&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Category card: Style 4 -->
  <section id="category-card-4" class="cd-section pb-sm-2 mb-5">
    <h4>Category card: Style 4</h4>
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
            <div class="category-card w-100 text-center px-1 px-lg-2 px-xxl-3"
              style="max-width: 216px; min-width: 165px">
              <div class="category-card-body">
                <a class="d-block text-decoration-none" href="#!">
                  <div class="bg-body-tertiary rounded-pill mb-3 mx-auto" style="max-width: 164px">
                    <div class="ratio ratio-1x1">
                      <img src="../assets/img/home/furniture/categories/02.png" class="rounded-pill" alt="Image">
                    </div>
                  </div>
                  <h3 class="category-card-title h6 text-truncate">Living room</h3>
                </a>
                <ul class="category-card-list nav w-100 flex-column gap-1 pt-3">
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0"
                      href="#!">
                      <span class="text-truncate">Bookcases and storage</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0"
                      href="#!">
                      <span class="text-truncate">Coffee tables</span>
                    </a>
                  </li>
                  <li class="w-100">
                    <a class="nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0"
                      href="#!">
                      <span class="text-truncate">Cabinets</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#category-card-4-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="category-card-4-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Category card: Style 4 --&gt;
&lt;div class=&quot;category-card w-100 text-center px-1 px-lg-2 px-xxl-3&quot; style=&quot;min-width: 165px&quot;&gt;
  &lt;div class=&quot;category-card-body&quot;&gt;
    &lt;a class=&quot;d-block text-decoration-none&quot; href=&quot;#&quot;&gt;
      &lt;div class=&quot;bg-body-tertiary rounded-pill mb-3 mx-auto&quot; style=&quot;max-width: 164px&quot;&gt;
        &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load --&gt;
        &lt;div class=&quot;ratio ratio-1x1&quot;&gt;
          &lt;img src=&quot;assets/img/home/furniture/categories/02.png&quot; class=&quot;rounded-pill&quot; alt=&quot;Image&quot;&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;h3 class=&quot;category-card-title h6 text-truncate&quot;&gt;Living room&lt;/h3&gt;
    &lt;/a&gt;
    &lt;ul class=&quot;category-card-list nav w-100 flex-column gap-1 pt-3&quot;&gt;
      &lt;li class=&quot;w-100&quot;&gt;
        &lt;a class=&quot;nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0&quot; href=&quot;#&quot;&gt;
          &lt;span class=&quot;text-truncate&quot;&gt;Bookcases and storage&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;w-100&quot;&gt;
        &lt;a class=&quot;nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0&quot; href=&quot;#&quot;&gt;
          &lt;span class=&quot;text-truncate&quot;&gt;Coffee tables&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;w-100&quot;&gt;
        &lt;a class=&quot;nav-link justify-content-center min-w-0 w-100 fw-normal hover-effect-underline p-0&quot; href=&quot;#&quot;&gt;
          &lt;span class=&quot;text-truncate&quot;&gt;Cabinets&lt;/span&gt;
        &lt;/a&gt;
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


  <!-- Categories list -->
  <section id="categories-list" class="cd-section">
    <h4>Categories list</h4>
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
            <div class="nav flex-column align-items-start gap-3 gap-sm-4">
              <div class="position-relative d-flex min-w-0 align-items-center">
                <div
                  class="d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle"
                  style="width: 56px; height: 56px">
                  <img src="../assets/img/shop/grocery/categories/01.png" width="40" alt="Image">
                </div>
                <div class="min-w-0 ps-3">
                  <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1" href="#!">
                    <span class="animate-target text-truncate">Bakery &amp; bread</span>
                  </a>
                  <div class="fs-xs fw-normal text-body-secondary">230 products</div>
                </div>
              </div>
              <div class="position-relative d-flex min-w-0 align-items-center">
                <div
                  class="d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle"
                  style="width: 56px; height: 56px">
                  <img src="../assets/img/shop/grocery/categories/02.png" width="40" alt="Image">
                </div>
                <div class="min-w-0 ps-3">
                  <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1" href="#!">
                    <span class="animate-target text-truncate">Vegetables</span>
                  </a>
                  <div class="fs-xs fw-normal text-body-secondary">180 products</div>
                </div>
              </div>
              <div class="position-relative d-flex min-w-0 align-items-center">
                <div
                  class="d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle"
                  style="width: 56px; height: 56px">
                  <img src="../assets/img/shop/grocery/categories/03.png" width="40" alt="Image">
                </div>
                <div class="min-w-0 ps-3">
                  <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1" href="#!">
                    <span class="animate-target text-truncate">Fresh fruits</span>
                  </a>
                  <div class="fs-xs fw-normal text-body-secondary">205 products</div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#categories-list-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="categories-list-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Categories list --&gt;
&lt;div class=&quot;nav flex-column align-items-start gap-3 gap-sm-4&quot;&gt;
  &lt;div class=&quot;position-relative d-flex min-w-0 align-items-center&quot;&gt;
    &lt;div class=&quot;d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle&quot; style=&quot;width: 56px; height: 56px&quot;&gt;
      &lt;img src=&quot;assets/img/shop/grocery/categories/01.png&quot; width=&quot;40&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;min-w-0 ps-3&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;animate-target text-truncate&quot;&gt;Bakery &amp; bread&lt;/span&gt;
      &lt;/a&gt;
      &lt;div class=&quot;fs-xs fw-normal text-body-secondary&quot;&gt;230 products&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;position-relative d-flex min-w-0 align-items-center&quot;&gt;
    &lt;div class=&quot;d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle&quot; style=&quot;width: 56px; height: 56px&quot;&gt;
      &lt;img src=&quot;assets/img/shop/grocery/categories/02.png&quot; width=&quot;40&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;min-w-0 ps-3&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;animate-target text-truncate&quot;&gt;Vegetables&lt;/span&gt;
      &lt;/a&gt;
      &lt;div class=&quot;fs-xs fw-normal text-body-secondary&quot;&gt;180 products&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;position-relative d-flex min-w-0 align-items-center&quot;&gt;
    &lt;div class=&quot;d-flex flex-shrink-0 align-items-center justify-content-center bg-body-tertiary rounded-circle&quot; style=&quot;width: 56px; height: 56px&quot;&gt;
      &lt;img src=&quot;assets/img/shop/grocery/categories/03.png&quot; width=&quot;40&quot; alt=&quot;Image&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;min-w-0 ps-3&quot;&gt;
      &lt;a class=&quot;nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1&quot; href=&quot;#&quot;&gt;
        &lt;span class=&quot;animate-target text-truncate&quot;&gt;Fresh fruits&lt;/span&gt;
      &lt;/a&gt;
      &lt;div class=&quot;fs-xs fw-normal text-body-secondary&quot;&gt;205 products&lt;/div&gt;
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
