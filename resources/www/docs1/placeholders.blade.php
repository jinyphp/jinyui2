<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/placeholders/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Placeholders</h1>
    <p class="text-body-secondary mb-4">Use placeholders for your components or pages to indicate something may still be
      loading.</p>
  </section>


  <!-- Width -->
  <section id="placeholders-width" class="cd-section pb-sm-2 mb-5">
    <h4>Width</h4>
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
            <span class="placeholder col-6"></span>
            <span class="placeholder w-75"></span>
            <span class="placeholder" style="width: 33%;"></span>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#placeholders-width-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="placeholders-width-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!--Width through col-* class --&gt;
&lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;

&lt;!--Width through w-* class --&gt;
&lt;span class=&quot;placeholder w-75&quot;&gt;&lt;/span&gt;

&lt;!--Width through style attribute --&gt;
&lt;span class=&quot;placeholder&quot; style=&quot;width: 33%;&quot;&gt;&lt;/span&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Color -->
  <section id="placeholders-color" class="cd-section pb-sm-2 mb-5">
    <h4>Color</h4>
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
            <span class="placeholder col-12"></span>
            <span class="placeholder col-12 bg-primary"></span>
            <span class="placeholder col-12 bg-success"></span>
            <span class="placeholder col-12 bg-danger"></span>
            <span class="placeholder col-12 bg-warning"></span>
            <span class="placeholder col-12 bg-info"></span>
            <div class="bg-dark p-2 my-2">
              <span class="placeholder col-12 bg-light"></span>
            </div>
            <div class="bg-light p-2 mt-2">
              <span class="placeholder col-12 bg-dark"></span>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#placeholders-color-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="placeholders-color-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default --&gt;
&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;

&lt;!-- Primary --&gt;
&lt;span class=&quot;placeholder col-12 bg-primary&quot;&gt;&lt;/span&gt;

&lt;!-- Success --&gt;
&lt;span class=&quot;placeholder col-12 bg-success&quot;&gt;&lt;/span&gt;

&lt;!-- Danger --&gt;
&lt;span class=&quot;placeholder col-12 bg-danger&quot;&gt;&lt;/span&gt;

&lt;!-- Warning --&gt;
&lt;span class=&quot;placeholder col-12 bg-warning&quot;&gt;&lt;/span&gt;

&lt;!-- Info --&gt;
&lt;span class=&quot;placeholder col-12 bg-info&quot;&gt;&lt;/span&gt;

&lt;!-- Light --&gt;
&lt;span class=&quot;placeholder col-12 bg-light&quot;&gt;&lt;/span&gt;

&lt;!-- Dark --&gt;
&lt;span class=&quot;placeholder col-12 bg-dark&quot;&gt;&lt;/span&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizing -->
  <section id="placeholders-sizing" class="cd-section pb-sm-2 mb-5">
    <h4>Sizing</h4>
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
            <span class="placeholder col-12 placeholder-lg"></span>
            <span class="placeholder col-12"></span>
            <span class="placeholder col-12 placeholder-sm"></span>
            <span class="placeholder col-12 placeholder-xs"></span>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#placeholders-sizing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="placeholders-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large --&gt;
&lt;span class=&quot;placeholder col-12 placeholder-lg&quot;&gt;&lt;/span&gt;

&lt;!-- Normal --&gt;
&lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;

&lt;!-- Small --&gt;
&lt;span class=&quot;placeholder col-12 placeholder-sm&quot;&gt;&lt;/span&gt;

&lt;!-- Extra small --&gt;
&lt;span class=&quot;placeholder col-12 placeholder-xs&quot;&gt;&lt;/span&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Animation -->
  <section id="placeholders-animation" class="cd-section pb-sm-2 mb-5">
    <h4>Animation</h4>
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
            <p class="placeholder-glow mb-3">
              <span class="placeholder col-12"></span>
            </p>
            <p class="placeholder-wave mb-0">
              <span class="placeholder col-12"></span>
            </p>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#placeholders-animation-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="placeholders-animation-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Glow animation --&gt;
&lt;p class=&quot;placeholder-glow&quot;&gt;
  &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
&lt;/p&gt;

&lt;!-- Wave animation --&gt;
&lt;p class=&quot;placeholder-wave&quot;&gt;
  &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
&lt;/p&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Loading card example -->
  <section id="placeholders-loading-card" class="cd-section">
    <h4>Loading card example</h4>
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
            <div class="card" aria-hidden="true" style="max-width: 300px;">
              <div class="position-relative placeholder-wave">
                <div class="card-img-top placeholder ratio ratio-16x9"></div>
                <i class="ci-image position-absolute top-50 start-50 translate-middle fs-1 opacity-40"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                  <span class="visually-hidden">Card title</span>
                </h5>
                <p class="card-text placeholder-glow">
                  <span class="placeholder placeholder-sm col-7 me-2"></span>
                  <span class="placeholder placeholder-sm col-4"></span>
                  <span class="placeholder placeholder-sm col-4 me-2"></span>
                  <span class="placeholder placeholder-sm col-6"></span>
                  <span class="placeholder placeholder-sm col-8"></span>
                </p>
                <a class="btn btn-primary disabled placeholder col-6 placeholder-wave" tabindex="-1">&nbsp;</a>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#placeholders-loading-card-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="placeholders-loading-card-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Loading card example --&gt;
&lt;div class=&quot;card&quot; aria-hidden=&quot;true&quot; style=&quot;max-width: 300px;&quot;&gt;
  &lt;div class=&quot;position-relative placeholder-wave&quot;&gt;
    &lt;div class=&quot;card-img-top placeholder ratio ratio-16x9&quot;&gt;&lt;/div&gt;
    &lt;i class=&quot;ci-image position-absolute top-50 start-50 translate-middle fs-1 opacity-40&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title placeholder-glow&quot;&gt;
      &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Card title&lt;/span&gt;
    &lt;/h5&gt;
    &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
      &lt;span class=&quot;placeholder placeholder-sm col-7 me-2&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;placeholder placeholder-sm col-4&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;placeholder placeholder-sm col-4 me-2&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;placeholder placeholder-sm col-6&quot;&gt;&lt;/span&gt;
      &lt;span class=&quot;placeholder placeholder-sm col-8&quot;&gt;&lt;/span&gt;
    &lt;/p&gt;
    &lt;a class=&quot;btn btn-primary disabled placeholder col-6 placeholder-wave&quot; tabindex=&quot;-1&quot;&gt;&amp;nbsp;&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
