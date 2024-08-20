<div>
    <h2> 객체 사용 </h2>
    @php

        // Select 태그 생성
        $select = new \Jiny\Html\Form\CSelect('fruits');
        $select->addOption('Apple', 'apple');
        $select->addOption('Banana', 'banana');
        $select->addOption('Cherry', 'cherry');

        $button = new \Jiny\Html\CButton('myButton', 'Click Me!');


        $disablebutton = new \Jiny\Html\CButton('myButton', "Can't Click Me!");
        $disablebutton->setEnabled(false);

    @endphp

    {!!$select!!}
    {!!$button!!}
    {!!$disablebutton!!}

</div>


<div>
    <h2> HTML 코드를 이용 </h2>

    <select name="fruits" id="fruits">
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="cherry">Cherry</option>
    </select>

    <button type="button">Click Me!</button>
    <button type="button" disabled>Can't Click Me!</button>
</div>