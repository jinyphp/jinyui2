<x-www-layout>
    <div class="container pt-4">
        <div class="row pt-sm-2">

          <!-- Sidebar navigation -->
          <aside class="col-lg-3 pe-xl-4">
            <div class="cd-sidebar" data-filter-list="{&quot;searchClass&quot;: &quot;docs-search&quot;, &quot;listClass&quot;: &quot;docs-list&quot;, &quot;valueNames&quot;: [&quot;list-group-item&quot;]}">
              <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1" aria-labelledby="sidebarNavLabel">
                <div class="offcanvas-header py-3">
                  <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav" aria-label="Close"></button>
                </div>
                <div class="position-relative mx-4 ms-lg-0 mb-4">
                  <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
                <button class="btn btn-sm btn-outline-secondary w-auto border-0 p-1 position-absolute top-50 end-0 translate-middle-y me-2 opacity-0">
        <svg class="opacity-75" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18.619 5.381a.875.875 0 0 1 0 1.238l-12 12A.875.875 0 0 1 5.38 17.38l12-12a.875.875 0 0 1 1.238 0Z"></path><path d="M5.381 5.381a.875.875 0 0 1 1.238 0l12 12a.875.875 0 1 1-1.238 1.238l-12-12a.875.875 0 0 1 0-1.238Z"></path>
        </svg>
      </button></div>
                <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
                  <div id="scrollable" class="h-100 overflow-y-auto pe-4 simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -24px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 24px 0px 0px;">
                    <nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()"><h3 class="h6 d-flex align-items-center pb-1 mb-2">
                        <i class="ci-book fs-lg text-success me-2"></i>
                        Getting started
                      </h3><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="installation.html">
                          Installation
                          <span class="visually-hidden">setup npm prerequisites</span>
                        </a>
                      </div><div class="dropdown">
                        <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                          Npm commands (Scripts)
                          <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile scripts:minify icon-font vendor validate watch dist</span>
                        </span>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="structure.html">
                          File structure
                          <span class="visually-hidden">project folders</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="configuration.html">
                          Configuration files
                          <span class="visually-hidden">package.json config.js babelrc browserslistrc editorconfig eslintrc gitignore htmlvalidate prettierignore prettierrc stylelintrc webmanifest manifest.json</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="pwa.html">
                          Progressive Web App (PWA)
                          <span class="visually-hidden">service worker manifest</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="web-font.html">
                          Web font(s)
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icon-font.html">
                          Icon font
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="performance.html">
                          Performance: CLS &amp; Preload
                          <span class="visually-hidden">cumulative layout shift loading aspect-ratio</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="browser-support.html">
                          Browser support
                          <span class="visually-hidden">autoprefixer</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="rtl.html">Right-to-Left (RTL)</a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="deployment.html">
                          Deployment guide
                          <span class="visually-hidden">launch hosting publishing rollout go-live</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="credits.html">
                          Sources and credits
                          <span class="visually-hidden">resources plugins libraries frameworks assets</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="changelog.html">
                          Changelog
                          <span class="visually-hidden">updates</span>
                        </a>
                      </div><h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                        <i class="ci-settings fs-lg text-primary me-2"></i>
                        Customize
                      </h3><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="options.html">
                          Global options
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="colors.html">
                          Colors
                          <span class="visually-hidden">grayscale primary secondary info warning success danger dark light</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 text-wrap" href="color-modes.html">
                          Color modes (Light/Dark)
                          <span class="visually-hidden">themes</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="css-variables.html">
                          CSS variables
                        </a>
                      </div><h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                        <i class="ci-file-text fs-lg text-secondary me-2"></i>
                        Content
                      </h3><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="typography.html">
                          Typography
                          <span class="visually-hidden">text font heading title paragraph list ordered unordered description blockquote quotation abbreviation</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icons.html">Icons</a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="code.html">
                          Code
                          <span class="visually-hidden">pre kbd highlight</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="images.html">
                          Images &amp; figures
                          <span class="visually-hidden">thumbnails picture</span>
                        </a>
                      </div><div class="dropend">
                         <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tables.html">
                          Tables
                        </a>
                      </div><h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                        <i class="ci-layers fs-lg text-info me-2"></i>
                        Components
                      </h3><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="accordion.html">
                          Accordion
                          <span class="visually-hidden">collapse</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="alerts.html">
                          Alerts
                          <span class="visually-hidden">notification callout</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="badges.html">
                          Badges
                          <span class="visually-hidden">count indicator</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="blog-components.html">
                          Blog components
                          <span class="visually-hidden">post article</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="breadcrumb.html">
                          Breadcrumb
                          <span class="visually-hidden">navigation links</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="buttons.html">
                          Buttons
                          <span class="visually-hidden">navigation links</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="button-group.html">
                          Button group
                          <span class="visually-hidden">navigation link</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="card.html">
                          Card
                          <span class="visually-hidden">box container</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="carousel.html">
                          Carousel (Slider)
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="collapse.html">
                          Collapse
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="countdown.html">
                          Countdown
                          <span class="visually-hidden">timer</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="date-picker.html">
                          Date / time picker
                          <span class="visually-hidden">calendar form control input select</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="dropdowns.html">
                          Dropdowns
                          <span class="visually-hidden">navigation menu submenu overlay links dropend dropstart dropup</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="forms.html">
                          Forms
                          <span class="visually-hidden">input select textarea checkbox radio range slider picker floating label validation control file switch quantity</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="hotspots.html">
                          Hotspots
                          <span class="visually-hidden">overlay popover tooltip image picture</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="image-comparison-slider.html">
                          Image comparison slider
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="image-zoom.html">
                          Image zoom
                          <span class="visually-hidden">hover overlay popover picture</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-group.html">
                          Input group
                          <span class="visually-hidden">form control select textarea addon</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-formatter.html">
                          Input text formatter
                          <span class="visually-hidden">form control mask</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="lightbox.html">
                          Lightbox (Gallery)
                          <span class="visually-hidden">popup modal overlay image picture video youtube vimeo iframe</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="list-group.html">
                          List group
                          <span class="visually-hidden">navigation links menu ordered unordered</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="modal.html">
                          Modal
                          <span class="visually-hidden">dialog popup overlay lightbox</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="nav-links.html">
                          Nav links
                          <span class="visually-hidden">navigation menu links</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="navbar.html">
                          Navbar
                          <span class="visually-hidden">header navigation menu submenu links brand logo</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="offcanvas.html">
                          Offcanvas
                          <span class="visually-hidden">drawer overlay sidebar</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pagination.html">
                          Pagination
                          <span class="visually-hidden">pager navigation links</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pills.html">
                          Pills
                          <span class="visually-hidden">navigation links tabs</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="placeholders.html">
                          Placeholders
                          <span class="visually-hidden">loading loader</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="popovers.html">
                          Popovers
                          <span class="visually-hidden">tooltip overlay popup</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="product-cards.html">
                          Product cards
                          <span class="visually-hidden">shop store sell item cart</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="progress.html">
                          Progress
                          <span class="visually-hidden">bars status</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="reviews.html">
                          Reviews
                          <span class="visually-hidden">testimonials feedback stars rating</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollbar.html">
                          Scrollbar
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollspy.html">
                          Scrollspy
                          <span class="visually-hidden">anchor links navigation menu</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="select-box.html">
                          Select box
                          <span class="visually-hidden">tags choices input form multiple control</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="shop-categories.html">
                          Shop categories
                          <span class="visually-hidden">store filter links navigation cards</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="shop-filters.html">
                          Shop filters
                          <span class="visually-hidden">store sidebar widgets sort</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="spinners.html">
                          Spinners
                          <span class="visually-hidden">loading loader</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tabs.html">
                          Tabs
                          <span class="visually-hidden">navigation links underline</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="toasts.html">
                          Toasts
                          <span class="visually-hidden">notification overlay popup alert feedback</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tooltips.html">
                          Tooltips
                          <span class="visually-hidden">overlay popup popover</span>
                        </a>
                      </div><h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                        <i class="ci-tool fs-lg text-warning me-2"></i>
                        Utilities &amp; helpers
                      </h3><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="utilities.html">
                          Cartzilla utilities
                          <span class="visually-hidden">border background cursor</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank" rel="noreferrer">
                          Bootstrap utilities
                          <span class="visually-hidden">border background color text font size position weight display opacity flex space spacing align visibility overflow object float shadow</span>
                        </a>
                      </div><div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/helpers/clearfix/" target="_blank" rel="noreferrer">
                          Bootstrap helpers
                          <span class="visually-hidden">position ratio stacks stretched link focus truncation rule</span>
                        </a>
                      </div></nav>
                  </div></div></div></div><div class="simplebar-placeholder" style="width: 294px; height: 3248px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 331px; transform: translate3d(0px, 25px, 0px); display: block;"></div></div></div>
                </div>
              </div>
            </div>
          </aside>


          <!-- Page content -->
          <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3">

            <!-- Page title -->
            <section class="py-2 pb-4">
              <span class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting started</span>
              <h1 class="py-1 pb-sm-0 mb-sm-4">Npm commands (Scripts)</h1>
              <p class="mb-0">Npm scripts help with performing repetitive tasks such as minification, compilation, unit testing, linting, etc. The Cartzilla build system utilizes a collection of JavaScript files, each dedicated to specific tasks. These tasks are orchestrated by corresponding npm scripts that efficiently execute the files as required.</p>
            </section>


            <!-- Page content -->
            <section class="mb-3">
              <h2 class="h5 pb-1 pb-sm-0 mb-sm-4">List of available Npm commands (Scripts)</h2>
              <div class="table-responsive">
                <table class="table table-bordered mb-0" style="min-width: 600px">
                  <thead>
                    <tr>
                      <th scope="col">Command</th>
                      <th scope="col">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm install</kbd></td>
                      <td>This command installs all the Node.js packages and their dependencies specified in the project's <code>package.json</code> file, located in the root directory. It includes packages listed under both <code>dependencies</code> and <code>devDependencies</code> objects.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run dev</kbd></td>
                      <td>This command builds and minifies CSS and JavaScript, generates an icon font from SVG icons, copies vendor files from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder, initiates a watch process to monitor file changes, and starts a local development server with hot reloading. It is the primary command used when customizing the template.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run build</kbd></td>
                      <td>This command conducts a series of operations to prepare the project for production: it builds and minifies CSS and JavaScript; generates an icon font from SVG icons; copies vendor files from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder. The command also validates HTML files against W3C standards and creates a distribution folder (<code>dist</code>). It then copies all necessary assets into this folder, including HTML files, and updates links to vendor files within the copied HTML files.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles</kbd></td>
                      <td>This command executes the following two style-related commands sequentially: <code>styles:compile</code> and <code>styles:minify</code></td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles:compile</kbd></td>
                      <td>This command first lints SCSS files to ensure they adhere to Bootstrap coding standards. It then compiles the SCSS file located at <code>src/scss/theme.scss</code> into a CSS file at <code>assets/css/theme.css</code>, and generates a corresponding source map file. The source map facilitates easier debugging by mapping the CSS styles back to their original SCSS sources.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles:minify</kbd></td>
                      <td>This command minifies the compiled CSS files, reducing their file size for better performance in production environments. It targets CSS files located in the <code>assets/css</code> folder, optimizing them for faster loading times.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles-rtl</kbd></td>
                      <td>This command runs three tasks sequentially to handle Right-to-Left (RTL) styles: <code>styles:compile</code>, <code>styles:rtl</code>, and <code>styles:minify-rtl</code>. This facilitates support for languages read from right to left by adjusting the styling accordingly.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles:rtl</kbd></td>
                      <td>This command converts the compiled <code>theme.css</code> file into RTL format, producing an output file named <code>theme.rtl.css</code> along with an associated map file.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run styles:minify-rtl</kbd></td>
                      <td>This command minifies the RTL-converted CSS files, reducing their file size for better performance in production environments.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run scripts</kbd></td>
                      <td>This command executes the following two scripts-related commands sequentially: <code>scripts:compile</code> and <code>scripts:minify</code></td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run scripts:compile</kbd></td>
                      <td>This command first lints the source JavaScript files from <code>src/js</code> directory to ensure code quality. It then bundles them into a single file <code>assets/theme.js</code> and generates a corresponding source map file. The source map aids in debugging by mapping the bundled JavaScript back to its original source files.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run scripts:minify</kbd></td>
                      <td>This command minifies and uglifies the <code>assets/js/theme.js</code> file, generating <code>assets/js/theme.min.js</code>, reducing its size and obfuscating the code for improved performance and security. It also generates an associated source map file to assist in debugging the minified JavaScript.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run icon-font</kbd></td>
                      <td>This command executes a script that creates the <code>cartzilla-icons.woff2</code> font file and generates the corresponding <code>cartzilla-icons.min.css</code> file from a collection of .svg icons located in the <code>src/icons</code> directory.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run vendor</kbd></td>
                      <td>This command copies vendor files listed under the <code>dependencies</code> object in the <code>package.json</code> file from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run validate</kbd></td>
                      <td>This command executes validation checks on all <code>.html</code> files, ensuring compliance with W3C markup validity rules.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run watch</kbd></td>
                      <td>This command initiates a watch process to monitor changes in <code>.css</code>, <code>.js</code>, and <code>.html</code> files, simultaneously launching a local development server equipped with hot reloading.</td>
                    </tr>
                    <tr class="align-middle">
                      <td><kbd class="fw-medium text-nowrap">npm run dist</kbd></td>
                      <td>The command creates a distribution folder (<code>dist</code>) and proceeds to copy all essential assets into this folder, including HTML files, and updates links to vendor files within the copied HTML files.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </main>
        </div>
      </div>

</x-www-layout>
