<!-- Page footer -->
<footer class="footer pt-5 pb-4 mt-4" style="background-color:#eeeeee;">
    <div class="container pt-sm-2 pt-md-3 pt-lg-4">
        <div class="row pb-5 mb-lg-3">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class="col-md-8 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0 mt-n3 mt-sm-0">
                @partials('footer_menu')
            </div>

            <!-- Subscription -->
            <div class="col-md-4 offset-xl-1">
                @partials('footer_joinus')
            </div>
        </div>

        <!-- Social account links -->
        @partials('footer_social_link')

        <!-- Copyright + Payment methods -->
        <div class="d-lg-flex align-items-center border-top pt-4 mt-3">
            <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
                @partials('footer_copyright')
            </div>
            <div class="d-md-flex justify-content-center order-lg-1">
                @partials('footer_payment')
            </div>
        </div>

    </div>
</footer>
