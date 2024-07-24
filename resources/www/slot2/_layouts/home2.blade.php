<x-www-app>
    <x-www-header>
    {{--
        <x-www-brand>
            JinyPHP
        </x-www-brand>
    --}}
    </x-www-header>

    <br><br>

    <main style="margin-top:2.5rem">
        <div class="container">
            {!!$slot!!}
        </div>
    </main>


    <!-- Footer-->
    <x-www-footer>
    </x-www-footer>

</x-www-app>
