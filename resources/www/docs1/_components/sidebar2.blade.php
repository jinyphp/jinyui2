@php
$jsonData = '{
"items": {
"1": {
"code": "navlink",
"name": "background",
"navlink": "/tailwind/backgrounds/backgroundAttachment",
"ref": 0,
"level": 1,
"id": 1
},
"2": {
"code": "navlink",
"name": "경고창",
"navlink": "/ui_components/alert",
"ref": 0,
"level": 1,
"id": 2
},
"3": {
"code": "navlink",
"name": "배지",
"navlink": "/ui_components/badge",
"ref": 0,
"level": 1,
"id": 2
},
"4": {
"code": "navlink",
"name": "브레드크럼",
"navlink": "/ui_components/breadcrumb",
"ref": 0,
"level": 1,
"id": 2
},
"5": {
"code": "navlink",
"name": "버튼",
"navlink": "/ui_components/button",
"ref": 0,
"level": 1,
"id": 2
},
"6": {
"code": "navlink",
"name": "버튼 그룹",
"navlink": "/ui_components/buttongroup",
"ref": 0,
"level": 1,
"id": 2
},
"7": {
"code": "navlink",
"name": "카드",
"navlink": "/ui_components/card",
"ref": 0,
"level": 1,
"id": 2
},
"8": {
"code": "navlink",
"name": "캐러셀",
"navlink": "/ui_components/carousel",
"ref": 0,
"level": 1,
"id": 2
},
"9": {
"code": "navlink",
"name": "닫기 버튼",
"navlink": "/ui_components/closebutton",
"ref": 0,
"level": 1,
"id": 2
},
"10": {
"code": "navlink",
"name": "콜랩스",
"navlink": "/ui_components/collapse",
"ref": 0,
"level": 1,
"id": 2
},
"11": {
"code": "navlink",
"name": "드롭다운",
"navlink": "/ui_components/dropdown",
"ref": 0,
"level": 1,
"id": 2
},
"12": {
"code": "navlink",
"name": "목록 그룹",
"navlink": "/ui_components/listgroup",
"ref": 0,
"level": 1,
"id": 2
},
"13": {
"code": "navlink",
"name": "모달",
"navlink": "/ui_components/modal",
"ref": 0,
"level": 1,
"id": 2
},
"14": {
"code": "navlink",
"name": "내비게이션 바",
"navlink": "/ui_components/navbar",
"ref": 0,
"level": 1,
"id": 2
},
"15": {
"code": "navlink",
"name": "내비게이션 & 탭",
"navlink": "/ui_components/navstabs",
"ref": 0,
"level": 1,
"id": 2
},
"16": {
"code": "navlink",
"name": "오프캔버스",
"navlink": "/ui_components/offcanvas",
"ref": 0,
"level": 1,
"id": 2
},
"17": {
"code": "navlink",
"name": "페이지네이션",
"navlink": "/ui_components/pagination",
"ref": 0,
"level": 1,
"id": 2
},
"18": {
"code": "navlink",
"name": "플레이스홀더",
"navlink": "/ui_components/placeholers",
"ref": 0,
"level": 1,
"id": 2
},
"19": {
"code": "navlink",
"name": "팝오버",
"navlink": "/ui_components/popovers",
"ref": 0,
"level": 1,
"id": 2
},
"20": {
"code": "navlink",
"name": "프로그레스",
"navlink": "/ui_components/progress",
"ref": 0,
"level": 1,
"id": 2
},
"21": {
"code": "navlink",
"name": "스크롤스파이",
"navlink": "/ui_components/scrollspy",
"ref": 0,
"level": 1,
"id": 2
},
"22": {
"code": "navlink",
"name": "스피너",
"navlink": "/ui_components/spinners",
"ref": 0,
"level": 1,
"id": 2
},
"23": {
"code": "navlink",
"name": "토스트",
"navlink": "/ui_components/toasts",
"ref": 0,
"level": 1,
"id": 2
},
"24": {
"code": "navlink",
"name": "툴팁",
"navlink": "/ui_components/tooltips",
"ref": 0,
"level": 1,
"id": 2
}
}

}';

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
                    <!-- <li>
    @foreach($items as $item) -->
                    <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                    <!-- <a href="{{ $item['navlink'] }}"
            class="group flex gap-x-6 rounded-md p-2 text-sm font-semibold leading-6 text-black {{ request()->is(ltrim($item['navlink'], '/')) ? 'bg-gray-300' : '' }}">

            {{ $item['name'] }}
        </a>
    @endforeach
</li> -->

                </nav>
            </div>
        </div>
    </div>
</div>