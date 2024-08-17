<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => 'components/placeholders/title',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/Intro',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/example',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/howItWorks',
    ])
    @livewire('WidgetNote', [
        'filename' => 'components/placeholders/howItWorks_note',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/width',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/color',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/sizing',
    ])
    @livewire('WidgetCode-Component', [
        'filename' => 'components/placeholders/animation',
    ])
    <x-www-preview>
        <h2 class="text-4xl font-bold">CSS</h2>
    </x-www-preview>
    @livewire('WidgetOnlyCode', [
        'filename' => 'components/placeholders/Sass',
    ])


</x-www-layout>
