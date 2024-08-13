<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="pt-2 pb-lg-1">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/breadcrumb/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Breadcrumb</h1>
        <p class="text-body-secondary mb-4">Indicate the current page’s location within a navigational hierarchy.</p>
    </section>


    <!-- Example -->
    <section class="card border-0 shadow">
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
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab"
                        aria-controls="html-1" aria-selected="false">
                        <i class="ci-code opacity-75 ms-n1 me-2"></i>
                        HTML
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Products list</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single product</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb align-items-center">
                            <li class="breadcrumb-item">
                                <a href="#!" class="d-flex" aria-label="Home">
                                    <i class="ci-home fs-base"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Products list</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single product</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item">
                                <a href="#!" class="d-flex align-items-center">
                                    <i class="ci-home fs-base me-2"></i>
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Products list</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single product</li>
                        </ol>
                    </nav>
                </div>
                <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                        <button type="button"
                            class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                            data-copy-code="#breadcrumb-code">
                            <i class="ci-copy fs-sm me-1"></i>
                            Copy
                        </button>
                        <pre id="breadcrumb-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic example --&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Products list&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Single product&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Home icon --&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb align-items-center&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;d-flex&quot; aria-label=&quot;Home&quot;&gt;
&lt;i class=&quot;ci-home fs-base&quot;&gt;&lt;/i&gt;
&lt;/a&gt;
&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Products list&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Single product&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;

&lt;!-- Home icon + text --&gt;
&lt;nav aria-label=&quot;breadcrumb&quot;&gt;
&lt;ol class=&quot;breadcrumb&quot;&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;
&lt;a href=&quot;#&quot; class=&quot;d-flex align-items-center&quot;&gt;
&lt;i class=&quot;ci-home fs-base me-2&quot;&gt;&lt;/i&gt;
Home
&lt;/a&gt;
&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Products list&lt;/a&gt;&lt;/li&gt;
&lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Single product&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-www-layout></x-www-app>
