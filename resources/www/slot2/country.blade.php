<x-www-layout>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {!!
                            xSelectCountry($name="country", $value=null)
                            ->addClass("form-control")
                        !!}
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            @foreach (config("locale.country") as $key => $item)
                <div class="col-2">
                    <div class="card">
                        {{-- <img src="/images/flags/{{strtolower($key)}}.png" alt=""> --}}
                        <div class="card-body">
                            {{$item['en']}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>


</x-www-layout>
