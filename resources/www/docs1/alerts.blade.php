<x-www-app>
    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/alerts/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Alerts</h1>
        <p class="text-body-secondary mb-4">Provide contextual feedback messages for typical user actions.</p>
    </section>


    <!-- Basic example -->
    <section id="alerts-basic" class="cd-section pb-sm-2 mb-5">
        <h4>Basic example</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1"
                            role="tab" aria-controls="preview-1" aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1"
                            role="tab" aria-controls="html-1" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with <a class="alert-link" href="#!">an example link</a>. Give
                            it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a class="alert-link" href="#!">an example link</a>. Give
                            it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a class="alert-link" href="#!">an example link</a>. Give
                            it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a class="alert-link" href="#!">an example link</a>. Give it
                            a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert with <a class="alert-link" href="#!">an example link</a>. Give
                            it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a class="alert-link" href="#!">an example link</a>. Give it a
                            click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a class="alert-link" href="#!">an example link</a>. Give it
                            a click if you like.
                        </div>
                        <div class="alert alert-dark mb-0" role="alert">
                            A simple dark alert with <a class="alert-link" href="#!">an example link</a>. Give it a
                            click if you like.
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#alerts-basic-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="alerts-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary alert --&gt;
&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
A simple primary alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Secondary alert --&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
A simple secondary alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Success alert --&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
A simple success alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Danger alert --&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
A simple danger alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Warning alert --&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
A simple warning alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Info alert --&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
A simple info alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Light alert --&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
A simple light alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;

&lt;!-- Dark alert --&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
A simple dark alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Alert with icon -->
    <section id="alerts-icon" class="cd-section pb-sm-2 mb-5">
        <h4>Alert with icon</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2"
                            role="tab" aria-controls="preview-2" aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2"
                            role="tab" aria-controls="html-2" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="alert d-flex alert-primary" role="alert">
                            <i class="ci-bell fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple primary alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-secondary" role="alert">
                            <i class="ci-clock fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple secondary alert with <a class="alert-link" href="#!">an example
                                    link</a>. Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-success" role="alert">
                            <i class="ci-check-circle fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple success alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-danger" role="alert">
                            <i class="ci-banned fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple danger alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-warning" role="alert">
                            <i class="ci-alert-triangle fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple warning alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-info" role="alert">
                            <i class="ci-info fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple info alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-light" role="alert">
                            <i class="ci-unlock fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple light alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                        <div class="alert d-flex alert-dark mb-0" role="alert">
                            <i class="ci-map-pin fs-lg pe-1 mt-1 me-2"></i>
                            <div>A simple dark alert with <a class="alert-link" href="#!">an example link</a>.
                                Give it a click if you like.</div>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#alerts-icon-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="alerts-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary alert --&gt;
&lt;div class=&quot;alert d-flex alert-primary&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-bell fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple primary alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Secondary alert --&gt;
&lt;div class=&quot;alert d-flex alert-secondary&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-clock fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple secondary alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Success alert --&gt;
&lt;div class=&quot;alert d-flex alert-success&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-check-circle fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple success alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Danger alert --&gt;
&lt;div class=&quot;alert d-flex alert-danger&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-banned fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple danger alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Warning alert --&gt;
&lt;div class=&quot;alert d-flex alert-warning&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-alert-triangle fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple warning alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Info alert --&gt;
&lt;div class=&quot;alert d-flex alert-info&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-info fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple info alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Light alert --&gt;
&lt;div class=&quot;alert d-flex alert-light&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-unlock fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple light alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Dark alert --&gt;
&lt;div class=&quot;alert d-flex alert-dark&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-map-pin fs-lg pe-1 mt-1 me-2&quot;&gt;&lt;/i&gt;
&lt;div&gt;A simple dark alert with &lt;a class=&quot;alert-link&quot; href=&quot;#&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Dismissible alerts -->
    <section id="alerts-dismissible" class="cd-section pb-sm-2 mb-5">
        <h4>Dismissible alerts</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-3" role="tab" aria-controls="preview-3"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3"
                            role="tab" aria-controls="html-3" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Primary alert:</span> Dismiss me by clicking the close button on
                            the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Secondary alert:</span> Dismiss me by clicking the close button
                            on the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Success alert:</span> Dismiss me by clicking the close button on
                            the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Danger alert:</span> Dismiss me by clicking the close button on
                            the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Warning alert:</span> Dismiss me by clicking the close button on
                            the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Info alert:</span> Dismiss me by clicking the close button on the
                            right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light alert-dismissible fade show" role="alert">
                            <span class="fw-semibold">Light alert:</span> Dismiss me by clicking the close button on
                            the right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                            <span class="fw-semibold">Dark alert:</span> Dismiss me by clicking the close button on the
                            right.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#alerts-dismissible-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="alerts-dismissible-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary alert --&gt;
&lt;div class=&quot;alert alert-primary alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Primary alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Secondary alert --&gt;
&lt;div class=&quot;alert alert-secondary alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Secondary alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Success alert --&gt;
&lt;div class=&quot;alert alert-success alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Success alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Danger alert --&gt;
&lt;div class=&quot;alert alert-danger alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Danger alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Warning alert --&gt;
&lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Warning alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Info alert --&gt;
&lt;div class=&quot;alert alert-info alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Info alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Light alert --&gt;
&lt;div class=&quot;alert alert-light alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Light alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Dark alert --&gt;
&lt;div class=&quot;alert alert-dark alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
&lt;span class=&quot;fw-semibold&quot;&gt;Dark alert:&lt;/span&gt; Dismiss me by clicking the close button on the right.
&lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Additional content -->
    <section id="alerts-additional-content" class="cd-section">
        <h4>Additional content</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-4" role="tab" aria-controls="preview-4"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4"
                            role="tab" aria-controls="html-4" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="alert d-sm-flex alert-success pb-4 pt-sm-4 mb-0" role="alert">
                            <i class="ci-check-circle fs-4 mt-1 mb-2 mb-sm-0"></i>
                            <div class="ps-sm-3 pe-sm-4">
                                <h4 class="alert-heading mb-2">Well done!</h4>
                                <p class="mb-3">Aww yeah, you successfully read this important alert message. This
                                    example text is going to run a bit longer so that you can see how spacing within an
                                    alert works with this kind of content.</p>
                                <hr class="text-success opacity-25 my-3">
                                <p class="mb-0">Whenever you need to, be sure to use margin and padding utilities to
                                    keep things nice and tidy.</p>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#alerts-additional-content-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="alerts-additional-content-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Success alert with additional content --&gt;
&lt;div class=&quot;alert d-sm-flex alert-success pb-4 pt-sm-4&quot; role=&quot;alert&quot;&gt;
&lt;i class=&quot;ci-check-circle fs-4 mt-1 mb-2 mb-sm-0&quot;&gt;&lt;/i&gt;
&lt;div class=&quot;ps-sm-3 pe-sm-4&quot;&gt;
&lt;h4 class=&quot;alert-heading mb-2&quot;&gt;Well done!&lt;/h4&gt;
&lt;p class=&quot;mb-3&quot;&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
&lt;hr class=&quot;text-success opacity-25 my-3&quot;&gt;
&lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin and padding utilities to keep things nice and tidy.&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
