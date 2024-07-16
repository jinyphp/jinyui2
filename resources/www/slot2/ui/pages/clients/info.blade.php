<x-card>
    <x-card-header>
        <div class="card-actions float-end">
            <div class="dropdown show">
                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <h5 class="card-title mb-0">Angelica Ramos</h5>
        <p>사용자의 정보를 요약하여 출력하는 page양식입니다.</p>
    </x-card-header>
    <x-card-body>

        <div class="row g-0">
            <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                <img src="/img/avatars/avatar-3.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
            </div>
            <div class="col-sm-9 col-xl-12 col-xxl-9">
                <strong>About me</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>

        <table class="table table-sm mt-2 mb-4">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>Angelica Ramos</td>
                </tr>
                <tr>
                    <th>Company</th>
                    <td>The Wiz</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>angelica@ramos.com</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>+1234123123123</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>
            </tbody>
        </table>

        <strong>Activity</strong>

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
    </x-card-body>
</x-card>
