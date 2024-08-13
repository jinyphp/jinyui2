<!-- Navigation bar (Page header) -->
<header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
    <div class="container py-2 py-lg-3">
        <div class="d-flex align-items-center gap-3">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Country slect visible on screens > 768px wide (md breakpoint) -->
            <!-- <x-www_nav-country>
        </x-www_nav-country> -->

            <!-- City slect visible on screens > 768px wide (md breakpoint) -->
            <!-- <x-www_nav-city>
        </x-www_nav-city> -->
        </div>

        <!-- Navbar brand (Logo) -->

        <x-www_navbar-brand>
            JinyUI2
        </x-www_navbar-brand>

        <!-- Button group -->
        <div class="d-flex align-items-center">

            <!-- Navbar stuck nav toggler -->
            <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse"
                data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false"
                aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
            <button type="button"
                class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none"
                data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox"
                aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
            </button>

            <!-- Account button visible on screens > 768px wide (md breakpoint) -->
            <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex"
                href="/login">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Login</span>
            </a>

            <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
            {{-- <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex"
            href="/wish">
          <i class="ci-heart animate-target"></i>
          <span class="visually-hidden">Wishlist</span>
        </a> --}}

            <!-- Cart button -->
            {{-- <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale"
          data-bs-toggle="offcanvas" data-bs-target="#shoppingCart"
          aria-controls="shoppingCart" aria-label="Shopping cart">
          <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
          <i class="ci-shopping-bag animate-target me-1"></i>
        </button> --}}
        </div>
    </div>


    <x-www-nav>

    </x-www-nav>

</header>