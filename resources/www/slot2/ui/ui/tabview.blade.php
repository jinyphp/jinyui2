<script>

</script>
<x-jiny-theme theme="adminkit" class="bootstrap">
    <x-main>
        <x-main-content>

            <div class="container-fluid-fluid p-0">

                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">TabView</h1>
                </div>

                <section>
                    <p>tabView는 방대한 내용의 컨덴츠를 텝항목을 이용하여 분리하여 관리할 수 있는 ui 구현입니다.</p>
                    <p>jinyui는 html 마크업을 이용한 방식과, PHP Native 형태로 작성할 수 있는 코드를 같이 제공합니다.</p>
                    
                </section>

                <div class="row">

                    <div class="col-12 col-lg-6">
                        <h3>by Html Markup</h3>
                        <div id="tabs" class="tabview" x-data="{tab:'userTab2'}">
                            <ul class="nav">
                                <li :class="{'active' : tab === 'userTab'}" class=""><a id="tab_userTab"
                                        @click.prevent="tab='userTab'" href="#userTab">User_userTab</a></li>
                                <li :class="{'active' : tab === 'userTab2'}" class="active"><a
                                        id="tab_userTab2" @click.prevent="tab='userTab2'"
                                        href="#userTab2">User2_userTab2</a></li>
                            </ul>
                            <div x-show="tab === 'userTab'" id="userTab" style="display: none;">
                                aaa
                            </div>
                            <div x-show="tab === 'userTab2'" id="userTab2">
                                bbb
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <h3>by Object Coding</h3>

                        {!! CTabView()
                            ->setSelected('userTab')
                            ->addTab('userTab', __('User'), "aaa")
                            ->addTab('userTab2', __('User2'), "bbb")
                        !!}

                    </div>
                </div>

            </div>

        </x-main-content>
    </x-main>
</x-jiny-theme>
