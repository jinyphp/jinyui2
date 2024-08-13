<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-primary bg-primary-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Customize</span>
    <h1 class="pt-1 mb-2">CSS variables</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-4 mb-sm-4">Cartzilla builds upon the foundation of CSS custom properties (also known as CSS variables)
      introduced by Bootstrap, enhancing these capabilities with additional variables for its custom components. This
      approach allows for extensive customization of every component as well as global variables, covering styles from
      sizes and spacing to colors.</p>


    <!-- Discovering CSS variables -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="discover-css-variables">
      <h2 class="h3 mb-sm-4">Discovering CSS variables</h2>
      <p>To identify the CSS variables available for a specific component, you can use the following methods:</p>
      <ol class="gap-4 pb-2 mb-4">
        <li>
          <span class="text-body-emphasis fw-semibold">Browser inspector:</span> The easiest way to learn about the CSS
          variables associated with a component is to highlight it with the browser inspector. This tool will display
          all CSS properties, including custom variables, applied to the selected element.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Source files:</span> Open the <code>.scss</code> file
          corresponding to the component inside the <code>src/scss/components</code> folder using your editor. CSS
          variables are typically listed at the top of the file, corresponding to the parent wrapper of the component.
        </li>
      </ol>
      <h3 class="h5">Example of globals CSS variables</h3>
      <p>Cartzilla also provides global CSS variables that allow for template-wide customization. These are defined
        within the <code>:root</code> selector.</p>
      <pre class="code-highlight border"><code class="language-scss">// As seen in the Browser inspector

:root, [data-bs-theme=light] {
  --cz-primary: #f55266;
  --cz-secondary: #6c727f;
  --cz-success: #33b36b;
  --cz-info: #2f6ed5;
  --cz-warning: #fc9231;
  --cz-danger: #f03d3d;
  --cz-light: #fff;
  --cz-dark: #222934;
  ...
}</code></pre>
      <h3 class="h5 mt-2 mt-sm-3 pt-4">Range Slider component CSS variables</h3>
      <p>Here is how CSS variables are scoped within the Range Slider component:</p>
      <pre class="code-highlight border"><code class="language-scss">// Inside src/scss/components/_forms.scss
// During compilation, the --#{$prefix} placeholder is replaced with cz-, reflecting the predefined variable prefix in the final CSS output.

.range-slider {
  --#{$prefix}range-slider-height: #{$range-slider-height};
  --#{$prefix}range-slider-bg: #{$range-slider-bg};
  --#{$prefix}range-slider-connect-bg: #{$range-slider-connect-bg};
  --#{$prefix}range-slider-handle-size: #{$range-slider-handle-size};
  --#{$prefix}range-slider-handle-bg: #{$range-slider-handle-bg};
  --#{$prefix}range-slider-handle-active-bg: #{$range-slider-handle-active-bg};
  --#{$prefix}range-slider-handle-border-width: #{$range-slider-handle-border-width};
  --#{$prefix}range-slider-handle-border-color: #{$range-slider-handle-border-color};
  --#{$prefix}range-slider-handle-border-radius: 50%;
  --#{$prefix}range-slider-pips-color: var(--#{$prefix}body-color);
  --#{$prefix}range-slider-pips-font-size: #{$range-slider-pips-font-size};
  --#{$prefix}range-slider-pips-border-width: var(--#{$prefix}border-width);
  --#{$prefix}range-slider-pips-border-color: #{darken($border-color, 6%)};
  --#{$prefix}range-slider-tooltip-padding-y: #{$tooltip-padding-y};
  --#{$prefix}range-slider-tooltip-padding-x: #{$tooltip-padding-x};
  --#{$prefix}range-slider-tooltip-bg: #{$range-slider-tooltip-bg};
  --#{$prefix}range-slider-tooltip-color: #{$range-slider-tooltip-color};
  --#{$prefix}range-slider-tooltip-font-size: #{$range-slider-tooltip-font-size};
  --#{$prefix}range-slider-tooltip-border-radius: #{$tooltip-border-radius};
}</code></pre>
    </section>


    <!-- Customizing with CSS variables -->
    <section class="cd-section" id="customize-css-variables">
      <h2 class="h3 mb-sm-4">Customizing the template using CSS variables</h2>
      <p class="pb-2 mb-4">Cartzilla allows for flexible customization through CSS variables, which can be applied at
        both the global and component levels to tailor the styling to specific needs.</p>
      <h3 class="h5">Global scope customization</h3>
      <p>To customize the template at a global level, you can define custom CSS variables within the
        <code>&lt;style&gt;</code> tags and place them in the <code>&lt;head&gt;</code> section of your HTML file. This
        method affects the styling page-wide.</p>
      <p>Example of adding global variables to the <code>&lt;head&gt;</code> section:</p>
      <pre class="code-highlight border"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot; data-bs-theme=&quot;light&quot;&gt;
  &lt;head&gt;
    &lt;style&gt;
      :root {
        --cz-primary: #007bff;  /* Blue shade for primary color */
        --cz-secondary: #555e67; /* Darker shade for secondary color */
      }
    &lt;/style&gt;
    ...
  &lt;/head&gt;</code></pre>
      <h3 class="h5 pt-2 mt-4">Component scope customization</h3>
      <p>For more localized changes, component-scoped variables can be added directly to a component's parent element
        using the <code>style</code> attribute. This method allows you to customize individual components without
        affecting others.</p>
      <p>Example of customizing the <code>.range-slider</code> component:</p>
      <pre class="code-highlight border"><code class="language-html">&lt;div class=&quot;range-slider&quot; style=&quot;--cz-range-slider-bg: #e9ecef; --cz-range-slider-handle-bg: #007bff;&quot;&gt;
  &lt;!-- Range slider component content --&gt;
&lt;/div&gt;</code></pre>
      <h3 class="h5 pt-2 mt-4">Understanding the <code>cz-</code> prefix</h3>
      <p>The <code>cz-</code> prefix for CSS variables is derived from the <code>$prefix</code> variable defined in
        <code>src/scss/_variables.scss</code>. This prefix helps to namespace Cartzilla's CSS variables, avoiding
        conflicts with other styles or scripts.</p>
      <pre class="code-highlight border"><code class="language-scss">// Inside src/scss/_variables.scss

// Prefix for CSS variables
$prefix: cz- !default;</code></pre>
      <p class="pt-4">If you need to change this prefix, copy the <code>$prefix</code> variable to
        <code>src/scss/_user-variables.scss</code> and update its value there. This customization will propagate through
        all related CSS variables in your project.</p>
      <h4 class="h6 pt-3">Updating the prefix in user variables</h4>
      <pre class="code-highlight border"><code class="language-scss">// Inside src/scss/_user-variables.scss
$prefix: myapp- !default;  // Change prefix to 'myapp-'</code></pre>
      <p class="pt-4 mb-0">This will change the prefix from <code>--cz-</code> to <code>--myapp-</code> for all CSS
        variables, ensuring a unique and consistent branding style across your template.</p>
    </section>
  </section>
</x-www-layout></x-www-app>
