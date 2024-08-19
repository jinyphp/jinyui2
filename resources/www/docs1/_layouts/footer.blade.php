<!-- Page footer -->
<footer class="footer py-4  mt-4" style="background-color:#eeeeee;">
    <div class="container ">
        <div class="    ">

            <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
            <div class=" ">
                @partials('footer_menu')
            </div>

            <!-- Subscription -->
            <!-- <div class="col-md-4 offset-xl-1">
                @partials('footer_joinus')
            </div> -->
        </div>

        <!-- Social account links -->
        @partials('footer_social_link')

        <!-- Copyright + Payment methods -->
        <div class="d-lg-flex align-items-center border-top ">
            <!-- <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
                @partials('footer_copyright')
            </div> -->
            <!-- <div class="d-md-flex justify-content-center order-lg-1">
                @partials('footer_payment')
            </div> -->
        </div>

    </div>
</footer>