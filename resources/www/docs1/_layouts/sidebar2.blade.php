<div class="cd-sidebar"
    data-filter-list='{"searchClass": "docs-search", "listClass": "docs-list", "valueNames": ["list-group-item"]}'>
    <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1"
        aria-labelledby="sidebarNavLabel">

        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav"
                aria-label="Close"></button>
        </div>

        <div class="position-relative mx-4 ms-lg-0 mb-4">
            <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
        </div>

        <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
            <div id="scrollable" class="h-100 overflow-y-auto pe-4">
                <nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()">
                    <h3 class="h6 d-flex align-items-center pb-1 mb-2">
                        <i class="ci-book fs-lg text-success me-2"></i>
                        Getting started
                    </h3>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs">Introduction</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/download">Download</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/howtouse">How to use</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/license">License</a>
                    </div>
                    <h3 class="h6 d-flex align-items-center border-top pt-4 pb-1 mt-3 mb-2">
                        <i class="ci-settings fs-lg text-primary me-2"></i>
                        Customize
                    </h3>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/overview">Overview</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/sass">Sass</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/colors">Colors</a>
                    </div>
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="/docs/variable">CSS Variables</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
window.onload = function() {
    var links = document.querySelectorAll('.list-group-item');
    var currentUrl = window.location.pathname;

    links.forEach(function(link) {
        var linkUrl = link.getAttribute('href');
        if (linkUrl === currentUrl) {
            link.classList.add('active');
        }
    });
}
</script>