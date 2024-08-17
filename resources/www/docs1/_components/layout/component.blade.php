<!-- Page container -->
<div class="container pt-4">
    <div class="row pt-sm-2">

        <!-- Sidebar navigation -->
        <aside class="col-lg-3 pe-xl-4">

            @php
            $rows = menuLoad("uidoc_components.json")['items'];
            @endphp

            <x-www_sidebar-layout :rows="$rows">
            </x-www_sidebar-layout>

        </aside>

        <!-- Page content -->
        <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3">
            {{$slot}}
        </main>
    </div>
</div>
