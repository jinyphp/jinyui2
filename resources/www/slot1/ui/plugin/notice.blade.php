<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Plugin</a></li>
                        	<li class="breadcrumb-item active">Notifications</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Notifications</h1>
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
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Toast notifications</h5>
                            <h6 class="card-subtitle text-muted">Notyf is a minimalistic JavaScript library for toast notifications. See official
                                documentation <a href="https://github.com/caroso1222/notyf" target="_blank" rel="noopener noreferrer nofollow">here</a>.
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="notyf-message">Message</label>
                                        <input id="notyf-message" name="notyf-message" type="text" class="form-control" placeholder="Enter a message">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="notyf-type">Type</label>
                                        <select class="form-select" id="notyf-type" name="notyf-type">
                                            <option value="default" selected="">Default</option>
                                            <option value="success">Success</option>
                                            <option value="warning">Warning</option>
                                            <option value="danger">Danger</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="notyf-duration">Duration</label>
                                        <select class="form-select" id="notyf-duration" name="notyf-duration">
                                            <option value="2500">2.5s</option>
                                            <option value="5000" selected="">5s</option>
                                            <option value="7500">7.5s</option>
                                            <option value="10000">10s</option>
                                        </select>
                                    </div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" id="notyf-ripple" checked="">
                                        <span class="form-check-label">
                                            With ripple
                                        </span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" id="notyf-dismissible">
                                        <span class="form-check-label">
                                            Dismissible
                                        </span>
                                    </label>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label mb-2">Position X</label>
                                        <label class="form-check">
                                            <input type="radio" name="notyf-position-x" class="form-check-input" value="left">
                                            <span class="form-check-label">Left</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" name="notyf-position-x" class="form-check-input" value="center">
                                            <span class="form-check-label">Center</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" name="notyf-position-x" class="form-check-input" value="right" checked="">
                                            <span class="form-check-label">Right</span>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label mb-2">Position X</label>
                                        <label class="form-check">
                                            <input type="radio" name="notyf-position-y" class="form-check-input" value="top" checked="">
                                            <span class="form-check-label">Top</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" name="notyf-position-y" class="form-check-input" value="bottom">
                                            <span class="form-check-label">Bottom</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <button class="btn btn-primary me-1" id="notyf-show">Show notification</button>
                        </div>
                    </div>
                </div>
            </div>

        </x-www-uidemo>
