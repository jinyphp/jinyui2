<x-www-uidemo>


            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        	<li class="breadcrumb-item active">Projects</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Projects</h1>
                            <p>
                                프로젝트를 관리할 수 있는 UI화면 구현 입니다.
                                다수의 프로젝트들의 데이터는 json으로 구성하며, UIcell을 이용하여 json 데이터를 각각의 cell에 맞추어 출력할 수 있습니다.
                            </p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                        <a href="#" class="btn btn-primary">추가</a>
                    </div>
                </div>
            </div>




            @php
                $projects ='[{
                    "id":1,
                    "title":"Landing page redesign",
                    "status":"finished",
                    "description":"Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.",
                    "team":["/img/avatars/avatar-3.jpg","/img/avatars/avatar-2.jpg","/img/avatars/avatar.jpg"],
                    "progress":10


                },{
                    "id":2,
                    "title":"Company posters",
                    "status":"progress",
                    "description":"Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa.",
                    "team":["/img/avatars/avatar.jpg"],
                    "progress":15
                },{
                    "id":3,
                    "title":"Product page design",
                    "status":"finished",
                    "description":"Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa.",
                    "team":["/img/avatars/avatar-2.jpg","/img/avatars/avatar.jpg"],
                    "progress":20
                },{
                    "id":4,
                    "title":"Upgrade CRM software",
                    "status":"progress",
                    "description":"Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.",
                    "team":["/img/avatars/avatar-3.jpg","/img/avatars/avatar-2.jpg"],
                    "progress":30
                },{
                    "id":5,
                    "image":"/img/photos/unsplash-1.jpg",
                    "title":"Fix form validation",
                    "status":"progress",
                    "description":"Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris.",
                    "team":["/img/avatars/avatar-3.jpg"],
                    "progress":45
                },{
                    "id":6,
                    "image":"/img/photos/unsplash-2.jpg",
                    "title":"New company logo",
                    "status":"hold",
                    "description":"Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris.",
                    "team":["/img/avatars/avatar-3.jpg","/img/avatars/avatar-2.jpg","/img/avatars/avatar.jpg"],
                    "progress":50

                },{
                    "id":7,
                    "image":"/img/photos/unsplash-3.jpg",
                    "title":"Upgrade to latest Maps API",
                    "status":"Finished",
                    "description":"Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.",
                    "team":["/img/avatars/avatar-3.jpg","/img/avatars/avatar.jpg"],
                    "progress":57
                },{
                    "id":8,
                    "image":"/img/photos/unsplash-1.jpg",
                    "title":"Refactor backend templates",
                    "status":"hold",
                    "description":"Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris.",
                    "team":["/img/avatars/avatar-3.jpg","/img/avatars/avatar-2.jpg"],
                    "progress":100
                }]';
            @endphp

            <x-row>
                @foreach (json_decode($projects, true) as $item)
                    <x-col class="col-12 col-md-6 col-lg-3">
                        @include('www::slot1.docs.ui.pages.projects.task', $item)
                    </x-col>
                @endforeach
            </x-row>

        </x-container-fluid>
    </x-main-content>


</x-theme>
