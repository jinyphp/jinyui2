<x-www-app><x-www-layout>

          <!-- Page title -->
          <section class="py-2 pb-sm-3">
            <span class="badge d-inline-flex align-items-center text-warning bg-warning-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Utilities &amp; helpers</span>
            <h1 class="pt-1">Cartzilla utilities</h1>
            <p class="text-body-secondary mb-4">Custom Cartzilla utility classes.</p>
          </section>


          <!-- Dotted background -->
          <section id="utilities-dotted-bg" class="cd-section pb-sm-2 mb-5">
            <h4>Dotted background</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab" aria-controls="preview-1" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab" aria-controls="html-1" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-1" class="tab-pane pt-4 pb-2 mt-2 fade show active" role="tabpanel">
                    <div class="position-relative bg-dotted rounded mb-3 mb-md-4">
                      <div class="ratio ratio-21x9 d-none d-sm-block"></div>
                      <div class="ratio ratio-16x9 d-sm-none"></div>
                      <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="h5 mb-0">.bg-dotted</div>
                      </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 g-md-4">
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-primary-bg-subtle); --cz-dot-color: var(--cz-primary)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Primary</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-success-bg-subtle); --cz-dot-color: var(--cz-success)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Success</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-danger-bg-subtle); --cz-dot-color: var(--cz-danger)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Danger</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-warning-bg-subtle); --cz-dot-color: var(--cz-warning)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Warning</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-info-bg-subtle); --cz-dot-color: var(--cz-info)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Info</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative bg-dotted rounded" style="--cz-bg-color: var(--cz-dark-bg-subtle); --cz-dot-color: var(--cz-dark)">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">Dark</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#utilities-dotted-bg-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="utilities-dotted-bg-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Default dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot;&gt;...&lt;/div&gt;

&lt;!-- Primary dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-primary-bg-subtle); --cz-dot-color: var(--cz-primary)&quot;&gt;...&lt;/div&gt;

&lt;!-- Success dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-success-bg-subtle); --cz-dot-color: var(--cz-success)&quot;&gt;...&lt;/div&gt;

&lt;!-- Danger dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-danger-bg-subtle); --cz-dot-color: var(--cz-danger)&quot;&gt;...&lt;/div&gt;

&lt;!-- Warning dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-warning-bg-subtle); --cz-dot-color: var(--cz-warning)&quot;&gt;...&lt;/div&gt;

&lt;!-- Info dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-info-bg-subtle); --cz-dot-color: var(--cz-info)&quot;&gt;...&lt;/div&gt;

&lt;!-- Dark dotted background --&gt;
&lt;div class=&quot;bg-dotted p-4&quot; style=&quot;--cz-bg-color: var(--cz-dark-bg-subtle); --cz-dot-color: var(--cz-dark)&quot;&gt;...&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Borders -->
          <section id="utilities-borders" class="cd-section pb-sm-2 mb-5">
            <h4>Borders</h4>
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
                  <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-4 g-sm-3 g-md-4">
                      <div class="col">
                        <div class="position-relative border border-dashed border-2 rounded">
                          <div class="ratio ratio-4x3 d-none d-xl-block"></div>
                          <div class="ratio ratio-16x9 d-xl-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">.border-dashed</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative border border-dotted border-2 rounded">
                          <div class="ratio ratio-4x3 d-none d-xl-block"></div>
                          <div class="ratio ratio-16x9 d-xl-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="h5 mb-0">.border-dotted</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#utilities-borders-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="utilities-borders-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Dashed border --&gt;
&lt;div class=&quot;border border-dashed p-4&quot;&gt;...&lt;/div&gt;

&lt;!-- Dotted border --&gt;
&lt;div class=&quot;border border-dotted p-4&quot;&gt;...&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Cursors -->
          <section id="utilities-cursors" class="cd-section">
            <h4>Cursors</h4>
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
                  <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 g-md-4">
                      <div class="col">
                        <div class="position-relative cursor-pointer bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-pointer</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-default bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-default</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-help bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-help</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-wait bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-wait</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-crosshair bg-body rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-crosshair</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-not-allowed bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-not-allowed</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-zoom-in bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-zoom-in</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-zoom-out bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-zoom-out</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="position-relative cursor-grab bg-body text-center rounded shadow">
                          <div class="ratio ratio-4x3 d-none d-sm-block"></div>
                          <div class="ratio ratio-16x9 d-sm-none"></div>
                          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center px-2">
                            <div class="h5 mb-0">.cursor-grab</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#utilities-cursors-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="utilities-cursors-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Pointer cursor --&gt;
&lt;div class=&quot;cursor-pointer&quot;&gt;...&lt;/div&gt;

&lt;!-- Default cursor --&gt;
&lt;div class=&quot;cursor-default&quot;&gt;...&lt;/div&gt;

&lt;!-- Help cursor --&gt;
&lt;div class=&quot;cursor-help&quot;&gt;...&lt;/div&gt;

&lt;!-- Wait cursor --&gt;
&lt;div class=&quot;cursor-wait&quot;&gt;...&lt;/div&gt;

&lt;!-- Crosshair cursor --&gt;
&lt;div class=&quot;cursor-crosshair&quot;&gt;...&lt;/div&gt;

&lt;!-- Not allowed cursor --&gt;
&lt;div class=&quot;cursor-not-allowed&quot;&gt;...&lt;/div&gt;

&lt;!-- Zoom in cursor --&gt;
&lt;div class=&quot;cursor-zoom-in&quot;&gt;...&lt;/div&gt;

&lt;!-- Zoom out cursor --&gt;
&lt;div class=&quot;cursor-zoom-out&quot;&gt;...&lt;/div&gt;

&lt;!-- Grab cursor --&gt;
&lt;div class=&quot;cursor-grab&quot;&gt;...&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
</x-www-layout></x-www-app>





