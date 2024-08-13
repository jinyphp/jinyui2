<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/forms/input-group/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Input group</h1>
    <p class="text-body-secondary mb-4">Extend form controls by adding text, buttons, etc. on either side.</p>
  </section>


  <!-- Addon position -->
  <section id="input-group-addon-position" class="cd-section pb-sm-2 mb-5">
    <h4>Addon position</h4>
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
            <div style="max-width: 400px">
              <div class="input-group mb-3">
                <span class="input-group-text" id="addon-left">
                  <i class="ci-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                  aria-describedby="addon-left">
              </div>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Recipient's e-mail"
                  aria-label="Recipient's e-mail" aria-describedby="addon-right">
                <span class="input-group-text" id="addon-right">@example.com</span>
              </div>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="ci-dollar-sign"></i>
                </span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-addon-position-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-addon-position-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-left&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;addon-left&quot;&gt;
&lt;/div&gt;

&lt;!-- Addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's e-mail&quot; aria-label=&quot;Recipient's e-mail&quot; aria-describedby=&quot;addon-right&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-right&quot;&gt;@example.com&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Addons on both sides --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-dollar-sign&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Icon inside input -->
  <section id="input-group-icon" class="cd-section pb-sm-2 mb-5">
    <h4>Icon inside input</h4>
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
            <div style="max-width: 400px">
              <div class="position-relative mb-3">
                <i class="ci-lock position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="password" class="form-control form-icon-start" placeholder="Password"
                  aria-label="Password">
              </div>
              <div class="position-relative mb-3">
                <input type="search" class="form-control form-icon-end" placeholder="Search" aria-label="Search">
                <i class="ci-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
              </div>
              <div class="position-relative">
                <i class="ci-globe position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="url" class="form-control form-icon-start form-icon-end" placeholder="URL" aria-label="URL">
                <i class="ci-external-link position-absolute top-50 end-0 translate-middle-y me-3"></i>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-icon-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Absolutely positioned icons on top of the input fields --&gt;

&lt;!-- Icon on the left --&gt;
&lt;div class=&quot;position-relative mb-3&quot;&gt;
  &lt;i class=&quot;ci-lock position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
  &lt;input type=&quot;password&quot; class=&quot;form-control form-icon-start&quot; placeholder=&quot;Password&quot; aria-label=&quot;Password&quot;&gt;
&lt;/div&gt;

&lt;!-- Icon on the right --&gt;
&lt;div class=&quot;position-relative mb-3&quot;&gt;
  &lt;input type=&quot;search&quot; class=&quot;form-control form-icon-end&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
  &lt;i class=&quot;ci-search position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;!-- Icons on both sides --&gt;
&lt;div class=&quot;position-relative mb-3&quot;&gt;
  &lt;i class=&quot;ci-globe position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
  &lt;input type=&quot;url&quot; class=&quot;form-control form-icon-start form-icon-end&quot; placeholder=&quot;URL&quot; aria-label=&quot;URL&quot;&gt;
  &lt;i class=&quot;ci-external-link position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Multiple addons -->
  <section id="input-group-addon-multiple" class="cd-section pb-sm-2 mb-5">
    <h4>Multiple addons</h4>
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
            <div style="max-width: 400px">
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="ci-dollar-sign"></i>
                </span>
                <span class="input-group-text">0.00</span>
                <input type="text" class="form-control" placeholder="Amount"
                  aria-label="Dollar amount (with dot and two decimal places)">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Amount"
                  aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">
                  <i class="ci-dollar-sign"></i>
                </span>
                <span class="input-group-text">0.00</span>
              </div>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="ci-user"></i>
                </span>
                <span class="input-group-text">
                  <i class="ci-credit-card"></i>
                </span>
                <input type="text" class="form-control" placeholder="Amount"
                  aria-label="Dollar amount (with dot and two decimal places)">
                <span class="input-group-text">
                  <i class="ci-dollar-sign"></i>
                </span>
                <span class="input-group-text">0.00</span>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-addon-multiple-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-addon-multiple-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Multiple addons on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-dollar-sign&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
&lt;/div&gt;

&lt;!-- Multiple addons on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-dollar-sign&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;

&lt;!-- Multiple addons on both sides --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-credit-card&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Amount&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-dollar-sign&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Different addon / input types -->
  <section id="input-group-types" class="cd-section pb-sm-2 mb-5">
    <h4>Different addon / input types</h4>
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
            <div style="max-width: 400px">
              <div class="input-group mb-3">
                <span class="input-group-text" id="addon-icon">
                  <i class="ci-edit fs-base"></i>
                </span>
                <textarea class="form-control" placeholder="Type your message here..." rows="5" aria-label="Message"
                  aria-describedby="addon-icon"></textarea>
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text text-body-emphasis fw-medium" for="addon-text">Options</label>
                <select class="form-select" id="addon-text">
                  <option selected disabled>Choose one...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-text">
                  <input type="checkbox" class="form-check-input mt-0" aria-label="Checkbox for following text input">
                </div>
                <input type="text" class="form-control" placeholder="Text input" aria-label="Text input with checkbox">
              </div>
              <div class="input-group">
                <div class="input-group-text">
                  <input type="radio" class="form-check-input mt-0" aria-label="Radio button for following text input">
                </div>
                <input type="text" class="form-control" placeholder="Text input"
                  aria-label="Text input with radio button">
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-types-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-types-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Icon addon + textarea --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-icon&quot;&gt;
    &lt;i class=&quot;ci-edit fs-base&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;textarea class=&quot;form-control&quot; placeholder=&quot;Type your message here...&quot; rows=&quot;5&quot; aria-label=&quot;Message&quot; aria-describedby=&quot;addon-icon&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;

&lt;!-- Textual addon + select --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;label class=&quot;input-group-text text-body-emphasis fw-medium&quot; for=&quot;addon-text&quot;&gt;Options&lt;/label&gt;
  &lt;select class=&quot;form-select&quot; id=&quot;addon-text&quot;&gt;
    &lt;option selected disabled&gt;Choose one...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Checkbox addon + text input --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input mt-0&quot; aria-label=&quot;Checkbox for following text input&quot;&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Text input&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
&lt;/div&gt;

&lt;!-- Radio button addon + text input --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-text&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;form-check-input mt-0&quot; aria-label=&quot;Radio button for following text input&quot;&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Text input&quot; aria-label=&quot;Text input with radio button&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Multiple inputs -->
  <section id="input-group-multiple-inputs" class="cd-section pb-sm-2 mb-5">
    <h4>Multiple inputs</h4>
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
            <div style="max-width: 400px">
              <div class="input-group mb-3">
                <span class="input-group-text">
                  <i class="ci-id-card fs-base"></i>
                </span>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="From" aria-label="From time">
                <input type="text" class="form-control" placeholder="To" aria-label="To time">
                <span class="input-group-text">
                  <i class="ci-clock fs-base"></i>
                </span>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-multiple-inputs-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-multiple-inputs-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Multiple inputs with addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-id-card fs-base&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot; aria-label=&quot;First name&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot; aria-label=&quot;Last name&quot;&gt;
&lt;/div&gt;

&lt;!-- Multiple inputs with addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;From&quot; aria-label=&quot;From time&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;To&quot; aria-label=&quot;To time&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-clock fs-base&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Button addons -->
  <section id="input-group-addon-button" class="cd-section pb-sm-2 mb-5">
    <h4>Button addons</h4>
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
            <div style="max-width: 400px">
              <div class="input-group mb-3">
                <button type="button" class="btn btn-primary" id="button-addon-left">Button</button>
                <input type="text" class="form-control" placeholder="Button on the left"
                  aria-label="Example text with button addon" aria-describedby="button-addon-left">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Button on the right"
                  aria-label="Example text with button addon" aria-describedby="button-addon-right">
                <button type="button" class="btn btn-dark" id="button-addon-right">Button</button>
              </div>
              <div class="input-group mb-3">
                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu my-1">
                  <a class="dropdown-item" href="#!">Action</a>
                  <a class="dropdown-item" href="#!">Another action</a>
                  <a class="dropdown-item" href="#!">Something else here</a>
                </div>
                <input type="text" class="form-control" placeholder="Dropdown on the right"
                  aria-label="Text input with dropdown button">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Dropdown on the right"
                  aria-label="Text input with dropdown button">
                <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown"
                  aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                  <a class="dropdown-item" href="#!">Action</a>
                  <a class="dropdown-item" href="#!">Another action</a>
                  <a class="dropdown-item" href="#!">Something else here</a>
                </div>
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buttons on the right"
                  aria-label="Text input with multiple button addons">
                <button type="button" class="btn btn-icon btn-outline-success" aria-label="Confirm">
                  <i class="ci-check"></i>
                </button>
                <button type="button" class="btn btn-icon btn-outline-danger" aria-label="Delete">
                  <i class="ci-trash"></i>
                </button>
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-addon-button-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-addon-button-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;button-addon-left&quot;&gt;Button&lt;/button&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Button on the left&quot; aria-label=&quot;Example text with button addon&quot; aria-describedby=&quot;button-addon-left&quot;&gt;
&lt;/div&gt;

&lt;!-- Button addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Button on the right&quot; aria-label=&quot;Example text with button addon&quot; aria-describedby=&quot;button-addon-right&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot; id=&quot;button-addon-right&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Dropdown addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu my-1&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Dropdown on the right&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;

&lt;!-- Dropdown addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Dropdown on the right&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;div class=&quot;dropdown-menu dropdown-menu-end my-1&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Multiple button addons --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Buttons on the right&quot; aria-label=&quot;Text input with multiple button addons&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-success&quot; aria-label=&quot;Confirm&quot;&gt;
    &lt;i class=&quot;ci-check&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-danger&quot; aria-label=&quot;Delete&quot;&gt;
    &lt;i class=&quot;ci-trash&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Shapes -->
  <section id="input-group-shapes" class="cd-section pb-sm-2 mb-5">
    <h4>Shapes</h4>
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
            <div class="d-flex flex-wrap flex-sm-nowrap gap-4">
              <div class="w-100" style="max-width: 400px">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-icon-rounded">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Rounded (default)"
                    aria-label="Rounded input group with icon addon" aria-describedby="addon-icon-rounded">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text rounded-pill rounded-end-0" id="addon-icon-pill">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control rounded-pill rounded-start-0" placeholder="Pill shape"
                    aria-label="Pill input group with icon addon" aria-describedby="addon-icon-pill">
                </div>
                <div class="input-group">
                  <span class="input-group-text rounded-0" id="addon-icon-square">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control rounded-0" placeholder="Square shape"
                    aria-label="Square input group with icon addon" aria-describedby="addon-icon-square">
                </div>
              </div>
              <div class="w-100" style="max-width: 400px">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Rounded (default)"
                    aria-label="Rounded input group with button addon" aria-describedby="addon-button-rounded">
                  <button type="button" class="btn btn-outline-dark" id="addon-button-rounded">Button</button>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-pill rounded-end-0" placeholder="Pill shape"
                    aria-label="Pill input group with button addon" aria-describedby="addon-button-pill">
                  <button type="button" class="btn btn-outline-dark rounded-pill rounded-start-0"
                    id="addon-button-pill">Button</button>
                </div>
                <div class="input-group">
                  <input type="text" class="form-control rounded-0" placeholder="Square shape"
                    aria-label="Square input group with button addon" aria-describedby="addon-button-square">
                  <button type="button" class="btn btn-outline-dark rounded-0" id="addon-button-square">Button</button>
                </div>
              </div>
            </div>
          </div>
          <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-shapes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Rounded (default) input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-icon-rounded&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Rounded (default)&quot; aria-label=&quot;Rounded input group with icon addon&quot; aria-describedby=&quot;addon-icon-rounded&quot;&gt;
&lt;/div&gt;


&lt;!-- Pill input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text rounded-pill rounded-end-0&quot; id=&quot;addon-icon-pill&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill rounded-start-0&quot; placeholder=&quot;Pill shape&quot; aria-label=&quot;Pill input group with icon addon&quot; aria-describedby=&quot;addon-icon-pill&quot;&gt;
&lt;/div&gt;

&lt;!-- Square input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text rounded-0&quot; id=&quot;addon-icon-square&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control rounded-0&quot; placeholder=&quot;Square shape&quot; aria-label=&quot;Square input group with icon addon&quot; aria-describedby=&quot;addon-icon-square&quot;&gt;
&lt;/div&gt;

&lt;!-- Rounded (default) input group with button addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Rounded (default)&quot; aria-label=&quot;Rounded input group with button addon&quot; aria-describedby=&quot;addon-button-rounded&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot; id=&quot;addon-button-rounded&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Pill input group with button addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control rounded-pill rounded-end-0&quot; placeholder=&quot;Pill shape&quot; aria-label=&quot;Pill input group with button addon&quot; aria-describedby=&quot;addon-button-pill&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-pill rounded-start-0&quot; id=&quot;addon-button-pill&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Square input group with button addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control rounded-0&quot; placeholder=&quot;Square shape&quot; aria-label=&quot;Square input group with button addon&quot; aria-describedby=&quot;addon-button-square&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark rounded-0&quot; id=&quot;addon-button-square&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizes -->
  <section id="input-group-sizes" class="cd-section">
    <h4>Sizes</h4>
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
            <div class="d-flex flex-wrap flex-sm-nowrap gap-4">
              <div class="w-100" style="max-width: 400px">
                <div class="input-group input-group-lg mb-3">
                  <span class="input-group-text" id="addon-icon-large">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Large input group"
                    aria-label="Large input group with icon addon" aria-describedby="addon-icon-large">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-icon-normal">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Normal input group"
                    aria-label="Normal input group with icon addon" aria-describedby="addon-icon-normal">
                </div>
                <div class="input-group input-group-sm">
                  <span class="input-group-text" id="addon-icon-small">
                    <i class="ci-user"></i>
                  </span>
                  <input type="text" class="form-control" placeholder="Small input group"
                    aria-label="Square input group with icon addon" aria-describedby="addon-icon-small">
                </div>
              </div>
              <div class="w-100" style="max-width: 400px">
                <div class="input-group input-group-lg mb-3">
                  <input type="text" class="form-control" placeholder="Large input group"
                    aria-label="Large input group with button addon" aria-describedby="addon-button-large">
                  <button type="button" class="btn btn-outline-dark" id="addon-button-large">Button</button>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Normal input group"
                    aria-label="Normal input group with button addon" aria-describedby="addon-button-normal">
                  <button type="button" class="btn btn-outline-dark" id="addon-button-normal">Button</button>
                </div>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Small input group"
                    aria-label="Small input group with button addon" aria-describedby="addon-button-small">
                  <button type="button" class="btn btn-outline-dark" id="addon-button-small">Button</button>
                </div>
              </div>
            </div>
          </div>
          <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-group-sizes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-group-sizes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group input-group-lg mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-icon-large&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Large input group&quot; aria-label=&quot;Large input group with icon addon&quot; aria-describedby=&quot;addon-icon-large&quot;&gt;
&lt;/div&gt;

&lt;!-- Normal input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-icon-normal&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Normal input group&quot; aria-label=&quot;Normal input group with icon addon&quot; aria-describedby=&quot;addon-icon-normal&quot;&gt;
&lt;/div&gt;

&lt;!-- Small input group with icon addon on the left --&gt;
&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
  &lt;span class=&quot;input-group-text&quot; id=&quot;addon-icon-small&quot;&gt;
    &lt;i class=&quot;ci-user&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Small input group&quot; aria-label=&quot;Square input group with icon addon&quot; aria-describedby=&quot;addon-icon-small&quot;&gt;
&lt;/div&gt;

&lt;!-- Large input group with button addon on the right --&gt;
&lt;div class=&quot;input-group input-group-lg mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Large input group&quot; aria-label=&quot;Large input group with button addon&quot; aria-describedby=&quot;addon-button-large&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot; id=&quot;addon-button-large&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Normal input group with button addon on the right --&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Normal input group&quot; aria-label=&quot;Normal input group with button addon&quot; aria-describedby=&quot;addon-button-normal&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot; id=&quot;addon-button-normal&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Small input group with button addon on the right --&gt;
&lt;div class=&quot;input-group input-group-sm&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Small input group&quot; aria-label=&quot;Small input group with button addon&quot; aria-describedby=&quot;addon-button-small&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot; id=&quot;addon-button-small&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
