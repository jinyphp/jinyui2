<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="py-1 pb-sm-0 mb-sm-4">Configuration files</h1>
    <p class="mb-0">This section outlines the configuration files available in your project. These files are crucial for
      managing and customizing the build system, ensuring that the development environment is tailored to meet specific
      requirements.</p>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <h2 class="h5 pb-1 pb-sm-0 mb-sm-4">Configuration files overview</h2>
    <div class="table-responsive">
      <table class="table table-bordered mb-0" style="min-width: 600px">
        <thead>
          <tr>
            <th scope="col">File name</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
            <td><code>build/config.js</code></td>
            <td>This file serves as the main input file where paths, file names, and other configurations are specified.
              It defines essential paths such as HTML, SCSS, JS source, and output directories, along with specific
              configurations for assets like icons and vendor files. If you change the fileNames for JS and CSS or any
              source folder names (like <code>scss: 'src/scss'</code>, <code>src_js: 'src/js'</code>) in this
              configuration, ensure to update the references in the source files accordingly:
              <code>src/scss/new-file-name.scss</code> and <code>src/js/new-file-name.js</code>. Additionally, any
              folder name changes must be reflected in the project structure and related paths. This will ensure the
              build system functions correctly.</td>
          </tr>
          <tr class="align-middle">
            <td><code>package.json</code></td>
            <td>Manages the project's metadata, scripts, and dependencies, serving as a manifest file for Node.js
              projects. Essential for npm to identify the project's dependencies, scripts, and version info.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.editorconfig</code></td>
            <td>Helps maintain consistent coding styles for multiple developers working across various editors and IDEs.
              It supports a number of properties for setting indent style, charset, and more. For detailed
              configuration, visit the <a class="fw-medium" href="https://editorconfig.org" target="_blank"
                rel="noopener">EditorConfig Documentation</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.babelrc.js</code></td>
            <td>Configures Babel to transpile ECMAScript 2015+ into a backwards compatible version of JavaScript,
              depending on your specified browser targets. Detailed information can be found in the <a class="fw-medium"
                href="https://babeljs.io/docs/en/" target="_blank" rel="noopener">Babel Documentation</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.browserslistrc</code></td>
            <td>Determines the range of browser versions your project supports. Influences how Babel, Autoprefixer, and
              other tools compile and prefix your code. More info can be found on the <a class="fw-medium"
                href="https://github.com/browserslist/browserslist" target="_blank" rel="noopener">Browserslist GitHub
                page</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.gitignore</code></td>
            <td>Specifies files and directories that Git should ignore. Helps prevent unneeded files from being
              committed to your repository.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.htmlvalidate.json</code></td>
            <td>Configures HTML validation rules to ensure your markup is both accurate and follows best practices. For
              a detailed list of configurable options, refer to the <a class="fw-medium"
                href="https://html-validate.org/rules/index.html" target="_blank" rel="noopener">HTML Validate
                Rules</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.prettierrc</code></td>
            <td>Defines code formatting rules for Prettier, ensuring consistent style across your project. For a
              detailed list of configurable options, refer to the <a class="fw-medium"
                href="https://prettier.io/docs/en/options.html" target="_blank" rel="noopener">Prettier Options
                Documentation</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.prettierignore</code></td>
            <td>Lists the files and directories that Prettier should ignore, similar to .gitignore but specifically for
              code formatting.</td>
          </tr>
          <tr class="align-middle">
            <td><code>.stylelintrc.json</code></td>
            <td>Provides Stylelint configurations to maintain consistent CSS or SCSS syntax in your project. You can
              explore more about configuring Stylelint and its rules on the <a class="fw-medium"
                href="https://stylelint.io/user-guide/rules" target="_blank" rel="noopener">Stylelint Rules</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>eslint.config.js</code></td>
            <td>Sets up ESLint rules to enforce coding styles and catch errors in JavaScript. Detailed documentation is
              available on <a class="fw-medium" href="https://eslint.org/docs/user-guide/configuring" target="_blank"
                rel="noopener">ESLint's Configuring Guide</a>.</td>
          </tr>
          <tr class="align-middle">
            <td><code>manifest.json</code></td>
            <td>Used to store metadata about your web application as part of its web app manifest, which is crucial for
              defining how your app appears when installed on a user's device.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</x-www-layout></x-www-app>
