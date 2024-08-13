<x-www-app><x-www-layout>

  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span
      class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting
      started</span>
    <h1 class="pt-1 mb-2">Deployment guide</h1>
  </section>


  <!-- Page content -->
  <section class="mb-3">
    <p class="pb-4 mb-sm-4">This article provides a comprehensive guide on deploying your project when using the
      Cartzilla template. There are multiple ways to deploy, whether manually uploading to a server or utilizing modern
      cloud platforms with integrated CI/CD.</p>


    <!-- Manually uploading to a server -->
    <section class="cd-section pb-sm-2 pb-md-3 mb-5" id="manual-upload">
      <h2 class="h3 mb-sm-4">Manually uploading to a server</h2>
      <p class="pb-2">The build system in Cartzilla includes a streamlined command designed to prepare your project for
        production. The <kbd class="text-nowrap">npm run build</kbd> command performs several critical tasks:</p>
      <ol class="gap-3">
        <li>
          <span class="text-body-emphasis fw-semibold">Builds and minifies:</span> Compiles CSS and JavaScript, ensuring
          they are optimized for quick loading times.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Generates icon font:</span> Converts SVG icons into a
          web-friendly icon font.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Copies vendor files:</span> Transfers necessary third-party
          libraries and frameworks from the <code>node_modules</code> directory to the <code>assets/vendor</code>
          folder.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Validates HTML:</span> Checks the HTML files against W3C
          standards to ensure they are compliant and error-free.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Creates a distribution folder:</span> Generates a
          <code>dist</code> folder where all production-ready files are stored. This includes HTML files with updated
          links to the correct vendor files.
        </li>
      </ol>
      <h3 class="h6 pt-3">Uploading to a server</h3>
      <p class="mb-0">Once the build process is complete, you can upload the contents of the <code>dist</code> folder to
        your hosting server using FTP, SFTP, or any other file transfer method you prefer. This step involves
        transferring your optimized files to a web server where they will be accessible to users.</p>
    </section>


    <!-- Deploying with cloud platforms (Vercel) -->
    <section class="cd-section" id="deploy-cloud-platform">
      <h2 class="h3 mb-sm-4">Deploying with cloud platforms (Vercel)</h2>
      <p class="pb-2">For those preferring a more automated approach, using a cloud platform like Vercel offers a
        straightforward deployment process with benefits such as Continuous Integration and Deployment (CI/CD). Here's
        how you can set up your project with Vercel:</p>
      <ol class="gap-3">
        <li>
          <span class="text-body-emphasis fw-semibold">Connect your repository:</span> Link your GitHub, GitLab, or
          Bitbucket repository to Vercel. This allows Vercel to access your project files.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Configure the build settings:</span> Set up the build commands
          and output directory in Vercel. Typically, this would involve specifying <code>npm run build</code> as your
          build command and <code>dist</code> as your output directory.
        </li>
        <li>
          <span class="text-body-emphasis fw-semibold">Deploy:</span> Once configured, each push to your repository will
          trigger a new deployment automatically. Vercel handles all the aspects of serving your website, from CDN
          distribution to SSL certificate management.
        </li>
      </ol>
      <p class="pt-2 mb-4">Below is an example screenshot showing the proper configuration for a Vercel project:</p>
      <div class="ratio" style="max-width: 627px; --cz-aspect-ratio: calc(810 / 625 * 100%)">
        <img src="../assets/img/docs/vercel.png" class="border rounded" alt="Vercel project configuration">
      </div>
    </section>
  </section>
</x-www-layout></x-www-app>
