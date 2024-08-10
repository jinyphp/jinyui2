<x-www-app>




    <x-www-header> {{-- fixed-top--}}
        {{-- <x-www-brand>JinyPHP</x-www-brand> --}}
    </x-www-header>
    <div class="flex">
        <x-www-sidebar>
        </x-www-sidebar>
        <main>
            {{$slot}}
        </main>

    </div>

    <x-www-footer>

    </x-www-footer>




    <!-- Footer-->

</x-www-app>