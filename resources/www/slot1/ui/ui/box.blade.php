<style>
    .card-widget {
        background: #fff;
        -webkit-box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
        justify-content: space-between;
        border-radius: 50rem;
        padding: 1.5rem
    }

    .card-widget,
    .card-widget-body {
        display: flex;
        align-items: center
    }

    .card-widget-body {
        flex-grow: 1
    }


.avatar {
    display: inline-block;
    position: relative;
    width: 3rem;
    height: 3rem;
    text-align: center;
    border: #dee2e6;
    border-radius: 50%;
    background: #fff;
    -webkit-box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    line-height: 3rem
}

.avatar.avatar-xs {
    width: 1.8rem;
    height: 1.8rem;
    line-height: 1.8rem
}

.avatar.avatar-sm {
    width: 2.5rem;
    height: 2.5rem;
    line-height: 2.5rem
}

.avatar.avatar-lg {
    width: 5rem;
    height: 5rem;
    line-height: 5rem
}

.avatar.avatar-xl {
    width: 7rem;
    height: 7rem;
    line-height: 7rem
}

.avatar.avatar-xxl {
    width: 10rem;
    min-width: 10rem;
    height: 10rem;
    line-height: 10rem
}

.avatar.avatar-border-white {
    border: 2px solid #fff
}

.avatar-stacked {
    margin-left: -.5rem
}

</style>

<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Box</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Box</h1>
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


            https://themes.getbootstrap.com/preview/?theme_id=93418

            <div class="row">
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="card-widget h-100">
                        <div class="card-widget-body">
                            <div class="dot me-3 bg-indigo">
                            </div>
                            <div class="text">
                                <h6 class="mb-0">Data consumed</h6>
                                <span class="text-gray-500">145,14 GB</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="card-widget  h-100">
                        <div class="card-widget-body">
                            <div class="dot me-3 bg-green"></div>
                            <div class="text">
                                <h6 class="mb-0">Open cases</h6>
                                <span class="text-gray-500">30</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="card-widget  h-100">
                        <div class="card-widget-body">
                            <div class="dot me-3 bg-blue"></div>
                            <div class="text">
                                <h6 class="mb-0">Work orders</h6><span class="text-gray-500">400</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="card-widget  h-100">
                        <div class="card-widget-body">
                            <div class="dot me-3 bg-red"></div>
                            <div class="text">
                                <h6 class="mb-0">New invoices</h6><span class="text-gray-500">123</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-sm-6">
                    <a href="#" class="text-decoration-none text-reset">
                        <div class="messag px-5 py-3 mb-4 bg-hover-gradient-primary  card">
                            <div class="row">
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-3">
                                    <strong class="h5 mb-0">24<sup
                                            class="text-xs text-gray-500 font-weight-normal ms-1">Apr</sup></strong>
                                    <div class="mx-3">
                                        <div class="avatar my-2 my-xl-0">
                                            <div
                                                class="position-relative overflow-hidden rounded-circle h-100 d-flex align-items-center justify-content-center">
                                                <div
                                                    style="overflow:hidden;box-sizing:border-box;display:inline-block;position:relative;width:40px;height:40px">
                                                    <img alt="Jason Maxwell"
                                                        src="/img/avatars/avatar.jpg"
                                                        decoding="async"
                                                        class="rounded-circle"
                                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                                        srcset="/_next/image?url=%2Fimg%2Favatar-1.jpg&amp;w=48&amp;q=75 1x, /_next/image?url=%2Fimg%2Favatar-1.jpg&amp;w=96&amp;q=75 2x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Jason Maxwell</h6>
                                </div>
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-9">
                                    <div
                                        class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-2 mt-xl-0 text-sm text-dark exclude">
                                        User testing</div>
                                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-12 col-sm-6"><a href="#" class="text-decoration-none text-reset">
                        <div class="messag px-5 py-3 mb-4 bg-hover-gradient-primary  card">
                            <div class="row">
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-3">
                                    <strong class="h5 mb-0">15<sup
                                            class="text-xs text-gray-500 font-weight-normal ms-1">May</sup></strong>
                                    <div class="mx-3">
                                        <div class="avatar   my-2 my-xl-0">
                                            <div
                                                class="position-relative overflow-hidden rounded-circle h-100 d-flex align-items-center justify-content-center">
                                                <div
                                                    style="overflow:hidden;box-sizing:border-box;display:inline-block;position:relative;width:40px;height:40px">
                                                    <img alt="Sam Andy"
                                                        src="/img/avatars/avatar.jpg"
                                                        decoding="async" class="rounded-circle"
                                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                                        srcset="/_next/image?url=%2Fimg%2Favatar-2.jpg&amp;w=48&amp;q=75 1x, /_next/image?url=%2Fimg%2Favatar-2.jpg&amp;w=96&amp;q=75 2x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Sam Andy</h6>
                                </div>
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-9">
                                    <div
                                        class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-2 mt-xl-0 text-sm text-dark exclude">
                                        Web Developer</div>
                                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit..</p>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-xl-12 col-sm-6"><a href="#" class="text-decoration-none text-reset">
                        <div class="messag px-5 py-3 mb-4 bg-hover-gradient-primary  card">
                            <div class="row">
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-3">
                                    <strong class="h5 mb-0">17<sup
                                            class="text-xs text-gray-500 font-weight-normal ms-1">Aug</sup></strong>
                                    <div class="mx-3">
                                        <div class="avatar   my-2 my-xl-0">
                                            <div
                                                class="position-relative overflow-hidden rounded-circle h-100 d-flex align-items-center justify-content-center">
                                                <div
                                                    style="overflow:hidden;box-sizing:border-box;display:inline-block;position:relative;width:40px;height:40px">
                                                    <img alt="Margret Peter"
                                                        src="/img/avatars/avatar.jpg"
                                                        decoding="async" class="rounded-circle"
                                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                                        srcset="/_next/image?url=%2Fimg%2Favatar-3.jpg&amp;w=48&amp;q=75 1x, /_next/image?url=%2Fimg%2Favatar-3.jpg&amp;w=96&amp;q=75 2x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Margret Peter</h6>
                                </div>
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-9">
                                    <div
                                        class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-2 mt-xl-0 text-sm text-dark exclude">
                                        Analysis Agent</div>
                                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit..</p>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-xl-12 col-sm-6"><a href="#" class="text-decoration-none text-reset">
                        <div class="messag px-5 py-3 mb-4 bg-hover-gradient-primary  card">
                            <div class="row">
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-3">
                                    <strong class="h5 mb-0">15<sup
                                            class="text-xs text-gray-500 font-weight-normal ms-1">Sep</sup></strong>
                                    <div class="mx-3">
                                        <div class="avatar   my-2 my-xl-0">
                                            <div
                                                class="position-relative overflow-hidden rounded-circle h-100 d-flex align-items-center justify-content-center">
                                                <div
                                                    style="overflow:hidden;box-sizing:border-box;display:inline-block;position:relative;width:40px;height:40px">
                                                    <img alt="Jason Doe"
                                                        src="/img/avatars/avatar.jpg"
                                                        decoding="async" class="rounded-circle"
                                                        style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"
                                                        srcset="/_next/image?url=%2Fimg%2Favatar-4.jpg&amp;w=48&amp;q=75 1x, /_next/image?url=%2Fimg%2Favatar-4.jpg&amp;w=96&amp;q=75 2x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Jason Doe</h6>
                                </div>
                                <div
                                    class="d-flex align-items-center flex-column flex-xl-row text-center text-md-left col-xl-9">
                                    <div
                                        class="bg-gray-200 rounded-pill px-4 py-1 me-0 me-xl-3 mt-2 mt-xl-0 text-sm text-dark exclude">
                                        User testing</div>
                                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit..</p>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>


            <x-row>
                <x-col-6>

                </x-col-6>

                <x-col-6>

                </x-col-6>
            </x-row>
        </x-container-fluid>
    </x-main-content>

</x-theme>
