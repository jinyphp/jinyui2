<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Forms</h1>
    <p class="text-body-secondary mb-4">Form control styles, layout options, and custom components.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p><strong>Range slider</strong> depends on <a class="alert-link" href="https://refreshless.com/nouislider/"
          target="_blank" rel="noreferrer">noUISlider</a> plugin. Make sure to link to the plugin's css and js files in
        your document.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/nouislider/dist/nouislider.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border mb-4"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/nouislider/dist/nouislider.min.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p>The <strong>Custom select</strong> component relies on the <a class="alert-link"
          href="https://github.com/Choices-js/Choices" target="_blank" rel="noreferrer">Choices.js</a> plugin. To use
        this component, make sure to include the required reference to the plugin's css and js files in your document:
      </p>
      <pre class="code-highlight border mt-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/choices.js/public/assets/styles/choices.min.css&quot;&gt;
&lt;script src=&quot;assets/vendor/choices.js/public/assets/scripts/choices.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Supported input types -->
  <section id="forms-types" class="cd-section pb-sm-2 mb-5">
    <h4>Supported input types</h4>
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
            <div class="mb-2 mb-md-3 mt-n3 mt-md-0 row align-items-center">
              <label for="text-input" class="col-md-2 col-form-label">Text</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="text-input" value="Artisanal kale">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="search-input" class="col-md-2 col-form-label">Search</label>
              <div class="col-md-10">
                <input type="search" class="form-control" id="search-input" value="How do I shoot web">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="email-input" class="col-md-2 col-form-label">Email</label>
              <div class="col-md-10">
                <input type="email" class="form-control" id="email-input" value="email@example.com">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="url-input" class="col-md-2 col-form-label">URL</label>
              <div class="col-md-10">
                <input type="url" class="form-control" id="url-input" value="https://getbootstrap.com">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="tel-input" class="col-md-2 col-form-label">Phone</label>
              <div class="col-md-10">
                <input type="tel" class="form-control" id="tel-input" value="1-(770)-334-2518">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="pass-input" class="col-md-2 col-form-label">Password</label>
              <div class="col-md-10">
                <input type="password" class="form-control" id="pass-input" value="mypasswordexample">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row">
              <label for="textarea-input" class="col-md-2 col-form-label">Textarea</label>
              <div class="col-md-10">
                <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="select-input" class="col-md-2 col-form-label">Select</label>
              <div class="col-md-10">
                <select class="form-select" id="select-input" aria-label="Default select example">
                  <option selected disabled>Choose option...</option>
                  <option value="1">Option item 1</option>
                  <option value="2">Option item 2</option>
                  <option value="3">Option item 3</option>
                </select>
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="multiselect-input" class="col-md-2 col-form-label">Multiselect</label>
              <div class="col-md-10">
                <select class="form-select" id="multiselect-input" size="3" multiple
                  aria-label="Multiple select example">
                  <option value="1" selected>Option item 1</option>
                  <option value="2">Option item 2</option>
                  <option value="3">Option item 3</option>
                  <option value="4">Option item 4</option>
                  <option value="5">Option item 5</option>
                  <option value="6">Option item 6</option>
                </select>
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="file-input" class="col-md-2 col-form-label">File</label>
              <div class="col-md-10">
                <input type="file" class="form-control" id="file-input">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="number-input" class="col-md-2 col-form-label">Number</label>
              <div class="col-md-10">
                <input type="number" class="form-control" id="number-input" value="37">
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="datalist-input" class="col-md-2 col-form-label">Datalist</label>
              <div class="col-md-10">
                <input type="text" class="form-control" list="datalist-options" id="datalist-input"
                  placeholder="Type to search...">
                <datalist id="datalist-options">
                  <option value="San Francisco"></option>
                  <option value="New York"></option>
                  <option value="Seattle"></option>
                  <option value="Los Angeles"></option>
                  <option value="Chicago"></option>
                </datalist>
              </div>
            </div>
            <div class="mb-2 mb-md-3 row align-items-center">
              <label for="range-input" class="col-md-2 col-form-label">Range</label>
              <div class="col-md-10">
                <input type="range" class="form-range" id="range-input">
              </div>
            </div>
            <div class="row align-items-center">
              <label for="color-input" class="col-md-2 col-form-label">Color</label>
              <div class="col-md-10">
                <input type="color" class="form-control form-control-color" id="color-input" value="#ffa14a">
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-types-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-types-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Text input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;text-input&quot; class=&quot;form-label&quot;&gt;Text&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;text-input&quot; value=&quot;Artisanal kale&quot;&gt;
&lt;/div&gt;

&lt;!-- Search input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;search-input&quot; class=&quot;form-label&quot;&gt;Search&lt;/label&gt;
  &lt;input type=&quot;search&quot; class=&quot;form-control&quot; id=&quot;search-input&quot; value=&quot;How do I shoot web&quot;&gt;
&lt;/div&gt;

&lt;!-- Email input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;email-input&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email-input&quot; value=&quot;email@example.com&quot;&gt;
&lt;/div&gt;

&lt;!-- URL input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;url-input&quot; class=&quot;form-label&quot;&gt;URL&lt;/label&gt;
  &lt;input type=&quot;url&quot; class=&quot;form-control&quot; id=&quot;url-input&quot; value=&quot;https://getbootstrap.com&quot;&gt;
&lt;/div&gt;

&lt;!-- Phone input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;tel-input&quot; class=&quot;form-label&quot;&gt;Phone&lt;/label&gt;
  &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; id=&quot;tel-input&quot; value=&quot;1-(770)-334-2518&quot;&gt;
&lt;/div&gt;

&lt;!-- Password input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;pass-input&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
  &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pass-input&quot; value=&quot;mypasswordexample&quot;&gt;
&lt;/div&gt;

&lt;!-- Textarea --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;textarea-input&quot; class=&quot;form-label&quot;&gt;Textarea&lt;/label&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;textarea-input&quot; rows=&quot;5&quot;&gt;Hello World!&lt;/textarea&gt;
&lt;/div&gt;

&lt;!-- Select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-input&quot; class=&quot;form-label&quot;&gt;Select&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;select-input&quot; aria-label=&quot;Default select example&quot;&gt;
    &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Multiselect --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;multiselect-input&quot; class=&quot;form-label&quot;&gt;Multiselect&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;multiselect-input&quot; size=&quot;3&quot; multiple aria-label=&quot;Multiple select example&quot;&gt;
    &lt;option value=&quot;1&quot; selected&gt;Option item 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
    &lt;option value=&quot;4&quot;&gt;Option item 4&lt;/option&gt;
    &lt;option value=&quot;5&quot;&gt;Option item 5&lt;/option&gt;
    &lt;option value=&quot;6&quot;&gt;Option item 6&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- File input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;file-input&quot; class=&quot;form-label&quot;&gt;File&lt;/label&gt;
  &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;file-input&quot;&gt;
&lt;/div&gt;

&lt;!-- Number input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;number-input&quot; class=&quot;form-label&quot;&gt;Number&lt;/label&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control&quot; id=&quot;number-input&quot; value=&quot;37&quot;&gt;
&lt;/div&gt;

&lt;!-- Datalist --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;datalist-input&quot; class=&quot;form-label&quot;&gt;Datalist&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; list=&quot;datalist-options&quot; id=&quot;datalist-input&quot; placeholder=&quot;Type to search...&quot;&gt;
  &lt;datalist id=&quot;datalist-options&quot;&gt;
    &lt;option value=&quot;San Francisco&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;Seattle&quot;&gt;
    &lt;option value=&quot;Los Angeles&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
  &lt;/datalist&gt;
&lt;/div&gt;

&lt;!-- Range input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;range-input&quot; class=&quot;form-label&quot;&gt;Range&lt;/label&gt;
  &lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;range-input&quot;&gt;
&lt;/div&gt;

&lt;!-- Color input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;color-input&quot; class=&quot;form-label&quot;&gt;Color&lt;/label&gt;
  &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot; id=&quot;color-input&quot; value=&quot;#ffa14a&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Floating labels -->
  <section id="forms-floating-labels" class="cd-section pb-sm-2 mb-5">
    <h4>Floating labels</h4>
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
            <div style="max-width: 400px">
              <div class="form-floating mb-3">
                <input class="form-control" type="text" id="fl-text" placeholder="Your name">
                <label for="fl-text">Your name</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-select" id="fl-select" aria-label="Floating label select">
                  <option value="Argentina" selected>Argentina</option>
                  <option value="Belgium">Belgium</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="Japan">Japan</option>
                  <option value="Spain">Spain</option>
                  <option value="USA">USA</option>
                </select>
                <label for="fl-select">Your country</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" id="fl-textarea" style="height: 120px;"
                  placeholder="Your message"></textarea>
                <label for="fl-textarea">Your message</label>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-floating-labels-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-floating-labels-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Floating label: Text input --&gt;
&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;fl-text&quot; placeholder=&quot;Your name&quot;&gt;
  &lt;label for=&quot;fl-text&quot;&gt;Your name&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Floating label: Select --&gt;
&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;fl-select&quot; aria-label=&quot;Floating label select&quot;&gt;
    &lt;option value=&quot;Argentina&quot; selected&gt;Argentina&lt;/option&gt;
    &lt;option value=&quot;Belgium&quot;&gt;Belgium&lt;/option&gt;
    &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
    &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
    &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
    &lt;option value=&quot;Spain&quot;&gt;Spain&lt;/option&gt;
    &lt;option value=&quot;USA&quot;&gt;USA&lt;/option&gt;
  &lt;/select&gt;
  &lt;label for=&quot;fl-select&quot;&gt;Your country&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Floating label: Textarea --&gt;
&lt;div class=&quot;form-floating mb-3&quot;&gt;
  &lt;textarea class=&quot;form-control&quot; id=&quot;fl-textarea&quot; style=&quot;height: 120px;&quot; placeholder=&quot;Your message&quot;&gt;&lt;/textarea&gt;
  &lt;label for=&quot;fl-textarea&quot;&gt;Your message&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Custom select -->
  <section id="forms-custom-select" class="cd-section position-relative z-3 pb-sm-2 mb-5">
    <h4 class="mb-2">Custom select</h4>
    <p class="fs-sm"><span class="opacity-75">Learn more about this component in</span> <a class="fw-medium"
        href="select-box.html">Select box</a> <span class="opacity-75">section.</span></p>
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
            <label class="form-label">Basic example</label>
            <div class="mb-3" style="max-width: 400px">
              <select class="form-select" data-select aria-label="Basic select example">
                <option value="">Select country...</option>
                <option value="Argentina">Argentina</option>
                <option value="Belgium">Belgium</option>
                <option value="Denmark">Denmark</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Japan">Japan</option>
                <option value="Switzerland">Switzerland</option>
              </select>
            </div>
            <label class="form-label">Search example</label>
            <div style="max-width: 400px">
              <select class="form-select" data-select='{"searchEnabled": true}' aria-label="Select with search">
                <option value="">Select country...</option>
                <option value="Argentina">Argentina</option>
                <option value="Belgium">Belgium</option>
                <option value="Denmark">Denmark</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Japan">Japan</option>
                <option value="Poland">Poland</option>
                <option value="Spain">Spain</option>
                <option value="Switzerland">Switzerland</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United Kingdom">United States</option>
              </select>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-custom-select-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-custom-select-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic example of custom select --&gt;
&lt;label class=&quot;form-label&quot;&gt;Basic example&lt;/label&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; data-select aria-label=&quot;Basic select example&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select country...&lt;/option&gt;
    &lt;option value=&quot;Argentina&quot;&gt;Argentina&lt;/option&gt;
    &lt;option value=&quot;Belgium&quot;&gt;Belgium&lt;/option&gt;
    &lt;option value=&quot;Denmark&quot;&gt;Denmark&lt;/option&gt;
    &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
    &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
    &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;Switzerland&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Added search functionality --&gt;
&lt;label class=&quot;form-label&quot;&gt;Search example&lt;/label&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; data-select='{&quot;searchEnabled&quot;: true}' aria-label=&quot;Select with search&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select country...&lt;/option&gt;
    &lt;option value=&quot;Argentina&quot;&gt;Argentina&lt;/option&gt;
    &lt;option value=&quot;Belgium&quot;&gt;Belgium&lt;/option&gt;
    &lt;option value=&quot;Denmark&quot;&gt;Denmark&lt;/option&gt;
    &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
    &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
    &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
    &lt;option value=&quot;Poland&quot;&gt;Poland&lt;/option&gt;
    &lt;option value=&quot;Spain&quot;&gt;Spain&lt;/option&gt;
    &lt;option value=&quot;Switzerland&quot;&gt;Switzerland&lt;/option&gt;
    &lt;option value=&quot;United Kingdom&quot;&gt;United Kingdom&lt;/option&gt;
    &lt;option value=&quot;United Kingdom&quot;&gt;United States&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Password visibility toggle -->
  <section id="forms-password-toggle" class="cd-section pb-sm-2 mb-5">
    <h4>Password visibility toggle</h4>
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
            <label for="pass-visibility" class="form-label">Password</label>
            <div class="password-toggle" style="max-width: 400px">
              <input type="password" class="form-control" id="pass-visibility" value="hidden@password">
              <label class="password-toggle-button" aria-label="Show/hide password">
                <input type="checkbox" class="btn-check">
              </label>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-password-toggle-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-password-toggle-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Password visibility toggle --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;pass-visibility&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
  &lt;div class=&quot;password-toggle&quot;&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pass-visibility&quot; value=&quot;hidden@password&quot;&gt;
    &lt;label class=&quot;password-toggle-button&quot; aria-label=&quot;Show/hide password&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot;&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Checkboxes -->
  <section id="forms-checkboxes" class="cd-section pb-sm-2 mb-5">
    <h4>Checkboxes</h4>
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
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="ex-check-1">
              <label for="ex-check-1" class="form-check-label">Check this checkbox</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="ex-check-2" checked>
              <label for="ex-check-2" class="form-check-label">Uncheck this checkbox</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="ex-check-3" disabled>
              <label for="ex-check-3" class="form-check-label">Disabled checkbox</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="ex-check-4" checked disabled>
              <label for="ex-check-4" class="form-check-label">Disabled checked</label>
            </div>
            <div class="pt-3">
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="ex-check-5">
                <label for="ex-check-5" class="form-check-label">Check this checkbox</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="ex-check-6" checked>
                <label for="ex-check-6" class="form-check-label">Uncheck this checkbox</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="ex-check-7" disabled>
                <label for="ex-check-7" class="form-check-label">Disabled checkbox</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="ex-check-8" checked disabled>
                <label for="ex-check-8" class="form-check-label">Disabled checked</label>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-checkboxes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-checkboxes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Stacked checkboxes --&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-1&quot;&gt;
  &lt;label for=&quot;ex-check-1&quot; class=&quot;form-check-label&quot;&gt;Check this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-2&quot; checked&gt;
  &lt;label for=&quot;ex-check-2&quot; class=&quot;form-check-label&quot;&gt;Uncheck this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-3&quot; disabled&gt;
  &lt;label for=&quot;ex-check-3&quot; class=&quot;form-check-label&quot;&gt;Disabled checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-4&quot; checked disabled&gt;
  &lt;label for=&quot;ex-check-4&quot; class=&quot;form-check-label&quot;&gt;Disabled checked&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Inline checkboxes --&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-5&quot;&gt;
  &lt;label for=&quot;ex-check-5&quot; class=&quot;form-check-label&quot;&gt;Check this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-6&quot; checked&gt;
  &lt;label for=&quot;ex-check-6&quot; class=&quot;form-check-label&quot;&gt;Uncheck this checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-7&quot; disabled&gt;
  &lt;label for=&quot;ex-check-7&quot; class=&quot;form-check-label&quot;&gt;Disabled checkbox&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;ex-check-8&quot; checked disabled&gt;
  &lt;label for=&quot;ex-check-8&quot; class=&quot;form-check-label&quot;&gt;Disabled checked&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Radio buttons -->
  <section id="forms-radios" class="cd-section pb-sm-2 mb-5">
    <h4>Radio buttons</h4>
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
            <div class="form-check">
              <input type="radio" class="form-check-input" id="ex-radio-1" name="radio">
              <label for="ex-radio-1" class="form-check-label">Toggle this radio</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="ex-radio-2" name="radio" checked>
              <label for="ex-radio-2" class="form-check-label">Toggle this radio</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="ex-radio-3" disabled>
              <label for="ex-radio-3" class="form-check-label">Disabled radio</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="ex-radio-4" checked disabled>
              <label for="ex-radio-4" class="form-check-label">Disabled checked</label>
            </div>
            <div class="pt-3">
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="ex-radio-5" name="radio-inline">
                <label for="ex-radio-5" class="form-check-label">Toggle this radio</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="ex-radio-6" name="radio-inline" checked>
                <label for="ex-radio-6" class="form-check-label">Toggle this radio</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="ex-radio-7" disabled>
                <label for="ex-radio-7" class="form-check-label">Disabled radio</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="ex-radio-8" checked disabled>
                <label for="ex-radio-8" class="form-check-label">Disabled checked</label>
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-radios-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-radios-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Stacked radio buttons --&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-1&quot; name=&quot;radio&quot;&gt;
  &lt;label for=&quot;ex-radio-1&quot; class=&quot;form-check-label&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-2&quot; name=&quot;radio&quot; checked&gt;
  &lt;label for=&quot;ex-radio-2&quot; class=&quot;form-check-label&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-3&quot; disabled&gt;
  &lt;label for=&quot;ex-radio-3&quot; class=&quot;form-check-label&quot;&gt;Disabled radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-4&quot; checked disabled&gt;
  &lt;label for=&quot;ex-radio-4&quot; class=&quot;form-check-label&quot;&gt;Disabled checked&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Inline radio buttons --&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-5&quot; name=&quot;radio-inline&quot;&gt;
  &lt;label for=&quot;ex-radio-5&quot; class=&quot;form-check-label&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-6&quot; name=&quot;radio-inline&quot; checked&gt;
  &lt;label for=&quot;ex-radio-6&quot; class=&quot;form-check-label&quot;&gt;Toggle this radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-7&quot; disabled&gt;
  &lt;label for=&quot;ex-radio-7&quot; class=&quot;form-check-label&quot;&gt;Disabled radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-inline&quot;&gt;
  &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;ex-radio-8&quot; checked disabled&gt;
  &lt;label for=&quot;ex-radio-8&quot; class=&quot;form-check-label&quot;&gt;Disabled checked&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Switches -->
  <section id="forms-switches" class="cd-section pb-sm-2 mb-5">
    <h4>Switches</h4>
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
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" role="switch" id="ex-switch-1">
              <label for="ex-switch-1" class="form-check-label">Default switch checkbox</label>
            </div>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" role="switch" id="ex-switch-2" checked>
              <label for="ex-switch-2" class="form-check-label">Checked switch checkbox</label>
            </div>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" role="switch" id="ex-switch-3" disabled>
              <label for="ex-switch-3" class="form-check-label">Disabled switch checkbox</label>
            </div>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" role="switch" id="ex-switch-4" checked disabled>
              <label for="ex-switch-4" class="form-check-label">Disabled checked switch checkbox</label>
            </div>
          </div>
          <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-switches-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-switches-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Idle switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; role=&quot;switch&quot; id=&quot;ex-switch-1&quot;&gt;
  &lt;label for=&quot;ex-switch-1&quot; class=&quot;form-check-label&quot;&gt;Default switch checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Checked switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; role=&quot;switch&quot; id=&quot;ex-switch-2&quot; checked&gt;
  &lt;label for=&quot;ex-switch-2&quot; class=&quot;form-check-label&quot;&gt;Checked switch checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Disabled switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; role=&quot;switch&quot; id=&quot;ex-switch-3&quot; disabled&gt;
  &lt;label for=&quot;ex-switch-3&quot; class=&quot;form-check-label&quot;&gt;Disabled switch checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Checked disabled switch --&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; role=&quot;switch&quot; id=&quot;ex-switch-4&quot; checked disabled&gt;
  &lt;label for=&quot;ex-switch-4&quot; class=&quot;form-check-label&quot;&gt;Disabled checked switch checkbox&lt;/label&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Button toggles (Color, size options) -->
  <section id="forms-btns" class="cd-section pb-sm-2 mb-5">
    <h4>Button toggles (Color, size options)</h4>
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
            <div class="mb-4">
              <label class="form-label pb-1 mb-2">Sizes</label>
              <div class="d-flex flex-wrap gap-2">
                <input type="radio" class="btn-check" name="size-options" id="size-1" checked>
                <label for="size-1" class="btn btn-icon btn-sm btn-outline-secondary">XL</label>
                <input type="radio" class="btn-check" name="size-options" id="size-2">
                <label for="size-2" class="btn btn-icon btn-sm btn-outline-secondary">L</label>
                <input type="radio" class="btn-check" name="size-options" id="size-3">
                <label for="size-3" class="btn btn-icon btn-sm btn-outline-secondary">M</label>
                <input type="radio" class="btn-check" name="size-options" id="size-4" disabled>
                <label for="size-4" class="btn btn-icon btn-sm btn-outline-secondary">S</label>
                <input type="radio" class="btn-check" name="size-options" id="size-5">
                <label for="size-5" class="btn btn-icon btn-sm btn-outline-secondary">XS</label>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label pb-1 mb-2">Model</label>
              <div class="d-flex flex-wrap gap-2">
                <input type="radio" class="btn-check" name="model-options" id="model-1" checked>
                <label for="model-1" class="btn btn-sm btn-outline-secondary">64 GB</label>
                <input type="radio" class="btn-check" name="model-options" id="model-2">
                <label for="model-2" class="btn btn-sm btn-outline-secondary">128 GB</label>
                <input type="radio" class="btn-check" name="model-options" id="model-3">
                <label for="model-3" class="btn btn-sm btn-outline-secondary">256 GB</label>
                <input type="radio" class="btn-check" name="model-options" id="model-4" disabled>
                <label for="model-4" class="btn btn-sm btn-outline-secondary">512 GB</label>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label pb-1 mb-2">Color: <span class="text-body fw-normal" id="colorOption">Gray
                  blue</span></label>
              <div class="d-flex flex-wrap gap-2" data-binded-label="#colorOption">
                <input type="radio" class="btn-check" name="color-options" id="color-1" checked>
                <label for="color-1" class="btn btn-color fs-xl" data-label="Gray blue" style="color: #5a7aa1">
                  <span class="visually-hidden">Gray blue</span>
                </label>
                <input type="radio" class="btn-check" name="color-options" id="color-2">
                <label for="color-2" class="btn btn-color fs-xl" data-label="Pink" style="color: #ee7976">
                  <span class="visually-hidden">Pink</span>
                </label>
                <input type="radio" class="btn-check" name="color-options" id="color-3">
                <label for="color-3" class="btn btn-color fs-xl" data-label="Light blue" style="color: #9acbf1">
                  <span class="visually-hidden">Light blue</span>
                </label>
                <input type="radio" class="btn-check" name="color-options" id="color-4">
                <label for="color-4" class="btn btn-color fs-xl" data-label="Green" style="color: #8cd1ab">
                  <span class="visually-hidden">Green</span>
                </label>
              </div>
            </div>
            <div>
              <label class="form-label pb-1 mb-2">Color: <span class="text-body fw-normal"
                  id="colorImageOption">Viridian</span></label>
              <div class="d-flex flex-wrap gap-2" data-binded-label="#colorImageOption">
                <input type="radio" class="btn-check" name="color-image-options" id="colorImage-1" checked>
                <label for="colorImage-1" class="btn btn-image p-0" data-label="Viridian">
                  <img src="../assets/img/shop/furniture/product/colors/color01.png" width="56" alt="Viridian color">
                  <span class="visually-hidden">Viridian</span>
                </label>
                <input type="radio" class="btn-check" name="color-image-options" id="colorImage-2">
                <label for="colorImage-2" class="btn btn-image p-0" data-label="Green">
                  <img src="../assets/img/shop/furniture/product/colors/color02.png" width="56" alt="Green color">
                  <span class="visually-hidden">Green</span>
                </label>
                <input type="radio" class="btn-check" name="color-image-options" id="colorImage-3">
                <label for="colorImage-3" class="btn btn-image p-0" data-label="Blue">
                  <img src="../assets/img/shop/furniture/product/colors/color03.png" width="56" alt="Blue color">
                  <span class="visually-hidden">Blue</span>
                </label>
              </div>
            </div>
          </div>
          <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-btns-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-btns-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- All these components depend on Bootstrap's button-check which can either be radio button or checkbox. --&gt;

&lt;!-- Size options made of .btn-outline-secondary --&gt;
&lt;div class=&quot;mb-4&quot;&gt;
  &lt;label class=&quot;form-label pb-1 mb-2&quot;&gt;Sizes&lt;/label&gt;
  &lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;size-options&quot; id=&quot;size-1&quot; checked&gt;
    &lt;label for=&quot;size-1&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary&quot;&gt;XL&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;size-options&quot; id=&quot;size-2&quot;&gt;
    &lt;label for=&quot;size-2&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary&quot;&gt;L&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;size-options&quot; id=&quot;size-3&quot;&gt;
    &lt;label for=&quot;size-3&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary&quot;&gt;M&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;size-options&quot; id=&quot;size-4&quot; disabled&gt;
    &lt;label for=&quot;size-4&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary&quot;&gt;S&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;size-options&quot; id=&quot;size-5&quot;&gt;
    &lt;label for=&quot;size-5&quot; class=&quot;btn btn-icon btn-sm btn-outline-secondary&quot;&gt;XS&lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Model options made of .btn-outline-secondary --&gt;
&lt;div class=&quot;mb-4&quot;&gt;
  &lt;label class=&quot;form-label pb-1 mb-2&quot;&gt;Model&lt;/label&gt;
  &lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;model-options&quot; id=&quot;model-1&quot; checked&gt;
    &lt;label for=&quot;model-1&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;64 GB&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;model-options&quot; id=&quot;model-2&quot;&gt;
    &lt;label for=&quot;model-2&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;128 GB&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;model-options&quot; id=&quot;model-3&quot;&gt;
    &lt;label for=&quot;model-3&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;256 GB&lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;model-options&quot; id=&quot;model-4&quot; disabled&gt;
    &lt;label for=&quot;model-4&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;512 GB&lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Color options made of .btn-color with binded label --&gt;
&lt;div class=&quot;mb-4&quot;&gt;
  &lt;label class=&quot;form-label pb-1 mb-2&quot;&gt;Color: &lt;span class=&quot;text-body fw-normal&quot; id=&quot;colorOption&quot;&gt;Gray blue&lt;/span&gt;&lt;/label&gt;
  &lt;div class=&quot;d-flex flex-wrap gap-2&quot; data-binded-label=&quot;#colorOption&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-options&quot; id=&quot;color-1&quot; checked&gt;
    &lt;label for=&quot;color-1&quot; class=&quot;btn btn-color fs-xl&quot; data-label=&quot;Gray blue&quot; style=&quot;color: #5a7aa1&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Gray blue&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-options&quot; id=&quot;color-2&quot;&gt;
    &lt;label for=&quot;color-2&quot; class=&quot;btn btn-color fs-xl&quot; data-label=&quot;Pink&quot; style=&quot;color: #ee7976&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Pink&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-options&quot; id=&quot;color-3&quot;&gt;
    &lt;label for=&quot;color-3&quot; class=&quot;btn btn-color fs-xl&quot; data-label=&quot;Light blue&quot; style=&quot;color: #9acbf1&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Light blue&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-options&quot; id=&quot;color-4&quot;&gt;
    &lt;label for=&quot;color-4&quot; class=&quot;btn btn-color fs-xl&quot; data-label=&quot;Green&quot; style=&quot;color: #8cd1ab&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Green&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Color options made of .btn-image with binded label --&gt;
&lt;div class=&quot;mb-4&quot;&gt;
  &lt;label class=&quot;form-label pb-1 mb-2&quot;&gt;Color: &lt;span class=&quot;text-body fw-normal&quot; id=&quot;colorImageOption&quot;&gt;Viridian&lt;/span&gt;&lt;/label&gt;
  &lt;div class=&quot;d-flex flex-wrap gap-2&quot; data-binded-label=&quot;#colorImageOption&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-image-options&quot; id=&quot;colorImage-1&quot; checked&gt;
    &lt;label for=&quot;colorImage-1&quot; class=&quot;btn btn-image p-0&quot; data-label=&quot;Viridian&quot;&gt;
      &lt;img src=&quot;assets/img/shop/furniture/product/colors/color01.png&quot; width=&quot;56&quot; alt=&quot;Viridian color&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Viridian&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-image-options&quot; id=&quot;colorImage-2&quot;&gt;
    &lt;label for=&quot;colorImage-2&quot; class=&quot;btn btn-image p-0&quot; data-label=&quot;Green&quot;&gt;
      &lt;img src=&quot;assets/img/shop/furniture/product/colors/color02.png&quot; width=&quot;56&quot; alt=&quot;Green color&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Green&lt;/span&gt;
    &lt;/label&gt;
    &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;color-image-options&quot; id=&quot;colorImage-3&quot;&gt;
    &lt;label for=&quot;colorImage-3&quot; class=&quot;btn btn-image p-0&quot; data-label=&quot;Blue&quot;&gt;
      &lt;img src=&quot;assets/img/shop/furniture/product/colors/color03.png&quot; width=&quot;56&quot; alt=&quot;Blue color&quot;&gt;
      &lt;span class=&quot;visually-hidden&quot;&gt;Blue&lt;/span&gt;
    &lt;/label&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Count input (+/-) -->
  <section id="forms-count" class="cd-section pb-sm-2 mb-5">
    <h4>Count input (+/-)</h4>
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
            <div class="count-input rounded-2 mb-3">
              <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" min="1" max="5" readonly>
              <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <br>
            <div class="count-input mb-3">
              <button type="button" class="btn btn-icon" data-decrement aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control" value="1" readonly>
              <button type="button" class="btn btn-icon" data-increment aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <br>
            <div class="count-input mb-3">
              <button type="button" class="btn btn-icon btn-lg" data-decrement aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-lg" value="1" readonly>
              <button type="button" class="btn btn-icon btn-lg" data-increment aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <br>
            <div class="count-input disabled">
              <button type="button" class="btn btn-icon disabled" data-decrement aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control" value="1" disabled>
              <button type="button" class="btn btn-icon disabled" data-increment aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
          </div>
          <div id="html-9" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-count-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-count-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- The number input within the Count Input component accepts two attributes: "min" and "max." See it in action in the first example below. --&gt;
&lt;!-- Small count input --&gt;
&lt;div class=&quot;count-input rounded-2 mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
    &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control form-control-sm&quot; value=&quot;1&quot; min=&quot;1&quot; max=&quot;5&quot; readonly&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-sm&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
    &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Normal count input --&gt;
&lt;div class=&quot;count-input mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
    &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;1&quot; readonly&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
    &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Large count input --&gt;
&lt;div class=&quot;count-input mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
    &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control form-control-lg&quot; value=&quot;1&quot; readonly&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-lg&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
    &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Disabled count input --&gt;
&lt;div class=&quot;count-input disabled&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon disabled&quot; data-decrement aria-label=&quot;Decrement quantity&quot;&gt;
    &lt;i class=&quot;ci-minus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;1&quot; disabled&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon disabled&quot; data-increment aria-label=&quot;Increment quantity&quot;&gt;
    &lt;i class=&quot;ci-plus&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Range slider -->
  <section id="forms-range-slider" class="cd-section pb-sm-2 mb-5">
    <h4>Range slider</h4>
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
            <div style="max-width: 350px">
              <label class="form-label" id="slider-label-1">Two handles + inputs</label>
              <div class="range-slider pb-2 mb-4"
                data-range-slider='{"startMin": 280, "startMax": 720, "min": 0, "max": 1000, "step": 1, "tooltipPrefix": "$"}'
                aria-labelledby="slider-label-1">
                <div class="range-slider-ui"></div>
                <div class="d-flex align-items-center">
                  <div class="position-relative w-50">
                    <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                  </div>
                  <i class="ci-minus text-body-emphasis mx-2"></i>
                  <div class="position-relative w-50">
                    <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="number" class="form-control form-icon-start" min="0" data-range-slider-max>
                  </div>
                </div>
              </div>
              <label class="form-label" id="slider-label-2">With value scale (pips)</label>
              <div class="range-slider pb-2 mb-4"
                data-range-slider='{"startMin": 250, "startMax": 680, "min": 0, "max": 1000, "step": 1, "pips": true, "tooltipPrefix": "$"}'
                aria-labelledby="slider-label-2">
                <div class="range-slider-ui"></div>
                <div class="d-flex align-items-center pt-4">
                  <div class="position-relative w-50">
                    <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                  </div>
                  <i class="ci-minus text-body-emphasis mx-2"></i>
                  <div class="position-relative w-50">
                    <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="number" class="form-control form-icon-start" min="0" data-range-slider-max>
                  </div>
                </div>
              </div>
              <label class="form-label" id="slider-label-3">One handle + no inputs</label>
              <div class="range-slider"
                data-range-slider='{"startMin": 450, "min": 0, "max": 1000, "step": 1, "tooltipPrefix": "$"}'
                aria-labelledby="slider-label-3">
                <div class="range-slider-ui"></div>
                <input type="hidden" class="form-control" data-range-slider-min>
              </div>
            </div>
          </div>
          <div id="html-10" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-range-slider-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-range-slider-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Range slider: Two handles + inputs --&gt;
&lt;label class=&quot;form-label&quot; id=&quot;slider-label-1&quot;&gt;Two handles + inputs&lt;/label&gt;
&lt;div class=&quot;range-slider pb-2 mb-4&quot; data-range-slider='{&quot;startMin&quot;: 280, &quot;startMax&quot;: 720, &quot;min&quot;: 0, &quot;max&quot;: 1000, &quot;step&quot;: 1, &quot;tooltipPrefix&quot;: &quot;$&quot;}' aria-labelledby=&quot;slider-label-1&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex align-items-center&quot;&gt;
    &lt;div class=&quot;position-relative w-50&quot;&gt;
      &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot; data-range-slider-min&gt;
    &lt;/div&gt;
    &lt;i class=&quot;ci-minus text-body-emphasis mx-2&quot;&gt;&lt;/i&gt;
    &lt;div class=&quot;position-relative w-50&quot;&gt;
      &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot; data-range-slider-max&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Range slider: With value scale (pips) --&gt;
&lt;label class=&quot;form-label&quot; id=&quot;slider-label-2&quot;&gt;With value scale (pips)&lt;/label&gt;
&lt;div class=&quot;range-slider pb-2 mb-4&quot; data-range-slider='{&quot;startMin&quot;: 250, &quot;startMax&quot;: 680, &quot;min&quot;: 0, &quot;max&quot;: 1000, &quot;step&quot;: 1, &quot;pips&quot;: true, &quot;tooltipPrefix&quot;: &quot;$&quot;}' aria-labelledby=&quot;slider-label-2&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;d-flex align-items-center pt-4&quot;&gt;
    &lt;div class=&quot;position-relative w-50&quot;&gt;
      &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot; data-range-slider-min&gt;
    &lt;/div&gt;
    &lt;i class=&quot;ci-minus text-body-emphasis mx-2&quot;&gt;&lt;/i&gt;
    &lt;div class=&quot;position-relative w-50&quot;&gt;
      &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot; data-range-slider-max&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- One handle + no inputs --&gt;
&lt;label class=&quot;form-label&quot; id=&quot;slider-label-3&quot;&gt;One handle + no inputs&lt;/label&gt;
&lt;div class=&quot;range-slider&quot; data-range-slider='{&quot;startMin&quot;: 450, &quot;min&quot;: 0, &quot;max&quot;: 1000, &quot;step&quot;: 1, &quot;tooltipPrefix&quot;: &quot;$&quot;}' aria-labelledby=&quot;slider-label-3&quot;&gt;
  &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
  &lt;input type=&quot;hidden&quot; class=&quot;form-control&quot; data-range-slider-min&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Shapes -->
  <section id="forms-shapes" class="cd-section pb-sm-2 mb-5">
    <h4>Shapes</h4>
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
            <div class="d-flex flex-wrap flex-sm-nowrap gap-4">
              <div class="w-100" style="max-width: 400px">
                <input type="text" class="form-control mb-3" placeholder="Rounded input">
                <input type="text" class="form-control rounded-pill mb-3" placeholder="Pill input">
                <input type="text" class="form-control rounded-0" placeholder="Square input">
              </div>
              <div class="w-100" style="max-width: 400px">
                <select class="form-select mb-3" aria-label="Rounded select">
                  <option selected disabled>Choose option...</option>
                  <option value="1">Option item 1</option>
                  <option value="2">Option item 2</option>
                  <option value="3">Option item 3</option>
                </select>
                <select class="form-select rounded-pill mb-3" aria-label="Pill select">
                  <option selected disabled>Choose option...</option>
                  <option value="1">Option item 1</option>
                  <option value="2">Option item 2</option>
                  <option value="3">Option item 3</option>
                </select>
                <select class="form-select rounded-0" aria-label="Square select">
                  <option selected disabled>Choose option...</option>
                  <option value="1">Option item 1</option>
                  <option value="2">Option item 2</option>
                  <option value="3">Option item 3</option>
                </select>
              </div>
            </div>
          </div>
          <div id="html-11" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-shapes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Alter the shape of .form-control component with .rounded-* utility classes. --&gt;

&lt;!-- Rounded text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control mb-3&quot; placeholder=&quot;Rounded input&quot;&gt;

&lt;!-- Pill text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill mb-3&quot; placeholder=&quot;Pill input&quot;&gt;

&lt;!-- Square text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control rounded-0 mb-3&quot; placeholder=&quot;Square input&quot;&gt;

&lt;!-- Rounded select --&gt;
&lt;select class=&quot;form-select mb-3&quot; aria-label=&quot;Rounded select&quot;&gt;
  &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Pill select --&gt;
&lt;select class=&quot;form-select rounded-pill mb-3&quot; aria-label=&quot;Pill select&quot;&gt;
  &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Square select --&gt;
&lt;select class=&quot;form-select rounded-0 mb-3&quot; aria-label=&quot;Square select&quot;&gt;
  &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizes -->
  <section id="forms-sizes" class="cd-section pb-sm-2 mb-5">
    <h4>Sizes</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-12" role="tab"
              aria-controls="preview-12" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-12" role="tab"
              aria-controls="html-12" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-12" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="d-flex flex-wrap flex-sm-nowrap gap-4">
              <div class="w-100" style="max-width: 400px">
                <div class="mb-3">
                  <label for="input-lg" class="form-label fs-base">Large input</label>
                  <input type="text" class="form-control form-control-lg" id="input-lg"
                    placeholder="Large input placeholder">
                </div>
                <div class="mb-3">
                  <label for="input-md" class="form-label">Normal input</label>
                  <input type="text" class="form-control" id="input-md" placeholder="Normal input placeholder">
                </div>
                <div>
                  <label for="input-sm" class="form-label fs-xs">Small input</label>
                  <input type="text" class="form-control form-control-sm" id="input-sm"
                    placeholder="Small input placeholder">
                </div>
              </div>
              <div class="w-100" style="max-width: 400px">
                <div class="mb-3">
                  <label for="select-lg" class="form-label fs-base">Large select</label>
                  <select class="form-select form-select-lg" id="select-lg">
                    <option selected disabled>Choose option...</option>
                    <option value="1">Option item 1</option>
                    <option value="2">Option item 2</option>
                    <option value="3">Option item 3</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="select-md" class="form-label">Normal select</label>
                  <select class="form-select" id="select-md">
                    <option selected disabled>Choose option...</option>
                    <option value="1">Option item 1</option>
                    <option value="2">Option item 2</option>
                    <option value="3">Option item 3</option>
                  </select>
                </div>
                <div>
                  <label for="select-sm" class="form-label fs-xs">Small select</label>
                  <select class="form-select form-select-sm" id="select-sm">
                    <option selected disabled>Choose option...</option>
                    <option value="1">Option item 1</option>
                    <option value="2">Option item 2</option>
                    <option value="3">Option item 3</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div id="html-12" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-sizes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-sizes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large text input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-lg&quot; class=&quot;form-label fs-base&quot;&gt;Large input&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-control-lg&quot; id=&quot;input-lg&quot; placeholder=&quot;Large input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Normal text input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-md&quot; class=&quot;form-label&quot;&gt;Normal input&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;input-md&quot; placeholder=&quot;Normal input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Small text input --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;input-sm&quot; class=&quot;form-label fs-xs&quot;&gt;Small input&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-control-sm&quot; id=&quot;input-sm&quot; placeholder=&quot;Small input placeholder&quot;&gt;
&lt;/div&gt;

&lt;!-- Large select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-lg&quot; class=&quot;form-label fs-base&quot;&gt;Large select&lt;/label&gt;
  &lt;select class=&quot;form-select form-select-lg&quot; id=&quot;select-lg&quot;&gt;
    &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Normal select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-md&quot; class=&quot;form-label&quot;&gt;Normal select&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;select-md&quot;&gt;
    &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Small select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;select-sm&quot; class=&quot;form-label fs-xs&quot;&gt;Small select&lt;/label&gt;
  &lt;select class=&quot;form-select form-select-sm&quot; id=&quot;select-sm&quot;&gt;
    &lt;option selected disabled&gt;Choose option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Readonly & disabled -->
  <section id="forms-disabled" class="cd-section pb-sm-2 mb-5">
    <h4>Readonly &amp; disabled</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-13" role="tab"
              aria-controls="preview-13" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-13" role="tab"
              aria-controls="html-13" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-13" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div style="max-width: 400px">
              <input type="text" class="form-control mb-2" value="Readonly input" readonly>
              <input type="text" class="form-control-plaintext fs-sm mb-2" value="Plain text input" readonly>
              <input type="text" class="form-control mb-3" value="Disabled input" disabled>
              <select class="form-select" aria-label="Disabled select" disabled>
                <option selected disabled>Disabled select</option>
                <option value="1">Option item 1</option>
                <option value="2">Option item 2</option>
                <option value="3">Option item 3</option>
              </select>
            </div>
          </div>
          <div id="html-13" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-disabled-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-disabled-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Readonly text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control mb-3&quot; value=&quot;Readonly input&quot; readonly&gt;

&lt;!-- Readonly plain text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control-plaintext fs-sm mb-3&quot; value=&quot;Plain text input&quot; readonly&gt;

&lt;!-- Disabled text input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control mb-3&quot; value=&quot;Disabled input&quot; disabled&gt;

&lt;!-- Disabled select --&gt;
&lt;select class=&quot;form-select mb-3&quot; aria-label=&quot;Disabled select&quot; disabled&gt;
  &lt;option selected disabled&gt;Disabled select&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Option item 1&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Option item 2&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Option item 3&lt;/option&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Inline form -->
  <section id="forms-inline" class="cd-section pb-sm-2 mb-5">
    <h4>Inline form</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-14" role="tab"
              aria-controls="preview-14" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-14" role="tab"
              aria-controls="html-14" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-14" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <form class="row row-cols-sm-auto g-3 align-items-center">
              <div class="col-12">
                <label for="inline-form-input" class="visually-hidden">Full name</label>
                <input type="text" class="form-control" id="inline-form-input" placeholder="Full name">
              </div>
              <div class="col-12">
                <label for="inline-form-input" class="visually-hidden">Preference</label>
                <select class="form-select" id="inline-form-select">
                  <option selected disabled>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input type="checkbox" id="inline-form-check" class="form-check-input">
                  <label for="inline-form-check" class="form-check-label">Remember me</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div id="html-14" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-inline-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-inline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Inline form built with rows and columns --&gt;
&lt;form class=&quot;row row-cols-sm-auto g-3 align-items-center&quot;&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label for=&quot;inline-form-input&quot; class=&quot;visually-hidden&quot;&gt;Full name&lt;/label&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;inline-form-input&quot; placeholder=&quot;Full name&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;label for=&quot;inline-form-input&quot; class=&quot;visually-hidden&quot;&gt;Preference&lt;/label&gt;
    &lt;select class=&quot;form-select&quot; id=&quot;inline-form-select&quot;&gt;
      &lt;option selected disabled&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input type=&quot;checkbox&quot; id=&quot;inline-form-check&quot; class=&quot;form-check-input&quot;&gt;
      &lt;label for=&quot;inline-form-check&quot; class=&quot;form-check-label&quot;&gt;Remember me&lt;/label&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-12&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Help text -->
  <section id="forms-help-text" class="cd-section pb-sm-2 mb-5">
    <h4>Help text</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-15" role="tab"
              aria-controls="preview-15" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-15" role="tab"
              aria-controls="html-15" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-15" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="mb-3" style="max-width: 400px">
              <label for="inputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Your password..."
                aria-labelledby="passwordHelpBlock">
              <div class="form-text" id="passwordHelpBlock">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
                special characters, or emoji.
              </div>
            </div>
          </div>
          <div id="html-15" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-help-text-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-help-text-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Adding helper description text to the form input with .form-text --&gt;
&lt;label for=&quot;inputPassword&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;inputPassword&quot; placeholder=&quot;Your password...&quot; aria-labelledby=&quot;passwordHelpBlock&quot;&gt;
&lt;div class=&quot;form-text&quot; id=&quot;passwordHelpBlock&quot;&gt;
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Validation: status text -->
  <section id="forms-validation-text" class="cd-section pb-sm-2 mb-5">
    <h4>Validation: status text</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-16" role="tab"
              aria-controls="preview-16" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-16" role="tab"
              aria-controls="html-16" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-16" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="validationText01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationText01" placeholder="First name" value="John"
                    required>
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationText02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationText02" placeholder="Last name" value="Doe"
                    required>
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationTextUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="validationTextUsername" placeholder="Username" required>
                  <div class="invalid-feedback">Please choose a username.</div>
                  <div class="valid-feedback">Looks good!</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationText03" class="form-label">City</label>
                  <select class="form-select" id="validationText03" required>
                    <option value="" selected disabled>Choose city...</option>
                    <option value="Dallas">Dallas</option>
                    <option value="Houston">Houston</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Miami">Miami</option>
                    <option value="New York">New York</option>
                  </select>
                  <div class="invalid-feedback">Please provide a valid city.</div>
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationText04" class="form-label">State</label>
                  <select class="form-select" id="validationText04" required>
                    <option value="" selected disabled>Choose state...</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Florida">Florida</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Texas">Texas</option>
                  </select>
                  <div class="invalid-feedback">Please provide a valid state.</div>
                  <div class="valid-feedback">Looks good!</div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationText05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationText05" placeholder="Zip" required>
                  <div class="invalid-feedback">Please provide a valid zip.</div>
                  <div class="valid-feedback">Looks good!</div>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="validationText06" required>
                  <label for="validationText06" class="form-check-label">Agree to terms and conditions</label>
                  <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
          </div>
          <div id="html-16" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-validation-text-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-validation-text-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Forms validation: status text --&gt;
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationText01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationText01&quot; placeholder=&quot;First name&quot; value=&quot;John&quot; required&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationText02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationText02&quot; placeholder=&quot;Last name&quot; value=&quot;Doe&quot; required&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 mb-3&quot;&gt;
      &lt;label for=&quot;validationTextUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTextUsername&quot; placeholder=&quot;Username&quot; required&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please choose a username.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
      &lt;label for=&quot;validationText03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationText03&quot; required&gt;
        &lt;option value=&quot;&quot; selected disabled&gt;Choose city...&lt;/option&gt;
        &lt;option value=&quot;Dallas&quot;&gt;Dallas&lt;/option&gt;
        &lt;option value=&quot;Houston&quot;&gt;Houston&lt;/option&gt;
        &lt;option value=&quot;Los Angeles&quot;&gt;Los Angeles&lt;/option&gt;
        &lt;option value=&quot;Miami&quot;&gt;Miami&lt;/option&gt;
        &lt;option value=&quot;New York&quot;&gt;New York&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid city.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationText04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationText04&quot; required&gt;
        &lt;option value=&quot;&quot; selected disabled&gt;Choose state...&lt;/option&gt;
        &lt;option value=&quot;Arizona&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;Colorado&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;Florida&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;Indiana&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;Kentucky&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;Texas&quot;&gt;Texas&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid state.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 mb-3&quot;&gt;
      &lt;label for=&quot;validationText05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationText05&quot; placeholder=&quot;Zip&quot; required&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Please provide a valid zip.&lt;/div&gt;
      &lt;div class=&quot;valid-feedback&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;validationText06&quot; required&gt;
      &lt;label for=&quot;validationText06&quot; class=&quot;form-check-label&quot;&gt;Agree to terms and conditions&lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;You must agree before submitting.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Validation: status tooltips -->
  <section id="forms-validation-tooltips" class="cd-section">
    <h4>Validation: status tooltips</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-17" role="tab"
              aria-controls="preview-17" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-17" role="tab"
              aria-controls="html-17" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-17" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-4 position-relative mb-4">
                  <label for="validationTooltipt01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationTooltipt01" placeholder="First name"
                    value="John" required>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-4 position-relative mb-4">
                  <label for="validationTooltipt02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationTooltipt02" placeholder="Last name" value="Doe"
                    required>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-4 position-relative mb-4">
                  <label for="validationTooltiptUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="validationTooltiptUsername" placeholder="Username"
                    required>
                  <div class="invalid-tooltip">Please choose a username.</div>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 position-relative mb-4">
                  <label for="validationTooltipt03" class="form-label">City</label>
                  <select class="form-select" id="validationTooltipt03" required>
                    <option value="" selected disabled>Choose city...</option>
                    <option value="Dallas">Dallas</option>
                    <option value="Houston">Houston</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Miami">Miami</option>
                    <option value="New York">New York</option>
                  </select>
                  <div class="invalid-tooltip">Please provide a valid city.</div>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-3 position-relative mb-4">
                  <label for="validationTooltipt04" class="form-label">State</label>
                  <select class="form-select" id="validationTooltipt04" required>
                    <option value="" selected disabled>Choose state...</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Florida">Florida</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Texas">Texas</option>
                  </select>
                  <div class="invalid-tooltip">Please provide a valid state.</div>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
                <div class="col-md-3 position-relative mb-4">
                  <label for="validationTooltipt05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationTooltipt05" placeholder="Zip" required>
                  <div class="invalid-tooltip">Please provide a valid zip.</div>
                  <div class="valid-tooltip">Looks good!</div>
                </div>
              </div>
              <div class="position-relative mb-4">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="validationTooltipt06" required>
                  <label for="validationTooltipt06" class="form-check-label">Agree to terms and conditions</label>
                  <div class="invalid-tooltip">You must agree before submitting.</div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
          </div>
          <div id="html-17" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#forms-validation-tooltips-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="forms-validation-tooltips-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Forms validation: status tooltips --&gt;
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltipt01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipt01&quot; placeholder=&quot;First name&quot; value=&quot;John&quot; required&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltipt02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipt02&quot; placeholder=&quot;Last name&quot; value=&quot;Doe&quot; required&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-4 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltiptUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltiptUsername&quot; placeholder=&quot;Username&quot; required&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please choose a username.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltipt03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationTooltipt03&quot; required&gt;
        &lt;option value=&quot;&quot; selected disabled&gt;Choose city...&lt;/option&gt;
        &lt;option value=&quot;Dallas&quot;&gt;Dallas&lt;/option&gt;
        &lt;option value=&quot;Houston&quot;&gt;Houston&lt;/option&gt;
        &lt;option value=&quot;Los Angeles&quot;&gt;Los Angeles&lt;/option&gt;
        &lt;option value=&quot;Miami&quot;&gt;Miami&lt;/option&gt;
        &lt;option value=&quot;New York&quot;&gt;New York&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid city.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltipt04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
      &lt;select class=&quot;form-select&quot; id=&quot;validationTooltipt04&quot; required&gt;
        &lt;option value=&quot;&quot; selected disabled&gt;Choose state...&lt;/option&gt;
        &lt;option value=&quot;Arizona&quot;&gt;Arizona&lt;/option&gt;
        &lt;option value=&quot;Colorado&quot;&gt;Colorado&lt;/option&gt;
        &lt;option value=&quot;Florida&quot;&gt;Florida&lt;/option&gt;
        &lt;option value=&quot;Indiana&quot;&gt;Indiana&lt;/option&gt;
        &lt;option value=&quot;Kentucky&quot;&gt;Kentucky&lt;/option&gt;
        &lt;option value=&quot;Texas&quot;&gt;Texas&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid state.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-3 position-relative mb-4&quot;&gt;
      &lt;label for=&quot;validationTooltipt05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipt05&quot; placeholder=&quot;Zip&quot; required&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;Please provide a valid zip.&lt;/div&gt;
      &lt;div class=&quot;valid-tooltip&quot;&gt;Looks good!&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;position-relative mb-4&quot;&gt;
    &lt;div class=&quot;form-check&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;validationTooltipt06&quot; required&gt;
      &lt;label for=&quot;validationTooltipt06&quot; class=&quot;form-check-label&quot;&gt;Agree to terms and conditions&lt;/label&gt;
      &lt;div class=&quot;invalid-tooltip&quot;&gt;You must agree before submitting.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
