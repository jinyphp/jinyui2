<x-theme theme="admin.sidebar">
    <x-theme-layout>

            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        	<li class="breadcrumb-item active">Basics</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Basics</h1>
                            <p>

                            </p>
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

            {{--
            <div class="row">
                <div class="col-12 col-xl-6">
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Basic Table</h5>
                            <h6 class="card-subtitle text-muted">Using the most basic table markup, here’s how .table-based tables look in Bootstrap.
                            </h6>
                        </x-card-header>
                        <x-card-body>
                            <x-table>
                                <x-table-head>
                                    <x-slot name="json">
                                        [
                                            {
                                                "title":"name",
                                                "style":"width:40%;"
                                            },
                                            {
                                                "title":"Phone Number"
                                            },
                                            {
                                                "title":"Date of Birth"
                                            },
                                            {
                                                "title":"Actions"
                                            }
                                        ]
                                    </x-slot>
                                </x-table-head>
                                <x-table-body></x-table-body>
                            </x-table>
                        </x-card-body>

                    </x-card>
                </div>

                <div class="col-12 col-xl-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Striped Rows</h5>
                            <h6 class="card-subtitle text-muted">Use <code>.table-striped</code> to add zebra-striping to any table row within the
                                <code>&lt;tbody&gt;</code>.</h6>
                        </div>
                        <x-table striped>
                            <x-table-head>
                                <th style="width:40%;">Name</th>
                                <th style="width:25%">Phone Number</th>
                                <th style="width:25%">Date of Birth</th>
                                <th>Actions</th>
                            </x-table-head>
                            <x-table-body></x-table-body>
                        </x-table>
                    </x-card>
                </div>

                <div class="col-12 col-xl-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Condensed Table</h5>
                            <h6 class="card-subtitle text-muted">Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                            </h6>
                        </div>
                        <x-table condensed>
                            <x-table-head></x-table-head>
                            <x-table-body></x-table-body>
                        </x-table>
                    </x-card>
                </div>

                <div class="col-12 col-xl-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Hoverable Rows</h5>
                            <h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
                                <code>&lt;tbody&gt;</code>.</h6>
                        </div>


                        <x-table hoverable>
                            <x-table-head></x-table-head>
                            <x-table-body></x-table-body>
                        </x-table>
                    </x-card>
                </div>

                <div class="col-12 col-xl-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Bordered Table</h5>
                            <h6 class="card-subtitle text-muted">Add <code>.table-bordered</code> for borders on all sides of the table and cells.</h6>
                        </div>
                        <x-table bordered>
                            <x-table-head></x-table-head>
                            <x-table-body></x-table-body>
                        </x-table>
                    </x-card>
                </div>

                <div class="col-12 col-xl-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Contextual Classes</h5>
                            <h6 class="card-subtitle text-muted">Use contextual classes to color table rows or individual cells.</h6>
                        </div>
                        <x-table contextual>
                            <x-table-head></x-table-head>
                            <x-table-body></x-table-body>
                        </x-table>
                    </x-card>
                </div>

                <div class="col-12">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title">Always responsive</h5>
                            <h6 class="card-subtitle text-muted">Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling
                                tables.</h6>
                        </div>
                        <div class="table-responsive">
                            <x-table responsive>
                                <x-table-head></x-table-head>
                                <x-table-body></x-table-body>
                            </x-table>
                        </div>
                    </x-card>
                </div>

            </div>
            --}}


    </x-theme-layout>
</x-theme>
