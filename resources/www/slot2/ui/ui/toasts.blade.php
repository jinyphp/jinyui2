<x-theme theme="admin.sidebar">
    <x-theme-layout>

          <!-- start page title -->
        	<x-row >
            <x-col class="col-8">
                <div class="page-title-box">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                        <li class="breadcrumb-item active">Toasts</li>
                    </ol>

              <div class="mb-3">
                        <h1 class="align-middle h3 d-inline">Toasts</h1>
                          <p></p>
                    </div>
                </div>
            </x-col>
        </x-row>
        <!-- end page title -->

        <div class="relative">
          <div class="absolute right-0 bottom-4">
              <div class="btn-group">
                  <a href="#" class="btn btn-secondary">메뉴얼</a>
              </div>
          </div>
      </div>


        <x-row>
          <x-col-6>
            <!-- -->
            <x-card>
                <x-card-header>
                  <h5 class="card-title">Basic</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                </x-card-header>
                <x-card-body>
                  <x-navtab class="mb-3 nav-bordered">
                    <x-navtab-item class="show active" >

                        <x-navtab-link class="rounded-0 active">
                            미리보기
                        </x-navtab-link>
                        {{-- preview 코드를 삽입합니다. --}}
                        <button type="button" class="btn btn-primary" onclick="toasty()" id="liveToastBtn">Show live toast</button>

                        <div class="bottom-0 p-3 position-fixed end-0" style="z-index: 11">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    {{-- <img src="..." class="rounded me-2" alt="..."> --}}
                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>

                        <script>
                            function toasty()
                            {
                                let toast = document.getElementById("liveToast");
                                let toastEl = new bootstrap.Toast(toast, {
                                    animation:true,
                                    delay:2000
                                })
                                toastEl.show();
                            }
                        </script>

                    </x-navtab-item>

                    <x-navtab-item >
                        <x-navtab-link class="rounded-0">
                            코드보기
                        </x-navtab-link>
                        ...
                    </x-navtab-item>
                </x-navtab>
                </x-card-body>
            </x-card>

            <x-card>
                <x-card-header>

                </x-card-header>
                <x-card-body>

                </x-card-body>
            </x-card>
        </x-col-6>


            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Translucent</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                              <img src="..." class="rounded me-2" alt="...">
                              <strong class="me-auto">Bootstrap</strong>
                              <small class="text-muted">11 mins ago</small>
                              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                              Hello, world! This is a toast message.
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Stacking</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <div class="toast-container-fluid">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Bootstrap</strong>
                                <small class="text-muted">just now</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="toast-body">
                                See? Just like this.
                              </div>
                            </div>

                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                              <div class="toast-header">
                                <img src="..." class="rounded me-2" alt="...">
                                <strong class="me-auto">Bootstrap</strong>
                                <small class="text-muted">2 seconds ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                              </div>
                              <div class="toast-body">
                                Heads up, toasts will stack automatically
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Custom content</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                              Hello, world! This is a toast message.
                              <div class="pt-2 mt-2 border-top">
                                <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Color schemes</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <div class="text-white border-0 toast align-items-center bg-primary" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                              <div class="toast-body">
                                Hello, world! This is a toast message.
                              </div>
                              <button type="button" class="m-auto btn-close btn-close-white me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Placement</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <form>
                            <div class="mb-3">
                              <label for="selectToastPlacement">Toast placement</label>
                              <select class="mt-2 form-select" id="selectToastPlacement">
                                <option value="" selected>Select a position...</option>
                                <option value="top-0 start-0">Top left</option>
                                <option value="top-0 start-50 translate-middle-x">Top center</option>
                                <option value="top-0 end-0">Top right</option>
                                <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                <option value="top-50 start-50 translate-middle">Middle center</option>
                                <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                <option value="bottom-0 start-0">Bottom left</option>
                                <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                <option value="bottom-0 end-0">Bottom right</option>
                              </select>
                            </div>
                          </form>
                          <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
                            <div class="p-3 toast-container-fluid position-absolute" id="toastPlacement">
                              <div class="toast">
                                <div class="toast-header">
                                  <img src="..." class="rounded me-2" alt="...">
                                  <strong class="me-auto">Bootstrap</strong>
                                  <small>11 mins ago</small>
                                </div>
                                <div class="toast-body">
                                  Hello, world! This is a toast message.
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>


            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Placement</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">



                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Placement</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <!-- Position it: -->
                            <!-- - `.toast-container-fluid` for spacing between toasts -->
                            <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                            <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container-fluid  -->
                            <div class="top-0 p-3 toast-container-fluid position-absolute end-0">

                              <!-- Then put toasts within -->
                              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                  <img src="..." class="rounded me-2" alt="...">
                                  <strong class="me-auto">Bootstrap</strong>
                                  <small class="text-muted">just now</small>
                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                  See? Just like this.
                                </div>
                              </div>

                              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                  <img src="..." class="rounded me-2" alt="...">
                                  <strong class="me-auto">Bootstrap</strong>
                                  <small class="text-muted">2 seconds ago</small>
                                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                  Heads up, toasts will stack automatically
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
            </x-col-6>

            <x-col-6>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Placement</h5>
                        <h6 class="card-subtitle text-muted"></h6>
                    </div>
                    <div class="text-center card-body">

                        <!-- Flexbox container-fluid for aligning the toasts -->
          <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

          <!-- Then put toasts within -->
          <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img src="..." class="rounded me-2" alt="...">
              <strong class="me-auto">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
              Hello, world! This is a toast message.
            </div>
          </div>
          </div>

                    </div>
                </div>
            </x-col-6>


        </x-row>


    </x-main-content>

</x-theme>

{{--
<script>
    window.addEventListener('load',function(){
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, {
                                        animation:true,
                                        delay:2000
            })
        });
    });
</script>
--}}
