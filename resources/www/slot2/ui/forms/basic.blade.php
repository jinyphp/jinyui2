<x-www-uidemo>
    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        	<li class="breadcrumb-item active">Basic Inputs</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Basic Inputs</h1>
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
        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">

        </div>
    </section>

    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">


            <div class="row">
                <div class="col-12 col-lg-6">


                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Input</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Input">
                        </div>
                    </x-card>


                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Textarea</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Checkboxes</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label">
                                        Option one is this and that—be sure to include why it's great
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" disabled="">
                                    <span class="form-check-label">
                                        Option two is disabled
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="option1">
                                    <span class="form-check-label">
                                        1
                                    </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="option2">
                                    <span class="form-check-label">
                                        2
                                    </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="option3" disabled="">
                                    <span class="form-check-label">
                                        3
                                    </span>
                                </label>
                            </div>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sizes</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Large input">
                            <input class="form-control mb-3" type="text" placeholder="Medium input">
                            <input class="form-control form-control-sm" type="text" placeholder="Small input">
                        </div>
                    </x-card>
                </div>

                <div class="col-12 col-lg-6">
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Radios</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="option1" name="radios-example" checked="">
                                    <span class="form-check-label">
                                        Option one is this and that—be sure to include why it's great
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="option2" name="radios-example">
                                    <span class="form-check-label">
                                        Option two can be something else and selecting it will deselect option one
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="option3" name="radios-example" disabled="">
                                    <span class="form-check-label">
                                        Option three is disabled
                                    </span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option1">
                                    <span class="form-check-label">
                                        1
                                    </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option2">
                                    <span class="form-check-label">
                                        2
                                    </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inline-radios-example" value="option3" disabled="">
                                    <span class="form-check-label">
                                        3
                                    </span>
                                </label>
                            </div>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Switches</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled="">
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                            </div>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Selects</h5>
                        </div>
                        <div class="card-body">
                            <select class="form-control mb-3">
                                <option selected="">Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>

                            <select multiple="" class="form-control">
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Disabled</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Disabled input</label>
                                <input type="text" class="form-control" placeholder="Disabled input" disabled="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Disabled select menu</label>
                                <select class="form-select" disabled="">
                                    <option>Disabled select</option>
                                </select>
                            </div>
                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="" disabled="">
                                <span class="form-check-label">
                                    Can't check this
                                </span>
                            </label>
                        </div>
                    </x-card>

                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Read only</h5>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" placeholder="Readonly input" readonly="">
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </section>
</x-www-uidemo>
