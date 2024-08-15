@php
    $jsonData = '{
                "items": {
                    "1": {
                        "code": "navlink",
                        "name": "아코디언",
                        "navlink": "/ui_components/accordion",
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
                        "id": 3
                    },
                    "4": {
                        "code": "navlink",
                        "name": "브레드크럼",
                        "navlink": "/ui_components/breadcrumb",
                        "ref": 0,
                        "level": 1,
                        "id": 4
                    },
                    "5": {
                        "code": "navlink",
                        "name": "버튼",
                        "navlink": "/ui_components/button",
                        "ref": 0,
                        "level": 1,
                        "id": 5
                    },
                    "6": {
                        "code": "navlink",
                        "name": "버튼 그룹",
                        "navlink": "/ui_components/buttongroup",
                        "ref": 0,
                        "level": 1,
                        "id": 6
                    },
                    "7": {
                        "code": "navlink",
                        "name": "카드",
                        "navlink": "/ui_components/card",
                        "ref": 0,
                        "level": 1,
                        "id": 7
                    },
                    "8": {
                        "code": "navlink",
                        "name": "캐러셀",
                        "navlink": "/ui_components/carousel",
                        "ref": 0,
                        "level": 1,
                        "id": 8
                    },
                    "9": {
                        "code": "navlink",
                        "name": "닫기 버튼",
                        "navlink": "/ui_components/closebutton",
                        "ref": 0,
                        "level": 1,
                        "id": 9
                    },
                    "10": {
                        "code": "navlink",
                        "name": "콜랩스",
                        "navlink": "/ui_components/collapse",
                        "ref": 0,
                        "level": 1,
                        "id": 10
                    },
                    "11": {
                        "code": "navlink",
                        "name": "드롭다운",
                        "navlink": "/ui_components/dropdown",
                        "ref": 0,
                        "level": 1,
                        "id": 11
                    },
                    "12": {
                        "code": "navlink",
                        "name": "목록 그룹",
                        "navlink": "/ui_components/listgroup",
                        "ref": 0,
                        "level": 1,
                        "id": 12
                    },
                    "13": {
                        "code": "navlink",
                        "name": "모달",
                        "navlink": "/ui_components/modal",
                        "ref": 0,
                        "level": 1,
                        "id": 13
                    },
                    "14": {
                        "code": "navlink",
                        "name": "내비게이션 바",
                        "navlink": "/ui_components/navbar",
                        "ref": 0,
                        "level": 1,
                        "id": 14
                    },
                    "15": {
                        "code": "navlink",
                        "name": "내비게이션 & 탭",
                        "navlink": "/ui_components/navstabs",
                        "ref": 0,
                        "level": 1,
                        "id": 15
                    },
                    "16": {
                        "code": "navlink",
                        "name": "오프캔버스",
                        "navlink": "/ui_components/offcanvas",
                        "ref": 0,
                        "level": 1,
                        "id": 16
                    },
                    "17": {
                        "code": "navlink",
                        "name": "페이지네이션",
                        "navlink": "/ui_components/pagination",
                        "ref": 0,
                        "level": 1,
                        "id": 17
                    },
                    "18": {
                        "code": "navlink",
                        "name": "플레이스홀더",
                        "navlink": "/ui_components/placeholders",
                        "ref": 0,
                        "level": 1,
                        "id": 18
                    },
                    "19": {
                        "code": "navlink",
                        "name": "팝오버",
                        "navlink": "/ui_components/popovers",
                        "ref": 0,
                        "level": 1,
                        "id": 19
                    },
                    "20": {
                        "code": "navlink",
                        "name": "프로그레스",
                        "navlink": "/ui_components/progress",
                        "ref": 0,
                        "level": 1,
                        "id": 20
                    },
                    "21": {
                        "code": "navlink",
                        "name": "스크롤스파이",
                        "navlink": "/ui_components/scrollspy",
                        "ref": 0,
                        "level": 1,
                        "id": 21
                    },
                    "22": {
                        "code": "navlink",
                        "name": "스피너",
                        "navlink": "/ui_components/spinners",
                        "ref": 0,
                        "level": 1,
                        "id": 22
                    },
                    "23": {
                        "code": "navlink",
                        "name": "토스트",
                        "navlink": "/ui_components/toasts",
                        "ref": 0,
                        "level": 1,
                        "id": 23
                    },
                    "24": {
                        "code": "navlink",
                        "name": "툴팁",
                        "navlink": "/ui_components/tooltips",
                        "ref": 0,
                        "level": 1,
                        "id": 24
                    }
                }
            }';

    $items = json_decode($jsonData, true)['items'];
@endphp

<li>
    @foreach($items as $item)
        <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
        <a href="{{ $item['navlink'] }}"
            class="group flex gap-x-6 rounded-md p-2 text-sm font-semibold leading-6 text-black {{ request()->is(ltrim($item['navlink'], '/')) ? 'bg-gray-300' : '' }}">

            {{ $item['name'] }}
        </a>
    @endforeach
</li>