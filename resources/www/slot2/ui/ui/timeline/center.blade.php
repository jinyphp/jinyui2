<x-row>
    <x-col>
        <x-card>
            <x-card-header>
                <h4 class="header-title">Center</h4>
                <p class="text-muted font-14">
                    중앙 타임라인을 기준으로 좌/우에 시간이력을 출력합니다.
                </p>
            </x-card-header>
            <x-card-body>

                <x-navtab class="nav-bordered mb-3">
                    <x-navtab-item class="show active" >
                        <x-navtab-link class="rounded-0 active">
                            Preview
                        </x-navtab-link>
                        {{-- preview 코드를 삽입합니다. --}}
                        <div class="hyper">
                            @include("www::slot1.docs.ui.ui.timelines.center")
                        </div>

                    </x-navtab-item>

                    <x-navtab-item >
                        <x-navtab-link class="rounded-0">
                            Code
                        </x-navtab-link>
                        code...
                    </x-navtab-item>

                    <x-navtab-item >
                        <x-navtab-link class="rounded-0">
                            Description
                        </x-navtab-link>
                        description...
                    </x-navtab-item>
                </x-navtab>



            </x-card-body>
        </x-card>
    </x-col>
</x-row>
