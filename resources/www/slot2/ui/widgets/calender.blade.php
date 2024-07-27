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

        <h5 class="card-title mb-0">Calendar</h5>
    </div>

    <div class="card-body d-flex">
        <div class="align-self-center w-100">
            <div class="chart">
                <!-- flatpicker.js -->
                <div id="datetimepicker-dashboard" class="flatpickr-input" readonly="readonly">
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

        document.getElementById("datetimepicker-dashboard")
            .flatpickr({
                inline: true,
                prevArrow: "<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-12 w-12\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\" /></svg>",
                nextArrow: "<span title=\"Next month\"><x-icon name=\"feather.chevron.right\" /></span>",
                defaultDate: defaultDate
            });
        });
</script>