<x-www-docs>
    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Avater</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Avater</h1>
                            <p>프로필 아바타를 출력합니다.</p>
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
                        <x-card-header>
                            <h5 class="card-title">Avatar sizes</h5>
							<h6 class="card-subtitle text-muted">Different sized avatars with inner shadow.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <x-avata class="w-16 h-16 mr-2" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                    <x-avata class="w-12 h-12 mr-2" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                    <x-avata class="w-8 h-8" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <!--  -->
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Avatar group</h5>
							<h6 class="card-subtitle text-muted">Group of stacked avatars with white border.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="-space-x-4">
                                        <img class="relative z-30 inline object-cover w-12 h-12 border-2 border-white rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                        <img class="relative z-20 inline object-cover w-12 h-12 border-2 border-white rounded-full" src="https://images.pexels.com/photos/2955305/pexels-photo-2955305.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                        <img class="relative z-10 inline object-cover w-12 h-12 border-2 border-white rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <!--  -->
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Avatar with badge</h5>
							<h6 class="card-subtitle text-muted">Avatar with status badge.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="relative inline-block">
                                        <img class="inline-block object-cover w-12 h-12 rounded-full" src="https://images.pexels.com/photos/2955305/pexels-photo-2955305.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>
                                        <span class="absolute bottom-0 right-0 inline-block w-3 h-3 bg-green-600 border-2 border-white rounded-full"></span>
                                    </div>

                                </x-navtab-item>

                                <x-navtab-item >
                                    <x-navtab-link class="rounded-0">
                                        코드보기
                                    </x-navtab-link>
                                    ...
                                </x-navtab-item>
                            </x-navtab>
                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>

        </div>
    </section>
</x-www-docs>

