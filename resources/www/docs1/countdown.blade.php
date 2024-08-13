<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Countdown</h1>
    <p class="text-body-secondary mb-4">A versatile timer that counts down to any specific date, displaying time
      remaining in years, days, hours, minutes, and seconds.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The Countdown component relies on the <a class="alert-link" href="https://github.com/letstri/timezz"
          target="_blank" rel="noreferrer">Timezz</a> plugin. Ensure that you include the necessary references to the
        plugin's JavaScript file.</p>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/timezz/dist/timezz.js&quot;&gt;&lt;/script&gt;</code></pre>
      <h6 class="pt-4">Data attribute API</h6>
      <p class="mb-1">Cartzilla adds extra layer of data attribute to access the date option of the plugin right from
        the HTML document:</p>
      <code>data-countdown-date='01/15/2025 12:00:00 UTC-08:00'</code>
      <span> - UTC offset can be positive (+) or negative (-).</span>
      <p class="pt-2 mb-2">More on <span class="fw-semibold">UTC offsets</span> by countries <a class="alert-link"
          href="https://en.wikipedia.org/wiki/Time_zone#List_of_UTC_offsets" target="_blank" rel="noopener">read
          here</a>.</p>
    </div>
  </section>


  <!-- Basic example -->
  <section id="countdown-basic" class="cd-section pb-sm-2 mb-5">
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
            <div class="d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h4 mb-0" data-years></div>
                <span class="fs-sm">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-days></div>
                <span class="fs-sm">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-hours></div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-minutes></div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-seconds></div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#countdown-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="countdown-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic countdown example --&gt;
&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-years&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Display no years -->
  <section id="countdown-no-years" class="cd-section pb-sm-2 mb-5">
    <h4>Display no years</h4>
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
            <div class="d-flex mb-2" data-countdown-date="demoDate">
              <div class="text-center">
                <div class="h4 mb-0" data-days></div>
                <span class="fs-sm">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-hours></div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-minutes></div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-seconds></div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#countdown-no-years-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="countdown-no-years-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Countdown example without years label --&gt;
&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2025 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizing -->
  <section id="countdown-sizing" class="cd-section pb-sm-2 mb-5">
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
            <div class="d-flex pb-2 mb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h1 mb-0" data-years></div>
                <span class="fs-lg">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-3 mx-2">:</span>
              <div class="text-center">
                <div class="h1 mb-0" data-days></div>
                <span class="fs-lg">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-3 mx-2">:</span>
              <div class="text-center">
                <div class="h1 mb-0" data-hours></div>
                <span class="fs-lg">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-3 mx-2">:</span>
              <div class="text-center">
                <div class="h1 mb-0" data-minutes></div>
                <span class="fs-lg">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-3 mx-2">:</span>
              <div class="text-center">
                <div class="h1 mb-0" data-seconds></div>
                <span class="fs-lg">secs</span>
              </div>
            </div>
            <div class="d-flex pb-2 mb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h2 mb-0" data-years></div>
                <span>years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h2 mb-0" data-days></div>
                <span>days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h2 mb-0" data-hours></div>
                <span>hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h2 mb-0" data-minutes></div>
                <span>mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h2 mb-0" data-seconds></div>
                <span>secs</span>
              </div>
            </div>
            <div class="d-flex pb-1 mb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h3 mb-0" data-years></div>
                <span class="fs-sm">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h3 mb-0" data-days></div>
                <span class="fs-sm">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h3 mb-0" data-hours></div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h3 mb-0" data-minutes></div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-4 mx-2">:</span>
              <div class="text-center">
                <div class="h3 mb-0" data-seconds></div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
            <div class="d-flex mb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h4 mb-0" data-years></div>
                <span class="fs-sm">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-days></div>
                <span class="fs-sm">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-hours></div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-minutes></div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 mb-0" data-seconds></div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
            <div class="d-flex mb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h5 mb-0" data-years></div>
                <span class="fs-xs">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-lg mx-2">:</span>
              <div class="text-center">
                <div class="h5 mb-0" data-days></div>
                <span class="fs-xs">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-lg mx-2">:</span>
              <div class="text-center">
                <div class="h5 mb-0" data-hours></div>
                <span class="fs-xs">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-lg mx-2">:</span>
              <div class="text-center">
                <div class="h5 mb-0" data-minutes></div>
                <span class="fs-xs">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-lg mx-2">:</span>
              <div class="text-center">
                <div class="h5 mb-0" data-seconds></div>
                <span class="fs-xs">secs</span>
              </div>
            </div>
            <div class="d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h6 mb-0" data-years></div>
                <span class="fs-xs">years</span>
              </div>
              <span class="animate-blinking text-body-secondary mt-n1 mx-2">:</span>
              <div class="text-center">
                <div class="h6 mb-0" data-days></div>
                <span class="fs-xs">days</span>
              </div>
              <span class="animate-blinking text-body-secondary mt-n1 mx-2">:</span>
              <div class="text-center">
                <div class="h6 mb-0" data-hours></div>
                <span class="fs-xs">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary mt-n1 mx-2">:</span>
              <div class="text-center">
                <div class="h6 mb-0" data-minutes></div>
                <span class="fs-xs">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary mt-n1 mx-2">:</span>
              <div class="text-center">
                <div class="h6 mb-0" data-seconds></div>
                <span class="fs-xs">secs</span>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#countdown-sizing-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="countdown-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Sizing --&gt;
&lt;!-- To adjust the size of the countdown, apply heading classes (.h1, .h2, .h3, ..., .display-1, .display-2, .display-3, ...) to the numbers and body size classes (.fs-xs, .fs-sm, .fs-lg, ...) to the labels. --&gt;
&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h1 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-lg&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-3 mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h2 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-4 mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h3 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-4 mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h5 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-xs&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-lg mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;

&lt;div class=&quot;d-flex mb-2&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h6 mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-xs&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary mt-n1 mx-2&quot;&gt;:&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Colors -->
  <section id="countdown-colors" class="cd-section pb-sm-2 mb-5">
    <h4>Colors</h4>
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
            <div class="d-flex mb-2" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center">
                <div class="h4 text-primary mb-0" data-years></div>
                <span class="fs-sm text-primary opacity-75">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 text-success mb-0" data-days></div>
                <span class="fs-sm text-success opacity-75">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 text-warning mb-0" data-hours></div>
                <span class="fs-sm text-warning opacity-75">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 text-danger mb-0" data-minutes></div>
                <span class="fs-sm text-danger opacity-75">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
              <div class="text-center">
                <div class="h4 text-info mb-0" data-seconds></div>
                <span class="fs-sm text-info opacity-75">secs</span>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#countdown-colors-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="countdown-colors-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Supports a predefined color palette or can be configured to use any custom color. --&gt;
&lt;div class=&quot;d-flex&quot; data-countdown-date=&quot;10/15/2030 12:00:00&quot;&gt;

  &lt;!-- Primary --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 text-primary mb-0&quot; data-years&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm text-primary opacity-75&quot;&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Success --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 text-success mb-0&quot; data-days&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm text-success opacity-75&quot;&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Warning --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 text-warning mb-0&quot; data-hours&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm text-warning opacity-75&quot;&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Danger --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 text-danger mb-0&quot; data-minutes&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm text-danger opacity-75&quot;&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;animate-blinking text-body-secondary fs-xl mx-2&quot;&gt;:&lt;/span&gt;

  &lt;!-- Info --&gt;
  &lt;div class=&quot;text-center&quot;&gt;
    &lt;div class=&quot;h4 text-info mb-0&quot; data-seconds&gt;&lt;/div&gt;
    &lt;span class=&quot;fs-sm text-info opacity-75&quot;&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Cards example -->
  <section id="countdown-cards" class="cd-section">
    <h4>Cards example</h4>
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
            <div class="d-flex flex-wrap pb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center mb-2">
                <div class="border rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-years></div>
                </div>
                <span class="fs-sm">years</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="border rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-days></div>
                </div>
                <span class="fs-sm">days</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="border rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-hours></div>
                </div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="border rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-minutes></div>
                </div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="border rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-seconds></div>
                </div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
            <div class="bg-body-tertiary p-3 mb-4">
              <div class="d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00">
                <div class="text-center mb-2">
                  <div class="bg-body rounded shadow-sm p-2">
                    <div class="h3 fw-medium mb-0 mx-1" data-years></div>
                  </div>
                  <span class="fs-sm">years</span>
                </div>
                <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-body rounded shadow-sm p-2">
                    <div class="h3 fw-medium mb-0 mx-1" data-days></div>
                  </div>
                  <span class="fs-sm">days</span>
                </div>
                <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-body rounded shadow-sm p-2">
                    <div class="h3 fw-medium mb-0 mx-1" data-hours></div>
                  </div>
                  <span class="fs-sm">hours</span>
                </div>
                <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-body rounded shadow-sm p-2">
                    <div class="h3 fw-medium mb-0 mx-1" data-minutes></div>
                  </div>
                  <span class="fs-sm">mins</span>
                </div>
                <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
                <div class="text-center mb-2">
                  <div class="bg-body rounded shadow-sm p-2">
                    <div class="h3 fw-medium mb-0 mx-1" data-seconds></div>
                  </div>
                  <span class="fs-sm">secs</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-wrap pt-2 pb-4" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center mb-2">
                <div class="bg-body-secondary rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-years></div>
                </div>
                <span class="fs-sm">years</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-body-secondary rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-days></div>
                </div>
                <span class="fs-sm">days</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-body-secondary rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-hours></div>
                </div>
                <span class="fs-sm">hours</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-body-secondary rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-minutes></div>
                </div>
                <span class="fs-sm">mins</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-body-secondary rounded p-2">
                  <div class="h3 fw-medium mb-0 mx-1" data-seconds></div>
                </div>
                <span class="fs-sm">secs</span>
              </div>
            </div>
            <div class="d-flex flex-wrap pt-2" data-countdown-date="10/15/2030 12:00:00">
              <div class="text-center mb-2">
                <div class="bg-warning-subtle rounded p-2">
                  <div class="text-warning h3 fw-medium mb-0 mx-1" data-years></div>
                </div>
                <span class="text-warning fs-sm">years</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-primary-subtle rounded p-2">
                  <div class="text-primary h3 fw-medium mb-0 mx-1" data-days></div>
                </div>
                <span class="text-primary fs-sm">days</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-info-subtle rounded p-2">
                  <div class="text-info h3 fw-medium mb-0 mx-1" data-hours></div>
                </div>
                <span class="text-info fs-sm">hours</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-danger-subtle rounded p-2">
                  <div class="text-danger h3 fw-medium mb-0 mx-1" data-minutes></div>
                </div>
                <span class="text-danger fs-sm">mins</span>
              </div>
              <span class="blinking text-body-secondary fs-2 mx-2">:</span>
              <div class="text-center mb-2">
                <div class="bg-success-subtle rounded p-2">
                  <div class="text-success h3 fw-medium mb-0 mx-1" data-seconds></div>
                </div>
                <span class="text-success fs-sm">secs</span>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#countdown-cards-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="countdown-cards-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Different card styles --&gt;
&lt;!-- Border --&gt;
&lt;div class="d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00"&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="border rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-years&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="border rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="border rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-hours&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="border rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-minutes&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="border rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-seconds&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Body background + shadow --&gt;
&lt;div class="d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00"&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body rounded shadow-sm p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-years&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body rounded shadow-sm p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body rounded shadow-sm p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-hours&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body rounded shadow-sm p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-minutes&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="animate-blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body rounded shadow-sm p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-seconds&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary background --&gt;
&lt;div class="d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00"&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body-secondary rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-years&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body-secondary rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body-secondary rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-hours&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body-secondary rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-minutes&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-body-secondary rounded p-2"&gt;
      &lt;div class="h3 fw-medium mb-0 mx-1" data-seconds&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="fs-sm"&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Theme subtle backgrounds + color --&gt;
&lt;div class="d-flex flex-wrap" data-countdown-date="10/15/2030 12:00:00"&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-warning-subtle rounded p-2"&gt;
      &lt;div class="text-warning h3 fw-medium mb-0 mx-1" data-years&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="text-warning fs-sm"&gt;years&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-primary-subtle rounded p-2"&gt;
      &lt;div class="text-primary h3 fw-medium mb-0 mx-1" data-days&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="text-primary fs-sm"&gt;days&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-info-subtle rounded p-2"&gt;
      &lt;div class="text-info h3 fw-medium mb-0 mx-1" data-hours&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="text-info fs-sm"&gt;hours&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-danger-subtle rounded p-2"&gt;
      &lt;div class="text-danger h3 fw-medium mb-0 mx-1" data-minutes&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="text-danger fs-sm"&gt;mins&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class="blinking text-body-secondary fs-2 mx-2"&gt;:&lt;/span&gt;
  &lt;div class="text-center mb-2"&gt;
    &lt;div class="bg-success-subtle rounded p-2"&gt;
      &lt;div class="text-success h3 fw-medium mb-0 mx-1" data-seconds&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class="text-success fs-sm"&gt;secs&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
