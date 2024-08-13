<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/badge/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Badges</h1>
        <p class="text-body-secondary mb-4">Small count and labeling component.</p>
    </section>


    <!-- Solid -->
    <section id="badges-solid" class="cd-section pb-sm-2 mb-5">
        <h4>Solid</h4>
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
                        <span class="badge text-bg-primary mb-2 me-2">Primary</span>
                        <span class="badge text-bg-secondary mb-2 me-2">Secondary</span>
                        <span class="badge text-body-emphasis bg-body-secondary mb-2 me-2">Secondary alt</span>
                        <span class="badge text-bg-success mb-2 me-2">Success</span>
                        <span class="badge text-bg-danger mb-2 me-2">Danger</span>
                        <span class="badge text-bg-warning mb-2 me-2">Warning</span>
                        <span class="badge text-bg-info mb-2 me-2">Info</span>
                        <div class="d-inline-block p-2 mb-2 me-2 bg-dark">
                            <span class="badge text-bg-light mb-1">Light</span>
                        </div>
                        <span class="badge text-bg-dark mb-2">Dark</span>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-solid-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-solid-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary solid badge --&gt;
&lt;span class=&quot;badge text-bg-primary&quot;&gt;Primary&lt;/span&gt;

&lt;!-- Secondary solid badge --&gt;
&lt;span class=&quot;badge text-bg-secondary&quot;&gt;Secondary&lt;/span&gt;

&lt;!-- Secondary solid alt badge --&gt;
&lt;span class=&quot;badge text-body-emphasis bg-body-secondary&quot;&gt;Secondary alt&lt;/span&gt;

&lt;!-- Success solid badge --&gt;
&lt;span class=&quot;badge text-bg-success&quot;&gt;Success&lt;/span&gt;

&lt;!-- Danger solid badge --&gt;
&lt;span class=&quot;badge text-bg-danger&quot;&gt;Danger&lt;/span&gt;

&lt;!-- Warning solid badge --&gt;
&lt;span class=&quot;badge text-bg-warning&quot;&gt;Warning&lt;/span&gt;

&lt;!-- Info solid badge --&gt;
&lt;span class=&quot;badge text-bg-info&quot;&gt;Info&lt;/span&gt;

&lt;!-- Light solid badge --&gt;
&lt;span class=&quot;badge text-bg-light&quot;&gt;Light&lt;/span&gt;

&lt;!-- Dark solid badge --&gt;
&lt;span class=&quot;badge text-bg-dark&quot;&gt;Dark&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Outline -->
    <section id="badges-outline" class="cd-section pb-sm-2 mb-5">
        <h4>Outline</h4>
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
                        <span class="badge text-primary border border-primary mb-2 me-2">Primary</span>
                        <span class="badge text-body-emphasis border mb-2 me-2">Secondary</span>
                        <span class="badge text-success border border-success mb-2 me-2">Success</span>
                        <span class="badge text-danger border border-danger mb-2 me-2">Danger</span>
                        <span class="badge text-warning border border-warning mb-2 me-2">Warning</span>
                        <span class="badge text-info border border-info mb-2 me-2">Info</span>
                        <div class="d-inline-block p-2 mb-2 me-2 bg-dark">
                            <span class="badge text-light border border-light mb-1">Light</span>
                        </div>
                        <div class="d-inline-block p-2 mb-2 bg-light">
                            <span class="badge text-dark border border-dark mb-1">Dark</span>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-outline-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-outline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary outline badge --&gt;
&lt;span class=&quot;badge text-primary border border-primary&quot;&gt;Primary&lt;/span&gt;

&lt;!-- Secondary outline badge --&gt;
&lt;span class=&quot;badge text-body-emphasis border&quot;&gt;Secondary&lt;/span&gt;

&lt;!-- Success outline badge --&gt;
&lt;span class=&quot;badge text-success border border-success&quot;&gt;Success&lt;/span&gt;

&lt;!-- Danger outline badge --&gt;
&lt;span class=&quot;badge text-danger border border-danger&quot;&gt;Danger&lt;/span&gt;

&lt;!-- Warning outline badge --&gt;
&lt;span class=&quot;badge text-warning border border-warning&quot;&gt;Warning&lt;/span&gt;

&lt;!-- Info outline badge --&gt;
&lt;span class=&quot;badge text-info border border-info&quot;&gt;Info&lt;/span&gt;

&lt;!-- Light outline badge --&gt;
&lt;span class=&quot;badge text-light border border-light&quot;&gt;Light&lt;/span&gt;

&lt;!-- Dark outline badge --&gt;
&lt;span class=&quot;badge text-dark border border-dark&quot;&gt;Dark&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Subtle -->
    <section id="badges-subtle" class="cd-section pb-sm-2 mb-5">
        <h4>Subtle</h4>
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
                        <span class="badge text-primary bg-primary-subtle mb-2 me-2">Primary</span>
                        <span class="badge text-body-emphasis bg-secondary-subtle mb-2 me-2">Secondary</span>
                        <span class="badge text-success bg-success-subtle mb-2 me-2">Success</span>
                        <span class="badge text-danger bg-danger-subtle mb-2 me-2">Danger</span>
                        <span class="badge text-warning bg-warning-subtle mb-2 me-2">Warning</span>
                        <span class="badge text-info bg-info-subtle mb-2 me-2">Info</span>
                        <div class="d-inline-block p-2 mb-2 me-2 bg-dark">
                            <span class="badge text-light bg-light bg-opacity-10 mb-1">Light</span>
                        </div>
                        <span class="badge text-body-emphasis bg-dark-subtle mb-2">Dark</span>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-subtle-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-subtle-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary subtle badge --&gt;
&lt;span class=&quot;badge text-primary bg-primary-subtle&quot;&gt;Primary&lt;/span&gt;

&lt;!-- Secondary subtle badge --&gt;
&lt;span class=&quot;badge text-body-emphasis bg-secondary-subtle&quot;&gt;Secondary&lt;/span&gt;

&lt;!-- Success subtle badge --&gt;
&lt;span class=&quot;badge text-success bg-success-subtle&quot;&gt;Success&lt;/span&gt;

&lt;!-- Danger subtle badge --&gt;
&lt;span class=&quot;badge text-danger bg-danger-subtle&quot;&gt;Danger&lt;/span&gt;

&lt;!-- Warning subtle badge --&gt;
&lt;span class=&quot;badge text-warning bg-warning-subtle&quot;&gt;Warning&lt;/span&gt;

&lt;!-- Info subtle badge --&gt;
&lt;span class=&quot;badge text-info bg-info-subtle&quot;&gt;Info&lt;/span&gt;

&lt;!-- Light subtle badge --&gt;
&lt;span class=&quot;badge text-light bg-light bg-opacity-10&quot;&gt;Light&lt;/span&gt;

&lt;!-- Dark subtle badge --&gt;
&lt;span class=&quot;badge text-body-emphasis bg-dark-subtle&quot;&gt;Dark&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Badge with icon -->
    <section id="badges-icon" class="cd-section pb-sm-2 mb-5">
        <h4>Badge with icon</h4>
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
                        <div class="d-flex align-items-center">
                            <span class="badge text-bg-primary d-inline-flex align-items-center mb-2 me-2">
                                <i class="ci-home fs-sm me-1"></i>
                                Home
                            </span>
                            <span
                                class="badge text-primary border border-primary d-inline-flex align-items-center mb-2 me-2">
                                Favorite
                                <i class="ci-heart fs-sm ms-1"></i>
                            </span>
                            <span class="badge text-primary bg-primary-subtle mb-2">
                                <i class="ci-trash fs-sm"></i>
                            </span>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-icon-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Solid badge with icon on the left --&gt;
&lt;span class=&quot;badge text-bg-primary d-inline-flex align-items-center&quot;&gt;
&lt;i class=&quot;ci-home fs-sm me-1&quot;&gt;&lt;/i&gt;
Home
&lt;/span&gt;

&lt;!-- Outline badge with icon on the right --&gt;
&lt;span class=&quot;badge text-primary border border-primary d-inline-flex align-items-center&quot;&gt;
Favorite
&lt;i class=&quot;ci-heart fs-sm ms-1&quot;&gt;&lt;/i&gt;
&lt;/span&gt;

&lt;!-- Subtle badge with only icon --&gt;
&lt;span class=&quot;badge text-primary bg-primary-subtle&quot;&gt;
&lt;i class=&quot;ci-trash fs-sm&quot;&gt;&lt;/i&gt;
&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Shapes -->
    <section id="badges-shapes" class="cd-section pb-sm-2 mb-5">
        <h4>Shapes</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-5" role="tab" aria-controls="preview-5"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5"
                            role="tab" aria-controls="html-5" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="d-flex align-items-center">
                            <span class="badge text-bg-primary mb-2 me-2">Rounded</span>
                            <span class="badge text-bg-primary rounded-pill mb-2 me-2">Pill badge</span>
                            <span class="badge text-bg-primary rounded-0 mb-2">Square</span>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-shapes-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Use rounded- utility classes to alter border radius of the badge --&gt;

&lt;!-- Rounded (default) --&gt;
&lt;span class=&quot;badge text-bg-primary mb-2 me-2&quot;&gt;Rounded&lt;/span&gt;

&lt;!-- Pill --&gt;
&lt;span class=&quot;badge text-bg-primary rounded-pill mb-2 me-2&quot;&gt;Pill badge&lt;/span&gt;

&lt;!-- Square --&gt;
&lt;span class=&quot;badge text-bg-primary rounded-0 mb-2&quot;&gt;Square&lt;/span&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Inside heading -->
    <section id="badges-heading" class="cd-section pb-sm-2 mb-5">
        <h4>Inside heading</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-6" role="tab" aria-controls="preview-6"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6"
                            role="tab" aria-controls="html-6" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                        <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                        <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                        <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                        <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                        <h6>Example heading <span class="badge bg-secondary">New</span></h6>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-heading-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-heading-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Badges scale to match the font size of the immediate parent --&gt;
&lt;h1&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6&gt;Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Inside button -->
    <section id="badges-button" class="cd-section pb-sm-2 mb-5">
        <h4>Inside button</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-7" role="tab" aria-controls="preview-7"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7"
                            role="tab" aria-controls="html-7" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <button type="button" class="btn btn-primary mb-3 me-3">
                            Notifications
                            <span class="badge d-flex text-bg-light ms-2 me-n1">4</span>
                        </button>
                        <button type="button" class="btn btn-dark rounded-pill mb-3 me-3">
                            Comments
                            <span class="badge d-flex text-bg-success rounded-pill ms-2 me-n1">9</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary position-relative mb-3">
                            Inbox
                            <span
                                class="badge d-flex text-bg-info position-absolute top-0 start-100 translate-middle rounded-pill">50+</span>
                        </button>
                    </div>
                    <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-button-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-button-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary button + light badge --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
Notifications
&lt;span class=&quot;badge d-flex text-bg-light ms-2 me-n1&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Dark pill button + success pill badge --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark rounded-pill&quot;&gt;
Comments
&lt;span class=&quot;badge d-flex text-bg-success rounded-pill ms-2 me-n1&quot;&gt;9&lt;/span&gt;
&lt;/button&gt;

&lt;!-- Outline secondary button + absolutely positioned pill badge --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary position-relative&quot;&gt;
Inbox
&lt;span class=&quot;badge d-flex text-bg-info position-absolute top-0 start-100 translate-middle rounded-pill&quot;&gt;50+&lt;/span&gt;
&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Inside list group -->
    <section id="badges-list-group" class="cd-section">
        <h4>Inside list group</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-8" role="tab" aria-controls="preview-8"
                            aria-selected="true">
                            <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                            Preview
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8"
                            role="tab" aria-controls="html-8" aria-selected="false">
                            <i class="ci-code opacity-75 ms-n1 me-2"></i>
                            HTML
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                        <div class="list-group" style="max-width: 300px;">
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                Messages
                                <span class="badge bg-success">14</span>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                Orders
                                <span class="badge bg-warning">2</span>
                            </a>
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                                href="#!">
                                Favourites
                                <span class="badge bg-danger">6</span>
                            </a>
                        </div>
                    </div>
                    <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#badges-list-group-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="badges-list-group-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Show count indicators or additional information with badges inside list group --&gt;
&lt;div class=&quot;list-group&quot;&gt;
&lt;a class=&quot;list-group-item list-group-item-action d-flex justify-content-between align-items-center&quot; href=&quot;#&quot;&gt;
Messages
&lt;span class=&quot;badge bg-success&quot;&gt;14&lt;/span&gt;
&lt;/a&gt;
&lt;a class=&quot;list-group-item list-group-item-action d-flex justify-content-between align-items-center&quot; href=&quot;#&quot;&gt;
Orders
&lt;span class=&quot;badge bg-warning&quot;&gt;2&lt;/span&gt;
&lt;/a&gt;
&lt;a class=&quot;list-group-item list-group-item-action d-flex justify-content-between align-items-center&quot; href=&quot;#&quot;&gt;
Favourites
&lt;span class=&quot;badge bg-danger&quot;&gt;6&lt;/span&gt;
&lt;/a&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
