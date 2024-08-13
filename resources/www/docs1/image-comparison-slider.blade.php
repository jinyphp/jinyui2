<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Image comparison slider</h1>
    <p class="text-body-secondary mb-4">JavaScript based slider component that can be used to demonstrate the difference
      between two images.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The image comparison slider functionality depends on a <a class="alert-link"
          href="https://img-comparison-slider.sneas.io/examples.html" target="_blank"
          rel="noreferrer">img-comparison-slider</a> plugin. Ensure that you include links to the plugin's CSS and
        JavaScript files in your document.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/img-comparison-slider/dist/styles.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border mb-md-2"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/img-comparison-slider/dist/index.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Horizontal -->
  <section id="img-comparison-slider-horizontal" class="cd-section pb-sm-2 mb-5">
    <h4>Horizontal</h4>
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
            <img-comparison-slider class="focus-none text-white rounded-4"
              style="--divider-width: .125rem; --divider-color: currentColor">
              <figure slot="first">
                <img src="../assets/img/docs/image-comparison-slider/before.jpg" alt="Image before">
                <figcaption
                  class="badge position-absolute top-50 start-0 translate-middle-y fs-sm bg-white text-dark rounded px-3 py-2 ms-3 ms-sm-4">
                  Before</figcaption>
              </figure>
              <figure slot="second">
                <img src="../assets/img/docs/image-comparison-slider/after.jpg" alt="Image after">
                <figcaption
                  class="badge position-absolute top-50 end-0 translate-middle-y fs-sm bg-white text-dark rounded px-3 py-2 me-3 me-sm-4">
                  After</figcaption>
              </figure>
              <div slot="handle" style="width: 42px">
                <svg class="text-white border border-dark rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                  xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                  </g>
                  <path fill="#222934"
                    d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z">
                  </path>
                </svg>
              </div>
            </img-comparison-slider>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#img-comparison-slider-horizontal-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="img-comparison-slider-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Horizontal (default) image comparison slider --&gt;
&lt;img-comparison-slider class=&quot;focus-none text-white rounded-4&quot; style=&quot;--divider-width: .125rem; --divider-color: currentColor&quot;&gt;
  &lt;figure slot=&quot;first&quot;&gt;
    &lt;img src=&quot;assets/img/docs/image-comparison-slider/before.jpg&quot; alt=&quot;Image before&quot;&gt;
    &lt;figcaption class=&quot;badge position-absolute top-50 start-0 translate-middle-y fs-sm bg-white text-dark rounded px-3 py-2 ms-3 ms-sm-4&quot;&gt;Before&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;figure slot=&quot;second&quot;&gt;
    &lt;img src=&quot;assets/img/docs/image-comparison-slider/after.jpg&quot; alt=&quot;Image after&quot;&gt;
    &lt;figcaption class=&quot;badge position-absolute top-50 end-0 translate-middle-y fs-sm bg-white text-dark rounded px-3 py-2 me-3 me-sm-4&quot;&gt;After&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div slot=&quot;handle&quot; style=&quot;width: 42px&quot;&gt;
    &lt;svg class=&quot;text-white border border-dark rounded-circle&quot; width=&quot;42&quot; height=&quot;42&quot; viewBox=&quot;0 0 42 42&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
      &lt;g&gt;
        &lt;circle fill=&quot;currentColor&quot; cx=&quot;21&quot; cy=&quot;21&quot; r=&quot;21&quot;&gt;&lt;/circle&gt;
      &lt;/g&gt;
      &lt;path fill=&quot;#222934&quot; d=&quot;M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z&quot;&gt;&lt;/path&gt;
    &lt;/svg&gt;
  &lt;/div&gt;
&lt;/img-comparison-slider&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Vertical -->
  <section id="img-comparison-slider-vertical" class="cd-section">
    <h4>Vertical</h4>
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
            <img-comparison-slider direction="vertical" class="focus-none text-white rounded-4"
              style="--divider-width: .125rem; --divider-color: currentColor">
              <figure slot="first">
                <img src="../assets/img/docs/image-comparison-slider/before.jpg" alt="Image before">
                <figcaption
                  class="badge position-absolute top-0 start-50 translate-middle-x fs-sm bg-white text-dark rounded px-3 py-2 mt-3 mt-sm-4">
                  Before</figcaption>
              </figure>
              <figure slot="second">
                <img src="../assets/img/docs/image-comparison-slider/after.jpg" alt="Image after">
                <figcaption
                  class="badge position-absolute bottom-0 start-50 translate-middle-x fs-sm bg-white text-dark rounded px-3 py-2 mb-3 mb-sm-4">
                  After</figcaption>
              </figure>
              <div slot="handle" style="width: 42px">
                <svg class="text-white border border-dark rounded-circle" width="42" height="42" viewBox="0 0 42 42"
                  xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <circle fill="currentColor" cx="21" cy="21" r="21"></circle>
                  </g>
                  <path fill="#222934"
                    d="M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z">
                  </path>
                </svg>
              </div>
            </img-comparison-slider>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#img-comparison-slider-vertical-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="img-comparison-slider-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical image comparison slider --&gt;
&lt;img-comparison-slider direction=&quot;vertical&quot; class=&quot;focus-none text-white rounded-4&quot; style=&quot;--divider-width: .125rem; --divider-color: currentColor&quot;&gt;
  &lt;figure slot=&quot;first&quot;&gt;
    &lt;img src=&quot;assets/img/docs/image-comparison-slider/before.jpg&quot; alt=&quot;Image before&quot;&gt;
    &lt;figcaption class=&quot;badge position-absolute top-0 start-50 translate-middle-x fs-sm bg-white text-dark rounded px-3 py-2 mt-3 mt-sm-4&quot;&gt;Before&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;figure slot=&quot;second&quot;&gt;
    &lt;img src=&quot;assets/img/docs/image-comparison-slider/after.jpg&quot; alt=&quot;Image after&quot;&gt;
    &lt;figcaption class=&quot;badge position-absolute bottom-0 start-50 translate-middle-x fs-sm bg-white text-dark rounded px-3 py-2 mb-3 mb-sm-4&quot;&gt;After&lt;/figcaption&gt;
  &lt;/figure&gt;
  &lt;div slot=&quot;handle&quot; style=&quot;width: 42px&quot;&gt;
    &lt;svg class=&quot;text-white border border-dark rounded-circle&quot; width=&quot;42&quot; height=&quot;42&quot; viewBox=&quot;0 0 42 42&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;&gt;
      &lt;g&gt;
        &lt;circle fill=&quot;currentColor&quot; cx=&quot;21&quot; cy=&quot;21&quot; r=&quot;21&quot;&gt;&lt;/circle&gt;
      &lt;/g&gt;
      &lt;path fill=&quot;#222934&quot; d=&quot;M25.5019 19.7494H15.9147V15.9146L11.1211 20.7081L15.9147 25.5017V21.6669H25.5019V25.5017L30.2955 20.7081L25.5019 15.9146V19.7494Z&quot;&gt;&lt;/path&gt;
    &lt;/svg&gt;
  &lt;/div&gt;
&lt;/img-comparison-slider&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
