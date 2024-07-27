<style>
    /* 스크롤바 커스텀 */
    /* 임의의 영역 생성 */
    .scrollBar {}

    /* 아래의 모든 코드는 영역::코드로 사용 */
    .scrollBar::-webkit-scrollbar {
        width: 7px;
        /* 스크롤바의 너비 */
    }

    .scrollBar::-webkit-scrollbar-thumb {
        height: 30%;
        /* 스크롤바의 길이 */
        background: #cccccc;
        /* 스크롤바의 색상 */

        border-radius: 5px;
    }

    .scrollBar::-webkit-scrollbar-track {
        background: rgba(33, 122, 244, .1);
        /*스크롤바 뒷 배경 색상*/
    }
</style>
<aside class="bd-sidebar scrollBar">
    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="bdSidebar" aria-labelledby="bdSidebarOffcanvasLabel">

        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title"
                id="bdSidebarOffcanvasLabel">
                {{-- 학습목차 --}}
            </h5>
            <button type="button" class="btn-close"
                data-bs-dismiss="offcanvas" aria-label="Close"
                data-bs-target="#bdSidebar">
            </button>
        </div>

        <div class="offcanvas-body">
            {{$slot}}
        </div>
    </div>
</aside>
