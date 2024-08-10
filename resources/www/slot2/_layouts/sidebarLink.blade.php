@php
$jsonData = '{
"items": {
"1": {
"code": "navlink",
"name": "accordion",
"navlink": "/ui_components/accordion",
"ref": 0,
"level": 1,
"created_at": "2024-05-15 10:40:45",
"updated_at": "2024-05-15 10:40:45",
"id": 1
},
"2": {
"code": "navlink",
"name": "alert",
"navlink": "/ui_components/alert",
"ref": 0,
"level": 1,
"created_at": "2024-05-15 14:39:33",
"updated_at": "2024-05-15 14:39:33",
"id": 2
}
}
}';

$items = json_decode($jsonData, true)['items'];
@endphp

<li>
    @foreach($items as $item)
    <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
    <a href="{{ $item['navlink'] }}"
        class="group flex gap-x-6 rounded-md p-2 text-sm font-semibold leading-6 text-black {{ request()->is(ltrim($item['navlink'], '/')) ? 'bg-gray-300' : '' }}">

        {{ $item['name'] }}
    </a>
    @endforeach
</li>