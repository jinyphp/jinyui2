<x-www_layout2>
    @livewire('WidgetTitle', [
        'filename' => "layout_backgroundRepeat_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "backgrounds_backgroundRepeat_basic_repeat"])    
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundRepeat_basic_norepeat"])    

            @livewire('WidgetCode-Component', [
              'filename' => "backgrounds_backgroundRepeat_basic_horizontal"])    
              @livewire('WidgetCode-Component', [
                'filename' => "backgrounds_backgroundRepeat_basic_vertical"])    
                
          @livewire('WidgetCode-Component', [
            'filename' => "backgrounds_backgroundRepeat_apply"])
        
</x-www_layout2>