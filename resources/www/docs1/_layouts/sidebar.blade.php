<div class="cd-sidebar" data-filter-list='{"searchClass": "docs-search", "listClass": "docs-list", "valueNames": ["list-group-item"]}'>
  <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1" aria-labelledby="sidebarNavLabel">

    <div class="offcanvas-header py-3">
      <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav" aria-label="Close"></button>
    </div>

    <div class="position-relative mx-4 ms-lg-0 mb-4">
      <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
      <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
    </div>

    <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
      <div id="scrollable" class="h-100 overflow-y-auto pe-4">
        <nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()">
          <h3 class="h6 d-flex align-items-center pb-1 mb-2">
            <i class="ci-book fs-lg text-success me-2"></i>
            Getting started
          </h3>


          <div class="dropdown">
            <span class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
              Installation
              <span class="visually-hidden">setup npm prerequisites</span>
            </span>
            <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2" style="gap: .25rem;">
              <li class="nav-item"><a class="nav-link fw-normal"
                href="#prerequisites">Prerequisites</a></li>
              <li class="nav-item"><a class="nav-link fw-normal" href="#dev-environment">Dev environment</a></li>
              <li class="nav-item"><a class="nav-link fw-normal" href="#editor-cli">Text editor or CLI</a></li>
              <li class="nav-item"><a class="nav-link fw-normal" href="#install-node">Installing Node.js, npm and dependencies</a></li>
            </ul>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="npm-scripts">
              Npm commands (Scripts)
              <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile scripts:minify icon-font vendor validate watch dist</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="structure">
              File structure
              <span class="visually-hidden">project folders</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="configuration">
              Configuration files
              <span class="visually-hidden">package.json config.js babelrc browserslistrc editorconfig eslintrc gitignore htmlvalidate prettierignore prettierrc stylelintrc webmanifest manifest.json</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3" href="pwa">
              Progressive Web App (PWA)
              <span class="visually-hidden">service worker manifest</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="web-font">
              Web font(s)
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icon-font">
              Icon font
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="performance">
              Performance: CLS &amp; Preload
              <span class="visually-hidden">cumulative layout shift loading aspect-ratio</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="browser-support">
              Browser support
              <span class="visually-hidden">autoprefixer</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="">Right-to-Left (RTL)</a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="deployment">
              Deployment guide
              <span class="visually-hidden">launch hosting publishing rollout go-live</span>
            </a>
          </div>

          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="credits">
              Sources and credits
              <span class="visually-hidden">resources plugins libraries frameworks assets</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="changelog">
              Changelog
              <span class="visually-hidden">updates</span>
            </a>
          </div>
          <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
            <i class="ci-settings fs-lg text-primary me-2"></i>
            Customize
          </h3>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="options">
              Global options
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="colors">
              Colors
              <span class="visually-hidden">grayscale primary secondary info warning success danger dark light</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 text-wrap" href="color-modes">
              Color modes (Light/Dark)
              <span class="visually-hidden">themes</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="css-variables">
              CSS variables
            </a>
          </div>
          <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
            <i class="ci-file-text fs-lg text-secondary me-2"></i>
            Content
          </h3>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="typography">
              Typography
              <span class="visually-hidden">text font heading title paragraph list ordered unordered description blockquote quotation abbreviation</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="icons">Icons</a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="code">
              Code
              <span class="visually-hidden">pre kbd highlight</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="images">
              Images &amp; figures
              <span class="visually-hidden">thumbnails picture</span>
            </a>
          </div>
          <div class="dropend">
             <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tables">
              Tables
            </a>
          </div>
          <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
            <i class="ci-layers fs-lg text-info me-2"></i>
            Components
          </h3>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="accordion">
              Accordion
              <span class="visually-hidden">collapse</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="alerts">
              Alerts
              <span class="visually-hidden">notification callout</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="badges">
              Badges
              <span class="visually-hidden">count indicator</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="blog-components">
              Blog components
              <span class="visually-hidden">post article</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="breadcrumb">
              Breadcrumb
              <span class="visually-hidden">navigation links</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="buttons">
              Buttons
              <span class="visually-hidden">navigation links</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="button-group">
              Button group
              <span class="visually-hidden">navigation link</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="card">
              Card
              <span class="visually-hidden">box container</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="carousel">
              Carousel (Slider)
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="collapse">
              Collapse
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="countdown">
              Countdown
              <span class="visually-hidden">timer</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="date-picker">
              Date / time picker
              <span class="visually-hidden">calendar form control input select</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="dropdowns">
              Dropdowns
              <span class="visually-hidden">navigation menu submenu overlay links dropend dropstart dropup</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="forms">
              Forms
              <span class="visually-hidden">input select textarea checkbox radio range slider picker floating label validation control file switch quantity</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="hotspots">
              Hotspots
              <span class="visually-hidden">overlay popover tooltip image picture</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="image-comparison-slider">
              Image comparison slider
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="image-zoom">
              Image zoom
              <span class="visually-hidden">hover overlay popover picture</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-group">
              Input group
              <span class="visually-hidden">form control select textarea addon</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="input-formatter">
              Input text formatter
              <span class="visually-hidden">form control mask</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="lightbox">
              Lightbox (Gallery)
              <span class="visually-hidden">popup modal overlay image picture video youtube vimeo iframe</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="list-group">
              List group
              <span class="visually-hidden">navigation links menu ordered unordered</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="modal">
              Modal
              <span class="visually-hidden">dialog popup overlay lightbox</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="nav-links">
              Nav links
              <span class="visually-hidden">navigation menu links</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="navbar">
              Navbar
              <span class="visually-hidden">header navigation menu submenu links brand logo</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="offcanvas">
              Offcanvas
              <span class="visually-hidden">drawer overlay sidebar</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pagination">
              Pagination
              <span class="visually-hidden">pager navigation links</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="pills">
              Pills
              <span class="visually-hidden">navigation links tabs</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="placeholders">
              Placeholders
              <span class="visually-hidden">loading loader</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="popovers">
              Popovers
              <span class="visually-hidden">tooltip overlay popup</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="product-cards">
              Product cards
              <span class="visually-hidden">shop store sell item cart</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="progress">
              Progress
              <span class="visually-hidden">bars status</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="reviews">
              Reviews
              <span class="visually-hidden">testimonials feedback stars rating</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollbar">
              Scrollbar
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="scrollspy">
              Scrollspy
              <span class="visually-hidden">anchor links navigation menu</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="select-box">
              Select box
              <span class="visually-hidden">tags choices input form multiple control</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="shop-categories">
              Shop categories
              <span class="visually-hidden">store filter links navigation cards</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="shop-filters">
              Shop filters
              <span class="visually-hidden">store sidebar widgets sort</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="spinners">
              Spinners
              <span class="visually-hidden">loading loader</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tabs">
              Tabs
              <span class="visually-hidden">navigation links underline</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="toasts">
              Toasts
              <span class="visually-hidden">notification overlay popup alert feedback</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="tooltips">
              Tooltips
              <span class="visually-hidden">overlay popup popover</span>
            </a>
          </div>
          <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
            <i class="ci-tool fs-lg text-warning me-2"></i>
            Utilities &amp; helpers
          </h3>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="utilities">
              Cartzilla utilities
              <span class="visually-hidden">border background cursor</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank" rel="noreferrer">
              Bootstrap utilities
              <span class="visually-hidden">border background color text font size position weight display opacity flex space spacing align visibility overflow object float shadow</span>
            </a>
          </div>
          <div class="dropend">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3" href="https://getbootstrap.com/docs/5.3/helpers/clearfix/" target="_blank" rel="noreferrer">
              Bootstrap helpers
              <span class="visually-hidden">position ratio stacks stretched link focus truncation rule</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
