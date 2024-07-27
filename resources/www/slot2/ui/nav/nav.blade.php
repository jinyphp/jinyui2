<x-theme theme="admin.sidebar">
    <x-theme-layout>

		<x-container-fluid>
            <!-- start page title -->
            <x-row>
                <x-col-12>
                    <div class="page-title-box">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Component</a></li>
                            <li class="breadcrumb-item active">Nav</li>
                        </ol>

						<div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Nav</h1>
                        </div>
                    </div>
                </x-col-12>
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
							<h5 class="card-title">Bootstrap Html</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body">
							@include('www::slot1.docs.ui.nav.nav.basic')
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Jinyui Component</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">
							@include('www::slot1.docs.ui.nav.nav.tag')
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">가운데 정렬</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">

							<x-nav class="justify-content-center">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">오른쪽 정렬</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">

							<x-nav class="justify-content-end">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">세로배치</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">

							<x-nav class="flex-column">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Tab</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">

							<x-nav class="nav-tabs">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Pills</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">
							<x-nav class="nav-pills">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Pills and Justify</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</div>
						<div class="card-body ">
							<x-nav class="nav-pills nav-fill">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>

							<br>

							<x-nav class="nav-pills nav-justified">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link" href="#">Link</a>
								</x-nav-item>
								<x-nav-item>
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</x-nav-item>
							</x-nav>
						</div>
					</div>
				</div>

				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Tabs with dropdowns</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<x-nav class="nav-tabs">
								<x-nav-item>
									<a class="nav-link active" aria-current="page" href="#">Active</a>
								</x-nav-item>
								<li class="nav-item ">
									<div class="dropdown">
										<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">Action</a></li>
											<li><a class="dropdown-item" href="#">Another action</a></li>
											<li><a class="dropdown-item" href="#">Something else here</a></li>
											<li><hr class="dropdown-divider"></li>
											<li><a class="dropdown-item" href="#">Separated link</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Link</a>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</li>
							</x-nav>

						</x-card-body>
					</x-card>
				</x-col-6>

				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Pills with dropdowns</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							<ul class="nav nav-pills">
								<li class="nav-item">
								  <a class="nav-link active" aria-current="page" href="#">Active</a>
								</li>
								<li class="nav-item dropdown">
								  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
								  <ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Separated link</a></li>
								  </ul>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="#">Link</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								</li>
							  </ul>
						</x-card-body>
					</x-card>
				</x-col-6>


			</div>

		</x-container-fluid>
	</x-theme-layout>
</x-theme>
