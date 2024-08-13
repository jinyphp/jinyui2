<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/offcanvas/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Offcanvas</h1>
    <p class="text-body-secondary mb-4">Build hidden sidebars into your project for navigation, shopping carts, widgets
      etc.</p>
  </section>


  <!-- Offcanvas components -->
  <section id="offcanvas-components" class="cd-section pb-sm-2 mb-5">
    <h4>Offcanvas components</h4>
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
            <div class="bg-dotted rounded p-3 p-sm-4">
              <div class="offcanvas offcanvas-start show position-static border-0 rounded" tabindex="-1"
                aria-labelledby="offcanvasLabel" data-bs-scroll="true" data-bs-backdrop="false"
                style="transform: none; visibility: visible;">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasLabel">Menu</h5>
                  <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0" style="max-height: 275px">
                  <nav class="list-group list-group-borderless">
                    <a class="list-group-item list-group-item-action active" href="#!" aria-current="page">
                      Home
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      User profile
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Services
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Our works
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      About
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Our team
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Dashboard
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Contact
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Help center
                    </a>
                    <a class="list-group-item list-group-item-action" href="#!">
                      Support
                    </a>
                  </nav>
                </div>
                <div class="offcanvas-header d-flex border-top">
                  <button type="button" class="btn btn-primary w-100 me-3">
                    <i class="ci-log-in fs-base ms-n1 me-2"></i>
                    Login
                  </button>
                  <button type="button" class="btn btn-outline-primary w-100">
                    <i class="ci-user ms-n1 me-2"></i>
                    Sign up
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#offcanvas-components-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="offcanvas-components-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Offcanvas. Remove .show class to hide offcanvas initially --&gt;
&lt;div class=&quot;offcanvas offcanvas-start show&quot; id=&quot;offcanvas&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasLabel&quot;&gt;

  &lt;!-- Offcanvas header --&gt;
  &lt;div class=&quot;offcanvas-header&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasLabel&quot;&gt;Menu&lt;/h5&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Offcanvas body --&gt;
  &lt;div class=&quot;offcanvas-body pt-0&quot;&gt;
    &lt;nav class=&quot;list-group list-group-borderless&quot;&gt;
      &lt;a class=&quot;list-group-item list-group-item-action active&quot; href=&quot;#&quot; aria-current=&quot;page&quot;&gt;
        Home
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        User profile
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Services
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Our works
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        About
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Our team
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Dashboard
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Contact
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Help center
      &lt;/a&gt;
      &lt;a class=&quot;list-group-item list-group-item-action&quot; href=&quot;#&quot;&gt;
        Support
      &lt;/a&gt;
    &lt;/nav&gt;
  &lt;/div&gt;

  &lt;!-- Offcanvas footer --&gt;
  &lt;div class=&quot;offcanvas-header d-flex border-top&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100 me-3&quot;&gt;
      &lt;i class=&quot;ci-log-in fs-base ms-n1 me-2&quot;&gt;&lt;/i&gt;
      Login
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;
      &lt;i class=&quot;ci-user ms-n1 me-2&quot;&gt;&lt;/i&gt;
      Sign up
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Placement -->
  <section id="offcanvas-placement" class="cd-section pb-sm-2 mb-5">
    <h4>Placement</h4>
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
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Toggle left offcanvas</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
            <button type="button" class="btn btn-outline-secondary mb-3" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#offcanvas-placement-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="offcanvas-placement-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Left offcanvas toggle button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasLeft&quot; aria-controls=&quot;offcanvasLeft&quot;&gt;
  Toggle left offcanvas
&lt;/button&gt;

&lt;!-- Left offcanvas example --&gt;
&lt;div class=&quot;offcanvas offcanvas-start&quot; id=&quot;offcanvasLeft&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasLeftLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasLeftLabel&quot;&gt;Left offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap or Cartzilla component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Top offcanvas toggle button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasTop&quot; aria-controls=&quot;offcanvasTop&quot;&gt;
  Toggle top offcanvas
&lt;/button&gt;

&lt;!-- Top offcanvas example --&gt;
&lt;div class=&quot;offcanvas offcanvas-top&quot; id=&quot;offcanvasTop&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasTopLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasTopLabel&quot;&gt;Top offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap or Cartzilla component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;


&lt;!-- Right offcanvas toggle button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasRight&quot; aria-controls=&quot;offcanvasRight&quot;&gt;
  Toggle right offcanvas
&lt;/button&gt;

&lt;!-- Right offcanvas example --&gt;
&lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;offcanvasRight&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasRightLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasRightLabel&quot;&gt;Right offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap or Cartzilla component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Bottom offcanvas toggle button --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#offcanvasBottom&quot; aria-controls=&quot;offcanvasBottom&quot;&gt;
  Toggle bottom offcanvas
&lt;/button&gt;

&lt;!-- Bottom offcanvas example --&gt;
&lt;div class=&quot;offcanvas offcanvas-bottom&quot; id=&quot;offcanvasBottom&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;offcanvasBottomLabel&quot;&gt;
  &lt;div class=&quot;offcanvas-header border-bottom&quot;&gt;
    &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;offcanvasBottomLabel&quot;&gt;Bottom offcanvas&lt;/h5&gt;
    &lt;button class=&quot;btn-close&quot; type=&quot;button&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;offcanvas-body&quot;&gt;
    &lt;p&gt;Content for the offcanvas goes here. You can place just about any Bootstrap or Cartzilla component or custom elements here.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Mobile menu (responsive) -->
  <section id="offcanvas-mobile-menu" class="cd-section">
    <h4>Mobile menu (responsive)</h4>
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
            <div class="bg-dotted rounded p-3 p-sm-4">
              <iframe class="w-100 shadow rounded" src="navbar-offcanvas.html" height="522"
                title="Navbar with offcanvas menu" style="max-width: 375px"></iframe>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#offcanvas-mobile-menu-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="offcanvas-mobile-menu-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Navbar with offcanvas menu on screens smaller than 500px (xs) --&gt;
&lt;header class=&quot;navbar navbar-expand-lg bg-body sticky-top p-0&quot;&gt;
  &lt;div class=&quot;container py-3&quot;&gt;

    &lt;!-- Navbar brand (Logo) --&gt;
    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;
      &lt;span class=&quot;d-flex flex-shrink-0 text-primary me-2&quot;&gt;
        &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;36&quot; height=&quot;36&quot;&gt;&lt;path d=&quot;M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z&quot; fill=&quot;currentColor&quot;/&gt;&lt;g fill=&quot;#fff&quot;&gt;&lt;path d=&quot;M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z&quot;/&gt;&lt;use href=&quot;#czlogo&quot;/&gt;&lt;use href=&quot;#czlogo&quot; x=&quot;8.516&quot; y=&quot;-2.172&quot;/&gt;&lt;/g&gt;&lt;defs&gt;&lt;path id=&quot;czlogo&quot; d=&quot;M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z&quot;/&gt;&lt;/defs&gt;&lt;/svg&gt;
      &lt;/span&gt;
      Cartzilla
    &lt;/a&gt;

    &lt;!-- Menu toggler --&gt;
    &lt;button type=&quot;button&quot; class=&quot;navbar-toggler&quot; data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#navbarOffcanvas&quot; aria-controls=&quot;navbarOffcanvas&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
      &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
    &lt;/button&gt;

    &lt;!-- Offcanvas menu --&gt;
    &lt;div class=&quot;offcanvas offcanvas-end&quot; id=&quot;navbarOffcanvas&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;navbarOffcanvasLabel&quot;&gt;
      &lt;div class=&quot;offcanvas-header&quot;&gt;
        &lt;h5 class=&quot;offcanvas-title&quot; id=&quot;navbarOffcanvasLabel&quot;&gt;Menu&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;offcanvas&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;offcanvas-body pt-0&quot;&gt;
        &lt;ul class=&quot;navbar-nav ms-lg-4&quot;&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Services&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item dropdown&quot;&gt;
            &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-auto-close=&quot;outside&quot; aria-expanded=&quot;false&quot;&gt;
              Dropdown
            &lt;/a&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropend&quot;&gt;
                &lt;a class=&quot;dropdown-item dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                  Dropdown
                &lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action link&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Yet another link&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
              &lt;li class=&quot;dropdown-divider&quot;&gt;&lt;hr&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Contact&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/header&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
