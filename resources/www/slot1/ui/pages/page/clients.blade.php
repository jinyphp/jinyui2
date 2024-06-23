<x-www-uidemo>
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Clients</h1>
            </div>

            <x-row>
                <x-col class="col-xl-8">
                    @include("www::slot1.docs.ui.pages.clients.list")
                </x-col>

                <x-col class="col-xl-4">
                    @include("www::slot1.docs.ui.pages.clients.info")
                </x-col>
            </x-row>

        </x-container-fluid>
    </x-main-content>

</x-theme>
