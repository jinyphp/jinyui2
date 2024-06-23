@push('scripts')
<script src="/js/fullcalendar.js"></script>
@endpush

<x-theme theme="admin.sidebar">
    <x-theme-layout>

        
        <x-container-fluid>
            <!-- start page title -->
            <x-row>
                <x-col-12>
                    <div class="page-title-box">                        
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Plugin</a></li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>                        
                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Calendar</h1>
                        </div>
						<p>https://fullcalendar.io</p>
                    </div>
                </x-col-12>
            </x-row>  
            <!-- end page title -->

            <div class="relative">
                <div class="absolute bottom-4 right-0">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary">메뉴얼</a>
                    </div>
                </div>
            </div>


            <x-card>
                <x-card-header>
                    <h5 class="card-title">FullCalendar</h5>
                    <h6 class="card-subtitle text-muted">Open source JavaScript plugin for a full-sized, drag &amp; drop event calendar.</h6>
                </x-card-header>
                <x-card-body>
                    <div id="fullcalendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">

                        <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                            <div class="fc-toolbar-chunk">
                                <div class="btn-group">
                                    <button class="fc-prev-button btn btn-primary" type="button" aria-label="prev">
                                        <span class="fa fa-chevron-left"></span>
                                    </button>
                                    <button class="fc-next-button btn btn-primary" type="button" aria-label="next">
                                        <span class="fa fa-chevron-right"></span>
                                    </button>
                                </div>
                                <button disabled="" class="fc-today-button btn btn-primary" type="button">today</button>
                            </div>

                            <div class="fc-toolbar-chunk">
                                <h2 class="fc-toolbar-title">...</h2>
                            </div>

                            <div class="fc-toolbar-chunk">
                                <div class="btn-group">
                                    <button class="fc-dayGridMonth-button btn btn-primary active" type="button">month</button>
                                        <button class="fc-timeGridWeek-button btn btn-primary" type="button">week</button>
                                        <button class="fc-timeGridDay-button btn btn-primary" type="button">day</button>
                                    </div>
                            </div>
                        </div>
                     
                    </div>
                </x-card-body>
            </x-card>

    

        </x-container-fluid>
    </x-main-content>


</x-jiny-theme>   

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var calendarEl = document.getElementById("fullcalendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: "bootstrap",
            initialView: "dayGridMonth",
            initialDate: "2021-07-07",
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay"
            },
            events: [{
                    title: "All Day Event",
                    start: "2021-07-01"
                },
                {
                    title: "Long Event",
                    start: "2021-07-07",
                    end: "2021-07-10"
                },
                {
                    groupId: "999",
                    title: "Repeating Event",
                    start: "2021-07-09T16:00:00"
                },
                {
                    groupId: "999",
                    title: "Repeating Event",
                    start: "2021-07-16T16:00:00"
                },
                {
                    title: "Conference",
                    start: "2021-07-11",
                    end: "2021-07-13"
                },
                {
                    title: "Meeting",
                    start: "2021-07-12T10:30:00",
                    end: "2021-07-12T12:30:00"
                },
                {
                    title: "Lunch",
                    start: "2021-07-12T12:00:00"
                },
                {
                    title: "Meeting",
                    start: "2021-07-12T14:30:00"
                },
                {
                    title: "Birthday Party",
                    start: "2021-07-13T07:00:00"
                },
                {
                    title: "Click for Google",
                    url: "http://google.com/",
                    start: "2021-07-28"
                }
            ]
        });
        setTimeout(function() {
            calendar.render();
        }, 250)
    });
</script>