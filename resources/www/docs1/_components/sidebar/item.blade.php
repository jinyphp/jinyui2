@if(isset($item['items']) && $item['items'])
    <div class="dropdown">
        <span
            class="list-group-item list-group-item-action
            justify-content-between dropdown-toggle pe-3 pe-none">
            {{$slot}}
        </span>
        <ul id="anchorNav"
            class="nav nav-underline flex-column border-start ms-2 my-2"
            style="gap: .25rem;">
            @foreach($item['items'] as $sub)
                @if ($loop->first)
                <li class="nav-item">
                    <a class="nav-link fw-normal active"
                        href="javascript:void(0);">
                        {{$sub['title']}}
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link fw-normal"
                        href="javascript:void(0);">
                        {{$sub['title']}}
                    </a>
                </li>
                @endif
            @endforeach
            {{--
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-static-icons">Static icons</a></li>
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-animated-icons">Animated icons</a></li>
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-market">Market buttons</a></li>
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-shapes">Shapes</a></li>
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-sizes">Sizes</a></li>
            <li class="nav-item"><a class="nav-link fw-normal"
                    href="#buttons-states">States</a></li> --}}
        </ul>
    </div>
@else
    <div class="dropend">
        @if(isset($item['href']) && $item['href'])
        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3"
            href="{{$item['href']}}">
            {{$slot}}
        </a>
        @else
        <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle pe-3"
            href="javascript:void(0);">
            {{$slot}}
        </a>
        @endif
    </div>
@endif
