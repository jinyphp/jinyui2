<x-www-app><x-www-layout>

    <!-- Page title -->
    <section class="py-2 pb-3 pb-lg-4">
        <span
            class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
            started</span>
        <h1 class="pt-1 mb-2">Browser support</h1>
    </section>


    <!-- Page content -->
    <section class="mb-3">
        <p>Inside SCSS, we do not use vendor prefixes; instead, we utilize <a class="fw-medium"
                href="https://github.com/postcss/autoprefixer" target="_blank" rel="noopener">Autoprefixer</a> to manage
            intended browser support through CSS prefixes. After compilation, CSS styles are processed by Autoprefixer
            to add the necessary vendor prefixes. This step is crucial to ensure cross-browser compatibility for the
            latest CSS3 features.</p>

        <h2 class="h4 pt-4">Configuring browser support with Autoprefixer settings</h2>
        <p>Autoprefixer is an integral part of the project building process. To customize its settings, refer to the
            <code>.browserslistrc</code> file, which is set up with Bootstrap's default browser list. It is generally
            good practice to gather analytics on the browsers and operating systems your visitors use, and then tailor
            the Autoprefixer settings accordingly based on this data.</p>
        <p class="mb-4">For more detailed information on available Browserlist options, visit <a class="fw-medium"
                href="https://github.com/browserslist/browserslist" target="_blank" rel="noopener">Browserlist on
                GitHub.</a></p>
        <div class="ratio" style="max-width: 482px; --cz-aspect-ratio: calc(295 / 480 * 100%)">
            <img src="../assets/img/docs/browserslistrc.png" class="border rounded" alt=".browserslistrc file">
        </div>
    </section>
</x-www-layout></x-www-app>
