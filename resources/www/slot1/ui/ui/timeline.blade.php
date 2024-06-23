<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">TimeLine</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">TimeLine</h1>
                            <p></p>
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
                            <h4 class="header-title">Json Data</h4>
                            <p class="text-muted font-14">
                                지니UI는 json 데이터릴 이용하여 Timeline 을 쉽게 구현할 수 있습니다. jsondata는 직접 코드에 삽입 또는 외부의 데이터베이스에서 받아서 동적으로 구현할 수 있습니다.
                                code탭을 클릭하시면 작성한 html소스 코드를 보실 수 있습니다.
                            </p>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        Preview
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="basic">
                                        @include("www::slot1.docs.ui.ui.timelines.jsondata")
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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h4 class="header-title">구) HTML 코드 예시</h4>
                            <p class="text-muted font-14">
                                순수한 HTML 코드를 이용하여 구한한 Timeline 입니다. code탭을 클릭하시면 작성한 html소스 코드를 보실 수 있습니다.
                            </p>
                        </x-card-header>
                        <x-card-body>

                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        Preview
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="basic">
                                        @include("www::slot1.docs.ui.ui.timelines.basic")
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
                </x-col-6>

            </x-row>


        </x-www-uidemo>
