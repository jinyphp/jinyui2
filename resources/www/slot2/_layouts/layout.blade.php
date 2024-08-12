<x-www-app>




    <x-www-header> {{-- fixed-top--}}
        {{-- <x-www-brand>JinyPHP</x-www-brand> --}}
    </x-www-header>
    <main class="flex w-100">
        <x-www-sidebar/>
        <section style="width:calc(100% - 18rem);">
            {{$slot}}
        </section>
    </main>
    <x-www-footer>
    </x-www-footer>
    <!-- Footer-->

</x-www-app>