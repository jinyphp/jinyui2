<x-www-layout>
    <main class="content">

        <div class="container p-0">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile Settings</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="container p-0">
            <div class="row">
                <!-- 왼쪽 메뉴 -->
                <div class="col-md-4 col-xl-3">
                    @includeIf('jiny-profile::home.sidemenu')
                </div>

                <div class="col-md-8 col-xl-9">
                    <!-- contents -->
                    <!-- -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                패스워드 변경
                            </h4>
                            <p class="text-muted font-14">
                                패스워드를 변경할 수 있습니다.
                            </p>

                            @livewire("profile-password")

                        </div>
                    </div>




                    <!-- -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                계정 정보
                            </h4>
                            <p class="text-muted font-14">
                                개인정보와 주소를 수정하세요.
                            </p>
                            @livewire('profile-email')
                        </div>
                    </div>
                </div>

            </div> <!-- end of row -->
        </div> <!-- end of container -->

    </main>
</x-www-layout>
