<ul id="{{$target_id}}"
    class="sidebar-dropdown list-unstyled collapse"
    style="padding-left:1rem;"
    data-bs-parent="#sidebar">

    @foreach($items as $item)
    <li class="sidebar-item">
        <a class="sidebar-link" href="javascript:void(0);"
            wire:click="goToPage($event.shiftKey,'{{$item['id']}}')">
            @if(isset($item['name']))
                {{$item['name']}}
            @endif
        </a>

        {{-- 재귀호출 --}}
        @if(isset($item['items']))
            @include($viewListItem,['items' => $item['items']])
        @endif

    </li>
    @endforeach

</ul>
