<x-theme theme="adminkit" class="bootstrap">
    <h1>CTable Component</h1>
    <x-jiny-box>
        <p>PHP Object 컴포넌트를 이용하여 테이블 코드를 작성합니다. 본 방식은 많은 양의 데이터를 기반으로 테이블 html코드를 자동으로 생성할 수 있는 방법입니다.</p>
    </x-jiny-box>
    
    {!! CTable()->setHeader(['a','b','c','d'])->addRow(['aaa','bbb','ccc','ddd'] )->addRow(['eee','fff','ggg','hhh'] ) !!}

</x-theme>