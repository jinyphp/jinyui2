<x-www-uidemo>
            <!-- start page title -->
        	<x-row >
            	<x-col class="col-8">
                	<div class="page-title-box">
                    	<ol class="breadcrumb m-0">
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        	<li class="breadcrumb-item"><a href="javascript: void(0);">Plugin</a></li>
                        	<li class="breadcrumb-item active">Calenders</li>
                    	</ol>

        				<div class="mb-3">
                        	<h1 class="h3 d-inline align-middle">Calenders</h1>
                            <p>
                            flatpicker.js
                            </p>
                    	</div>
                	</div>
            	</x-col>
        	</x-row>
        	<!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>

            <x-row>
                <x-col-4>
                    <div class="card flex-fill">
                        <div class="card-header">

                            <div class="card-actions float-end">
                                <div class="dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <h5 class="card-title mb-0">Calendar Inline</h5>
                            <p>Display the calendar in an always-open state with the inline option.</p>

                        </div>

                        <div class="card-body d-flex">
                            <div class="align-self-center">


                                    <!-- flatpicker.js -->
                                    <div id="datetimepicker1" class="flatpickr-input" readonly="readonly">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var date = new Date(Date.now()); // - 5 * 24 * 60 * 60 * 1000);
                                            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

                                            document.getElementById("datetimepicker1")
                                                .flatpickr({
                                                    inline: true,
                                                    prevArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\" /></svg>",
                                                    nextArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" /></svg>",
                                                    defaultDate: defaultDate
                                                });
                                        });
                                    </script>




                            </div>
                        </div>
                    </div>
                </x-col-4>

                <x-col-4>
                    <div class="card flex-fill">
                        <div class="card-header">

                            <div class="card-actions float-end">
                                <div class="dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <h5 class="card-title mb-0">Display Week Numbers</h5>
                            <p>Enable the weekNumbers option to display the week number in a column left to the calendar.</p>

                        </div>

                        <div class="card-body d-flex">
                            <div class="align-self-center">


                                    <!-- flatpicker.js -->
                                    <div id="datetimepicker2" class="flatpickr-input" readonly="readonly">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var date = new Date(Date.now()); // - 5 * 24 * 60 * 60 * 1000);
                                            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

                                            document.getElementById("datetimepicker2")
                                                .flatpickr({
                                                    inline: true,
                                                    weekNumbers: true,
                                                    prevArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\" /></svg>",
                                                    nextArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" /></svg>",
                                                    defaultDate: defaultDate
                                                });
                                        });
                                    </script>




                            </div>
                        </div>
                    </div>
                </x-col-4>

                <x-col-4>
                    <div class="card flex-fill">
                        <div class="card-header">

                            <div class="card-actions float-end">
                                <div class="dropdown show">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <h5 class="card-title mb-0">DateTimePicker with Limited Time Range</h5>
                            <p></p>

                        </div>

                        <div class="card-body d-flex">
                            <div class="align-self-center">


                                    <!-- flatpicker.js -->
                                    <div id="datetimepicker3" class="flatpickr-input" readonly="readonly">
                                    </div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var date = new Date(Date.now()); // - 5 * 24 * 60 * 60 * 1000);
                                            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

                                            document.getElementById("datetimepicker3")
                                                .flatpickr({
                                                    inline: true,
                                                    weekNumbers: true,
                                                    enableTime: true,
                                                    minTime: "16:00",
                                                    maxTime: "22:00",
                                                    prevArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\" /></svg>",
                                                    nextArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" /></svg>",
                                                    defaultDate: defaultDate
                                                });
                                        });
                                    </script>




                            </div>
                        </div>
                    </div>
                </x-col-4>
            </x-row>


            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Time Picker</h1>
                <p>

                </p>
            </div>

            <x-row>
                <x-col-6>
                    <x-card>
                        <x-card-header>Basic</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input active" type="text" placeholder="Select Date.." data-id="timePicker" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="timePicker"]')
                                        .flatpickr({
                                            enableTime: true,
                                            noCalendar: true,
                                            dateFormat: "H:i",
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>24-hour Time Picker</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="timePicker24" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="timePicker24"]')
                                        .flatpickr({
                                            enableTime: true,
                                            noCalendar: true,
                                            dateFormat: "H:i",
                                            time_24hr: true
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>Time Picker w/ Limits</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="timePickerMinMaxHours" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="timePickerMinMaxHours"]')
                                        .flatpickr({
                                            enableTime: true,
                                            noCalendar: true,
                                            dateFormat: "H:i",

                                            minTime: "16:00",
                                            maxTime: "22:30",
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-6>

                <x-col-6>
                    <x-card>
                        <x-card-header>Preloading Time</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="timePickerPreloading" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="timePickerPreloading"]')
                                        .flatpickr({
                                            enableTime: true,
                                            noCalendar: true,
                                            dateFormat: "H:i",
                                            defaultDate: "13:45"
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-6>
            </x-row>

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Range Calendar</h1>
                <p>

                </p>
            </div>

            <x-row>
                <x-col-4>
                    <x-card>
                        <x-card-header>Select a range of dates using the range calendar.</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="range1" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="range1"]')
                                        .flatpickr({
                                            mode: "range"
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Note that disabled dates (by either minDate, maxDate, enable or disable) will not be allowed in selections.</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="range2" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="range2"]')
                                        .flatpickr({
                                            mode: "range",
                                            minDate: "today",
                                            dateFormat: "Y-m-d",
                                            disable: [
                                                function(date) {
                                                    // disable every multiple of 8
                                                    return !(date.getDate() % 8);
                                                }
                                            ]
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Preloading range dates</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="range3" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="range3"]')
                                        .flatpickr({
                                            mode: "range",
                                            dateFormat: "Y-m-d",
                                            defaultDate: ["2016-10-10", "2016-10-20"]
                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
            </x-row>


            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Selecting multiple dates</h1>
                <p>

                </p>
            </div>
            <x-row>
                <x-col-4>
                    <x-card>
                        <x-card-header>It is possible to select multiple dates.</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="multi1" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="multi1"]')
                                        .flatpickr({

    mode: "multiple",
    dateFormat: "Y-m-d"

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Preloading multiple dates</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="multi2" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="multi2"]')
                                        .flatpickr({

                                            mode: "multiple",
    dateFormat: "Y-m-d",
    defaultDate: ["2016-10-20", "2016-11-04"]

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Customizing the Conjunction</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="multi3" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="multi3"]')
                                        .flatpickr({

                                            mode: "multiple",
    dateFormat: "Y-m-d",
    conjunction: " :: "

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
            </x-row>

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Disabling all dates except select few</h1>
                <p>
                    This is the enable option, which takes in an array of date strings, date ranges and functions. Essentially the same as the disable option above, but reversed.


                </p>
            </div>
            <x-row>
                <x-col-4>
                    <x-card>
                        <x-card-header>Enabling specific dates</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="disable1" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="disable1"]')
                                        .flatpickr({

                                            enable: ["2025-03-30", "2025-05-21", "2025-06-08", new Date(2025, 8, 9) ]

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Enabling range(s) of dates:</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="disable2" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="disable2"]')
                                        .flatpickr({

                                            enable: [
        {
            from: "2025-04-01",
            to: "2025-05-01"
        },
        {
            from: "2025-09-01",
            to: "2025-12-01"
        }
    ]

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
                <x-col-4>
                    <x-card>
                        <x-card-header>Enabling dates by a function:</x-card-header>
                        <x-card-body>
                            <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." data-id="disable3" readonly="readonly">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    document.querySelector('[data-id="disable3"]')
                                        .flatpickr({

                                            enable: [
        function(date) {
            // return true to enable

            return (date.getMonth() % 2 === 0 && date.getDate() < 15);

        }
    ]

                                        });
                                });
                            </script>
                        </x-card-body>
                    </x-card>
                </x-col-4>
            </x-row>



        </x-www-uidemo>
