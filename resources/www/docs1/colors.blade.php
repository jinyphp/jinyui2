<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-primary bg-primary-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Customize</span>
    <h1 class="pt-1 mb-2">Colors</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-4">The color scheme of this template is defined by two sets of color variables, ensuring consistent
      aesthetics across both light and dark color modes.</p>


    <!-- Grayscale and Theme colors -->
    <section class="cd-section pb-sm-2 mb-5" id="colors-gray-theme">
      <h2 class="h3 mb-sm-4">Grayscale and Theme colors</h2>
      <p>These colors remain constant regardless of the selected color mode:</p>
      <h3 class="h5 pt-2">Grayscale</h3>
      <div class="position-relative mb-4" style="max-width: 720px" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#grayscale-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="grayscale-code" class="code-highlight border"><code class="language-scss">$white:    #fff !default;
$gray-50:  #f5f7fa !default;
$gray-100: #eef1f6 !default;
$gray-200: #e0e5eb !default;
$gray-300: #cad0d9 !default;
$gray-400: #9ca3af !default;
$gray-500: #6c727f !default;
$gray-600: #4e5562 !default;
$gray-700: #333d4c !default;
$gray-800: #222934 !default;
$gray-900: #181d25 !default;
$gray-950: #131920 !default;
$black:    #000 !default;</code></pre>
      </div>
      <h3 class="h5 pt-2 pt-sm-3">Theme colors</h3>
      <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#theme-colors-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="theme-colors-code" class="code-highlight border"><code class="language-scss">$primary:   #f55266 !default;
$secondary: $gray-500 !default;
$success:   #33b36b !default;
$info:      #2f6ed5 !default;
$warning:   #fc9231 !default;
$danger:    #f03d3d !default;
$light:     $white !default;
$dark:      $gray-800 !default;</code></pre>
      </div>
    </section>


    <!-- Color modes dependant colors -->
    <section class="cd-section pb-sm-2 mb-5" id="colors-modes">
      <h2 class="h3 mb-sm-4">Color modes dependant colors</h2>
      <p>In addition to the standard grayscale and theme colors, this template includes a set of color variables that
        adapt based on the selected color mode - light or dark. These dependant colors ensure that the template
        maintains visual consistency and optimal readability across different environments.</p>
      <h3 class="h5 pt-2">For Light (default) mode</h3>
      <div class="position-relative mb-4" style="max-width: 720px" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#light-mode-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="light-mode-code" class="code-highlight border"><code class="language-scss">// src/scss/_variables.scss

// Emphasis text
$primary-text-emphasis:       darken($primary, 10%) !default;
$secondary-text-emphasis:     $gray-700 !default;
$success-text-emphasis:       darken($success, 10%) !default;
$danger-text-emphasis:        darken($danger, 10%) !default;
$warning-text-emphasis:       darken($warning, 10%) !default;
$info-text-emphasis:          darken($info, 10%) !default;
$light-text-emphasis:         $gray-700 !default;
$dark-text-emphasis:          $gray-900 !default;

// Subtle backgrounds
$primary-bg-subtle:           tint-color($primary, 90%) !default;
$secondary-bg-subtle:         $gray-50 !default;
$success-bg-subtle:           tint-color($success, 90%) !default;
$danger-bg-subtle:            tint-color($danger, 90%) !default;
$warning-bg-subtle:           tint-color($warning, 90%) !default;
$info-bg-subtle:              tint-color($info, 90%) !default;
$light-bg-subtle:             $white !default;
$dark-bg-subtle:              tint-color($dark, 92%) !default;

// Subtle borders
$primary-border-subtle:       tint-color($primary, 80%) !default;
$secondary-border-subtle:     $gray-200 !default;
$success-border-subtle:       tint-color($success, 80%) !default;
$danger-border-subtle:        tint-color($danger, 80%) !default;
$warning-border-subtle:       tint-color($warning, 80%) !default;
$info-border-subtle:          tint-color($info, 80%) !default;
$light-border-subtle:         $gray-100 !default;
$dark-border-subtle:          $gray-200 !default;

// User selection color
$user-selection-color:        rgba($gray-900, .1) !default;

// Body colors
$body-color:                  $gray-600 !default;
$body-bg:                     $white !default;
$body-secondary-color:        $gray-500 !default;
$body-secondary-bg:           $gray-100 !default;
$body-tertiary-color:         $gray-400 !default;
$body-tertiary-bg:            $gray-50 !default;
$body-emphasis-color:         $gray-800 !default;
$link-color:                  $info !default;

// Headings color
$headings-color:              $gray-900 !default;

// Common components colors
$border-color:                $gray-200 !default;
$component-color:             $gray-700 !default;
$component-hover-color:       $gray-900 !default;
$component-hover-bg:          $gray-50 !default;
$component-active-color:      $gray-900 !default;
$component-active-bg:         $gray-100 !default;
$component-disabled-color:    $gray-400 !default;

// Focus ring color
$focus-ring-color:            rgba($gray-900, $focus-ring-opacity) !default;</code></pre>
      </div>
      <h3 class="h5 pt-2 pt-sm-3">For Dark mode</h3>
      <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#dark-mode-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="dark-mode-code" class="code-highlight border"><code class="language-scss">// src/scss/_variables-dark.scss
// Emphasis text
$primary-text-emphasis-dark:        darken($primary, 5%) !default;
$secondary-text-emphasis-dark:      $gray-200 !default;
$success-text-emphasis-dark:        darken($success, 5%) !default;
$danger-text-emphasis-dark:         darken($danger, 5%) !default;
$warning-text-emphasis-dark:        darken($warning, 5%) !default;
$info-text-emphasis-dark:           darken($info, 5%) !default;
$light-text-emphasis-dark:          $gray-200 !default;
$dark-text-emphasis-dark:           $white !default;

// Subtle backgrounds
$primary-bg-subtle-dark:            mix($gray-900, $primary, 90%) !default;
$secondary-bg-subtle-dark:          $gray-800 !default;
$success-bg-subtle-dark:            mix($gray-900, $success, 90%) !default;
$danger-bg-subtle-dark:             mix($gray-900, $danger, 90%) !default;
$warning-bg-subtle-dark:            mix($gray-900, $warning, 90%) !default;
$info-bg-subtle-dark:               mix($gray-900, $info, 90%) !default;
$light-bg-subtle-dark:              $gray-900 !default;
$dark-bg-subtle-dark:               $gray-950 !default;

// Subtle borders
$primary-border-subtle-dark:        mix($gray-900, $primary, 80%) !default;
$secondary-border-subtle-dark:      $gray-700 !default;
$success-border-subtle-dark:        mix($gray-900, $success, 80%) !default;
$danger-border-subtle-dark:         mix($gray-900, $danger, 80%) !default;
$warning-border-subtle-dark:        mix($gray-900, $warning, 80%) !default;
$info-border-subtle-dark:           mix($gray-900, $info, 80%) !default;
$light-border-subtle-dark:          $gray-700 !default;
$dark-border-subtle-dark:           $gray-950 !default;

// User selection color
$user-selection-color-dark:         rgba($white, .12) !default;

// Body colors
$body-color-dark:                   $gray-300 !default;
$body-bg-dark:                      $gray-900 !default;
$body-secondary-color-dark:         $gray-400 !default;
$body-secondary-bg-dark:            $gray-700 !default;
$body-tertiary-color-dark:          $gray-500 !default;
$body-tertiary-bg-dark:             $gray-800 !default;
$body-emphasis-color-dark:          $gray-100 !default;
$link-color-dark:                   $info !default;

// Headings color
$headings-color-dark:               $white !default;

/ Common components colors
$border-color-dark:                 $gray-700 !default;
$component-color-dark:              $gray-200 !default;
$component-hover-color-dark:        $white !default;
$component-hover-bg-dark:           $gray-800 !default;
$component-active-color-dark:       $white !default;
$component-active-bg-dark:          $gray-700 !default;
$component-disabled-color-dark:     $gray-500 !default;

// Focus ring color
$focus-ring-color-dark:             rgba($white, $focus-ring-opacity) !default;</code></pre>
      </div>
    </section>


    <!-- Customizing colors -->
    <section class="cd-section" id="colors-customize">
      <h2 class="h3 mb-4">Customizing colors</h2>
      <p>To align the template colors with your branding or personal preferences, you can modify the color variables for
        light mode, dark mode, or both. This customization involves variables from both the standard set (grayscale and
        theme colors) and those dependant on light and dark modes.</p>
      <h3 class="h5 pt-2">Steps to customize color variables:</h3>
      <ol>
        <li><span class="text-body-emphasis fw-semibold">Identify the variable:</span> Determine which color variable(s)
          you wish to change. For standard grayscale and theme colors, find these in
          <code>src/scss/_variables.scss</code>. For mode-dependant colors, check <code>src/scss/_variables.scss</code>
          for light mode and <code>src/scss/_variables-dark.scss</code> for dark mode.</li>
        <li><span class="text-body-emphasis fw-semibold">Copy the variable:</span> Select and copy the variable(s) from
          the appropriate file. Variables without mode-specific versions (grayscale and main theme colors) are modified
          for both modes simultaneously unless overridden.</li>
        <li>
          <span class="text-body-emphasis fw-semibold">Modify in user variables file:</span> Select and copy the
          variable(s) from the appropriate file. Variables without mode-specific versions (grayscale and main theme
          colors) are modified for both modes simultaneously unless overridden.
          <ul>
            <li>Paste the copied variable(s) into <code>src/scss/_user-variables.scss</code>.</li>
            <li>Change the value(s) to your desired colors.</li>
          </ul>
        </li>
      </ol>
      <p>Here's an example of how to change the primary theme color and a mode-specific background color:</p>
      <div class="position-relative" style="max-width: 720px" data-bs-theme="dark">
        <button type="button"
          class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 me-2 px-2 z-3"
          data-copy-code="#customize-colors-code">
          <i class="ci-copy fs-sm me-1"></i>
          Copy
        </button>
        <pre id="customize-colors-code" class="code-highlight border"><code class="language-scss">// Inside src/scss/_user-variables.scss

$primary: #0066cc !default; // New primary color for all modes
$background-dark: #101010 !default; // New background color for dark mode</code></pre>
      </div>
    </section>
  </section>
</x-www-layout></x-www-app>
