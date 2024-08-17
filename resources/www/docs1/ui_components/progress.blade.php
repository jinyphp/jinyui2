<x-www-app>

    <x-www-layout>
        @livewire('WidgetTitle', [
            'filename' => 'components/progress/title',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/howItWorks',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold">표시줄 크기 조정</h2>
        </x-www-preview>
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/width',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/height',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/label',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/label2',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/backgrounds',
        ])
        @livewire('WidgetNote', [
            'filename' => 'components/progress/backgrounds_note',
        ])

        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/backgrounds2',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/backgrounds3',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/multipleBars',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/striped',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/progress/animatedStripes',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold"> CSS </h2>
        </x-www-preview>
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/progress/variables',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/progress/sass',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/progress/keyframes',
        ])

    </x-www-layout>

</x-www-app>
