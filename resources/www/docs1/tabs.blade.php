<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#tabs" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Tabs</h1>
    <p class="text-body-secondary mb-4">Horizontally or vertically stacked list of items. When clicked each item switch
      content in the tab pane.</p>
  </section>


  <!-- Button-like style -->
  <section id="tabs-button" class="cd-section pb-sm-2 mb-5">
    <h4>Button-like style</h4>
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
            <ul class="nav nav-tabs mb-3" role="tablist" style="max-width: 450px">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" id="home-tab" data-bs-toggle="tab"
                  data-bs-target="#home-tab-pane" role="tab" aria-controls="home-tab-pane"
                  aria-selected="true">Home</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="profile-tab" data-bs-toggle="tab"
                  data-bs-target="#profile-tab-pane" role="tab" aria-controls="profile-tab-pane"
                  aria-selected="false">Profile</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="contact-tab" data-bs-toggle="tab"
                  data-bs-target="#contact-tab-pane" role="tab" aria-controls="contact-tab-pane"
                  aria-selected="false">Contact</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                  data-bs-target="#disabled-tab-pane" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"
                  disabled>Disabled</button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab">
                This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab">
                This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab">
                This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab">
                This is some placeholder content the Disabled tab's associated content. Clicking another tab will toggle
                the visibility of this one for the next. The tab JavaScript swaps classes to control the content
                visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tabs-button-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tabs-button-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav tabs --&gt;
&lt;ul class=&quot;nav nav-tabs mb-3&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-pane&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;disabled-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-pane&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Tab panes --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Underline style -->
  <section id="tabs-underline" class="cd-section pb-sm-2 mb-5">
    <h4>Underline style</h4>
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
            <ul class="nav nav-underline mb-3" role="tablist">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" id="home-tab1" data-bs-toggle="tab"
                  data-bs-target="#home-tab-pane1" role="tab" aria-controls="home-tab-pane1"
                  aria-selected="true">Home</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="profile-tab1" data-bs-toggle="tab"
                  data-bs-target="#profile-tab-pane1" role="tab" aria-controls="profile-tab-pane1"
                  aria-selected="false">Profile</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="contact-tab1" data-bs-toggle="tab"
                  data-bs-target="#contact-tab-pane1" role="tab" aria-controls="contact-tab-pane1"
                  aria-selected="false">Contact</button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" id="disabled-tab1" data-bs-toggle="tab"
                  data-bs-target="#disabled-tab-pane1" role="tab" aria-controls="disabled-tab-pane1"
                  aria-selected="false" disabled>Disabled</button>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-tab-pane1" role="tabpanel" aria-labelledby="home-tab1">
                This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="profile-tab-pane1" role="tabpanel" aria-labelledby="profile-tab1">
                This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="contact-tab-pane1" role="tabpanel" aria-labelledby="contact-tab1">
                This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another
                tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the
                content visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
              <div class="tab-pane fade" id="disabled-tab-pane1" role="tabpanel" aria-labelledby="disabled-tab1">
                This is some placeholder content the Disabled tab's associated content. Clicking another tab will toggle
                the visibility of this one for the next. The tab JavaScript swaps classes to control the content
                visibility and styling. You can use it with tabs, pills, and any other <code>.nav-</code>powered
                navigation.
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tabs-underline-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tabs-underline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Nav tabs (underline) --&gt;
&lt;ul class=&quot;nav nav-underline mb-3&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#home-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;home-tab-pane&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#profile-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;profile-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#contact-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;contact-tab-pane&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; id=&quot;disabled-tab&quot; data-bs-toggle=&quot;tab&quot; data-bs-target=&quot;#disabled-tab-pane&quot; role=&quot;tab&quot; aria-controls=&quot;disabled-tab-pane&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Tab panes --&gt;
&lt;div class=&quot;tab-content&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;disabled-tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;disabled-tab&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Vertical alignment -->
  <section id="tabs-vertical" class="cd-section pb-sm-2 mb-5">
    <h4>Vertical alignment</h4>
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
            <div class="hstack gap-5">
              <ul class="nav nav-tabs flex-column" role="tablist" style="width: 150px">
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                    Home
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                    Profile
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                    Contact
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                    Disabled
                  </button>
                </li>
              </ul>
              <ul class="nav nav-underline flex-column" role="tablist">
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                    Home
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                    Profile
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                    Contact
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                    Disabled
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tabs-vertical-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tabs-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical button-like tabs --&gt;
&lt;ul class=&quot;nav nav-tabs flex-column&quot; role=&quot;tablist&quot; style=&quot;width: 150px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Vertical underline tabs --&gt;
&lt;ul class=&quot;nav nav-underline flex-column&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- With icons and dropdowns -->
  <section id="tabs-icons" class="cd-section pb-sm-2 mb-5">
    <h4>With icons and dropdowns</h4>
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
            <div class="vstack gap-4" style="max-width: 420px">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" href="#!" data-bs-toggle="tab" role="tab" aria-selected="true">
                    <i class="ci-home me-2 ms-n1"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                    <i class="ci-user me-2 ms-n1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item dropdown" role="presentation">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button"
                    aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        First tab link
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        Second tab link
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        Third tab link
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav nav-underline" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" href="#!" data-bs-toggle="tab" role="tab" aria-selected="true">
                    <i class="ci-home me-2"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                    <i class="ci-user me-2"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item dropdown" role="presentation">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button"
                    aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        First tab link
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        Second tab link
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#!" data-bs-toggle="tab" role="tab" aria-selected="false">
                        Third tab link
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tabs-icons-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tabs-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button-like tabs --&gt;
&lt;ul class=&quot;nav nav-tabs&quot; role=&quot;tablist&quot; style=&quot;max-width: 420px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      &lt;i class=&quot;ci-home me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;ci-user me-2 ms-n1&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
      Dropdown
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          First tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Second tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Third tab link
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;!--Underline tabs --&gt;
&lt;ul class=&quot;nav nav-underline&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      &lt;i class=&quot;ci-home me-2&quot;&gt;&lt;/i&gt;
      Home
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      &lt;i class=&quot;ci-user me-2&quot;&gt;&lt;/i&gt;
      Profile
    &lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item dropdown&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; data-bs-toggle=&quot;dropdown&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
      Dropdown
    &lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          First tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Second tab link
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
          Third tab link
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Shapes -->
  <section id="tabs-shapes" class="cd-section">
    <h4>Shapes</h4>
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
            <ul class="nav nav-tabs flex-nowrap mb-4" role="tablist" style="max-width: 450px">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="true">
                  Home
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                  Profile
                </button>
              </li>
              <li class="nav-item d-none d-sm-block" role="presentation">
                <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">
                  Contact
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false" disabled>
                  Disabled
                </button>
              </li>
            </ul>
            <ul class="nav nav-tabs flex-nowrap rounded-pill mb-4" role="tablist" style="max-width: 450px">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-pill active" data-bs-toggle="tab" role="tab"
                  aria-selected="true">
                  Home
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab"
                  aria-selected="false">
                  Profile
                </button>
              </li>
              <li class="nav-item d-none d-sm-block" role="presentation">
                <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab"
                  aria-selected="false">
                  Contact
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-pill" data-bs-toggle="tab" role="tab"
                  aria-selected="false" disabled>
                  Disabled
                </button>
              </li>
            </ul>
            <ul class="nav nav-tabs flex-nowrap rounded-0" role="tablist" style="max-width: 450px">
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-0 active" data-bs-toggle="tab" role="tab"
                  aria-selected="true">
                  Home
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false">
                  Profile
                </button>
              </li>
              <li class="nav-item d-none d-sm-block" role="presentation">
                <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false">
                  Contact
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button type="button" class="nav-link rounded-0" data-bs-toggle="tab" role="tab" aria-selected="false"
                  disabled>
                  Disabled
                </button>
              </li>
            </ul>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#tabs-shapes-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="tabs-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Rounded (default) tabs --&gt;
&lt;ul class=&quot;nav nav-tabs mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Pill shaped tabs --&gt;
&lt;ul class=&quot;nav nav-tabs rounded-pill mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-pill&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;


&lt;!-- Square shaped tabs --&gt;
&lt;ul class=&quot;nav nav-tabs rounded-0 mb-4&quot; role=&quot;tablist&quot; style=&quot;max-width: 450px&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0 active&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;true&quot;&gt;
      Home
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Profile
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot;&gt;
      Contact
    &lt;/button&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link rounded-0&quot; data-bs-toggle=&quot;tab&quot; role=&quot;tab&quot; aria-selected=&quot;false&quot; disabled&gt;
      Disabled
    &lt;/button&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
