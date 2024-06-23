<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        	<li class="breadcrumb-item active">Tasks</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Tasks</h1>
                            <p>

                            </p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <!-- page button and link : start -->
            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary"><x-icon name="feather.information.circle"/><span class="ml-1 align-middle">메뉴얼</span></a>
                        <a href="#" class="btn btn-primary"><x-icon name="feather.plus"/><span class="ml-1 align-middle">추가등록</span></a>
                    </div>
                </div>
            </div>
            <!-- end : page button and link -->




                <x-row>
                    <div class="col-12 col-lg-6 col-xl-4">
                        @include('www::slot1.docs.ui.pages.tasks.backlog')
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4">
                        @include('www::slot1.docs.ui.pages.tasks.progress')
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4">
                        @include('www::slot1.docs.ui.pages.tasks.completed')
                    </div>
                </x-row>

        </x-www-uidemo>
