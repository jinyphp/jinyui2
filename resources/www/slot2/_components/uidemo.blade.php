<x-www-layout>
    <div class="wrapper">

        <x-www-ui-sidebar>
            <!-- 네비게이션 -->
            @livewire('Widget-SubMenu', [
                'code' => "uidemo",
                'widget' =>[
                    'view' =>[
                        'list' => "www::slot1._components.sidemenu_list",
                        'item' => "www::slot1._components.sidemenu_item"
                    ]
                ]
            ])
        </x-www-ui-sidebar>

        <div class="main">
            <main class="content">
                <div class="content-body">
                    {{$slot}}
                </div>
            </main>
        </div>

    </div>
</x-www-layout>
