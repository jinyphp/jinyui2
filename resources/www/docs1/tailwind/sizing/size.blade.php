<x-www_layout2>
    @livewire('WidgetTitle', [
        'filename' => "sizing_size_title"])
        @livewire('WidgetCode-Component', [
          'filename' => "sizing_size_basic_Fixed"])  
          @livewire('WidgetCode-Component', [
            'filename' => "sizing_size_basic_percentage"])
            @livewire('WidgetCode-Component', [
              'filename' => "sizing_size_basic_resetting"])          
          @livewire('WidgetCode-Component', [
            'filename' => "sizing_size_apply"])
</x-www_layout2>