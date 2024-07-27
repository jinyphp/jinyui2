{{-- 모바일 버튼 --}}
<button class="navbar-toggler" type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <x-www-menu>
        <!-- 라이브와이어 상단 메뉴 -->
    </x-www-menu>

    <form class="d-flex gap-2">
        <a href="/regist" class="btn btn-info">
            Regist
        </a>

        <a href="/login" class="btn btn-primary">
            Login
        </a>
    </form>
</div>
