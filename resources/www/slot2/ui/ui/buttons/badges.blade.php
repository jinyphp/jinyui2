<x-theme theme="admin.sidebar">
    <x-theme-layout>

		<x-container-fluid>
			<!-- start page title -->
        	<x-row>
            	<x-col class="col-8">
                	<div class="page-title-box">
						<x-breadcrumb class="m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Button</a></li>
                        	<li class="breadcrumb-item active">Badges</li>
						</x-breadcrumb>
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Badges</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>  
        	<!-- end page title -->

			<div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="/docs/badges" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

			<x-row>
				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Background colors</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<x-badge class="bg-primary">Primary</x-badge>
							<x-badge class="bg-secondary">Secondary</x-badge>
							<x-badge class="bg-success">Success</x-badge>
							<x-badge class="bg-danger">Danger</x-badge>
							<x-badge class="bg-warning">Warning</x-badge>
							<x-badge class="bg-info">Info</x-badge>
		
							<x-badge class="bg-light text-dark">Light</x-badge>
							<x-badge class="bg-dark">Dark</x-badge>

							{!! xBadge("Dark",['class'=>"bg-dark"]) !!}
						</x-card-body>
					</x-card>
				</x-col-6>

				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Pill badges</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<x-badge class="bg-primary rounded-pill">Primary</x-badge>
							<x-badge class="bg-secondary rounded-pill">Secondary</x-badge>
							<x-badge class="bg-success rounded-pill">Success</x-badge>
							<x-badge class="bg-danger rounded-pill">Danger</x-badge>
							<x-badge class="bg-warning rounded-pill">Warning</x-badge>
							<x-badge class="bg-info rounded-pill">Info</x-badge>

							<x-badge class="rounded-pill bg-light text-dark">Light</x-badge>
							<x-badge class="rounded-pill bg-dark">Dark</x-badge>
						</x-card-body>
					</x-card>
				</x-col-6>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Light and outline</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">
							<!-- Lighten Badges -->
							<div class="mb-3">
								<x-badge class="primary lighten">Primary</x-badge>
								<x-badge class="secondary lighten">Secondary</x-badge>
								<x-badge class="success lighten">Success</x-badge>
								<x-badge class="danger lighten">Danger</x-badge>
								<x-badge class="warning lighten">Warning</x-badge>
								<x-badge class="info lighten">Info</x-badge>
								<x-badge class="light lighten">Light</x-badge>
								<x-badge class="dark lighten">Dark</x-badge>
							</div>
	
							<!-- Outline Badges -->
							<div class="mb-3">
								<x-badge class="outline primary">Primary</x-badge>
								<x-badge class="outline secondary">Secondary</x-badge>
								<x-badge class="outline success">Success</x-badge>
								<x-badge class="outline danger">Danger</x-badge>
								<x-badge class="outline warning">Warning</x-badge>
								<x-badge class="outline info">Info</x-badge>
								<x-badge class="outline light">Light</x-badge>
								<x-badge class="outline dark">Dark</x-badge>
							</div>
						</div>
					</div>
				</div>


				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Indicator</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<div class="mb-3">
								<x-indicator class="bg-primary rounded-pill">1</x-indicator>
								<x-indicator class="bg-secondary rounded-pill">2</x-indicator>
								<x-indicator class="bg-success rounded-pill">3</x-indicator>
								<x-indicator class="bg-danger rounded-pill">4</x-indicator>
								<x-indicator class="bg-warning rounded-pill">5</x-indicator>
								<x-indicator class="bg-info rounded-pill">6</x-indicator>
								<x-indicator class="rounded-pill bg-light text-dark">7</x-indicator>
								<x-indicator class="rounded-pill bg-dark">8</x-indicator>
							</div>

							<div class="mb-3">
								<x-indicator class="bg-primary rounded-pill">11</x-indicator>
								<x-indicator class="bg-secondary rounded-pill">12</x-indicator>
								<x-indicator class="bg-success rounded-pill">13</x-indicator>
								<x-indicator class="bg-danger rounded-pill">14</x-indicator>
								<x-indicator class="bg-warning rounded-pill">150</x-indicator>
								<x-indicator class="bg-info rounded-pill">160</x-indicator>
								<x-indicator class="rounded-pill bg-light text-dark">170</x-indicator>
								<x-indicator class="rounded-pill bg-dark">180</x-indicator>
							</div>
						</x-card-body>
					</x-card>
				</x-col-6>


				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">SVG Icon with Indicator</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">

							<a href="" class="">
								<span class="relative">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
											d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
									</svg>							
									<x-indicator class="indicator bg-primary text-white ">5</x-indicator>
								</span>								
							</a>
	
						</div>
					</div>
				</div>

				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Buttons</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<button type="button" class="btn btn-primary">
								Notifications <span class="badge bg-info text-dark">4</span>
							</button>

							<button type="button" class="btn btn-danger">
								Notifications <span class="badge bg-white text-dark rounded-pill">4</span>
							</button>
						</x-card-body>
					</x-card>
				</x-col-6>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Positioned</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<button type="button" class="btn btn-primary position-relative">
									Inbox
									<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
									99+
									<span class="visually-hidden">unread messages</span>
									</span>
								</button>
							</div>
							<div class="mb-3">
								<button type="button" class="btn btn-primary position-relative">
									Profile
									<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
									<span class="visually-hidden">New alerts</span>
									</span>
								</button>
							</div>

						</div>
					</div>
				</div>

				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Heading</h5>
							<h6 class="card-subtitle text-muted">H1~H6 해더테그와 함께 badge를 사용할 수 있습니다.</h6>
						</x-card-header>
						<x-card-body>
							<h1>Example heading <x-badge class="bg-primary">New</x-badge></h1>
							<h2>Example heading <x-badge class="bg-secondary">New</x-badge></h2>
							<h3>Example heading <x-badge class="bg-success">New</x-badge></h3>
							<h4>Example heading <x-badge class="bg-danger">New</x-badge></h4>
							<h5>Example heading <x-badge class="bg-warning">New</x-badge></h5>
							<h6>Example heading <x-badge class="bg-dark">New</x-badge></h6>
						</x-card-body>
					</x-card>
				</x-col-6>

			</x-row>
			
		</x-container-fluid>
	</x-main-content>
</x-theme>  