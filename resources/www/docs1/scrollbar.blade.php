<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Scrollbar</h1>
    <p class="text-body-secondary mb-4">Custom CSS-styled replacement of browser's default scrollbar.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The custom scrollbar is powered by <a class="alert-link" href="http://grsmto.github.io/simplebar/"
          target="_blank" rel="noreferrer">SimpleBar</a> plugin. To use a custom scrollbar, make sure to include the
        required reference to the plugin's .css and .js files.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/simplebar/dist/simplebar.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/simplebar/dist/simplebar.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Vertical -->
  <section id="scrollbar-vertical" class="cd-section pb-sm-2 mb-5">
    <h4>Vertical</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab"
              aria-controls="preview-1" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab"
              aria-controls="html-1" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="overflow-y-auto pe-3" data-simplebar data-simplebar-auto-hide="false"
              style="max-width: 500px; max-height: 320px;">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque
                alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis
                nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui
                voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.</p>
              <p>Ad rem error ipsam suscipit? Nobis reiciendis in quae dicta consequuntur itaque, deleniti explicabo
                eius provident, minus voluptate doloribus porro excepturi saepe! Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Eum debitis accusantium, culpa soluta numquam dolore dolores, nihil explicabo voluptas
                impedit expedita. Doloribus nulla veniam enim ex.</p>
              <p>Fugiat, nisi quidem nulla, ex ipsam voluptatem autem illum labore quaerat deleniti ipsa minima est.
                Facilis, iste hic cupiditate ea rerum quam? Hic distinctio nostrum temporibus praesentium ipsum modi
                laudantium eligendi aspernatur eaque explicabo asperiores doloribus nemo in omnis qui, tempora quo
                molestias maxime inventore ex eaque.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque
                alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis
                nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui
                voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.</p>
              <p>Amet harum blanditiis eligendi a. Unde consequatur eveniet at cumque minus ab voluptates dolorem
                architecto! Alias voluptas optio cupiditate facere? Facere, ipsa. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptates quia accusamus aliquam temporibus dolorum nobis perspiciatis enim animi
                dolores corporis, doloremque dolore atque minima reprehenderit dignissimos velit nam doloribus fugit.
              </p>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollbar-vertical-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollbar-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical custom scrollbar example. You can put about any content or component inside &lt;div data-simplebar&gt;&lt;/div&gt; --&gt;
&lt;div class=&quot;overflow-y-auto pe-3&quot; data-simplebar data-simplebar-auto-hide=&quot;false&quot; style=&quot;max-width: 500px; max-height: 320px;&quot;&gt;
  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.&lt;/p&gt;
  &lt;p&gt;Ad rem error ipsam suscipit? Nobis reiciendis in quae dicta consequuntur itaque, deleniti explicabo eius provident, minus voluptate doloribus porro excepturi saepe! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum debitis accusantium, culpa soluta numquam dolore dolores, nihil explicabo voluptas impedit expedita. Doloribus nulla veniam enim ex.&lt;/p&gt;
  &lt;p&gt;Fugiat, nisi quidem nulla, ex ipsam voluptatem autem illum labore quaerat deleniti ipsa minima est. Facilis, iste hic cupiditate ea rerum quam? Hic distinctio nostrum temporibus praesentium ipsum modi laudantium eligendi aspernatur eaque explicabo asperiores doloribus nemo in omnis qui, tempora quo molestias maxime inventore ex eaque.&lt;/p&gt;
  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.&lt;/p&gt;
  &lt;p&gt;Amet harum blanditiis eligendi a. Unde consequatur eveniet at cumque minus ab voluptates dolorem architecto! Alias voluptas optio cupiditate facere? Facere, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia accusamus aliquam temporibus dolorum nobis perspiciatis enim animi dolores corporis, doloremque dolore atque minima reprehenderit dignissimos velit nam doloribus fugit.&lt;/p&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Horizontal -->
  <section id="scrollbar-horizontal" class="cd-section pb-sm-2 mb-5">
    <h4>Horizontal</h4>
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
          <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="overflow-x-auto pb-4" data-simplebar data-simplebar-auto-hide="false">
              <div class="d-flex gap-4">
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
                <div class="card" style="min-width: 230px;">
                  <div class="card-body">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk
                      of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollbar-horizontal-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollbar-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Horizontal custom scrollbar example. You can put about any content or component inside &lt;div data-simplebar&gt;&lt;/div&gt; --&gt;
&lt;div class=&quot;overflow-x-auto pb-4&quot; data-simplebar data-simplebar-auto-hide=&quot;false&quot;&gt;
  &lt;div class=&quot;d-flex gap-4&quot;&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;card&quot; style=&quot;min-width: 230px;&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;
        &lt;h6 class=&quot;card-title&quot;&gt;Card title&lt;/h6&gt;
        &lt;p class=&quot;card-text fs-sm&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Autohide -->
  <section id="scrollbar-autohide" class="cd-section">
    <h4>Autohide</h4>
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
          <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="overflow-y-auto pe-3" data-simplebar style="max-width: 500px; max-height: 320px;">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque
                alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis
                nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui
                voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.</p>
              <p>Ad rem error ipsam suscipit? Nobis reiciendis in quae dicta consequuntur itaque, deleniti explicabo
                eius provident, minus voluptate doloribus porro excepturi saepe! Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Eum debitis accusantium, culpa soluta numquam dolore dolores, nihil explicabo voluptas
                impedit expedita. Doloribus nulla veniam enim ex.</p>
              <p>Fugiat, nisi quidem nulla, ex ipsam voluptatem autem illum labore quaerat deleniti ipsa minima est.
                Facilis, iste hic cupiditate ea rerum quam? Hic distinctio nostrum temporibus praesentium ipsum modi
                laudantium eligendi aspernatur eaque explicabo asperiores doloribus nemo in omnis qui, tempora quo
                molestias maxime inventore ex eaque.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque
                alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis
                nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui
                voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.</p>
              <p>Amet harum blanditiis eligendi a. Unde consequatur eveniet at cumque minus ab voluptates dolorem
                architecto! Alias voluptas optio cupiditate facere? Facere, ipsa. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Voluptates quia accusamus aliquam temporibus dolorum nobis perspiciatis enim animi
                dolores corporis, doloremque dolore atque minima reprehenderit dignissimos velit nam doloribus fugit.
              </p>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollbar-autohide-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollbar-autohide-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Remove data-simplebar-auto-hide=&quot;false&quot; from data-simplebar to enable autohide feature (scrollbar will be shown on hover). You can put about any content or component inside &lt;div data-simplebar&gt;&lt;/div&gt; --&gt;
&lt;div class=&quot;overflow-y-auto pe-3&quot; data-simplebar style=&quot;max-width: 500px; max-height: 320px;&quot;&gt;
  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.&lt;/p&gt;
  &lt;p&gt;Ad rem error ipsam suscipit? Nobis reiciendis in quae dicta consequuntur itaque, deleniti explicabo eius provident, minus voluptate doloribus porro excepturi saepe! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum debitis accusantium, culpa soluta numquam dolore dolores, nihil explicabo voluptas impedit expedita. Doloribus nulla veniam enim ex.&lt;/p&gt;
  &lt;p&gt;Fugiat, nisi quidem nulla, ex ipsam voluptatem autem illum labore quaerat deleniti ipsa minima est. Facilis, iste hic cupiditate ea rerum quam? Hic distinctio nostrum temporibus praesentium ipsum modi laudantium eligendi aspernatur eaque explicabo asperiores doloribus nemo in omnis qui, tempora quo molestias maxime inventore ex eaque.&lt;/p&gt;
  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, autem aliquid nisi quia, deserunt atque alias amet totam temp aspernatur facilis veritatis repellendus tenetur, inventore ex eaque non omnis nostrum! Optio, earum illum unde dolorum illo quasi laboriosam quod alias nesciunt similique qui voluptatibus cupid dolor molestias omnis aliquid fuga pariatur fugiat.&lt;/p&gt;
  &lt;p&gt;Amet harum blanditiis eligendi a. Unde consequatur eveniet at cumque minus ab voluptates dolorem architecto! Alias voluptas optio cupiditate facere? Facere, ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quia accusamus aliquam temporibus dolorum nobis perspiciatis enim animi dolores corporis, doloremque dolore atque minima reprehenderit dignissimos velit nam doloribus fugit.&lt;/p&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
