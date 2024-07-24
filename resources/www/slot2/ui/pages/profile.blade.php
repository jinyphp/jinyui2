<x-www-uidemo>
            <!-- start page title -->
        	<x-row>
            	<x-col-12>
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        	<li class="breadcrumb-item active">Profile</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Profile</h1>
                    	</div>
                	</div>
            	</x-col-12>
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

                <div class="col-md-4 col-xl-3">
                    <x-card class="mb-3">
                        <x-card-header>
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </x-card-header>
                        <x-card-body>

                        </x-card-body>

                        <div class="card-body text-center">
                            <img src="/img/avatars/avatar-4.jpg" alt="Christina Mason" class="/img-fluid rounded-circle mb-2" width="128" height="128">
                            <h5 class="card-title mb-0">Christina Mason</h5>
                            <div class="text-muted mb-2">Lead Developer</div>

                            <div>
                                <a class="btn btn-primary btn-sm" href="#">Follow</a>
                                <a class="btn btn-primary btn-sm" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Message</a>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <h5 class="h6 card-title">Skills</h5>
                            <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                            <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                            <a href="#" class="badge bg-primary me-1 my-1">Sass</a>
                            <a href="#" class="badge bg-primary me-1 my-1">Angular</a>
                            <a href="#" class="badge bg-primary me-1 my-1">Vue</a>
                            <a href="#" class="badge bg-primary me-1 my-1">React</a>
                            <a href="#" class="badge bg-primary me-1 my-1">Redux</a>
                            <a href="#" class="badge bg-primary me-1 my-1">UI</a>
                            <a href="#" class="badge bg-primary me-1 my-1">UX</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm me-1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Lives in <a href="#">San Francisco, SA</a>
                                </li>

                                <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm me-1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> Works at <a href="#">GitHub</a></li>
                                <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm me-1"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> From <a href="#">Boston</a></li>
                            </ul>
                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <h5 class="h6 card-title">Elsewhere</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span class="fas fa-globe fa-fw me-1"></span> <a href="#">staciehall.co</a></li>
                                <li class="mb-1"><span class="fab fa-twitter fa-fw me-1"></span> <a href="#">Twitter</a></li>
                                <li class="mb-1"><span class="fab fa-facebook fa-fw me-1"></span> <a href="#">Facebook</a></li>
                                <li class="mb-1"><span class="fab fa-instagram fa-fw me-1"></span> <a href="#">Instagram</a></li>
                                <li class="mb-1"><span class="fab fa-linkedin fa-fw me-1"></span> <a href="#">LinkedIn</a></li>
                            </ul>
                        </div>

                    </x-card>


                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="card-body h-100">

                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar-5.jpg" width="36" height="36" class="rounded-circle me-2" alt="Vanessa Tucker">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">5m ago</small>
                                    <strong>Vanessa Tucker</strong> started following <strong>Christina Mason</strong><br>
                                    <small class="text-muted">Today 7:51 pm</small><br>

                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">30m ago</small>
                                    <strong>Charles Hall</strong> posted something on <strong>Christina Mason</strong>'s timeline<br>
                                    <small class="text-muted">Today 7:21 pm</small>

                                    <div class="border text-sm text-muted p-2 mt-1">
                                        Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                                        neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                                        tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-sm"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Like</a>
                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1h ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br>

                                    <small class="text-muted">Today 6:35 pm</small>
                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">3h ago</small>
                                    <strong>William Harris</strong> posted two photos on <strong>Christina Mason</strong>'s timeline<br>
                                    <small class="text-muted">Today 5:12 pm</small>

                                    <div class="row g-0 mt-1">
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="/img/photos/unsplash-1.jpg" class="/img-fluid pe-2" alt="Unsplash">
                                        </div>
                                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                            <img src="/img/photos/unsplash-2.jpg" class="/img-fluid pe-2" alt="Unsplash">
                                        </div>
                                    </div>

                                    <a href="#" class="btn btn-sm btn-danger mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart feather-sm"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Like</a>
                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar-2.jpg" width="36" height="36" class="rounded-circle me-2" alt="William Harris">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>William Harris</strong> started following <strong>Christina Mason</strong><br>
                                    <small class="text-muted">Yesterday 3:12 pm</small>

                                    <div class="d-flex align-items-start mt-1">
                                        <a class="pe-3" href="#">
                                            <img src="/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                        </a>
                                        <div class="flex-grow-1">
                                            <div class="border text-sm text-muted p-2 mt-1">
                                                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt
                                                tempus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2" alt="Christina Mason">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Christina Mason</strong> posted a new blog<br>
                                    <small class="text-muted">Yesterday 2:43 pm</small>
                                </div>
                            </div>

                            <hr>
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">1d ago</small>
                                    <strong>Charles Hall</strong> started following <strong>Christina Mason</strong><br>
                                    <small class="text-muted">Yesterdag 1:51 pm</small>
                                </div>
                            </div>

                            <hr>
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </x-row>

        </x-www-uidemo>
