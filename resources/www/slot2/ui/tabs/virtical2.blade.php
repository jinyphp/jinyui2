<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Tab</a></li>
                        	<li class="breadcrumb-item active">Virtical</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Virtical Style Tab</h1>
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

            <x-row>
                <x-col-6>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Tabs Vertical Left</h4>
                            <p class="text-muted font-14 mb-3">
                                You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                            </p>

                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#vertical-left-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Preview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#vertical-left-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        Code
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="vertical-left-tabs-preview">
                                    <div class="row">
                                        <div class="col-sm-3 mb-2 mb-sm-0">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Home</span>
                                                </a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Profile</span>
                                                </a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Settings</span>
                                                </a>
                                            </div>
                                        </div> <!-- end col-->

                                        <div class="col-sm-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Leggings sint. Veniam sint duis incididunt
                                                        do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit
                                                        excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                                                        mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <p class="mb-0">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna
                                                        pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit
                                                        id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Leggings
                                                        enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur
                                                        qui.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                        eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                        aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui.</p>
                                                </div>
                                            </div> <!-- end tab-content-->
                                        </div> <!-- end col-->
                                    </div>
                                    <!-- end row-->
                                </div> <!-- end preview-->

                                <div class="tab-pane" id="vertical-left-tabs-code">
                                    <pre class="mb-0">                                                    <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-3 mb-2 mb-sm-0"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav flex-column nav-pills"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-tab"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tablist"</span> <span class="hljs-attr">aria-orientation</span>=<span class="hljs-string">"vertical"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link active show"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-home-tab"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-home"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-home"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"true"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-home-variant d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Home<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-profile-tab"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-profile"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-profile"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"false"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-account-circle d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Profile<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-settings-tab"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-settings"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-settings"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"false"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-settings-outline d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Settings<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end col--&gt;</span><br><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-9"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-content"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-tabContent"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade active show"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-home"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-home-tab"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-profile"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-profile-tab"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-settings"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-settings-tab"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end tab-content--&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end col--&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br><span class="hljs-comment">&lt;!-- end row--&gt;</span></span>
                                    </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div>
                </x-col-6>

                <x-col-6>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Tabs Vertical Right</h4>
                            <p class="text-muted font-14 mb-3">
                                You can stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.
                            </p>

                            <ul class="nav nav-tabs nav-bordered mb-3">
                                <li class="nav-item">
                                    <a href="#vertical-right-tabs-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Preview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#vertical-right-tabs-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                        Code
                                    </a>
                                </li>
                            </ul> <!-- end nav-->
                            <div class="tab-content">


                                <div class="tab-pane show active" id="vertical-right-tabs-preview">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="tab-content" id="v-pills-tabContent-right">
                                                <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2">
                                                    <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Leggings sint. Veniam sint duis incididunt
                                                        do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit
                                                        excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                                                        mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab2">
                                                    <p class="mb-0">Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna
                                                        pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit
                                                        id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Leggings
                                                        enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur
                                                        qui.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                                                    <p class="mb-0">Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                                            eu, pretium quis, sem. Nulla consequat massa quis enim. Cillum ad ut irure tempor velit nostrud occaecat ullamco
                                                            aliqua anim Leggings sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui.</p>
                                                </div>
                                            </div> <!-- end tabcontent-->
                                        </div> <!-- end col-->

                                        <div class="col-sm-3 mt-2 mt-sm-0">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show" id="v-pills-home-tab2" data-bs-toggle="pill" href="#v-pills-home2" role="tab" aria-controls="v-pills-home2" aria-selected="true">
                                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Home</span>
                                                </a>
                                                <a class="nav-link" id="v-pills-profile-tab2" data-bs-toggle="pill" href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2" aria-selected="false">
                                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Profile</span>
                                                </a>
                                                <a class="nav-link" id="v-pills-settings-tab2" data-bs-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false">
                                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">Settings</span>
                                                </a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row-->
                                </div> <!-- end preview-->


                                <div class="tab-pane" id="vertical-right-tabs-code">
                                    <pre class="mb-0">
                                        <span class="html escape hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"row"</span>&gt;</span><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-9"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-content"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-tabContent-right"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade active show"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-home2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-home-tab2"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-profile2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-profile-tab2"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"tab-pane fade"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-settings2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tabpanel"</span> <span class="hljs-attr">aria-labelledby</span>=<span class="hljs-string">"v-pills-settings-tab2"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">p</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mb-0"</span>&gt;</span>...<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end tabcontent--&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end col--&gt;</span><br><br>    <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"col-sm-3 mt-2 mt-sm-0"</span>&gt;</span><br>        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav flex-column nav-pills"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-tab2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tablist"</span> <span class="hljs-attr">aria-orientation</span>=<span class="hljs-string">"vertical"</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link active show"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-home-tab2"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-home2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-home2"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"true"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-home-variant d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Home<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-profile-tab2"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-profile2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-profile2"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"false"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-account-circle d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Profile<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"nav-link"</span> <span class="hljs-attr">id</span>=<span class="hljs-string">"v-pills-settings-tab2"</span> <span class="hljs-attr">data-bs-toggle</span>=<span class="hljs-string">"pill"</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"#v-pills-settings2"</span> <span class="hljs-attr">role</span>=<span class="hljs-string">"tab"</span> <span class="hljs-attr">aria-controls</span>=<span class="hljs-string">"v-pills-settings2"</span></span><br><span class="hljs-tag">                <span class="hljs-attr">aria-selected</span>=<span class="hljs-string">"false"</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">i</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"mdi mdi-settings-outline d-md-none d-block"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">i</span>&gt;</span><br>                <span class="hljs-tag">&lt;<span class="hljs-name">span</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"d-none d-md-block"</span>&gt;</span>Settings<span class="hljs-tag">&lt;/<span class="hljs-name">span</span>&gt;</span><br>            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span><br>        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span><br>    <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end col--&gt;</span><br><span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span> <span class="hljs-comment">&lt;!-- end row--&gt;</span></span>
                                    </pre> <!-- end highlight-->
                                </div> <!-- end preview code-->
                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div>
                </x-col-6>

            </x-row>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>
                            <div class="tab tab-vertical">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#vertical-icon-tab-1" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-middle"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#vertical-icon-tab-2" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#vertical-icon-tab-3" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square align-middle"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="vertical-icon-tab-1" role="tabpanel">
                                        <h4 class="tab-title">Vertical icon tabs</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="vertical-icon-tab-2" role="tabpanel">
                                        <h4 class="tab-title">Another one</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="vertical-icon-tab-3" role="tabpanel">
                                        <h4 class="tab-title">One more</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                </div>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>
                            <div class="tab tab-vertical tab-danger">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#colored-vertical-icon-tab-1" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-middle"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#colored-vertical-icon-tab-2" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#colored-vertical-icon-tab-3" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square align-middle"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="colored-vertical-icon-tab-1" role="tabpanel">
                                        <h4 class="tab-title">Colored vertical icon tabs</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="colored-vertical-icon-tab-2" role="tabpanel">
                                        <h4 class="tab-title">Another one</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="colored-vertical-icon-tab-3" role="tabpanel">
                                        <h4 class="tab-title">One more</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                </div>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>
                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>
                            <div class="tab tab-vertical tab-dark">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#colored-vertical-icon-tab-1" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-middle"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#colored-vertical-icon-tab-2" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#colored-vertical-icon-tab-3" data-bs-toggle="tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square align-middle"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="colored-vertical-icon-tab-1" role="tabpanel">
                                        <h4 class="tab-title">Colored vertical icon tabs</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="colored-vertical-icon-tab-2" role="tabpanel">
                                        <h4 class="tab-title">Another one</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                    <div class="tab-pane" id="colored-vertical-icon-tab-3" role="tabpanel">
                                        <h4 class="tab-title">One more</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus eget condimentum
                                            rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur ridiculus mus.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                                            justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo.</p>
                                    </div>
                                </div>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>
        </x-www-uidemo>
