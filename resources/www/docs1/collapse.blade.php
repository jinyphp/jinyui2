<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/collapse/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Collapse</h1>
    <p class="text-body-secondary mb-4">Toggle the visibility of content.</p>
  </section>


  <!-- Basic example -->
  <section id="collapse-basic" class="cd-section pb-sm-2 mb-5">
    <h4>Basic example</h4>
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
          <div id="preview-1" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <a class="btn btn-outline-secondary me-2 mb-3 collapsed" href="#collapseExample" data-bs-toggle="collapse"
              role="button" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
            <button type="button" class="btn btn-outline-secondary mb-3 collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button with
              data-bs-target</button>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et
                dolorum fuga.</div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#collapse-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="collapse-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Link with href --&gt;
&lt;a class=&quot;btn btn-outline-secondary mb-3&quot; href=&quot;#collapseExample&quot; data-bs-toggle=&quot;collapse&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
  Link with href
&lt;/a&gt;

&lt;!-- Button with data-bs-target --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary mb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
  Button with data-bs-target
&lt;/button&gt;

&lt;!-- Collapse --&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
  &lt;div class=&quot;card card-body&quot;&gt;
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Horizontal -->
  <section id="collapse-horizontal" class="cd-section pb-sm-2 mb-5">
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
          <div id="preview-2" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
            <button type="button" class="btn btn-outline-secondary mb-3 collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapseHorizontal" aria-expanded="false" aria-controls="collapseHorizontal">Toggle width
              collapse</button>
            <div class="collapse-horizontal collapse" id="collapseHorizontal" style="">
              <div class="card card-body" style="width: 32rem;">At vero eos et accusamus et iusto odio dignissimos
                ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                excepturi sint occaecati cupiditate non provident, similique sunt in culpa officia.</div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#collapse-horizontal-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="collapse-horizontal-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Horizotal (width) collapse --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary mb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseHorizontal&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseHorizontal&quot;&gt;
  Toggle width collapse
&lt;/button&gt;
&lt;div class=&quot;collapse collapse-horizontal&quot; id=&quot;collapseHorizontal&quot;&gt;
  &lt;div class=&quot;card card-body&quot; style=&quot;width: 32rem;&quot;&gt;
    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa officia.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Multiple targets -->
  <section id="collapse-multiple" class="cd-section">
    <h4>Multiple targets</h4>
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
            <a class="btn btn-outline-secondary me-2 mb-3" href="#multiCollapseExample1" data-bs-toggle="collapse"
              role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <button type="button" class="btn btn-outline-secondary me-2 mb-3 collapsed" data-bs-toggle="collapse"
              data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle
              second element</button>
            <button type="button" class="btn btn-outline-secondary mb-3 collapsed" data-bs-toggle="collapse"
              data-bs-target=".multi-collapse" aria-expanded="false"
              aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
            <div class="row">
              <div class="col-sm-6">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body mb-2">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident.</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                  <div class="card card-body mb-2">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident.</div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#collapse-multiple-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="collapse-multiple-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Toggle first element --&gt;
&lt;a class=&quot;btn btn-outline-secondary me-2 mb-3&quot; href=&quot;#multiCollapseExample1&quot; data-bs-toggle=&quot;collapse&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;
  Toggle first element
&lt;/a&gt;

&lt;!-- Toggle second element --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary me-2 mb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;
  Toggle second element
&lt;/button&gt;

&lt;!-- Toggle both elements --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary mb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;
  Toggle both elements
&lt;/button&gt;

&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-sm-6&quot;&gt;

    &lt;!-- Collapse 1 --&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
      &lt;div class=&quot;card card-body mb-2&quot;&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-6&quot;&gt;

    &lt;!-- Collapse 2 --&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
      &lt;div class=&quot;card card-body mb-2&quot;&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
</x-www-layout></x-www-app>
