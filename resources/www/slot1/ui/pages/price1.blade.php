<style>
    .tab-content>.tab-pane {
        display: none
    }

    .tab-content>.active {
        display: block
    }
</style>
<x-www-uidemo>
    <!-- start page title -->
    <x-row>
        <x-col-12>
            <div class="page-title-box">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Pages</a>
                    </li>
                    <li class="breadcrumb-item active">Price</li>
                </ol>

                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Plans &amp; Pricing1</h1>
                </div>
            </div>
        </x-col-12>
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
        <div class="col-md-10 col-xl-8 mx-auto">
            <h1 class="text-center">We have a plan for everyone</h1>
            <p class="lead text-center mb-4">Whether you're a business or an individual, 14-day trial no credit card required.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-3 mx-auto">
            <div class="btn-group">
                <button href="#monthly" class="btn bnt-primary btn-outline-primary">Monthly billing</button>
                <button href="#annual" active class="btn bnt-primary btn-outline-primary">Annual billing</button>

            </div>
        </div>
    </div>
    <x-row>
        <div class="col-md-10 col-xl-8 mx-auto">
            dasfd
            <x-row-center class="mt-3 mb-2">
                <x-tab-header group class="btn-group">
                    <x-tab-button href="#monthly" class="btn-outline-primary">Monthly billing</x-tab-button>
                    <x-tab-button href="#annual" active class="btn-outline-primary">Annual billing</x-tab-button>
                </x-tab-header>
            </x-row-center>

            <x-tab-contents>
                <x-tab-item id="monthly">
                    @include("www::slot1.ui.pages.prices.monthly")
                </x-tab-item>
                <x-tab-item id="annual">
                    @include("www::slot1.ui.pages.prices.annual")
                </x-tab-item>
            </x-tab-contents>

        </div>
    </x-row>

    <x-row>
        <div class="col-md-10 col-xl-8 mx-auto">
            <hr>
            @include("www::slot1.ui.pages.prices.questions")
        </div>
    </x-row>

</x-www-uidemo>
