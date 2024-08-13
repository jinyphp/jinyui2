<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">Performance: CLS &amp; Preload</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-2 mb-4">This article explores the implementation of several key techniques in Cartzilla that enhance
      website loading performance and reduce Cumulative Layout Shift (CLS). These methods include preloading essential
      assets and effectively wrapping images and videos in Bootstrap's .ratio element to preserve aspect ratios.</p>
    <h2 class="h4">Preloading assets</h2>
    <p class="mb-4">Preloading assets is a critical technique used to instruct the browser to download and cache key
      resources early in the page load process. This ensures that fonts, icons, styles, and other content are available
      immediately when needed, reducing load times and preventing layout shifts. Below are examples of how Cartzilla
      preloads web fonts and icon fonts:</p>
    <div class="position-relative" data-bs-theme="dark">
      <button type="button"
        class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
        data-copy-code="#preload-assets-code">
        <i class="ci-copy fs-sm me-1"></i>
        Copy
      </button>
      <pre id="preload-assets-code" class="code-highlight border"><code class="language-html">&lt;!-- Preloaded local web font (Inter) --&gt;
&lt;link rel=&quot;preload&quot; href=&quot;assets/fonts/inter-variable-latin.woff2&quot; as=&quot;font&quot; type=&quot;font/woff2&quot; crossorigin&gt;

&lt;!-- Font icons --&gt;
&lt;link rel=&quot;preload&quot; href=&quot;assets/icons/cartzilla-icons.woff2&quot; as=&quot;font&quot; type=&quot;font/woff2&quot; crossorigin&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/icons/cartzilla-icons.min.css&quot;&gt;

&lt;!-- Theme styles --&gt;
&lt;link rel=&quot;preload&quot; href=&quot;assets/css/theme.min.css&quot; as=&quot;style&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code></pre>
    </div>
    <p class="pt-4">By preloading these assets, Cartzilla ensures that text and icons render instantly when the rest of
      the content loads, enhancing the perceived speed of the site and improving the user experience.</p>
    <h2 class="h4 pt-4 mt-2">Using the <code>.ratio</code> element</h2>
    <p class="mb-4">To further improve CLS, Cartzilla utilizes Bootstrap's <code>.ratio</code> utility class, which
      helps maintain the aspect ratio of images and videos. This technique prevents layout shifts that occur when media
      loads and expands into its designated space. Here are examples of how the <code>.ratio</code> element is used for
      predefined and custom aspect ratios:</p>
    <div class="position-relative" data-bs-theme="dark">
      <button type="button"
        class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
        data-copy-code="#ratio-code">
        <i class="ci-copy fs-sm me-1"></i>
        Copy
      </button>
      <pre id="ratio-code" class="code-highlight border"><code class="language-html">&lt;!-- Predefined ratio --&gt;
&lt;div class=&quot;ratio ratio-4x3&quot;&gt;
  &lt;img src=&quot;...&quot; alt=&quot;...&quot;&gt;
&lt;/div&gt;

&lt;!-- Custom ratio --&gt;
&lt;!-- Aspect ratio formula: imageHeight / imageWidth * 100% --&gt;
&lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(306 / 416 * 100%)&quot;&gt;
  &lt;img src=&quot;...&quot; alt=&quot;...&quot;&gt;
&lt;/div&gt;</code></pre>
    </div>
    <p class="pt-4 mb-0">These examples show how the .ratio element can be used to ensure that the space for an image or
      video is reserved, regardless of whether the media has finished loading. This method significantly reduces CLS by
      stabilizing the layout as the rest of the page continues to load.</p>
  </section>
</x-www-layout></x-www-app>
