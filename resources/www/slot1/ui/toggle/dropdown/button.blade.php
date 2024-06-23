<div class="flex flex-row gap-2">

    <!-- Bootstrap 원본코드-->
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" 
            type="button" id="dropdownMenuButton1" 
            data-bs-toggle="dropdown" aria-expanded="false">
            Primary
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>

    <!-- Jinyui 테그-->
    <x-dropdown>
        <x-button dropdown secondary>Secondary</x-button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </x-dropdown>

    <!-- Jinyui 테그-->
    <x-dropdown>
        <x-button dropdown success>Success</x-button>                            
        <x-dropdown-menu aria-labelledby="dropdownMenuButton3">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </x-dropdown-menu>
    </x-dropdown>

    <!-- Jinyui 테그-->
    <x-dropdown>
        <x-button dropdown info>Info</x-button>                            
        <x-dropdown-menu aria-labelledby="dropdownMenuButton4">
            <x-dropdown-item href="#">Action</x-dropdown-item>
            <x-dropdown-item href="#">Another action</x-dropdown-item>
            <x-dropdown-item href="#">Something else here</x-dropdown-item>
        </x-dropdown-menu>
    </x-dropdown>

    <!-- Jinyui 테그-->
    <x-dropdown>
        <x-button dropdown warning>Warning</x-button>                            
        <x-dropdown-menu aria-labelledby="dropdownMenuButton5">
            <x-slot name="json">
                [{"href":"#","title":"링크1"},{"href":"#","title":"링크2"},{"href":"#","title":"링크3"}]
            </x-slot>                               
        </x-dropdown-menu>
    </x-dropdown>

    <!-- Jinyui 테그-->
    <x-dropdown>
        <x-button dropdown danger>Danger</x-button>                            
        <x-dropdown-menu aria-labelledby="dropdownMenuButton6">
            <x-slot name="json">
                [{"href":"#","title":"링크1"},{"href":"#","title":"링크2"},{"href":"#","title":"링크3"}]
            </x-slot>
            <x-dropdown-item href="#">Action</x-dropdown-item>
            <x-dropdown-item href="#">Another action</x-dropdown-item>
            <x-dropdown-item href="#">Something else here</x-dropdown-item>                            
        </x-dropdown-menu>
    </x-dropdown>

</div>