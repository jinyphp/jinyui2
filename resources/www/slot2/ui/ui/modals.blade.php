<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        	<li class="breadcrumb-item active">Modal</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Modal</h1>
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

            <div class="row">
                <x-col-6>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Default modal</h5>
                            <h6 class="card-subtitle text-muted">Default Bootstrap modal.</h6>
                        </div>
                        <div class="card-body text-center">
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>

                                    <!-- BEGIN primary modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModalPrimary">
                                        Primary
                                    </button>
                                    <div class="modal fade" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Default modal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body m-3">
                                                    <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                        notifications, or completely custom content.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END primary modal -->

                                    <x-modal-button secondary data-bs-target="#defaultModalsecondary">
                                        Secondary
                                    </x-modal-button>

                                    <x-modal-layout id="defaultModalsecondary">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>


                                    <x-modal-button success data-bs-target="#defaultModalSuccess">
                                        Success
                                    </x-modal-button>

                                    <x-modal-layout id="defaultModalSuccess">
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>

                                    <x-modal-button danger data-bs-target="#defaultModalDanger">
                                        Danger
                                    </x-modal-button>

                                    <x-modal-layout id="defaultModalDanger">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                    </x-modal-layout>

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
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Static Backdrop</h5>
                        </x-card-header>
                        <x-card-body>

                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <!-- Button trigger modal -->
                                    <x-modal-button primary data-bs-target="#staticBackdrop">
                                        Launch static backdrop modal
                                    </x-modal-button>

                                    <x-modal-layout static id="staticBackdrop">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                    </x-modal-layout>

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


                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Centered modal</h5>
                            <h6 class="card-subtitle text-muted">Vertically centered modal.</h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>

                                    <!-- BEGIN primary modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centeredModalPrimary">
                                        Primary
                                    </button>
                                    <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Centered modal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body m-3">
                                                    <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                        notifications, or completely custom content.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END primary modal -->

                                    <!-- BEGIN success modal -->
                                    <x-modal-button success data-bs-target="#centeredModalsecondary">
                                        Success
                                    </x-modal-button>

                                    <x-modal-layout center id="centeredModalsecondary">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>

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



                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Modal sizes</h5>
                            <h6 class="card-subtitle text-muted">These sizes kick in at certain breakpoints to avoid scrollbars on smaller viewports.
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>

                                    <!-- BEGIN  modal -->
                                    <x-modal-button primary data-bs-target="#sizedModalSm">
                                        Small Modal window
                                    </x-modal-button>

                                    <x-modal-layout small id="sizedModalSm">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

                                    <!-- BEGIN  modal -->
                                    <x-modal-button secondary data-bs-target="#sizedModalMd">
                                        Medium Modal window
                                    </x-modal-button>

                                    <x-modal-layout medium id="sizedModalMd">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

                                    <!-- BEGIN  modal -->
                                    <x-modal-button success data-bs-target="#sizedModalLg">
                                        Large Modal window
                                    </x-modal-button>

                                    <x-modal-layout large id="sizedModalLg">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

                                    <!-- BEGIN  modal -->
                                    <x-modal-button info data-bs-target="#sizedModalXl">
                                        Extra Large Modal window
                                    </x-modal-button>

                                    <x-modal-layout extra id="sizedModalXl">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

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
                </div>

                <x-col-6>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Full screen</h5>
                            <h6 class="card-subtitle text-muted">These sizes kick in at certain breakpoints to avoid scrollbars on smaller viewports.
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>

                                    <!-- BEGIN  modal -->
                                    <x-modal-button primary data-bs-target="#sizedModalFull">
                                        fullscreen Modal window
                                    </x-modal-button>

                                    <x-modal-layout fullscreen id="sizedModalFull">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

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
                            <h5 class="card-title">Scroll</h5>
                            <h6 class="card-subtitle text-muted">These sizes kick in at certain breakpoints to avoid scrollbars on smaller viewports.
                            </h6>
                        </div>
                        <div class="card-body text-center">
                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely
                                        custom content.</p>

                                    <!-- BEGIN  modal -->
                                    <x-modal-button primary data-bs-target="#sizedModalScroll">
                                        scroll Modal window
                                    </x-modal-button>

                                    <x-modal-layout scroll id="sizedModalScroll">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>
                                                @foreach (range(1,100) as $item)
                                                    {{$item}} <br>
                                                @endforeach
                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                        </x-modal-footer>
                                    </x-modal-layout>
                                    <!-- END  modal -->

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
                            <h5 class="card-title">Toggle between modals</h5>
                            <h6 class="card-subtitle text-muted">These sizes kick in at certain breakpoints to avoid scrollbars on smaller viewports.
                            </h6>
                        </div>
                        <div class="card-body text-center">

                            <x-navtab class="nav-bordered mb-3">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <x-modal-button primary data-bs-target="#exampleModalToggle">
                                        Open first modal
                                    </x-modal-button>

                                    <x-modal-layout id="exampleModalToggle">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>

                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>

                                            <x-modal-button primary data-bs-target="#exampleModalToggle2" data-bs-dismiss="modal">
                                                modal2
                                            </x-modal-button>

                                        </x-modal-footer>
                                    </x-modal-layout>

                                    <x-modal-layout id="exampleModalToggle2">
                                        <x-modal-header>
                                            <h5 class="modal-title">Default modal </h5>
                                        </x-modal-header>
                                        <x-modal-body>
                                            <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                                                notifications, or completely custom content.</p>

                                        </x-modal-body>
                                        <x-modal-footer>
                                            <x-button secondary data-bs-dismiss="modal">Close</x-button>
                                            <x-button primary>Save changes</x-button>
                                            <x-modal-button primary data-bs-target="#exampleModalToggle" data-bs-dismiss="modal">
                                                modal1
                                            </x-modal-button>
                                        </x-modal-footer>
                                    </x-modal-layout>

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

            </div>


        </x-www-uidemo>
