<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        @vite('resources/css/app.scss')
        <link href="/assets/css/docs.css?1" rel="stylesheet" />
        <link href="/assets/css/highlight.css?a1" rel="stylesheet" />

        <style>
            .feature {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                height: 3rem;
                width: 3rem;
                font-size: 1.5rem;
            }
        </style>

        @stack('css')

    </head>
    <body>
        <div class="flex-grow d-flex flex-column h-100">
            {{$slot}}
        </div>


        {{-- HotKey 단축키 이벤트 --}}
        @livewire('HotKeyEvent')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        {{-- <script src="js/scripts.js"></script> --}}
        @stack('script')

    </body>
</html>
