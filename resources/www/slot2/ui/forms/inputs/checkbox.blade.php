<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>

            <h1 class="h3 mb-3">Checkbox</h1>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Checkboxes</h5>
                        </x-card-header>
                        <x-card-body>
                            <div>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label">
                                        Option one is this and that—be sure to include why it's great
                                    </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" >
                                    <span class="form-check-label">
                                        Option two is disabled
                                    </span>
                                </label>
                            </div>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Disabled</h5>
                        </div>
                        <div class="card-body">

                            <label class="form-check">
                                <input class="form-check-input" type="checkbox" value="" disabled="">
                                <span class="form-check-label">
                                    Can't check this
                                </span>
                            </label>

                            <div class="mt-2">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck5" checked="" disabled="">
                                    <label class="form-check-label" for="customCheck5">Check this custom checkbox</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck6" disabled="">
                                    <label class="form-check-label" for="customCheck6">Check this custom checkbox</label>
                                </div>
                            </div>
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6>
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

                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Switches Disable</h5>
                        </div>
                        <div class="card-body">

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
                </x-col-6>





                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Inline</h5>
                        </x-card-header>
                        <x-card-body>
                            <div class="mb-2">
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

                            <div class="mb-2">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                    <label class="form-check-label" for="customCheck3">Check this custom checkbox</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                    <label class="form-check-label" for="customCheck4">Check this custom checkbox</label>
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
                            <x-row>
                                <x-col-4>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked="">
                                        <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-success mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor2" checked="">
                                        <label class="form-check-label" for="customCheckcolor2">Success Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-info mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor3" checked="">
                                        <label class="form-check-label" for="customCheckcolor3">Info Checkbox</label>
                                    </div>

                                </x-col-4>
                                <x-col-4>
                                    <div class="form-check form-checkbox-secondary mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor6" checked="">
                                        <label class="form-check-label" for="customCheckcolor6">Secondary Checkbox</label>
                                    </div>
                                    <div class="form-check  form-checkbox-warning mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor4" checked="">
                                        <label class="form-check-label" for="customCheckcolor4">Warning Checkbox</label>
                                    </div>
                                    <div class="form-check form-checkbox-danger mb-2">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor5" checked="">
                                        <label class="form-check-label" for="customCheckcolor5">Danger Checkbox</label>
                                    </div>

                                </x-col-4>
                                <x-col-4>
                                    <div class="form-check form-checkbox-dark">
                                        <input type="checkbox" class="form-check-input" id="customCheckcolor7" checked="">
                                        <label class="form-check-label" for="customCheckcolor7">Dark Checkbox</label>
                                    </div>
                                </x-col-4>
                            </x-row>

                        </x-card-body>
                    </x-card>
                </x-col-6>



            </x-row>

        </x-www-uidemo>
