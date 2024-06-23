<x-theme theme="admin.sidebar">
    <x-theme-layout>


            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Progress</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Progress</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->


            <div class="relative">
                <div class="absolute right-0 bottom-4">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>


            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Basic</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>

                                    {{-- preview 코드를 삽입합니다. --}}

                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    {!! xProgress(50) !!}

                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Label</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>

                                    <div class="mb-3 progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>

                                    {!! xProgress(75)->setLabel() !!}

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Height</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="mb-3 progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    {!! xProgress(60)->setHeight(15) !!}

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Backgrounds</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress ">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    {!! xProgress(60)->setColor("bg-success") !!}

                                    <div class="mb-3 progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="mb-3 progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-3 progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Multiple bars</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress">
                                        <div class="progress-bar " role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Striped</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    @...
                                </x-navtab-item>
                            </x-navtab>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Animated stripes</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-3 progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>


                        </x-card-body>
                    </x-card>
                </x-col-6>


                <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Progress Bars</h5>
                        <h6 class="card-subtitle text-muted">Examples for using Bootstrap custom progress bars.</h6>
                    </div>
                    <div class="card-body">
                        <x-navtab class="mb-3 nav-bordered">
                            <x-navtab-item class="show active" >

                                <x-navtab-link class="rounded-0 active">
                                    미리보기
                                </x-navtab-link>
                                {{-- preview 코드를 삽입합니다. --}}
                                <div class="mb-3 progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Default</div>
                                </div>

                                <div class="mb-3 progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Striped</div>
                                </div>

                                <div class="mb-3 progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Animated</div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stacked</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                </div>

                            </x-navtab-item>

                            <x-navtab-item >
                                <x-navtab-link class="rounded-0">
                                    코드보기
                                </x-navtab-link>
                                ...
                            </x-navtab-item>
                        </x-navtab>


                    </div>
                </div>
                </x-col-6>


            </x-row>


    </x-theme-layout>
</x-theme>
