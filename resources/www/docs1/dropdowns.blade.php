<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/dropdowns/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Dropdowns</h1>
    <p class="text-body-secondary mb-4">Toggle contextual overlays for displaying lists of links or other content.</p>
  </section>


  <!-- Static examples -->
  <section id="dropdowns-static" class="cd-section pb-sm-2 mb-5">
    <h4>Static examples</h4>
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
            <ul class="dropdown-menu d-inline-block align-top me-4 mb-3" style="position: static; width: 12.5rem">
              <li><a class="dropdown-item" href="#!">Regular link</a></li>
              <li><a class="dropdown-item" href="#!">Another regular link</a></li>
              <li><a class="dropdown-item active" href="#!">Active link</a></li>
              <li><a class="dropdown-item disabled" href="#!">Disabled link</a></li>
            </ul>
            <ul class="dropdown-menu d-inline-block align-top me-4 mb-3" style="position: static; width: 12.5rem">
              <li>
                <h6 class="dropdown-header">Dropdown header</h6>
              </li>
              <li><a class="dropdown-item" href="#!">Action</a></li>
              <li><a class="dropdown-item" href="#!">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#!">Separated link</a></li>
            </ul>
            <ul class="dropdown-menu d-inline-block align-top mb-3" style="position: static; width: 12.5rem">
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-home opacity-75 me-2"></i>
                  Home
                  <span class="badge bg-primary rounded-pill ms-auto">2</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-user opacity-75 me-2"></i>
                  Profile
                  <span class="badge bg-warning rounded-pill ms-auto">3</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-message-square opacity-75 me-2"></i>
                  Messages
                  <span class="badge bg-success rounded-pill ms-auto">5</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-settings opacity-75 me-2"></i>
                  Settings
                </a>
              </li>
            </ul>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-static-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-static-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic dropdown --&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot;&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Dropdown with header and divider --&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
  &lt;li&gt;&lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Dropdown with icons and badges --&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-home opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Home
      &lt;span class=&quot;badge bg-primary rounded-pill ms-auto&quot;&gt;2&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-user opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Profile
      &lt;span class=&quot;badge bg-warning rounded-pill ms-auto&quot;&gt;3&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-message-square opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Messages
      &lt;span class=&quot;badge bg-success rounded-pill ms-auto&quot;&gt;5&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-settings opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Settings
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Dark dropdowns -->
  <section id="dropdowns-dark" class="cd-section pb-sm-2 mb-5">
    <h4>Dark dropdowns</h4>
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
            <ul class="dropdown-menu d-inline-block align-top me-4 mb-3" style="position: static; width: 12.5rem"
              data-bs-theme="dark">
              <li><a class="dropdown-item" href="#!">Regular link</a></li>
              <li><a class="dropdown-item" href="#!">Another regular link</a></li>
              <li><a class="dropdown-item active" href="#!">Active link</a></li>
              <li><a class="dropdown-item disabled" href="#!">Disabled link</a></li>
            </ul>
            <ul class="dropdown-menu d-inline-block align-top me-4 mb-3" style="position: static; width: 12.5rem"
              data-bs-theme="dark">
              <li>
                <h6 class="dropdown-header">Dropdown header</h6>
              </li>
              <li><a class="dropdown-item" href="#!">Action</a></li>
              <li><a class="dropdown-item" href="#!">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#!">Separated link</a></li>
            </ul>
            <ul class="dropdown-menu d-inline-block align-top mb-3" style="position: static; width: 12.5rem"
              data-bs-theme="dark">
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-home opacity-75 me-2"></i>
                  Home
                  <span class="badge bg-primary rounded-pill ms-auto">2</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-user opacity-75 me-2"></i>
                  Profile
                  <span class="badge bg-warning rounded-pill ms-auto">3</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-message-square opacity-75 me-2"></i>
                  Messages
                  <span class="badge bg-success rounded-pill ms-auto">5</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <i class="ci-settings opacity-75 me-2"></i>
                  Settings
                </a>
              </li>
            </ul>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-dark-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-dark-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic dark dropdown --&gt;
&lt;ul class=&quot;dropdown-menu&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot;&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Dark dropdown with header and divider --&gt;
&lt;ul class=&quot;dropdown-menu&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;li&gt;&lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Dark dropdown with icons and badges --&gt;
&lt;ul class=&quot;dropdown-menu&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-home opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Home
      &lt;span class=&quot;badge bg-primary rounded-pill ms-auto&quot;&gt;2&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-user opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Profile
      &lt;span class=&quot;badge bg-warning rounded-pill ms-auto&quot;&gt;3&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-message-square opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Messages
      &lt;span class=&quot;badge bg-success rounded-pill ms-auto&quot;&gt;5&lt;/span&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;
      &lt;i class=&quot;ci-settings opacity-75 me-2&quot;&gt;&lt;/i&gt;
      Settings
    &lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Forms inside dropdown -->
  <section id="dropdowns-forms" class="cd-section pb-sm-2 mb-5">
    <h4>Forms inside dropdown</h4>
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
          <div id="preview-3" class="tab-pane pt-4 pb-3 mt-3 fade show active" role="tabpanel">
            <div class="dropdown-menu d-block" style="position: static; width: 19rem;">
              <form class="p-3" autocomplete="off">
                <div class="mb-3">
                  <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail" placeholder="email@example.com"
                    required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword" placeholder="Password"
                    required>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">Remember me</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
              </form>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-forms-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-forms-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Forms inside dropdown --&gt;
&lt;div class=&quot;dropdown-menu&quot;&gt;
  &lt;form class=&quot;p-3&quot; autocomplete=&quot;off&quot;&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label class=&quot;form-label&quot; for=&quot;exampleDropdownFormEmail&quot;&gt;Email address&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail&quot; placeholder=&quot;email@example.com&quot; required&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label class=&quot;form-label&quot; for=&quot;exampleDropdownFormPassword&quot;&gt;Password&lt;/label&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword&quot; placeholder=&quot;Password&quot; required&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dropdownCheck&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;dropdownCheck&quot;&gt;Remember me&lt;/label&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign In&lt;/button&gt;
  &lt;/form&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Directions -->
  <section id="dropdowns-directions" class="cd-section pb-sm-2 mb-5">
    <h4>Directions</h4>
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
          <div id="preview-4" class="tab-pane pt-4 pb-3 mt-3 fade show active" role="tabpanel">
            <div class="hstack flex-wrap gap-3">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
              <div class="dropup">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dropup</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
              <div class="dropend">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dropend</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
              <div class="dropstart">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dropstart</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-directions-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-directions-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Dropdown --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Dropup --&gt;
&lt;div class=&quot;dropup&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropup&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Dropend --&gt;
&lt;div class=&quot;dropend&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropend&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Dropstart --&gt;
&lt;div class=&quot;dropstart&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropstart&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Show on hover / focus -->
  <section id="dropdowns-hover" class="cd-section pb-sm-2 mb-5">
    <h4>Show on hover / focus</h4>
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
          <div id="preview-5" class="tab-pane pt-4 pb-3 mt-3 fade show active" role="tabpanel">
            <div class="dropdown">
              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                data-bs-trigger="hover" aria-haspopup="true" aria-expanded="false">
                Hover or focus over me
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#!">Action</a></li>
                <li><a class="dropdown-item" href="#!">Another action</a></li>
                <li><a class="dropdown-item" href="#!">Something else here</a></li>
              </ul>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-hover-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-hover-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Change data-bs-toggle attribute from "dropdown" to "dropdown-hover" to trigger dropdown menu on hover or focus. --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-trigger=&quot;hover&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Hover or focus over me
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Menu alignment -->
  <section id="dropdowns-alignment" class="cd-section pb-sm-2 mb-5">
    <h4>Menu alignment</h4>
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
          <div id="preview-6" class="tab-pane pt-4 pb-3 mt-3 fade show active" role="tabpanel">
            <div class="hstack flex-wrap gap-3">
              <div class="dropdown">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Right-aligned menu example
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
              <div class="dropdown-center">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Center-aligned dropdown
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-alignment-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-alignment-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Right-aligned dropdown --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Right-aligned menu example
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Center-aligned dropdown --&gt;
&lt;div class=&quot;dropdown-center&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
    Center-aligned dropdown
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Split button -->
  <section id="dropdowns-split-btn" class="cd-section">
    <h4>Split button</h4>
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
          <div id="preview-7" class="tab-pane pt-4 pb-3 mt-3 fade show active" role="tabpanel">
            <div class="hstack flex-wrap gap-3">
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button"
                  class="btn btn-primary dropdown-toggle dropdown-toggle-split position-relative z-1 border-0 border-start border-light"
                  style="--cz-border-opacity: .25;" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <span class="visually-hidden">Toggle dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Button</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    class="visually-hidden">Toggle dropdown</span></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Action</a></li>
                  <li><a class="dropdown-item" href="#!">Another action</a></li>
                  <li><a class="dropdown-item" href="#!">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#dropdowns-split-btn-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="dropdowns-split-btn-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Solid split button --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split position-relative z-1 border-0 border-start border-light&quot; style=&quot;--cz-border-opacity: .25;&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle dropdown&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Solid split button --&gt;
&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Button&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;span class=&quot;visually-hidden&quot;&gt;Toggle dropdown&lt;/span&gt;&lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
