<x-www-app>
    <x-container>
        @php
            $chart['labels'] = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
            $chart['datasets'] = [
                [
                    'label' => "# of Votes",
                    'data' => [10, 15, 3, 5, 2, 10],
                    'borderWidth' => 1
                ]
            ];
        @endphp


        <x-ui-chart-line>
            {{-- chartjs json data --}}
            {!! json_encode($chart) !!}
        </x-ui-chart-line>


    </x-container>
</x-www-app>
