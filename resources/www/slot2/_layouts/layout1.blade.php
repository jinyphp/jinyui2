<x-www-app>
    <style>
        h1 a {
            text-decoration: none;
        }

        h2 a {
            text-decoration: none;
        }

        h3 a {
            text-decoration: none;
        }

        h4 a {
            text-decoration: none;
        }

        h5 a {
            text-decoration: none;
        }

        h6 a {
            text-decoration: none;
        }

        img {
            width: 100%;
            vertical-align: top
        }

        strong a {
            text-decoration: none;
            color: inherit;
        }
    </style>

    <x-www-header>
    </x-www-header>

    <div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout">

        <x-www-sidebar>
        </x-www-sidebar>

        <main class="bd-main order-1 mt-12">
            <div class="bd-content ps-lg-2">
                {{ $slot }}
            </div>

            <div class="bd-toc mt-3 mb-5 my-lg-0 ps-xl-3 mb-lg-5 text-body-secondary">
                <x-www-rightbar>
                </x-www-rightbar>
            </div>
        </main>
</x-www-app>
