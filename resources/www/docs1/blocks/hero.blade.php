<x-www-app>

    <div class="container">

        @livewire('WidgetBlade', [
            'filename' => "blocks/hero/code1"
        ],1)

        @livewire('WidgetBlade', [
            'filename' => "blocks/hero/code2"
        ],2)

    </div>


</x-www-app>
