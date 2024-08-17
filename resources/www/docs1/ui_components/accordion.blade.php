<x-www-app>

    <x-www-layout>
        @livewire('WidgetTitle', [
            'filename' => 'components/accordion/code1',
        ])

        @livewire('WidgetText', [
            'filename' => 'components/accordion/works',
        ])

        @livewire('WidgetNote', [
            'filename' => 'components/accordion/about_note',
        ])

        @livewire('WidgetCode-Component', [
            'filename' => 'components/accordion/code2',
        ])

        @livewire('WidgetCode-Component', [
            'filename' => 'components/accordion/code3',
        ])

        @livewire('WidgetCode-Component', [
            'filename' => 'components/accordion/code4',
        ])

        @livewire('WidgetText', [
            'filename' => 'components/accordion/css',
        ])

        @livewire('WidgetText', [
            'filename' => 'components/accordion/accessibility',
        ])

        @livewire('WidgetOnlyCode', [
            'filename' => 'components/accordion/code5',
        ])

        @livewire('WidgetOnlyCode', [
            'filename' => 'components/accordion/sass',
        ])

    </x-www-layout>

</x-www-app>
