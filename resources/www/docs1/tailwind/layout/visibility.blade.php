<x-www_layout2>
    @livewire('WidgetTitle', [
        'filename' => "layout_visibility_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "layout_visibility_basic_invisible"])    
          @livewire('WidgetCode-Component', [
            'filename' => "layout_visibility_basic_collapse"])    
          @livewire('WidgetCode-Component', [
            'filename' => "layout_visibility_basic_visible"])    
          @livewire('WidgetCode-Component', [
            'filename' => "layout_visibility_apply"])
        
</x-www_layout2>