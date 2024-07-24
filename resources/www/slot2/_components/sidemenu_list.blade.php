<ul class="sidebar-nav">
@foreach ($rows as $item)
    {{-- 메뉴 타이틀--}}
    @if(isset($item['title']) && $item['title'])
    <li class="sidebar-header"
        wire:click="goToPage($event.shiftKey,'{{$item['id']}}')">
        @if(isset($item['name']))
        {{$item['name']}}
        @endif
    </li>

    @else
    {{-- 메뉴 아이템 --}}
    <li class="sidebar-item">
        @php
            $id = "left-menu-".$item['id'];
        @endphp

        {{-- 서브메뉴가 없는 경우 --}}
        @if(!isset($item['items']))
            @if(isset($item['link']))
                <a href="javascript:void(0);"
                    data-bs-target="#{{$id}}"
                    data-bs-toggle="collapse"
                    class="sidebar-link collapsed"
                    aria-expanded="false"
                    wire:click="goToPage($event.shiftKey,'{{$item['id']}}')">
                    @if(isset($item['name']))
                        <span class="align-middle">
                            {{$item['name']}}
                        </span>
                    @endif
                </a>
            @else
                <strong
                    data-bs-target="{{$id}}"
                    data-bs-toggle="collapse"
                    class="sidebar-link collapsed"
                    aria-expanded="false"
                    wire:click="shiftEdit($event.shiftKey,'{{$item['id']}}')">
                    @if(isset($item['name']))
                        <span class="align-middle">
                            {{$item['name']}}
                        </span>
                    @endif
                </strong>
            @endif

        @else
        {{-- 서브메뉴가 있는 경우 --}}
            <a href="javascript:void(0);"
                    data-bs-target="#{{$id}}"
                    data-bs-toggle="collapse"
                    class="sidebar-link collapsed"
                    aria-expanded="false"
                    wire:click="shiftEdit($event.shiftKey,'{{$item['id']}}')">
                    @if(isset($item['name']))
                        <span class="align-middle">
                            {{$item['name']}}
                        </span>
                    @endif
                </a>

            @include($viewListItem,[
                'items' => $item['items'],
                'target_id' => $id
            ])
        @endif
    </li>
    @endif

@endforeach
</ul>
