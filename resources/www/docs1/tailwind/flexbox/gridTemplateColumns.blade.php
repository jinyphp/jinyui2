<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "layout_gridTemplateColumns_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "flexbox_gridTemplateColumns_basic"]) 
          @livewire('WidgetCode-Component', [
            'filename' => "flexbox_gridTemplateColumns_basic_subGrid"])    
          @livewire('WidgetCode-Component', [
            'filename' => "flexbox_gridTemplateColumns_apply"])
        
</x-www-layout>