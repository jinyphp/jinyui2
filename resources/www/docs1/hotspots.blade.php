<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Hotspots</h1>
    <p class="text-body-secondary mb-4">Create an image with interactive hotspots that show hidden description on click
      or hover.</p>
  </section>


  <!-- Example -->
  <section class="cd-section">
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
            <div class="ratio" id="hotspots" style="max-width: 526px; --cz-aspect-ratio: calc(500 / 526 * 100%)">
              <!-- Hide when the direction is set to RTL -->
              <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none-rtl" href="#!"
                style="top: 63.4%; left: 75.8%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus"
                data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
                        <div class="d-flex align-items-start position-relative">
                          <img src="../assets/img/home/furniture/gallery/hotspot01.png" width="64" alt="Image">
                          <div class="nav flex-column pt-2 ps-2 ms-1">
                            <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="#!">Indigo coushy low sofa</a>
                            <div class="h6 mb-0">$856.00</div>
                          </div>
                        </div>
                      ' tabindex="1" aria-label="Hotspot">
                <i class="ci-plus fs-sm"></i>
              </a>
              <!-- Show when the direction is set to RTL -->
              <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none d-flex-rtl"
                href="#!" style="top: 63.4%; right: 18.5%" data-bs-toggle="popover" data-bs-html="true"
                data-bs-trigger="focus" data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
                        <div class="d-flex align-items-start position-relative">
                          <img src="../assets/img/home/furniture/gallery/hotspot01.png" width="64" alt="Image">
                          <div class="nav flex-column pt-2 ps-2 ms-1">
                            <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="#!">Indigo coushy low sofa</a>
                            <div class="h6 mb-0">$856.00</div>
                          </div>
                        </div>
                      ' tabindex="1" aria-label="Hotspot">
                <i class="ci-plus fs-sm"></i>
              </a>
              <!-- Hide when the direction is set to RTL -->
              <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none-rtl" href="#!"
                style="top: 60.2%; left: 15.7%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus"
                data-bs-placement="bottom" data-bs-custom-class="popover-sm" data-bs-content='
                        <div class="d-flex align-items-start position-relative">
                          <img src="../assets/img/home/furniture/gallery/hotspot02.png" width="64" alt="Image">
                          <div class="nav flex-column pt-2 ps-2 ms-1">
                            <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="#!">Ergonomic beige armchair</a>
                            <div class="h6 mb-0">$235.00</div>
                          </div>
                        </div>
                      ' tabindex="1" aria-label="Hotspot">
                <i class="ci-plus fs-sm"></i>
              </a>
              <!-- Show when the direction is set to RTL -->
              <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 d-none d-flex-rtl"
                href="#!" style="top: 60%; right: 78%" data-bs-toggle="popover" data-bs-html="true"
                data-bs-trigger="focus" data-bs-placement="bottom" data-bs-custom-class="popover-sm" data-bs-content='
                        <div class="d-flex align-items-start position-relative">
                          <img src="../assets/img/home/furniture/gallery/hotspot02.png" width="64" alt="Image">
                          <div class="nav flex-column pt-2 ps-2 ms-1">
                            <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="#!">Ergonomic beige armchair</a>
                            <div class="h6 mb-0">$235.00</div>
                          </div>
                        </div>
                      ' tabindex="1" aria-label="Hotspot">
                <i class="ci-plus fs-sm"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 start-50 translate-middle-x"
                href="#!" style="top: 25.8%" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="focus"
                data-bs-placement="top" data-bs-custom-class="popover-sm" data-bs-content='
                        <div class="d-flex align-items-start position-relative">
                          <img src="../assets/img/home/furniture/gallery/hotspot03.png" width="64" alt="Image">
                          <div class="nav flex-column pt-2 ps-2 ms-1">
                            <a class="nav-link hover-effect-underline stretched-link p-0 mb-2" href="#!">Waves modern painting</a>
                            <div class="h6 mb-0">$74.99</div>
                          </div>
                        </div>
                      ' tabindex="1" aria-label="Hotspot">
                <i class="ci-plus fs-sm"></i>
              </a>
              <img src="../assets/img/home/furniture/gallery/01.jpg" class="rounded-5" alt="Image">
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#hotspots-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="hotspots-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Hotspots made of buttons and popovers --&gt;
&lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;div class=&quot;ratio&quot; id=&quot;hotspots&quot; style=&quot;--cz-aspect-ratio: calc(500 / 526 * 100%)&quot;&gt;

  &lt;!-- Hotspot button --&gt;
  &lt;a class=&quot;btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2&quot; href=&quot;#!&quot; style=&quot;top: 63.4%; left: 75.8%&quot; data-bs-toggle=&quot;popover&quot; data-bs-html=&quot;true&quot; data-bs-trigger=&quot;focus&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;popover-sm&quot; data-bs-content='
    &amp;lt;div class=&quot;d-flex align-items-start position-relative&quot;&amp;gt;
      &amp;lt;img src=&quot;assets/img/home/furniture/gallery/hotspot01.png&quot; width=&quot;64&quot; alt=&quot;Image&quot;&amp;gt;
      &amp;lt;div class=&quot;nav flex-column pt-2 ps-2 ms-1&quot;&amp;gt;
        &amp;lt;a class=&quot;nav-link hover-effect-underline stretched-link p-0 mb-2&quot; href=&quot;#&quot;&amp;gt;Indigo coushy low sofa&amp;lt;/a&amp;gt;
        &amp;lt;div class=&quot;h6 mb-0&quot;&amp;gt;$856.00&amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/div&amp;gt;
  ' tabindex=&quot;1&quot; aria-label=&quot;Hotspot&quot;&gt;
    &lt;i class=&quot;ci-plus fs-sm&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;

  &lt;!-- Hotspot button --&gt;
  &lt;a class=&quot;btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2&quot; href=&quot;#!&quot; style=&quot;top: 60.2%; left: 15.7%&quot; data-bs-toggle=&quot;popover&quot; data-bs-html=&quot;true&quot; data-bs-trigger=&quot;focus&quot; data-bs-placement=&quot;bottom&quot; data-bs-custom-class=&quot;popover-sm&quot; data-bs-content='
    &amp;lt;div class=&quot;d-flex align-items-start position-relative&quot;&amp;gt;
      &amp;lt;img src=&quot;assets/img/home/furniture/gallery/hotspot02.png&quot; width=&quot;64&quot; alt=&quot;Image&quot;&amp;gt;
      &amp;lt;div class=&quot;nav flex-column pt-2 ps-2 ms-1&quot;&amp;gt;
        &amp;lt;a class=&quot;nav-link hover-effect-underline stretched-link p-0 mb-2&quot; href=&quot;#&quot;&amp;gt;Ergonomic beige armchair&amp;lt;/a&amp;gt;
        &amp;lt;div class=&quot;h6 mb-0&quot;&amp;gt;$235.00&amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/div&amp;gt;
  ' tabindex=&quot;1&quot; aria-label=&quot;Hotspot&quot;&gt;
    &lt;i class=&quot;ci-plus fs-sm&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;

  &lt;!-- Hotspot button --&gt;
  &lt;a class=&quot;btn btn-icon btn-sm btn-light rounded-circle shadow position-absolute z-2 start-50 translate-middle-x&quot; href=&quot;#!&quot; style=&quot;top: 25.8%&quot; data-bs-toggle=&quot;popover&quot; data-bs-html=&quot;true&quot; data-bs-trigger=&quot;focus&quot; data-bs-placement=&quot;top&quot; data-bs-custom-class=&quot;popover-sm&quot; data-bs-content='
    &amp;lt;div class=&quot;d-flex align-items-start position-relative&quot;&amp;gt;
      &amp;lt;img src=&quot;assets/img/home/furniture/gallery/hotspot03.png&quot; width=&quot;64&quot; alt=&quot;Image&quot;&amp;gt;
      &amp;lt;div class=&quot;nav flex-column pt-2 ps-2 ms-1&quot;&amp;gt;
        &amp;lt;a class=&quot;nav-link hover-effect-underline stretched-link p-0 mb-2&quot; href=&quot;#&quot;&amp;gt;Waves modern painting&amp;lt;/a&amp;gt;
        &amp;lt;div class=&quot;h6 mb-0&quot;&amp;gt;$74.99&amp;lt;/div&amp;gt;
      &amp;lt;/div&amp;gt;
    &amp;lt;/div&amp;gt;
  ' tabindex=&quot;1&quot; aria-label=&quot;Hotspot&quot;&gt;
    &lt;i class=&quot;ci-plus fs-sm&quot;&gt;&lt;/i&gt;
  &lt;/a&gt;

  &lt;!-- Main image --&gt;
  &lt;img src=&quot;assets/img/home/furniture/gallery/01.jpg&quot; class=&quot;rounded-5&quot; alt=&quot;Image&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
