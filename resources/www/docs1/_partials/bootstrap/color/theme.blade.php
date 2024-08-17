
<h3 id="theme-colors">Theme colors <a class="anchor-link" href="#theme-colors"
    aria-label="Link to this section: Theme colors"></a></h3>
<p>We use a subset of all colors to create a smaller color palette for generating color schemes, also
available as Sass variables and a Sass map in Bootstrap’s <code>scss/_variables.scss</code> file.</p>
<div class="row">

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-primary rounded-3">Primary</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-secondary rounded-3">Secondary</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-success rounded-3">Success</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-danger rounded-3">Danger</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-warning rounded-3">Warning</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-info rounded-3">Info</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-light rounded-3">Light</div>
</div>

<div class="col-md-4">
    <div class="p-3 mb-3 text-bg-dark rounded-3">Dark</div>
</div>

</div>
<p>All these colors are available as a Sass map, <code>$theme-colors</code>.</p>
<div class="bd-example-snippet bd-code-snippet bd-file-ref">
<div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-bottom">
    <a class="font-monospace link-secondary link-underline-secondary link-underline-opacity-0 link-underline-opacity-100-hover small"
        href="https://github.com/twbs/bootstrap/blob/v5.3.3/scss/_variables.scss">scss/_variables.scss</a>
    <div class="d-flex ms-auto">
        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard"
            data-bs-original-title="Copy to clipboard">
            <svg class="bi" aria-hidden="true">
                <use xlink:href="#clipboard"></use>
            </svg>
        </button>
    </div>
</div>
<div class="highlight">
    <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nv">$theme-colors</span><span class="o">:</span> <span class="p">(</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"primary"</span><span class="o">:</span>    <span class="nv">$primary</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"secondary"</span><span class="o">:</span>  <span class="nv">$secondary</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"success"</span><span class="o">:</span>    <span class="nv">$success</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"info"</span><span class="o">:</span>       <span class="nv">$info</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"warning"</span><span class="o">:</span>    <span class="nv">$warning</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"danger"</span><span class="o">:</span>     <span class="nv">$danger</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"light"</span><span class="o">:</span>      <span class="nv">$light</span><span class="o">,</span>
  </span></span><span class="line"><span class="cl">  <span class="s2">"dark"</span><span class="o">:</span>       <span class="nv">$dark</span>
  </span></span><span class="line"><span class="cl"><span class="p">);</span>
  </span></span></code></pre>
</div>
</div>
<p>Check out <a href="/docs/5.3/customize/sass/#maps-and-loops">our Sass maps and loops docs</a> for how to
modify these colors.</p>

