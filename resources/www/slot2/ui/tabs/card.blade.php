<style>
.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}
</style>
<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Tab</a></li>
                        	<li class="breadcrumb-item active">Card</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Card Tab</h1>
                            <p>

                            </p>
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
                <div class="col-md-3 col-xl-2">

                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Tabs</h5>
                        </x-card-header>

                        <x-tab-header class="list-group list-group-flush">
                            {{ \Jiny\UI\XTab::instance()->links(
                                [
                                    'tab1'=>"Tab1",
                                    'tab2'=>"Tab2",
                                    'tab3'=>"Tab3"
                                ],
                                "tab1") }}
                        </x-tab-header>

                    </x-card>

                </div>

                <div class="col-md-9 col-xl-10">

                    {{-- 텝출력--}}
                    <x-tab-contents>
                        {{-- 텝 컨덴츠 생성--}}
                        <x-tab-item class="active show" id="tab1">
                            <x-card>
                                Tab1 Content
                            </x-card>
                        </x-tab-item>

                        {{-- 텝 컨덴츠 생성--}}
                        <x-tab-item id="tab2">
                            <x-card>
                                Tab2 Content
                            </x-card>
                        </x-tab-item>

                        {{-- 텝 컨덴츠 생성--}}
                        <x-tab-item id="tab3">
                            <x-card>
                                Tab3 Content
                            </x-card>
                        </x-tab-item>
                    </x-tab-contents>
                </div>
            </div>

        </x-www-uidemo>
