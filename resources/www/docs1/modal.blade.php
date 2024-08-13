<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/modal/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Modal</h1>
    <p class="text-body-secondary mb-4">Dialogs for lightboxes, user notifications, or completely custom content.</p>
  </section>


  <!-- Modal markup -->
  <section id="modal-markup" class="cd-section pb-sm-2 mb-5">
    <h4>Modal markup</h4>
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
          <div id="preview-1" class="tab-pane pt-4 pb-2 mt-2 fade show active" role="tabpanel">
            <div class="example-modal bg-dotted rounded p-4 m-n2">
              <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>Modal body content goes here.</p>
                    </div>
                    <div class="modal-footer flex-column flex-sm-row align-items-stretch">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#modal-markup-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="modal-markup-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic modal markup --&gt;
&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot;&gt;Modal title&lt;/h5&gt;
        &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;p&gt;Modal body content goes here.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer flex-column flex-sm-row align-items-stretch&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
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


  <!-- Tabs and forms -->
  <section id="modal-tabs-forms" class="cd-section pb-sm-2 mb-5">
    <h4>Tabs and forms</h4>
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
          <div id="preview-2" class="tab-pane pt-4 pb-2 mt-2 fade show active" role="tabpanel">
            <div class="example-modal bg-dotted rounded py-4 px-3 px-md-4 m-n2">
              <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content row row-cols-1 row-cols-lg-2 flex-row g-0 overflow-hidden">
                    <div class="col order-lg-2">
                      <div class="position-relative d-flex align-items-end h-100 pt-4 px-4 px-sm-5 px-lg-0">
                        <button type="button" class="btn-close position-absolute top-0 end-0 z-2 mt-3 me-3"
                          data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="ratio position-relative z-1" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
                          <img src="../assets/img/account-cover.png" alt="Girl">
                        </div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark"
                          style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark"
                          style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
                      </div>
                    </div>
                    <div class="col d-flex flex-column order-lg-1">
                      <div class="modal-header d-block border-0 pt-sm-5 pt-lg-4 pt-xl-5 px-sm-5 px-lg-4 px-xl-5 pb-2">
                        <ul class="nav nav-tabs mt-sm-n2 mt-lg-0 mt-xl-n2" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link text-nowrap active" data-bs-toggle="tab"
                              data-bs-target="#signin" role="tab" aria-controls="signin" aria-selected="true">
                              <i class="ci-log-in fs-base opacity-75 d-none d-sm-inline-flex ms-n1 me-2"></i>
                              Sign in
                            </button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link text-nowrap" data-bs-toggle="tab"
                              data-bs-target="#signup" role="tab" aria-controls="signup" aria-selected="false">
                              <i class="ci-user fs-base opacity-75 d-none d-sm-inline-flex ms-n1 me-2"></i>
                              Sign up
                            </button>
                          </li>
                        </ul>
                      </div>
                      <div class="modal-body tab-content px-sm-5 px-lg-4 px-xl-5 pb-sm-5 pb-lg-4 pb-xl-5">
                        <div class="tab-pane fade show active" id="signin" role="tabpanel">
                          <h2 class="h5 mb-4">Welcome back</h2>
                          <form>
                            <div class="position-relative mb-4">
                              <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="mb-4">
                              <div class="password-toggle">
                                <input type="password" class="form-control" placeholder="Password" required>
                                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                  <input type="checkbox" class="btn-check">
                                </label>
                              </div>
                            </div>
                            <div class="form-check mb-4">
                              <input type="checkbox" class="form-check-input" id="remember-30">
                              <label for="remember-30" class="form-check-label">Remember for 30 days</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign In</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="signup" role="tabpanel">
                          <h2 class="h5">Create an account</h2>
                          <form>
                            <div class="position-relative mb-3">
                              <label for="register-email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="register-email" required>
                            </div>
                            <div class="mb-4">
                              <label for="register-password" class="form-label">Password</label>
                              <div class="password-toggle">
                                <input type="password" class="form-control" id="register-password" minlength="8"
                                  placeholder="Minimum 8 characters" required>
                                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                                  <input type="checkbox" class="btn-check">
                                </label>
                              </div>
                            </div>
                            <div class="d-flex flex-column gap-2 mb-4">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="save-pass">
                                <label for="save-pass" class="form-check-label">Save the password</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create an account</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#modal-tabs-forms-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="modal-tabs-forms-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Custom modal markup with tabs, forms and cover image --&gt;
&lt;div class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-lg&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content row row-cols-1 row-cols-lg-2 flex-row g-0 overflow-hidden&quot;&gt;
      &lt;div class=&quot;col order-lg-2&quot;&gt;
        &lt;div class=&quot;position-relative d-flex align-items-end h-100 pt-4 px-4 px-sm-5 px-lg-0&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn-close position-absolute top-0 end-0 z-2 mt-3 me-3&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
          &lt;div class=&quot;ratio position-relative z-1&quot; style=&quot;--cz-aspect-ratio: calc(1030 / 1032 * 100%)&quot;&gt;
            &lt;img src=&quot;assets/img/account-cover.png&quot; alt=&quot;Girl&quot;&gt;
          &lt;/div&gt;
          &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 d-none-dark&quot; style=&quot;background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)&quot;&gt;&lt;/span&gt;
          &lt;span class=&quot;position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark&quot; style=&quot;background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)&quot;&gt;&lt;/span&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col d-flex flex-column order-lg-1&quot;&gt;
        &lt;div class=&quot;modal-header d-block border-0 pt-sm-5 px-sm-5 pb-2&quot;&gt;
          &lt;ul class=&quot;nav nav-tabs mt-sm-n2&quot; role=&quot;tablist&quot;&gt;
            &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
              &lt;button type=&quot;button&quot; class=&quot;nav-link text-nowrap active&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#signin&quot; role=&quot;tab&quot; aria-controls=&quot;signin&quot; aria-selected=&quot;true&quot;&gt;
                &lt;i class=&quot;ci-log-in fs-base opacity-75 ms-n1 me-2&quot;&gt;&lt;/i&gt;
                Sign in
              &lt;/button&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
              &lt;button type=&quot;button&quot; class=&quot;nav-link text-nowrap&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#signup&quot; role=&quot;tab&quot; aria-controls=&quot;signup&quot; aria-selected=&quot;false&quot;&gt;
                &lt;i class=&quot;ci-user fs-base opacity-75 ms-n1 me-2&quot;&gt;&lt;/i&gt;
                Sign up
              &lt;/button&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body tab-content px-sm-5 pb-sm-5&quot;&gt;
          &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;signin&quot; role=&quot;tabpanel&quot;&gt;
            &lt;h2 class=&quot;h5 mb-4&quot;&gt;Welcome back&lt;/h2&gt;
            &lt;form&gt;
              &lt;div class=&quot;position-relative mb-4&quot;&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;Email&quot; required&gt;
              &lt;/div&gt;
              &lt;div class=&quot;mb-4&quot;&gt;
                &lt;div class=&quot;password-toggle&quot;&gt;
                  &lt;input type=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;Password&quot; required&gt;
                  &lt;label class=&quot;password-toggle-button fs-lg&quot; aria-label=&quot;Show/hide password&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot;&gt;
                  &lt;/label&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class=&quot;form-check mb-4&quot;&gt;
                &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;remember-30&quot;&gt;
                &lt;label for=&quot;remember-30&quot; class=&quot;form-check-label&quot;&gt;Remember for 30 days&lt;/label&gt;
              &lt;/div&gt;
              &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary w-100&quot;&gt;Sign In&lt;/button&gt;
            &lt;/form&gt;
          &lt;/div&gt;
          &lt;div class=&quot;tab-pane fade&quot; id=&quot;signup&quot; role=&quot;tabpanel&quot;&gt;
            &lt;h2 class=&quot;h5&quot;&gt;Create an account&lt;/h2&gt;
            &lt;form&gt;
              &lt;div class=&quot;position-relative mb-3&quot;&gt;
                &lt;label for=&quot;register-email&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;register-email&quot; required&gt;
              &lt;/div&gt;
              &lt;div class=&quot;mb-4&quot;&gt;
                &lt;label for=&quot;register-password&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                &lt;div class=&quot;password-toggle&quot;&gt;
                  &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;register-password&quot; minlength=&quot;8&quot; placeholder=&quot;Minimum 8 characters&quot; required&gt;
                  &lt;label class=&quot;password-toggle-button fs-lg&quot; aria-label=&quot;Show/hide password&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot;&gt;
                  &lt;/label&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class=&quot;d-flex flex-column gap-2 mb-4&quot;&gt;
                &lt;div class=&quot;form-check&quot;&gt;
                  &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;save-pass&quot;&gt;
                  &lt;label for=&quot;save-pass&quot; class=&quot;form-check-label&quot;&gt;Save the password&lt;/label&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary w-100&quot;&gt;Create an account&lt;/button&gt;
            &lt;/form&gt;
          &lt;/div&gt;
        &lt;/div&gt;
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


  <!-- Live demo -->
  <section id="modal-demo" class="cd-section">
    <h4>Live demo</h4>
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
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalSmall">Small modal</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalDefault">Default modal</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalLarge">Large modal</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalXL">Extra large modal</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalLong">Long modal</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalScroll">Srolling content</button>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalCentered">Vertically centered modal</button>
            <button type="button" class="btn btn-outline-secondary mb-3" data-bs-toggle="modal"
              data-bs-target="#modalFullscreen">Full screen modal</button>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#modal-demo-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="modal-demo-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Launch modal button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#modalId&quot;&gt;
Launch modal
&lt;/button&gt;

&lt;!-- Small modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-sm&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Default modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Large modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-lg&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Extra large modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-xl&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Modal with srolling content --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Vertically centered modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Full screen modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;modalId&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-fullscreen&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
    ...
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
