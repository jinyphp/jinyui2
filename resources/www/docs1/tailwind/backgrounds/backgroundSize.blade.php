<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "layout_backgroundSize_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "backgrounds_backgroundSize_basic_auto"])    
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundSize_basic_cover"])  
            @livewire('WidgetCode-Component', [
              'filename' => "backgrounds_backgroundSize_basic_contain"])  
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundSize_apply"])

</x-www-layout>