<x-www-app><x-www-layout>
  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/content/tables/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Tables</h1>
    <p class="text-body-secondary mb-4">Examples for opt-in styling of tables, alongside searching and sorting features.
    </p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The table search and sorting feature is enabled through the <a class="alert-link" href="https://listjs.com/"
          target="_blank" rel="noreferrer">List.js</a> plugin. To use this functionality, make sure to include the
        required reference to the plugin's <code>.js</code> file before the closing <code>&lt;/body&gt;</code> tag and
        above <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border mt-3"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/list.js/dist/list.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Basic example -->
  <section id="tables-basic" class="cd-section pb-sm-2 mb-5">
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
          <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Jane</td>
                    <td>Birkins</td>
                    <td>Support</td>
                    <td class="text-nowrap">+3 774 28 50</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-basic-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic responsive table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
&lt;td&gt;Jane&lt;/td&gt;
&lt;td&gt;Birkins&lt;/td&gt;
&lt;td&gt;Support&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 774 28 50&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Search and sort -->
  <section id="tables-search" class="cd-section pb-sm-2 mb-5">
    <h4>Search and sort</h4>
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
            <div
              data-filter-list='{"searchClass": "table-search", "listClass": "table-list", "sortClass": "table-sort", "valueNames": ["order", "first-name", "last-name", "position", "phone"]}'>
              <div class="position-relative mb-2" style="max-width: 18rem;">
                <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input type="search" class="table-search form-control form-icon-start" placeholder="Search table">
              </div>
              <div class="table-responsive overflow-auto" style="height: 300px;">
                <table class="table">
                  <thead class="position-sticky top-0">
                    <tr>
                      <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0"
                          data-sort="order">#</button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0"
                          data-sort="first-name">First</button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0"
                          data-sort="last-name">Last</button>
                      </th>
                      <th scope="col">
                        <button type="button" class="btn fs-base fw-semibold text-dark-emphasis table-sort p-0"
                          data-sort="position">Position</button>
                      </th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody class="table-list">
                    <tr>
                      <th class="order" scope="row">1</th>
                      <td class="first-name">John</td>
                      <td class="last-name">Doe</td>
                      <td class="position">CEO, Founder</td>
                      <td class="phone text-nowrap">+3 555 68 70</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">2</th>
                      <td class="first-name">Anna</td>
                      <td class="last-name">Cabana</td>
                      <td class="position">Designer</td>
                      <td class="phone text-nowrap">+3 434 65 93</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">3</th>
                      <td class="first-name">Kale</td>
                      <td class="last-name">Thornton</td>
                      <td class="position">Developer</td>
                      <td class="phone text-nowrap">+3 285 42 88</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">4</th>
                      <td class="first-name">Jane</td>
                      <td class="last-name">Birkins</td>
                      <td class="position">Support</td>
                      <td class="phone text-nowrap">+3 774 28 50</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">5</th>
                      <td class="first-name">Robert</td>
                      <td class="last-name">Smith</td>
                      <td class="position">Marketing</td>
                      <td class="phone text-nowrap">+3 623 87 19</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">6</th>
                      <td class="first-name">Emily</td>
                      <td class="last-name">Johnson</td>
                      <td class="position">Sales</td>
                      <td class="phone text-nowrap">+3 911 50 62</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">7</th>
                      <td class="first-name">Matthew</td>
                      <td class="last-name">Brown</td>
                      <td class="position">Analyst</td>
                      <td class="phone text-nowrap">+3 329 49 75</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">8</th>
                      <td class="first-name">Olivia</td>
                      <td class="last-name">Davis</td>
                      <td class="position">Finance</td>
                      <td class="phone text-nowrap">+3 146 91 27</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">9</th>
                      <td class="first-name">William</td>
                      <td class="last-name">Garcia</td>
                      <td class="position">Project Manager</td>
                      <td class="phone text-nowrap">+3 509 76 39</td>
                    </tr>
                    <tr>
                      <th class="order" scope="row">10</th>
                      <td class="first-name">Sophia</td>
                      <td class="last-name">Adams</td>
                      <td class="position">HR</td>
                      <td class="phone text-nowrap">+3 687 25 81</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-search-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-search-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Table with integrated search and sortable columns --&gt;
&lt;div data-filter-list='{&quot;searchClass&quot;: &quot;table-search&quot;, &quot;listClass&quot;: &quot;table-list&quot;, &quot;sortClass&quot;: &quot;table-sort&quot;, &quot;valueNames&quot;: [&quot;order&quot;, &quot;first-name&quot;, &quot;last-name&quot;, &quot;position&quot;, &quot;phone&quot;]}'&gt;

&lt;!-- Search field --&gt;
&lt;div class=&quot;position-relative mb-2&quot; style=&quot;max-width: 18rem;&quot;&gt;
&lt;i class=&quot;ci-search position-absolute top-50 start-0 translate-middle-y ms-3&quot;&gt;&lt;/i&gt;
&lt;input type=&quot;search&quot; class=&quot;table-search form-control form-icon-start&quot; placeholder=&quot;Search table&quot;&gt;
&lt;/div&gt;

&lt;!-- Table with sticky header and sortable columns --&gt;
&lt;div class=&quot;table-responsive overflow-auto&quot; style=&quot;height: 300px;&quot;&gt;
&lt;table class=&quot;table&quot;&gt;
&lt;thead class=&quot;position-sticky top-0&quot;&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn fs-base fw-semibold text-dark-emphasis table-sort p-0&quot; data-sort=&quot;order&quot;&gt;#&lt;/button&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn fs-base fw-semibold text-dark-emphasis table-sort p-0&quot; data-sort=&quot;first-name&quot;&gt;First&lt;/button&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn fs-base fw-semibold text-dark-emphasis table-sort p-0&quot; data-sort=&quot;last-name&quot;&gt;Last&lt;/button&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn fs-base fw-semibold text-dark-emphasis table-sort p-0&quot; data-sort=&quot;position&quot;&gt;Position&lt;/button&gt;
&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody class=&quot;table-list&quot;&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;John&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Doe&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Anna&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Cabana&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Designer&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Kale&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Thornton&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Developer&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;4&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Jane&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Birkins&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Support&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 774 28 50&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;5&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Robert&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Smith&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Marketing&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 623 87 19&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;6&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Emily&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Johnson&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Sales&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 911 50 62&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;7&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Matthew&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Brown&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Analyst&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 329 49 75&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;8&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Olivia&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Davis&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Finance&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 146 91 27&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;9&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;William&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Garcia&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;Project Manager&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 509 76 39&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th class=&quot;order&quot; scope=&quot;row&quot;&gt;10&lt;/th&gt;
&lt;td class=&quot;first-name&quot;&gt;Sophia&lt;/td&gt;
&lt;td class=&quot;last-name&quot;&gt;Adams&lt;/td&gt;
&lt;td class=&quot;position&quot;&gt;HR&lt;/td&gt;
&lt;td class=&quot;phone text-nowrap&quot;&gt;+3 687 25 81&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Dark table -->
  <section id="tables-dark" class="cd-section pb-sm-2 mb-5">
    <h4>Dark table</h4>
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
            <div class="table-responsive">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Jane</td>
                    <td>Birkins</td>
                    <td>Support</td>
                    <td class="text-nowrap">+3 774 28 50</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-dark-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-dark-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Dark table example --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
&lt;td&gt;Jane&lt;/td&gt;
&lt;td&gt;Birkins&lt;/td&gt;
&lt;td&gt;Support&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 774 28 50&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Striped rows -->
  <section id="tables-striped-rows" class="cd-section pb-sm-2 mb-5">
    <h4>Striped rows</h4>
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
            <div class="table-responsive mb-3">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-striped-rows-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-striped-rows-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with striped rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Striped columns -->
  <section id="tables-striped-cols" class="cd-section pb-sm-2 mb-5">
    <h4>Striped columns</h4>
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
            <div class="table-responsive mb-3">
              <table class="table table-striped-columns">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-striped-columns table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-striped-cols-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-striped-cols-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Table with striped columns --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped-columns&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with striped columns --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped-columns table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Bordered table -->
  <section id="tables-bordered" class="cd-section pb-sm-2 mb-5">
    <h4>Bordered table</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
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
            <div class="table-responsive mb-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-bordered-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-bordered-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Bordered table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark bordered table --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Table without borders -->
  <section id="tables-borderless" class="cd-section pb-sm-2 mb-5">
    <h4>Table without borders</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-7" role="tab"
              aria-controls="preview-7" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7" role="tab"
              aria-controls="html-7" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="table-responsive mb-3">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-borderless table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-borderless-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-borderless-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Table without borders --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-borderless&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table without borders --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-borderless table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Hoverable rows -->
  <section id="tables-hoverable" class="cd-section pb-sm-2 mb-5">
    <h4>Hoverable rows</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-8" role="tab"
              aria-controls="preview-8" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8" role="tab"
              aria-controls="html-8" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="table-responsive mb-3">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kale</td>
                    <td>Thornton</td>
                    <td>Developer</td>
                    <td class="text-nowrap">+3 285 42 88</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-hoverable-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-hoverable-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Table with hoverable rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-hover&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;!-- Dark table with hoverable rows --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-hover table-dark&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;John&lt;/td&gt;
&lt;td&gt;Doe&lt;/td&gt;
&lt;td&gt;CEO, Founder&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 555 68 70&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Anna&lt;/td&gt;
&lt;td&gt;Cabana&lt;/td&gt;
&lt;td&gt;Designer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 434 65 93&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Kale&lt;/td&gt;
&lt;td&gt;Thornton&lt;/td&gt;
&lt;td&gt;Developer&lt;/td&gt;
&lt;td class=&quot;text-nowrap&quot;&gt;+3 285 42 88&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contextual colors -->
  <section id="tables-contextual" class="cd-section pb-sm-2 mb-5">
    <h4>Contextual colors</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-9" role="tab"
              aria-controls="preview-9" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-9" role="tab"
              aria-controls="html-9" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-9" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="table-responsive">
              <table class="table" style="--cz-table-bg: transparent;">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Class</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-primary-subtle">
                    <th scope="row">1</th>
                    <td>Primary</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-secondary-subtle">
                    <th scope="row">2</th>
                    <td>Secondary</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-success-subtle">
                    <th scope="row">3</th>
                    <td>Success</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-info-subtle">
                    <th scope="row">4</th>
                    <td>Info</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-warning-subtle">
                    <th scope="row">5</th>
                    <td>Warning</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-danger-subtle">
                    <th scope="row">6</th>
                    <td>Danger</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-light-subtle">
                    <th scope="row">7</th>
                    <td>Light</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="bg-dark-subtle">
                    <th scope="row">8</th>
                    <td>Dark</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-9" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-contextual-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-contextual-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Use bg-{color}-subtle classes to color tables. Make sure to disable default table backdound color first --&gt;
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table&quot; style=&quot;--cz-table-bg: transparent;&quot;&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
&lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr class=&quot;bg-primary-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
&lt;td&gt;Primary&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-secondary-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
&lt;td&gt;Secondary&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-success-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
&lt;td&gt;Success&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-info-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
&lt;td&gt;Info&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-warning-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;5&lt;/th&gt;
&lt;td&gt;Warning&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-danger-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;6&lt;/th&gt;
&lt;td&gt;Danger&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-light-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;7&lt;/th&gt;
&lt;td&gt;Light&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;tr class=&quot;bg-dark-subtle&quot;&gt;
&lt;th scope=&quot;row&quot;&gt;8&lt;/th&gt;
&lt;td&gt;Dark&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;td&gt;Column content&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Color borders -->
  <section id="tables-color-borders" class="cd-section">
    <h4>Color borders</h4>
    <div class="card border-0 shadow">
      <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
        style="opacity: .4"></span>
      <div class="card-body position-relative z-2">
        <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-10" role="tab"
              aria-controls="preview-10" aria-selected="true">
              <i class="ci-eye opacity-75 ms-n1 me-2"></i>
              Preview
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-10" role="tab"
              aria-controls="html-10" aria-selected="false">
              <i class="ci-code opacity-75 ms-n1 me-2"></i>
              HTML
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div id="preview-10" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
            <div class="table-responsive mb-3">
              <table class="table table-bordered border-info">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>CEO, Founder</td>
                    <td class="text-nowrap">+3 555 68 70</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anna</td>
                    <td>Cabana</td>
                    <td>Designer</td>
                    <td class="text-nowrap">+3 434 65 93</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div id="html-10" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tables-color-borders-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tables-color-borders-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Color borders on tables --&gt;
&lt;table class=&quot;table table-bordered border-info&quot;&gt;
...
&lt;/table&gt;
&lt;table class=&quot;table table-bordered border-primary&quot;&gt;
...
&lt;/table&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
