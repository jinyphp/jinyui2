<x-card>
    <x-card-before>
        @if (isset($image))
            <img class="card-img-top" src="{{$image}}" alt="Unsplash">
        @endif        
    </x-card-before>    

    <x-card-header class="px-4 pt-4">
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
        <h5 class="card-title mb-0">Refactor backend templates</h5>
        <div class="badge bg-danger my-2">On hold</div>
    </x-card-header>

    <x-card-body class="px-4 pt-2">
        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat
            at massa.</p>

        <img src="/img/avatars/avatar-3.jpg" class="rounded-circle me-1" alt="Avatar" width="28" height="28">
        <img src="/img/avatars/avatar-2.jpg" class="rounded-circle me-1" alt="Avatar" width="28" height="28">
        <img src="/img/avatars/avatar.jpg" class="rounded-circle me-1" alt="Avatar" width="28" height="28">
    </x-card-body>



    <ul class="list-group list-group-flush">
        <li class="list-group-item px-4 pb-4">
            <p class="mb-2 font-weight-bold">Progress <span class="float-end">0%</span></p>
            <div class="progress progress-sm">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                </div>
            </div>
        </li>
    </ul>

</x-card>
