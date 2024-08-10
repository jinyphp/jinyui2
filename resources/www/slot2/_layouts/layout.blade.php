<x-www-app>
    <x-www-header> {{-- fixed-top--}}
        {{-- <x-www-brand>JinyPHP</x-www-brand> --}}
    </x-www-header>
    <main>
        <x-www-sidebar>
            {{$slot}}
        </x-www-sidebar>

    </main>


    <!-- Footer-->
    <x-www-footer>

    </x-www-footer>
</x-www-app>