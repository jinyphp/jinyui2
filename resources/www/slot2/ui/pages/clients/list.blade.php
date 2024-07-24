<x-card>
    <x-card-header class="pb-0">
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
        <h5 class="card-title mb-0">Clients</h5>
        테이블을 출력합니다.
    </x-card-header>
    <x-card-body>
        @php
            $datajson = '[
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"},
                {"image":"/img/avatars/avatar.jpg","name":"Garrett Winters","company":"Good Guys","email":"garrett@winters.com","status":"Active"}

            ]';    
        @endphp

        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach (json_decode($datajson,true) as $item)
                <tr>
                    <td><img src="{{$item['image']}}" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['company']}}</td>
                    <td>{{$item['email']}}</td>
                    <td><span class="badge bg-success">{{$item['status']}}</span></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </x-card-body>
</x-card>
<div class="card">


</div>