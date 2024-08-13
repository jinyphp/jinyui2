<x-www-layout>
    @livewire('WidgetTitle', [
        'filename' => "sizing_width_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "sizing_width_basic_fixed"])
          @livewire('WidgetCode-Component', [
            'filename' => "sizing_width_basic_percentage"])      
            @livewire('WidgetCode-Component', [
              'filename' => "sizing_width_basic_viewPort"])  
          @livewire('WidgetCode-Component', [
            'filename' => "sizing_width_apply"])
        
</x-www-layout>