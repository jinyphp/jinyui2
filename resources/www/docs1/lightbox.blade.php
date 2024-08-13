<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-md-2">
    <span
      class="badge d-inline-flex align-items-center text-info bg-info-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Cartzilla
      component</span>
    <h1 class="pt-1">Lightbox (Gallery)</h1>
    <p class="text-body-secondary mb-4">JavaScript-based lightbox component designed to display various types of media.
    </p>
  </section>


  <!-- Info alert -->
  <section class="alert d-sm-flex text-body-emphasis bg-info-subtle border-0 py-4 mb-5">
    <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
    <div class="ps-sm-3 pe-sm-5 w-100">
      <p>The Lightbox component is powerde by <a class="alert-link" href="https://biati-digital.github.io/glightbox/"
          target="_blank" rel="noreferrer">Glightbox</a> plugin. Ensure that you include the necessary references to the
        plugin's CSS and JavaScript files.</p>
      <p class="mb-2">CSS file is linked in the <code>&lt;head&gt;</code> section and above <code>theme.min.css</code>
        reference in your document:</p>
      <pre class="code-highlight border mb-3"
        data-bs-theme="dark"><code class="language-html">&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/vendor/glightbox/dist/css/glightbox.min.css&quot;&gt;</code></pre>
      <p class="mb-2">JavaScript file is linked before the closing <code>&lt;/body&gt;</code> tag and above
        <code>theme.min.js</code> reference in your document:</p>
      <pre class="code-highlight border"
        data-bs-theme="dark"><code class="language-html">&lt;script src=&quot;assets/vendor/glightbox/dist/js/glightbox.min.js&quot;&gt;&lt;/script&gt;</code></pre>
    </div>
  </section>


  <!-- Media: Image -->
  <section id="lightbox-image" class="cd-section pb-sm-2 mb-5">
    <h4>Media: Image</h4>
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
            <a class="hover-effect-opacity ratio d-flex rounded-4 overflow-hidden"
              href="../assets/img/blog/grid/v2/07.jpg"
              style="max-width: 480px; --cz-aspect-ratio: calc(466 / 636 * 100%)" data-glightbox data-gallery="image">
              <div
                class="hover-effect-target position-absolute d-flex flex-column align-items-center top-0 start-0 w-100 h-100 z-2 text-white opacity-0 p-4">
                <i class="ci-zoom-in fs-2 position-absolute top-50 translate-middle-y"></i>
                <span class="fs-sm fw-medium text-center mt-auto">Image caption</span>
              </div>
              <span
                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <img src="../assets/img/blog/grid/v2/07.jpg" alt="Image">
            </a>
          </div>
          <div id="html-1" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#lightbox-image-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="lightbox-image-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Image lightbox (gallery) --&gt;
&lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;a class=&quot;hover-effect-opacity ratio d-flex rounded-4 overflow-hidden&quot; href=&quot;assets/img/blog/grid/v2/07.jpg&quot; style=&quot;--cz-aspect-ratio: calc(466 / 636 * 100%)&quot; data-glightbox data-gallery=&quot;image&quot;&gt;
  &lt;div class=&quot;hover-effect-target position-absolute d-flex flex-column align-items-center top-0 start-0 w-100 h-100 z-2 text-white opacity-0 p-4&quot;&gt;
    &lt;i class=&quot;ci-zoom-in fs-2 position-absolute top-50 translate-middle-y&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;fs-sm fw-medium text-center mt-auto&quot;&gt;Image caption&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1&quot;&gt;&lt;/span&gt;
  &lt;img src=&quot;assets/img/blog/grid/v2/07.jpg&quot; alt=&quot;Image&quot;&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Media: Video -->
  <section id="lightbox-video" class="cd-section pb-sm-2 mb-5">
    <h4>Media: Video</h4>
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
            <a class="hover-effect-opacity ratio d-flex rounded-4 overflow-hidden"
              href="https://www.youtube.com/watch?v=Z1xX1Kt9NkU"
              style="max-width: 480px; --cz-aspect-ratio: calc(600 / 856 * 100%)" data-glightbox data-gallery="video">
              <div
                class="position-absolute d-flex flex-column align-items-center top-0 start-0 w-100 h-100 z-2 text-white p-4">
                <span
                  class="btn btn-icon btn-lg position-absolute top-50 translate-middle-y bg-white text-dark rounded-circle">
                  <i class="ci-play-filled"></i>
                </span>
                <span class="hover-effect-target fs-sm fw-medium text-center opacity-0 mt-auto">Video caption</span>
              </div>
              <span
                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <img src="../assets/img/blog/grid/v2/video02.jpg" alt="Image">
            </a>
          </div>
          <div id="html-2" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#lightbox-video-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="lightbox-video-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- YouTube video lightbox (gallery) --&gt;
&lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
&lt;a class=&quot;hover-effect-opacity ratio d-flex rounded-4 overflow-hidden&quot; href=&quot;https://www.youtube.com/watch?v=Z1xX1Kt9NkU&quot; style=&quot;--cz-aspect-ratio: calc(600 / 856 * 100%)&quot; data-glightbox data-gallery=&quot;video&quot;&gt;
  &lt;div class=&quot;position-absolute d-flex flex-column align-items-center top-0 start-0 w-100 h-100 z-2 text-white p-4&quot;&gt;
    &lt;span class=&quot;btn btn-icon btn-lg position-absolute top-50 translate-middle-y bg-white text-dark rounded-circle&quot;&gt;
      &lt;i class=&quot;ci-play-filled&quot;&gt;&lt;/i&gt;
    &lt;/span&gt;
    &lt;span class=&quot;hover-effect-target fs-sm fw-medium text-center opacity-0 mt-auto&quot;&gt;Video caption&lt;/span&gt;
  &lt;/div&gt;
  &lt;span class=&quot;hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1&quot;&gt;&lt;/span&gt;
  &lt;img src=&quot;assets/img/blog/grid/v2/video02.jpg&quot; alt=&quot;Image&quot;&gt;
&lt;/a&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Media: Iframe (Google map) -->
  <section id="lightbox-iframe" class="cd-section pb-sm-2 mb-5">
    <h4>Media: Iframe (Google map)</h4>
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
            <div class="position-relative bg-body-tertiary rounded-4 overflow-hidden">
              <a class="position-absolute top-50 start-50 translate-middle z-2 mt-lg-n3"
                href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2"
                style="width: 50px" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover"
                data-bs-content="Click to view the map" data-glightbox="width: 100vw; height: 100vh;" data-gallery="map"
                aria-label="Toggle map">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.5 54.6">
                  <path
                    d="M42.5 19.2C42.5 8.1 33.2-.7 22 0 12.4.7 4.7 8.5 4.2 18c-.2 2.7.3 5.3 1.1 7.7h0s3.4 10.4 17.4 25c.4.4 1 .4 1.4 0 13.6-13.3 17.4-25 17.4-25h0c.6-2 1-4.2 1-6.5z"
                    fill="#ffffff" />
                  <g fill="#222934">
                    <path
                      d="M20.4 31.8c-4.5 0-8.1-3.6-8.1-8.1s3.6-8.1 8.1-8.1 8.1 3.6 8.1 8.1-3.7 8.1-8.1 8.1zm0-14.2a6.06 6.06 0 0 0-6.1 6.1 6.06 6.06 0 0 0 6.1 6.1c3.3 0 6.1-2.7 6.1-6.1s-2.8-6.1-6.1-6.1z" />
                    <circle cx="20.4" cy="23.7" r="3" />
                    <path
                      d="M20.4 54.5c-.6 0-1.1-.2-1.4-.6C5 39.3 1.5 29 1.4 28.5a21.92 21.92 0 0 1-1.2-8c.6-10.1 8.6-18.3 18.7-19C24.6 1.1 30 3 34.1 6.9c4.1 3.8 6.4 9.2 6.4 14.8 0 2.4-.4 4.7-1.2 6.9-.1.5-4 12-17.6 25.3-.3.4-.8.6-1.3.6zm-17-26.2c.8 2 4.9 11.6 17 24.2 13.2-13 17-24.5 17.1-24.6.7-2 1.1-4.1 1.1-6.3 0-5-2.1-9.9-5.8-13.3-3.7-3.5-8.6-5.2-13.7-4.8-9.1.6-16.4 8-16.9 17.1-.1 2.5.2 5 1.1 7.3l.1.4z" />
                  </g>
                </svg>
              </a>
              <img src="../assets/img/contact/map.jpg"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Map">
              <div class="ratio ratio-16x9 d-none d-sm-block"></div>
              <div class="ratio ratio-4x3 d-sm-none"></div>
              <span class="position-absolute top-0 start-0 z-1 w-100 h-100 bg-body opacity-25"></span>
            </div>
          </div>
          <div id="html-3" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#lightbox-iframe-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="lightbox-iframe-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Iframe (Google map) lightbox --&gt;
&lt;div class=&quot;position-relative bg-body-tertiary rounded-4 overflow-hidden&quot;&gt;
  &lt;a class=&quot;position-absolute top-50 start-50 translate-middle z-2 mt-lg-n3&quot; href=&quot;https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30908.594922615324!2d-73.07331970206108!3d40.788157341303005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396%20Lillian%20Blvd%2C%20Holbrook%2C%20NY%2011741%2C%20USA!5e0!3m2!1sen!2s!4v1706086459668!5m2!1sen!2&quot; style=&quot;width: 50px&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;Click to view the map&quot; data-glightbox=&quot;width: 100vw; height: 100vh;&quot; data-gallery=&quot;map&quot; aria-label=&quot;Toggle map&quot;&gt;
    &lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 42.5 54.6&quot;&gt;&lt;path d=&quot;M42.5 19.2C42.5 8.1 33.2-.7 22 0 12.4.7 4.7 8.5 4.2 18c-.2 2.7.3 5.3 1.1 7.7h0s3.4 10.4 17.4 25c.4.4 1 .4 1.4 0 13.6-13.3 17.4-25 17.4-25h0c.6-2 1-4.2 1-6.5z&quot; fill=&quot;#ffffff&quot;/&gt;&lt;g fill=&quot;#222934&quot;&gt;&lt;path d=&quot;M20.4 31.8c-4.5 0-8.1-3.6-8.1-8.1s3.6-8.1 8.1-8.1 8.1 3.6 8.1 8.1-3.7 8.1-8.1 8.1zm0-14.2a6.06 6.06 0 0 0-6.1 6.1 6.06 6.06 0 0 0 6.1 6.1c3.3 0 6.1-2.7 6.1-6.1s-2.8-6.1-6.1-6.1z&quot;/&gt;&lt;circle cx=&quot;20.4&quot; cy=&quot;23.7&quot; r=&quot;3&quot;/&gt;&lt;path d=&quot;M20.4 54.5c-.6 0-1.1-.2-1.4-.6C5 39.3 1.5 29 1.4 28.5a21.92 21.92 0 0 1-1.2-8c.6-10.1 8.6-18.3 18.7-19C24.6 1.1 30 3 34.1 6.9c4.1 3.8 6.4 9.2 6.4 14.8 0 2.4-.4 4.7-1.2 6.9-.1.5-4 12-17.6 25.3-.3.4-.8.6-1.3.6zm-17-26.2c.8 2 4.9 11.6 17 24.2 13.2-13 17-24.5 17.1-24.6.7-2 1.1-4.1 1.1-6.3 0-5-2.1-9.9-5.8-13.3-3.7-3.5-8.6-5.2-13.7-4.8-9.1.6-16.4 8-16.9 17.1-.1 2.5.2 5 1.1 7.3l.1.4z&quot;/&gt;&lt;/g&gt;&lt;/svg&gt;
  &lt;/a&gt;
  &lt;img src=&quot;assets/img/contact/map.jpg&quot; class=&quot;position-absolute top-0 start-0 w-100 h-100 object-fit-cover&quot; alt=&quot;Map&quot;&gt;

  &lt;!-- Add "ratio" element to avoid content shifts on page load --&gt;
  &lt;div class=&quot;ratio ratio-16x9 d-none d-sm-block&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;ratio ratio-4x3 d-sm-none&quot;&gt;&lt;/div&gt;
  &lt;span class=&quot;position-absolute top-0 start-0 z-1 w-100 h-100 bg-body opacity-25&quot;&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Zoom effect gallery -->
  <section id="lightbox-zoom" class="cd-section pb-sm-2 mb-5">
    <h4>Zoom effect gallery</h4>
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
            <div class="row row-cols-2 row-cols-sm-3 g-3 g-xl-4">
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                  href="../assets/img/shop/fashion/product/02.png" data-glightbox data-gallery="image-gallery">
                  <i
                    class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded"
                    style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="../assets/img/shop/fashion/product/02.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                  href="../assets/img/shop/fashion/product/04.png" data-glightbox data-gallery="image-gallery">
                  <i
                    class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded"
                    style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="../assets/img/shop/fashion/product/04.png" alt="Image">
                  </div>
                </a>
              </div>
              <div class="col">
                <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden"
                  href="../assets/img/shop/fashion/product/05.png" data-glightbox data-gallery="image-gallery">
                  <i
                    class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                  <div class="ratio hover-effect-target bg-body-tertiary rounded"
                    style="--cz-aspect-ratio: calc(342 / 306 * 100%)">
                    <img src="../assets/img/shop/fashion/product/05.png" alt="Image">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div id="html-4" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#lightbox-zoom-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="lightbox-zoom-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Image gallery with zoom effect on hover --&gt;
&lt;div class=&quot;row row-cols-2 row-cols-sm-3 g-3 g-xl-4&quot;&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a class=&quot;hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden&quot; href=&quot;assets/img/shop/fashion/product/02.png&quot; data-glightbox data-gallery=&quot;image-gallery&quot;&gt;
      &lt;i class=&quot;ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2&quot;&gt;&lt;/i&gt;
      &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio hover-effect-target bg-body-tertiary rounded&quot; style=&quot;--cz-aspect-ratio: calc(342 / 306 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/fashion/product/02.png&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a class=&quot;hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden&quot; href=&quot;assets/img/shop/fashion/product/04.png&quot; data-glightbox data-gallery=&quot;image-gallery&quot;&gt;
      &lt;i class=&quot;ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2&quot;&gt;&lt;/i&gt;
      &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio hover-effect-target bg-body-tertiary rounded&quot; style=&quot;--cz-aspect-ratio: calc(342 / 306 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/fashion/product/04.png&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;

  &lt;!-- Item --&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;a class=&quot;hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden&quot; href=&quot;assets/img/shop/fashion/product/05.png&quot; data-glightbox data-gallery=&quot;image-gallery&quot;&gt;
      &lt;i class=&quot;ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2&quot;&gt;&lt;/i&gt;
      &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
      &lt;div class=&quot;ratio hover-effect-target bg-body-tertiary rounded&quot; style=&quot;--cz-aspect-ratio: calc(342 / 306 * 100%)&quot;&gt;
        &lt;img src=&quot;assets/img/shop/fashion/product/05.png&quot; alt=&quot;Image&quot;&gt;
      &lt;/div&gt;
    &lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Inside card -->
  <section id="lightbox-card" class="cd-section">
    <h4>Inside card</h4>
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
            <div class="card" style="max-width: 350px">
              <a class="hover-effect-scale hover-effect-opacity card-img-top d-flex position-relative overflow-hidden"
                href="../assets/img/blog/grid/v1/07.jpg" data-glightbox data-gallery="card">
                <i
                  class="ci-zoom-in fs-2 position-absolute top-50 start-50 translate-middle text-white opacity-0 z-2"></i>
                <span
                  class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
                <div class="ratio" style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
                  <img src="../assets/img/blog/grid/v1/07.jpg" alt="Card image">
                </div>
              </a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a class="btn btn-primary" href="#">Go somewhere</a>
              </div>
            </div>
          </div>
          <div id="html-5" class="tab-pane pt-4 fade" role="tabpanel">
            <div class="position-relative" data-bs-theme="dark">
              <button type="button"
                class="btn btn-sm btn-outline-secondary bg-dark position-absolute top-0 end-0 mt-2 px-2 z-3"
                data-copy-code="#lightbox-card-code">
                <i class="ci-copy fs-sm me-1"></i>
                Copy
              </button>
              <pre id="lightbox-card-code" class="code-highlight mx-n2 mb-n2"><code class="language-html">&lt;!-- Image lightbox inside card --&gt;
&lt;div class=&quot;card&quot;&gt;
  &lt;a class=&quot;hover-effect-scale hover-effect-opacity card-img-top d-flex position-relative overflow-hidden&quot; href=&quot;assets/img/blog/grid/v1/07.jpg&quot; data-glightbox data-gallery=&quot;card&quot;&gt;
    &lt;i class=&quot;ci-zoom-in fs-2 position-absolute top-50 start-50 translate-middle text-white opacity-0 z-2&quot;&gt;&lt;/i&gt;
    &lt;span class=&quot;hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1&quot;&gt;&lt;/span&gt;
    &lt;!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% --&gt;
    &lt;div class=&quot;ratio&quot; style=&quot;--cz-aspect-ratio: calc(305 / 416 * 100%)&quot;&gt;
      &lt;img src=&quot;assets/img/blog/grid/v1/07.jpg&quot; alt=&quot;Card image&quot;&gt;
    &lt;/div&gt;
  &lt;/a&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-www-layout></x-www-app>
