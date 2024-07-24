<x-theme theme="admin.sidebar">
    <x-theme-layout>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Cards</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Cards</h1>
                            <p>card박스는 컨덴츠를 담아 출력할 수 있는 디자인 박스 입니다.</p>
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
                <!--  -->
                <x-col-6>
                    <x-card>
                        카드박스
                    </x-card>
                </x-col-6>

                <!--  -->
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            카드 해더영역
                        </x-card-header>
                        <x-card-body>
                            카드내용
                        </x-card-body>
                    </x-card>
                </x-col-6>

            </x-row>



    </x-main-content>
</x-theme>

