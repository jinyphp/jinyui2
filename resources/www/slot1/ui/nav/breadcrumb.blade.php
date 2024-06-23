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
                            <h1 class="h3 d-inline align-middle">Breadcrumb</h1>
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

			<x-row>
				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">bootstrap code</h5>
							<h6 class="card-subtitle text-muted">다은은 부트스트랩의 기본 html 코드를 이용한 breadcrumb 구현입니다.</h6>
						</x-card-header>
						<x-card-body>

							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Home</li>
								</ol>
							</nav>
	
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Library</li>
								</ol>
							</nav>
	
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Library</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data</li>
								</ol>
							</nav>
						</x-card-body>
					</x-card>
				</x-col-6>

		
				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">Native PHP code</h5>
							<h6 class="card-subtitle text-muted">다은은 부트스트랩의 기본 html 코드를 이용한 breadcrumb 구현입니다.</h6>
						</x-card-header>
						<x-card-body>

							<nav aria-label="breadcrumb">
								{{ xBreadCrumb()->addLink("home") }}
								{!! xBreadCrumb()->show() !!}
							</nav>
	
							<nav aria-label="breadcrumb">
								{{ xBreadCrumb()->addLink("Home",'#') }}
								{{ xBreadCrumb()->addLink("Library") }}
								{!! xBreadCrumb()->show() !!}
							</nav>
	
							<nav aria-label="breadcrumb">
								{!! xBreadCrumb()->setLinks([
									['title'=>"Home", 'href'=>"#"],
									['title'=>"Library", 'href'=>"#"],
									['title'=>"Data", 'href'=>""]
								])->show() !!}
							</nav>
						</x-card-body>
					</x-card>
				</x-col-6>
	
				<x-col-6>
					<x-card>
						<x-card-header>
							<h5 class="card-title">jinyui</h5>
							<h6 class="card-subtitle text-muted">jinyui 컴포넌트 테그를 이용하여 생성한 breadcrumb 입니다.</h6>
						</x-card-header>
						<x-card-body>

							<x-breadcrumb>
								<x-breadcrumb-item href="#">
									Home
								</x-breadcrumb-item>
								<x-breadcrumb-item>
									Data
								</x-breadcrumb-item>
							</x-breadcrumb>
	
						</x-card-body>
					</x-card>
				</x-col-6>
	
				
			</x-row>


		</x-container-fluid>
	</x-theme-layout>
</x-theme>  
