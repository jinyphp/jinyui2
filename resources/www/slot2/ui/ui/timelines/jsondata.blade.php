@php
    $timeline = '[
        {"time":"30m ago","title":"Signed out","description":"Nam pretium turpis et arcu. Duis arcu tortor, suscipit..."},
        {"time":"2h ago","title":"Created invoice #1204","description":"Sed aliquam ultrices mauris. Integer ante arcu..."},
        {"time":"3h ago","title":"Discarded invoice #1147","description":"Nam pretium turpis et arcu. Duis arcu tortor, suscipit..."},
        {"time":"3h ago","title":"Signed in","description":"Curabitur ligula sapien, tincidunt non, euismod vitae..."},
        {"time":"2d ago","title":"Signed up","description":"Sed aliquam ultrices mauris. Integer ante arcu..."}
    ]';
@endphp
<ul class="timeline mt-2 mb-0">
    @foreach (json_decode($timeline, true) as $item)
        <li class="timeline-item">
            <strong>{{$item['title']}}</strong>
            <span class="float-end text-muted text-sm">{{$item['time']}}</span>
            <p>{{$item['description']}}</p>
        </li>
    @endforeach
</ul>