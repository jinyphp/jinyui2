<x-www-layout>
    @livewire('WidgetTitle', [
    'filename' => "component_alert_code1"])

    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code2"])

    <p>접근성 팁: 색상을 사용하여 의미를 추가하면 시각적 표시만 제공되므로 화면 리더와 같은 보조 기술 사용자에게는 의미가 전달되지 않습니다. 콘텐츠 자체에서 의미가 명확하게 드러나거나(예: 충분한 색상
        대비가 있는 가시 텍스트) .visually-hidden 클래스로 숨겨진 추가 텍스트 등 대체 수단을 통해 의미가 포함되었는지 확인하시기 바랍니다.</p>

    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code3"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_js"])
    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code5"])
    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code6"])
    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code7"])
    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code8"])
    @livewire('WidgetCode-Component', [
    'filename' => "component_alert_code9"])

    <p>경고창이 해제되면 해당 요소는 페이지 구조에서 완전히 제거됩니다. 키보드 사용자가 닫기 버튼을 통해 경고창을 해제하면 포커스가 갑자기 사라지고 브라우저에 따라서는 페이지나 문서의 선두에 리셋됩니다.
        그래서 closed.bs.alert 이벤트를 리슨하고 focus()를 페이지 내의 가장 적절한 위치에 프로그램적으로 설정하는 JavaScript를 추가할 것을 권장합니다. 보통은 포커스를 받지 않는
        상호 작용할 수 없는 요소에 포커스를 이동시키는 경우는, 그 요소에 tabindex="-1"을 추가하도록 해 주세요.</p>
    @livewire('WidgetText', [
    'filename' => "component_alert_css"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code11"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code12"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code13"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code14"])
    @livewire('WidgetText', [
    'filename' => "component_alert_javascript"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code15"])
    <p>For the sole purpose of dismissing an alert, it isn’t necessary to initialize the component manually via the JS
        API. By making use of data-bs-dismiss="alert", the component will be initialized automatically and properly
        dismissed.

        See the triggers section for more details.</p>
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code16"])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code17"])
    @livewire('WidgetText', [
    'filename' => "component_alert_note"])

    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_methods"])
    @livewire('WidgetText', [
    'filename' => "component_alert_data"])
    @livewire('WidgetTableStyle1', [
    'filename' => "component_alert_methods_table"
    ])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code18"])
    @livewire('WidgetText', [
    'filename' => "component_alert_code19"])
    @livewire('WidgetTableStyle1', [
    'filename' => "component_alert_methods_table_events"
    ])
    @livewire('WidgetOnlyCode', [
    'filename' => "component_alert_code20"])
</x-www-layout>