<x-www-docs>
    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Alerts</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Alerts</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Default alerts</h5>
                    <h6 class="card-subtitle text-muted">Alerts with contextual background color.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            <div class="mb-3">
                                {{-- @include("www::slot1.ui.ui.alert.default") --}}
                                <x-alert-primary>
                                    <strong>Hello there!</strong> A simple primary alert—check it out!
                                </x-alert-primary>

                                <x-alert-secondary>
                                    <strong>Hello there!</strong> A simple secondary alert—check it out!
                                </x-alert-secondary>

                                <x-alert-success>
                                    <strong>Hello there!</strong> A simple success alert—check it out!
                                </x-alert-success>

                                <x-alert-danger>
                                    <strong>Hello there!</strong> A simple danger alert—check it out!
                                </x-alert-danger>

                                <x-alert-warning>
                                    <strong>Hello there!</strong> A simple warning alert—check it out!
                                </x-alert-warning>

                                <x-alert-info>
                                    <strong>Hello there!</strong> A simple info alert—check it out!
                                </x-alert-info>



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
            </x-card>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Icon alerts</h5>
                    <h6 class="card-subtitle text-muted">Alerts with icon and background color.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            <div class="mb-3">
                                @include("www::slot1.ui.ui.alert.icon")
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
            </x-card>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Outline alerts</h5>
                    <h6 class="card-subtitle text-muted">Alerts with contextual icon background.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            <div class="mb-3">
                                @include("www::slot1.ui.ui.alert.outline")
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
            </x-card>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Colored outline alerts</h5>
                    <h6 class="card-subtitle text-muted">Alerts with contextual outline color.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            <div class="mb-3">
                                @include("www::slot1.ui.ui.alert.color")
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
            </x-card>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Alerts with additonal content</h5>
                    <h6 class="card-subtitle text-muted">Alerts with large contents.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            @include("www::slot1.ui.ui.alert.message")

                        </x-navtab-item>

                        <x-navtab-item >
                            <x-navtab-link class="rounded-0">
                                코드보기
                            </x-navtab-link>
                            ...
                        </x-navtab-item>
                    </x-navtab>


                </div>
            </x-card>
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <x-card>
                <div class="card-header">
                    <h5 class="card-title">Alerts with buttons</h5>
                    <h6 class="card-subtitle text-muted">Alerts with actions.</h6>
                </div>
                <div class="card-body">
                    <x-navtab class="nav-bordered mb-3">
                        <x-navtab-item class="show active" >

                            <x-navtab-link class="rounded-0 active">
                                미리보기
                            </x-navtab-link>
                            {{-- preview 코드를 삽입합니다. --}}
                            @include("www::slot1.ui.ui.alert.confirm")

                        </x-navtab-item>

                        <x-navtab-item >
                            <x-navtab-link class="rounded-0">
                                코드보기
                            </x-navtab-link>

                        </x-navtab-item>
                    </x-navtab>

                </div>
            </x-card>
        </div>
    </section>
</x-www-docs>

