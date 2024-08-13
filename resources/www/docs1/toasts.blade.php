<x-www-app><x-www-layout>
  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/toasts/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Toasts</h1>
    <p class="text-body-secondary mb-4">Push notifications to your visitors with a toast, a lightweight and easily
      customizable alert message.</p>
  </section>


  <!-- Tiny variant -->
  <section id="toasts-tiny" class="cd-section pb-sm-2 mb-5">
    <h4>Tiny variant</h4>
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
          <div id="preview-1" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <div class="row g-md-5">
              <div class="col-sm-6 col-xl-5">
                <div class="toast fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-primary border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close  ms-auto" data-bs-dismiss="toast"
                      aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-secondary border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-success border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-danger border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-warning border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-info border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-light border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="light">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn btn-sm fs-base opacity-75 border-0 p-0 ms-auto"
                      data-bs-dismiss="toast" aria-label="Close">
                      <i class="ci-close"></i>
                    </button>
                  </div>
                </div>
                <div class="toast text-bg-dark border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-5">
                <div class="toast border-primary fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-secondary fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-success fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-danger fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-warning fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-info fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-dark fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-tiny-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-tiny-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default tiny toast. Remove .fade and .show classes to make it initially hidden. --&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Color variations --&gt;

&lt;!-- Primary background --&gt;
&lt;div class=&quot;toast text-bg-primary border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Secondary background --&gt;
&lt;div class=&quot;toast text-bg-secondary border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Success background --&gt;
&lt;div class=&quot;toast text-bg-success border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Danger background --&gt;
&lt;div class=&quot;toast text-bg-danger border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Warning background --&gt;
&lt;div class=&quot;toast text-bg-warning border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Info background --&gt;
&lt;div class=&quot;toast text-bg-info border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Light background --&gt;
&lt;div class=&quot;toast text-bg-light border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Dark background --&gt;
&lt;div class=&quot;toast text-bg-dark border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Primary border --&gt;
&lt;div class=&quot;toast border-primary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Secondary border --&gt;
&lt;div class=&quot;toast border-secondary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Success border --&gt;
&lt;div class=&quot;toast border-success fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Danger border --&gt;
&lt;div class=&quot;toast border-danger fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Warning border --&gt;
&lt;div class=&quot;toast border-warning fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Info border --&gt;
&lt;div class=&quot;toast border-info fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;

&lt;!-- Dark border --&gt;
&lt;div class=&quot;toast border-dark fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
...
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Tiny with icon -->
  <section id="toasts-tiny-icon" class="cd-section pb-sm-2 mb-5">
    <h4>Tiny with icon</h4>
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
          <div id="preview-2" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <div class="row g-md-5">
              <div class="col-sm-6 col-xl-5">
                <div class="toast fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-settings fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-primary border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-bell fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-secondary border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-clock fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-success border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-check-circle fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-danger border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-banned fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-warning border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-alert-triangle fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-info border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-info fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast text-bg-light border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="light">
                  <div class="d-flex">
                    <i class="ci-unlock fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn btn-sm fs-base opacity-75 border-0 p-0 ms-auto"
                      data-bs-dismiss="toast" aria-label="Close">
                      <i class="ci-close"></i>
                    </button>
                  </div>
                </div>
                <div class="toast text-bg-dark border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="dark">
                  <div class="d-flex">
                    <i class="ci-map-pin fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-5">
                <div class="toast border-primary fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-bell text-primary fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-secondary fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-clock text-secondary fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-success fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-check-circle text-success fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-danger fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-banned text-danger fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-warning fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-alert-triangle text-warning fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-info fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-info text-info fs-base mt-1 me-2"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
                <div class="toast border-dark fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                    <i class="ci-map-pin text-dark fs-base mt-1 me-2 d-none-dark"></i>
                    <i class="ci-map-pin text-light fs-base mt-1 me-2 d-none d-flex-dark"></i>
                    <div class="toast-body me-2">
                      Hello, world! This is a toast message.
                    </div>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-tiny-icon-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-tiny-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default tiny toast with icon. Remove .fade and .show classes to make it initially hidden. --&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-settings fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Color variations and icons --&gt;

&lt;!-- Primary background --&gt;
&lt;div class=&quot;toast text-bg-primary border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-bell fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary background --&gt;
&lt;div class=&quot;toast text-bg-secondary border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-clock fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success background --&gt;
&lt;div class=&quot;toast text-bg-success border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-check-circle fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger background --&gt;
&lt;div class=&quot;toast text-bg-danger border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-banned fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning background --&gt;
&lt;div class=&quot;toast text-bg-warning border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-alert-triangle fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info background --&gt;
&lt;div class=&quot;toast text-bg-info border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-info fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Light background --&gt;
&lt;div class=&quot;toast text-bg-light border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;light&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-unlock fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm fs-base opacity-75 border-0 p-0 ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
&lt;i class=&quot;ci-close&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark background --&gt;
&lt;div class=&quot;toast text-bg-dark border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;dark&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-map-pin fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Primary border --&gt;
&lt;div class=&quot;toast border-primary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-bell text-primary fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary border --&gt;
&lt;div class=&quot;toast border-secondary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-clock text-secondary fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success border --&gt;
&lt;div class=&quot;toast border-success fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-check-circle text-success fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger border --&gt;
&lt;div class=&quot;toast border-danger fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-banned text-danger fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning border --&gt;
&lt;div class=&quot;toast border-warning fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-alert-triangle text-warning fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info border --&gt;
&lt;div class=&quot;toast border-info fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-info text-info fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark border --&gt;
&lt;div class=&quot;toast border-dark fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
&lt;i class=&quot;ci-map-pin text-dark fs-base mt-1 me-2 d-none-dark&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ci-map-pin text-light fs-base mt-1 me-2 d-none d-flex-dark&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- With header and icon -->
  <section id="toasts-header-icon" class="cd-section pb-sm-2 mb-5">
    <h4>With header and icon</h4>
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
            <div class="row g-md-5">
              <div class="col-sm-6 col-xl-5">
                <div class="toast fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-settings text-body-secondary fs-base me-2"></i>
                    <span class="fw-semibold">Default toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-primary fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-bell text-primary fs-base me-2"></i>
                    <span class="fw-semibold">Primary toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-secondary fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-clock text-secondary fs-base me-2"></i>
                    <span class="fw-semibold">Secondary toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-success fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-check-circle text-success fs-base me-2"></i>
                    <span class="fw-semibold">Success toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-danger fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-banned text-danger fs-base me-2"></i>
                    <span class="fw-semibold">Danger toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-5">
                <div class="toast border-warning fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-alert-triangle text-warning fs-base me-2"></i>
                    <span class="fw-semibold">Warning toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-info fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-info text-info fs-base me-2"></i>
                    <span class="fw-semibold">Info toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast text-bg-light border-0 fade show mb-3" role="alert" aria-live="assertive"
                  aria-atomic="true" data-bs-theme="light">
                  <div class="toast-header text-dark">
                    <i class="ci-unlock fs-base me-2"></i>
                    <span class="fw-semibold">Light toast</span>
                    <button type="button" class="btn btn-sm fs-base opacity-75 border-0 p-0 ms-auto"
                      data-bs-dismiss="toast" aria-label="Close">
                      <i class="ci-close"></i>
                    </button>
                  </div>
                  <div class="toast-body text-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
                <div class="toast border-dark fade show mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="ci-map-pin text-dark fs-base me-2 d-none-dark"></i>
                    <i class="ci-map-pin text-light fs-base me-2 d-none d-flex-dark"></i>
                    <span class="fw-semibold">Dark toast</span>
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body me-2">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-header-icon-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-header-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default toast. Remove .fade and .show classes to make it initially hidden. --&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-settings text-body-secondary fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Default toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Primary toast --&gt;
&lt;div class=&quot;toast border-primary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-bell text-primary fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Primary toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary toast --&gt;
&lt;div class=&quot;toast border-secondary fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-clock text-secondary fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Secondary toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success toast --&gt;
&lt;div class=&quot;toast border-success fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-check-circle text-success fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Success toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger toast --&gt;
&lt;div class=&quot;toast border-danger fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-banned text-danger fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Danger toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning toast --&gt;
&lt;div class=&quot;toast border-warning fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-alert-triangle text-warning fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Warning toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info toast --&gt;
&lt;div class=&quot;toast border-info fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-info text-info fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Info toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Light toast --&gt;
&lt;div class=&quot;toast text-bg-light border-0 fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot; data-bs-theme=&quot;light&quot;&gt;
&lt;div class=&quot;toast-header text-dark&quot;&gt;
&lt;i class=&quot;ci-unlock fs-base me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Light toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm fs-base opacity-75 border-0 p-0 ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;
&lt;i class=&quot;ci-close&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body text-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark toast --&gt;
&lt;div class=&quot;toast border-dark fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-map-pin text-dark fs-base me-2 d-none-dark&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;ci-map-pin text-light fs-base me-2 d-none d-flex-dark&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Dark toast&lt;/span&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Action buttons -->
  <section id="toasts-buttons" class="cd-section pb-sm-2 mb-5">
    <h4>Action buttons</h4>
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
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <i class="ci-bell text-primary fs-base mt-1 me-2"></i>
                <span class="fw-semibold">Notification center</span>
                <small class="text-body-secondary ms-auto">2 seconds ago</small>
              </div>
              <div class="toast-body me-2">
                You have 10 unread messages.
              </div>
              <div class="d-flex pt-3">
                <button type="button" class="btn btn-sm btn-primary me-2">Read all</button>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="toast">Close</button>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-buttons-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-buttons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Toast with action buttons --&gt;
&lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-bell text-primary fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Notification center&lt;/span&gt;
&lt;small class=&quot;text-body-secondary ms-auto&quot;&gt;2 seconds ago&lt;/small&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body me-2&quot;&gt;
You have 10 unread messages.
&lt;/div&gt;
&lt;div class=&quot;d-flex pt-3&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary me-2&quot;&gt;Read all&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Placement -->
  <section id="toasts-placement" class="cd-section pb-sm-2 mb-5">
    <h4>Placement</h4>
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
            <form>
              <div class="mb-3">
                <label class="form-label" for="selectToastPlacement">Toast placement</label>
                <select class="form-select" id="selectToastPlacement" style="max-width: 300px">
                  <option value="" selected>Select a position...</option>
                  <option value="top-0 start-0">Top left</option>
                  <option value="top-0 start-50 translate-middle-x">Top center</option>
                  <option value="top-0 end-0">Top right</option>
                  <option value="top-50 start-0 translate-middle-y">Middle left</option>
                  <option value="top-50 start-50 translate-middle">Middle center</option>
                  <option value="top-50 end-0 translate-middle-y">Middle right</option>
                  <option value="bottom-0 start-0">Bottom left</option>
                  <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                  <option value="bottom-0 end-0">Bottom right</option>
                </select>
              </div>
            </form>
            <div aria-live="polite" aria-atomic="true" class="position-relative bg-dotted rounded"
              style="height: 240px">
              <div class="toast-container p-3" id="toastPlacement">
                <div class="toast fade show">
                  <div class="toast-header">
                    <i class="ci-bell fs-base mt-1 me-2"></i>
                    <strong class="me-auto">Toast title</strong>
                    <small class="text-body-secondary">11 mins ago</small>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-placement-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-placement-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Top left --&gt;
&lt;div class=&quot;toast-container p-3 top-0 start-0&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Top center --&gt;
&lt;div class=&quot;toast-container p-3 top-0 start-50 translate-middle-x&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Top right --&gt;
&lt;div class=&quot;toast-container p-3 top-0 end-0&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Middle left --&gt;
&lt;div class=&quot;toast-container p-3 top-50 start-0 translate-middle-y&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Middle center --&gt;
&lt;div class=&quot;toast-container p-3 top-50 start-50 translate-middle&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Middle right --&gt;
&lt;div class=&quot;toast-container p-3 top-50 end-0 translate-middle-y&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Bottom left --&gt;
&lt;div class=&quot;toast-container p-3 bottom-0 start-0&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Bottom center --&gt;
&lt;div class=&quot;toast-container p-3 bottom-0 start-50 translate-middle-x&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Bottom right --&gt;
&lt;div class=&quot;toast-container p-3 bottom-0 end-0&quot;&gt;
&lt;div class=&quot;toast&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Live demo -->
  <section id="toasts-live" class="cd-section">
    <h4>Live demo</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 320px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link px-3 active" data-bs-toggle="tab" data-bs-target="#preview-6"
              role="tab" aria-controls="preview-6" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link px-3" data-bs-toggle="tab" data-bs-target="#html-6" role="tab"
              aria-controls="html-6" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link px-3" data-bs-toggle="tab" data-bs-target="#js-6" role="tab"
              aria-controls="js-6" aria-selected="false">
              <span class=" fs-xsfw-medium opacity-75 ms-n1 me-2">{..}</span>
              JS
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
              <div class="toast border-primary" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <i class="ci-bell text-primary fs-base mt-1 me-2"></i>
                  <strong class="me-auto">Toast title</strong>
                  <small class="text-body-secondary">5 mins ago</small>
                  <button type="button" class="btn-close ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-live-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-live-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Trigger button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveToastBtn&quot;&gt;Show live toast&lt;/button&gt;

&lt;!-- Toast inside fixed positioned container --&gt;
&lt;div class=&quot;toast-container position-fixed bottom-0 end-0 p-3&quot;&gt;
&lt;div class=&quot;toast border-primary&quot; id=&quot;liveToast&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
&lt;div class=&quot;toast-header&quot;&gt;
&lt;i class=&quot;ci-bell text-primary fs-base mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;strong class=&quot;me-auto&quot;&gt;Toast title&lt;/strong&gt;
&lt;small class=&quot;text-body-secondary&quot;&gt;5 mins ago&lt;/small&gt;
&lt;button type=&quot;button&quot; class=&quot;btn-close ms-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;toast-body&quot;&gt;
Hello, world! This is a toast message.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
          <div id="js-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#toasts-live-js-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="toasts-live-js-code" class="code-highlight mx-n2 mb-n2"><code class="language-javascript">(() =&gt; {
'use strict'

const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
toastTrigger.addEventListener('click', () =&gt; {
toastBootstrap.show()
})
}
})()</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
