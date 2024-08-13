<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/popovers/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Popovers</h1>
    <p class="text-body-secondary mb-4">A pop-up box that appears when the user clicks/hovers on an element.</p>
  </section>


  <!-- Static examples -->
  <section id="popovers-static" class="cd-section pb-sm-2 mb-5">
    <h4>Static examples</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <div class="hstack flex-wrap gap-4 pt-1 pb-2">
          <div class="popover bs-popover-top position-relative" role="tooltip">
            <div class="popover-arrow position-absolute start-50 translate-middle-x"></div>
            <h3 class="popover-header">Top popover</h3>
            <div class="popover-body">And here's some amazing content inside popover body that can be html. It's very
              engaging. Right?</div>
          </div>
          <div class="popover bs-popover-end bs-popover-end-demo position-relative" role="tooltip">
            <div class="popover-arrow position-absolute top-50 translate-middle-y"></div>
            <h3 class="popover-header">Right popover</h3>
            <div class="popover-body">And here's some amazing content inside popover body that can be html. It's very
              engaging. Right?</div>
          </div>
          <div class="popover bs-popover-bottom position-relative" role="tooltip">
            <div class="popover-arrow position-absolute start-50 translate-middle-x"></div>
            <h3 class="popover-header">Bottom popover</h3>
            <div class="popover-body">And here's some amazing content inside popover body that can be html. It's very
              engaging. Right?</div>
          </div>
          <div class="popover bs-popover-start position-relative" role="tooltip">
            <div class="popover-arrow position-absolute top-50 translate-middle-y"></div>
            <h3 class="popover-header">Left popover</h3>
            <div class="popover-body">And here's some amazing content inside popover body that can be html. It's very
              engaging. Right?</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Live demo -->
  <section id="popovers-live" class="cd-section pb-sm-2 mb-5">
    <h4>Live demo</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab"
              aria-controls="preview-2" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab"
              aria-controls="html-2" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-2" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-container="body"
              data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" title="Top popover"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover on top</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-container="body"
              data-bs-toggle="popover" data-bs-placement="right" data-bs-trigger="hover" title="Right popover"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover on right</button>
            <button type="button" class="btn btn-outline-secondary mb-3 me-2" data-bs-container="body"
              data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" title="Bottom popover"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover on bottom</button>
            <button type="button" class="btn btn-outline-secondary mb-3" data-bs-container="body"
              data-bs-toggle="popover" data-bs-placement="left" data-bs-trigger="hover" title="Left popover"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover on left</button>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#popovers-live-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="popovers-live-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Popover on top --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Top popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Popover on top
&lt;/button&gt;

&lt;!-- Popover on right --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Right popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Popover on right
&lt;/button&gt;

&lt;!-- Popover on bottom --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Bottom popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Popover on bottom
&lt;/button&gt;

&lt;!-- Popover on left --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Left popover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Popover on left
&lt;/button&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Toggle options -->
  <section id="popovers-toggle" class="cd-section">
    <h4>Toggle options</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab"
              aria-controls="preview-3" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab"
              aria-controls="html-3" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-3" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <button type="button" class="btn btn-primary mb-3 me-2" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="top" title="Popover on click"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Toggle popover on
              click</button>
            <button type="button" class="btn btn-outline-primary mb-3 me-2" data-bs-container="body"
              data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" title="Popover on hover"
              data-bs-content="And here's some amazing content. It's very engaging. Right?">Toggle popover on
              hover</button>
            <a class="btn btn-outline-secondary mb-3" href="#!" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="top" data-bs-trigger="focus" title="Popover on focus"
              data-bs-content="And here's some amazing content. It's very engaging. Right?" tabindex="1">Toggle popover
              on focus</a>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#popovers-toggle-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="popovers-toggle-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Toggle popover on click (click is default trigger) --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; title=&quot;Popover on click&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Toggle popover on click
&lt;/button&gt;

&lt;!-- Toggle popover on hover --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;hover&quot; title=&quot;Popover on hover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;
  Toggle popover on hover
&lt;/button&gt;

&lt;!-- Toggle popover on focus --&gt;
&lt;a class=&quot;btn btn-outline-secondary&quot; href=&quot;#!&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;focus&quot; title=&quot;Popover on focus&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; tabindex=&quot;1&quot;&gt;
  Toggle popover on focus
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
