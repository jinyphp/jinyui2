<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "layout_gridTemplateRows_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "flexbox_gridTemplateRows_basic"]) 
          @livewire('WidgetCode-Component', [
            'filename' => "flexbox_gridTemplateRows_basic_subGrid"])    
          @livewire('WidgetCode-Component', [
            'filename' => "flexbox_gridTemplateRows_apply"])
        
</x-www-layout>