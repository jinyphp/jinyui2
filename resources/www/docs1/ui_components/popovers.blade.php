<x-www-app>

    <x-www-layout>
        @livewire('WidgetTitle', [
            'filename' => 'components/popovers/title',
        ])
        @livewire('WidgetText', [
            'filename' => 'components/popovers/overview',
        ])
        @livewire('WidgetNote', [
            'filename' => 'components/popovers/overview_note',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold">예시</h2>
        </x-www-preview>
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/enablePopovers',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/popovers/livedemo',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/popovers/fourDirections',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/coustomContainer',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/coustomContainer2',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/coustomPopovers',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/popovers/coustomPopovers2',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/popovers/dismissOnNextClick',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/dismissOnNextClick2',
        ])
        @livewire('WidgetCode-Component', [
            'filename' => 'components/popovers/disabledElement',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold">CSS</h2>
        </x-www-preview>
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/variables',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/Sass',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/Usage',
        ])
        @livewire('WidgetNote', [
            'filename' => 'components/popovers/Useage_note',
        ])
        @livewire('WidgetText', [
            'filename' => 'components/popovers/option',
        ])
        @livewire('WidgetTableStyle1', [
            'filename' => 'components/popovers/optionTable',
        ])
        @livewire('WidgetNote', [
            'filename' => 'components/popovers/optionTable_note',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/USingFunction',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold">메소드</h2>
        </x-www-preview>
        @livewire('WidgetTableStyle2', [
            'filename' => 'components/popovers/methodTable',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/method',
        ])
        <x-www-preview>
            <h2 class="text-4xl font-bold">이벤트</h2>
        </x-www-preview>
        @livewire('WidgetTableStyle3', [
            'filename' => 'components/popovers/eventTable',
        ])
        @livewire('WidgetOnlyCode', [
            'filename' => 'components/popovers/event',
        ])



    </x-www-layout>

</x-www-app>
