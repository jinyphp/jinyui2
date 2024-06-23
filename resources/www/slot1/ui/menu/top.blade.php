{{-- https://bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-one.html --}}
<style>
@media (max-width: 991.98px) {
    .az-content-body-show .az-header .az-header-menu-icon {
        display: none;
    }
    .az-content-body-show .az-header .az-header-left .az-header-arrow {
        display: block;
    }
    .az-content-body-show .az-content-left {
        display: none;
    }
    .az-content-body-show .az-content-body {
        display: block;
    }
}

/*메뉴 왼쪽*/
.az-header .az-header-left .az-logo {
    display: none;
}
@media (min-width: 992px) {
    .az-header .az-header-left .az-logo {
        display: flex;
    }
}

.az-header-left {
    display: flex;
    align-items: center;
}
.az-header-left .az-header-arrow {
    display: none;
    position: relative;
    top: -2px;
}


.az-content-header .az-logo {
    flex: 1;
    text-align: center;
}

.az-logo {
    font-weight: 700;
    font-size: 28px;
    font-family: 'Poppins', sans-serif;
    text-transform: lowercase;
    color: #5b47fb;
    letter-spacing: -1px;
    display: flex;
    align-items: center;
    position: relative;
    top: -2px;
}

.az-logo:hover, .az-logo:focus {
    color: #5b47fb;
}

.az-logo i {
    display: block;
    line-height: .9;
    margin-right: 8px;
    font-size: 40px;
}
.az-logo i::before {
    width: auto;
    height: auto;
}

.az-iconbar-header .az-logo {
    line-height: 1;
}




</style>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('#azMenuShow').addEventListener("click",function(e){
            e.preventDefault();
            document.body.classList.toggle('az-header-menu-show');
        });
    });
</script>
@endpush

<x-theme-app>
    <div class="az-header">
        <div class="container-fluid">


            <div class="az-header-left">
                <a href="index.html" class="az-logo"><span></span> azia</a>
                {{-- 햄버거 메뉴--}}
                <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none">
                    <span></span>
                </a>
            </div>
            <!-- az-header-left -->

            @include("www::slot1.docs.ui.menu.top.menu")
            <!-- az-header-menu -->

            <div class="az-header-right">
                <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
                <div class="az-header-message">
                    <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
                </div><!-- az-header-message -->
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                    <div class="dropdown-menu">
                    <div class="az-dropdown-header mg-b-20 d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <h6 class="az-notification-title">Notifications</h6>
                    <p class="az-notification-text">You have 2 unread notification</p>
                    <div class="az-notification-list">
                        <div class="media new">
                        <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                        <div class="media-body">
                            <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                            <span>Mar 15 12:32pm</span>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media new">
                        <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                        <div class="media-body">
                            <p><strong>Joyce Chua</strong> just created a new blog post</p>
                            <span>Mar 13 04:16am</span>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                        <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                        <div class="media-body">
                            <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                            <span>Mar 13 02:56am</span>
                        </div><!-- media-body -->
                        </div><!-- media -->
                        <div class="media">
                        <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                        <div class="media-body">
                            <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                            <span>Mar 12 10:40pm</span>
                        </div><!-- media-body -->
                        </div><!-- media -->
                    </div><!-- az-notification-list -->
                    <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                    </div><!-- dropdown-menu -->
                </div><!-- az-header-notification -->
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
                    <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                        <img src="../img/faces/face1.jpg" alt="">
                        </div><!-- az-img-user -->
                        <h6>Aziana Pechon</h6>
                        <span>Premium Member</span>
                    </div><!-- az-header-profile -->

                    <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                    </div><!-- dropdown-menu -->
                </div>
            </div>
            <!-- az-header-right -->

        </div>
        <!-- container-fluid -->
    </div>
</x-theme-app>
