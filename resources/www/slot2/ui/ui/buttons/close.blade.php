<x-theme theme="admin.sidebar">
    <x-theme-layout>

		<x-container-fluid>
			<!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">                        
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Button</a></li>
                        	<li class="breadcrumb-item active">Close</li>
                    	</ol>                        
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Button close</h1>
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
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">close</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body">
							<p>basic</p>
							<button type="button" class="btn-close" aria-label="Close"></button>
	
							<p>disable</p>
							<button type="button" class="btn-close" disabled aria-label="Close"></button>
	
						</div>
					</div>
				</div>
	
				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">White variant</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body bg-black">
							<button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
							<button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
	
						</div>
					</div>
				</div>
		
			</div>

		</x-container-fluid>
	</x-theme-layout>
</x-theme>    