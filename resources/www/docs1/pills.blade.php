<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#pills" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Pills</h1>
    <p class="text-body-secondary mb-4">Button-like navigation component.</p>
  </section>


  <!-- Basic example -->
  <section id="pills-basic" class="cd-section pb-sm-2 mb-5">
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
            <ul class="nav nav-pills">
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
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav pills --&gt;
&lt;ul class=&quot;nav nav-pills&quot;&gt;
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
    &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Rounded pills -->
  <section id="pills-rounded" class="cd-section pb-sm-2 mb-5">
    <h4>Rounded pills</h4>
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
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link rounded active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link rounded" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link rounded" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link rounded disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-rounded-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-rounded-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pills navigation --&gt;
&lt;ul class=&quot;nav nav-pills&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link rounded active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link rounded&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link rounded&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link rounded disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Fill and justify -->
  <section id="pills-fill" class="cd-section pb-sm-2 mb-5">
    <h4>Fill and justify</h4>
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
            <ul class="nav nav-pills nav-fill mb-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-nowrap" href="#!">Much longer nav link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <ul class="nav nav-pills nav-justified">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-nowrap" href="#!">Much longer nav link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-fill-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-fill-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pills: Fill --&gt;
&lt;ul class=&quot;nav nav-pills nav-fill&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link text-nowrap&quot; href=&quot;#&quot;&gt;Much longer nav link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Pills: Justified --&gt;
&lt;ul class=&quot;nav nav-pills nav-justified&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link text-nowrap&quot; href=&quot;#&quot;&gt;Much longer nav link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Pills with dropdowns -->
  <section id="pills-dropdowns" class="cd-section pb-sm-2 mb-5">
    <h4>Pills with dropdowns</h4>
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
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#!">Active</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-dropdowns-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-dropdowns-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pills with dropdowns --&gt;
&lt;ul class=&quot;nav nav-pills&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Vertical pills -->
  <section id="pills-vertical" class="cd-section pb-sm-2 mb-5">
    <h4>Vertical pills</h4>
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
            <ul class="nav nav-pills flex-column" style="max-width: 200px;">
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
                <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-vertical-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical plills --&gt;
&lt;ul class=&quot;nav nav-pills flex-column&quot;&gt;
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
    &lt;a class=&quot;nav-link disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Tabs-like behavior -->
  <section id="pills-tabs" class="cd-section">
    <h4>Tabs-like behavior</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-6" role="tab"
              aria-controls="preview-6" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6" role="tab"
              aria-controls="html-6" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-6" class="tab-pane pt-4 pb-1 mt-3 fade show active" role="tabpanel">
            <ul class="nav nav-pills mb-3" role="tablist">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                  <i class="ci-home me-2 ms-n1"></i>
                  Home
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                  type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                  <i class="ci-user me-2 ms-n1"></i>
                  Profile
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages"
                  type="button" role="tab" aria-controls="pills-messages" aria-selected="false">
                  <i class="ci-message-square me-2 ms-n1"></i>
                  Messages
                </button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                This is some placeholder content the <strong>Messages tab's</strong> associated content. Clicking
                another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                control the content visibility and styling. You can use it with tabs, pills, and any other
                <code>.nav-</code>powered navigation.
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#pills-tabs-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="pills-tabs-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav pills --&gt;
&lt;ul class=&quot;nav nav-pills mb-3&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; id=&quot;pills-home-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home&quot; aria-selected=&quot;true&quot;&gt;
      &lt;i class=&quot;ci-home me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button class=&quot;nav-link&quot; id=&quot;pills-profile-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-profile&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;ci-user me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button class=&quot;nav-link&quot; id=&quot;pills-messages-tab&quot; data-bs-toggle=&quot;pill&quot; data-bs-target=&quot;#pills-messages&quot; type=&quot;button&quot; role=&quot;tab&quot; aria-controls=&quot;pills-messages&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;ci-message-square me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Messages
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Pills content --&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-tab&quot;&gt;
    This is some placeholder content the &lt;strong&gt;Home tab's&lt;/strong&gt; associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &lt;code&gt;.nav-&lt;/code&gt;powered navigation.
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-tab&quot;&gt;
    This is some placeholder content the &lt;strong&gt;Profile tab's&lt;/strong&gt; associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &lt;code&gt;.nav-&lt;/code&gt;powered navigation.
  &lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-messages&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-messages-tab&quot;&gt;
    This is some placeholder content the &lt;strong&gt;Messages tab's&lt;/strong&gt; associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other &lt;code&gt;.nav-&lt;/code&gt;powered navigation.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
