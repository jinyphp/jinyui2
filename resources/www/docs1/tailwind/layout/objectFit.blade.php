<x-www_layout2>
    @livewire('WidgetTitle', [
        'filename' => "layout_objectFit_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "layout_objectFit_basic_cover"])    
          @livewire('WidgetCode-Component', [
            'filename' => "layout_objectFit_basic_contain"])
            @livewire('WidgetCode-Component', [
              'filename' => "layout_objectFit_basic_stretch"])
              @livewire('WidgetCode-Component', [
                'filename' => "layout_objectFit_basic_scaleDown"])
                @livewire('WidgetCode-Component', [
                  'filename' => "layout_objectFit_basic_none"])                
          @livewire('WidgetCode-Component', [
            'filename' => "layout_objectFit_apply"])
</x-www_layout2>