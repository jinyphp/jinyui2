
<nav class="navbar navbar-expand-lg navbar-light w-100">
    <div class="container px-3">
        <a class="navbar-brand" href="../../index.html"><img src="../../assets/images/logo/logo.svg" alt /></a>
        <button class="navbar-toggler offcanvas-nav-btn" type="button">
            <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
            <div class="offcanvas-header">
                <a href="../../index.html" class="text-inverse"><img src="../../assets/images/logo/logo.svg" alt /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0 align-items-center">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                    <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item mb-3 text-body" href="../../docs/index.html">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-file-text fs-4 text-primary"></i>
                                <div class="ms-3 lh-1">
                                 <h5 class="mb-1">Documentations</h5>
                                  <p class="mb-0 fs-6">Browse the all documentation</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item text-body" href="../../docs/changelog.html">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clipboard fs-4 text-primary"></i>
                                <div class="ms-3 lh-1">
                                 <h5 class="mb-1">
                                   Changelog <span class="text-primary ms-1" id="changelog"></span>
                                     </h5>
                                       <p class="mb-0 fs-6">See what's new</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex mt-3 mt-lg-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
