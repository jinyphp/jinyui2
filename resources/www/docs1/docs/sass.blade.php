<x-www-app>
    <x-www-layout2>
        @livewire('WidgetTitle', [
        'filename' => 'docs/sass/title',
        ])
        <x-www-preview>
            <p>
                변수, 맵, 믹스인 등을 활용한 소스의 Sass 파일을 이용합니다.
            </p>
        </x-www-preview>
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/directory',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/directory2',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/importing',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/importing1',
        ])
        <x-www-preview>
            <p>
                이 설정이 완료되면, custom.scss 안에 있는 Sass 변수나 맵을 변경할 수 있습니다. 그리고 필요에 따라 // Optional 섹션에 Bootstrap 일부를 추가할 수도
                있습니다. 시작은 우리의
                bootstrap.scss 파일에서 전체 가져오기 스택을 사용하기를 추천합니다.
            </p>
        </x-www-preview>
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/compile',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/include',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/default',
        ])
        @livewire('WidgetText', [
        'filename' => 'components/sass/loop',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/map',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/map2',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/map3',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/map4',
        ])
        @livewire('WidgetText', [
        'filename' => 'components/sass/key',
        ])
        @livewire('WidgetText', [
        'filename' => 'components/sass/func',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/color',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/color1',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/color2',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/contrast2',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/contrast1',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/contrast3',
        ])
        @livewire('WidgetText', [
        'filename' => 'components/sass/svg',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/plus1',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/plus2',
        ])
        @livewire('WidgetText', [
        'filename' => 'components/sass/mixin',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/scheme',
        ])
        @livewire('WidgetOnlyCode', [
        'filename' => 'components/sass/scheme1',
        ])
    </x-www-layout2>
</x-www-app>