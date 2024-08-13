<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Shop filters</h1>
    <p class="text-body-secondary mb-4">Filter widgets for the sidebar, allowing users to refine product listings based
      on various attributes like price, brand, size, etc.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>Several filter components utilize third-party plugins for enhanced functionality:</p>
      <ul>
        <li>The <span class="fw-semibold">range slider</span> is powered by the <a class="alert-link"
            href="https://refreshless.com/nouislider/" target="_blank" rel="noreferrer">noUISlider</a> plugin.</li>
        <li>The <span class="fw-semibold">search bar</span> integrates with the <a class="alert-link"
            href="https://listjs.com/" target="_blank" rel="noreferrer">List.js</a> plugin.</li>
        <li>The <span class="fw-semibold">custom scrollbar</span> is implemented using the <a class="alert-link"
            href="http://grsmto.github.io/simplebar/" target="_blank" rel="noreferrer">SimpleBar</a> plugin.</li>
      </ul>
      <p>Ensure that you include the necessary references to the plugin's CSS and JavaScript files.</p>
      <p class="mb-2">CSS files are linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3" data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/nouislider/dist/nouislider.min.css&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/simplebar/dist/simplebar.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript files are linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border" data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/nouislider/dist/nouislider.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/vendor/list.js/dist/list.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;assets/vendor/simplebar/dist/simplebar.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Checkboxes -->
  <section id="filter-checkboxes" class="cd-section pb-sm-2 mb-5">
    <h4>Checkboxes</h4>
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
            <div class="accordion" style="max-width: 280px">
              <div class="accordion-item border-0">
                <h4 class="accordion-header" id="headingBrands">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse"
                    data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                    Brands
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="brands" aria-labelledby="headingBrands">
                  <div class="accordion-body p-0 pb-4"
                    data-filter-list='{"searchClass": "brands-search", "listClass": "brands-list", "valueNames": ["form-check-label"]}'>
                    <div class="position-relative mb-3">
                      <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input type="search" class="brands-search form-control form-icon-start" placeholder="Search">
                    </div>
                    <div style="height: 210px" data-simplebar data-simplebar-auto-hide="false">
                      <div class="brands-list d-flex flex-column gap-2">
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="adidas" checked>
                          <label for="adidas" class="form-check-label text-body-emphasis">
                            Adidas<span class="fs-xs text-body-secondary ms-1">(425)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="taylor">
                          <label for="taylor" class="form-check-label text-body-emphasis">
                            Ann Taylor<span class="fs-xs text-body-secondary ms-1">(15)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="armani">
                          <label for="armani" class="form-check-label text-body-emphasis">
                            Armani<span class="fs-xs text-body-secondary ms-1">(18)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="banana">
                          <label for="banana" class="form-check-label text-body-emphasis">
                            Banana Republic<span class="fs-xs text-body-secondary ms-1">(103)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="bilabong" checked>
                          <label for="bilabong" class="form-check-label text-body-emphasis">
                            Bilabong<span class="fs-xs text-body-secondary ms-1">(27)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="birkenstock">
                          <label for="birkenstock" class="form-check-label text-body-emphasis">
                            Birkenstock<span class="fs-xs text-body-secondary ms-1">(10)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="klein">
                          <label for="klein" class="form-check-label text-body-emphasis">
                            Calvin Klein<span class="fs-xs text-body-secondary ms-1">(365)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="columbia">
                          <label for="columbia" class="form-check-label text-body-emphasis">
                            Columbia<span class="fs-xs text-body-secondary ms-1">(508)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="converse">
                          <label for="converse" class="form-check-label text-body-emphasis">
                            Converse<span class="fs-xs text-body-secondary ms-1">(176)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="dockers">
                          <label for="dockers" class="form-check-label text-body-emphasis">
                            Dockers<span class="fs-xs text-body-secondary ms-1">(54)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="fruit">
                          <label for="fruit" class="form-check-label text-body-emphasis">
                            Fruit of the Loom<span class="fs-xs text-body-secondary ms-1">(739)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="hanes">
                          <label for="hanes" class="form-check-label text-body-emphasis">
                            Hanes<span class="fs-xs text-body-secondary ms-1">(92)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="choo">
                          <label for="choo" class="form-check-label text-body-emphasis">
                            Jimmy Choo<span class="fs-xs text-body-secondary ms-1">(17)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="levis">
                          <label for="levis" class="form-check-label text-body-emphasis">
                            Levi's<span class="fs-xs text-body-secondary ms-1">(361)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="wearhouse">
                          <label for="wearhouse" class="form-check-label text-body-emphasis">
                            Men's Wearhouse<span class="fs-xs text-body-secondary ms-1">(75)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="newbalance">
                          <label for="newbalance" class="form-check-label text-body-emphasis">
                            New Balance<span class="fs-xs text-body-secondary ms-1">(218)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="nike">
                          <label for="nike" class="form-check-label text-body-emphasis">
                            Nike<span class="fs-xs text-body-secondary ms-1">(810)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="navy">
                          <label for="navy" class="form-check-label text-body-emphasis">
                            Old Navy<span class="fs-xs text-body-secondary ms-1">(147)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="puma">
                          <label for="puma" class="form-check-label text-body-emphasis">
                            Puma<span class="fs-xs text-body-secondary ms-1">(370)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="skechers">
                          <label for="skechers" class="form-check-label text-body-emphasis">
                            Skechers<span class="fs-xs text-body-secondary ms-1">(209)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="hilfiger">
                          <label for="hilfiger" class="form-check-label text-body-emphasis">
                            Tommy Hilfiger<span class="fs-xs text-body-secondary ms-1">(487)</span>
                          </label>
                        </div>
                        <div class="form-check mb-0">
                          <input type="checkbox" class="form-check-input" id="armour">
                          <label for="armour" class="form-check-label text-body-emphasis">
                            Under Armour<span class="fs-xs text-body-secondary ms-1">(90)</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#filter-checkboxes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="filter-checkboxes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Collapsible list of checkbox based filter items with quick search and custom scrollbar --&gt;
&lt;div class=&quot;accordion&quot;&gt;
  &lt;div class=&quot;accordion-item border-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot; id=&quot;headingBrands&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button p-0 pb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#brands&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;brands&quot;&gt;
        Brands
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;brands&quot; aria-labelledby=&quot;headingBrands&quot;&gt;
      &lt;div class=&quot;accordion-body p-0 pb-4&quot; data-filter-list='{&quot;searchClass&quot;: &quot;brands-search&quot;, &quot;listClass&quot;: &quot;brands-list&quot;, &quot;valueNames&quot;: [&quot;form-check-label&quot;]}'&gt;
        &lt;div class=&quot;position-relative mb-3&quot;&gt;
          &lt;i class=&quot;ci-search position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
          &lt;input type=&quot;search&quot; class=&quot;brands-search form-control form-icon-start&quot; placeholder=&quot;Search&quot;&gt;
        &lt;/div&gt;
        &lt;div style=&quot;height: 210px&quot; data-simplebar data-simplebar-auto-hide=&quot;false&quot;&gt;
          &lt;div class=&quot;brands-list d-flex flex-column gap-2&quot;&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;adidas&quot; checked&gt;
              &lt;label for=&quot;adidas&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Adidas&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(425)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;taylor&quot;&gt;
              &lt;label for=&quot;taylor&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Ann Taylor&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(15)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;armani&quot;&gt;
              &lt;label for=&quot;armani&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Armani&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(18)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;banana&quot;&gt;
              &lt;label for=&quot;banana&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Banana Republic&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(103)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;bilabong&quot; checked&gt;
              &lt;label for=&quot;bilabong&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Bilabong&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(27)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;birkenstock&quot;&gt;
              &lt;label for=&quot;birkenstock&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Birkenstock&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(10)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;klein&quot;&gt;
              &lt;label for=&quot;klein&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Calvin Klein&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(365)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;columbia&quot;&gt;
              &lt;label for=&quot;columbia&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Columbia&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(508)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;converse&quot;&gt;
              &lt;label for=&quot;converse&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Converse&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(176)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dockers&quot;&gt;
              &lt;label for=&quot;dockers&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Dockers&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(54)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;fruit&quot;&gt;
              &lt;label for=&quot;fruit&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Fruit of the Loom&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(739)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;hanes&quot;&gt;
              &lt;label for=&quot;hanes&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Hanes&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(92)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;choo&quot;&gt;
              &lt;label for=&quot;choo&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Jimmy Choo&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(17)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;levis&quot;&gt;
              &lt;label for=&quot;levis&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Levi's&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(361)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;wearhouse&quot;&gt;
              &lt;label for=&quot;wearhouse&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Men's Wearhouse&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(75)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;newbalance&quot;&gt;
              &lt;label for=&quot;newbalance&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                New Balance&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(218)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
            &lt;div class=&quot;form-check mb-0&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;nike&quot;&gt;
              &lt;label for=&quot;nike&quot; class=&quot;form-check-label text-body-emphasis&quot;&gt;
                Nike&lt;span class=&quot;fs-xs text-body-secondary ms-1&quot;&gt;(810)&lt;/span&gt;
              &lt;/label&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
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


  <!-- Button toggles -->
  <section id="filter-button-toggles" class="cd-section pb-sm-2 mb-5">
    <h4>Button toggles</h4>
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
            <div class="d-flex flex-column flex-sm-row gap-2 gap-sm-5">
              <div class="accordion w-100" style="max-width: 280px">
                <div class="accordion-item border-0">
                  <h4 class="accordion-header" id="headingColor">
                    <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse"
                      data-bs-target="#color" aria-expanded="true" aria-controls="color">
                      Color
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse show" id="color" aria-labelledby="headingColor">
                    <div class="accordion-body p-0 pb-4">
                      <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="green" checked>
                          <label for="green" class="btn btn-color fs-xl" style="color: #8bc4ab"></label>
                          <label for="green" class="fs-sm ms-2">Green</label>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="red">
                          <label for="red" class="btn btn-color fs-xl" style="color: #ee7976"></label>
                          <label for="red" class="fs-sm ms-2">Coral red</label>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="pink">
                          <label for="pink" class="btn btn-color fs-xl" style="color: #df8fbf"></label>
                          <label for="pink" class="fs-sm ms-2">Pink</label>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="blue">
                          <label for="blue" class="btn btn-color fs-xl" style="color: #9acbf1"></label>
                          <label for="blue" class="fs-sm ms-2">Sky blue</label>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="black">
                          <label for="black" class="btn btn-color fs-xl" style="color: #364254"></label>
                          <label for="black" class="fs-sm ms-2">Black</label>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                          <input type="checkbox" class="btn-check" id="white">
                          <label for="white" class="btn btn-color fs-xl" style="color: #e0e5eb"></label>
                          <label for="white" class="fs-sm ms-2">White</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion w-100" style="max-width: 280px">
                <div class="accordion-item border-0">
                  <h4 class="accordion-header" id="headingSize">
                    <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse"
                      data-bs-target="#size" aria-expanded="true" aria-controls="size">
                      Size
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse show" id="size" aria-labelledby="headingSize">
                    <div class="accordion-body p-0 pb-4">
                      <div class="d-flex flex-wrap gap-2">
                        <input type="checkbox" class="btn-check" id="size-xxs" checked>
                        <label for="size-xxs" class="btn btn-sm btn-outline-secondary">XXS</label>
                        <input type="checkbox" class="btn-check" id="size-xs">
                        <label for="size-xs" class="btn btn-sm btn-outline-secondary">XS</label>
                        <input type="checkbox" class="btn-check" id="size-s">
                        <label for="size-s" class="btn btn-sm btn-outline-secondary">S</label>
                        <input type="checkbox" class="btn-check" id="size-m">
                        <label for="size-m" class="btn btn-sm btn-outline-secondary">M</label>
                        <input type="checkbox" class="btn-check" id="size-l">
                        <label for="size-l" class="btn btn-sm btn-outline-secondary">L</label>
                        <input type="checkbox" class="btn-check" id="size-xl">
                        <label for="size-xl" class="btn btn-sm btn-outline-secondary"><span
                            class="mx-n1">XL</span></label>
                        <input type="checkbox" class="btn-check" id="size-2xl">
                        <label for="size-2xl" class="btn btn-sm btn-outline-secondary">2XL</label>
                        <input type="checkbox" class="btn-check" id="size-40">
                        <label for="size-40" class="btn btn-sm btn-outline-secondary">40</label>
                        <input type="checkbox" class="btn-check" id="size-42">
                        <label for="size-42" class="btn btn-sm btn-outline-secondary">42</label>
                        <input type="checkbox" class="btn-check" id="size-44">
                        <label for="size-44" class="btn btn-sm btn-outline-secondary">44</label>
                        <input type="checkbox" class="btn-check" id="size-45">
                        <label for="size-45" class="btn btn-sm btn-outline-secondary">45</label>
                        <input type="checkbox" class="btn-check" id="size-46">
                        <label for="size-46" class="btn btn-sm btn-outline-secondary">46</label>
                        <input type="checkbox" class="btn-check" id="size-48">
                        <label for="size-48" class="btn btn-sm btn-outline-secondary">48</label>
                        <input type="checkbox" class="btn-check" id="size-50">
                        <label for="size-50" class="btn btn-sm btn-outline-secondary">50</label>
                        <input type="checkbox" class="btn-check" id="size-52">
                        <label for="size-52" class="btn btn-sm btn-outline-secondary">52</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#filter-button-toggles-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="filter-button-toggles-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Collapsible list of color filters based on "btn-check" and "btn-color" --&gt;
&lt;div class=&quot;accordion&quot;&gt;
  &lt;div class=&quot;accordion-item border-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot; id=&quot;headingColor&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button p-0 pb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#color&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;color&quot;&gt;
        Color
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;color&quot; aria-labelledby=&quot;headingColor&quot;&gt;
      &lt;div class=&quot;accordion-body p-0 pb-4&quot;&gt;
        &lt;div class=&quot;d-flex flex-column gap-2&quot;&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;green&quot; checked&gt;
            &lt;label for=&quot;green&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #8bc4ab&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;green&quot; class=&quot;fs-sm ms-2&quot;&gt;Green&lt;/label&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;red&quot;&gt;
            &lt;label for=&quot;red&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #ee7976&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;red&quot; class=&quot;fs-sm ms-2&quot;&gt;Coral red&lt;/label&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;pink&quot;&gt;
            &lt;label for=&quot;pink&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #df8fbf&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;pink&quot; class=&quot;fs-sm ms-2&quot;&gt;Pink&lt;/label&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;blue&quot;&gt;
            &lt;label for=&quot;blue&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #9acbf1&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;blue&quot; class=&quot;fs-sm ms-2&quot;&gt;Sky blue&lt;/label&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;black&quot;&gt;
            &lt;label for=&quot;black&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #364254&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;black&quot; class=&quot;fs-sm ms-2&quot;&gt;Black&lt;/label&gt;
          &lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center mb-1&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;white&quot;&gt;
            &lt;label for=&quot;white&quot; class=&quot;btn btn-color fs-xl&quot; style=&quot;color: #e0e5eb&quot;&gt;&lt;/label&gt;
            &lt;label for=&quot;white&quot; class=&quot;fs-sm ms-2&quot;&gt;White&lt;/label&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Collapsible list of size filters based on &quot;btn-check&quot; --&gt;
&lt;div class=&quot;accordion&quot;&gt;
  &lt;div class=&quot;accordion-item border-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot; id=&quot;headingSize&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button p-0 pb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#size&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;size&quot;&gt;
        Size
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;size&quot; aria-labelledby=&quot;headingSize&quot;&gt;
      &lt;div class=&quot;accordion-body p-0 pb-4&quot;&gt;
        &lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-xxs&quot; checked&gt;
          &lt;label for=&quot;size-xxs&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;XXS&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-xs&quot;&gt;
          &lt;label for=&quot;size-xs&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;XS&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-s&quot;&gt;
          &lt;label for=&quot;size-s&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;S&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-m&quot;&gt;
          &lt;label for=&quot;size-m&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;M&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-l&quot;&gt;
          &lt;label for=&quot;size-l&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;L&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-xl&quot;&gt;
          &lt;label for=&quot;size-xl&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;&lt;span class=&quot;mx-n1&quot;&gt;XL&lt;/span&gt;&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-2xl&quot;&gt;
          &lt;label for=&quot;size-2xl&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;2XL&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-40&quot;&gt;
          &lt;label for=&quot;size-40&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;40&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-42&quot;&gt;
          &lt;label for=&quot;size-42&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;42&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-44&quot;&gt;
          &lt;label for=&quot;size-44&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;44&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-45&quot;&gt;
          &lt;label for=&quot;size-45&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;45&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-46&quot;&gt;
          &lt;label for=&quot;size-46&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;46&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-48&quot;&gt;
          &lt;label for=&quot;size-48&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;48&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-50&quot;&gt;
          &lt;label for=&quot;size-50&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;50&lt;/label&gt;
          &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;size-52&quot;&gt;
          &lt;label for=&quot;size-52&quot; class=&quot;btn btn-sm btn-outline-secondary&quot;&gt;52&lt;/label&gt;
        &lt;/div&gt;
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


  <!-- Links -->
  <section id="filter-links" class="cd-section pb-sm-2 mb-5">
    <h4>Links</h4>
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
            <div class="accordion" style="max-width: 280px">
              <div class="accordion-item border-0">
                <h4 class="accordion-header" id="headingCategories">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse"
                    data-bs-target="#categories" aria-expanded="true" aria-controls="categories">
                    Categories
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="categories" aria-labelledby="headingCategories">
                  <div class="accordion-body p-0 pb-4">
                    <div style="height: 190px" data-simplebar data-simplebar-auto-hide="false">
                      <ul class="list-unstyled d-block m-0 mt-n2">
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Smartphones</span>
                            <span class="text-body-secondary fs-xs ms-auto">218</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Accessories</span>
                            <span class="text-body-secondary fs-xs ms-auto">372</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Tablets</span>
                            <span class="text-body-secondary fs-xs ms-auto">110</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Wearable Electronics</span>
                            <span class="text-body-secondary fs-xs ms-auto">142</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Computers &amp; Laptops</span>
                            <span class="text-body-secondary fs-xs ms-auto">205</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Cameras, Photo &amp; Video</span>
                            <span class="text-body-secondary fs-xs ms-auto">78</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">TV, Video &amp; Audio</span>
                            <span class="text-body-secondary fs-xs ms-auto">97</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Headphones</span>
                            <span class="text-body-secondary fs-xs ms-auto">121</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Video Games</span>
                            <span class="text-body-secondary fs-xs ms-auto">89</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Printers &amp; Ink</span>
                            <span class="text-body-secondary fs-xs ms-auto">116</span>
                          </a>
                        </li>
                        <li class="nav d-block pt-2 mt-1">
                          <a class="nav-link animate-underline fw-normal p-0 pe-4" href="#!">
                            <span class="animate-target text-truncate me-3">Home music</span>
                            <span class="text-body-secondary fs-xs ms-auto">154</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#filter-links-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="filter-links-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Collapsible list of links with custom scrollbar --&gt;
&lt;div class=&quot;accordion&quot;&gt;
  &lt;div class=&quot;accordion-item border-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot; id=&quot;headingCategories&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button p-0 pb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#categories&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;categories&quot;&gt;
        Categories
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;categories&quot; aria-labelledby=&quot;headingCategories&quot;&gt;
      &lt;div class=&quot;accordion-body p-0 pb-4&quot;&gt;
        &lt;div style=&quot;height: 190px&quot; data-simplebar data-simplebar-auto-hide=&quot;false&quot;&gt;
          &lt;ul class=&quot;list-unstyled d-block m-0 mt-n2&quot;&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Smartphones&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;218&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Accessories&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;372&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Tablets&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;110&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Wearable Electronics&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;142&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Computers &amp; Laptops&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;205&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Cameras, Photo &amp; Video&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;78&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;TV, Video &amp; Audio&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;97&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Headphones&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;121&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Video Games&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;89&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Printers &amp; Ink&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;116&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav d-block pt-2 mt-1&quot;&gt;
              &lt;a class=&quot;nav-link animate-underline fw-normal p-0 pe-4&quot; href=&quot;#!&quot;&gt;
                &lt;span class=&quot;animate-target text-truncate me-3&quot;&gt;Home music&lt;/span&gt;
                &lt;span class=&quot;text-body-secondary fs-xs ms-auto&quot;&gt;154&lt;/span&gt;
              &lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
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


  <!-- Range slider -->
  <section id="filter-range-slider" class="cd-section pb-sm-2 mb-5">
    <h4>Range slider</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-4" role="tab"
              aria-controls="preview-4" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4" role="tab"
              aria-controls="html-4" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="accordion" style="max-width: 280px">
              <div class="accordion-item border-0">
                <h4 class="accordion-header" id="headingPrice">
                  <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse"
                    data-bs-target="#price" aria-expanded="true" aria-controls="price">
                    Price
                  </button>
                </h4>
                <div class="accordion-collapse collapse show" id="price" aria-labelledby="headingPrice">
                  <div class="accordion-body p-0 pb-4">
                    <div class="range-slider"
                      data-range-slider='{"startMin": 40, "startMax": 150, "min": 0, "max": 200, "step": 1, "tooltipPrefix": "$"}'
                      aria-labelledby="headingPrice">
                      <div class="range-slider-ui"></div>
                      <div class="d-flex align-items-center">
                        <div class="position-relative w-50">
                          <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                          <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                        </div>
                        <i class="ci-minus text-body-emphasis mx-2"></i>
                        <div class="position-relative w-50">
                          <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                          <input type="number" class="form-control form-icon-start" min="0" data-range-slider-max>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#filter-range-slider-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="filter-range-slider-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Collapsible price range slider example --&gt;
&lt;div class=&quot;accordion&quot;&gt;
  &lt;div class=&quot;accordion-item border-0&quot;&gt;
    &lt;h4 class=&quot;accordion-header&quot; id=&quot;headingPrice&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button p-0 pb-3&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#price&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;price&quot;&gt;
        Price
      &lt;/button&gt;
    &lt;/h4&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;price&quot; aria-labelledby=&quot;headingPrice&quot;&gt;
      &lt;div class=&quot;accordion-body p-0 pb-4&quot;&gt;
        &lt;div class=&quot;range-slider&quot; data-range-slider='{&quot;startMin&quot;: 40, &quot;startMax&quot;: 150, &quot;min&quot;: 0, &quot;max&quot;: 200, &quot;step&quot;: 1, &quot;tooltipPrefix&quot;: &quot;$&quot;}' aria-labelledby=&quot;headingPrice&quot;&gt;
          &lt;div class=&quot;range-slider-ui&quot;&gt;&lt;/div&gt;
          &lt;div class=&quot;d-flex align-items-center&quot;&gt;
            &lt;div class=&quot;position-relative w-50&quot;&gt;
              &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot; data-range-slider-min&gt;
            &lt;/div&gt;
            &lt;i class=&quot;ci-minus text-body-emphasis mx-2&quot;&gt;&lt;/i&gt;
            &lt;div class=&quot;position-relative w-50&quot;&gt;
              &lt;i class=&quot;ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control form-icon-start&quot; min=&quot;0&quot;  data-range-slider-max&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
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


  <!-- Selected filters -->
  <section id="filter-selected" class="cd-section">
    <h4>Selected filters</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-5" role="tab"
              aria-controls="preview-5" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5" role="tab"
              aria-controls="html-5" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div style="max-width: 280px">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h4 class="h6 mb-0">Filter</h4>
                <button type="button"
                  class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline p-0 ms-2">
                  Clear all
                </button>
              </div>
              <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Sale
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Adidas
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Bilabong
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  Size: XXS
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                  <i class="ci-close fs-sm ms-n1 me-1"></i>
                  $40 - $150
                </button>
              </div>
            </div>

          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#filter-selected-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="filter-selected-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Selected filters made of buttons  --&gt;
&lt;div class=&quot;d-flex align-items-center justify-content-between mb-3&quot;&gt;
  &lt;h4 class=&quot;h6 mb-0&quot;&gt;Filter&lt;/h4&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline p-0 ms-2&quot;&gt;
    Clear all
  &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
    &lt;i class=&quot;ci-close fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
    Sale
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
    &lt;i class=&quot;ci-close fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
    Adidas
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
    &lt;i class=&quot;ci-close fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
    Bilabong
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
    &lt;i class=&quot;ci-close fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
    Size: XXS
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
    &lt;i class=&quot;ci-close fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
    $40 - $150
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
