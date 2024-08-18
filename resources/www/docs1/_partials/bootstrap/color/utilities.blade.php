<h2 id="generating-utilities">Generating utilities <a class="anchor-link" href="#generating-utilities"
        aria-label="Link to this section: Generating utilities"></a></h2>
<small
    class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">Added
    in v5.1.0</small>

<p>Bootstrap doesn’t include <code>color</code> and <code>background-color</code> utilities for every color
    variable, but you can generate these yourself with our <a href="/docs/5.3/utilities/api/">utility
        API</a> and our extended Sass maps added in v5.1.0.</p>
<ol>
    <li>To start, make sure you’ve imported our functions, variables, mixins, and utilities.</li>
    <li>Use our <code>map-merge-multiple()</code> function to quickly merge multiple Sass maps together in a
        new map.</li>
    <li>Merge this new combined map to extend any utility with a <code>{color}-{level}</code> class name.
    </li>
</ol>
<p>Here’s an example that generates text color utilities (e.g., <code>.text-purple-500</code>) using the
    above steps.</p>
<div class="bd-code-snippet">
    <div class="bd-clipboard"> <button type="button" class="btn-clipboard"> <svg class="bi" role="img"
                aria-label="Copy">
                <use xlink:href="#clipboard"></use>
            </svg> </button> </div>
    <div class="highlight">
        <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/functions"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/variables"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/variables-dark"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/maps"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/mixins"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/utilities"</span><span class="p">;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="nv">$all-colors</span><span class="o">:</span> <span class="nf">map-merge-multiple</span><span class="p">(</span><span class="nv">$blues</span><span class="o">,</span> <span class="nv">$indigos</span><span class="o">,</span> <span class="nv">$purples</span><span class="o">,</span> <span class="nv">$pinks</span><span class="o">,</span> <span class="nv">$reds</span><span class="o">,</span> <span class="nv">$oranges</span><span class="o">,</span> <span class="nv">$yellows</span><span class="o">,</span> <span class="nv">$greens</span><span class="o">,</span> <span class="nv">$teals</span><span class="o">,</span> <span class="nv">$cyans</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="nv">$utilities</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">  <span class="nv">$utilities</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="p">(</span>
</span></span><span class="line"><span class="cl">    <span class="s2">"color"</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">      <span class="nf">map-get</span><span class="p">(</span><span class="nv">$utilities</span><span class="o">,</span> <span class="s2">"color"</span><span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">      <span class="p">(</span>
</span></span><span class="line"><span class="cl">        <span class="na">values</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span>
</span></span><span class="line"><span class="cl">          <span class="nf">map-get</span><span class="p">(</span><span class="nf">map-get</span><span class="p">(</span><span class="nv">$utilities</span><span class="o">,</span> <span class="s2">"color"</span><span class="p">)</span><span class="o">,</span> <span class="s2">"values"</span><span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">          <span class="p">(</span>
</span></span><span class="line"><span class="cl">            <span class="nv">$all-colors</span>
</span></span><span class="line"><span class="cl">          <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">        <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">      <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">    <span class="p">)</span><span class="o">,</span>
</span></span><span class="line"><span class="cl">  <span class="p">)</span>
</span></span><span class="line"><span class="cl"><span class="p">);</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="k">@import</span> <span class="s2">"bootstrap/scss/utilities/api"</span><span class="p">;</span>
</span></span></code></pre>
    </div>
</div>
<p>This will generate new <code>.text-{color}-{level}</code> utilities for every color and level. You can do
    the same for any other utility and property as well.</p>


