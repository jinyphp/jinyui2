<x-www-uidemo>
<!-- start page title -->
<x-row >
    <x-col class="col-8">
        <div class="page-title-box">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Input Groups</li>
            </ol>

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Input Groups</h1>
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
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Default</h5>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username">
                    <span class="input-group-text">@example.com</span>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">https://example.com/users/</span>
                    <input type="text" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-text">.00</span>
                </div>

                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                    <input type="text" class="form-control">
                </div>

            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Checkbox and radio addons</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="mb-0">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <input type="checkbox">
                                </div>
                                <input type="text" class="form-control" placeholder="Checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-0">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <input type="radio">
                                </div>
                                <input type="text" class="form-control" placeholder="Radio">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Sizing</h5>
            </div>
            <div class="card-body">

                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="input-group input-group-sm">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Select addons</h5>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <select class="form-select flex-grow-1">
                        <option>Select...</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                    <button class="btn btn-secondary" type="button">Go!</button>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <select class="form-select">
                        <option>Select...</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                    <button class="btn btn-secondary" type="button">Go!</button>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select">
                        <option>Select...</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Search for...">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </div>
                <div class="input-group">
                    <button class="btn btn-secondary" type="button">Go!</button>
                    <input type="text" class="form-control" placeholder="Search for...">
                    <select class="form-select">
                        <option>Select...</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Button addons</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="mb-3">
                            <div class="input-group">
                                <button class="btn btn-secondary" type="button">Go!</button>
                                <input type="text" class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md">
                        <div class="mb-0">
                            <div class="input-group">
                                <button class="btn btn-secondary" type="button">Hate it</button>
                                <input type="text" class="form-control" placeholder="Product name">
                                <button class="btn btn-secondary" type="button">Love it</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Buttons with dropdowns</h5>
            </div>
            <div class="card-body demo-vertical-spacing-sm button-dropdown-input-group-demo">
                <div class="row">
                    <div class="col-md">

                        <div class="input-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="col-md">

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">Action</button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Segmented buttons</h5>
            </div>
            <div class="card-body demo-vertical-spacing-sm button-dropdown-input-group-demo">
                <div class="row">
                    <div class="col-md">

                        <div class="input-group">
                            <button type="button" class="btn btn-secondary">Action</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="col-md">

                        <div class="input-group">
                            <input type="text" class="form-control">
                            <button type="button" class="btn btn-secondary">Action</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-www-uidemo>

