<x-jinyui-theme theme="adminkit" class="bootstrap">
    <p>라이브와이어 데이터 테이블 실습</p>
    <p>컴포넌트 호출</p>

    <x-jinyui-form-filter>
        필터
    </x-jinyui-form-filter>

    <x-jinyui-card>
        <x-jinyui-table rule="test">
            ["aaa","bbb","ccc"]
        </x-jinyui-table>
    </x-jinyui-card>



    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary">
        Primary
    </button>

    <div class="modal fade" id="defaultModalPrimary" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Default modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <form>
                        <x-jiny-css::forms.hor>
                            <x-jiny-css::forms.label>
                                Email
                            </x-jiny-css::forms.label>
                            <x-jiny-css::forms.item>
                                <input type="email" class="form-control" placeholder="Email">
                            </x-jiny-css::forms.item>
                        </x-jiny-css::forms.hor>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>







    <br><hr><br>

    <x-jinyui-card>
    <x-jiny-css::table.basic>
        <x-jiny-css::table.thead>
        </x-jiny-css::table.thead>
        <x-jiny-css::table.tbody>
        </x-jiny-css::table.tbody>
    </x-jiny-css::table.basic>
    </x-jinyui-card>

    <x-jinyui-card>
        <x-jiny-css::table.Striped>
            <x-jiny-css::table.thead>
            </x-jiny-css::table.thead>
            <x-jiny-css::table.tbody>
            </x-jiny-css::table.tbody>
        </x-jiny-css::table.Striped>
    </x-jinyui-card>

</x-jinyui-theme>
