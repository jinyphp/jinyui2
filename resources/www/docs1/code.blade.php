<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="pt-2 pb-md-2">
    <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
      href="https://getbootstrap.com/docs/5.3/content/reboot/#inline-code" target="_blank" rel="noreferrer">
      Bootstrap docs
      <i class="ci-external-link fs-sm ms-1"></i>
    </a>
    <h1 class="pt-1">Code</h1>
    <p class="text-body-secondary mb-4">Displaying inline and multiline blocks of code.</p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p class="mb-3">The code highlighting feature is made with the <a class="alert-link"
          href="https://highlightjs.org" target="_blank" rel="noreferrer">Highlight.js</a> plugin. Ensure that you
        include the necessary references to the plugin's .css and .js files in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css&quot;&gt;&lt;/link&gt;
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js&quot;&gt;&lt;/script&gt;</code></pre>
      <p class="mb-2">You can easily switch between different themes by referencing alternative CSS styles. Here is the
        complete list of all <a class="alert-link" href="https://highlightjs.org/static/demo/" target="_blank"
          rel="noreferrer">available themes</a>.</p>
    </div>
  </section>


  <!-- Inline code -->
  <section id="code-inline" class="cd-section pb-sm-2 mb-5">
    <h4>Inline code</h4>
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
            <p class="mb-0">Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#inline-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="inline-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;p&gt;Wrap inline snippets of code with &lt;code&gt;&amp;lt;code&amp;gt;&lt;/code&gt;.&lt;/p&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- User input -->
  <section id="code-user-input" class="cd-section pb-sm-2 mb-5">
    <h4>User input</h4>
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
            <p class="mb-1">To switch directories, type <kbd>cd</kbd> followed by the name of the directory.</p>
            <p class="mb-0">To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd></p>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#user-input-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="user-input-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;p&gt;
  To switch directories, type &lt;kbd&gt;cd&lt;/kbd&gt; followed by the name of the directory.
  To edit settings, press &lt;kbd&gt;&lt;kbd&gt;ctrl&lt;/kbd&gt; + &lt;kbd&gt;,&lt;/kbd&gt;&lt;/kbd&gt;
&lt;/p&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Variables -->
  <section id="code-variables" class="cd-section pb-sm-2 mb-5">
    <h4>Variables</h4>
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
            <var>y</var> = <var>mx</var> + <var>b</var>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#variables-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="variables-code"
                class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;var&gt;y&lt;/var&gt; = &lt;var&gt;mx&lt;/var&gt; + &lt;var&gt;b&lt;/var&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Code block -->
  <section id="code-block" class="cd-section pb-sm-2 mb-5">
    <h4>Code block</h4>
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
            <pre data-bs-theme="dark"><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;</code></pre>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#block-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="block-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;pre data-bs-theme=&quot;dark&quot;&gt;
  &lt;code&gt;&amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
  &amp;lt;p&amp;gt;And another line of sample text here...&amp;lt;/p&amp;gt;&lt;/code&gt;
&lt;/pre&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Code block scrollable -->
  <section id="code-scrollable" class="cd-section pb-sm-2 mb-5">
    <h4>Code block scrollable</h4>
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
            <pre class="overflow-auto" style="height: 19.75rem;" data-bs-theme="dark"><code>&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;First Name&lt;/th&gt;
        &lt;th&gt;Last Name&lt;/th&gt;
        &lt;th&gt;Position&lt;/th&gt;
        &lt;th&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
        &lt;td&gt;Jane&lt;/td&gt;
        &lt;td&gt;Birkins&lt;/td&gt;
        &lt;td&gt;Support&lt;/td&gt;
        &lt;td&gt;+3 774 28 50&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#scrollable-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="scrollable-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;pre class=&quot;overflow-auto&quot; style=&quot;height: 20rem;&quot; data-bs-theme=&quot;dark&quot;&gt;
  &lt;code&gt;
    Code goes here...
  &lt;/code&gt;
&lt;/pre&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Code highlighting -->
  <section id="code-highlighting" class="cd-section">
    <h4>Code highlighting</h4>
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
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 px-2 mt-2 me-2 z-3"
                data-copy-code="#copy-this-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="copy-this-code" class="code-highlight"><code class="language-html">&lt;div class=&quot;table-responsive&quot;&gt;
  &lt;table class=&quot;table&quot;&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th&gt;#&lt;/th&gt;
        &lt;th&gt;First Name&lt;/th&gt;
        &lt;th&gt;Last Name&lt;/th&gt;
        &lt;th&gt;Position&lt;/th&gt;
        &lt;th&gt;Phone&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;Doe&lt;/td&gt;
        &lt;td&gt;CEO, Founder&lt;/td&gt;
        &lt;td&gt;+3 555 68 70&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
        &lt;td&gt;Anna&lt;/td&gt;
        &lt;td&gt;Cabana&lt;/td&gt;
        &lt;td&gt;Designer&lt;/td&gt;
        &lt;td&gt;+3 434 65 93&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
        &lt;td&gt;Kale&lt;/td&gt;
        &lt;td&gt;Thornton&lt;/td&gt;
        &lt;td&gt;Developer&lt;/td&gt;
        &lt;td&gt;+3 285 42 88&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
        &lt;td&gt;Jane&lt;/td&gt;
        &lt;td&gt;Birkins&lt;/td&gt;
        &lt;td&gt;Support&lt;/td&gt;
        &lt;td&gt;+3 774 28 50&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
          <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#highlighting-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="highlighting-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;position-relative&quot; data-bs-theme=&quot;dark&quot;&gt;

  &lt;!-- Copy code button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 px-2 mt-2 me-2 z-2&quot; data-copy-code=&quot;#copy-this-code&quot;&gt;
    &lt;i class=&quot;ci-copy fs-sm me-1&quot;&gt;&lt;/i&gt;
    Copy
  &lt;/button&gt;

  &lt;!-- Highlighted code --&gt;
  &lt;pre id=&quot;copy-this-code&quot; class=&quot;code-highlight&quot;&gt;
    &lt;code class=&quot;language-html&quot;&gt;
      Code goes here...
    &lt;/code&gt;
  &lt;/pre&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
