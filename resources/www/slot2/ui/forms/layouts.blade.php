<x-www-uidemo>
    <!-- start page title -->
    <x-row>
        <x-col class="col-8">
            <div class="page-title-box">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Layouts</li>
                </ol>

                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Form Layouts</h1>
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

    <x-row>
        <x-col class="col-md-12">
            @include('www::slot1.docs.ui.forms.layouts.inline')
        </x-col>

        <x-col class="col-md-12">
            @include('www::slot1.docs.ui.forms.layouts.row')

        </x-col>

        <x-col class="col-12 col-xl-6">
            @include('www::slot1.docs.ui.forms.layouts.basic')

        </x-col>
        <x-col class="col-12 col-xl-6">
            @include('www::slot1.docs.ui.forms.layouts.horizontal')

        </x-col>
    </x-row>

</x-www-uidemo>
