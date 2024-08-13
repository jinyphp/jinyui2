<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Select box</h1>
    <p class="text-body-secondary mb-4">Single / multiple select with search and sorting, tags components.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The Select box component relies on the <a class="alert-link" href="https://github.com/Choices-js/Choices"
          target="_blank" rel="noreferrer">Choices.js</a> plugin. To use this component, ensure to include the required
        reference to the plugin's .css and .js files.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/choices.js/public/assets/styles/choices.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/choices.js/public/assets/scripts/choices.min.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p class="pt-3 pb-2 mt-2">You can apply virtually any Choices.js option by specifying it within the
        <code>data-select="{}"</code> attribute.</p>
      <div class="h6">Usefull links:</div>
      <ul class="list-unstyled d-inline-block mb-0">
        <li class="mb-2">
          <a class="d-flex alert-link fw-medium text-decoration-none" href="https://choices-js.github.io/Choices/"
            target="_blank" rel="noopener">
            <i class="ci-external-link mt-1 me-2"></i>
            All Choices.js possible configuration demos
          </a>
        </li>
        <li class="mb-2">
          <a class="d-flex alert-link fw-medium text-decoration-none"
            href="https://github.com/Choices-js/Choices?tab=readme-ov-file#setup" target="_blank" rel="noopener">
            <i class="ci-external-link mt-1 me-2"></i>
            Choices.js API: options, methods and events</a>
        </li>
      </ul>
    </div>
  </section>


  <!-- Basic select -->
  <section id="select-basic" class="cd-section pb-sm-2 mb-5">
    <h4>Basic select</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="mb-4" style="max-width: 400px">
              <select class="form-select" data-select aria-label="Basic select example">
                <option value="">Choose name...</option>
                <option value="Emily Johnson">Emily Johnson</option>
                <option value="Michael Davis">Michael Davis</option>
                <option value="Jessica Smith">Jessica Smith</option>
                <option value="Christopher Taylor">Christopher Taylor</option>
                <option value="Olivia Anderson">Olivia Anderson</option>
                <option value="Ethan Williams">Ethan Williams</option>
              </select>
            </div>
            <div style="max-width: 400px">
              <select class="form-select" data-select aria-label="Disabled select example" disabled>
                <option value="">Disabled select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
              </select>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic select example --&gt;
&lt;select class=&quot;form-select&quot; data-select aria-label=&quot;Basic select example&quot;&gt;
  &lt;option value=&quot;&quot;&gt;Choose name...&lt;/option&gt;
  &lt;option value=&quot;Emily Johnson&quot;&gt;Emily Johnson&lt;/option&gt;
  &lt;option value=&quot;Michael Davis&quot;&gt;Michael Davis&lt;/option&gt;
  &lt;option value=&quot;Jessica Smith&quot;&gt;Jessica Smith&lt;/option&gt;
  &lt;option value=&quot;Christopher Taylor&quot;&gt;Christopher Taylor&lt;/option&gt;
  &lt;option value=&quot;Olivia Anderson&quot;&gt;Olivia Anderson&lt;/option&gt;
  &lt;option value=&quot;Ethan Williams&quot;&gt;Ethan Williams&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Disabled select --&gt;
&lt;select class=&quot;form-select&quot; data-select aria-label=&quot;Disabled select example&quot; disabled&gt;
  &lt;option value=&quot;&quot;&gt;Disabled select&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;option value=&quot;4&quot;&gt;Option 4&lt;/option&gt;
  &lt;option value=&quot;5&quot;&gt;Option 5&lt;/option&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Search and option groups -->
  <section id="select-search" class="cd-section pb-sm-2 mb-5">
    <h4>Search and option groups</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div style="max-width: 400px">
              <select class="form-select" data-select='{
                        "searchEnabled": true
                      }' aria-label="Select with search example">
                <option value="">Select country...</option>
                <optgroup label="Africa">
                  <option value="Nigeria">Nigeria</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Egypt">Egypt</option>
                  <option value="Ethiopia">Ethiopia</option>
                </optgroup>
                <optgroup label="Asia">
                  <option value="China">China</option>
                  <option value="India">India</option>
                  <option value="Japan">Japan</option>
                  <option value="South Korea">South Korea</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                </optgroup>
                <optgroup label="Europe">
                  <option value="Germany">Germany</option>
                  <option value="France">France</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Italy">Italy</option>
                  <option value="Spain">Spain</option>
                </optgroup>
                <optgroup label="North America">
                  <option value="United States">United States</option>
                  <option value="Canada">Canada</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Costa Rica">Costa Rica</option>
                </optgroup>
                <optgroup label="South America">
                  <option value="Brazil">Brazil</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Chile">Chile</option>
                  <option value="Peru">Peru</option>
                </optgroup>
                <optgroup label="Oceania">
                  <option value="Australia">Australia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                </optgroup>
              </select>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-search-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-search-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Select with enabled search and option groups --&gt;
&lt;select class=&quot;form-select&quot; data-select='{
  &quot;searchEnabled&quot;: true
}' aria-label=&quot;Select with search example&quot;&gt;
  &lt;option value=&quot;&quot;&gt;Select country...&lt;/option&gt;
  &lt;optgroup label=&quot;Africa&quot;&gt;
    &lt;option value=&quot;Nigeria&quot;&gt;Nigeria&lt;/option&gt;
    &lt;option value=&quot;South Africa&quot;&gt;South Africa&lt;/option&gt;
    &lt;option value=&quot;Kenya&quot;&gt;Kenya&lt;/option&gt;
    &lt;option value=&quot;Egypt&quot;&gt;Egypt&lt;/option&gt;
    &lt;option value=&quot;Ethiopia&quot;&gt;Ethiopia&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Asia&quot;&gt;
    &lt;option value=&quot;China&quot;&gt;China&lt;/option&gt;
    &lt;option value=&quot;India&quot;&gt;India&lt;/option&gt;
    &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
    &lt;option value=&quot;South Korea&quot;&gt;South Korea&lt;/option&gt;
    &lt;option value=&quot;Saudi Arabia&quot;&gt;Saudi Arabia&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Europe&quot;&gt;
    &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
    &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
    &lt;option value=&quot;United Kingdom&quot;&gt;United Kingdom&lt;/option&gt;
    &lt;option value=&quot;Italy&quot;&gt;Italy&lt;/option&gt;
    &lt;option value=&quot;Spain&quot;&gt;Spain&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;North America&quot;&gt;
    &lt;option value=&quot;United States&quot;&gt;United States&lt;/option&gt;
    &lt;option value=&quot;Canada&quot;&gt;Canada&lt;/option&gt;
    &lt;option value=&quot;Mexico&quot;&gt;Mexico&lt;/option&gt;
    &lt;option value=&quot;Jamaica&quot;&gt;Jamaica&lt;/option&gt;
    &lt;option value=&quot;Costa Rica&quot;&gt;Costa Rica&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;South America&quot;&gt;
    &lt;option value=&quot;Brazil&quot;&gt;Brazil&lt;/option&gt;
    &lt;option value=&quot;Argentina&quot;&gt;Argentina&lt;/option&gt;
    &lt;option value=&quot;Colombia&quot;&gt;Colombia&lt;/option&gt;
    &lt;option value=&quot;Chile&quot;&gt;Chile&lt;/option&gt;
    &lt;option value=&quot;Peru&quot;&gt;Peru&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Oceania&quot;&gt;
    &lt;option value=&quot;Australia&quot;&gt;Australia&lt;/option&gt;
    &lt;option value=&quot;New Zealand&quot;&gt;New Zealand&lt;/option&gt;
    &lt;option value=&quot;Papua New Guinea&quot;&gt;Papua New Guinea&lt;/option&gt;
    &lt;option value=&quot;Fiji&quot;&gt;Fiji&lt;/option&gt;
    &lt;option value=&quot;Solomon Islands&quot;&gt;Solomon Islands&lt;/option&gt;
  &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Multiple select -->
  <section id="select-multiple" class="cd-section pb-sm-2 mb-5">
    <h4>Multiple select</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="mb-4" style="max-width: 500px">
              <select class="form-select" data-select multiple aria-label="Multiple select example">
                <option value="">Select CMS</option>
                <option value="Shopify" selected>Shopify</option>
                <option value="WooCommerce">WooCommerce</option>
                <option value="Magento">Magento</option>
                <option value="OpenCart">OpenCart</option>
                <option value="PrestaShop">PrestaShop</option>
                <option value="VirtueMart">VirtueMart</option>
              </select>
            </div>
            <div style="max-width: 500px">
              <select class="form-select" data-select multiple aria-label="Disabled multiple select" disabled>
                <option value="">Disabled select</option>
                <option value="Shopify" selected>Shopify</option>
                <option value="WooCommerce">WooCommerce</option>
                <option value="Magento">Magento</option>
                <option value="OpenCart">OpenCart</option>
                <option value="PrestaShop">PrestaShop</option>
                <option value="VirtueMart">VirtueMart</option>
              </select>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-multiple-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-multiple-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Multiple select example --&gt;
&lt;select class=&quot;form-select&quot; data-select multiple aria-label=&quot;Multiple select example&quot;&gt;
  &lt;option value=&quot;&quot;&gt;Select CMS&lt;/option&gt;
  &lt;option value=&quot;Shopify&quot; selected&gt;Shopify&lt;/option&gt;
  &lt;option value=&quot;WooCommerce&quot;&gt;WooCommerce&lt;/option&gt;
  &lt;option value=&quot;Magento&quot;&gt;Magento&lt;/option&gt;
  &lt;option value=&quot;OpenCart&quot;&gt;OpenCart&lt;/option&gt;
  &lt;option value=&quot;PrestaShop&quot;&gt;PrestaShop&lt;/option&gt;
  &lt;option value=&quot;VirtueMart&quot;&gt;VirtueMart&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Disabled select --&gt;
&lt;select class=&quot;form-select&quot; data-select multiple aria-label=&quot;Disabled multiple select&quot; disabled&gt;
  &lt;option value=&quot;&quot;&gt;Disabled select&lt;/option&gt;
  &lt;option value=&quot;Shopify&quot; selected&gt;Shopify&lt;/option&gt;
  &lt;option value=&quot;WooCommerce&quot;&gt;WooCommerce&lt;/option&gt;
  &lt;option value=&quot;Magento&quot;&gt;Magento&lt;/option&gt;
  &lt;option value=&quot;OpenCart&quot;&gt;OpenCart&lt;/option&gt;
  &lt;option value=&quot;PrestaShop&quot;&gt;PrestaShop&lt;/option&gt;
  &lt;option value=&quot;VirtueMart&quot;&gt;VirtueMart&lt;/option&gt;
&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Tags input -->
  <section id="select-tags-input" class="cd-section pb-sm-2 mb-5">
    <h4>Tags input</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="mb-4" style="max-width: 500px">
              <input type="text" class="form-select" data-select='{"placeholderValue": "Enter something"}'
                value="tag-1,tag-2">
            </div>
            <div style="max-width: 500px">
              <input type="text" class="form-select" data-select='{"placeholderValue": "Disabled input"}'
                value="tag-1,tag-2" disabled>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-tags-input-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-tags-input-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Tags input example --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-select&quot; data-select='{&quot;placeholderValue&quot;: &quot;Enter something&quot;}' value=&quot;tag-1,tag-2&quot;&gt;

&lt;!-- Disabled tags input --&gt;
&lt;input type=&quot;text&quot; class=&quot;form-select&quot; data-select='{&quot;placeholderValue&quot;: &quot;Disabled input&quot;}' value=&quot;tag-1,tag-2&quot; disabled&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Custom option template -->
  <section id="select-custom-template" class="cd-section pb-sm-2 mb-5">
    <h4>Custom option template</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
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
            <div class="mb-3" style="max-width: 400px">
              <select class="form-select" data-select='{
                        "placeholderValue": "Select language",
                        "choices": [
                          {
                            "value": "",
                            "label": "Select language",
                            "placeholder": true
                          },
                          {
                            "value": "English",
                            "label": "<div class=\"d-flex align-items-center\"><img src=\"../assets/img/flags/en-uk.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"English\"> English</div>",
                            "selected": true
                          },
                          {
                            "value": "Français",
                            "label": "<div class=\"d-flex align-items-center\"><img src=\"../assets/img/flags/fr.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Français\"> Français</div>"
                          },
                          {
                            "value": "Deutsch",
                            "label": "<div class=\"d-flex align-items-center\"><img src=\"../assets/img/flags/de.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Deutsch\"> Deutsch</div>"
                          },
                          {
                            "value": "Italiano",
                            "label": "<div class=\"d-flex align-items-center\"><img src=\"../assets/img/flags/it.png\" class=\"flex-shrink-0 me-2\" width=\"20\" alt=\"Italiano\"> Italiano</div>"
                          }
                        ]
                      }' data-select-template="true" aria-label="Select language"></select>
            </div>
            <div style="max-width: 400px">
              <select class="form-select" data-select='{
                        "placeholderValue": "Choose rating",
                        "choices": [
                          {
                            "value": "",
                            "label": "Choose rating",
                            "placeholder": true
                          },
                          {
                            "value": "1",
                            "label": "<span class=\"visually-hidden\">1 star</span>",
                            "customProperties": {
                              "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i></span>",
                              "selected": "1 star"
                            }
                          },
                          {
                            "value": "2",
                            "label": "<span class=\"visually-hidden\">2 stars</span>",
                            "customProperties": {
                              "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                              "selected": "2 stars"
                            }
                          },
                          {
                            "value": "3",
                            "label": "<span class=\"visually-hidden\">3 stars</span>",
                            "customProperties": {
                              "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                              "selected": "3 stars"
                            }
                          },
                          {
                            "value": "4",
                            "label": "<span class=\"visually-hidden\">4 stars</span>",
                            "customProperties": {
                              "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                              "selected": "4 stars"
                            }
                          },
                          {
                            "value": "5",
                            "label": "<span class=\"visually-hidden\">5 stars</span>",
                            "customProperties": {
                              "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                              "selected": "5 stars"
                            }
                          }
                        ]
                      }' data-select-template="true" aria-label="Choose rating"></select>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-custom-template-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-custom-template-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Select with custom option template --&gt;
&lt;select class=&quot;form-select&quot; data-select='{
  &quot;placeholderValue&quot;: &quot;Select language&quot;,
  &quot;choices&quot;: [
    {
      &quot;value&quot;: &quot;&quot;,
      &quot;label&quot;: &quot;Select language&quot;,
      &quot;placeholder&quot;: true
    },
    {
      &quot;value&quot;: &quot;English&quot;,
      &quot;label&quot;: &quot;&lt;div class=\&quot;d-flex align-items-center\&quot;&gt;&lt;img src=\&quot;../assets/img/flags/en-uk.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;English\&quot;&gt; English&lt;/div&gt;&quot;,
      &quot;selected&quot;: true
    },
    {
      &quot;value&quot;: &quot;Français&quot;,
      &quot;label&quot;: &quot;&lt;div class=\&quot;d-flex align-items-center\&quot;&gt;&lt;img src=\&quot;../assets/img/flags/fr.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Français\&quot;&gt; Français&lt;/div&gt;&quot;
    },
    {
      &quot;value&quot;: &quot;Deutsch&quot;,
      &quot;label&quot;: &quot;&lt;div class=\&quot;d-flex align-items-center\&quot;&gt;&lt;img src=\&quot;../assets/img/flags/de.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Deutsch\&quot;&gt; Deutsch&lt;/div&gt;&quot;
    },
    {
      &quot;value&quot;: &quot;Italiano&quot;,
      &quot;label&quot;: &quot;&lt;div class=\&quot;d-flex align-items-center\&quot;&gt;&lt;img src=\&quot;../assets/img/flags/it.png\&quot; class=\&quot;flex-shrink-0 me-2\&quot; width=\&quot;20\&quot; alt=\&quot;Italiano\&quot;&gt; Italiano&lt;/div&gt;&quot;
    }
  ]
}' data-select-template=&quot;true&quot; aria-label=&quot;Select language&quot;&gt;&lt;/select&gt;

&lt;!-- Select with custom option template where selected label = customProperties.selected --&gt;
&lt;select class=&quot;form-select&quot; data-select='{
  &quot;placeholderValue&quot;: &quot;Choose rating&quot;,
  &quot;choices&quot;: [
    {
      &quot;value&quot;: &quot;&quot;,
      &quot;label&quot;: &quot;Choose rating&quot;,
      &quot;placeholder&quot;: true
    },
    {
      &quot;value&quot;: &quot;1&quot;,
      &quot;label&quot;: &quot;&lt;span class=\&quot;visually-hidden\&quot;&gt;1 star&lt;/span&gt;&quot;,
      &quot;customProperties&quot;: {
        &quot;icon&quot;: &quot;&lt;span class=\&quot;d-flex gap-1 py-1\&quot;&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;/span&gt;&quot;,
        &quot;selected&quot;: &quot;1 star&quot;
      }
    },
    {
      &quot;value&quot;: &quot;2&quot;,
      &quot;label&quot;: &quot;&lt;span class=\&quot;visually-hidden\&quot;&gt;2 stars&lt;/span&gt;&quot;,
      &quot;customProperties&quot;: {
        &quot;icon&quot;: &quot;&lt;span class=\&quot;d-flex gap-1 py-1\&quot;&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;/span&gt;&quot;,
        &quot;selected&quot;: &quot;2 stars&quot;
      }
    },
    {
      &quot;value&quot;: &quot;3&quot;,
      &quot;label&quot;: &quot;&lt;span class=\&quot;visually-hidden\&quot;&gt;3 stars&lt;/span&gt;&quot;,
      &quot;customProperties&quot;: {
        &quot;icon&quot;: &quot;&lt;span class=\&quot;d-flex gap-1 py-1\&quot;&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;/span&gt;&quot;,
        &quot;selected&quot;: &quot;3 stars&quot;
      }
    },
    {
      &quot;value&quot;: &quot;4&quot;,
      &quot;label&quot;: &quot;&lt;span class=\&quot;visually-hidden\&quot;&gt;4 stars&lt;/span&gt;&quot;,
      &quot;customProperties&quot;: {
        &quot;icon&quot;: &quot;&lt;span class=\&quot;d-flex gap-1 py-1\&quot;&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;/span&gt;&quot;,
        &quot;selected&quot;: &quot;4 stars&quot;
      }
    },
    {
      &quot;value&quot;: &quot;5&quot;,
      &quot;label&quot;: &quot;&lt;span class=\&quot;visually-hidden\&quot;&gt;5 stars&lt;/span&gt;&quot;,
      &quot;customProperties&quot;: {
        &quot;icon&quot;: &quot;&lt;span class=\&quot;d-flex gap-1 py-1\&quot;&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;i class=\&quot;ci-star-filled text-warning\&quot;&gt;&lt;/i&gt;&lt;/span&gt;&quot;,
        &quot;selected&quot;: &quot;5 stars&quot;
      }
    }
  ]
}' data-select-template=&quot;true&quot; aria-label=&quot;Choose rating&quot;&gt;&lt;/select&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Sizes and shapes -->
  <section id="select-sizes-shapes" class="cd-section">
    <h4>Sizes and shapes</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded z-0"
        style="opacity: .4"></span>
      <div class="card-body position-relative">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-6" role="tab"
              aria-controls="preview-6" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6" role="tab"
              aria-controls="html-6" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="d-flex flex-wrap flex-sm-nowrap gap-4">
              <div class="w-100" style="max-width: 400px">
                <div class="mb-3">
                  <select class="form-select form-select-lg" data-select='{
                            "classNames": {
                              "containerInner": "form-select form-select-lg"
                            }
                          }' aria-label="Large rounded select">
                    <option value="">Select option...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <div class="mb-3">
                  <select class="form-select" data-select aria-label="Normal rounded select">
                    <option value="">Select option...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <select class="form-select form-select-sm" data-select='{
                          "classNames": {
                            "containerInner": "form-select form-select-sm"
                          }
                        }' aria-label="Small rounded select">
                  <option value="">Select option...</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="w-100" style="max-width: 400px">
                <div class="mb-3">
                  <select class="form-select form-select-lg rounded-pill" data-select='{
                            "classNames": {
                              "containerInner": "form-select form-select-lg rounded-pill"
                            }
                          }' aria-label="Large pill select">
                    <option value="">Select option...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <div class="mb-3">
                  <select class="form-select rounded-pill" data-select='{
                            "classNames": {
                              "containerInner": "form-select rounded-pill"
                            }
                          }' aria-label="Normal pill select">
                    <option value="">Select option...</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <select class="form-select form-select-sm rounded-pill" data-select='{
                          "classNames": {
                            "containerInner": "form-select form-select-sm rounded-pill"
                          }
                        }' aria-label="Small pill select">
                  <option value="">Select option...</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>
            <div class="w-100 pt-4 mt-sm-2" style="max-width: 400px">
              <div class="mb-3">
                <select class="form-select form-select-lg rounded-0" data-select='{
                          "classNames": {
                            "containerInner": "form-select form-select-lg rounded-0"
                          }
                        }' aria-label="Large square select">
                  <option value="">Select option...</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="mb-3">
                <select class="form-select rounded-0" data-select='{
                          "classNames": {
                            "containerInner": "form-select rounded-0"
                          }
                        }' aria-label="Normal square select">
                  <option value="">Select option...</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <select class="form-select form-select-sm rounded-0" data-select='{
                        "classNames": {
                          "containerInner": "form-select form-select-sm rounded-0"
                        }
                      }' aria-label="Small square select">
                <option value="">Select option...</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#select-sizes-shapes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="select-sizes-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large rounded select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-lg&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-lg&quot;
    }
  }' aria-label=&quot;Large rounded select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Normal rounded select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select&quot; data-select aria-label=&quot;Normal rounded select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Small rounded select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-sm&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-sm&quot;
    }
  }' aria-label=&quot;Small rounded select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Large pill select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-lg rounded-pill&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-lg rounded-pill&quot;
    }
  }' aria-label=&quot;Large pill select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Normal pill select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select rounded-pill&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select rounded-pill&quot;
    }
  }' aria-label=&quot;Normal pill select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Small pill select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-sm rounded-pill&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-sm rounded-pill&quot;
    }
  }' aria-label=&quot;Small pill select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Large square select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-lg rounded-0&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-lg rounded-0&quot;
    }
  }' aria-label=&quot;Large square select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Normal square select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select rounded-0&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select rounded-0&quot;
    }
  }' aria-label=&quot;Normal square select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;

&lt;!-- Small square select --&gt;
&lt;div class=&quot;mb-3&quot;&gt;
  &lt;select class=&quot;form-select form-select-sm rounded-0&quot; data-select='{
    &quot;classNames&quot;: {
      &quot;containerInner&quot;: &quot;form-select form-select-sm rounded-0&quot;
    }
  }' aria-label=&quot;Small square select&quot;&gt;
    &lt;option value=&quot;&quot;&gt;Select option...&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;Option 1&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Option 2&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Option 3&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
