@php
// JSON 파일 경로 지정
$jsonFile = resource_path('www/docs1/_layouts/menu_item.json');

// JSON 파일 읽어오기
$jsonData = file_get_contents($jsonFile);

// JSON 데이터 파싱
$items = json_decode($jsonData, true)['items'];
@endphp

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


                    <div class="dropdown">
                        <span
                            class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3 pe-none active">
                            Installation
                            <span class="visually-hidden">setup npm prerequisites</span>
                        </span>
                        <ul id="anchorNav" class="nav nav-underline flex-column border-start ms-2 my-2"
                            style="gap: .25rem;">
                            <li class="nav-item"><a class="nav-link fw-normal" href="#prerequisites">Prerequisites</a>
                            </li>
                            <li class="nav-item"><a class="nav-link fw-normal" href="#dev-environment">Dev
                                    environment</a></li>
                            <li class="nav-item"><a class="nav-link fw-normal" href="#editor-cli">Text editor or CLI</a>
                            </li>
                            <li class="nav-item"><a class="nav-link fw-normal" href="#install-node">Installing Node.js,
                                    npm and dependencies</a></li>
                        </ul>
                    </div>
                    @foreach($items as $item)
                    <div class="dropend">
                        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
                            href="{{ $item['navlink'] }}">

                            {{ $item['name'] }}
                            <span class="visually-hidden">dev build styles:compile styles:minify scripts:compile
                                scripts:minify icon-font vendor validate watch dist</span>
                        </a>
                    </div>

                    @endforeach

                </nav>
            </div>
        </div>
    </div>
</div>