<x-www-docs>
    <!-- Section -->
    <section class="py-5">
        <div class="container px-5">
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Carousel</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Carousel</h1>
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

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            Slides Only
                        </x-card-header>
                        <x-card-body>
                            <x-carousel>

                                <x-carousel-item class="active">
                                    <img src="/img/photos/unsplash-1.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>


                            </x-carousel>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            With controls
                        </x-card-header>
                        <x-card-body>
                            <x-carousel controls>
                                <x-carousel-item class="active">
                                    <img src="/img/photos/unsplash-1.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                            </x-carousel>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            With indicators
                        </x-card-header>
                        <x-card-body>
                            <x-carousel controls indicator >
                                <x-carousel-item class="active">
                                    <img src="/img/photos/unsplash-1.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                            </x-carousel>
                        </x-card-body>
                    </x-card>


                </x-col-6>



                <x-col-6>
                    <x-card>
                        <x-card-header>
                            With captions
                        </x-card-header>
                        <x-card-body>
                            <x-carousel controls indicator >
                                <x-carousel-item class="active">
                                    <img src="/img/photos/unsplash-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </x-carousel-item>
                            </x-carousel>

                        </x-card-body>

                    </x-card>



                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            Crossfade
                        </x-card-header>
                        <x-card-body>
                            <x-carousel controls class="carousel-fade">
                                <x-carousel-item class="active">
                                    <img src="/img/photos/unsplash-1.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-2.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                                <x-carousel-item>
                                    <img src="/img/photos/unsplash-3.jpg" class="d-block w-100" alt="...">
                                </x-carousel-item>

                            </x-carousel>


                        </x-card-body>
                    </x-card>



                </x-col-6>
            </x-row>
        </div>
    </section>
</x-www-docs>
