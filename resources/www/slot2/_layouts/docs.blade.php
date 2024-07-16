<x-www-app>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }

        h1 {
            font-weight: 800; /* ExtraBold */
            font-size: 2.7rem;
        }

        h1 a {
            text-decoration: none;
        }

        h2 {
            font-weight: 700;
            margin-top: 2.5rem;
        }

        h2 a {
            text-decoration: none;
        }

        h3 {
            font-weight: 600;
            margin-top: 2rem;
        }

        h3 a {
            text-decoration: none;
        }

        h4 {
            font-weight: 500; /* ExtraBold */
            margin-top: 1.5rem;
        }

        h4 a {
            text-decoration: none;
        }

        h5 {
            font-weight: 400; /* ExtraBold */
            margin-top: 1.3rem;
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
            <!-- 네비게이션 -->
            @livewire('Widget-SubMenu', [
                'code' => "docs",
                'widget' =>[
                    'view' =>[
                        'list' => "jiny-menu::submenu.list",
                        'item' => "jiny-menu::submenu.item"
                    ]
                ]
            ])

        </x-www-sidebar>

        <main class="bd-main order-1">
            <div class="bd-content ps-lg-2">
                {!! $slot !!}
            </div>

            <div class="bd-toc mb-5 my-lg-0 ps-xl-3 mb-lg-5">
                <x-www-rightbar>
                    {{--
                    <ul>
                        @foreach($bookmark as $i =>$item)
                        <li class="mb-2">
                            <a href="#bookmark{{sprintf('%02d', $i)}}">{{$item}}</a>
                        </li>
                        @endforeach
                    </ul>
                    --}}

                    {{-- 라이브와이어를 통하여 북마크 갱신--}}
                    @livewire('markdown-bookmark')
                </x-www-rightbar>
            </div>
        </main>
    </div>

    <x-www-footer>
    </x-www-footer>

</x-www-app>
