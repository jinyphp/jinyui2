<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">Progressive Web App (PWA)</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p>Progressive Web Apps (PWAs) represent a transformative approach to building websites, combining the best of web
      and mobile apps. Think of it as a website built using web technologies but acting and feeling like an app. PWAs
      have the potential to be fast, reliable, and engaging.</p>
    <p class="pb-4 mb-sm-4">While Cartzilla is not a full PWA out of the box, it is PWA-ready, meaning it includes
      several PWA features such as a custom installation banner, static caching, and offline capabilities. This makes it
      easy to optimize for desktop and mobile installations.</p>

    <!-- Use PWA -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="pwa-use">
      <h2 class="h3 mb-sm-4">How to use available PWA features in Cartzilla</h2>
      <p class="pb-2">Cartzilla incorporates several key PWA components to enhance user experience:</p>
      <ol class="gap-3 pb-sm-2 mb-4">
        <li>
          <span class="text-body-emphasis fw-semibold">Manifest.json file:</span><br>This JSON file is crucial for
          defining the web application as a PWA. It provides metadata used when your website is added to a user's home
          screen, including app icons, page URLs, and display type. Here is where you configure the look and feel of
          your application when it operates in an "app-like" environment.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Service Worker File
            (<code>service-worker.js</code>):</span><br>Located in the root folder, the service worker is a script that
          your browser runs in the background, separate from a web page, enabling features that don't need a web page or
          user interaction. Cartzilla's service worker handles the caching of static resources, which ensures that your
          site can load offline or on low-quality networks and serves an offline page (<code>offline.html</code>) when
          connectivity is lost.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">PWA module
            (<code>src/js/components/pwa.js</code>):</span><br>This JavaScript module manages the custom PWA
          installation banner and the registration or unregistration of the service worker. It's controlled via the
          data-pwa attribute on the <code>&lt;html&gt;</code> tag. In this module, users can modify the content of the
          installation banner and set how often it appears. The service worker's scope can also be adjusted here.
        </li>
      </ol>
      <p class="mb-0">All files related to PWA features are thoroughly commented to help users understand and modify
        them as needed.</p>
    </section>


    <!-- Disable PWA -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="pwa-disable">
      <h2 class="h3 mb-sm-4">How to disable PWA functionality entirely</h2>
      <p class="pb-2">If you decide not to use PWA features, you can easily disable them:</p>
      <ol class="gap-3 m-0">
        <li>
          <span class="text-body-emphasis fw-semibold">Disable PWA in HTML:</span><br>Remove or set the
          <code>data-pwa</code> attribute to <code>false</code> in the <code>&lt;html&gt;</code> tag.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Remove Service Worker:</span><br>Optionally, delete the
          <code>service-worker.js</code> file if it's no longer needed.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Remove PWA module:</span><br>Optionally, delete the
          <code>src/js/components/pwa.js</code> module and its import statement in <code>src/js/theme.js</code>.
        </li>
        <li>
          <span class="d-block pb-1 mb-3"><span class="text-body-emphasis fw-semibold">Clear cache:</span><br>To ensure
            that all service worker settings are fully reset, clear the cache. Instructions for doing this in Chrome are
            shown below:</span>
          <div class="border rounded overflow-hidden" style="max-width: 702px">
            <div class="ratio" style="--cz-aspect-ratio: calc(540 / 700 * 100%)">
              <img src="../assets/img/docs/cache.png" alt="Cache storage">
            </div>
          </div>
        </li>
      </ol>
    </section>


    <!-- Advanced topics -->
    <section class="cd-section" id="pwa-advanced">
      <h2 class="h3 mb-sm-4">Advanced topics</h2>
      <p class="pb-2">While Cartzilla covers basic PWA functionalities, some advanced features are beyond its scope but
        can greatly enhance the capabilities of PWAs:</p>
      <ol class="gap-3 mb-4">
        <li>
          <span class="text-body-emphasis fw-semibold">Advanced (dynamic) caching:</span><br>Techniques like using
          IndexedDB for complex or dynamic data sets.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Background sync:</span><br>Allows web apps to synchronize data in
          the background, enhancing offline usability.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Push notifications:</span><br>Enables direct user engagement
          through push notifications.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Native device features:</span><br>Access to device capabilities
          such as camera, geolocation, motion sensors, etc., through modern web APIs. These features allow PWAs to
          provide a more app-like experience by integrating closely with the user's device.
        </li>
      </ol>
      <p>For more in-depth exploration of these advanced features, refer to trusted online resources.</p>
      <div class="alert alert-info text-body-emphasis d-flex py-4 m-0">
        <i class="ci-info text-info fs-4"></i>
        <div class="ps-2 ps-sm-3 w-100">
          <span class="text-info fw-semibold">Please note:</span> These features are not supported by Cartzilla's
          technical support.
        </div>
      </div>
    </section>
  </section>
</x-www-layout></x-www-app>
