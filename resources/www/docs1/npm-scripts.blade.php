<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="py-1 pb-sm-0 mb-sm-4">Npm commands (Scripts)</h1>
    <p class="mb-0">Npm scripts help with performing repetitive tasks such as minification, compilation, unit testing,
      linting, etc. The Cartzilla build system utilizes a collection of JavaScript files, each dedicated to specific
      tasks. These tasks are orchestrated by corresponding npm scripts that efficiently execute the files as required.
    </p>
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
            <td>This command installs all the Node.js packages and their dependencies specified in the project's
              <code>package.json</code> file, located in the root directory. It includes packages listed under both
              <code>dependencies</code> and <code>devDependencies</code> objects.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run dev</kbd></td>
            <td>This command builds and minifies CSS and JavaScript, generates an icon font from SVG icons, copies
              vendor files from the <code>node_modules</code> directory to the <code>assets/vendor</code> folder,
              initiates a watch process to monitor file changes, and starts a local development server with hot
              reloading. It is the primary command used when customizing the template.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run build</kbd></td>
            <td>This command conducts a series of operations to prepare the project for production: it builds and
              minifies CSS and JavaScript; generates an icon font from SVG icons; copies vendor files from the
              <code>node_modules</code> directory to the <code>assets/vendor</code> folder. The command also validates
              HTML files against W3C standards and creates a distribution folder (<code>dist</code>). It then copies all
              necessary assets into this folder, including HTML files, and updates links to vendor files within the
              copied HTML files.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles</kbd></td>
            <td>This command executes the following two style-related commands sequentially: <code>styles:compile</code>
              and <code>styles:minify</code></td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles:compile</kbd></td>
            <td>This command first lints SCSS files to ensure they adhere to Bootstrap coding standards. It then
              compiles the SCSS file located at <code>src/scss/theme.scss</code> into a CSS file at
              <code>assets/css/theme.css</code>, and generates a corresponding source map file. The source map
              facilitates easier debugging by mapping the CSS styles back to their original SCSS sources.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles:minify</kbd></td>
            <td>This command minifies the compiled CSS files, reducing their file size for better performance in
              production environments. It targets CSS files located in the <code>assets/css</code> folder, optimizing
              them for faster loading times.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles-rtl</kbd></td>
            <td>This command runs three tasks sequentially to handle Right-to-Left (RTL) styles:
              <code>styles:compile</code>, <code>styles:rtl</code>, and <code>styles:minify-rtl</code>. This facilitates
              support for languages read from right to left by adjusting the styling accordingly.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles:rtl</kbd></td>
            <td>This command converts the compiled <code>theme.css</code> file into RTL format, producing an output file
              named <code>theme.rtl.css</code> along with an associated map file.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run styles:minify-rtl</kbd></td>
            <td>This command minifies the RTL-converted CSS files, reducing their file size for better performance in
              production environments.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run scripts</kbd></td>
            <td>This command executes the following two scripts-related commands sequentially:
              <code>scripts:compile</code> and <code>scripts:minify</code></td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run scripts:compile</kbd></td>
            <td>This command first lints the source JavaScript files from <code>src/js</code> directory to ensure code
              quality. It then bundles them into a single file <code>assets/theme.js</code> and generates a
              corresponding source map file. The source map aids in debugging by mapping the bundled JavaScript back to
              its original source files.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run scripts:minify</kbd></td>
            <td>This command minifies and uglifies the <code>assets/js/theme.js</code> file, generating
              <code>assets/js/theme.min.js</code>, reducing its size and obfuscating the code for improved performance
              and security. It also generates an associated source map file to assist in debugging the minified
              JavaScript.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run icon-font</kbd></td>
            <td>This command executes a script that creates the <code>cartzilla-icons.woff2</code> font file and
              generates the corresponding <code>cartzilla-icons.min.css</code> file from a collection of .svg icons
              located in the <code>src/icons</code> directory.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run vendor</kbd></td>
            <td>This command copies vendor files listed under the <code>dependencies</code> object in the
              <code>package.json</code> file from the <code>node_modules</code> directory to the
              <code>assets/vendor</code> folder.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run validate</kbd></td>
            <td>This command executes validation checks on all <code>.html</code> files, ensuring compliance with W3C
              markup validity rules.</td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run watch</kbd></td>
            <td>This command initiates a watch process to monitor changes in <code>.css</code>, <code>.js</code>, and
              <code>.html</code> files, simultaneously launching a local development server equipped with hot reloading.
            </td>
          </tr>
          <tr class="align-middle">
            <td><kbd class="fw-medium text-nowrap">npm run dist</kbd></td>
            <td>The command creates a distribution folder (<code>dist</code>) and proceeds to copy all essential assets
              into this folder, including HTML files, and updates links to vendor files within the copied HTML files.
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</x-www-layout></x-www-app>
