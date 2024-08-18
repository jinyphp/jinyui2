<h2 id="color-sass-maps">
    Color Sass maps
</h2>

<p>Bootstrap’s source Sass files include three maps to help you quickly and easily loop over a list of
    colors and their hex values.</p>

    <ul>
    <li><code>$colors</code> lists all our available base (<code>500</code>) colors</li>
    <li><code>$theme-colors</code> lists all semantically named theme colors (shown below)</li>
    <li><code>$grays</code> lists all tints and shades of gray</li>
</ul>

<p>Within <code>scss/_variables.scss</code>, you’ll find Bootstrap’s color variables and Sass map. Here’s an
    example of the <code>$colors</code> Sass map:</p>

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
        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nv">$colors</span><span class="o">:</span> <span class="p">(</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"blue"</span><span class="o">:</span>       <span class="nv">$blue</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"indigo"</span><span class="o">:</span>     <span class="nv">$indigo</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"purple"</span><span class="o">:</span>     <span class="nv">$purple</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"pink"</span><span class="o">:</span>       <span class="nv">$pink</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"red"</span><span class="o">:</span>        <span class="nv">$red</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"orange"</span><span class="o">:</span>     <span class="nv">$orange</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"yellow"</span><span class="o">:</span>     <span class="nv">$yellow</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"green"</span><span class="o">:</span>      <span class="nv">$green</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"teal"</span><span class="o">:</span>       <span class="nv">$teal</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"cyan"</span><span class="o">:</span>       <span class="nv">$cyan</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"black"</span><span class="o">:</span>      <span class="nv">$black</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"white"</span><span class="o">:</span>      <span class="nv">$white</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"gray"</span><span class="o">:</span>       <span class="nv">$gray-600</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="s2">"gray-dark"</span><span class="o">:</span>  <span class="nv">$gray-800</span>
</span></span><span class="line"><span class="cl"><span class="p">);</span>
</span></span></code></pre>
    </div>
</div>
<p>Add, remove, or modify values within the map to update how they’re used in many other components.
    Unfortunately at this time, not <em>every</em> component utilizes this Sass map. Future updates will
    strive to improve upon this. Until then, plan on making use of the <code>${color}</code> variables and
    this Sass map.</p>
<h3 id="example">Example <a class="anchor-link" href="#example" aria-label="Link to this section: Example"></a>
</h3>
<p>Here’s how you can use these in your Sass:</p>
<div class="bd-code-snippet">
    <div class="bd-clipboard"> <button type="button" class="btn-clipboard"> <svg class="bi" role="img"
                aria-label="Copy">
                <use xlink:href="#clipboard"></use>
            </svg> </button> </div>
    <div class="highlight">
        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nc">.alpha</span> <span class="p">{</span> <span class="na">color</span><span class="o">:</span> <span class="nv">$purple</span><span class="p">;</span> <span class="p">}</span>
</span></span><span class="line"><span class="cl"><span class="nc">.beta</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="na">color</span><span class="o">:</span> <span class="nv">$yellow-300</span><span class="p">;</span>
</span></span><span class="line"><span class="cl">  <span class="na">background-color</span><span class="o">:</span> <span class="nv">$indigo-900</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="p">}</span>
</span></span></code></pre>
    </div>
</div>
<p><a href="/docs/5.3/utilities/colors/">Color</a> and <a href="/docs/5.3/utilities/background/">background</a>
    utility classes are also available for
    setting <code>color</code> and <code>background-color</code> using the <code>500</code> color values.
</p>
