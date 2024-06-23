<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Chart</a></li>
                        	<li class="breadcrumb-item active">Chart.js</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Chart.js</h1>
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
                <div class="col-12 col-lg-6">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title">Line Chart</h5>
                            <h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.line")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Bar Chart</h5>
                            <h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.bar")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Doughnut Chart</h5>
                            <h6 class="card-subtitle text-muted">Doughnut charts are excellent at showing the relational proportions between data.</h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.doughnut")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Pie Chart</h5>
                            <h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.pie")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Radar Chart</h5>
                            <h6 class="card-subtitle text-muted">A radar chart is a way of showing multiple data points and the variation between them.
                            </h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.rader")
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Polar Area Chart</h5>
                            <h6 class="card-subtitle text-muted">Polar area charts are similar to pie charts, but each segment has the same angle.</h6>
                        </div>
                        <div class="card-body">
                            @include("www::slot1.docs.ui.charts.chartjs.polar")
                        </div>
                    </div>
                </div>
            </div>


        </x-container-fluid>
    </x-main-content>
</x-theme>






