<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/list-group/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">List group</h1>
    <p class="text-body-secondary mb-4">Flexible component for displaying a series of content.</p>
  </section>


  <!-- Basic example -->
  <section id="list-group-basic" class="cd-section pb-sm-2 mb-5">
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
            <ul class="list-group" style="max-width: 300px;">
              <li class="list-group-item">A first item</li>
              <li class="list-group-item active" aria-current="true">An active item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic list group --&gt;
&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A first item&lt;/li&gt;
  &lt;li class=&quot;list-group-item active&quot; aria-current=&quot;true&quot;&gt;An active item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
  &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Borderless -->
  <section id="list-group-borderless" class="cd-section pb-sm-2 mb-5">
    <h4>Borderless</h4>
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
          <div id="preview-2" class="tab-pane pt-3 pb-1 mt-3 fade show active" role="tabpanel">
            <ul class="list-group list-group-borderless" style="max-width: 300px;">
              <li class="list-group-item">A first item</li>
              <li class="list-group-item active" aria-current="true">An active item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-borderless-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-borderless-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Borderless list group --&gt;
&lt;ul class=&quot;list-group list-group-borderless&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A first item&lt;/li&gt;
  &lt;li class=&quot;list-group-item active&quot; aria-current=&quot;true&quot;&gt;An active item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
  &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Links or buttons -->
  <section id="list-group-links" class="cd-section pb-sm-2 mb-5">
    <h4>Links or buttons</h4>
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
          <div id="preview-3" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <div class="list-group d-inline-flex w-100 mb-3 me-4" style="max-width: 300px;">
              <a class="list-group-item list-group-item-action" href="#!">A first link item</a>
              <a class="list-group-item list-group-item-action active" href="#!" aria-current="true">The current link
                item</a>
              <a class="list-group-item list-group-item-action" href="#!">A third link item</a>
              <a class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled link item</a>
              <a class="list-group-item list-group-item-action" href="#!">And a fifth link item</a>
            </div>
            <div class="list-group list-group-borderless d-inline-flex w-100 mb-1" style="max-width: 300px;">
              <button type="button" class="list-group-item list-group-item-action">A first button item</button>
              <button type="button" class="list-group-item list-group-item-action active" aria-current="true">The
                current button item</button>
              <button type="button" class="list-group-item list-group-item-action">A third button item</button>
              <button type="button" class="list-group-item list-group-item-action disabled" aria-disabled="true">A
                disabled button item</button>
              <button type="button" class="list-group-item list-group-item-action">And a fifth button item</button>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-links-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-links-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Actionable list group made of links --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;A first link item&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action active&quot; href=&quot;#&quot; aria-current=&quot;true&quot;&gt;The current link item&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;A third link item&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled link item&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;And a fifth link item&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Actionable borderless list group made of buttons --&gt;
&lt;div class=&quot;list-group list-group-borderless&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A first button item&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action active&quot; aria-current=&quot;true&quot;&gt;The current button item&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;A third button item&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action disabled&quot; aria-disabled=&quot;true&quot;&gt;A disabled button item&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;And a fifth button item&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Flush -->
  <section id="list-group-flush" class="cd-section pb-sm-2 mb-5">
    <h4>Flush</h4>
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
          <div id="preview-4" class="tab-pane pt-3 mt-3 fade show active" role="tabpanel">
            <ul class="list-group list-group-flush" style="max-width: 300px;">
              <li class="list-group-item">A first item</li>
              <li class="list-group-item">An second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-flush-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-flush-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Flush list group to render items edge-to-edge in a parent container (e.g., cards) --&gt;
&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A first item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;An second item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A fourth item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;And a fifth one&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- With icons and badges -->
  <section id="list-group-icons" class="cd-section pb-sm-2 mb-5">
    <h4>With icons and badges</h4>
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
          <div id="preview-5" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <div class="list-group" style="max-width: 300px;">
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#!">
                <i class="ci-message-circle fs-base opacity-75 me-2"></i>
                Messages
                <span class="badge bg-info rounded-pill ms-auto">5</span>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#!">
                <i class="ci-shopping-bag fs-base opacity-75 me-2"></i>
                Orders
                <span class="badge bg-warning rounded-pill ms-auto">3</span>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#!">
                <i class="ci-bell fs-base opacity-75 me-2"></i>
                Notifications
                <span class="badge bg-success rounded-pill ms-auto">7</span>
              </a>
              <a class="list-group-item list-group-item-action d-flex align-items-center" href="#!">
                <i class="ci-heart fs-base opacity-75 me-2"></i>
                Favorites
                <span class="badge bg-danger rounded-pill ms-auto">2</span>
              </a>
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
              <pre id="list-group-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- List group with icons and badges --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action d-flex align-items-center&quot; href=&quot;#&quot;&gt;
    &lt;i class=&quot;ci-message-circle fs-base opacity-75 me-2&quot;&gt;&lt;/i&gt;
    Messages
    &lt;span class=&quot;badge bg-info rounded-pill ms-auto&quot;&gt;5&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action d-flex align-items-center&quot; href=&quot;#&quot;&gt;
    &lt;i class=&quot;ci-shopping-bag fs-base opacity-75 me-2&quot;&gt;&lt;/i&gt;
    Orders
    &lt;span class=&quot;badge bg-warning rounded-pill ms-auto&quot;&gt;3&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action d-flex align-items-center&quot; href=&quot;#&quot;&gt;
    &lt;i class=&quot;ci-bell fs-base opacity-75 me-2&quot;&gt;&lt;/i&gt;
    Notifications
    &lt;span class=&quot;badge bg-success rounded-pill ms-auto&quot;&gt;7&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action d-flex align-items-center&quot; href=&quot;#&quot;&gt;
    &lt;i class=&quot;ci-heart fs-base opacity-75 me-2&quot;&gt;&lt;/i&gt;
    Favorites
    &lt;span class=&quot;badge bg-danger rounded-pill ms-auto&quot;&gt;2&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Checkboxes and radios -->
  <section id="list-group-checkboxes" class="cd-section pb-sm-2 mb-5">
    <h4>Checkboxes and radios</h4>
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
          <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="row">
              <div class="col-xl-5 col-sm-6 mb-4 mb-sm-0">
                <div class="list-group">
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="checkbox" value="first" checked>
                    First checkbox
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="checkbox" value="second">
                    Second checkbox
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="checkbox" value="third">
                    Third checkbox
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="checkbox" value="fourth">
                    Fourth checkbox
                  </label>
                </div>
              </div>
              <div class="col-xl-5 col-sm-6">
                <div class="list-group">
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="radio" name="lg-radio" value="first" checked>
                    First radio
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="radio" name="lg-radio" value="second">
                    Second radio
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="radio" name="lg-radio" value="third">
                    Third radio
                  </label>
                  <label class="list-group-item">
                    <input class="form-check-input me-2" type="radio" name="lg-radio" value="fourth">
                    Fourth radio
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-checkboxes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-checkboxes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- List group with checkboxes --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;first&quot; checked&gt;
    First checkbox
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;second&quot;&gt;
    Second checkbox
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;third&quot;&gt;
    Third checkbox
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;checkbox&quot; value=&quot;fourth&quot;&gt;
    Fourth checkbox
  &lt;/label&gt;
&lt;/div&gt;

&lt;!-- List group with radio buttons --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;first&quot; checked&gt;
    First radio
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;second&quot;&gt;
    Second radio
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;third&quot;&gt;
    Third radio
  &lt;/label&gt;
  &lt;label class=&quot;list-group-item&quot;&gt;
    &lt;input class=&quot;form-check-input me-2&quot; type=&quot;radio&quot; name=&quot;lg-radio&quot; value=&quot;fourth&quot;&gt;
    Fourth radio
  &lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Numbered list group -->
  <section id="list-group-numbered" class="cd-section pb-sm-2 mb-5">
    <h4>Numbered list group</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-7" role="tab"
              aria-controls="preview-7" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7" role="tab"
              aria-controls="html-7" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <ol class="list-group list-group-numbered" style="max-width: 300px;">
              <li class="list-group-item">A list item</li>
              <li class="list-group-item">A list item</li>
              <li class="list-group-item">A list item</li>
              <li class="list-group-item">A list item</li>
            </ol>
          </div>
          <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-numbered-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-numbered-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Numbered list group --&gt;
&lt;ol class=&quot;list-group list-group-numbered&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A list item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A list item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A list item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A list item&lt;/li&gt;
&lt;/ol&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Horizontal list group -->
  <section id="list-group-horizontal" class="cd-section pb-sm-2 mb-5">
    <h4>Horizontal list group</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-8" role="tab"
              aria-controls="preview-8" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8" role="tab"
              aria-controls="html-8" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <ul class="list-group list-group-horizontal mb-3">
              <li class="list-group-item">A first item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <ul class="list-group list-group-horizontal mb-3">
              <li class="list-group-item flex-fill text-center">A first item</li>
              <li class="list-group-item flex-fill text-center">A second item</li>
              <li class="list-group-item flex-fill text-center">A third item</li>
            </ul>
            <div class="list-group list-group-horizontal mb-3">
              <a class="list-group-item list-group-item-action text-center active" href="#!" aria-current="true">An
                active link</a>
              <a class="list-group-item list-group-item-action text-center" href="#!">A second link</a>
              <a class="list-group-item list-group-item-action text-center" href="#!">A third link</a>
            </div>
            <div class="list-group list-group-borderless list-group-horizontal">
              <a class="list-group-item list-group-item-action text-center" href="#!">A first link</a>
              <a class="list-group-item list-group-item-action text-center active" href="#!" aria-current="true">An
                active link</a>
              <a class="list-group-item list-group-item-action text-center" href="#!">A third link</a>
            </div>
          </div>
          <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-horizontal-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic horizontal list group. Alternatively, choose a responsive variant .list-group-horizontal-{sm|md|lg|xl|xxl} to make a list group horizontal starting at that breakpoint's min-width --&gt;
&lt;ul class=&quot;list-group list-group-horizontal&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A first item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A second item&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A third item&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Justified horizontal list group --&gt;
&lt;ul class=&quot;list-group list-group-horizontal&quot;&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;A first item&lt;/li&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;A second item&lt;/li&gt;
  &lt;li class=&quot;list-group-item flex-fill text-center&quot;&gt;A third item&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Actionable (links) horizontal list group --&gt;
&lt;div class=&quot;list-group list-group-horizontal&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center active&quot; href=&quot;#&quot; aria-current=&quot;true&quot;&gt;An active link&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center&quot; href=&quot;#&quot;&gt;A second link&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center&quot; href=&quot;#&quot;&gt;A third link&lt;/a&gt;
&lt;/div&gt;

&lt;!-- Actionable (links) borderless horizontal list group --&gt;
&lt;div class=&quot;list-group list-group-borderless list-group-horizontal&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center active&quot; href=&quot;#&quot; aria-current=&quot;true&quot;&gt;An active link&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center&quot; href=&quot;#&quot;&gt;A second link&lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action text-center&quot; href=&quot;#&quot;&gt;A third link&lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Custom content -->
  <section id="list-group-custom" class="cd-section pb-sm-2 mb-5">
    <h4>Custom content</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-9" role="tab"
              aria-controls="preview-9" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-9" role="tab"
              aria-controls="html-9" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-9" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="list-group" style="max-width: 400px;">
              <a class="list-group-item list-group-item-action p-3 fw-normal active" href="#!" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1">List group item heading</h6>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
              </a>
              <a class="list-group-item list-group-item-action p-3 fw-normal" href="#!">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1">List group item heading</h6>
                  <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-body-tertiary">And some muted small print.</small>
              </a>
              <a class="list-group-item list-group-item-action p-3 fw-normal" href="#!">
                <div class="d-flex w-100 justify-content-between">
                  <h6 class="mb-1">List group item heading</h6>
                  <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-body-tertiary">And some muted small print.</small>
              </a>
            </div>
          </div>
          <div id="html-9" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-custom-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-custom-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- List group with custom content --&gt;
&lt;div class=&quot;list-group&quot;&gt;
  &lt;a class=&quot;list-group-item list-group-item-action p-3 fw-normal active&quot; href=&quot;#&quot; aria-current=&quot;true&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h6 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h6&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
    &lt;small&gt;And some small print.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action p-3 fw-normal&quot; href=&quot;#&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h6 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h6&gt;
      &lt;small class=&quot;text-body-secondary&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
    &lt;small class=&quot;text-body-tertiary&quot;&gt;And some muted small print.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a class=&quot;list-group-item list-group-item-action p-3 fw-normal&quot; href=&quot;#&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h6 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h6&gt;
      &lt;small class=&quot;text-body-secondary&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Some placeholder content in a paragraph.&lt;/p&gt;
    &lt;small class=&quot;text-body-tertiary&quot;&gt;And some muted small print.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Color variations -->
  <section id="list-group-colors" class="cd-section pb-sm-2 mb-5">
    <h4>Color variations</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-10" role="tab"
              aria-controls="preview-10" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-10" role="tab"
              aria-controls="html-10" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-10" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <ul class="list-group" style="max-width: 350px;">
              <li class="list-group-item">A simple default list group item</li>
              <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
              <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
              <li class="list-group-item list-group-item-success">A simple success list group item</li>
              <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
              <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
              <li class="list-group-item list-group-item-info">A simple info list group item</li>
              <li class="list-group-item list-group-item-light">A simple light list group item</li>
              <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
            </ul>
          </div>
          <div id="html-10" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-colors-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-colors-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Use contextual classes to style list items with a stateful background and color. --&gt;
&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;A simple default list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-primary&quot;&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;A simple success list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;A simple info list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-light&quot;&gt;A simple light list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-dark&quot;&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- JavaScript behavior -->
  <section id="list-group-js" class="cd-section">
    <h4>JavaScript behavior</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-11" role="tab"
              aria-controls="preview-11" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-11" role="tab"
              aria-controls="html-11" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-11" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="row">
              <div class="col-md-4">
                <div class="list-group" role="tablist">
                  <a class="list-group-item list-group-item-action active" href="#list-home" data-bs-toggle="list"
                    role="tab" aria-controls="list-home" id="list-home-list" aria-selected="true">Home</a>
                  <a class="list-group-item list-group-item-action" href="#list-profile" data-bs-toggle="list"
                    role="tab" aria-controls="list-profile" id="list-profile-list" aria-selected="false"
                    tabindex="-1">Profile</a>
                  <a class="list-group-item list-group-item-action" href="#list-messages" data-bs-toggle="list"
                    role="tab" aria-controls="list-messages" id="list-messages-list" aria-selected="false"
                    tabindex="-1">Messages</a>
                  <a class="list-group-item list-group-item-action" href="#list-settings" data-bs-toggle="list"
                    role="tab" aria-controls="list-settings" id="list-settings-list" aria-selected="false"
                    tabindex="-1">Settings</a>
                </div>
              </div>
              <div class="col-md-8 pt-4 pt-md-0">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                    aria-labelledby="list-home-list">Velit aute mollit ipsum ad dolor consectetur nulla officia culpa
                    adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea
                    ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur
                    exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip
                    eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim voluptatum iure autem atque quaerat.
                  </div>
                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum
                    ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia
                    anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation.
                    Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo
                    enim culpa commodo itaque dolores dolorum similique architecto.</div>
                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Ut
                    ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum
                    voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
                    enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum
                    id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                    Consectetur et fugiat anim do eiusmod aliquip.</div>
                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit
                    nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat
                    aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut
                    exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute
                    irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod.</div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-11" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#list-group-js-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="list-group-js-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-md-4&quot;&gt;

    &lt;!-- Nav tabs in format of list group --&gt;
    &lt;div class=&quot;list-group&quot; role=&quot;tablist&quot;&gt;
      &lt;a class=&quot;list-group-item list-group-item-action active&quot; href=&quot;#list-home&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-home&quot; id=&quot;list-home-list&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#list-profile&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-profile&quot; id=&quot;list-profile-list&quot; aria-selected=&quot;false&quot; tabindex=&quot;-1&quot;&gt;Profile&lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#list-messages&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-messages&quot; id=&quot;list-messages-list&quot; aria-selected=&quot;false&quot; tabindex=&quot;-1&quot;&gt;Messages&lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#list-settings&quot; data-bs-toggle=&quot;list&quot; role=&quot;tab&quot; aria-controls=&quot;list-settings&quot; id=&quot;list-settings-list&quot; aria-selected=&quot;false&quot; tabindex=&quot;-1&quot;&gt;Settings&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-md-8 pt-4 pt-md-0&quot;&gt;

    &lt;!-- Tab content --&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
      &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;list-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-home-list&quot;&gt;...&lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;list-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-profile-list&quot;&gt;...&lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;list-messages&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-messages-list&quot;&gt;...&lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;list-settings&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;list-settings-list&quot;&gt;...&lt;/div&gt;
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
