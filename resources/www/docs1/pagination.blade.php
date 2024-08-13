<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/pagination/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Pagination</h1>
    <p class="text-body-secondary mb-4">Indicate a series of related content exists across multiple pages.</p>
  </section>


  <!-- Basic example -->
  <section id="pagination-basic" class="cd-section pb-sm-2 mb-5">
    <h4>Basic example</h4>
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
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#!">Prev</a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pagination-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pagination-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pagination basic example --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Prev&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        1
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link px-2 pe-none&quot;&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- With icons -->
  <section id="pagination-icons" class="cd-section pb-sm-2 mb-5">
    <h4>With icons</h4>
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
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-4">
                <li class="page-item disabled">
                  <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Previous page">
                    <i class="ci-chevron-left"></i>
                  </a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Next page">
                    <i class="ci-chevron-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link d-flex align-items-center h-100 px-2" href="#!" aria-label="Previous page">
                    <i class="ci-chevron-left fs-lg me-1 ms-n1"></i>
                    Prev
                  </a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link d-flex align-items-center h-100 px-2" href="#!" aria-label="Next page">
                    Next
                    <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pagination-icons-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pagination-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pagination with prev / next icons only --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt;
      &lt;a class=&quot;page-link d-flex align-items-center h-100 fs-lg px-2&quot; href=&quot;#&quot; aria-label=&quot;Previous page&quot;&gt;
        &lt;i class=&quot;ci-chevron-left&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        1
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link px-2 pe-none&quot;&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link d-flex align-items-center h-100 fs-lg px-2&quot; href=&quot;#&quot; aria-label=&quot;Next page&quot;&gt;
        &lt;i class=&quot;ci-chevron-right&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Pagination with prev / next icons + text --&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt;
      &lt;a class=&quot;page-link d-flex align-items-center h-100 px-2&quot; href=&quot;#&quot; aria-label=&quot;Previous page&quot;&gt;
        &lt;i class=&quot;ci-chevron-left fs-lg me-1 ms-n1&quot;&gt;&lt;/i&gt;
        Prev
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
      &lt;span class=&quot;page-link&quot;&gt;
        1
        &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
      &lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-sm-none&quot;&gt;
      &lt;span class=&quot;page-link px-2 pe-none&quot;&gt;...&lt;/span&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;
      &lt;a class=&quot;page-link d-flex align-items-center h-100 px-2&quot; href=&quot;#&quot; aria-label=&quot;Next page&quot;&gt;
        Next
        &lt;i class=&quot;ci-chevron-right fs-lg ms-1 me-n1&quot;&gt;&lt;/i&gt;
      &lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizing -->
  <section id="pagination-sizing" class="cd-section pb-sm-2 mb-5">
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
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-lg mb-4">
                <li class="page-item disabled">
                  <a class="page-link" href="#!">Prev</a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">Next</a>
                </li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination mb-4">
                <li class="page-item disabled">
                  <a class="page-link" href="#!">Prev</a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">Next</a>
                </li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-sm">
                <li class="page-item disabled">
                  <a class="page-link" href="#!">Prev</a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item d-sm-none">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item d-none d-sm-block">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pagination-sizing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pagination-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large pagination --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Normal pagination --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- Small pagination --&gt;
&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination pagination-sm&quot;&gt;
    &lt;!-- Page links --&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Items per page select -->
  <section id="pagination-select" class="cd-section pb-sm-2 mb-5">
    <h4>Items per page select</h4>
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
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="fs-sm">Show</span>
                <select class="form-select border-0">
                  <option value="6">6</option>
                  <option value="8">8</option>
                  <option value="12" selected>12</option>
                  <option value="16">16</option>
                  <option value="24">24</option>
                </select>
              </div>
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">
                      1
                      <span class="visually-hidden">(current)</span>
                    </span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">2</a>
                  </li>
                  <li class="page-item d-sm-none">
                    <span class="page-link px-2 pe-none">...</span>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#!">3</a>
                  </li>
                  <li class="page-item d-none d-sm-block">
                    <a class="page-link" href="#!">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!">5</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pagination-select-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pagination-select-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pagination with items per page select --&gt;
&lt;div class=&quot;d-flex align-items-center justify-content-between&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;Show&lt;/span&gt;
    &lt;select class=&quot;form-select border-0&quot;&gt;
      &lt;option value=&quot;6&quot;&gt;6&lt;/option&gt;
      &lt;option value=&quot;8&quot;&gt;8&lt;/option&gt;
      &lt;option value=&quot;12&quot; selected&gt;12&lt;/option&gt;
      &lt;option value=&quot;16&quot;&gt;16&lt;/option&gt;
      &lt;option value=&quot;24&quot;&gt;24&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
        &lt;span class=&quot;page-link&quot;&gt;
          1
          &lt;span class=&quot;visually-hidden&quot;&gt;(current)&lt;/span&gt;
        &lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item d-sm-none&quot;&gt;
        &lt;span class=&quot;page-link px-2 pe-none&quot;&gt;...&lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item d-none d-sm-block&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Load more (One-page) -->
  <section id="pagination-load-more" class="cd-section">
    <h4>Load more (One-page)</h4>
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
          <div id="preview-5" class="tab-pane pt-4 pb-1 mt-3 fade show active" role="tabpanel">
            <div class="d-flex flex-column align-items-center" style="max-width: 300px;">
              <div class="fs-sm text-center mb-3">Showing 16 from 48</div>
              <div class="progress w-100 mb-3" role="progressbar" aria-label="Items shown" aria-valuenow="30"
                aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 30%"></div>
                <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 30%"></div>
              </div>
              <button type="button"
                class="btn btn-lg btn-link text-body-emphasis text-decoration-none animate-underline">
                <span class="animate-target">Show more</span>
                <i class="ci-chevron-down fs-lg ms-2"></i>
              </button>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-icons-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Load more (One-page) pagination markup example --&gt;
&lt;div class=&quot;d-flex flex-column align-items-center&quot; style=&quot;max-width: 300px;&quot;&gt;
  &lt;div class=&quot;fs-sm text-center mb-3&quot;&gt;Showing 16 from 48&lt;/div&gt;
  &lt;div class=&quot;progress w-100 mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Items shown&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
    &lt;div class=&quot;progress-bar bg-dark rounded-pill d-none-dark&quot; style=&quot;width: 30%&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;progress-bar bg-light rounded-pill d-none d-block-dark&quot; style=&quot;width: 30%&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-link text-body-emphasis text-decoration-none animate-underline&quot;&gt;
    &lt;span class=&quot;animate-target&quot;&gt;Show more&lt;/span&gt;
    &lt;i class=&quot;ci-chevron-down fs-lg ms-2&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
