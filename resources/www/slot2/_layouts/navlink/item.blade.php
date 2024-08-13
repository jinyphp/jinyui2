<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
    @foreach($items as $item)
    <li>
        <a class="dropdown-item" href="javascript:void(0);"
            wire:click="goToPage($event.shiftKey,'{{$item['id']}}')">
            @if(isset($item['name']))
                {{$item['name']}}
            @endif
        </a>
    </li>
    @endforeach
</ul>
