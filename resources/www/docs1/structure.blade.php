<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">File structure</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <div class="d-flex align-items-start border-bottom pb-3">
      <i class="ci-folder-minus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla</h5>
        <p class="mb-0">This is the root template folder that contains all project files.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-folder-minus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets</h5>
        <p class="mb-0">This folder contains the compiled assets for the template, generated from the source files.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / app-icons</h5>
        <p class="mb-0">This folder contains favicon images optimized for different browsers and platforms. These icons
          should be included in the <code>&lt;head&gt;</code> section of an HTML document.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / css</h5>
        <p class="mb-0">This folder contains compiled CSS files. These include <code>theme.css</code>,
          <code>theme.min.css</code>, <code>theme.rtl.css</code> and <code>theme.rtl.min.css</code>, along with their
          corresponding map files.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / fonts</h5>
        <p class="mb-0">This folder includes the Cartzilla local web font files in <code>.woff2</code> format (Inter
          font).</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / icons</h5>
        <p class="mb-0">This folder contains the Cartzilla icons font file in <code>.woff2</code> format and the
          corresponding <code>.css</code> file, which are generated from the SVG icon collection found in the
          <code>src/icons</code> directory.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / img</h5>
        <p class="mb-0">This folder contains all the template's graphic assets, including images, illustrations, vector
          icons, etc. These assets are neatly organized within subfolders.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / js</h5>
        <p class="mb-0">This folder contains compiled versions of <code>theme.js</code> and its minified counterpart,
          <code>theme.min.js</code>, along with their respective map files. Additionally, it includes the
          <code>theme-switcher.js</code> file, which handles switching between light and dark modes.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / assets / vendor</h5>
        <p class="mb-0">This folder includes the <code>.js</code> and <code>.css</code> files for all vendor plugins.
        </p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-folder-minus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / src</h5>
        <p class="mb-0">This folder contains the source files, organized into subfolders.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / src / icons</h5>
        <p class="mb-0">This folder contains a collection of SVG icons, which are compiled into a font
          <code>.woff2</code> and an associated <code>.css</code> file.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / src / js</h5>
        <p class="mb-0">This folder includes the primary <code>theme.js</code> file and a 'components' subfolder
          containing various modules. The <code>theme.js</code> file serves as the main JavaScript source, which is
          compiled (bundled) and optionally minified. This process generates two distinct files:
          <code>assets/js/theme.js</code> and <code>assets/js/theme.min.js</code>, along with their associated map
          files. The minified file, <code>theme.min.js</code>, is then linked to all <code>.html</code> documents within
          the project.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-5 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / src / scss</h5>
        <p class="mb-0">This folder contains all project <code>.scss</code> files, which are compiled and optionally
          minified into <code>.css</code> files within the <code>assets/css</code> folder. The resulting minified
          <code>theme.min.css</code> is then linked to all <code>.html</code> documents within the project.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / docs</h5>
        <p class="mb-0">This folder contains the documentation .html files that you are currently reading. Additionally,
          it includes a collection of component preview pages, each accompanied by corresponding code snippets.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-folder-plus fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / build</h5>
        <p class="mb-0">This folder contains JavaScript files that are executed by Node.js scripts within the build
          system. The <code>config.js</code> file allows you to configure your project paths (directory structure), as
          well as source and output file names.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-file fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / package.json</h5>
        <p class="mb-0">This file contains essential metadata about your app or module, including a list of dependencies
          that will be installed from the npm repository when you run the npm install command.</p>
      </div>
    </div>
    <div class="d-flex align-items-start border-bottom ps-4 py-3">
      <i class="ci-file fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / manifest.json</h5>
        <p class="mb-0">This is a crucial configuration file for the Progressive Web App (PWA) features of your
          application. It specifies app metadata, settings, and behaviors recognized by browsers, such as the app name,
          icons, start URL, display settings, and permissions.</p>
      </div>
    </div>
    <div class="d-flex align-items-start ps-4 pt-3">
      <i class="ci-file fs-xl text-body-secondary"></i>
      <div class="ps-2 ms-1">
        <h5 class="fs-lg mb-1">Cartzilla / service-worker.js</h5>
        <p class="mb-0">This file is integral to the Progressive Web App (PWA) capabilities of your application. It acts
          as a service worker, a type of web worker that intercepts and handles network requests, including dynamically
          managing caching of app resources. This script runs in the background, enabling offline support, faster
          resource loading, and other advanced functionality that enhances user experience.</p>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
