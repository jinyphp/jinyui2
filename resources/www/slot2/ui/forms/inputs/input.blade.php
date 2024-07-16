<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jiny</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Input</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Inputs</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <x-row>
                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">x-Input</h5>
                        </div>
                        <div class="card-body">
                            <x-form-input type="text"/>
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-4">Sizes</h5>
                            <h6 class="card-subtitle text-muted">입력양식의 크기를 조절할 수 있습니다.</h6>
                        </div>
                        <div class="card-body">
                            <x-form-text class="form-control-lg mb-3" placeholder="Large Input"/>
                            <x-form-text class="mb-3" placeholder="Medium Input"/>
                            <x-form-text class="form-control-sm mb-3" placeholder="Small Input"/>
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Disabled</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Disabled input</label>
                                <input type="text" class="form-control" placeholder="Disabled input" disabled="">
                            </div>
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Read only</h5>
                        </div>
                        <div class="card-body">
                            <label class="form-label">Readonly input</label>
                            <input class="form-control" type="text" placeholder="Readonly input" readonly="">
                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                            <h5 class="card-title mb-0">Readonly plain text</h5>
                            <p></p>
                        </x-card-header>
                        <x-card-body>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>
                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>
        </x-www-uidemo>
