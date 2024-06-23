<x-theme theme="admin.sidebar">
    <x-theme-layout>

            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Theme</a></li>
                        	<li class="breadcrumb-item active">Layout</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Layout</h1>
                            <p>

                            </p>
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
                <x-col-12>
                    <x-card>
                        <x-card-header>
                            reource/view/theme/테마명/layout.blade.php
                        </x-card-header>
                        <x-card-body>
                            이 파일은 사용자 UI를 구현하기 위한 기본 골격 파일입니다. layout.blade.php 파일에서 원하는 형태의 UI모양을 지정하십시요.
                            또한 본문 내용에는 한개의 slot 변수를 같이 선언해 주어야 합니다.
                            slot은 각각의 페이지들이 레이아웃과 결합하기 위한 연결 고리 입니다.
                        </x-card-body>
                    </x-card>
                </x-col-12>
            </x-row>

    </x-theme-layout>
</x-theme>
