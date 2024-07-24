<x-www-layout>

    <!-- Section Header-->
    <section class="py-5">
        <div class="container px-5">
            @livewire('WidgetHero', [
                'filename' => "jiny.widgets.hero_text1",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::hero.text1.main"
                    ]
                ]
            ],"aa")
        </div>
    </section>







    <!-- Section -->
    <section class="py-5">
        <div class="container px-5">

            @livewire('quill-editor',[
                    'filename'=>"/aaa.md"
                ])

        </div>
    </section>


</x-www-layout>
