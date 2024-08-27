<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Cartzilla Docs | Installation</title>

    <!-- Theme switcher (color modes) -->
    <script src="/assets/js/theme-switcher.js"></script>

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="/assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/assets/app-icons/icon-180x180.png">

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="/assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Font icons -->
    <link rel="preload" href="/assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="/assets/icons/cartzilla-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="/assets/vendor/simplebar/dist/simplebar.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="/assets/css/theme.min.css" as="style">
    <link rel="stylesheet" href="/assets/css/theme.min.css" id="theme-styles">

    <!--@vite('resources/css/app.scss')
    @vite('resources/css2/scss/app-saas.scss')
    -->
    @vite('resources/css/test/main.scss')
    @vite('resources/css/test/default.min.css')

    <!-- Docs specific styles -->
    <style>
    .cd-section {
        scroll-margin-top: 100px;
    }

    @media (min-width: 992px) {
        .cd-sidebar {
            position: sticky;
            top: 7rem;
            height: calc(100vh - 8.5rem);
        }

        .cd-section {
            scroll-margin-top: 118px;
        }
    }
    </style>

    @stack('css')
</head>


<!-- Body -->

<body data-bs-spy="scroll" data-bs-target="#anchorNav">



    <x-www-header>

    </x-www-header>


    {{$slot}}


    <x-www-footer>

    </x-www-footer>

    <!-- Back to top button -->
    @partials("back_to_top")
    @livewire('HotKeyEvent')

    <x-set-actions></x-set-actions>
    <x-site-setting></x-site-setting>

    <!-- Vendor scripts -->
    <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="/assets/vendor/list.js/dist/list.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="/assets/js/theme.min.js"></script>

    <!-- Docs specific scripts -->
    <script>
    const sidebar = new bootstrap.Offcanvas('#sidebarNav')
    const closeSidebar = () => {
            setTimeout(() => {
                sidebar.hide()
            }, 500)
        }
        (() => {
            const scrollable = document.getElementById('scrollable')
            const simplebar = new SimpleBar(scrollable)
            const anchor = scrollable.querySelector('.list-group-item.active')
            if (anchor === null) return
            simplebar.getScrollElement().scrollTo({
                top: anchor.parentNode.offsetTop,
                behavior: 'instant'
            })
        })()
    </script>



        <!-- highliter.js-->
    @vite('resources/js/core.js')
    @vite('resources/js/javascript.js')
    @vite('resources/js/xml.js')
    @vite('resources/js/scss.js')

    @stack('script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof hljs !== 'undefined') {
                hljs.highlightAll();
            } else {
                console.error('hljs is not defined');
            }
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    if (window.hljs) {
        document.querySelectorAll('pre code').forEach((block) => {
            if (block.dataset.highlighted) {
                // 이미 하이라이팅된 경우, 데이터 속성을 제거
                delete block.dataset.highlighted;
            }

            // 하이라이팅 적용
            const result = window.hljs.highlightAuto(block.textContent || '');
            block.innerHTML = result.value;

            // 하이라이팅이 적용된 코드 블록에 데이터 속성 추가
            block.dataset.highlighted = 'yes';
        });

        console.log('hljs is available and highlighting applied with auto detection');
    } else {
        console.error('hljs is not defined');
    }
});
</script>


    <script>
            document.addEventListener('DOMContentLoaded', ()=>{
                if (window.hljs) {
                    document.querySelectorAll('pre code').forEach((block)=>{
                        if (block.dataset.highlighted) {
                            // 이미 하이라이팅된 경우, 데이터 속성을 제거
                            delete block.dataset.highlighted;
                        }

                        // 하이라이팅 적용
                        const result = window.hljs.highlightAuto(block.textContent || '');
                        block.innerHTML = result.value;

                        // 하이라이팅이 적용된 코드 블록에 데이터 속성 추가
                        block.dataset.highlighted = 'yes';
                    }
                    );

                    console.log('hljs is available and highlighting applied with auto detection');
                } else {
                    console.error('hljs is not defined');
                }
            }
            );
    </script>
</body>

</html>
