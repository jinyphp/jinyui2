<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "layout_boxSizing_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "layout_boxSizing_basic"]) 
          @livewire('WidgetCode-Component', [
            'filename' => "layout_boxSizing_basic_Excluding"])     
          @livewire('WidgetCode-Component', [
            'filename' => "layout_boxSizing_apply"])
        
</x-www-layout>