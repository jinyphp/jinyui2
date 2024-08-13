<x-www-app><x-www-layout>

    <!-- Page title -->
    <section class="py-2 pb-3 pb-lg-4">
        <span
            class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
            started</span>
        <h1 class="pt-1 mb-2">Web font(s)</h1>
    </section>


    <!-- Page content -->
    <section class="mb-3">
        <p class="pb-2 mb-4">This article outlines how Cartzilla optimizes web font loading by implementing local font
            storage and preloading techniques. These practices are crucial for enhancing site performance and minimizing
            layout shifts during page load.</p>
        <h2 class="h4">Preloading local web fonts</h2>
        <p>Cartzilla stores local fonts in the <code>assets/fonts</code> folder and preloads them in the
            <code>&lt;head&gt;</code> section of the HTML document to ensure they are available as soon as the page
            begins to render:</p>
        <div class="position-relative" data-bs-theme="dark">
            <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
                data-copy-code="#preload-font-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
            </button>
            <pre id="preload-font-code" class="code-highlight border"><code class="language-html">&lt;!-- Preloaded local web font (Inter) --&gt;
&lt;link rel=&quot;preload&quot; href=&quot;assets/fonts/inter-variable-latin.woff2&quot; as=&quot;font&quot; type=&quot;font/woff2&quot; crossorigin&gt;</code></pre>
        </div>
        <h2 class="h4 pt-4 mt-2">Referencing fonts in SCSS</h2>
        <p>The preloaded fonts are then referenced in the <code>src/scss/fonts.scss</code> file, which includes
            necessary <code>@font-face</code> rules:</p>
        <pre class="code-highlight border"><code class="language-scss">// Custom web fonts

// latin
@font-face {
  font-family: &quot;Inter&quot;;
  font-style: normal;
  font-weight: 300 800;
  src: url(&quot;../fonts/inter-variable-latin.woff2&quot;) format(&quot;woff2&quot;);
  font-display: swap;
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}</code></pre>
        <h2 class="h4 pt-4 mt-2">Downloading and implementing custom web fonts</h2>
        <p>To use a custom font from sources like Google Fonts, follow these steps to download and integrate the font
            locally:</p>
        <ol class="gap-3">
            <li>
                <span class="text-body-emphasis fw-semibold">Find the font on Google Fonts:</span> Locate the necessary
                font on Google Fonts.
            </li>
            <li>
                <span class="text-body-emphasis fw-semibold">Obtain the embed code:</span> Click the "Get font" button,
                then "Get embed code". Select the font styles you need and copy the generated link.
            </li>
            <li>
                <span class="text-body-emphasis fw-semibold">Download the font file:</span>
                <ul>
                    <li>Paste the copied link into a new browser tab.</li>
                    <li>Locate the <code>.woff2</code> file links inside the <code>@font-face</code> rules.</li>
                    <li>Open these links in new tabs and save the contents as <code>.woff2</code> files.</li>
                </ul>
            </li>
            <li>
                <span class="text-body-emphasis fw-semibold">Store and reference the font locally:</span>
                <ul>
                    <li>Place the downloaded <code>.woff2</code> file(s) in the <code>assets/fonts</code> folder.</li>
                    <li>Add references to these files in the <code>src/scss/fonts.scss</code> file, similar to the
                        example provided above.</li>
                </ul>
            </li>
        </ol>
        <p class="mb-0"><span class="text-body-emphasis fw-semibold">Note:</span> If the selected font is not
            variable, you must create a separate <code>@font-face</code> rule for each <code>weight</code> and
            <code>style</code>, similar to the setup seen in the Google Fonts API generated link.</p>
    </section>
</x-www-layout></x-www-app>
