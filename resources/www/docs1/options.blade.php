<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-primary bg-primary-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Customize</span>
    <h1 class="pt-1 mb-2">Global options</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p>The Bootstrap framework provides a variety of customizable global options through the
      <code>_variables.scss</code> file. These settings allow you to quickly modify the overall styling by enabling or
      disabling specific features according to your project needs.</p>
    <h2 class="h4 pt-3 mb-4">Overview of available options</h2>
    <div class="position-relative mb-5" style="max-width: 720px" data-bs-theme="dark">
      <button type="button"
        class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
        data-copy-code="#bs-options-code">
        <i class="ci-copy fs-sm me-1"></i>
        Copy
      </button>
      <pre id="bs-options-code" class="code-highlight border"><code class="language-scss">// Options
//
// Quickly modify global styling by enabling or disabling optional features.

$enable-caret:                true !default;
$enable-rounded:              true !default;
$enable-shadows:              false !default;
$enable-gradients:            false !default;
$enable-transitions:          true !default;
$enable-reduced-motion:       true !default;
$enable-smooth-scroll:        true !default;
$enable-grid-classes:         true !default;
$enable-container-classes:    true !default;
$enable-cssgrid:              false !default;
$enable-button-pointers:      true !default;
$enable-rfs:                  true !default;
$enable-validation-icons:     true !default;
$enable-negative-margins:     false !default;
$enable-deprecation-messages: true !default;
$enable-important-utilities:  true !default;

$enable-dark-mode:            true !default;
$color-mode-type:             data !default; // `data` or `media-query`</code></pre>
    </div>
    <h2 class="h3 pt-sm-2 mb-4">Customizing Bootstrap options</h2>
    <p>To customize these settings to your needs, override the default values by copying them into your project's
      <code>src/scss/_user-variables.scss</code> file and modifying the values accordingly. This approach ensures that
      your custom configurations are applied throughout the framework.</p>
    <h3 class="h4 pt-3">Example of customizing variables</h3>
    <p class="mb-4">Suppose you want to disable rounded corners and shadows, but enable CSS grid support. You would copy
      the relevant variables into <code>src/scss/_user-variables.scss</code> and adjust them as follows:</p>
    <div class="position-relative mb-4" style="max-width: 720px" data-bs-theme="dark">
      <button type="button"
        class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
        data-copy-code="#override-options-code">
        <i class="ci-copy fs-sm me-1"></i>
        Copy
      </button>
      <pre id="override-options-code" class="code-highlight border"><code class="language-scss">// Inside src/scss/_user-variables.scss

$enable-rounded: false;
$enable-shadows: false;
$enable-cssgrid: true;</code></pre>
    </div>
    <h3 class="h4 pt-2 pt-sm-3">Color mode configuration</h3>
    <p class="mb-0">Bootstrap also supports different color modes. By default, the <code>$color-mode-type</code> is set
      to <code>data</code>, which means the color mode can be toggled via <code>data-bs-theme</code> attributes in HTML.
      Alternatively, if set to <code>media-query</code>, the color mode will respond to the user's system preferences.
    </p>
  </section>
</x-www-layout></x-www-app>
