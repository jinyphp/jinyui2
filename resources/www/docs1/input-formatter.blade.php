<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Input text formatter</h1>
    <p class="text-body-secondary mb-4">Format input text content when you are typing.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info bg-opacity-10 border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>Input text formatting feature is enabled through the <a class="alert-link"
          href="https://nosir.github.io/cleave.js/" target="_blank" rel="noreferrer">Cleave.js</a> plugin. To use this
        component, make sure to include the required reference to the plugin's <code>.js</code> file before the closing
        <code>&lt;/body&gt;</code> tag and above <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/cleave.js/dist/cleave.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Payment card number -->
  <section id="input-formatter-card" class="cd-section pb-sm-2 mb-5">
    <h4>Payment card number</h4>
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
              <label for="card" class="form-label">Card number</label>
              <div class="position-relative" data-input-format='{"creditCard": true}'>
                <input type="text" class="form-control form-icon-end" id="card" placeholder="Enter card number">
                <span class="position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3"
                  data-card-icon></span>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-card-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-card-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a card number with updating card icon --&gt;
&lt;label for=&quot;card&quot; class=&quot;form-label&quot;&gt;Card number&lt;/label&gt;
&lt;div class=&quot;position-relative&quot; data-input-format='{&quot;creditCard&quot;: true}'&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control form-icon-end&quot; id=&quot;card&quot; placeholder=&quot;Enter card number&quot;&gt;
  &lt;span class=&quot;position-absolute d-flex top-50 end-0 translate-middle-y fs-5 text-body-tertiary me-3&quot; data-card-icon&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Phone number -->
  <section id="input-formatter-phone" class="cd-section pb-sm-2 mb-5">
    <h4>Phone number</h4>
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
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" class="form-control" id="phone"
                data-input-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                placeholder="+1 ___ ___ __">
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-phone-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-phone-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a phone number --&gt;
&lt;label for=&quot;phone&quot; class=&quot;form-label&quot;&gt;Phone&lt;/label&gt;
&lt;input type=&quot;tel&quot; class=&quot;form-control&quot; id=&quot;phone&quot; data-input-format='{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}' placeholder=&quot;+1 ___ ___ __&quot;&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Date -->
  <section id="input-formatter-date" class="cd-section position-relative z-3 pb-sm-2 mb-5">
    <h4>Date</h4>
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
            <div style="max-width: 400px">
              <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date"
                  data-input-format='{"date": true, "delimiter": "-", "datePattern": ["Y", "m", "d"]}'
                  placeholder="yyyy-mm-dd">
              </div>
              <label for="date-short" class="form-label">Date short</label>
              <input type="text" class="form-control" id="date-short"
                data-input-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="mm/yy">
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-date-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-date-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a full date  --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;date&quot; class=&quot;form-label&quot;&gt;Date&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;date&quot; data-input-format='{&quot;date&quot;: true, &quot;delimiter&quot;: &quot;-&quot;, &quot;datePattern&quot;: [&quot;Y&quot;, &quot;m&quot;, &quot;d&quot;]}' placeholder=&quot;yyyy-mm-dd&quot;&gt;
&lt;/div&gt;

&lt;!-- Input text formatted as a short date  --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;label for=&quot;date-short&quot; class=&quot;form-label&quot;&gt;Date short&lt;/label&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;date-short&quot; data-input-format='{&quot;date&quot;: true, &quot;datePattern&quot;: [&quot;m&quot;, &quot;y&quot;]}' placeholder=&quot;mm/yy&quot;&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Time -->
  <section id="input-formatter-time" class="cd-section pb-sm-2 mb-5">
    <h4>Time</h4>
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
            <div style="max-width: 400px">
              <label for="time" class="form-label">Time</label>
              <input type="text" class="form-control" id="time"
                data-input-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm">
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-time-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-time-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Input text formatted as a time --&gt;
&lt;label for=&quot;time&quot; class=&quot;form-label&quot;&gt;Time&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;time&quot; data-input-format='{&quot;time&quot;: true, &quot;timePattern&quot;: [&quot;h&quot;, &quot;m&quot;]}' placeholder=&quot;hh:mm&quot;&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Custom blocks -->
  <section id="input-formatter-custom" class="cd-section pb-sm-2 mb-5">
    <h4>Custom blocks</h4>
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
            <div style="max-width: 400px">
              <label for="custom" class="form-label">Custom blocks</label>
              <input type="text" class="form-control" id="custom"
                data-input-format='{"blocks": [4, 3, 3, 4, 2], "delimiters": [".", " ", "/", "-"]}'
                placeholder="blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']">
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-custom-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-custom-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Custom input text format --&gt;
&lt;label for=&quot;custom&quot; class=&quot;form-label&quot;&gt;Custom blocks&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;custom&quot; data-input-format='{&quot;blocks&quot;: [4, 3, 3, 4, 2], &quot;delimiters&quot;: [&quot;.&quot;, &quot; &quot;, &quot;/&quot;, &quot;-&quot;]}' placeholder=&quot;blocks:[4, 3, 3, 4, 2], delimiters: ['.', ' ', '/', '-']&quot;&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Prefix and uppercase -->
  <section id="input-formatter-prefix" class="cd-section">
    <h4>Prefix and uppercase</h4>
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
              <label for="prefix" class="form-label">Prefix + uppercase</label>
              <input type="text" class="form-control" id="prefix"
                data-input-format='{"prefix": "PREFIX", "delimiter": "-", "blocks": [6, 4, 5, 3], "uppercase": true}'>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#input-formatter-prefix-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="input-formatter-prefix-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!--  Input text formatted as uppercase with default prefix --&gt;
&lt;label for=&quot;prefix&quot; class=&quot;form-label&quot;&gt;Prefix + uppercase&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prefix&quot; data-input-format='{&quot;prefix&quot;: &quot;PREFIX&quot;, &quot;delimiter&quot;: &quot;-&quot;, &quot;blocks&quot;: [6, 4, 5, 3], &quot;uppercase&quot;: true}'&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
