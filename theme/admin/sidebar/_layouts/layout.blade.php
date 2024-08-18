<div class="wrapper">
    <x-theme-sidebar>
        {{-- 메뉴모듈 출력 --}}

        {{--
        @if(Module::has('Menus'))
            @livewire('menu-sidebar')
        @endif
        --}}
    </x-theme-sidebar>

    <div class="main">
        <x-theme-header></x-theme-header>
        <x-theme-main>
            {{$slot}}
        </x-theme-main>
        <x-theme-footer></x-theme-footer>
    </div>

</div>
