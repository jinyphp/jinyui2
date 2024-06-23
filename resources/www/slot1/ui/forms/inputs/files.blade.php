<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>
            <h1 class="h3 mb-3">Filr and Uploads</h1>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>
                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Default file input</label>
                                <input type="file" class="form-control" id="example-fileinput">
                            </div>

                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Disabled </h5>
                        </x-card-header>
                        <x-card-body>


                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                <input class="form-control" type="file" id="formFileDisabled" disabled>
                            </div>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Size</h5>
                        </x-card-header>
                        <x-card-body>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                            <div>
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title mb-0">Dropzone</h5>
                        </x-card-header>
                        <x-card-body>

                            @include("www::slot1.docs.ui.forms.inputs.files.dropzone")

                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>
        </x-www-uidemo>
