<x-theme theme="admin.sidebar">
    <x-theme-layout>

            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Spinners</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Spinners</h1>
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
                            <h5 class="card-title">Spinners</h5>
                            <h6 class="card-subtitle text-muted">Indicate the loading state of a component with Bootstrap spinners.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-2">
                                        <div class="spinner-border text-dark me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-primary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-secondary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-danger me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-warning me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border text-info me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="spinner-border spinner-border-sm text-dark me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-primary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-secondary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-danger me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-warning me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-border spinner-border-sm text-info me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
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
                            <h5 class="card-title">Spinners</h5>
                            <h6 class="card-subtitle text-muted">Indicate the loading state of a component with Bootstrap spinners.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="mb-2">
                                        <div class="spinner-grow text-dark me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-primary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-secondary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-warning me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-info me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="spinner-grow spinner-grow-sm text-dark me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-primary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-secondary me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-danger me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-warning me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <div class="spinner-grow spinner-grow-sm text-info me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
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
            </x-row>

    </x-theme-layout>
</x-theme>
