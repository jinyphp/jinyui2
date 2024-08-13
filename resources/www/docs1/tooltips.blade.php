<x-www-app><x-www-layout>

          <!-- Page title -->
          <section class="py-2 pb-sm-3">
            <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill" href="https://getbootstrap.com/docs/5.3/components/tooltips/" target="_blank" rel="noreferrer">
              Bootstrap docs
              <i class="ci-external-link fs-sm ms-1"></i>
            </a>
            <h1 class="pt-1">Tooltips</h1>
            <p class="text-body-secondary mb-4">Custom tooltips for local title storage.</p>
          </section>


          <!-- Static examples -->
          <section id="tooltips-static" class="cd-section pb-sm-2 mb-5">
            <h4>Static examples</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <div class="hstack flex-wrap gap-4 pt-1 pb-2">
                  <div class="tooltip bs-tooltip-top position-relative opacity-100" role="tooltip">
                    <div class="tooltip-arrow position-absolute start-50 translate-middle-x"></div>
                    <div class="tooltip-inner">Tooltip on the top</div>
                  </div>
                  <div class="tooltip bs-tooltip-end position-relative opacity-100" role="tooltip">
                    <div class="tooltip-arrow position-absolute top-50 translate-middle-y"></div>
                    <div class="tooltip-inner">Tooltip on the right</div>
                  </div>
                  <div class="tooltip bs-tooltip-bottom position-relative opacity-100" role="tooltip">
                    <div class="tooltip-arrow position-absolute start-50 translate-middle-x"></div>
                    <div class="tooltip-inner">Tooltip on the bottom</div>
                  </div>
                  <div class="tooltip bs-tooltip-start position-relative opacity-100" role="tooltip">
                    <div class="tooltip-arrow position-absolute top-50 translate-middle-y"></div>
                    <div class="tooltip-inner">Tooltip on the left</div>
                  </div>
                  <div class="tooltip bs-tooltip-top position-relative opacity-100" role="tooltip">
                    <div class="tooltip-arrow position-absolute start-50 translate-middle-x"></div>
                    <div class="tooltip-inner"><i>Tooltip</i> <u>with</u> <strong>HTML</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Live demo -->
          <section id="tooltips-live" class="cd-section pb-sm-2 mb-5">
            <h4>Live demo</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab" aria-controls="preview-2" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab" aria-controls="html-2" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-2" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                    <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Tooltip on top</button>
                    <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">Tooltip on right</button>
                    <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">Tooltip on bottom</button>
                    <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">Tooltip on left</button>
                    <button type="button" class="btn btn-outline-secondary mb-3" data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip with HTML</button>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tooltips-live-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tooltips-live-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Tooltip on top --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;Tooltip on top&quot;&gt;
  Tooltip on top
&lt;/button&gt;

&lt;!-- Tooltip on right --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; data-bs-title=&quot;Tooltip on right&quot;&gt;
  Tooltip on right
&lt;/button&gt;

&lt;!-- Tooltip on bottom --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; data-bs-title=&quot;Tooltip on bottom&quot;&gt;
  Tooltip on bottom
&lt;/button&gt;

&lt;!-- Tooltip on left --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; data-bs-title=&quot;Tooltip on left&quot;&gt;
  Tooltip on left
&lt;/button&gt;

&lt;!-- Tooltip with HTML --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-html=&quot;true&quot; data-bs-title=&quot;&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;&quot;&gt;
  Tooltip with HTML
&lt;/button&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Small size -->
          <section id="tooltips-small" class="cd-section">
            <h4>Small size</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab" aria-controls="preview-3" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab" aria-controls="html-3" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-3" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                    <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" data-bs-title="I'm a small tooltip">Small tooltip example</button>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#tooltips-small-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="tooltips-small-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Small size tooltip that is applied via data-bs-custom-class="tooltip-sm" --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; data-bs-placement=&quot;top&quot; data-bs-title=&quot;I'm a small tooltip&quot;&gt;
  Small tooltip example
&lt;/button&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
</x-www-layout></x-www-app>


