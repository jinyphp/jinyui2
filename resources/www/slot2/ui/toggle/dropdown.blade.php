
<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Toggle</a></li>
                        	<li class="breadcrumb-item active">Dropdown</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">펼침메뉴(Dropdown)</h1>
                            <p>Dropdown은 collapse 기능을 좀더 응용하여 여러개의 데이터를 묽어서 접어다 펼 수 있는 ui 화면 구현 기술입니다.</p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">단일버튼 펼침메뉴</h5>
                            <h6 class="card-subtitle text-muted">버튼을 이용하여 몊침메뉴를 제어합니다.</h6>
                        </x-card-header>
                        <x-card-body>

                            {{-- widget --}}
                            @include("www::slot1.docs.ui.docs.ui.widgets.preview",
                                ['code'=>"www::slot1.docs.ui.toggle.dropdown.button"]
                            )

                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">링크 펼침메뉴</h5>
                            <h6 class="card-subtitle text-muted">a링크를 이용하여 몊침메뉴를 제어합니다.</h6>
                        </x-card-header>
                        <x-card-body >
                            {{-- widget --}}
                            @include("www::slot1.docs.ui.docs.ui.widgets.preview",
                                ['code'=>"www::slot1.docs.ui.toggle.dropdown.link"]
                            )


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Icon</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            @include("www::slot1.docs.ui.toggle.dropdown.alram")
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">버튼 그룹 펼침기능</h5>
                            <h6 class="card-subtitle text-muted">a링크를 이용하여 몊침메뉴를 제어합니다.</h6>
                        </x-card-header>
                        <x-card-body class="flex flex-row gap-2">
                            @include("www::slot1.docs.ui.toggle.dropdown.group")

                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Split button</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body class="flex flex-row gap-2">
                            @include("www::slot1.docs.ui.toggle.dropdown.split")

                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Sizing</h5>
                            <h6 class="card-subtitle text-muted"></h6>

                        </x-card-header>
                        <x-card-body class="flex flex-row gap-2">
                            @include("www::slot1.docs.ui.toggle.dropdown.size")

                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Dark dropdowns</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            @include("www::slot1.docs.ui.toggle.dropdown.dark")

                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">nav</h5>
                            <h6 class="card-subtitle text-muted">네비게이션 바에서도 펼침메뉴를 같이 사용할 수 있습니다.</h6>
                        </x-card-header>
                        <x-card-body>
                            @include("www::slot1.docs.ui.toggle.dropdown.nav")
                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">direction UP</h5>
                            <h6 class="card-subtitle text-muted">.</h6>
                        </x-card-header>
                        <x-card-body>
                            @include("www::slot1.docs.ui.toggle.dropdown.direction")

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Dropdowns</h5>
                            <h6 class="card-subtitle text-muted">Toggle contextual overlays for displaying lists of links.</h6>
                        </x-card-header>
                        <x-card-body>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Basic:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-basic")
                                </div>
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Active:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-active")
                                </div>
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Disabled:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-disable")
                                </div>

                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Dropdowns</h5>
                            <h6 class="card-subtitle text-muted">Toggle contextual overlays for displaying lists of links.</h6>
                        </x-card-header>
                        <x-card-body>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Header:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-header")
                                </div>
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Dividers:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-devider")

                                </div>
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
                                    <p class="mb-0">Text:</p>
                                    @include("www::slot1.docs.ui.toggle.dropdown.menu-text")
                                </div>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>




            </x-row>

        </x-www-uidemo>
