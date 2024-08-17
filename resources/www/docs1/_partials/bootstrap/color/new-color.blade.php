
<h3 id="using-the-new-colors">Using the new colors <a class="anchor-link" href="#using-the-new-colors"
    aria-label="Link to this section: Using the new colors"></a></h3>
<p>These new colors are accessible via CSS variables and utility classes—like
<code>--bs-primary-bg-subtle</code> and <code>.bg-primary-subtle</code>—allowing you to compose your own
CSS rules with the variables, or to quickly apply styles via classes. The utilities are built with the
color’s associated CSS variables, and since we customize those CSS variables for dark mode, they are
also adaptive to color mode by default.
</p>
<div class="bd-example-snippet bd-code-snippet">
<div class="bd-example m-0 border-0">

    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        Example element with utilities
    </div>

</div>
<div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
    <small class="font-monospace text-body-secondary text-uppercase">html</small>
    <div class="d-flex ms-auto">
        <button type="button" class="btn-edit text-nowrap" aria-label="Try it on StackBlitz"
            data-bs-original-title="Try it on StackBlitz">
            <svg class="bi" aria-hidden="true">
                <use xlink:href="#lightning-charge-fill"></use>
            </svg>
        </button>
        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard"
            data-bs-original-title="Copy to clipboard">
            <svg class="bi" aria-hidden="true">
                <use xlink:href="#clipboard"></use>
            </svg>
        </button>
    </div>
</div>
<div class="highlight">
    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"</span><span class="p">&gt;</span>
  </span></span><span class="line"><span class="cl">  Example element with utilities
  </span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></span></span></code></pre>
</div>
</div>
