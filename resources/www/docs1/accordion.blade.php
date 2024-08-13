<x-www-app><x-www-layout>
    <!-- Page title -->
    <section class="py-2 pb-sm-3">
        <a class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill"
            href="https://getbootstrap.com/docs/5.3/components/accordion/" target="_blank" rel="noreferrer">
            Bootstrap docs
            <i class="ci-external-link fs-sm ms-1"></i>
        </a>
        <h1 class="pt-1">Accordion</h1>
        <p class="text-body-secondary mb-4">Vertically stacked list of headers that can be clicked to reveal or hide
            content associated with them.</p>
    </section>


    <!-- Basic example -->
    <section id="accordion-basic" class="cd-section pb-sm-2 mb-5">
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
                    <div id="preview-1" class="tab-pane py-2 mt-3 fade show active" role="tabpanel">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button animate-underline"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span class="animate-target me-2">Accordion Item #1</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="collapseOne"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">This is the first item's accordion body. It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the .accordion-body, though the transition does limit
                                        overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span class="animate-target me-2">Accordion Item #2</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">This is the second item's accordion body. It is hidden
                                        by default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="animate-target me-2">Accordion Item #3</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">This is the third item's accordion body. It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the .accordion-body, though the transition does limit
                                        overflow.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#accordion-basic-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="accordion-basic-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Basic accordion example --&gt;
&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;

  &lt;!-- Item (expanded) --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #1&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;collapseOne&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #2&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseTwo&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #3&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseThree&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the third item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Alternative button icon -->
    <section id="accordion-alt-icon" class="cd-section pb-sm-2 mb-5">
        <h4>Alternative button icon</h4>
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
                    <div id="preview-2" class="tab-pane py-2 mt-3 fade show active" role="tabpanel">
                        <div class="accordion accordion-alt-icon" id="accordionAltExample">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingAltOne">
                                    <button type="button" class="accordion-button animate-underline"
                                        data-bs-toggle="collapse" data-bs-target="#collapseAltOne"
                                        aria-expanded="true" aria-controls="collapseAltOne">
                                        <span class="animate-target me-2">Accordion Item #1</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="collapseAltOne"
                                    aria-labelledby="headingAltOne" data-bs-parent="#accordionAltExample">
                                    <div class="accordion-body">This is the first item's accordion body. It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the .accordion-body, though the transition does limit
                                        overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingAltTwo">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseAltTwo"
                                        aria-expanded="false" aria-controls="collapseAltTwo">
                                        <span class="animate-target me-2">Accordion Item #2</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseAltTwo"
                                    aria-labelledby="headingAltTwo" data-bs-parent="#accordionAltExample">
                                    <div class="accordion-body">This is the second item's accordion body. It is hidden
                                        by default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingAltThree">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseAltThree"
                                        aria-expanded="false" aria-controls="collapseAltThree">
                                        <span class="animate-target me-2">Accordion Item #3</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseAltThree"
                                    aria-labelledby="headingAltThree" data-bs-parent="#accordionAltExample">
                                    <div class="accordion-body">This is the third item's accordion body. It is hidden
                                        by default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#accordion-alt-icon-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="accordion-alt-icon-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Accordion with alternative button icon --&gt;
&lt;div class=&quot;accordion accordion-alt-icon&quot; id=&quot;accordionExample&quot;&gt;

  &lt;!-- Item (expanded) --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #1&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;collapseOne&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #2&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseTwo&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #3&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseThree&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the third item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- With icons -->
    <section id="accordion-icons" class="cd-section pb-sm-2 mb-5">
        <h4>With icons</h4>
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
                    <div id="preview-3" class="tab-pane py-2 mt-3 fade show active" role="tabpanel">
                        <div class="accordion" id="accordionIcons">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOneIcon">
                                    <button type="button" class="accordion-button animate-underline"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOneIcon"
                                        aria-expanded="true" aria-controls="collapseOneIcon">
                                        <i class="ci-bell fs-lg pe-1 me-2"></i>
                                        <span class="animate-target me-2">Accordion Item #1</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="collapseOneIcon"
                                    aria-labelledby="headingOneIcon" data-bs-parent="#accordionIcons">
                                    <div class="accordion-body">This is the first item's accordion body. It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the .accordion-body, though the transition does limit
                                        overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwoIcon">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwoIcon"
                                        aria-expanded="false" aria-controls="collapseTwoIcon">
                                        <i class="ci-edit fs-lg pe-1 me-2"></i>
                                        <span class="animate-target me-2">Accordion Item #2</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseTwoIcon"
                                    aria-labelledby="headingTwoIcon" data-bs-parent="#accordionIcons">
                                    <div class="accordion-body">This is the second item's accordion body. It is hidden
                                        by default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThreeIcon">
                                    <button type="button" class="accordion-button animate-underline collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThreeIcon"
                                        aria-expanded="false" aria-controls="collapseThreeIcon">
                                        <i class="ci-lock fs-lg pe-1 me-2"></i>
                                        <span class="animate-target me-2">Accordion Item #3</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseThreeIcon"
                                    aria-labelledby="headingThreeIcon" data-bs-parent="#accordionIcons">
                                    <div class="accordion-body">This is the third item's accordion body. It is hidden
                                        by default, until the collapse plugin adds the appropriate classes that we use
                                        to style each element. These classes control the overall appearance, as well as
                                        the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#accordion-icons-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="accordion-icons-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Accordion example with icons --&gt;
&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;

  &lt;!-- Item (expanded) --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        &lt;i class=&quot;ci-bell fs-lg pe-1 me-2&quot;&gt;&lt;/i&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #1&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;collapseOne&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        &lt;i class=&quot;ci-edit fs-lg pe-1 me-2&quot;&gt;&lt;/i&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #2&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseTwo&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThreeAlt&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThreeAlt&quot;&gt;
        &lt;i class=&quot;ci-lock fs-lg pe-1 me-2&quot;&gt;&lt;/i&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #3&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseThreeAlt&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body&quot;&gt;This is the third item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sizing -->
    <section id="accordion-sizing" class="cd-section">
        <h4>Sizing</h4>
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
                    <div id="preview-4" class="tab-pane py-2 mt-3 fade show active" role="tabpanel">
                        <div class="accordion" id="accordionSizing">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOneSizing">
                                    <button type="button" class="accordion-button animate-underline fs-5"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOneSizing"
                                        aria-expanded="true" aria-controls="collapseOneSizing">
                                        <span class="animate-target me-2">Accordion Item #1</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse show" id="collapseOneSizing"
                                    aria-labelledby="headingOneSizing" data-bs-parent="#accordionSizing">
                                    <div class="accordion-body fs-base">This is the first item's accordion body. It is
                                        shown by default, until the collapse plugin adds the appropriate classes that we
                                        use to style each element. These classes control the overall appearance, as well
                                        as the showing and hiding via CSS transitions. You can modify any of this with
                                        custom CSS or overriding our default variables. It's also worth noting that just
                                        about any HTML can go within the .accordion-body, though the transition does
                                        limit overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwoSizing">
                                    <button type="button" class="accordion-button animate-underline fs-5 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwoSizing"
                                        aria-expanded="false" aria-controls="collapseTwoSizing">
                                        <span class="animate-target me-2">Accordion Item #2</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseTwoSizing"
                                    aria-labelledby="headingTwoSizing" data-bs-parent="#accordionSizing">
                                    <div class="accordion-body fs-base">This is the second item's accordion body. It is
                                        hidden by default, until the collapse plugin adds the appropriate classes that
                                        we use to style each element. These classes control the overall appearance, as
                                        well as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the .accordion-body, though the transition
                                        does limit overflow.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThreeSizing">
                                    <button type="button" class="accordion-button animate-underline fs-5 collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThreeSizing"
                                        aria-expanded="false" aria-controls="collapseThreeSizing">
                                        <span class="animate-target me-2">Accordion Item #3</span>
                                    </button>
                                </h3>
                                <div class="accordion-collapse collapse" id="collapseThreeSizing"
                                    aria-labelledby="headingThreeSizing" data-bs-parent="#accordionSizing">
                                    <div class="accordion-body fs-base">This is the third item's accordion body. It is
                                        hidden by default, until the collapse plugin adds the appropriate classes that
                                        we use to style each element. These classes control the overall appearance, as
                                        well as the showing and hiding via CSS transitions. You can modify any of this
                                        with custom CSS or overriding our default variables. It's also worth noting that
                                        just about any HTML can go within the .accordion-body, though the transition
                                        does limit overflow.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
                        <div class="position-relative" data-bs-theme="dark">
                            <button type="button"
                                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                                data-copy-code="#accordion-sizing-code">
                                <i class="ci-copy fs-sm me-1"></i>
                                Copy
                            </button>
                            <pre id="accordion-sizing-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Alternate the size of accordion button and body text with fs- (font-size) utility classes --&gt;
&lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;

  &lt;!-- Item (expanded) --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline fs-5&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #1&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse show&quot; id=&quot;collapseOne&quot; aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body fs-base&quot;&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline fs-5 collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #2&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseTwo&quot; aria-labelledby=&quot;headingTwo&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body fs-base&quot;&gt;This is the second item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;accordion-item&quot;&gt;
    &lt;h3 class=&quot;accordion-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;accordion-button animate-underline fs-5 collapsed&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
        &lt;span class=&quot;animate-target me-2&quot;&gt;Accordion Item #3&lt;/span&gt;
      &lt;/button&gt;
    &lt;/h3&gt;
    &lt;div class=&quot;accordion-collapse collapse&quot; id=&quot;collapseThree&quot; aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
      &lt;div class=&quot;accordion-body fs-base&quot;&gt;This is the third item's accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element.&lt;/div&gt;
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
