<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/navs-tabs/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Nav links</h1>
    <p class="text-body-secondary mb-4">Horizontally or vertically stacked list links that provide a foundation for
      building all types of navigation components.</p>
  </section>


  <!-- Basic example -->
  <section id="nav-links-basic" class="cd-section pb-sm-2 mb-5">
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
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#nav-links-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="nav-links-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic nav links --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Underline effect -->
  <section id="nav-links-underline" class="cd-section pb-sm-2 mb-5">
    <h4>Underline effect</h4>
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
            <nav class="navbar navbar-expand p-0">
              <ul class="navbar-nav flex-wrap">
                <li class="nav-item">
                  <a class="nav-link fs-sm active" aria-current="page" href="#!">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-sm" href="#!">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-sm" href="#!">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-sm disabled">Disabled</a>
                </li>
              </ul>
            </nav>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#nav-links-underline-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="nav-links-underline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- All nav links inside .navbar automatically receive underline effect. --&gt;
&lt;nav class=&quot;navbar navbar-expand p-0&quot;&gt;
  &lt;ul class=&quot;navbar-nav flex-wrap&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm disabled&quot;&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Vertical alignment -->
  <section id="nav-links-vertical" class="cd-section pb-sm-2 mb-5">
    <h4>Vertical alignment</h4>
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
            <div class="d-flex gap-5">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#!">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <nav class="navbar p-0">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link fs-sm active" aria-current="page" href="#!">
                      Active
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-sm" href="#!">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-sm" href="#!">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-sm disabled">Disabled</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#nav-links-vertical-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="nav-links-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertically aligned basic nav links --&gt;
&lt;ul class=&quot;nav flex-column&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Vertically aligned underline nav links (inside navbar) --&gt;
&lt;nav class=&quot;navbar p-0&quot;&gt;
  &lt;ul class=&quot;navbar-nav&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;
        Active
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm disabled&quot;&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- With icons and dropdowns -->
  <section id="nav-links-icons" class="cd-section pb-sm-2 mb-5">
    <h4>With icons and dropdowns</h4>
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
            <ul class="nav mb-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">
                  <i class="ci-home opacity-75 me-2"></i>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">
                  <i class="ci-user opacity-75 me-2"></i>
                  Profile
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#!" role="button"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <nav class="navbar navbar-expand p-0">
              <ul class="navbar-nav flex-wrap">
                <li class="nav-item">
                  <a class="nav-link fs-sm active" aria-current="page" href="#!">
                    <i class="ci-home opacity-75 me-2"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-sm" href="#!">
                    <i class="ci-user opacity-75 me-2"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link fs-sm dropdown-toggle" data-bs-toggle="dropdown" href="#!" role="button"
                    aria-expanded="false">Dropdown</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#!">Action</a></li>
                    <li><a class="dropdown-item" href="#!">Another action</a></li>
                    <li><a class="dropdown-item" href="#!">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#nav-links-icons-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="nav-links-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic nav links example with icons and dropdown --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-home opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-user opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Underline nav links (inside navbar) example with icons and dropdown --&gt;
&lt;nav class=&quot;navbar navbar-expand p-0&quot;&gt;
  &lt;ul class=&quot;navbar-nav flex-wrap&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;
        &lt;i class=&quot;ci-home opacity-75 me-2&quot;&gt;&lt;/i&gt;
        Home
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#&quot;&gt;
        &lt;i class=&quot;ci-user opacity-75 me-2&quot;&gt;&lt;/i&gt;
        Profile
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item dropdown&quot;&gt;
      &lt;a class=&quot;nav-link fs-sm dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
      &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
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
  <section id="nav-links-sizing" class="cd-section">
    <h4>Sizing</h4>
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
            <ul class="nav mb-2">
              <li class="nav-item">
                <a class="nav-link fs-xl active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-xl" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-xl" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-xl disabled">Disabled</a>
              </li>
            </ul>
            <ul class="nav mb-2">
              <li class="nav-item">
                <a class="nav-link fs-lg active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-lg" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-lg" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-lg disabled">Disabled</a>
              </li>
            </ul>
            <ul class="nav mb-2">
              <li class="nav-item">
                <a class="nav-link fs-base active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-base" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-base" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-base disabled">Disabled</a>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#nav-links-sizing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="nav-links-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Use .fs- (font-size) utility classes to control the size of nav links. --&gt;

&lt;!-- Extra large (.fs-xl) --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-xl active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-xl&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-xl&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-xl disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Large (.fs-lg) --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-lg active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-lg&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-lg&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-lg disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Normal (.fs-base) --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-base active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-base&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-base&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link fs-base disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Small (default) --&gt;
&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
