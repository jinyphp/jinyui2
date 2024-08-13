<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "layout_backgroundAttachment_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "backgrounds_backgroundAttachment_basic_fixed"])    
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundAttachment_basic_local"])  
            @livewire('WidgetCode-Component', [
              'filename' => "backgrounds_backgroundAttachment_basic_scroll"])  
              
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundAttachment_apply"])
</x-www-layout>