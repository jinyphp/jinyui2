<x-www-app>

    <x-www-layout>
        @livewire('WidgetTitle', [
            'filename' => 'components/scrollspy/title',
        ])
        @livewire('WidgetText', [
            'filename' => 'components/scrollspy/howItWorks',
        ])
        <h2>Examples</h2>
        @livewire('WidgetCode-Component', [
            'filename' => 'components/scrollspy/navbar',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/scrollspy/nestedNav',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/scrollspy/listGroup',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/scrollspy/simpleAnchors',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/scrollspy/NonVisibleElements',
        ])
        <h2>Usage</h2>
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/scrollspy/viaDataAttributes',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/scrollspy/viaJavaScript',
        ])
        @livewire('WidgetText', [
            'filename' => 'components/scrollspy/option',
        ])
        @livewire('WidgetTableStyle1', [
            'filename' => 'components/scrollspy/optionTable',
        ])
        @livewire('WidgetTableStyle2', [
            'filename' => 'components/scrollspy/methodTable',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/scrollspy/method',
        ])
        @livewire('WidgetTableStyle3', [
            'filename' => 'components/scrollspy/eventTable',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/scrollspy/event',
        ])
    </x-www-layout>

</x-www-app>
