<div class="cd-sidebar"
    data-filter-list="{&quot;searchClass&quot;: &quot;docs-search&quot;, &quot;listClass&quot;: &quot;docs-list&quot;, &quot;valueNames&quot;: [&quot;list-group-item&quot;]}">
    <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1"
        aria-labelledby="sidebarNavLabel">

        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="sidebarNavLabel">
                Browse docs
            </h5>
            <button type="button" class="btn-close"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarNav"
                aria-label="Close">
            </button>
        </div>

        {{-- 메뉴 검색 --}}
        <x-www_sidebar-search>
            Quick search..
        </x-www_sidebar-search>

        <x-www_sidebar-offcanvas>
            {{-- 메뉴 목록--}}
            <x-www_sidebar-nav :rows="$rows">

            </x-www_sidebar-nav>
        </x-www_sidebar-offcanvas>
    </div>
</div>
