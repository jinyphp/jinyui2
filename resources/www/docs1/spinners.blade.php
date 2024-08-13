<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/spinners/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Spinners</h1>
    <p class="text-body-secondary mb-4">Indicate the loading state of a component or page.</p>
  </section>


  <!-- Border spinner -->
  <section id="spinners-border" class="cd-section pb-sm-2 mb-5">
    <h4>Border spinner</h4>
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
            <div class="spinner-border m-2" role="status"><span class="visually-hidden">Loading...</span></div>
            <div class="spinner-border text-body-tertiary m-2" role="status"><span
                class="visually-hidden">Loading...</span></div>
            <div class="spinner-border text-primary m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-secondary m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-success m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-danger m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-warning m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-info m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="d-inline-block bg-dark ms-2">
              <div class="spinner-border text-light my-2 mx-3" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
            <div class="d-inline-block bg-light">
              <div class="spinner-border text-dark my-2 mx-3" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#spinners-border-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="spinners-border-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default spinner --&gt;
&lt;div class=&quot;spinner-border&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Gray spinner --&gt;
&lt;div class=&quot;spinner-border text-body-tertiary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Primary spinner --&gt;
&lt;div class=&quot;spinner-border text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Secondary spinner --&gt;
&lt;div class=&quot;spinner-border text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Success spinner --&gt;
&lt;div class=&quot;spinner-border text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Danger spinner --&gt;
&lt;div class=&quot;spinner-border text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Warning spinner --&gt;
&lt;div class=&quot;spinner-border text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Info spinner --&gt;
&lt;div class=&quot;spinner-border text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Light spinner --&gt;
&lt;div class=&quot;spinner-border text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Dark spinner --&gt;
&lt;div class=&quot;spinner-border text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Growing spinner -->
  <section id="spinners-growing" class="cd-section pb-sm-2 mb-5">
    <h4>Growing spinner</h4>
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
            <div class="spinner-grow m-2" role="status"><span class="visually-hidden">Loading...</span></div>
            <div class="spinner-grow text-body-tertiary m-2" role="status"><span
                class="visually-hidden">Loading...</span></div>
            <div class="spinner-grow text-primary m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning m-2" role="status"><span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-info m-2" role="status"><span class="visually-hidden">Loading...</span></div>
            <div class="d-inline-block bg-dark ms-2">
              <div class="spinner-grow text-light my-2 mx-3" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
            <div class="d-inline-block bg-light">
              <div class="spinner-grow text-dark my-2 mx-3" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#spinners-growing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="spinners-growing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default spinner --&gt;
&lt;div class=&quot;spinner-grow&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Gray spinner --&gt;
&lt;div class=&quot;spinner-grow text-body-tertiary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Primary spinner --&gt;
&lt;div class=&quot;spinner-grow text-primary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Secondary spinner --&gt;
&lt;div class=&quot;spinner-grow text-secondary&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Success spinner --&gt;
&lt;div class=&quot;spinner-grow text-success&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Danger spinner --&gt;
&lt;div class=&quot;spinner-grow text-danger&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Warning spinner --&gt;
&lt;div class=&quot;spinner-grow text-warning&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Info spinner --&gt;
&lt;div class=&quot;spinner-grow text-info&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Light spinner --&gt;
&lt;div class=&quot;spinner-grow text-light&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Dark spinner --&gt;
&lt;div class=&quot;spinner-grow text-dark&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizing -->
  <section id="spinners-sizing" class="cd-section pb-sm-2 mb-5">
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
            <div class="d-inline-block align-middle me-2">
              <div class="spinner-border spinner-border-sm m-2" role="status"><span
                  class="visually-hidden">Loading...</span></div>
              <div class="spinner-grow spinner-grow-sm m-2" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
            <div class="d-inline-block align-middle">
              <div class="spinner-border m-2" style="width: 3rem; height: 3rem;" role="status"><span
                  class="visually-hidden">Loading...</span></div>
              <div class="spinner-grow m-2" style="width: 3rem; height: 3rem;" role="status"><span
                  class="visually-hidden">Loading...</span></div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#spinners-sizing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="spinners-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Small border spinner --&gt;
&lt;div class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Small growing spinner --&gt;
&lt;div class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Custom size border spinner --&gt;
&lt;div class=&quot;spinner-border&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Custom size growing spinner --&gt;
&lt;div class=&quot;spinner-grow&quot; style=&quot;width: 3rem; height: 3rem;&quot; role=&quot;status&quot;&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Inside button -->
  <section id="spinners-button" class="cd-section">
    <h4>Inside button</h4>
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
          <div id="preview-4" class="tab-pane pt-4 pb-1 mt-3 fade show active" role="tabpanel">
            <button type="button" class="btn btn-primary btn-icon pe-none me-1 mb-3">
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button type="button" class="btn btn-primary pe-none me-3 mb-3">
              <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
              Loading...
            </button>
            <button type="button" class="btn btn-outline-secondary btn-icon pe-none me-1 mb-3">
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden">Loading...</span>
            </button>
            <button type="button" class="btn btn-outline-secondary pe-none mb-3">
              <span class="spinner-grow spinner-grow-sm me-2" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#spinners-button-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="spinners-button-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button with border spinner --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-icon pe-none&quot;&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Button with border spinner and text --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary pe-none&quot;&gt;
  &lt;span class=&quot;spinner-border spinner-border-sm me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;

&lt;!-- Button with growing spinner --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary btn-icon pe-none&quot;&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  &lt;span class=&quot;visually-hidden&quot;&gt;Loading...&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Button with growing spinner and text --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary pe-none&quot;&gt;
  &lt;span class=&quot;spinner-grow spinner-grow-sm me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
  Loading...
&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
