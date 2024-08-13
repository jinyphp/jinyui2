<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/components/progress/" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Progress</h1>
    <p class="text-body-secondary mb-4">Custom progress bars featuring support for stacked bars, animated backgrounds,
      and text labels.</p>
  </section>


  <!-- Color variations (thick) -->
  <section id="progress-colors-thick" class="cd-section pb-sm-2 mb-5">
    <h4>Color variations (thick)</h4>
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
            <div class="progress mb-3" role="progressbar" aria-label="Primary (default) example" aria-valuenow="45"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar fw-medium rounded-pill" style="width: 45%">45%</div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="55"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-success fw-medium rounded-pill" style="width: 55%">55%</div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Danger example" aria-valuenow="40"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-danger fw-medium rounded-pill" style="width: 40%">40%</div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-warning fw-medium rounded-pill" style="width: 70%">70%</div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Info example" aria-valuenow="60" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar bg-info fw-medium rounded-pill" style="width: 60%">60%</div>
            </div>
            <div class="progress" role="progressbar" aria-label="Dark example" aria-valuenow="33" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar bg-dark fw-medium rounded-pill d-none-dark" style="width: 33%">33%</div>
              <div class="progress-bar bg-light text-dark fw-medium rounded-pill d-none d-block-dark"
                style="width: 33%">33%</div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#progress-colors-thick-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="progress-colors-thick-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary (default) progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Primary (default) example&quot; aria-valuenow=&quot;45&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar fw-medium rounded-pill&quot; style=&quot;width: 45%&quot;&gt;45%&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Success example&quot; aria-valuenow=&quot;55&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar bg-success fw-medium rounded-pill&quot; style=&quot;width: 55%&quot;&gt;55%&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger example&quot; aria-valuenow=&quot;40&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar bg-danger fw-medium rounded-pill&quot; style=&quot;width: 40%&quot;&gt;40%&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning example&quot; aria-valuenow=&quot;70&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar bg-warning fw-medium rounded-pill&quot; style=&quot;width: 70%&quot;&gt;70%&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Info example&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar bg-info fw-medium rounded-pill&quot; style=&quot;width: 60%&quot;&gt;60%&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark progress bar that switches to light color in dark mode --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Dark example&quot; aria-valuenow=&quot;33&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar bg-dark fw-medium rounded-pill d-none-dark&quot; style=&quot;width: 33%&quot;&gt;33%&lt;/div&gt;
  &lt;div class=&quot;progress-bar bg-light text-dark fw-medium rounded-pill d-none d-block-dark&quot; style=&quot;width: 33%&quot;&gt;33%&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Color variations (thin) -->
  <section id="progress-colors-thin" class="cd-section pb-sm-2 mb-5">
    <h4>Color variations (thin)</h4>
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
            <div class="fs-sm mb-2">45%</div>
            <div class="progress mb-3" role="progressbar" aria-label="Primary (default) example" aria-valuenow="45"
              aria-valuemin="0" aria-valuemax="100" style="height: 4px">
              <div class="progress-bar rounded-pill" style="width: 45%"></div>
            </div>
            <div class="fs-sm mb-2">55%</div>
            <div class="progress mb-3" role="progressbar" aria-label="Success example" aria-valuenow="55"
              aria-valuemin="0" aria-valuemax="100" style="height: 4px">
              <div class="progress-bar bg-success rounded-pill" style="width: 55%"></div>
            </div>
            <div class="fs-sm mb-2">40%</div>
            <div class="progress mb-3" role="progressbar" aria-label="Danger example" aria-valuenow="40"
              aria-valuemin="0" aria-valuemax="100" style="height: 4px">
              <div class="progress-bar bg-danger rounded-pill" style="width: 40%"></div>
            </div>
            <div class="fs-sm mb-2">70%</div>
            <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100" style="height: 4px">
              <div class="progress-bar bg-warning rounded-pill" style="width: 70%"></div>
            </div>
            <div class="fs-sm mb-2">60%</div>
            <div class="progress mb-3" role="progressbar" aria-label="Info example" aria-valuenow="60" aria-valuemin="0"
              aria-valuemax="100" style="height: 4px">
              <div class="progress-bar bg-info rounded-pill" style="width: 60%"></div>
            </div>
            <div class="fs-sm mb-2">33%</div>
            <div class="progress" role="progressbar" aria-label="Dark example" aria-valuenow="33" aria-valuemin="0"
              aria-valuemax="100" style="height: 4px">
              <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 33%"></div>
              <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 33%"></div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#progress-colors-thin-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="progress-colors-thin-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary (default) progress bar --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;45%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Primary (default) example&quot; aria-valuenow=&quot;45&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar rounded-pill&quot; style=&quot;width: 45%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success progress bar --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;55%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Success example&quot; aria-valuenow=&quot;55&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar bg-success rounded-pill&quot; style=&quot;width: 55%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger progress bar --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;40%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Danger example&quot; aria-valuenow=&quot;40&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar bg-danger rounded-pill&quot; style=&quot;width: 40%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning progress bar --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;70%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Warning example&quot; aria-valuenow=&quot;70&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 70%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info progress bar --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;60%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Info example&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar bg-info rounded-pill&quot; style=&quot;width: 60%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark progress bar that switches to light color in dark mode --&gt;
&lt;div class=&quot;fs-sm mb-2&quot;&gt;33%&lt;/div&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Dark example&quot; aria-valuenow=&quot;33&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress-bar bg-dark rounded-pill d-none-dark&quot; style=&quot;width: 33%&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;progress-bar bg-light rounded-pill d-none d-block-dark&quot; style=&quot;width: 33%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Multiple bars -->
  <section id="progress-multiple" class="cd-section pb-sm-2 mb-5">
    <h4>Multiple bars</h4>
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
            <div class="progress-stacked mb-3">
              <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0"
                aria-valuemax="100" style="width: 15%">
                <div class="progress-bar"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="10" aria-valuemin="0"
                aria-valuemax="100" style="width: 10%">
                <div class="progress-bar bg-success"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0"
                aria-valuemax="100" style="width: 20%">
                <div class="progress-bar bg-info"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100" style="width: 25%">
                <div class="progress-bar bg-warning"></div>
              </div>
            </div>
            <div class="progress-stacked" style="height: 4px">
              <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100" style="width: 25%">
                <div class="progress-bar bg-warning"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="15" aria-valuemin="0"
                aria-valuemax="100" style="width: 15%">
                <div class="progress-bar bg-success"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0"
                aria-valuemax="100" style="width: 20%">
                <div class="progress-bar"></div>
              </div>
              <div class="progress" role="progressbar" aria-label="Segment four" aria-valuenow="10" aria-valuemin="0"
                aria-valuemax="100" style="width: 10%">
                <div class="progress-bar bg-info"></div>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#progress-multiple-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="progress-multiple-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Thick (default) stacked bars --&gt;
&lt;div class=&quot;progress-stacked mb-3&quot;&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment one&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 15%&quot;&gt;
    &lt;div class=&quot;progress-bar&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment two&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 10%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-success&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment three&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 20%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-info&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment four&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 25%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-warning&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Thin stacked bars --&gt;
&lt;div class=&quot;progress-stacked mb-3&quot; style=&quot;height: 4px&quot;&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment one&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 25%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-warning&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment two&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 15%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-success&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment three&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 20%&quot;&gt;
    &lt;div class=&quot;progress-bar&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;progress&quot; role=&quot;progressbar&quot; aria-label=&quot;Segment four&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;width: 10%&quot;&gt;
    &lt;div class=&quot;progress-bar bg-info&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Animated striped bars -->
  <section id="progress-striped" class="cd-section pb-sm-2 mb-5">
    <h4>Animated striped bars</h4>
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
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped primary progress"
              aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 45%"></div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped success progress"
              aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 55%"></div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped danger progress"
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 40%"></div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped warning progress"
              aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 70%"></div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped info progress" aria-valuenow="60"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 60%"></div>
            </div>
            <div class="progress mb-3" role="progressbar" aria-label="Animated striped dark progress" aria-valuenow="33"
              aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark d-none-dark"
                style="width: 33%"></div>
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-light d-none d-block-dark"
                style="width: 33%"></div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#progress-striped-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="progress-striped-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Striped primary (default) progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped primary progress&quot; aria-valuenow=&quot;45&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated&quot; style=&quot;width: 45%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Striped success progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped success progress&quot; aria-valuenow=&quot;55&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-success&quot; style=&quot;width: 55%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Striped danger progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped danger progress&quot; aria-valuenow=&quot;40&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-danger&quot; style=&quot;width: 40%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Striped warning progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped warning progress&quot; aria-valuenow=&quot;70&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-warning&quot; style=&quot;width: 70%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Striped info progress bar --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped info progress&quot; aria-valuenow=&quot;60&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-info&quot; style=&quot;width: 60%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Striped dark progress bar that switches to light color in dark mode --&gt;
&lt;div class=&quot;progress mb-3&quot; role=&quot;progressbar&quot; aria-label=&quot;Animated striped dark progress&quot; aria-valuenow=&quot;33&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-dark d-none-dark&quot; style=&quot;width: 33%&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped progress-bar-animated bg-light d-none d-block-dark&quot; style=&quot;width: 33%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Use case: Rating breakdown -->
  <section id="progress-rating-breakdown" class="cd-section">
    <h4>Use case: Rating breakdown</h4>
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
          <div id="preview-5" class="tab-pane pt-4 pb-1 mt-3 fade show active" role="tabpanel">
            <div class="row g-4">
              <div class="col-sm-5 col-md-3">
                <div
                  class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                  <div class="h1 pb-2 mb-1">4.1</div>
                  <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-60"></i>
                  </div>
                  <div class="fs-sm">68 reviews</div>
                </div>
              </div>
              <div class="col-sm-7 col-md-9">
                <div class="vstack gap-3">
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      5<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="54"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 54%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">37</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      4<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="23.5"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 23.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">16</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      3<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="13"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 13%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      2<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="6"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 6%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                  </div>
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      1<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="3.5"
                      aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 3.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">3</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#progress-rating-breakdown-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="progress-rating-breakdown-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
  &lt;div class=&quot;col-sm-5 col-md-3&quot;&gt;

    &lt;!-- Overall rating card --&gt;
    &lt;div class=&quot;d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4&quot;&gt;
      &lt;div class=&quot;h1 pb-2 mb-1&quot;&gt;4.1&lt;/div&gt;
      &lt;div class=&quot;hstack justify-content-center gap-1 fs-sm mb-2&quot;&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star text-body-tertiary opacity-60&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class=&quot;fs-sm&quot;&gt;68 reviews&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col-sm-7 col-md-9&quot;&gt;

    &lt;!-- Rating breakdown by quantity --&gt;
    &lt;div class=&quot;vstack gap-3&quot;&gt;

      &lt;!-- 5 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          5&lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Five stars&quot; aria-valuenow=&quot;54&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 54%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;37&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 4 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          4&lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Four stars&quot; aria-valuenow=&quot;23.5&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 23.5%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;16&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 3 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          3&lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Three stars&quot; aria-valuenow=&quot;13&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 13%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;9&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 2 stars --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          2&lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;Two stars&quot; aria-valuenow=&quot;6&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 6%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;4&lt;/div&gt;
      &lt;/div&gt;

      &lt;!-- 1 star --&gt;
      &lt;div class=&quot;hstack gap-2&quot;&gt;
        &lt;div class=&quot;hstack fs-sm gap-1&quot;&gt;
          1&lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class=&quot;progress w-100&quot; role=&quot;progressbar&quot; aria-label=&quot;One star&quot; aria-valuenow=&quot;3.5&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot; style=&quot;height: 4px&quot;&gt;
          &lt;div class=&quot;progress-bar bg-warning rounded-pill&quot; style=&quot;width: 3.5%&quot;&gt;&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;fs-sm text-nowrap text-end&quot; style=&quot;width: 40px;&quot;&gt;3&lt;/div&gt;
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
