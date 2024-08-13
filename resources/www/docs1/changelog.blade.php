<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1">Changelog</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">

    <!-- v3.0.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-3-0-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v3.0.0 - May 20, 2024</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Redesigned Cartzilla: Introduced a completely new design system, page templates, and components (UI Kit).
              Cartzilla has been rebuilt from scratch to enhance visual appeal and technical performance. Update
              highlights:
              <ul class="fs-sm ps-3">
                <li>Electronics Store Demo</li>
                <li>Fashion Store Demo</li>
                <li>Furniture Store Demo</li>
                <li>Grocery Store Demo</li>
                <li>Multiple Shop Layout Options</li>
                <li>Multiple Product Page Variations</li>
                <li>2 Variants of Order Workflow: Cart + Checkout</li>
                <li>Shop Customer Account Pages</li>
                <li>Help Center / Support Pages</li>
                <li>Secondary and Specialty Pages: About, Contacts, 404, etc.</li>
                <li>60+ Flexible Components (UI Kit)</li>
                <li>Support for Light and Dark Modes</li>
                <li>Progressive Web App (PWA) Ready: The template is now PWA-ready, allowing it to be installed on any
                  device for a native app-like experience directly from the browser.</li>
                <li>Caching and Offline Support</li>
                <li>Right-to-Left (RTL) Support</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Build System: We've transitioned from Gulp to Npm scripts for a more streamlined and efficient build
              process. The new Cartzilla build system, located in the build folder, features a series of JavaScript
              files, each dedicated to specific tasks. These are executed through Npm scripts, integrating following
              development features:
              <ul class="fs-sm ps-3">
                <li>SCSS to CSS Compilation: Converts SCSS files into optimized CSS, complete with automatic
                  autoprefixing to ensure styles work across all modern browsers.</li>
                <li>JavaScript Bundling and Minification: Reduces JS file size and combines files for optimal
                  performance.</li>
                <li>Icon Font Generation: The build system includes a process for converting SVG icon files into a
                  custom icon font. This allows for easy integration of scalable icons throughout the application,
                  ensuring consistency and reducing the load times associated with multiple image files.</li>
                <li>Style Linting: Ensures CSS code adheres to Bootstrap's coding standards.</li>
                <li>JavaScript Linting and Formatting: Keeps JavaScript code clean and consistent.</li>
                <li>HTML Markup Validation: Checks HTML for errors and compliance to standards.</li>
                <li>Local Server with Hot Reloads: Enables real-time preview and updates without manual refresh.</li>
                <li>RTL Styles Generation: Automatically generates right-to-left (RTL) stylesheets.</li>
                <li>Production and Deployment: A complex script that prepares and optimizes assets for deployment.</li>
                <li>Main Config File: The build system is designed with a centralized configuration approach. All source
                  and output paths, along with file names, can be easily managed through a single configuration file,
                  simplifying adjustments and scalability.</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Well-structured and detailed documentation that guides the user through every aspect of the template.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Demo Site Customizer: Introduced a Customizer tool on the demo site that allows template appearance
              adjustments in real-time. Features of the Customizer include:
              <ul class="fs-sm ps-3">
                <li>Color Customization: Users can modify brand colors including Primary, Warning, Info, Success, and
                  Danger.</li>
                <li>Text Direction: Allows switching between left-to-right (LTR) and right-to-left (RTL) text
                  directions.</li>
                <li>Border Customization: Users can change border width and rounding to suit their design needs.</li>
                <li>Style Export: The Customizer enables users to copy generated styles to the clipboard for easy
                  application to websites built with the Cartzilla theme.</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-danger bg-danger-subtle me-2">Removed</span>
            Pug Templates: Transitioned from Pug templates to well-structured vanilla HTML templates.
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.5.1 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-5-1">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.5.1 - January 9, 2023</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Upgraded all plugins and libraries to their latest versions, including updating Bootstrap to v5.2.3
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>Improved compatibility with the latest version of the LightGallery plugin in the
              <code>product-gallery.js</code> file to ensure correct functionality.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>Corrected paths to the necessary LightGallery files in the following pages:
              <code>home-electronics-store.html</code>, <code>shop-single-v1.html</code>,
              and<code> shop-single-v2.html</code>.</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.5.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-5-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.5.0 - October 28, 2022</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Integrated CSS variables to enable global customization of Primary and Accent colors. Adjust these colors
            site-wide simply by modifying the corresponding CSS variables.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Upgraded all plugins and libraries to their latest versions, including updating Bootstrap to v5.2.2
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Gallery component to function correctly with the latest version of the lightGallery plugin. A valid plugin
            license key has been included
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Minor bug fixes and documentation typos
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.4.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-4-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.4.0 - January 31, 2022</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              NFT Marketplace demo:
              <ul class="fs-sm ps-3">
                <li>Front Page (Homepage)</li>
                <li>Catalog v.1</li>
                <li>Catalog v.2</li>
                <li>Single Item - Auction Live</li>
                <li>Single Item - Auction Ended</li>
                <li>Single Item - Buy Now</li>
                <li>Vedor Page</li>
                <li>Connect Wallet</li>
                <li>Create New Item</li>
                <li>Account - Profile Settings</li>
                <li>Account - My Items</li>
                <li>Account - My Collections</li>
                <li>Account - Favorites</li>
                <li>Account - Notifications</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Upgraded all plugins and libraries to their latest versions, including updating Bootstrap to v5.1.3
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Range Slider Component: Enhanced to accept a new <code>data-currency</code> attribute, allowing
              customization of the currency symbol inside tooltips, replacing the default '$'.</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.3.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-3-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.3.0 - August 18, 2021</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added a new documentation page detailing the Loading Placeholders component.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added a new Navbar Offcanvas example.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Upgraded all plugins and libraries to their latest versions, including updating Bootstrap to v5.1.0
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Revised the mobile menu behavior for improved usability. All 2nd-level sub-menus are now hidden by
              default and will only expand upon parent item click. Added <code>data-bs-autohide="outside"</code> to
              1st-level dropdowns to prevent them from auto-closing when child dropdowns expand. Removed CSS rules that
              previously displayed 2nd-level dropdowns by default on mobile. Changes affect
              <code>_navbar.scss</code>,<code> menu-primary.pug</code>, <code>menu-primary-dark.pug</code>,
              <code>menu-departments-electronics.pug</code>, and all compiled <code>.html</code> files.</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.2.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-2-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.2.0 - July 28, 2021</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added WhatsApp social button.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Cartzilla icon font: Added 2 new icons: WhatsApp and Rupee.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Upgraded Node.js to the latest version 16.x. Transitioned from the deprecated <code>node-sass</code>
              to <code>dart-sass</code> for better performance and future compatibility. Also, replaced all instances of
              division (/) with multiplication (*) in SCSS code to comply with new SCSS standards.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Upgraded all plugins and libraries to their latest versions, including updating Bootstrap to v5.0.2
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Enhanced the <code>README.md</code> file to include basic installation instructions, providing a
              straightforward guide for new users to set up the project.</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.1.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-1-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.1.0 - May 17, 2021</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added a new Offcanvas Component page to the documentation
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Sticky Footer: Implemented a sticky footer feature to ensure the footer remains at the bottom of the page,
            even when there is minimal content.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Bootstrap to the latest version 5.0.1
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            All plugins and dependencies to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Cartzilla icon font: Added 2 new brand icons: Discord and TikTok.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>Resolved a compatibility problem involving the new Bootstrap Offcanvas component. Please note the
              changes in class names: what was previously referred to as <code>offcanvas-cap</code> used for both header
              and footer is now designated as <code>offcanvas-header</code> and <code>offcanvas-footer</code>.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Resolved an issue with the hover state of gallery items on Safari for macOS.
          </li>
        </ul>
      </div>
    </section>


    <!-- v2.0.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-2-0-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v2.0.0 - February 10, 2021</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Rebuilt Cartzilla Core: Now fully supports Bootstrap v5.0.0-beta1
              <ul class="fs-sm ps-3">
                <li>Removed dependencyon jQuery: Completely redesigned Cartzilla's JavaScript to be modular, utilizing
                  ES6 modules, and made it library-agnostic.</li>
                <li>Updated class names to align with Bootstrap 5 naming conventions.</li>
                <li>Rewrote Cartzilla's utility classes to be compatible with the new Bootstrap 5 Utility API.</li>
                <li>No longer supports IE &lt;=11.</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Introduced a new offcanvas component that replaces the previous version, offering improved functionality.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Product Bundle component
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Introduced support for new dark dropdowns, allowing for a fully dark navbar option.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            All plugins and dependencies to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Cartzilla icon font: Added new icons, including half-star, filled thumb up/down, and more, to expand the
            range of design icons available for use throughout the interface.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Enhanced the Like/Dislike buttons to include an active (filled) state, improving visual feedback for user
            interactions.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Added support for half-star ratings in the product rating Pug mixin. It's now possible to display
              fractional stars, such as 3.5 stars, using <code>+star-rating(3.5)</code>.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            All plugins and dependencies to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Documentation
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-danger bg-danger-subtle me-2">Removed</span>
            Due to compatibility issues with Bootstrap 5, the navbar-floating (transparent navigation bar) has been
            removed from the project.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Minor bug fixes and improvements
          </li>
        </ul>
      </div>
    </section>


    <!-- v1.4.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-1-4-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v1.4.0 - July 13, 2020</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Food Delivery Service demo:
              <ul class="fs-sm ps-3">
                <li>Front Page (Homepage)</li>
                <li>Category Page</li>
                <li>Single Item (Restaurant) Page</li>
                <li>Cart (Your Order)</li>
                <li>Checkout (Address &amp; Payment)</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Single Post no Sidebar page template
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Bootstrap to the latest stable version 4.5.0
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            All plugins, npm modules and dependencies to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Added new icons to Cartzilla icon font.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Sketch file: Added new demo page design mockups.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Node modules to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Changed the CSS class name of the transparent navigation bar from <code>navbar-transparent</code> to
              <code>navbar-floating</code> for clearer naming. Also updated the <code>stickyNavbar()</code> function in
              <code>theme.js</code> to reflect this change.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Refactored <code>ajaxifySubscribeForm()</code> in <code>theme.js</code>: Rewrote the function from
              jQuery to vanilla JavaScript for improved performance and reduced dependencies.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Redesigned Pug Template Structure: Moved navbar and footer partials from <code>layout.pug</code> to
              individual page templates, utilizing the <code>block</code> keyword for template inheritance. This
              adjustment speeds up the compilation process by 1.5 times when modifications are made to the navbar or
              footer partials. Additionally, this change offers increased flexibility for customizing navigation bars
              and footers on specific pages.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span><code>package.json</code> and <code>gulpfile.js</code>: Enhanced project setup by automating the
              installation of all 3rd party plugins and libraries. Now, when you run the <kbd>npm install</kbd> command,
              these dependencies are automatically installed and then moved from <code>node_modules</code> to the
              <code>dist</code> folder by Gulp during project initialization. This streamlines the setup process and
              ensures a cleaner project structure.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Documentation for Getting Started and Components: Enhanced code examples for components and updated
              sections covering Navbar, Page Title, and Footer Variants (Pug format). Added a new section on Installing
              Vendor Plugins using npm and Gulp to streamline dependency management and project setup.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Sketch file: Added new Food Delivery Service demo frontpage mockup.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Minor bug fixes and improvements
          </li>
        </ul>
      </div>
    </section>


    <!-- v1.3.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-1-3-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v1.3.0 - February 29, 2020</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <div>
              Grocery Store demo:
              <ul class="fs-sm ps-3">
                <li>Front Page (Homepage)</li>
                <li>Product Catalog Page</li>
                <li>Single Product Page</li>
                <li>Checkout Page Template</li>
              </ul>
            </div>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Single Product / Brand Store demo
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Navbar with Side Menu: Introduced a new navigation bar that includes a side menu for enhanced user
            navigation. Check out the live example on the Grocery Store Demo page.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Transparent Navbar Version: Introduced a new version of the navigation bar with a transparent design. View
            the live example on the Single Product/Brand Store Demo page.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Navigation Bars (Headers): Enhanced the action buttons with tooltips to provide additional information on
            hover. Also introduced a separate wishlist button to accommodate scenarios where the wishlist feature is
            accessible to both registered and unregistered users.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            JavaScript Code: Radio buttons now function like tabs, allowing for content switching. See this behavior in
            action in the 'Choose Your Style' section on the Single Product/Brand Demo page.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added an empty state for the Cart dropdown to improve user experience when the cart is empty. See the live
            example on the Single Product/Brand Demo page.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>Masonry Grid Layouts: Replaced <code>Salvattore.js</code> with <code>Shuffle.js</code> and
              <code>imagesLoaded.js</code> for enhanced performance and reliability in masonry grid layouts,
              particularly in the Blog Grid sections.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Color Presets radio buttons now dynamically change labels using JavaScript. See this feature in action on
            the Shop Single Product pages versions 1 and 2.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Added new icons to Cartzilla icon font.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Sketch file: Added new demo page design mockups.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Node modules to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>Security patch: Added <code>rel="noopener"</code> to all links with <code>target="_blank"</code>
              attribute.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>Handheld Toolbar Styles: Removed the default bottom padding equal to the toolbar's height from the
              body. You can now add bottom padding by applying the <code>toolbar-enabled</code> CSS class to the body.
              In Pug, this is applied automatically if <code>var isToolbar = true</code> is added to a specific page
              template or globally enabled via <code>templates/helpers/config.pug</code>. This change allows you to
              remove the bottom padding from the body without modifying core theme styles if the Handheld Toolbar is not
              needed.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            <span>SCSS maps in the theme's <code>_variables.scss</code> file. Special thanks to Kevin Ramharak for
              suggesting this fix.</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- v1.2.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-1-2-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v1.2.0 - December 20, 2019</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Added a new Toolbar for handheld devices that is fixed to the bottom of the screen, similar to iOS. It
            includes all important buttons like Menu, Cart, Wishlist, and Sidebar toggles to improve the user experience
            on mobile devices.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            <span>Added a <code>.gitignore</code> file to the download package to specify which files or patterns should
              be ignored by git. Ensure that visibility for hidden files is enabled on your system to view and modify
              this file.</span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Navigation Bars (Headers): Enhanced the action buttons with tooltips to provide additional information on
            hover. Also introduced a separate wishlist button to accommodate scenarios where the wishlist feature is
            accessible to both registered and unregistered users.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            404 Error page templates
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            JavaScript plugins to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Node modules to the latest versions
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Documentation typos and wrong content
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Minor bug fixes and improvements
          </li>
        </ul>
      </div>
    </section>


    <!-- v1.1.0 -->
    <section class="cd-section position-relative d-flex pb-5" id="v-1-1-0">
      <div class="position-absolute top-0 start-0 h-100 border-start mt-3 ms-2 z-n1"></div>
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v1.1.0 - November 30, 2019</h2>
        <ul class="list-unstyled gap-3 mb-0 mb-md-2">
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Digital Products Marketplace demo
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Marketplace Vendor / User Dashboard
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Electronics Store Homepage
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Single Product Page v2
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Product Comparison Page (Table)
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Navbar Versions for: Marketplace and Electronics Store
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Footer Version for: Marketplace
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Qucik View Popup v2 (for Electronics Store)
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            404 Error Page Template (Text variant)
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Charts component
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Countdown Timer component
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Product Card for Digital (Downloadable) Products
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-info bg-info-subtle me-2">New</span>
            Drag &amp; Drop File Uploader. See updated Forms component page for more details.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Bootstrap to the latest version 4.4.1
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Homepage Hero Slider: Added animations to slider text layers.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Icon Font: Added new icons to the collection.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            <span>
              <code>_variables.scss</code>: Added <code>$path-to-fonts</code> variable to streamline font management.
              Modify this variable in <code>_user-variables.scss to</code> easily customize the theme's font.
            </span>
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Sketch file: Added new page mockups.
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-success bg-success-subtle me-2">Updated</span>
            Documentation and Components
          </li>
          <li class="d-flex align-items-start">
            <span class="badge fs-sm text-warning bg-warning-subtle me-2">Fixed</span>
            Minor bug fixes and improvements
          </li>
        </ul>
      </div>
    </section>


    <!-- v1.0.0 -->
    <section class="cd-section d-flex" id="v-1-0-0">
      <div class="flex-shrink-0 bg-body border border-2 rounded-circle"
        style="width: 17px; height: 17px; margin-top: 5px"></div>
      <div class="ps-4">
        <h2 class="h5">v1.0.0 - October 21, 2019</h2>
        <p class="mb-0">Initial release</p>
      </div>
    </section>
  </section>
</x-www-layout></x-www-app>
