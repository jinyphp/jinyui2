<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">Right-to-Left (RTL)</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-4 mb-sm-4">This article provides detailed instructions on enabling and using RTL support in the
      Cartzilla template, as well as steps to customize and compile RTL-specific styles.</p>

    <!-- Enable / use RTL -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="use-rtl">
      <h2 class="h3 mb-sm-4">Enable / use RTL</h2>
      <p class="pb-2">Right-to-Left (RTL) support is essential for languages that flow from right to left, such as
        Arabic, Hebrew, and Persian. Cartzilla facilitates RTL support with a few simple steps:</p>
      <ol class="gap-4 pb-2 pb-sm-3 mb-4">
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Set the HTML direction:</span>
            Add <code>dir="rtl"</code> to the <code>&lt;html&gt;</code> element to set the text direction to
            right-to-left.</span>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#html-dir-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="html-dir-code"
              class="code-highlight border"><code class="language-html">&lt;html dir=&quot;rtl&quot; lang=&quot;ar&quot;&gt;</code></pre>
          </div>
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Include language attribute:</span> Add an appropriate language
          attribute, like <code>lang="ar"</code>, to the <code>&lt;html&gt;</code> element. This helps with SEO and
          screen reader accessibility.
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Include RTL stylesheet:</span> To
            apply RTL styles, include an RTL version of the CSS instead of default <code>theme.min.css</code>. Ensure to
            preload styles for better performance.</span>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#css-links-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="css-links-code" class="code-highlight border"><code class="language-html">&lt;link rel=&quot;preload&quot; href=&quot;assets/css/theme.rtl.min.css&quot; as=&quot;style&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/theme.rtl.min.css&quot;&gt;</code></pre>
          </div>
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Modify <code>dir</code> in manifest.json:</span> Change the
          <code>dir</code> property from <span class="fw-semibold">"ltr"</span> to <span
            class="fw-semibold">"rtl"</span> in the <code>manifest.json</code> file to ensure metadata is consistent
          with the text direction of the site.
        </li>
      </ol>
      <h3 class="h5">Using RTL-specific utility classes</h3>
      <p class="pb-2">Cartzilla includes utility classes to manage the layout and appearance in an RTL context:</p>
      <ul class="gap-4 m-0">
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Flipping objects:</span> Use the
            <code>.rtl-flip</code> class to horizontally flip elements.</span>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#rtl-flip-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="rtl-flip-code"
              class="code-highlight border"><code class="language-html">&lt;img src=&quot;...&quot; class=&quot;rtl-flip&quot; alt=&quot;...&quot;&gt;</code></pre>
          </div>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Visibility classes:</span>
            Control the display properties with RTL-specific classes.</span>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#rtl-classes-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="rtl-classes-code" class="code-highlight border"><code class="language-html">&lt;!-- Hide element in RTL --&gt;
&lt;div class=&quot;d-none-rtl&quot;&gt;...&lt;/div&gt;

&lt;!-- Hide element in LTR, but show in RTL --&gt;
&lt;div class=&quot;d-none d-block-rtl&quot;&gt;...&lt;/div&gt;</code></pre>
          </div>
        </li>
      </ul>
    </section>

    <!-- Customize / compile RTL CSS -->
    <section class="cd-section" id="compile-rtl-css">
      <h2 class="h3 mb-sm-4">Customize / compile RTL CSS</h2>
      <p class="pb-2">For those who need to customize or generate their own RTL stylesheets from SCSS, Cartzilla
        provides a robust set of npm scripts to facilitate this process.</p>
      <h3 class="h5">Compiling RTL CSS</h3>
      <p>Cartzilla includes several npm scripts that help compile and minify RTL-specific CSS:</p>
      <ul class="gap-4 pb-2 pb-sm-3 mb-4">
        <li>
          <span class="d-block mb-3"><span class="text-body-emphasis fw-semibold">styles-rtl:</span> Compiles,
            processes, and minifies RTL CSS.</span>
          <pre
            class="code-highlight border"><code class="language-json">&quot;styles-rtl&quot;: &quot;npm-run-all -s styles:compile styles:rtl styles:minify-rtl&quot;</code></pre>
        </li>
        <li>
          <span class="d-block mb-3"><span class="text-body-emphasis fw-semibold">styles:rtl:</span> Generates RTL
            stylesheet and associated <code>.map</code> file.</span>
          <pre
            class="code-highlight border"><code class="language-json">&quot;styles:rtl&quot;: &quot;node build/styles.js rtl&quot;</code></pre>
        </li>
        <li>
          <span class="d-block mb-3"><span class="text-body-emphasis fw-semibold">styles:minify-rtl:</span> Minifies the
            RTL CSS and generates associated <code>.map</code> file.</span>
          <pre
            class="code-highlight border"><code class="language-json">&quot;styles:minify-rtl&quot;: &quot;node build/styles.js minify-rtl&quot;</code></pre>
        </li>
      </ul>
      <h3 class="h5">Modifying build scripts</h3>
      <p>To integrate RTL styles into your development and build process, modify the <code>dev</code> and
        <code>build</code> scripts inside <code>package.json</code> file to include RTL compilation:</p>
      <ul class="gap-4 m-0">
        <li>
          <div class="text-body-emphasis fw-semibold mb-3">dev:</div>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#dev-script-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="dev-script-code"
              class="code-highlight border"><code class="language-json">&quot;dev&quot;: &quot;npm-run-all --silent -p styles-rtl scripts icon-font vendor &amp;&amp; npm run watch --silent&quot;</code></pre>
          </div>
        </li>
        <li>
          <div class="text-body-emphasis fw-semibold mb-3">build:</div>
          <div class="position-relative" data-bs-theme="dark">
            <button type="button"
              class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
              data-copy-code="#build-script-code">
              <i class="ci-copy fs-sm me-1"></i>
              Copy
            </button>
            <pre id="build-script-code"
              class="code-highlight border"><code class="language-json">&quot;build&quot;: &quot;npm-run-all --silent -p styles-rtl scripts icon-font vendor &amp;&amp; npm run validate --silent &amp;&amp; npm run dist --silent&quot;</code></pre>
          </div>
        </li>
      </ul>
    </section>
  </section>
</x-www-layout></x-www-app>
