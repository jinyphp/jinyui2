<x-www-uidemo>
    <!-- Section -->
    <section class="py-2">
        <div class="container px-5">

            <!-- start page title -->
            <x-row>
                <x-col class="col-8">
                    <div class="page-title-box">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">floating</li>
                        </ol>

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">floating</h1>
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


            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            TextArea
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            Select
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
            </div>



        </div>
    </section>
</x-www-uidemo>
