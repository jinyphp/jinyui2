<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                        	<li class="breadcrumb-item active">Vector</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Vector Maps</h1>
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

            <div class="row">
                <div class="col-12">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Jsvectormap</h5>
                            <h6 class="card-subtitle text-muted">A lightweight JavaScript library for creating interactive
                                maps.</h6>
                        </div>
                        <div class="card-body py-1">
                            <ul>
                                <li><a target="_blank" rel="noreferrer noopener"
                                        href="https://github.com/themustafaomar/jsvectormap">Documentation</a>
                                </li>
                                <li><a target="_blank" rel="noreferrer noopener"
                                        href="https://github.com/themustafaomar/jsvectormap">Available maps</a>
                                </li>
                            </ul>
                        </div>
                    </x-card>
                </div>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">World Map</h5>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.maps.vector.world")
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">USA Map</h5>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.maps.vector.usa")
                        </div>
                    </x-card>
                </x-col-6>
            </div>


        </x-www-uidemo>
