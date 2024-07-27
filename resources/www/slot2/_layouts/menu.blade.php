<!-- 네비게이션 -->
@livewire('Widget-TopMenu', [
    'code' => "topmenu",
    'widget' =>[
        'view' =>[
            'layout' => "www::slot1._layouts.topmenu.layout",
            'list' => "www::slot1._layouts.topmenu.list",
            'item' => "www::slot1._layouts.topmenu.item"
        ]
    ]
])

