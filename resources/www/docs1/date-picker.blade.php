<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Date / time picker</h1>
    <p class="text-body-secondary mb-4">A lightweight and powerful date / time picker component.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The Date / time picker component is powered by the <a class="alert-link" href="https://flatpickr.js.org/"
          target="_blank" rel="noreferrer">Flatpickr</a> plugin. To use this component, ensure to include the required
        reference to the plugin's .css and .js files.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/flatpickr/dist/flatpickr.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/flatpickr/dist/flatpickr.min.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p class="mb-2">For <span class="fw-semibold">date range feature</span>, be sure to add as well:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/flatpickr/dist/plugins/rangePlugin.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p class="pt-3 pb-2 mt-2">You can alter date / time picker behavior by specifying options within the
        <code>data-datepicker="{}"</code> attribute.</p>
      <div class="h6">Usefull links:</div>
      <ul class="list-unstyled d-inline-block mb-0">
        <li class="mb-2">
          <a class="d-flex alert-link fw-medium text-decoration-none" href="https://flatpickr.js.org/options/"
            target="_blank" rel="noopener">
            <i class="ci-external-link mt-1 me-2"></i>
            Check all available options here
          </a>
        </li>
        <li class="mb-2">
          <a class="d-flex alert-link fw-medium text-decoration-none" href="https://flatpickr.js.org/examples/"
            target="_blank" rel="noopener">
            <i class="ci-external-link mt-1 me-2"></i>
            Flatpickr usage examples
          </a>
        </li>
      </ul>
    </div>
  </section>


  <!-- Date picker -->
  <section id="picker-date" class="cd-section pb-sm-2 mb-5">
    <h4>Date picker</h4>
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
            <label for="date-1" class="form-label">Choose date <span class="text-body-secondary fs-xs fw-normal">(Y-m-d
                default format)</span></label>
            <div class="position-relative mb-3" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="date-1" data-datepicker
                placeholder="Choose date">
              <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
            <label for="date-2" class="form-label">Choose date <span class="text-body-secondary fs-xs fw-normal">(F j, Y
                format)</span></label>
            <div class="position-relative mb-3" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="date-2"
                data-datepicker='{"dateFormat": "F j, Y"}' placeholder="Choose date">
              <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
            <label for="date-3" class="form-label">Choose date <span class="text-body-secondary fs-xs fw-normal">(M J, y
                format)</span></label>
            <div class="position-relative mb-3" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="date-3"
                data-datepicker='{"dateFormat": "M J, y"}' placeholder="Choose date">
              <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#picker-date-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="picker-date-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Date picker: Y-m-d default date format --&gt;
&lt;label for=&quot;date-1&quot; class=&quot;form-label&quot;&gt;Choose date&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;date-1&quot; data-datepicker placeholder=&quot;Choose date&quot;&gt;
  &lt;i class=&quot;ci-calendar position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;!-- Date picker: F j, Y date format --&gt;
&lt;label for=&quot;date-2&quot; class=&quot;form-label&quot;&gt;Choose date&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;date-2&quot; data-datepicker='{&quot;dateFormat&quot;: &quot;F j, Y&quot;}' placeholder=&quot;Choose date&quot;&gt;
  &lt;i class=&quot;ci-calendar position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;!-- Date picker: M J, y date format --&gt;
&lt;label for=&quot;date-3&quot; class=&quot;form-label&quot;&gt;Choose date&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;date-3&quot; data-datepicker='{&quot;dateFormat&quot;: &quot;M J, y&quot;}' placeholder=&quot;Choose date&quot;&gt;
  &lt;i class=&quot;ci-calendar position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Time picker -->
  <section id="picker-time" class="cd-section pb-sm-2 mb-5">
    <h4>Time picker</h4>
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
            <label for="time-12" class="form-label">Choose time <span
                class="text-body-secondary fs-xs fw-normal">(12-hour format)</span></label>
            <div class="position-relative mb-3" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="time-12" data-datepicker='{
                        "enableTime": true,
                        "noCalendar": true,
                        "dateFormat": "h:i K"
                      }' placeholder="Choose time">
              <i class="ci-clock position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
            <label for="time-24" class="form-label">Choose time <span
                class="text-body-secondary fs-xs fw-normal">(24-hour format)</span></label>
            <div class="position-relative" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="time-24" data-datepicker='{
                        "enableTime": true,
                        "noCalendar": true,
                        "dateFormat": "H:i",
                        "time_24hr": true
                      }' placeholder="Choose time">
              <i class="ci-clock position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#picker-time-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="picker-time-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Time picker (12-hour format) --&gt;
&lt;label for=&quot;time-12&quot; class=&quot;form-label&quot;&gt;Choose time&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;time-12&quot; data-datepicker='{
    &quot;enableTime&quot;: true,
    &quot;noCalendar&quot;: true,
    &quot;dateFormat&quot;: &quot;h:i K&quot;
  }' placeholder=&quot;Choose time&quot;&gt;
  &lt;i class=&quot;ci-clock position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;!-- Time picker (24-hour format) --&gt;
&lt;label for=&quot;time-24&quot; class=&quot;form-label&quot;&gt;Choose time&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;time-24&quot; data-datepicker='{
    &quot;enableTime&quot;: true,
    &quot;noCalendar&quot;: true,
    &quot;dateFormat&quot;: &quot;H:i&quot;,
    &quot;time_24hr&quot;: true
  }' placeholder=&quot;Choose time&quot;&gt;
  &lt;i class=&quot;ci-clock position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Date and time picker -->
  <section id="picker-date-time" class="cd-section pb-sm-2 mb-5">
    <h4>Date and time picker</h4>
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
            <label for="date-time" class="form-label">Choose date and time</label>
            <div class="position-relative" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="date-time" data-datepicker='{
                        "enableTime": true,
                        "dateFormat": "F j, Y H:i"
                      }' placeholder="Choose date and time">
              <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#picker-date-time-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="picker-date-time-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Date and time picker --&gt;
&lt;label for=&quot;date-time&quot; class=&quot;form-label&quot;&gt;Choose date and time&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;date-time&quot; data-datepicker='{
    &quot;enableTime&quot;: true,
    &quot;dateFormat&quot;: &quot;F j, Y H:i&quot;
  }' placeholder=&quot;Choose date and time&quot;&gt;
  &lt;i class=&quot;ci-calendar position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Min and default dates -->
  <section id="picker-min-default-dates" class="cd-section pb-sm-2 mb-5">
    <h4>Min and default dates</h4>
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
            <label for="min-default-dates" class="form-label">Choose date</label>
            <div class="position-relative" style="max-width: 400px">
              <input type="text" class="form-control form-icon-end" id="min-default-dates" data-datepicker='{
                        "dateFormat": "F j, Y",
                        "defaultDate": "today",
                        "minDate": "today"
                      }' placeholder="Choose date">
              <i class="ci-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#picker-min-default-dates-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="picker-min-default-dates-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Date picker with set minimum and default day to "today" --&gt;
&lt;label for=&quot;min-default-dates&quot; class=&quot;form-label&quot;&gt;Choose date&lt;/label&gt;
&lt;div class=&quot;position-relative&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;min-default-dates&quot; data-datepicker='{
    &quot;dateFormat&quot;: &quot;F j, Y&quot;,
    &quot;defaultDate&quot;: &quot;today&quot;,
    &quot;minDate&quot;: &quot;today&quot;
  }' placeholder=&quot;Choose date&quot;&gt;
  &lt;i class=&quot;ci-calendar position-absolute top-50 end-0 translate-middle-y me-3&quot;&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Date range -->
  <section id="picker-date-range" class="cd-section">
    <h4>Date range</h4>
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
            <label class="form-label">Date range</label>
            <div class="input-group" style="max-width: 500px">
              <span class="input-group-text">
                <i class="ci-calendar fs-base"></i>
              </span>
              <input type="text" class="form-control"
                data-datepicker='{"dateFormat": "F j, Y", "linkedInput": "#end-date"}' placeholder="From date">
              <input type="text" class="form-control" data-datepicker='{"dateFormat": "F j, Y"}' id="end-date"
                placeholder="To date">
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#picker-date-range-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="picker-date-range-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Slider with fade transition between slides --&gt;
&lt;label class=&quot;form-label&quot;&gt;Date range&lt;/label&gt;
&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-text&quot;&gt;
    &lt;i class=&quot;ci-calendar fs-base&quot;&gt;&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-datepicker='{&quot;dateFormat&quot;: &quot;F j, Y&quot;, &quot;linkedInput&quot;: &quot;#end-date&quot;}' placeholder=&quot;From date&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; data-datepicker='{&quot;dateFormat&quot;: &quot;F j, Y&quot;}' id=&quot;end-date&quot; placeholder=&quot;To date&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
