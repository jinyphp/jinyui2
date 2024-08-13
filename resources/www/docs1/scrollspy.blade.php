<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/scrollspy/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Scrollspy</h1>
    <p class="text-body-secondary mb-4">Automatically update navigation or list group components based on scroll
      position to indicate which link is currently active in the viewport.</p>
  </section>


  <!-- Navbar -->
  <section id="scrollspy-navbar" class="cd-section pb-sm-2 mb-5">
    <h4>Navbar</h4>
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
            <nav id="scrollspyNavbar" class="navbar navbar-expand-md bg-body-tertiary rounded px-3 pe-md-2 mb-4">
              <a class="navbar-brand" href="#">Cartzilla</a>
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#scrollspyNavbarNav" aria-controls="scrollspyNavbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="scrollspyNavbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link fs-sm" href="#scrollspySection1">First</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-sm" href="#scrollspySection2">Second</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link fs-sm dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                      aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu dropdown-menu-end" style="--cz-dropdown-min-width: 10rem;">
                      <li><a class="dropdown-item" href="#scrollspySection3">Third</a></li>
                      <li><a class="dropdown-item" href="#scrollspySection4">Fourth</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#scrollspySection5">Fifth</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="overflow-auto px-3" data-bs-spy="scroll" data-bs-target="#scrollspyNavbar"
              data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" style="max-height: 130px">
              <div id="scrollspySection1" class="pb-3">
                <h5>First heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspySection2" class="pb-3">
                <h5>Second heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspySection3" class="pb-3">
                <h5>Third heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspySection4" class="pb-3">
                <h5>Fourth heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspySection5">
                <h5>Fifth heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollspy-navbar-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollspy-navbar-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Navbar with scrollspy enabled navigation --&gt;
&lt;nav id=&quot;scrollspyNavbar&quot; class=&quot;navbar navbar-expand-md bg-body-tertiary rounded px-3 pe-md-2 mb-4&quot;&gt;
  &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Cartzilla&lt;/a&gt;
  &lt;button type=&quot;button&quot; class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#scrollspyNavbarNav&quot; aria-controls=&quot;scrollspyNavbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;scrollspyNavbarNav&quot;&gt;
    &lt;ul class=&quot;navbar-nav ms-auto&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#scrollspySection1&quot;&gt;First&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link fs-sm&quot; href=&quot;#scrollspySection2&quot;&gt;Second&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item dropdown&quot;&gt;
        &lt;a class=&quot;nav-link fs-sm dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
        &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot; style=&quot;--cz-dropdown-min-width: 10rem;&quot;&gt;
          &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspySection3&quot;&gt;Third&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspySection4&quot;&gt;Fourth&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#scrollspySection5&quot;&gt;Fifth&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/nav&gt;

&lt;!-- Scrollable container with anchors --&gt;
&lt;div class=&quot;overflow-auto px-3&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#scrollspyNavbar&quot; data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; style=&quot;max-height: 120px&quot;&gt;
  &lt;div id=&quot;scrollspySection1&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;First heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspySection2&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;Second heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspySection3&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;Third heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspySection4&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;Fourth heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspySection5&quot;&gt;
    &lt;h5&gt;Fifth heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- List group with nested nav -->
  <section id="scrollspy-nested" class="cd-section pb-sm-2 mb-5">
    <h4>List group with nested nav</h4>
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
            <div class="row">
              <div class="col-md-3">
                <button type="button" class="btn btn-outline-secondary w-100 d-md-none" data-bs-toggle="collapse"
                  data-bs-target="#navCollapse" aria-expanded="false" aria-controls="navCollapse">
                  <i class="ci-menu fs-base ms-n1 me-2"></i>
                  Navigation
                </button>
                <div class="collapse d-md-block" id="navCollapse">
                  <nav id="scrollspyNestedNav" class="list-group list-group-borderless pt-3 pt-md-0">
                    <a class="list-group-item list-group-item-action" href="#item-1">Item 1</a>
                    <ul class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                      <li class="nav-item">
                        <a class="nav-link fw-normal" href="#item-1-1">Item 1-1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw-normal" href="#item-1-2">Item 1-2</a>
                      </li>
                    </ul>
                    <a class="list-group-item list-group-item-action" href="#item-2">Item 2</a>
                    <a class="list-group-item list-group-item-action" href="#item-3">Item 3</a>
                    <ul class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
                      <li class="nav-item">
                        <a class="nav-link fw-normal" href="#item-3-1">Item 3-1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw-normal" href="#item-3-2">Item 3-2</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-md-9 pt-4 pt-md-0">
                <div class="overflow-auto pe-2 px-md-3" data-bs-spy="scroll" data-bs-target="#scrollspyNestedNav"
                  data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" style="height: 360px">
                  <div id="item-1" class="pb-3">
                    <h4>Item 1</h4>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-1-1" class="pb-3">
                    <h5>Item 1-1</h5>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-1-2" class="pb-3">
                    <h5>Item 1-2</h5>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-2" class="pb-3">
                    <h4>Item 2</h4>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-3" class="pb-3">
                    <h4>Item 3</h4>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-3-1" class="pb-3">
                    <h5>Item 3-1</h5>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                  <div id="item-3-2">
                    <h5>Item 3-2</h5>
                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page,
                      the appropriate navigation link is highlighted. It's repeated throughout the component example. We
                      keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                    <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that may be
                      visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollspy-nested-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollspy-nested-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-3&quot;&gt;

    &lt;!-- Collapse toggle button shown on screens smaller 768px (md) --&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary w-100 d-md-none&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navCollapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;navCollapse&quot;&gt;
      &lt;i class=&quot;ci-menu fs-base ms-n1 me-2&quot;&gt;&lt;/i&gt;
      Navigation
    &lt;/button&gt;

    &lt;!-- Collapse --&gt;
    &lt;div class=&quot;collapse d-md-block&quot; id=&quot;navCollapse&quot;&gt;

      &lt;!-- List group with nested underline navs --&gt;
      &lt;nav id=&quot;scrollspyNestedNav&quot; class=&quot;list-group list-group-borderless pt-3 pt-md-0&quot;&gt;
        &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#item-1&quot;&gt;Item 1&lt;/a&gt;
        &lt;ul class=&quot;nav nav-underline flex-column border-start ms-2 my-2&quot; style=&quot;gap: .25rem;&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link fw-normal&quot; href=&quot;#item-1-1&quot;&gt;Item 1-1&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link fw-normal&quot; href=&quot;#item-1-2&quot;&gt;Item 1-2&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
        &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#item-2&quot;&gt;Item 2&lt;/a&gt;
        &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#item-3&quot;&gt;Item 3&lt;/a&gt;
        &lt;ul class=&quot;nav nav-underline flex-column border-start ms-2 my-2&quot; style=&quot;gap: .25rem;&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link fw-normal&quot; href=&quot;#item-3-1&quot;&gt;Item 3-1&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link fw-normal&quot; href=&quot;#item-3-2&quot;&gt;Item 3-2&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/nav&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Scrollable container with anchors --&gt;
  &lt;div class=&quot;col-md-9 pt-4 pt-md-0&quot;&gt;
    &lt;div class=&quot;overflow-auto pe-2 px-md-3&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#scrollspyNestedNav&quot;  data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; style=&quot;height: 360px&quot;&gt;
      &lt;div id=&quot;item-1&quot; class=&quot;pb-3&quot;&gt;
        &lt;h4&gt;Item 1&lt;/h4&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-1-1&quot; class=&quot;pb-3&quot;&gt;
        &lt;h5&gt;Item 1-1&lt;/h5&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-1-2&quot; class=&quot;pb-3&quot;&gt;
        &lt;h5&gt;Item 1-2&lt;/h5&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-2&quot; class=&quot;pb-3&quot;&gt;
        &lt;h4&gt;Item 2&lt;/h4&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3&quot; class=&quot;pb-3&quot;&gt;
        &lt;h4&gt;Item 3&lt;/h4&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3-1&quot; class=&quot;pb-3&quot;&gt;
        &lt;h5&gt;Item 3-1&lt;/h5&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id=&quot;item-3-2&quot;&gt;
        &lt;h5&gt;Item 3-2&lt;/h5&gt;
        &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
        &lt;p&gt;Keep in mind that the JavaScript plugin tries to pick the right element among all that may be visible. Multiple visible scrollspy targets at the same time may cause some issues.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Tabs -->
  <section id="scrollspy-tabs" class="cd-section pb-sm-2 mb-5">
    <h4>Tabs</h4>
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
            <ul id="scrollspyTabs" class="nav nav-tabs mb-4" style="max-width: 350px">
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyTabsSection1">First</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyTabsSection2">Second</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyTabsSection3">Third</a>
              </li>
            </ul>
            <div class="overflow-auto px-2" data-bs-spy="scroll" data-bs-target="#scrollspyTabs"
              data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" style="max-height: 130px">
              <div id="scrollspyTabsSection1" class="pb-3">
                <h5>First heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspyTabsSection2" class="pb-3">
                <h5>Second heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspyTabsSection3">
                <h5>Third heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollspy-tabs-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollspy-tabs-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Scrollspy enabled nav tabs --&gt;
&lt;ul id=&quot;scrollspyTabs&quot; class=&quot;nav nav-tabs mb-4&quot; style=&quot;max-width: 350px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyTabsSection1&quot;&gt;First&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyTabsSection2&quot;&gt;Second&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyTabsSection3&quot;&gt;Third&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Scrollable container with anchors --&gt;
&lt;div class=&quot;overflow-auto px-2&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#scrollspyTabs&quot; data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; style=&quot;max-height: 120px&quot;&gt;
  &lt;div id=&quot;scrollspyTabsSection1&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;First heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspyTabsSection2&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;Second heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspyTabsSection3&quot;&gt;
    &lt;h5&gt;Third heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Pills -->
  <section id="scrollspy-pills" class="cd-section">
    <h4>Pills</h4>
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
            <ul id="scrollspyPills" class="nav nav-pills mb-4">
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPillsSection1">First</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPillsSection2">Second</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPillsSection3">Third</a>
              </li>
            </ul>
            <div class="overflow-auto px-2" data-bs-spy="scroll" data-bs-target="#scrollspyPills"
              data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" style="max-height: 130px">
              <div id="scrollspyPillsSection1" class="pb-3">
                <h5>First heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspyPillsSection2" class="pb-3">
                <h5>Second heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
              <div id="scrollspyPillsSection3">
                <h5>Third heading</h5>
                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the
                  appropriate navigation link is highlighted. It's repeated throughout the component example. We keep
                  adding some more example copy here to emphasize the scrolling and highlighting.</p>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollspy-pills-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollspy-pills-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Scrollspy enabled nav pills --&gt;
&lt;ul id=&quot;scrollspyPills&quot; class=&quot;nav nav-pills mb-4&quot;&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyPillsSection1&quot;&gt;First&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyPillsSection2&quot;&gt;Second&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; &gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#scrollspyPillsSection3&quot;&gt;Third&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Scrollable container with anchors --&gt;
&lt;div class=&quot;overflow-auto px-2&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#scrollspyPills&quot; data-bs-root-margin=&quot;0px 0px -40%&quot; data-bs-smooth-scroll=&quot;true&quot; style=&quot;max-height: 120px&quot;&gt;
  &lt;div id=&quot;scrollspyPillsSection1&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;First heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspyPillsSection2&quot; class=&quot;pb-3&quot;&gt;
    &lt;h5&gt;Second heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div id=&quot;scrollspyPillsSection3&quot;&gt;
    &lt;h5&gt;Third heading&lt;/h5&gt;
    &lt;p&gt;This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
