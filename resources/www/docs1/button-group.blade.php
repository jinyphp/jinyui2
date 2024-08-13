<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/button-group/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Button group</h1>
        <p class="text-body-secondary mb-4">Groups a series of buttons together on a single line.</p>
    </section>


    <!-- Basic example -->
    <section id="btn-group-basic" class="cd-section pb-sm-2 mb-5">
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
                    <div id="preview-1" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <div class="btn-group mb-3 me-2" role="group" aria-label="Solid button group">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                        <div class="btn-group mb-3 me-2" role="group" aria-label="Outline button group">
                            <button type="button" class="btn btn-outline-primary">Left</button>
                            <button type="button" class="btn btn-outline-primary">Middle</button>
                            <button type="button" class="btn btn-outline-primary">Right</button>
                        </div><br>
                        <div class="btn-group mb-3 me-2" role="group" aria-label="Pill solid button group">
                            <button type="button" class="btn btn-secondary rounded-pill rounded-end-0">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary rounded-pill rounded-start-0">Right</button>
                        </div>
                        <div class="btn-group mb-3 me-2" role="group" aria-label="Pill outline button group">
                            <button type="button"
                                class="btn btn-outline-secondary rounded-pill rounded-end-0">Left</button>
                            <button type="button" class="btn btn-outline-secondary">Middle</button>
                            <button type="button"
                                class="btn btn-outline-secondary rounded-pill rounded-start-0">Right</button>
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-basic-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Solid button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Solid button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Outline button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Outline button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Pill shape solid button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Solid button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill rounded-end-0&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary rounded-pill rounded-start-0&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Pill shape outline button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Outline button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill rounded-end-0&quot;&gt;Left&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Middle&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary rounded-pill rounded-start-0&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Checkboxes and radio buttons -->
    <section id="btn-group-checkboxes" class="cd-section pb-sm-2 mb-5">
        <h4>Checkboxes and radio buttons</h4>
        <div class="card border-0 shadow">
            <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded"
                style="opacity: .4"></span>
            <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#preview-2" role="tab" aria-controls="preview-2"
                            aria-selected="true">
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
                        <div class="btn-group mb-3" role="group" aria-label="Checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1">
                            <label class="btn btn-outline-primary" for="btncheck1">Check 1</label>
                            <input type="checkbox" class="btn-check" id="btncheck2">
                            <label class="btn btn-outline-primary" for="btncheck2">Check 2</label>
                            <input type="checkbox" class="btn-check" id="btncheck3">
                            <label class="btn btn-outline-primary" for="btncheck3">Check 3</label>
                        </div>
                        <br>
                        <div class="btn-group" role="group" aria-label="Radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                            <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                            <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-checkboxes-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-checkboxes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Checkbox toggle button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Checkbox toggle button group&quot;&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck1&quot;&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck1&quot;&gt;Check 1&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck2&quot;&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck2&quot;&gt;Check 2&lt;/label&gt;
&lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btncheck3&quot;&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btncheck3&quot;&gt;Check 3&lt;/label&gt;
&lt;/div&gt;

&lt;!-- Radio toggle button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Radio toggle button group&quot;&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio1&quot; checked&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio1&quot;&gt;Radio 1&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio2&quot;&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio2&quot;&gt;Radio 2&lt;/label&gt;
&lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;btnradio&quot; id=&quot;btnradio3&quot;&gt;
&lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btnradio3&quot;&gt;Radio 3&lt;/label&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Button toolbar -->
    <section id="btn-group-toolbar" class="cd-section pb-sm-2 mb-5">
        <h4>Button toolbar</h4>
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
                    <div id="preview-3" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <div class="btn-toolbar" role="toolbar" aria-label="Settings toolbar">
                            <div class="btn-group me-2 mb-2" role="group" aria-label="Settings group">
                                <button type="button" class="btn btn-dark btn-icon fs-base" aria-label="Settings">
                                    <i class="ci-settings"></i>
                                </button>
                                <button type="button" class="btn btn-secondary btn-icon fs-base">A</button>
                                <button type="button" class="btn btn-secondary btn-icon fs-lg" aria-label="List">
                                    <i class="ci-list"></i>
                                </button>
                                <button type="button" class="btn btn-secondary btn-icon fs-base"
                                    aria-label="Expand">
                                    <i class="ci-maximize"></i>
                                </button>
                            </div>
                            <div class="btn-group me-2 mb-2" role="group" aria-label="Apply settings">
                                <button type="button" class="btn btn-success">
                                    <i class="ci-check fs-base ms-n1 me-2"></i>
                                    Apply
                                </button>
                            </div>
                            <div class="btn-group mb-2" role="group" aria-label="Delete settings">
                                <button type="button" class="btn btn-outline-danger btn-icon fs-lg"
                                    aria-label="Delete">
                                    <i class="ci-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="btn-toolbar mt-2" role="toolbar" aria-label="Pagination">
                            <div class="btn-group me-2 mb-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-outline-secondary">1</button>
                                <button type="button" class="btn btn-outline-secondary">2</button>
                                <button type="button" class="btn btn-outline-secondary">3</button>
                            </div>
                            <div class="btn-group me-2 mb-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-outline-secondary">4</button>
                                <button type="button" class="btn btn-outline-secondary">5</button>
                            </div>
                            <div class="btn-group mb-2" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-outline-secondary">6</button>
                            </div>
                        </div>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-toolbar-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-toolbar-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Toolbar example --&gt;
&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Settings toolbar&quot;&gt;
&lt;div class=&quot;btn-group me-2 mb-2&quot; role=&quot;group&quot; aria-label=&quot;Settings group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-icon fs-base&quot; aria-label=&quot;Settings&quot;&gt;
&lt;i class=&quot;ci-settings&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-icon fs-base&quot;&gt;A&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-icon fs-lg&quot; aria-label=&quot;List&quot;&gt;
&lt;i class=&quot;ci-list&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-icon fs-base&quot; aria-label=&quot;Expand&quot;&gt;
&lt;i class=&quot;ci-maximize&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-2 mb-2&quot; role=&quot;group&quot; aria-label=&quot;Apply settings&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;
&lt;i class=&quot;ci-check fs-base ms-n1 me-2&quot;&gt;&lt;/i&gt;
Apply
&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-2&quot; role=&quot;group&quot; aria-label=&quot;Delete settings&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-icon fs-lg&quot; aria-label=&quot;Delete&quot;&gt;
&lt;i class=&quot;ci-trash&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Pagination example --&gt;
&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Pagination&quot;&gt;
&lt;div class=&quot;btn-group me-2 mb-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;2&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;3&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group me-2 mb-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;4&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;5&lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;btn-group mb-2&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;6&lt;/button&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Nested dropdown -->
    <section id="btn-group-dropdown" class="cd-section pb-sm-2 mb-5">
        <h4>Nested dropdown</h4>
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
                    <div id="preview-4" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-outline-secondary">1</button>
                                    <button type="button" class="btn btn-outline-secondary">2</button>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#!">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-dropdown-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-dropdown-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button group with nested dropdown --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Button group with nested dropdown&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;1&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;2&lt;/button&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
&lt;ul class=&quot;dropdown-menu&quot;&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sizing -->
    <section id="btn-group-sizing" class="cd-section pb-sm-2 mb-5">
        <h4>Sizing</h4>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large group">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div><br>
                                <div class="btn-group mb-3" role="group" aria-label="Normal group">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div><br>
                                <div class="btn-group btn-group-sm mb-3" role="group" aria-label="Small group">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large group">
                                    <button type="button" class="btn btn-outline-secondary">Left</button>
                                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                    <button type="button" class="btn btn-outline-secondary">Right</button>
                                </div><br>
                                <div class="btn-group mb-3" role="group" aria-label="Normal group">
                                    <button type="button" class="btn btn-outline-secondary">Left</button>
                                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                    <button type="button" class="btn btn-outline-secondary">Right</button>
                                </div><br>
                                <div class="btn-group btn-group-sm mb-3" role="group" aria-label="Small group">
                                    <button type="button" class="btn btn-outline-secondary">Left</button>
                                    <button type="button" class="btn btn-outline-secondary">Middle</button>
                                    <button type="button" class="btn btn-outline-secondary">Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-sizing-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large button group --&gt;
&lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;...&lt;/div&gt;

&lt;!-- Normal button group --&gt;
&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;...&lt;/div&gt;

&lt;!-- Small button group --&gt;
&lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;...&quot;&gt;...&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vertical -->
    <section id="btn-group-vertical" class="cd-section">
        <h4>Vertical</h4>
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
                        <div class="btn-group-vertical me-4" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-outline-secondary">Button</button>
                            <button type="button" class="btn btn-outline-secondary">Button</button>
                            <button type="button" class="btn btn-outline-secondary">Button</button>
                            <button type="button" class="btn btn-outline-secondary">Button</button>
                        </div>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#btn-group-vertical-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="btn-group-vertical-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Vertical button group --&gt;
&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Vertical button group&quot;&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Button&lt;/button&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
