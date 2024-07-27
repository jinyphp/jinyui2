<x-jinyui-theme theme="adminkit" class="bootstrap">

    <div class="container-fluid-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Advanced Inputs</h1><a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/" target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12">
                <x-card>
                    <div class="card-header">
                        <h5 class="card-title">Choices.js</h5>
                        <h6 class="card-subtitle text-muted">A vanilla, lightweight, configurable select box/text input plugin.</h6>
                    </div>
                    <div class="card-body">
                        @include("www::slot1.docs.ui.forms.advance.choices")
                    </div>
                </x-card>


            </div>

            <div class="col-12">
                <x-card>
                    <div class="card-header">
                        <h5 class="card-title">Flatpickr</h5>
                        <h6 class="card-subtitle text-muted">JavaScript date and time picker.</h6>
                    </div>
                    <div class="card-body">
                        @include("www::slot1.docs.ui.forms.advance.flatpickr")
                    </div>
                </x-card>


            </div>

            <div class="col-12">
                <x-card>
                    <div class="card-header">
                        <h5 class="card-title">Input Masks</h5>
                        <h6 class="card-subtitle text-muted">A vanilla javascript library which creates an input mask.</h6>
                    </div>
                    <div class="card-body">
                        @include("www::slot1.docs.ui.forms.advance.masks")
                    </div>
                </x-card>


            </div>
        </div>

    </div>

</x-jinyui-theme>
