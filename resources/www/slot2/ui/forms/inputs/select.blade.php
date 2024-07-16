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
                                <li class="breadcrumb-item active">Select2</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Select2</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <x-row>
                <x-col-6>
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


                        </div>
                    </x-card>


                </x-col-6>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Disabled</h5>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label">Disabled select menu</label>
                                <select class="form-select" disabled="">
                                    <option>Disabled select</option>
                                </select>
                            </div>

                        </div>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Multi Select</h5>
                        </div>
                        <div class="card-body">

                            <select multiple="" class="form-control">
                                <option>Open this select menu</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>

                        </div>
                    </x-card>
                </x-col-6>




                <x-col-6>
                    <x-card>
                        <x-card-header>

                        </x-card-header>
                        <x-card-body>

                        </x-card-body>
                    </x-card>
                </x-col-6>


            </x-row>
        </x-www-uidemo>
