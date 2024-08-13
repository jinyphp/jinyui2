<x-www-app><x-www-layout>

          <!-- Page title -->
          <section class="py-2 pb-sm-3">
            <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill" href="https://getbootstrap.com/docs/5.3/content/typography/" target="_blank" rel="noreferrer">
              Bootstrap docs
              <i class="ci-external-link fs-sm ms-1"></i>
            </a>
            <h1 class="pt-1">Typography</h1>
            <p class="text-body-secondary mb-4">Headings, body text, lists, blockquotes and more.</p>
          </section>


          <!-- Headings -->
          <section id="type-headings" class="cd-section pb-sm-2 mb-5">
            <h4>Headings</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-1" role="tab" aria-controls="preview-1" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-1" role="tab" aria-controls="html-1" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-1" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <h1>h1. Cartzilla heading</h1>
                    <hr>
                    <h2>h2. Cartzilla heading</h2>
                    <hr>
                    <h3>h3. Cartzilla heading</h3>
                    <hr>
                    <h4>h4. Cartzilla heading</h4>
                    <hr>
                    <h5>h5. Cartzilla heading</h5>
                    <hr>
                    <h6 class="mb-0">h6. Cartzilla heading</h6>
                  </div>
                  <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#headings-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="headings-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Headings --&gt;
&lt;h1&gt;h1. Cartzilla heading&lt;/h1&gt;
&lt;h2&gt;h2. Cartzilla heading&lt;/h2&gt;
&lt;h3&gt;h3. Cartzilla heading&lt;/h3&gt;
&lt;h4&gt;h4. Cartzilla heading&lt;/h4&gt;
&lt;h5&gt;h5. Cartzilla heading&lt;/h5&gt;
&lt;h6&gt;h6. Cartzilla heading&lt;/h6&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Display headings -->
          <section id="type-displays" class="cd-section pb-sm-2 mb-5">
            <h4>Display headings</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-2" role="tab" aria-controls="preview-2" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-2" role="tab" aria-controls="html-2" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-2" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <h1 class="display-1">Display 1</h1>
                    <hr>
                    <h1 class="display-2">Display 2</h1>
                    <hr>
                    <h1 class="display-3">Display 3</h1>
                    <hr>
                    <h1 class="display-4">Display 4</h1>
                    <hr>
                    <h1 class="display-5">Display 5</h1>
                    <hr>
                    <h1 class="display-6 mb-0">Display 6</h1>
                  </div>
                  <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#displays-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="displays-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Display headings --&gt;
&lt;h1 class=&quot;display-1&quot;&gt;Display 1&lt;/h1&gt;
&lt;h1 class=&quot;display-2&quot;&gt;Display 2&lt;/h1&gt;
&lt;h1 class=&quot;display-3&quot;&gt;Display 3&lt;/h1&gt;
&lt;h1 class=&quot;display-4&quot;&gt;Display 4&lt;/h1&gt;
&lt;h1 class=&quot;display-5&quot;&gt;Display 5&lt;/h1&gt;
&lt;h1 class=&quot;display-6&quot;&gt;Display 6&lt;/h1&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Body text sizes -->
          <section id="type-body-text" class="cd-section pb-sm-2 mb-5">
            <h4>Body text sizes</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-3" role="tab" aria-controls="preview-3" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-3" role="tab" aria-controls="html-3" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-3" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <p class="fs-1"><span class="fw-bold">fs-1.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-2"><span class="fw-bold">fs-2.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-3"><span class="fw-bold">fs-3.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-4"><span class="fw-bold">fs-4.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-5"><span class="fw-bold">fs-5.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-6"><span class="fw-bold">fs-6.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="lead"> <span class="fw-bold">Lead.&nbsp;</span>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-xl"> <strong>Extra large.&nbsp;</strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-lg"> <strong>Large.&nbsp;</strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p><strong>Normal.&nbsp;</strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-sm"><strong>Small.&nbsp;</strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                    <p class="fs-xs mb-0"><strong>Extra small.&nbsp;</strong>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor</p>
                  </div>
                  <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#body-text-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="body-text-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Body text sizes --&gt;
&lt;p class=&quot;fs-1&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-2&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-3&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-4&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-5&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-6&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;lead&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-xl&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-lg&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-sm&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;
&lt;p class=&quot;fs-xs&quot;&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor&lt;/p&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Inline text elements -->
          <section id="type-inline" class="cd-section pb-sm-2 mb-5">
            <h4>Inline text elements</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-4" role="tab" aria-controls="preview-4" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-4" role="tab" aria-controls="html-4" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-4" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p>
                      <del>This line of text is meant to be treated as deleted text.</del>
                    </p>
                    <p>
                      <s>This line of text is meant to be treated as no longer accurate.</s>
                    </p>
                    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                    <p>
                      <u>This line of text will render as underlined.</u>
                    </p>
                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                    <p><strong>This line rendered as bold text.</strong></p>
                    <p><em>This line rendered as italicized text.</em></p>
                    <p class="mb-0"><a href="#!">Inline link</a></p>
                  </div>
                  <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#inline-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="inline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Inline text elements --&gt;
&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined.&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot;&gt;Inline link&lt;/a&gt;&lt;/p&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Abbreviations -->
          <section id="type-abbreviations" class="cd-section pb-sm-2 mb-5">
            <h4>Abbreviations</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-5" role="tab" aria-controls="preview-5" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-5" role="tab" aria-controls="html-5" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-5" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <p><abbr title="attribute">attr</abbr></p>
                    <p class="mb-0"><abbr class="initialism" title="HyperText Markup Language">HTML</abbr></p>
                  </div>
                  <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#abbreviations-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="abbreviations-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Abbreviations --&gt;
&lt;p&gt;&lt;abbr title=&quot;attribute&quot;&gt;attr&lt;/abbr&gt;&lt;/p&gt;
&lt;p&gt;&lt;abbr class=&quot;initialism&quot; title=&quot;HyperText Markup Language&quot;&gt;HTML&lt;/abbr&gt;&lt;/p&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Blockquote -->
          <section id="type-blockquote" class="cd-section pb-sm-2 mb-5">
            <h4>Blockquote</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-6" role="tab" aria-controls="preview-6" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-6" role="tab" aria-controls="html-6" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-6" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <figure class="mb-0">
                      <blockquote class="blockquote">
                        <p>&ldquo;A well-known quote, contained in a blockquote element.&rdquo;</p>
                      </blockquote>
                      <figcaption class="blockquote-footer mb-0">Someone famous in <cite title="Source Title">Source Title</cite></figcaption>
                    </figure>
                  </div>
                  <div id="html-6" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#blockquote-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="blockquote-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Blockquote --&gt;
&lt;figure&gt;
  &lt;blockquote class=&quot;blockquote&quot;&gt;
    &lt;p&gt;A well-known quote, contained in a blockquote element.&lt;/p&gt;
  &lt;/blockquote&gt;
  &lt;figcaption class=&quot;blockquote-footer&quot;&gt;
    Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;
  &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Lists: Unordered and ordered -->
          <section id="type-lists" class="cd-section pb-sm-2 mb-5">
            <h4>Lists: Unordered and ordered</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-7" role="tab" aria-controls="preview-7" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-7" role="tab" aria-controls="html-7" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-7" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="mb-sm-0">
                          <li>Lorem ipsum dolor sit amet</li>
                          <li>Consectetur adipiscing elit</li>
                          <li>Integer molestie lorem at massa</li>
                          <li>Facilisis in pretium nisl aliquet</li>
                          <li>Nulla volutpat aliquam velit</li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <ol class="mb-0">
                          <li>Lorem ipsum dolor sit amet</li>
                          <li>Consectetur adipiscing elit</li>
                          <li>Integer molestie lorem at massa</li>
                          <li>Facilisis in pretium nisl aliquet</li>
                          <li>Nulla volutpat aliquam velit</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div id="html-7" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#lists-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="lists-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Unordered list --&gt;
&lt;ul&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Ordered list --&gt;
&lt;ol&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
  &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
  &lt;li&gt;Nulla volutpat aliquam velit&lt;/li&gt;
&lt;/ol&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Lists: Unstyled -->
          <section id="type-lists-unstyled" class="cd-section pb-sm-2 mb-5">
            <h4>Lists: Unstyled</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-8" role="tab" aria-controls="preview-8" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-8" role="tab" aria-controls="html-8" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-8" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <ul class="list-unstyled mb-0">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa
                        <ul>
                          <li>Phasellus iaculis neque</li>
                          <li>Purus sodales ultricies</li>
                          <li>Vestibulum laoreet porttitor sem</li>
                        </ul>
                      </li>
                      <li>Faucibus porta lacus fringilla vel</li>
                      <li>Aenean sit amet erat nunc</li>
                    </ul>
                  </div>
                  <div id="html-8" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#lists-unstyled-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="lists-unstyled-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Unstyled list --&gt;
&lt;ul class=&quot;list-unstyled&quot;&gt;
  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
  &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
  &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
    &lt;ul&gt;
      &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
      &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
      &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
  &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Lists: Inline -->
          <section id="type-lists-inline" class="cd-section pb-sm-2 mb-5">
            <h4>Lists: Inline</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-9" role="tab" aria-controls="preview-9" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-9" role="tab" aria-controls="html-9" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-9" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">Lorem ipsum dolor</li>
                      <li class="list-inline-item">Consectetur adipiscing</li>
                      <li class="list-inline-item">Integer molestie</li>
                    </ul>
                  </div>
                  <div id="html-9" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#lists-inline-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="lists-inline-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Inline list --&gt;
&lt;ul class=&quot;list-inline&quot;&gt;
  &lt;li class=&quot;list-inline-item&quot;&gt;Lorem ipsum dolor&lt;/li&gt;
  &lt;li class=&quot;list-inline-item&quot;&gt;Consectetur adipiscing&lt;/li&gt;
  &lt;li class=&quot;list-inline-item&quot;&gt;Integer molestie&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Description list basic example -->
          <section id="type-description-list" class="cd-section pb-sm-2 mb-5">
            <h4>Description list basic example</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-10" role="tab" aria-controls="preview-10" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-10" role="tab" aria-controls="html-10" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-10" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <dl class="mb-0">
                      <dt>Description lists</dt>
                      <dd>A description list is perfect for defining terms.</dd>
                      <dt>Malesuada porta</dt>
                      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                      <dt>Euismod</dt>
                      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    </dl>
                  </div>
                  <div id="html-10" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#description-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="description-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Description list basic example --&gt;
&lt;dl&gt;
  &lt;dt&gt;Description lists&lt;/dt&gt;
  &lt;dd&gt;A description list is perfect for defining terms.&lt;/dd&gt;
  &lt;dt&gt;Malesuada porta&lt;/dt&gt;
  &lt;dd&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;
  &lt;dt&gt;Euismod&lt;/dt&gt;
  &lt;dd&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <!-- Description list alignment -->
          <section id="type-description-list-align" class="cd-section">
            <h4>Description list alignment</h4>
            <div class="card border-0 shadow">
              <span class="d-none d-block-dark position-absolute top-0 start-0 w-100 h-100 bg-dark rounded" style="opacity: .4"></span>
              <div class="card-body position-relative z-2">
                <ul class="nav nav-tabs m-n2" role="tablist" style="max-width: 240px">
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#preview-11" role="tab" aria-controls="preview-11" aria-selected="true">
                      <i class="ci-eye opacity-75 ms-n1 me-2"></i>
                      Preview
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#html-11" role="tab" aria-controls="html-11" aria-selected="false">
                      <i class="ci-code opacity-75 ms-n1 me-2"></i>
                      HTML
                    </button>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="preview-11" class="tab-pane pt-4 pb-2 mt-3 fade show active" role="tabpanel">
                    <dl class="row mb-0">
                      <dt class="col-sm-3">Description lists</dt>
                      <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                      <dt class="col-sm-3">Euismod</dt>
                      <dd class="col-sm-9">
                        <p class="mb-2">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                        <p class="mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                      </dd>
                      <dt class="col-sm-3">Malesuada porta</dt>
                      <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                      <dt class="col-sm-3 text-truncate">Long truncated term is truncated</dt>
                      <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                      <dt class="col-sm-3">Nesting</dt>
                      <dd class="col-sm-9">
                        <dl class="row mb-0">
                          <dt class="col-sm-4">Nested definition list</dt>
                          <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat nunc augue.</dd>
                        </dl>
                      </dd>
                    </dl>
                  </div>
                  <div id="html-11" class="tab-pane pt-4 fade" role="tabpanel">
                    <div class="position-relative" data-bs-theme="dark">
                      <button type="button" class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3" data-copy-code="#description-align-code">
                        <i class="ci-copy fs-sm me-1"></i>
                        Copy
                      </button>
                      <pre id="description-align-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Description list alignment --&gt;
&lt;dl class=&quot;row&quot;&gt;
  &lt;dt class=&quot;col-sm-3&quot;&gt;Description lists&amp;nbsp;&lt;/dt&gt;
  &lt;dd class=&quot;col-sm-9&quot;&gt;A description list is perfect for defining terms.&lt;/dd&gt;
  &lt;dt class=&quot;col-sm-3&quot;&gt;Euismod&lt;/dt&gt;
  &lt;dd class=&quot;col-sm-9&quot;&gt;
    &lt;p class=&quot;mb-2&quot;&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
    &lt;p class=&quot;mb-0&quot;&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
  &lt;/dd&gt;
  &lt;dt class=&quot;col-sm-3&quot;&gt;Malesuada porta&lt;/dt&gt;
  &lt;dd class=&quot;col-sm-9&quot;&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;
  &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;Long truncated term is truncated&lt;/dt&gt;
  &lt;dd class=&quot;col-sm-9&quot;&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;
  &lt;dt class=&quot;col-sm-3&quot;&gt;Nesting&lt;/dt&gt;
  &lt;dd class=&quot;col-sm-9&quot;&gt;
    &lt;dl class=&quot;row&quot;&gt;
      &lt;dt class=&quot;col-sm-4&quot;&gt;Nested definition list&lt;/dt&gt;
      &lt;dd class=&quot;col-sm-8&quot;&gt;Aenean posuere, tortor sed cursus feugiat nunc augue.&lt;/dd&gt;
    &lt;/dl&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
</x-www-layout></x-www-app>




