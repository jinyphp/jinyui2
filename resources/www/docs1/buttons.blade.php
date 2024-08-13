<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Buttons</h1>
        <p class="text-body-secondary mb-4">Custom button styles for actions in forms, dialogs, etc.</p>
    </section>


    <!-- Solid -->
    <section id="buttons-solid" class="cd-section pb-sm-2 mb-5">
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
                    <div id="preview-1" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <button type="button" class="btn btn-primary mb-3 me-2">Primary</button>
                        <button type="button" class="btn btn-secondary mb-3 me-2">Secondary</button>
                        <button type="button" class="btn btn-success mb-3 me-2">Success</button>
                        <button type="button" class="btn btn-danger mb-3 me-2">Danger</button>
                        <button type="button" class="btn btn-warning mb-3 me-2">Warning</button>
                        <button type="button" class="btn btn-info mb-3 me-2">Info</button>
                        <div class="d-inline-block align-middle p-2 mb-3 me-2 bg-dark">
                            <button type="button" class="btn btn-light">Light</button>
                        </div>
                        <button type="button" class="btn btn-dark mb-3">Dark</button>
                        <button type="button" class="btn btn-link mb-3">Link</button>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-solid-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-solid-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;

  &lt;!-- Secondary solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;

  &lt;!-- Success solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;

  &lt;!-- Danger solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;

  &lt;!-- Warning solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;

  &lt;!-- Info solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;

  &lt;!-- Light solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;

  &lt;!-- Dark solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;

  &lt;!-- Link button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Outline -->
    <section id="buttons-outline" class="cd-section pb-sm-2 mb-5">
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
                    <div id="preview-2" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <button type="button" class="btn btn-outline-primary mb-3 me-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary mb-3 me-2">Secondary</button>
                        <button type="button" class="btn btn-outline-success mb-3 me-2">Success</button>
                        <button type="button" class="btn btn-outline-danger mb-3 me-2">Danger</button>
                        <button type="button" class="btn btn-outline-warning mb-3 me-2">Warning</button>
                        <button type="button" class="btn btn-outline-info mb-3 me-2">Info</button>
                        <div class="d-inline-block align-middle p-2 mb-3 me-2 bg-dark">
                            <button type="button" class="btn btn-outline-light">Light</button>
                        </div>
                        <button type="button" class="btn btn-outline-dark mb-3">Dark</button>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-outline-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-outline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;

  &lt;!-- Secondary outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;

  &lt;!-- Success outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt;

  &lt;!-- Danger outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;

  &lt;!-- Warning outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;

  &lt;!-- Info outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;

  &lt;!-- Light outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;

  &lt;!-- Dark outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Static icons -->
    <section id="buttons-static-icons" class="cd-section pb-sm-2 mb-5">
        <h4>Static icons</h4>
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
                        <button type="button" class="btn btn-primary mb-3 me-2">
                            <i class="ci-thumbs-up fs-base me-2 ms-n1"></i>
                            Like
                        </button>
                        <button type="button" class="btn btn-outline-secondary mb-3 me-2">
                            Send
                            <i class="ci-send fs-base ms-2 me-n1"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-success fs-lg mb-3 me-2"
                            aria-label="Notifications">
                            <i class="ci-bell"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary fs-lg rounded-circle mb-3 me-2"
                            aria-label="Settings">
                            <i class="ci-settings"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-outline-danger fs-base rounded-circle mb-3"
                            aria-label="Favorite">
                            <i class="ci-heart"></i>
                        </button>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-static-icons-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-static-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary button with text and icon on the left --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
    &lt;i class=&quot;ci-thumbs-up fs-base me-2 ms-n1&quot;&gt;&lt;/i&gt;
    Like
  &lt;/button&gt;

  &lt;!-- Secondary outline button with text and icon on the right --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;
    Send
    &lt;i class=&quot;ci-send fs-base ms-2 me-n1&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Success solid icon button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-success fs-lg&quot; aria-label=&quot;Notifications&quot;&gt;
    &lt;i class=&quot;ci-bell&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Secondary solid circle icon button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary fs-lg rounded-circle&quot; aria-label=&quot;Settings&quot;&gt;
    &lt;i class=&quot;ci-settings&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Danger outline circle icon button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-danger fs-base rounded-circle&quot; aria-label=&quot;Favorite&quot;&gt;
    &lt;i class=&quot;ci-heart&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Animated icons -->
    <section id="buttons-animated-icons" class="cd-section pb-sm-2 mb-5">
        <h4>Animated icons</h4>
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
                        <button type="button" class="btn btn-primary animate-scale mb-3 me-2">
                            <i class="ci-thumbs-up animate-target fs-base me-2 ms-n1"></i>
                            Like
                        </button>
                        <button type="button" class="btn btn-outline-secondary animate-slide-end mb-3 me-2">
                            Send
                            <i class="ci-send animate-target fs-base ms-2 me-n1"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-success animate-shake fs-lg mb-3 me-2"
                            aria-label="Notifications">
                            <i class="ci-bell animate-target"></i>
                        </button>
                        <button type="button"
                            class="btn btn-icon btn-secondary animate-rotate fs-lg rounded-circle mb-3 me-2"
                            aria-label="Settings">
                            <i class="ci-settings animate-target"></i>
                        </button>
                        <button type="button"
                            class="btn btn-icon btn-outline-danger animate-pulse fs-base rounded-circle mb-3"
                            aria-label="Favorite">
                            <i class="ci-heart animate-target"></i>
                        </button>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-animated-icons-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-animated-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Primary button with text and animated (scale) icon on the left --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary animate-scale&quot;&gt;
    &lt;i class=&quot;ci-thumbs-up animate-target fs-base me-2 ms-n1&quot;&gt;&lt;/i&gt;
    Like
  &lt;/button&gt;

  &lt;!-- Secondary outline button with text and animated (slide) icon on the right --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary animate-slide-end&quot;&gt;
    Send
    &lt;i class=&quot;ci-send animate-target fs-base ms-2 me-n1&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Success solid button with animated (shake) icon --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-success animate-shake fs-lg&quot; aria-label=&quot;Notifications&quot;&gt;
    &lt;i class=&quot;ci-bell animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Secondary solid circle button with animated (rotate) icon --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-secondary animate-rotate fs-lg rounded-circle&quot; aria-label=&quot;Settings&quot;&gt;
    &lt;i class=&quot;ci-settings animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;

  &lt;!-- Danger outline circle button with animated (pulse) icon --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-icon btn-outline-danger animate-pulse fs-base rounded-circle&quot; aria-label=&quot;Favorite&quot;&gt;
    &lt;i class=&quot;ci-heart animate-target&quot;&gt;&lt;/i&gt;
  &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Market buttons -->
    <section id="buttons-market" class="cd-section pb-sm-2 mb-5">
        <h4>Market buttons</h4>
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
                        <div class="d-flex align-items-center flex-wrap mb-2">
                            <a class="btn btn-market btn-lg btn-dark mb-3 me-3" href="#!"
                                aria-label="Download on Google Play">
                                <svg class="flex-shrink-0 ms-n1 me-2" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z"
                                        fill="#ffce00" />
                                    <path
                                        d="M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z"
                                        fill="#01daff" />
                                    <path
                                        d="M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z"
                                        fill="#00f076" />
                                    <path
                                        d="M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z"
                                        fill="#f63448" />
                                </svg>
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77"
                                    height="24" viewBox="0 0 77 24" fill="currentColor">
                                    <path
                                        d="M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z" />
                                </svg>
                            </a>
                            <a class="btn btn-market btn-dark mb-3" href="#!"
                                aria-label="Download on Google Play">
                                <svg class="flex-shrink-0 ms-n1 me-2" xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z"
                                        fill="#ffce00" />
                                    <path
                                        d="M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z"
                                        fill="#01daff" />
                                    <path
                                        d="M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z"
                                        fill="#00f076" />
                                    <path
                                        d="M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z"
                                        fill="#f63448" />
                                </svg>
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="67"
                                    height="20" viewBox="0 0 77 24" fill="currentColor">
                                    <path
                                        d="M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z" />
                                </svg>
                            </a>
                        </div>
                        <div class="d-flex align-items-center flex-wrap mb-2">
                            <a class="btn btn-market btn-lg btn-dark mb-3 me-3" href="#!"
                                aria-label="Download on App Store">
                                <i class="ci-apple lead ms-n1 me-2"></i>
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77"
                                    height="24" viewBox="0 0 77 24" fill="currentColor">
                                    <path
                                        d="M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z" />
                                </svg>
                            </a>
                            <a class="btn btn-market btn-dark mb-3" href="#!"
                                aria-label="Download on App Store">
                                <i class="ci-apple fs-xl ms-n1 me-2"></i>
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="67"
                                    height="20" viewBox="0 0 77 24" fill="currentColor">
                                    <path
                                        d="M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z" />
                                </svg>
                            </a>
                        </div>
                        <div class="d-table position-relative pt-4 px-4 pb-2">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded d-none-dark"></span>
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded d-none d-block-dark"></span>
                            <div class="position-relative z-1">
                                <a class="btn btn-market btn-lg btn-light rounded-pill mb-3 me-2" href="#!"
                                    aria-label="Download on Google Play">
                                    <svg class="flex-shrink-0 ms-n1 me-2" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z"
                                            fill="#ffce00" />
                                        <path
                                            d="M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z"
                                            fill="#01daff" />
                                        <path
                                            d="M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z"
                                            fill="#00f076" />
                                        <path
                                            d="M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z"
                                            fill="#f63448" />
                                    </svg>
                                    <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77"
                                        height="24" viewBox="0 0 77 24" fill="currentColor">
                                        <path
                                            d="M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z" />
                                    </svg>
                                </a>
                                <a class="btn btn-market btn-lg btn-light rounded-pill mb-3" href="#!"
                                    aria-label="Download on App Store">
                                    <i class="ci-apple lead ms-n1 me-2"></i>
                                    <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="77"
                                        height="24" viewBox="0 0 77 24" fill="currentColor">
                                        <path
                                            d="M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-market-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-market-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large dark Google Play button --&gt;
  &lt;a class=&quot;btn btn-market btn-lg btn-dark&quot; href=&quot;#&quot; aria-label=&quot;Download on Google Play&quot;&gt;
    &lt;svg class=&quot;flex-shrink-0 ms-n1 me-2&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot;&gt;&lt;path d=&quot;M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z&quot; fill=&quot;#ffce00&quot;/&gt;&lt;path d=&quot;M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z&quot; fill=&quot;#01daff&quot;/&gt;&lt;path d=&quot;M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z&quot; fill=&quot;#00f076&quot;/&gt;&lt;path d=&quot;M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z&quot; fill=&quot;#f63448&quot;/&gt;&lt;/svg&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;77&quot; height=&quot;24&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;

  &lt;!-- Normal dark Google Play button --&gt;
  &lt;a class=&quot;btn btn-market btn-dark&quot; href=&quot;#&quot; aria-label=&quot;Download on Google Play&quot;&gt;
    &lt;svg class=&quot;flex-shrink-0 ms-n1 me-2&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;20&quot; height=&quot;20&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot;&gt;&lt;path d=&quot;M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z&quot; fill=&quot;#ffce00&quot;/&gt;&lt;path d=&quot;M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z&quot; fill=&quot;#01daff&quot;/&gt;&lt;path d=&quot;M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z&quot; fill=&quot;#00f076&quot;/&gt;&lt;path d=&quot;M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z&quot; fill=&quot;#f63448&quot;/&gt;&lt;/svg&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;67&quot; height=&quot;20&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;

  &lt;!-- Large dark App Store button --&gt;
  &lt;a class=&quot;btn btn-market btn-lg btn-dark&quot; href=&quot;#&quot; aria-label=&quot;Download on App Store&quot;&gt;
    &lt;i class=&quot;ci-apple lead ms-n1 me-2&quot;&gt;&lt;/i&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;77&quot; height=&quot;24&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;

  &lt;!-- Normal dark App Store button --&gt;
  &lt;a class=&quot;btn btn-market btn-dark&quot; href=&quot;#&quot; aria-label=&quot;Download on App Store&quot;&gt;
    &lt;i class=&quot;ci-apple fs-xl ms-n1 me-2&quot;&gt;&lt;/i&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;67&quot; height=&quot;20&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;

  &lt;!-- Large light pill Google Play button --&gt;
  &lt;a class=&quot;btn btn-market btn-lg btn-light rounded-pill&quot; href=&quot;#&quot; aria-label=&quot;Download on Google Play&quot;&gt;
    &lt;svg class=&quot;flex-shrink-0 ms-n1 me-2&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot;&gt;&lt;path d=&quot;M19.665 10.561l-3.251-1.878-3.329 3.329 3.328 3.329 3.263-1.884c.509-.309.812-.849.812-1.444s-.304-1.135-.823-1.451z&quot; fill=&quot;#ffce00&quot;/&gt;&lt;path d=&quot;M13.085 12.011L4.018 2.879a1.71 1.71 0 0 0-.507 1.216v15.804a1.71 1.71 0 0 0 .507 1.217l9.067-9.105z&quot; fill=&quot;#01daff&quot;/&gt;&lt;path d=&quot;M13.086 12.011l3.329-3.329.005-.005-4.46-2.568L6.08 2.654c-.529-.327-1.171-.338-1.712-.034a2.54 2.54 0 0 0-.349.259l9.067 9.132z&quot; fill=&quot;#00f076&quot;/&gt;&lt;path d=&quot;M4.019 21.116c.113.101.225.18.349.259.27.146.552.225.834.225.304 0 .597-.09.867-.248l5.891-3.439 4.46-2.568-.005-.005-3.329-3.329-9.067 9.104z&quot; fill=&quot;#f63448&quot;/&gt;&lt;/svg&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;77&quot; height=&quot;24&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M24.575 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM16.11 9.45c-2.184 0-3.914 1.704-3.914 4.071 0 2.272 1.729 4.071 3.914 4.071s3.914-1.704 3.914-4.071c0-2.461-1.729-4.071-3.914-4.071zm0 6.438c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.184.947 2.184 2.462c0 1.42-1.001 2.462-2.184 2.462zM6.007 10.681v1.704h3.914c-.091.947-.455 1.704-.91 2.177-.546.568-1.456 1.231-3.004 1.231-2.457 0-4.278-1.988-4.278-4.544s1.911-4.544 4.278-4.544c1.274 0 2.275.568 3.004 1.231l1.183-1.231C9.193 5.757 7.918 5 6.098 5 2.822 5 0 7.84 0 11.249s2.822 6.249 6.098 6.249c1.82 0 3.095-.568 4.187-1.799 1.092-1.136 1.456-2.745 1.456-3.976 0-.379 0-.757-.091-1.041H6.007zm41.322 1.325c-.364-.947-1.274-2.556-3.277-2.556s-3.641 1.61-3.641 4.071c0 2.272 1.638 4.071 3.823 4.071 1.729 0 2.822-1.136 3.186-1.799l-1.274-.947c-.455.663-1.001 1.136-1.911 1.136s-1.456-.379-1.911-1.231l5.188-2.272-.182-.473zm-5.279 1.326c0-1.515 1.183-2.367 2.002-2.367.637 0 1.274.379 1.456.852l-3.459 1.515zm-4.278 3.882h1.729V5.379h-1.729v11.834zm-2.73-6.911c-.455-.473-1.183-.947-2.093-.947-1.911 0-3.732 1.799-3.732 4.071s1.729 3.976 3.732 3.976c.91 0 1.638-.473 2.002-.947h.091v.568c0 1.515-.819 2.367-2.093 2.367-1.001 0-1.729-.757-1.911-1.42l-1.456.663C30.036 19.675 31.128 21 33.039 21c2.002 0 3.641-1.231 3.641-4.166V9.639h-1.638v.663zm-2.002 5.586c-1.183 0-2.184-1.041-2.184-2.462s1.001-2.462 2.184-2.462 2.093 1.041 2.093 2.462-.91 2.462-2.093 2.462zM55.247 5.379h-4.096v11.834h1.729v-4.45h2.367c1.911 0 3.732-1.42 3.732-3.692s-1.82-3.692-3.732-3.692zm.091 5.681h-2.457V6.988h2.457c1.274 0 2.002 1.136 2.002 1.988-.091 1.041-.819 2.083-2.002 2.083zm10.467-1.704c-1.274 0-2.549.568-3.004 1.799l1.547.663c.364-.663.91-.852 1.547-.852.91 0 1.729.568 1.82 1.515v.095c-.273-.189-1.001-.473-1.729-.473-1.638 0-3.277.947-3.277 2.651 0 1.609 1.365 2.651 2.821 2.651 1.183 0 1.729-.568 2.184-1.136h.091v.947h1.638v-4.544c-.182-2.083-1.729-3.314-3.641-3.314zm-.182 6.533c-.546 0-1.365-.284-1.365-1.041 0-.947 1.001-1.231 1.82-1.231.728 0 1.092.189 1.547.379-.182 1.136-1.092 1.894-2.002 1.894zm9.557-6.249l-1.911 5.112h-.091l-2.002-5.112h-1.82l3.004 7.195-1.729 3.976h1.729L77 9.639h-1.82zm-15.291 7.574h1.729V5.379h-1.729v11.834z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;

  &lt;!-- Large light pill App Store button --&gt;
  &lt;a class=&quot;btn btn-market btn-lg btn-light rounded-pill&quot; href=&quot;#&quot; aria-label=&quot;Download on App Store&quot;&gt;
    &lt;i class=&quot;ci-apple lead ms-n1 me-2&quot;&gt;&lt;/i&gt;
    &lt;svg class=&quot;flex-shrink-0&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; width=&quot;77&quot; height=&quot;24&quot; viewBox=&quot;0 0 77 24&quot; fill=&quot;currentColor&quot;&gt;&lt;path d=&quot;M40.713 15.797c.701-.624 1.055-1.431 1.055-2.427 0-.806-.242-1.486-.733-2.032-.483-.546-1.232-1.02-2.255-1.423-.838-.324-1.418-.625-1.732-.901a1.41 1.41 0 0 1-.548-1.138 1.39 1.39 0 0 1 .475-1.059c.379-.316.91-.482 1.579-.482.854 0 1.611.182 2.288.538l.483-1.518c-.717-.372-1.619-.553-2.699-.553-1.216 0-2.191.308-2.924.917a2.94 2.94 0 0 0-1.103 2.356c0 1.463 1.039 2.577 3.142 3.344.765.277 1.313.577 1.643.901a1.63 1.63 0 0 1 .491 1.194c0 .53-.201.957-.604 1.273-.395.316-.959.474-1.675.474-.999 0-1.917-.245-2.755-.727l-.443 1.557c.773.482 1.796.727 3.077.727 1.386 0 2.465-.34 3.238-1.02zm-31.706.846h2.03L7.195 4.966H4.826L1 16.644h1.974l1.055-3.431h3.867l1.112 3.431zM6.558 8.729l1.007 3.044H4.367l.991-3.044.564-2.198h.04l.596 2.198zm13.122 6.997c.797-.83 1.192-1.961 1.192-3.392 0-1.289-.338-2.316-1.031-3.107-.677-.783-1.514-1.178-2.529-1.178-1.289 0-2.255.506-2.892 1.51h-.032l-.105-1.336h-1.675l.072 2.767v9.068h1.909v-4.42c.499.798 1.313 1.194 2.449 1.194 1.047 0 1.933-.364 2.642-1.107zm-1.313-5.353c.379.53.564 1.202.564 2.024 0 .893-.201 1.605-.604 2.15-.403.538-.959.814-1.675.814-.612 0-1.112-.213-1.49-.633s-.572-.941-.572-1.55v-1.407c0-.15.032-.34.089-.569a2.11 2.11 0 0 1 .749-1.202c.387-.3.814-.459 1.281-.459a1.96 1.96 0 0 1 1.659.83zm12.366 1.961c0 1.431-.395 2.562-1.192 3.392-.709.743-1.595 1.107-2.642 1.107-1.136 0-1.949-.395-2.449-1.194v4.42H22.54v-9.068l-.072-2.767h1.675l.105 1.336h.032c.636-1.004 1.603-1.51 2.892-1.51 1.015 0 1.853.395 2.529 1.178.693.791 1.031 1.818 1.031 3.107zm-1.941.063c0-.822-.185-1.494-.564-2.024a1.96 1.96 0 0 0-1.659-.83c-.467 0-.894.158-1.281.459-.379.308-.628.704-.749 1.202-.056.229-.089.419-.089.569v1.407c0 .609.193 1.131.572 1.55s.878.633 1.49.633c.717 0 1.281-.277 1.676-.814.411-.546.604-1.257.604-2.15zM48.083 9.63h-2.102v4.087c0 1.036.37 1.557 1.112 1.557.338 0 .62-.032.846-.087l.056 1.423c-.379.134-.87.206-1.482.206-.757 0-1.337-.229-1.764-.68s-.636-1.21-.636-2.269V9.623h-1.248V8.223h1.249V6.681l1.869-.553v2.095h2.102V9.63zm8.329 5.922c.749-.83 1.128-1.89 1.128-3.186 0-1.257-.362-2.285-1.096-3.075-.765-.822-1.78-1.233-3.037-1.233-1.305 0-2.344.419-3.117 1.249-.765.83-1.152 1.897-1.152 3.202 0 1.249.37 2.285 1.12 3.099s1.756 1.225 3.013 1.225c1.305 0 2.352-.427 3.142-1.281zm-1.353-5.131c.338.553.508 1.21.508 1.984s-.177 1.439-.524 2.008c-.419.68-.991 1.02-1.716 1.02-.741 0-1.321-.332-1.732-1.004-.338-.546-.508-1.21-.508-1.984 0-.799.161-1.471.508-2.024.395-.672.983-1.004 1.748-1.004.741 0 1.313.332 1.716 1.004zm8.683-.553c-.185-.032-.387-.047-.604-.047-.669 0-1.192.245-1.555.743-.314.435-.475.996-.475 1.66v4.419h-1.909v-5.771l-.056-2.649h1.659l.072 1.613h.056c.201-.553.516-1.004.951-1.336.427-.3.886-.451 1.377-.451a4.09 4.09 0 0 1 .475.032l.008 1.787zm8.451 3.012c.048-.229.072-.514.072-.846 0-1.051-.258-1.929-.765-2.656-.628-.901-1.571-1.352-2.803-1.352-1.257 0-2.255.451-2.997 1.352-.709.846-1.063 1.905-1.063 3.17 0 1.289.379 2.324 1.136 3.091s1.804 1.154 3.133 1.154c1.104 0 2.062-.174 2.876-.522l-.298-1.297c-.693.261-1.466.395-2.312.395-.765 0-1.386-.198-1.869-.585-.532-.435-.806-1.075-.83-1.905h5.719zm-2.119-2.767c.258.403.387.886.371 1.439l-3.963-.008c.056-.561.25-1.051.564-1.455a1.82 1.82 0 0 1 1.514-.759c.677 0 1.184.261 1.514.783z&quot;/&gt;&lt;/svg&gt;
  &lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Shapes -->
    <section id="buttons-shapes" class="cd-section pb-sm-2 mb-5">
        <h4>Shapes</h4>
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
                    <div id="preview-6" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <div class="mb-2">
                            <button type="button" class="btn btn-primary mb-3 me-2">Rounded</button>
                            <button type="button" class="btn btn-primary rounded-pill mb-3 me-2">Pill button</button>
                            <button type="button" class="btn btn-primary rounded-0 mb-3">Square</button>
                        </div>
                        <button type="button" class="btn btn-outline-primary mb-3 me-2">Rounded</button>
                        <button type="button" class="btn btn-outline-primary rounded-pill mb-3 me-2">Pill
                            button</button>
                        <button type="button" class="btn btn-outline-primary rounded-0 mb-3">Square</button>
                    </div>
                    <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-shapes-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-shapes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Alter the shape of .btn component with .rounded-* utility classes. --&gt;

  &lt;!-- Rounded solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Rounded&lt;/button&gt;

  &lt;!-- Pill solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-pill&quot;&gt;Pill button&lt;/button&gt;

  &lt;!-- Square solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary rounded-0&quot;&gt;Square&lt;/button&gt;

  &lt;!-- Rounded outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Rounded&lt;/button&gt;

  &lt;!-- Pill outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-pill&quot;&gt;Pill button&lt;/button&gt;

  &lt;!-- Square outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary rounded-0&quot;&gt;Square&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sizes -->
    <section id="buttons-sizes" class="cd-section pb-sm-2 mb-5">
        <h4>Sizes</h4>
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
                    <div id="preview-7" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <button type="button" class="btn btn-primary btn-lg mb-2 me-1">Large button</button>
                        <button type="button" class="btn btn-primary mb-2 me-1">Normal button</button>
                        <button type="button" class="btn btn-primary btn-sm mb-2">Small button</button>
                        <div class="pt-2"></div>
                        <button type="button" class="btn btn-outline-primary btn-lg mb-2 me-1">Large button</button>
                        <button type="button" class="btn btn-outline-primary mb-2 me-1">Normal button</button>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2">Small button</button>
                        <div class="row pt-2">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary w-100 mb-3">Block level button</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-outline-primary w-100 mb-3">Block level
                                    button</button>
                            </div>
                        </div>
                    </div>
                    <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-sizes-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-sizes-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Large solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;

  &lt;!-- Normal solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Normal button&lt;/button&gt;

  &lt;!-- Small solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;

  &lt;!-- Large outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-lg&quot;&gt;Large button&lt;/button&gt;

  &lt;!-- Normal outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Normal button&lt;/button&gt;

  &lt;!-- Small outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-sm&quot;&gt;Small button&lt;/button&gt;

  &lt;!-- Block level solid button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary w-100&quot;&gt;Block level button&lt;/button&gt;

  &lt;!-- Block level outline button --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary w-100&quot;&gt;Block level button&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- States -->
    <section id="buttons-states" class="cd-section">
        <h4>States</h4>
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
                    <div id="preview-8" class="tab-pane pt-4 mt-3 fade show active" role="tabpanel">
                        <button type="button" class="btn btn-primary active mb-3 me-2">Active</button>
                        <button type="button" class="btn btn-secondary active mb-3 me-2">Active</button>
                        <button type="button" class="btn btn-primary mb-3 me-2" disabled>Disabled</button>
                        <button type="button" class="btn btn-secondary mb-3 me-2" disabled>Disabled</button>
                        <button type="button" class="btn btn-primary mb-3 me-2" data-bs-toggle="button">Button
                            toggle</button>
                        <button type="button" class="btn btn-primary pe-none mb-3 me-2">
                            <span class="spinner-border spinner-border-sm ms-n1 me-2" role="status"
                                aria-hidden="true"></span>
                            Loading...
                        </button>
                        <button type="button" class="btn btn-secondary pe-none mb-3">
                            <span class="spinner-grow spinner-grow-sm ms-n1 me-2" role="status"
                                aria-hidden="true"></span>
                            Loading...
                        </button>
                    </div>
                    <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#buttons-states-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="buttons-states-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Button states --&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary active&quot;&gt;Active&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary active&quot;&gt;Active&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; disabled&gt;Disabled&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; disabled&gt;Disabled&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;button&quot;&gt;Button toggle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-primary pe-none&quot;&gt;
    &lt;span class=&quot;spinner-border spinner-border-sm ms-n1 me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    Loading...
  &lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary pe-none&quot;&gt;
    &lt;span class=&quot;spinner-grow spinner-grow-sm ms-n1 me-2&quot; role=&quot;status&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
    Loading...
  &lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
