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
                    <!--  -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                로그아웃
                            </h4>
                            <p class="text-muted font-14">
                                사이트 접속을 해제합니다.
                            </p>
                            <button class="btn btn-danger">로그아웃</button>
                        </div>
                    </div>
                    <!-- -->

                    <div class="card border-danger border">
                        <div class="card-body">
                            <h4 class="header-title">
                                회원탈퇴
                            </h4>
                            <p class="text-muted font-14">
                                회원을 탈퇴합니다.
                            </p>
                            @livewire('auth-out')

                        </div>
                    </div>


                </div>

            </div> <!-- end of row -->
        </div> <!-- end of container -->

    </main>

</x-www-layout>
