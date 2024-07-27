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
                        	<li class="breadcrumb-item active">Group</li>
                    	</ol>                        
                    
        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Button Group</h1>
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
							<h5 class="card-title">Basic</h5>
							<h6 class="card-subtitle text-muted">버튼 그룹 스타일입니다. 기본 그룹 묶음은 가로 방향 입니다.</h6>
						</div>
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted">기본스타일</h6>

							{!! xGroup()
								->setButton()
								->addItem( xButton("Left")->setColor('primary') )
								->addItem( xButton("Middle")->setColor('primary') )
								->addItem( xButton("Right")->setColor('primary') )
								->setAriaLabel("Basic example")
							!!}


							<h6 class="card-subtitle my-2 text-muted">링크</h6>
							<div class="btn-group">
								{!! xLink("Active link", '#')->setButton('primary')
									->setActive()->setAriaCurrent("page") !!}
								{!! xLink("link", '#')->setButton('primary') !!}
								{!! xLink("link", '#')->setButton('primary') !!}
							</div>

						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">사이즈</h5>
							<h6 class="card-subtitle text-muted">버튼 그룹 스타일입니다. 기본 그룹 묶음은 가로 방향 입니다.</h6>
						</div>
						<div class="card-body">

							<h6 class="card-subtitle mb-2 text-muted">Horizontal button group</h6>

							{!! xGroup()
								->setButton()->setButtonSize('large')
								->addItem( xButton("Left")->setColor('secondary') )
								->addItem( xButton("Middle")->setColor('secondary') )
								->addItem( xButton("Right")->setColor('secondary') )
								->setAriaLabel("Large button group")
							!!}

							<br class="mb-3">

							{!! xGroup()
								->setButton()
								->addItem( xButton("Left")->setColor('info') )
								->addItem( xButton("Middle")->setColor('info') )
								->addItem( xButton("Right")->setColor('info') )
								->setAriaLabel("button group")
							!!}

							<br class="mb-3">

							{!! xGroup()
								->setButton()->setButtonSize('small')
								->addItem( xButton("Left")->setColor('danger') )
								->addItem( xButton("Middle")->setColor('danger') )
								->addItem( xButton("Right")->setColor('danger') )
								->setAriaLabel("Small button group")
							!!}


						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Button toolbar</h5>
							<h6 class="card-subtitle text-muted">Button group components.</h6>
						</div>
						<div class="card-body">

							<h6 class="card-subtitle mb-2 text-muted">Button toolbar</h6>
							<div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">

								<div class="btn-group me-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-secondary">1</button>
									<button type="button" class="btn btn-secondary">2</button>
									<button type="button" class="btn btn-secondary">3</button>
									<button type="button" class="btn btn-secondary">4</button>
								</div>

								<div class="btn-group me-2" role="group" aria-label="Second group">
									<button type="button" class="btn btn-secondary">5</button>
									<button type="button" class="btn btn-secondary">6</button>
									<button type="button" class="btn btn-secondary">7</button>
								</div>
								
								<div class="btn-group" role="group" aria-label="Third group">
									<button type="button" class="btn btn-secondary">8</button>
								</div>
								
							</div>


						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Vertical button group</h5>
							<h6 class="card-subtitle text-muted">Button group components.</h6>
						</div>
						<div class="card-body">

							<h6 class="card-subtitle mb-2 text-muted">Vertical button group</h6>
							<div class="btn-toolbar">

								{!! xGroup()
									->setButton('vertical')
									->addItem( xButton("Left")->setColor('primary') )
									->addItem( xButton("Middle")->setColor('primary') )
									->addItem( xButton("Right")->setColor('primary') )
									->setAriaLabel("Vertical button group")

									->addClass("me-2")
								!!}

								{!! xGroup()
									->setButton('vertical')
									->addItem( xButton("Left")->setColor('success') )
									->addItem( xButton("Middle")->setColor('success') )
									->addItem( xButton("Right")->setColor('success') )
									->setAriaLabel("Vertical button group")

									->addClass("me-2")
								!!}

								{!! xGroup()
									->setButton('vertical')
									->addItem( xButton("Left")->setColor('warning') )
									->addItem( xButton("Middle")->setColor('warning') )
									->addItem( xButton("Right")->setColor('warning') )
									->setAriaLabel("Vertical button group")

									->addClass("me-2")
								!!}

								{!! xGroup()
									->setButton('vertical')
									->addItem( xButton("Left")->setColor('danger') )
									->addItem( xButton("Middle")->setColor('danger') )
									->addItem( xButton("Right")->setColor('danger') )
									->setAriaLabel("Vertical button group")

									->addClass("me-2")
								!!}


							</div>


						</div>
					</div>
				</div>
			</div>

		</x-container-fluid>
	</x-theme-layout>
</x-theme>  