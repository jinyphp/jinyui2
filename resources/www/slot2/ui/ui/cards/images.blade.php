<x-theme theme="admin.sidebar">
    <x-theme-layout>

            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="m-0 breadcrumb">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Card</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="align-middle h3 d-inline">Card with Images</h1>
                            <p>card 박스를 균일한 격자형태로 배치를 합니다.</p>
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
                <x-col-4>
                    <x-card>
                        <x-card-before>
                            <img class="card-img-top" src="/img/photos/unsplash-1.jpg" alt="Unsplash">
                        </x-card-before>

                        <x-card-header>
                            <h5 class="mb-0 card-title">Card with image and links</h5>
                        </x-card-header>

                        <x-card-body>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </x-card-body>
                    </x-card>
                </x-col-4>

                <x-col-4>
                    <x-card>
                        <x-card-before>
                            <img class="card-img-top" src="/img/photos/unsplash-2.jpg" alt="Unsplash">
                        </x-card-before>

                        <x-card-header>
                            <h5 class="mb-0 card-title">Card with image and button</h5>
                        </x-card-header>

                        <x-card-body>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </x-card-body>

                    </x-card>
                </x-col-4>

                <x-col-4>
                    <x-card>
                        <x-card-before>
                            <img class="card-img-top" src="/img/photos/unsplash-3.jpg" alt="Unsplash">
                        </x-card-before>


                        <x-card-header>
                            <h5 class="mb-0 card-title">Card with image and list</h5>
                        </x-card-header>

                        <!-- 카드에 flush 리스트 적용 -->
                        <x-list-group-flush>
                            <x-list-item>Cras justo odio</x-list-item>
                            <x-list-item>Dapibus ac facilisis in</x-list-item>
                            <x-list-item>Vestibulum at eros</x-list-item>
                        </x-list-group-flush>

                    </x-card>
                </x-col-4>
            </x-row>


            <x-row>
                <div class="col-lg-3 col-md-6">
                    <x-card class="mb-4">
                        <img class="card-img-top" src="/img/mockup1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title h5">Card title</div>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary" role="button">Button</a>
                        </div>
                    </x-card>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="mb-4 card">
                        <img class="card-img-top" src="/img/mockup3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title h5">Card title</div>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="text-muted list-group-item">Vice tote bag shabby chic</div>
                            <div class="text-muted list-group-item">Portland Etsy craft beer</div>
                        </div>
                        <div class="card-body">
                            <a class="card-link" href="#">Card link</a>
                            <a class="card-link" href="#">Another link here</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="mb-4 card">
                        <img class="card-img-top" src="/img/mockup4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="mb-4 card">
                        <div class="card-body">
                            <div class="card-title h5">Card title</div>
                            <div class="text-muted card-subtitle h6">Support card subtitle</div>
                        </div>
                        <img class="card-img-top rounded-0" src="/img/mockup5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </x-row>

            <x-row>
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4 card"><img class="card-img-top" src="/img/mockup6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title h5">Card title</div>
                            <div class="text-muted card-subtitle h6">Support card subtitle</div>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4 card">
                        <div class="card-body">
                            <div class="card-title h5">Card title</div>
                            <div class="text-muted card-subtitle h6">Support card subtitle</div>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        <img class="card-img-bottom" src="/img/mockup4.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4 text-white card-inverse card">
                        <img class="card-img" src="/img/mockup4.jpg">
                        <div class="card-img-overlay">
                            <div class="card-title h5">Card title</div>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </x-row>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="/img/small-4.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div> <!-- end card-body-->
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div> <!-- end card-body -->
                            </div> <!-- end col -->
                            <div class="col-md-4">
                                <img src="/img/small-1.jpg" class="card-img" alt="...">
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>

    </x-theme-layout>
</x-theme>
