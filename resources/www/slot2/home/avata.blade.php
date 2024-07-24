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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                프로파일 사진변경
                            </h4>
                            <p class="text-muted font-14">
                                프로필을 돋보이게 하고 사람들이 볼 수 있도록 사진을 업로드하세요.
                                    귀하의 의견과 기여를 쉽게 인식하십시오!
                            </p>

                            <div class="row g-8">
                                <div class="col-2">
                                    @livewire('avata-image',['width'=>"128px"])
                                </div>
                                <div class="col-10">
                                    @livewire('avata-update')
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- -->
                </div>

            </div> <!-- end of row -->
        </div> <!-- end of container -->

    </main>
</x-www-layout>
