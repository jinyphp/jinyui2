<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-sm-3">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Reviews</h1>
    <p class="text-body-secondary mb-4">Display customer feedback with ratings, enhancing credibility and informing
      potential buyers.</p>
  </section>


  <!-- Product review: Style 1 -->
  <section id="review-product-1" class="cd-section pb-sm-2 mb-5">
    <h4>Product review: Style 1</h4>
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
            <div class="border-top border-bottom py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="text-nowrap me-3">
                  <span class="h6 mb-0">Andrew Richards</span>
                  <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip"
                    data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                </div>
                <span class="text-body-secondary fs-sm ms-auto">May 7, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
              </div>
              <ul class="list-inline gap-2 pb-2 mb-1">
                <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Purple</li>
                <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
              </ul>
              <p class="fs-sm">The iPhone 14 is nothing short of exceptional, combining cutting-edge technology with a
                design that continues to set the standard for premium smartphones. That's why it deserves a perfect
                5-star rating.</p>
              <ul class="list-unstyled fs-sm pb-2 mb-1">
                <li><span class="text-dark-emphasis fw-medium">Pros:</span> Unparalleled performance, great camera,
                  stunning design</li>
                <li><span class="text-dark-emphasis fw-medium">Cons:</span> No in my opinion</li>
              </ul>
              <div class="nav align-items-center">
                <button type="button" class="nav-link animate-underline px-0">
                  <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                  <span class="animate-target">Reply</span>
                </button>
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                  <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                  29
                </button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                  <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                  5
                </button>
              </div>
              <div class="ps-3 pb-2">
                <div class="d-flex align-items-center pt-3 pb-2 mb-1">
                  <span class="badge bg-primary me-2">Reply</span>
                  <span class="h6 mb-0 me-4">Cartzilla Company</span>
                  <span class="text-body-secondary fs-sm">May 8, 2024</span>
                </div>
                <p class="fs-sm mb-0">Thank you for your feedback! We are glad that you were satisfied with your
                  purchase :)</p>
              </div>
            </div>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#review-product-1-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="review-product-1-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Product review --&gt;
&lt;div class=&quot;border-top border-bottom py-3&quot;&gt;
  &lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
    &lt;div class=&quot;text-nowrap me-3&quot;&gt;
      &lt;span class=&quot;h6 mb-0&quot;&gt;Andrew Richards&lt;/span&gt;
      &lt;i class=&quot;ci-check-circle text-success align-middle ms-1&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; title=&quot;Verified customer&quot;&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;span class=&quot;text-body-secondary fs-sm ms-auto&quot;&gt;May 7, 2024&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class=&quot;d-flex gap-1 fs-sm pb-2 mb-1&quot;&gt;
    &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
    &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;ul class=&quot;list-inline gap-2 pb-2 mb-1&quot;&gt;
    &lt;li class=&quot;fs-sm me-4&quot;&gt;&lt;span class=&quot;text-dark-emphasis fw-medium&quot;&gt;Color:&lt;/span&gt; Purple&lt;/li&gt;
    &lt;li class=&quot;fs-sm&quot;&gt;&lt;span class=&quot;text-dark-emphasis fw-medium&quot;&gt;Model:&lt;/span&gt; 128GB&lt;/li&gt;
  &lt;/ul&gt;
  &lt;p class=&quot;fs-sm&quot;&gt;The iPhone 14 is nothing short of exceptional, combining cutting-edge technology with a design that continues to set the standard for premium smartphones. That's why it deserves a perfect 5-star rating.&lt;/p&gt;
  &lt;ul class=&quot;list-unstyled fs-sm pb-2 mb-1&quot;&gt;
    &lt;li&gt;&lt;span class=&quot;text-dark-emphasis fw-medium&quot;&gt;Pros:&lt;/span&gt; Unparalleled performance, great camera, stunning design&lt;/li&gt;
    &lt;li&gt;&lt;span class=&quot;text-dark-emphasis fw-medium&quot;&gt;Cons:&lt;/span&gt; No in my opinion&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class=&quot;nav align-items-center&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link animate-underline px-0&quot;&gt;
      &lt;i class=&quot;ci-corner-down-right fs-base ms-1 me-1&quot;&gt;&lt;/i&gt;
      &lt;span class=&quot;animate-target&quot;&gt;Reply&lt;/span&gt;
    &lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 ms-auto me-n1&quot;&gt;
      &lt;i class=&quot;ci-thumbs-up text-success fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      29
    &lt;/button&gt;
    &lt;hr class=&quot;vr my-2 mx-3&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;nav-link text-body-secondary animate-scale px-0 ms-n1&quot;&gt;
      &lt;i class=&quot;ci-thumbs-down text-danger fs-base animate-target me-1&quot;&gt;&lt;/i&gt;
      5
    &lt;/button&gt;
  &lt;/div&gt;

  &lt;!-- Reply --&gt;
  &lt;div class=&quot;ps-3 pb-2&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center pt-3 pb-2 mb-1&quot;&gt;
      &lt;span class=&quot;badge bg-primary me-2&quot;&gt;Reply&lt;/span&gt;
      &lt;span class=&quot;h6 mb-0 me-4&quot;&gt;Cartzilla Company&lt;/span&gt;
      &lt;span class=&quot;text-body-secondary fs-sm&quot;&gt;May 8, 2024&lt;/span&gt;
    &lt;/div&gt;
    &lt;p class=&quot;fs-sm mb-0&quot;&gt;Thank you for your feedback! We are glad that you were satisfied with your purchase :)&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Product review: Style 2 -->
  <section id="review-product-2" class="cd-section pb-sm-2 mb-5">
    <h4>Product review: Style 2</h4>
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
            <div class="border-top border-bottom py-4">
              <div class="row py-sm-2">
                <div class="col-md-4 col-lg-3 mb-3 mb-md-0">
                  <div class="d-flex h6 mb-2">
                    Bessie Cooper
                    <i class="ci-check-circle text-success mt-1 ms-2" data-bs-toggle="tooltip"
                      data-bs-custom-class="tooltip-sm" title="Verified customer"></i>
                  </div>
                  <div class="fs-sm mb-2 mb-md-3">April 8, 2024</div>
                  <div class="d-flex gap-1 fs-sm">
                    <i class="ci-star-filled text-body-emphasis"></i>
                    <i class="ci-star-filled text-body-emphasis"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                    <i class="ci-star text-body-tertiary opacity-75"></i>
                  </div>
                </div>
                <div class="col-md-8 col-lg-9">
                  <p class="mb-md-4">While the design of the chair is nice and it does add a touch of retro vibe to my
                    space, I found the quality to be lacking. After just a few weeks of use, one of the legs started to
                    wobble, and the seat isn't as comfortable as I had hoped. Disappointed with the durability.
                    Additionally, the assembly process was a bit frustrating as some of the screws didn't align properly
                    with the holes, requiring extra effort to secure them in place. Overall, while it looks good, I
                    expected better quality for the price.</p>
                  <div class="d-sm-flex justify-content-between">
                    <div class="d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0">
                      <i class="ci-close fs-base me-1" style="margin-top: .125rem"></i>
                      No, I don't recommend this product
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <div class="fs-sm fw-medium text-dark-emphasis me-1">Helpful?</div>
                      <button type="button" class="btn btn-sm btn-secondary">
                        <i class="ci-thumbs-up fs-sm ms-n1 me-1"></i>
                        3
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#review-product-2-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="review-product-2-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Product review --&gt;
&lt;div class=&quot;border-top border-bottom py-4&quot;&gt;
  &lt;div class=&quot;row py-sm-2&quot;&gt;
    &lt;div class=&quot;col-md-4 col-lg-3 mb-3 mb-md-0&quot;&gt;
      &lt;div class=&quot;d-flex h6 mb-2&quot;&gt;
        Bessie Cooper
        &lt;i class=&quot;ci-check-circle text-success mt-1 ms-2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-custom-class=&quot;tooltip-sm&quot; title=&quot;Verified customer&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
      &lt;div class=&quot;fs-sm mb-2 mb-md-3&quot;&gt;April 8, 2024&lt;/div&gt;
      &lt;div class=&quot;d-flex gap-1 fs-sm&quot;&gt;
        &lt;i class=&quot;ci-star-filled text-body-emphasis&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star-filled text-body-emphasis&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star text-body-tertiary opacity-75&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star text-body-tertiary opacity-75&quot;&gt;&lt;/i&gt;
        &lt;i class=&quot;ci-star text-body-tertiary opacity-75&quot;&gt;&lt;/i&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-8 col-lg-9&quot;&gt;
      &lt;p class=&quot;mb-md-4&quot;&gt;While the design of the chair is nice and it does add a touch of retro vibe to my space, I found the quality to be lacking. After just a few weeks of use, one of the legs started to wobble, and the seat isn't as comfortable as I had hoped. Disappointed with the durability. Additionally, the assembly process was a bit frustrating as some of the screws didn't align properly with the holes, requiring extra effort to secure them in place. Overall, while it looks good, I expected better quality for the price.&lt;/p&gt;
      &lt;div class=&quot;d-sm-flex justify-content-between&quot;&gt;
        &lt;div class=&quot;d-flex align-items-center fs-sm fw-medium text-dark-emphasis pb-2 pb-sm-0 mb-1 mb-sm-0&quot;&gt;
          &lt;i class=&quot;ci-close fs-base me-1&quot; style=&quot;margin-top: .125rem&quot;&gt;&lt;/i&gt;
          No, I don't recommend this product
        &lt;/div&gt;
        &lt;div class=&quot;d-flex align-items-center gap-2&quot;&gt;
          &lt;div class=&quot;fs-sm fw-medium text-dark-emphasis me-1&quot;&gt;Helpful?&lt;/div&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-secondary&quot;&gt;
            &lt;i class=&quot;ci-thumbs-up fs-sm ms-n1 me-1&quot;&gt;&lt;/i&gt;
            3
          &lt;/button&gt;
        &lt;/div&gt;
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


  <!-- Inside card -->
  <section id="review-card" class="cd-section pb-sm-2 mb-5">
    <h4>Inside card</h4>
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
            <div class="card rounded-4 p-sm-2" style="max-width: 416px">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="ratio ratio-1x1 flex-shrink-0" style="max-width: 80px">
                    <img src="../assets/img/home/fashion/v1/reviews/02.png" width="80" alt="Image">
                  </div>
                  <div class="ps-2 ms-1">
                    <div class="d-flex gap-1 fs-xs pb-2 mb-1">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                    </div>
                    <h3 class="h6 mb-0">Alexandra D.</h3>
                  </div>
                </div>
                <p class="mb-0">A wonderful compact bag, holds a lot of things, good tailoring, smooth seams, strong
                  fittings, good quality.</p>
              </div>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#review-card-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="review-card-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Review inside card --&gt;
&lt;div class=&quot;card rounded-4 p-sm-2&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;div class=&quot;d-flex align-items-center mb-3&quot;&gt;
      &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load --&gt;
      &lt;div class=&quot;ratio ratio-1x1 flex-shrink-0&quot; style=&quot;max-width: 80px&quot;&gt;
        &lt;img src=&quot;assets/img/home/fashion/v1/reviews/02.png&quot; width=&quot;80&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;ps-2 ms-1&quot;&gt;
        &lt;div class=&quot;d-flex gap-1 fs-xs pb-2 mb-1&quot;&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
          &lt;i class=&quot;ci-star-filled text-warning&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;h3 class=&quot;h6 mb-0&quot;&gt;Alexandra D.&lt;/h3&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-0&quot;&gt;A wonderful compact bag, holds a lot of things, good tailoring, smooth seams, strong fittings, good quality.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Rating breakdown -->
  <section id="review-rating-breakdown" class="cd-section">
    <h4>Rating breakdown</h4>
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
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#review-rating-breakdown-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="review-rating-breakdown-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;div class=&quot;row g-4&quot;&gt;
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
