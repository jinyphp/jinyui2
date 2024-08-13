<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">Icon font</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-4 mb-sm-4">This article explains how to use, add or remove icons from the icon font in your project.
    </p>


    <!-- Using icons -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="using-icons">
      <h2 class="h3 mb-sm-4">Using icons</h2>
      <p class="pb-2 mb-4">Icon fonts are commonly referenced in the <code>&lt;head&gt;</code> section of HTML documents
        to ensure they are preloaded correctly and styled as intended.</p>
      <h3 class="h5">Referencing icon Font in HTML</h3>
      <p>To include the icon font in your HTML files, insert the following lines in the <code>&lt;head&gt;</code>
        section:</p>
      <div class="position-relative" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#icons-reference-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="icons-reference-code" class="code-highlight border"><code class="language-html">&lt;!-- Font icons --&gt;
&lt;link rel=&quot;preload&quot; href=&quot;assets/icons/cartzilla-icons.woff2&quot; as=&quot;font&quot; type=&quot;font/woff2&quot; crossorigin&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/icons/cartzilla-icons.min.css&quot;&gt;</code></pre>
      </div>
      <h3 class="h5 mt-2 mt-sm-3 pt-4">Applying icons in your HTML code</h3>
      <p>Icons can be applied within your HTML by using specific classes related to the icon's SVG file name. Here's a
        sample snippet on how to include an icon:</p>
      <div class="position-relative" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#icons-apply-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="icons-apply-code"
          class="code-highlight border"><code class="language-html">&lt;i class="ci-settings"&gt;&lt;/i&gt;</code></pre>
      </div>
    </section>


    <!-- Adding new icons -->
    <section class="cd-section pb-sm-2 mb-5" id="adding-icons">
      <h2 class="h3 mb-sm-4">Adding new icons</h2>
      <p class="pb-2">To expand your icon font library by adding new icons, follow these steps:</p>
      <ol class="gap-3 m-0">
        <li>
          <span class="text-body-emphasis fw-semibold">Select the .svg icon:</span> Choose the .svg icon you wish to add
          to the font library.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Format the icon:</span> Ensure the icon is properly formatted. It
          should be placed within a 24x24px grid, with all strokes outlined and shapes unified. Tools like Adobe
          Illustrator or other vector graphics software are suitable for this task.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Save the icon:</span> Store the new icon in the
          <code>src/icons</code> folder. Note, the output icon's CSS class will correspond to the SVG file name.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Generate the icon font:</span> Execute the <kbd
            class="text-nowrap">npm run icon-font</kbd> command. This command runs a script that creates the
          <code>cartzilla-icons.woff2</code> font file and generates the corresponding
          <code>cartzilla-icons.min.css</code> file from the collection of <code>.svg</code> icons located in the
          <code>src/icons</code> directory.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Optional configuration changes:</span> If you wish to change the
          output icon font name, modify the <code>config.icons.fontName</code> property in the
          <code>build/config.js</code> file. To change the prefix of the icon CSS class (default is "ci"), adjust the
          <code>config.icons.cssPrefix</code> property in the same config file. Ensure to update all relevant references
          in your HTML documents if any names are changed.
        </li>
      </ol>
    </section>


    <!-- Removing icons -->
    <section class="cd-section" id="removing-icons">
      <h2 class="h3 mb-sm-4">Removing icons</h2>
      <p class="pb-2">To remove icons from your project:</p>
      <ol class="gap-3">
        <li>
          <span class="text-body-emphasis fw-semibold">Delete the icon(s):</span> Remove the target <code>.svg</code>
          icon(s) from the <code>src/icons</code> folder.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Regenerate the icon font:</span> Run the <kbd
            class="text-nowrap">npm run icon-font</kbd> command to update the icon font. This removes the deleted icons
          from the compiled font and the CSS file.
        </li>
      </ol>
      <p class="mb-0">By following these steps, you can effectively manage the icons within your project, ensuring that
        your web application has a tailored and optimized set of icons at your disposal.</p>
    </section>
  </section>
</x-www-layout></x-www-app>
