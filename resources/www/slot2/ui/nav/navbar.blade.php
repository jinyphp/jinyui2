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
                            <h1 class="h3 d-inline align-middle">Nav bar</h1>
                        </div>
						<p></p>
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


			<x-row>
				<x-col-12>
					<x-card>
						<x-card-header>
							<h5 class="card-title">NavBar Light</h5>
							<h6 class="card-subtitle text-muted"></h6>
						</x-card-header>
						<x-card-body>
							@include("www::slot1.docs.ui.nav.navbar.light")
						</x-card-body>
					</x-card>
				</x-col-12>
			</x-row>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">x-navbar 테그</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>

                            <x-navbar>
                                jinyuiKit
                            </x-navbar>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">x-navbar 색상적용</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>

                            <x-navbar class="navbar-dark bg-dark mb-3">
                                jinyuiKit
                            </x-navbar>

                            <x-navbar class="navbar-primary bg-primary mb-3">
                                jinyuiKit
                            </x-navbar>

                            <x-navbar class="navbar-light" style="background-color: #e3f2fd;">
                                jinyuiKit
                            </x-navbar>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">메뉴적용</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>

                            <x-navbar class="navbar-light bg-light">
                                <x-navbar-nav class="me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                </x-navbar-nav>
                            </x-navbar>

                            <br>

                            <x-navbar class="navbar-light bg-light">
                                <x-navbar-nav class="ms-auto">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </x-navbar-nav>
                            </x-navbar>

                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>

		</x-container-fluid>
	</x-theme-layout>
</x-theme>
