<x-www_layout2>
    @livewire('WidgetTitle', [
        'filename' => 'layout_margin_title',
    ])

    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_single'])
    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_horizontal'])
    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_vertical'])
    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_all'])
    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_negative'])
    @livewire('WidgetCode-Component', ['filename' => 'spacing_margin_basic_logical'])

    @livewire('WidgetCode-Component', [
        'filename' => 'spacing_margin_apply',
    ])

</x-www_layout2>
