<x-theme theme="admin.sidebar">
    <x-theme-layout>

            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">scrollspy</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">scrollspy</h1>
                            <p></p>
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


            <x-row>
                <x-col-6>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">navbar</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </div>
                        <div class="card-body">

                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <nav id="navbar-example2" class="px-3 navbar navbar-light bg-light">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                            <a class="nav-link" href="#scrollspyHeading1">First</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                            </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                        <h4 id="scrollspyHeading1">First heading</h4>
                                        <p>...</p>
                                        <h4 id="scrollspyHeading2">Second heading</h4>
                                        <p>...</p>
                                        <h4 id="scrollspyHeading3">Third heading</h4>
                                        <p>...</p>
                                        <h4 id="scrollspyHeading4">Fourth heading</h4>
                                        <p>...</p>
                                        <h4 id="scrollspyHeading5">Fifth heading</h4>
                                        <p>...</p>
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
                    </div>
                </x-col-6>

                <x-col-6>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">nested nav</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </div>
                        <div class="card-body">

                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <nav id="navbar-example3" class="p-3 navbar navbar-light bg-light flex-column align-items-stretch">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link" href="#item-1">Item 1</a>
                                            <nav class="nav nav-pills flex-column">
                                            <a class="my-1 nav-link ms-3" href="#item-1-1">Item 1-1</a>
                                            <a class="my-1 nav-link ms-3" href="#item-1-2">Item 1-2</a>
                                            </nav>
                                            <a class="nav-link" href="#item-2">Item 2</a>
                                            <a class="nav-link" href="#item-3">Item 3</a>
                                            <nav class="nav nav-pills flex-column">
                                            <a class="my-1 nav-link ms-3" href="#item-3-1">Item 3-1</a>
                                            <a class="my-1 nav-link ms-3" href="#item-3-2">Item 3-2</a>
                                            </nav>
                                        </nav>
                                    </nav>

                                    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                                        <h4 id="item-1">Item 1</h4>
                                        <p>...</p>
                                        <h5 id="item-1-1">Item 1-1</h5>
                                        <p>...</p>
                                        <h5 id="item-1-2">Item 1-2</h5>
                                        <p>...</p>
                                        <h4 id="item-2">Item 2</h4>
                                        <p>...</p>
                                        <h4 id="item-3">Item 3</h4>
                                        <p>...</p>
                                        <h5 id="item-3-1">Item 3-1</h5>
                                        <p>...</p>
                                        <h5 id="item-3-2">Item 3-2</h5>
                                        <p>...</p>
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
                    </div>
                </x-col-6>

                <x-col-6>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">list-group</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </div>
                        <div class="card-body">
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div id="list-example" class="list-group">
                                        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                        </div>
                                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                        <h4 id="list-item-1">Item 1</h4>
                                        <p>...</p>
                                        <h4 id="list-item-2">Item 2</h4>
                                        <p>...</p>
                                        <h4 id="list-item-3">Item 3</h4>
                                        <p>...</p>
                                        <h4 id="list-item-4">Item 4</h4>
                                        <p>...</p>
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
                    </div>
                </x-col-6>

            </x-row>

        </x-theme-layout>
    </x-theme>
