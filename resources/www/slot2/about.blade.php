<x-www-layout>

    <section class="py-5">
        <div class="container px-5">
            @livewire('WidgetHero-Heading', [
                'filename' => "about_hero_text1"
            ])

        </div>
    </section>


    <!-- Section Header-->
    <section class="py-5">
        <div class="container px-5">
            @livewire('WidgetHero-Heading', [
                'filename' => "about_hero_text1",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::hero.text1.main"
                    ]
                ]
            ])

        </div>
    </section>

    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            @livewire('WidgetCard-Left', [
                'filename' => "about_card_left"
            ])
        </div>
    </section>

    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">

            @livewire('WidgetCard-Right', [
                'filename' => "about_card_right"
            ])

        </div>
    </section>

    <!-- Team members section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">

            @livewire('WidgetGrid-Avatas', [
                'filename' => "about_teams"
            ])

        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container px-5 my-5">

            @livewire('WidgetList-Faq', [
                'filename' => "about_faq"
            ])

        </div>
    </section>

</x-www-layout>

