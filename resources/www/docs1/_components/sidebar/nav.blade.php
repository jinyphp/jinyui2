<nav class="docs-list list-group list-group-borderless" onclick="closeSidebar()">

    @foreach($rows as $item)
        @if(isset($item['header']) && $item['header'])
        <x-www_sidebar-header>
            {{$item['title']}}
        </x-www_sidebar-header>
        @else
        <x-www_sidebar-item :item="$item">
            {{$item['title']}}
        </x-www_sidebar-item>
        @endif
    @endforeach

</nav>
