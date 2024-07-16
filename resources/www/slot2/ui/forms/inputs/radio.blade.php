<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        	<li class="breadcrumb-item active">Input</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Input Radio</h1>
                            <p></p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Radios</h5>
                        </x-card-header>
                        <x-card-body>
                            {!! xRadioGroup()
                                ->addRadio(
                                    xRadio("radios-example", "option1"),
                                    "Option one is this and that—be sure to include why it's great")
                                ->addRadio(
                                    xRadio("radios-example", "option2")->setChecked(),
                                    "Option two can be something else and selecting it will deselect option one")
                                ->addRadio(
                                    xRadio("radios-example", "option3")->setDisable(),
                                    "Option three is disabled")
                            !!}
                        </x-card-body>
                    </x-card>
                </x-col-6>




                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Inline</h5>
                        </x-card-header>
                        <x-card-body>
                            <div class="mt-2">
                                {!! xRadioGroup("inline")
                                    ->addRadio(
                                        xRadio("customRadio1", "option1"),
                                        "Toggle this custom radio")
                                    ->addRadio(
                                        xRadio("customRadio1", "option2")->setChecked(),
                                        "Or toggle this other custom radio")
                                !!}
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
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Disabled</h5>
                        </x-card-header>
                        <x-card-body>
                            <div class="mt-2">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio5" name="customRadio2" class="form-check-input" disabled="">
                                    <label class="form-check-label" for="customRadio5">Toggle this custom radio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio6" name="customRadio2" class="form-check-input" checked="" disabled="">
                                    <label class="form-check-label" for="customRadio6">Or toggle this other custom radio</label>
                                </div>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Colors</h5>
                        </x-card-header>
                        <x-card-body>
                            {!! xRadioLabel(xRadio("customRadiocolor1", "option1")
                                ->setChecked(), "Default Radio")
                                ->addClass("mb-2") !!}

                            {!! xRadioLabel(xRadio("customRadiocolor2", "option1")->setChecked(), "Success Radio")
                                ->addClass("form-radio-success")
                                ->addClass("mb-2") !!}

                            <div class="form-check form-radio-info mb-2">
                                <input type="radio" id="customRadiocolor3" name="customRadiocolor3" class="form-check-input" checked="">
                                <label class="form-check-label" for="customRadiocolor3">Info Radio</label>
                            </div>
                            <div class="form-check form-radio-secondary mb-2">
                                <input type="radio" id="customRadiocolor6" name="customRadiocolor6" class="form-check-input" checked="">
                                <label class="form-check-label" for="customRadiocolor6">Secondary Radio</label>
                            </div>
                            <div class="form-check form-radio-warning mb-2">
                                <input type="radio" id="customRadiocolor4" name="customRadiocolor4" class="form-check-input" checked="">
                                <label class="form-check-label" for="customRadiocolor4">Warning Radio</label>
                            </div>
                            <div class="form-check form-radio-danger mb-2">
                                <input type="radio" id="customRadiocolor5" name="customRadiocolor5" class="form-check-input" checked="">
                                <label class="form-check-label" for="customRadiocolor5">Danger Radio</label>
                            </div>
                            <div class="form-check form-radio-dark">
                                <input type="radio" id="customRadiocolor7" name="customRadiocolor7" class="form-check-input" checked="">
                                <label class="form-check-label" for="customRadiocolor7">Dark Radio</label>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

            </x-row>
        </x-www-uidemo>
