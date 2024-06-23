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
                                <li class="breadcrumb-item active">Input Text</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Inputs Text</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <x-row>


                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">x-Text</h5>
                        </div>
                        <div class="card-body">
                            <x-form-text placeholder="Input"/>
                        </div>
                    </x-card>
                </x-col-6>





                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                            <h5 class="card-title mb-0">x-Email</h5>
                            <p>지니UI는 이메일 입력양식을 받기 위한 x-form-email 테그를 제공합니다.</p>
                        </x-card-header>
                        <x-card-body>

                            <x-form-row>
                                <x-form-label>
                                    Email address
                                </x-form-label>
                                <x-form-item>
                                    <x-form-email placeholder="Email"/>
                                </x-form-item>
                            </x-form-row>

                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                            <h5 class="card-title mb-0">x-fome-number</h5>
                            <p>지니UI는 이메일 입력양식을 받기 위한 x-form-email 테그를 제공합니다.</p>
                        </x-card-header>
                        <x-card-body>

                            <x-form-row>
                                <x-form-label>
                                    People
                                </x-form-label>
                                <x-form-item>
                                    <x-form-number placeholder="0"/>
                                </x-form-item>
                            </x-form-row>

                            <div class="mb-3">
                                <label for="example-number" class="form-label">Number</label>
                                <input class="form-control" id="example-number" type="number" name="number">
                            </div>

                        </x-card-body>
                    </x-card>
                </x-col-6>






                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                            <h5 class="card-title mb-0">Datalists</h5>
                            <p></p>
                        </x-card-header>
                        <x-card-body>

                            <label for="exampleDataList" class="form-label">Datalist example</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>

                        </x-card-body>
                    </x-card>
                </x-col-6>




                <x-col-6 class="mb-4">

                    <x-card class="h-100">
                        <x-card-header>
                            passowrd
                        </x-card-header>
                        <x-card-body>
                            <div class="mb-3">
                                <label for="example-password" class="form-label">Password</label>
                                <input type="password" id="example-password" class="form-control" value="password">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Show/Hide Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-0">
                                <label for="example-helping" class="form-label">Helping text</label>
                                <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                            </div>
                        </x-card-body>

                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                        </x-card-header>
                        <x-card-body>
                            <div class="mb-3">
                                <label for="example-date" class="form-label">Date</label>
                                <input class="form-control" id="example-date" type="date" name="date">
                            </div>

                            <div class="mb-3">
                                <label for="example-month" class="form-label">Month</label>
                                <input class="form-control" id="example-month" type="month" name="month">
                            </div>

                            <div class="mb-3">
                                <label for="example-time" class="form-label">Time</label>
                                <input class="form-control" id="example-time" type="time" name="time">
                            </div>

                            <div class="mb-3">
                                <label for="example-week" class="form-label">Week</label>
                                <input class="form-control" id="example-week" type="week" name="week">
                            </div>




                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6 class="mb-4">
                    <x-card class="h-100">
                        <x-card-header>
                            <h5 class="card-title mb-0">색상선택</h5>
                            <p></p>
                        </x-card-header>
                        <x-card-body>

                            <div class="mb-3">
                                <label for="exampleColorInput" class="form-label">Color picker</label>
                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                            </div>

                            <div class="mb-3">
                                <label for="example-color" class="form-label">Color</label>
                                <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                            </div>

                        </x-card-body>
                    </x-card>
                </x-col-6>



            </x-row>

        </x-www-uidemo>
