<x-navtab class="nav-bordered mb-3">
    <x-navtab-item class="show active" >

        <x-navtab-link class="rounded-0 active">
            미리보기
        </x-navtab-link>
        {{-- preview 코드를 삽입합니다. --}}
        @include($code)									
        
    </x-navtab-item>

    <x-navtab-item >
        <x-navtab-link class="rounded-0">
            코드보기
        </x-navtab-link> 
        @codeFile($code)
    </x-navtab-item>
</x-navtab>