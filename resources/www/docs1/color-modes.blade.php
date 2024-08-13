<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-primary bg-primary-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Customize</span>
    <h1 class="pt-1 mb-2">Color modes (Light/Dark)</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p>Cartzilla supports both Light and Dark color modes (commonly referred to as themes). Users can seamlessly switch
      between these modes using the theme switcher. However, there may be instances when:</p>
    <ol>
      <li>You require only one mode, either Light or Dark.</li>
      <li>You want the Dark mode to be the default setting.</li>
    </ol>
    <p class="pb-4 mb-sm-4">Let's explore these scenarios in detail and discuss how to effectively manage them.</p>


    <!-- Only Light mode -->
    <section class="cd-section pb-sm-2 mb-5" id="only-light-mode">
      <h2 class="h3 mb-sm-4">Only Light mode, removing Dark mode entirely</h2>
      <ol class="gap-4 m-0">
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local
              storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the
            Chrome browser, this can be done through the Application panel.</span>
          <div class="ratio" style="max-width: 577px; --cz-aspect-ratio: calc(364 / 575 * 100%)">
            <img src="../assets/img/docs/local-storage.png" class="border rounded" alt="Chrome local storage">
          </div>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove mode-switching
              code:</span> Remove the link to the mode-switching JavaScript code from the <code>&lt;head&gt;</code>
            section of your HTML document. Refer to the code snippet below for guidance.</span>
          <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!-- Theme switcher (color modes) --&gt;
&lt;script src=&quot;assets/js/theme-switcher.js&quot;&gt;&lt;/script&gt;</code></pre>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove theme switcher
              markup:</span> Delete the theme (color mode) switcher markup from the <code>navbar</code>. See the code
            snippet below for details.</span>
          <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto) --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (light)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Disable dark mode styles:</span> Set the
          <code>$enable-dark-mode</code> variable to false inside <code>assets/scss/_user-variables.scss</code>. Once
          compiled, the CSS will no longer include dark mode styles.
        </li>
      </ol>
    </section>


    <!-- Only Dark mode -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="only-dark-mode">
      <h2 class="h3 mb-sm-4">Only Dark mode, disabling the Light mode option</h2>
      <ol class="gap-4 m-0">
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local
              storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the
            Chrome browser, this can be done through the Application panel.</span>
          <img src="../assets/img/docs/local-storage.png" class="border rounded" width="577" alt="Chrome local storage">
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Set default to dark mode:</span>
            Set the <code>data-bs-theme</code> attribute to "dark" on the <code>&lt;html&gt;</code> tag to ensure the
            webpage loads in dark mode by default.</span>
          <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot; data-bs-theme=&quot;dark&quot;&gt;
  ...
&lt;/html&gt;</code></pre>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove mode-switching
              code:</span> Remove the link to the mode-switching JavaScript code from the <code>&lt;head&gt;</code>
            section of your HTML document. Refer to the code snippet below for guidance.</span>
          <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!-- Theme switcher (color modes) --&gt;
&lt;script src=&quot;assets/js/theme-switcher.js&quot;&gt;&lt;/script&gt;</code></pre>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Remove theme switcher
              markup:</span> Delete the theme (color mode) switcher markup from the <code>navbar</code>. See the code
            snippet below for details.</span>
          <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto) --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (light)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
        </li>
      </ol>
    </section>


    <!-- Default Dark mode -->
    <section class="cd-section" id="default-dark-mode">
      <h2 class="h3 mb-sm-4">Setting Dark mode as the default</h2>
      <ol class="gap-4 m-0">
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear browser local
              storage:</span> Begin by clearing the browser's local storage to remove any saved theme variables. In the
            Chrome browser, this can be done through the Application panel.</span>
          <img src="../assets/img/docs/local-storage.png" class="border rounded" width="577" alt="Chrome local storage">
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Set default to dark mode:</span>
            Set the <code>data-bs-theme</code> attribute to "dark" on the <code>&lt;html&gt;</code> tag to ensure the
            webpage loads in dark mode by default.</span>
          <pre class="code-highlight border" style="max-width: 577px"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot; data-bs-theme=&quot;dark&quot;&gt;
  ...
&lt;/html&gt;</code></pre>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Update theme switcher
              markup:</span> Modify the theme (color mode) switcher markup slightly to ensure that dark mode is selected
            by default. Refer to the code snippet below for guidance.</span>
          <pre class="code-highlight border"><code class="language-html">&lt;!-- Theme switcher (light/dark/auto). Set "dark" by default --&gt;
&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale&quot; data-bs-toggle=&quot;dropdown&quot; data-bs-display=&quot;dynamic&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle theme (dark)&quot;&gt;
    &lt;span class=&quot;theme-icon-active d-flex animate-target&quot;&gt;
      &lt;i class=&quot;ci-moon&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=&quot;dropdown-menu start-50 translate-middle-x&quot; style=&quot;--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: .5rem&quot;&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;light&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-sun&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Light&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item active&quot; data-bs-theme-value=&quot;dark&quot; aria-pressed=&quot;true&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-moon&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Dark&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;button type=&quot;button&quot; class=&quot;dropdown-item&quot; data-bs-theme-value=&quot;auto&quot; aria-pressed=&quot;false&quot;&gt;
        &lt;span class=&quot;theme-icon d-flex fs-base me-2&quot;&gt;
          &lt;i class=&quot;ci-auto&quot;&gt;&lt;/i&gt;
        &lt;/span&gt;
        &lt;span class=&quot;theme-label&quot;&gt;Auto&lt;/span&gt;
        &lt;i class=&quot;item-active-indicator ci-check ms-auto&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Update default mode in theme
              switcher JS code:</span> Modify the <code>assets/js/theme-switcher.js</code> file to set "dark" mode as
            the default. This change ensures that the website initializes in dark mode when first loaded. Refer to the
            code snippet below for guidance.</span>
          <pre class="code-highlight border"><code class="language-js">/**
* Switch between light and dark themes (color modes)
* Copyright 2024 Createx Studio
*/

;(() =&gt; {
  'use strict'

  const getStoredTheme = () =&gt; localStorage.getItem('theme')
  const setStoredTheme = (theme) =&gt; localStorage.setItem('theme', theme)

  const getPreferredTheme = () =&gt; {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    // Set default theme to 'dark'.
    // Possible options: 'light' or system color mode (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
    return 'dark'
  }

  // ... rest of the code</code></pre>
        </li>
      </ol>
    </section>
  </section>
</x-www-layout></x-www-app>
