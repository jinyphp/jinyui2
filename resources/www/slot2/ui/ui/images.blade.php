<x-theme theme="admin.sidebar">
    <x-theme-layout>

            @include("www::slot1.docs.ui.docs.ui.widgets.pages.title",[
                'title'=>"이미지 출력",
                'subtitle'=>"x-img 테그는 이미지를 다양한 속성을 이용하여 출력할 수 있습니다."
            ])

            <div class="relative">
                <div class="absolute right-0 bottom-4">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Responsive images</h5>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <x-img-res src="/img/avatars/avatar.jpg"/>

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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title"><h5 class="card-title">Image thumbnails</h5></h5>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="flex flex-row gap-2">
                                        <x-img-thumb src="/img/avatars/avatar.jpg" width="140" height="140"/>
                                        <x-img-thumb src="/img/avatars/avatar.jpg" class="mb-2 rounded me-2"  alt="Placeholder" width="140" height="140"/>
                                    </div>

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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title"><h5 class="card-title">Aligning images</h5></h5>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div>
                                        <x-img-round src="/img/avatars/avatar.jpg" class="float-start" width="140" height="140"/>
                                        <x-img-round src="/img/avatars/avatar.jpg" class="float-end" width="140" height="140"/>
                                    </div>
                                    <br>
                                    <div>
                                        <x-img-round src="/img/avatars/avatar.jpg" class="mx-auto d-block" width="140" height="140"/>
                                    </div>

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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Images Style</h5>
                            <h6 class="card-subtitle text-muted">Lightweight styles for images.</h6>
                        </x-card-header>
                        <x-card-body >
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >
                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="flex flex-row gap-2">
                                        <x-img-round class="mb-2 me-2" src="/img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140"/>
                                        <x-img-circle class="mb-2 me-2" src="/img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140"/>
                                    </div>

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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Picture</h5>
                            <h6 class="card-subtitle text-muted"></h6>
                        </x-card-header>
                        <x-card-body>
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="text-center">
                                        ​<picture>
                                            <img src="/img/photos/unsplash-1.jpg" class="img-fluid img-thumbnail" alt="...">
                                        </picture>
                                    </div>

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
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>
                            <h5 class="card-title">Figures</h5>
                            <h6 class="card-subtitle text-muted">Figures는 이미지와 텍스트를 같이 묽어서 출력할 수 있는 UI 기술입니다.</h6>
                        </x-card-header>
                        <x-card-body >
                            <x-navtab class="mb-3 nav-bordered">
                                <x-navtab-item class="show active" >

                                    <x-navtab-link class="rounded-0 active">
                                        미리보기
                                    </x-navtab-link>
                                    {{-- preview 코드를 삽입합니다. --}}
                                    <div class="flex flex-row gap-2">
                                        <div>
                                            <x-figure>
                                                <img src="/img/photos/unsplash-1.jpg" class="rounded figure-img img-fluid" alt="...">
                                                <x-figure-text>
                                                    A caption for the above image.
                                                </x-figure-text>
                                            </x-figure>
                                        </div>

                                        <div>
                                            <x-figure>
                                                <img src="/img/photos/unsplash-2.jpg" class="rounded figure-img img-fluid" alt="...">
                                                <x-figure-text class="text-end">
                                                    A caption for the above image.
                                                </x-figure-text>
                                            </x-figure>
                                        </div>
                                    </div>

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
                </x-col-6>

            </x-row>


    </x-theme-layout>
</x-theme>
