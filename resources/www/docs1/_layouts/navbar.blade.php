<!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
<div class="collapse navbar-stuck-hide" id="stuckNav">
    <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">

        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">

            </button>
        </div>

        <!-- Country and City slects visible on screens < 768px wide (md breakpoint) -->
        <div class="offcanvas-header gap-3 d-md-none pt-0 pb-3">
            <div class="dropdown nav">
                @partials('headers.country')
            </div>
            <div class="dropdown nav">
                @partials('headers.location')
            </div>
        </div>

        <div class="offcanvas-body pt-1 pb-3 py-lg-0">
            <div class="container pb-lg-2 px-0 px-lg-3">

                <div class="position-relative d-lg-flex align-items-center justify-content-between">

                    <!-- Categories mega menu -->
                    @partials('headers.categories')

                    <!-- Navbar nav -->
                    @partials('headers.navbar')

                    <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
                    @partials('headers.search')

                </div>
            </div>
        </div>

        <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
        <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
                <a class="nav-link border-end" href="account-signin">
                    <i class="ci-user fs-lg opacity-60 me-2"></i>
                    Account
                </a>
                <a class="nav-link" href="#!">
                    <i class="ci-heart fs-lg opacity-60 me-2"></i>
                    Wishlist
                </a>
            </div>
        </div>
    </nav>
</div>
