<x-www-layout>

    <!-- Section Carousel -->
    <div class="bg-dark py-5">
        <div class="container px-5">

            @livewire('WidgetCarousel', [
                'filename' => "jiny.widgets.carousel_main",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-widgets::carousel.list",
                        'form' => "jiny-widgets::carousel.form"
                    ]
                ]
            ],"bb")

        </div>
    </section>



</x-www-layout>
