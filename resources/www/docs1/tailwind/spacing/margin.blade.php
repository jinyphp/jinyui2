<x-www_layout2>
  @livewire('WidgetTitle', [
  'filename' => 'layout_margin_title',
  ])

  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_single'])
  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_horizontal'])
  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_vertical'])
  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_all'])
  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_negative'])
  @livewire('WidgetCode-Component', ['filename' => 'utility/spacing/margin/basic_logical'])

  @livewire('WidgetCode-Component', [
  'filename' => 'utility/spacing/margin/apply',
  ])

</x-www_layout2>