<style>
/* ###### 7.8 Profile  ###### */
.az-content-profile {
    flex: 1;
}

@media (max-width: 991.98px) {

    .az-content-profile .container-fluid,
    .az-content-profile .container-fluid-fluid,
    .az-content-profile .container-fluid-sm,
    .az-content-profile .container-fluid-md,
    .az-content-profile .container-fluid-lg,
    .az-content-profile .container-fluid-xl {
        display: block;
    }
}

.az-content-left-profile {
    padding-left: 0;
    padding-right: 0;
    display: block;
    border-bottom: 1px solid #cdd4e0;
    padding-bottom: 25px;
    width: auto;
}

@media (min-width: 992px) {
    .az-content-left-profile {
        width: 270px;
        padding-right: 20px;
        padding-bottom: 0;
        border-right: 1px solid #cdd4e0;
        border-bottom: 0;
    }
}

@media (min-width: 1200px) {
    .az-content-left-profile {
        padding-right: 25px;
    }
}

.az-profile-overview .az-img-user {
    width: 120px;
    height: 120px;
    margin-bottom: 20px;
}

.az-profile-overview .az-img-user::after {
    display: none;
}

.az-profile-overview .btn-icon-list .btn,
.az-profile-overview .btn-icon-list .sp-container-fluid button,
.sp-container-fluid .az-profile-overview .btn-icon-list button {
    border-radius: 100%;
}

.az-profile-name {
    color: #1c273c;
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 2px;
}

.az-profile-name-text {
    color: #7987a1;
    font-size: 13px;
    margin-bottom: 0;
}

.az-profile-bio {
    font-size: 13px;
    margin-bottom: 20px;
}

.az-profile-social-list .media {
    align-items: center;
}

.az-profile-social-list .media+.media {
    margin-top: 20px;
}

.az-profile-social-list .media-icon {
    font-size: 34px;
    width: 30px;
    line-height: 0;
}

.az-profile-social-list .media-body {
    margin-left: 20px;
}

.az-profile-social-list .media-body span {
    display: block;
    font-size: 12px;
}

.az-profile-social-list .media-body a {
    font-size: 13px;
}

.az-content-body-profile .nav {
    flex-direction: column;
    padding: 20px 20px 20px 0;
    border-bottom: 1px solid #cdd4e0;
}

@media (min-width: 576px) {
    .az-content-body-profile .nav {
        flex-direction: row;
        align-items: center;
        padding-bottom: 10px;
    }
}

@media (min-width: 992px) {
    .az-content-body-profile .nav {
        padding-left: 20px;
    }
}

@media (min-width: 1200px) {
    .az-content-body-profile .nav {
        padding-left: 25px;
    }
}

.az-content-body-profile .az-nav-line .nav-link {
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    color: #3b4863;
}

.az-content-body-profile .az-nav-line .nav-link.active {
    font-weight: 700;
    color: #5b47fb;
}

.az-content-body-profile .az-nav-line .nav-link.active::before {
    background-color: #5b47fb;
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .az-content-body-profile .az-nav-line .nav-link.active::before {
        width: auto;
        top: auto;
        left: 0;
        right: 0;
        height: 2px;
    }
}

@media (min-width: 576px) {
    .az-content-body-profile .az-nav-line .nav-link.active::before {
        bottom: -11px;
    }
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .az-content-body-profile .az-nav-line .nav-link+.nav-link {
        margin-top: 0;
        margin-left: 20px;
    }
}

.az-profile-body {
    padding: 15px 0 0;
}

@media (min-width: 576px) {
    .az-profile-body {
        padding-top: 20px;
    }
}

@media (min-width: 992px) {
    .az-profile-body {
        padding: 25px 0 0 20px;
    }
}

@media (min-width: 1200px) {
    .az-profile-body {
        padding-left: 25px;
    }
}

.az-profile-view-chart {
    position: relative;
    width: calc(100% - 10px);
    height: 200px;
}

@media (min-width: 375px) {
    .az-profile-view-chart {
        width: 100%;
    }
}

@media (min-width: 576px) {
    .az-profile-view-chart {
        height: 250px;
    }
}

.az-profile-view-info {
    position: absolute;
    top: 0;
    left: 0;
}

.az-profile-view-info h6 {
    font-size: 32px;
    font-weight: 500;
    color: #1c273c;
    margin-bottom: 0;
}

.az-profile-view-info span {
    font-size: 12px;
    color: #f10075;
    margin-left: 5px;
}

.az-profile-view-info p {
    font-size: 13px;
    margin-bottom: 0;
}

.az-traffic-detail-item>div:first-child {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    margin-bottom: 7px;
}

.az-traffic-detail-item>div:first-child>span:first-child {
    color: #7987a1;
}

.az-traffic-detail-item>div:first-child>span:last-child {
    font-size: 11px;
    font-weight: 700;
    color: #1c273c;
}

.az-traffic-detail-item>div:first-child>span:last-child span {
    color: #7987a1;
    font-weight: 400;
}

.az-traffic-detail-item+.az-traffic-detail-item {
    margin-top: 25px;
}

.az-traffic-detail-item .progress {
    height: 8px;
}

.az-profile-work-list .media+.media {
    margin-top: 25px;
}

.az-profile-work-list .media-logo {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 0;
    color: #fff;
    font-size: 21px;
    position: relative;
    top: 2px;
    border-radius: 100%;
}

.az-profile-work-list .media-body {
    margin-left: 20px;
}

.az-profile-work-list .media-body h6 {
    color: #1c273c;
    font-weight: 500;
    margin-bottom: 2px;
}

.az-profile-work-list .media-body span {
    display: block;
    margin-bottom: 5px;
}

.az-profile-work-list .media-body p {
    margin-bottom: 0;
    font-size: 12px;
    color: #7987a1;
}

.az-profile-contact-list .media {
    align-items: center;
}

.az-profile-contact-list .media+.media {
    margin-top: 25px;
}

.az-profile-contact-list .media-icon {
    line-height: 0;
    font-size: 36px;
    width: 35px;
    text-align: center;
}

.az-profile-contact-list .media-body {
    margin-left: 25px;
}

.az-profile-contact-list .media-body span {
    font-size: 12px;
    color: #7987a1;
    display: block;
    line-height: 1.3;
}

.az-profile-contact-list .media-body div {
    font-weight: 500;
    color: #1c273c;
}
</style>
<x-www-uidemo>

            <div class="az-content az-content-profile">
                <div class="container-fluid mn-ht-100p">
                  <div class="az-content-left az-content-left-profile">

                    <div class="az-profile-overview">
                      <div class="az-img-user">
                        <img src="https://bootstrapdash.com/demo/azia/v1.0.0/img/faces/face10.jpg" alt="">
                      </div><!-- az-img-user -->
                      <div class="d-flex justify-content-between mg-b-20">
                        <div>
                          <h5 class="az-profile-name">Sophia White</h5>
                          <p class="az-profile-name-text">UI/UX Designer</p>
                        </div>
                        <div class="btn-icon-list">
                          <button class="btn btn-indigo btn-icon"><i class="typcn typcn-plus-outline"></i></button>
                          <button class="btn btn-primary btn-icon"><i class="typcn typcn-message"></i></button>
                        </div>
                      </div>

                      <div class="az-profile-bio">
                        Genius, Compiler, Powerful Multitasker, Fantasy Fruit Loop, Replacement President of a Major Soft Drink Manufacturer. <a href="">More</a>
                      </div><!-- az-profile-bio -->

                      <hr class="mg-y-30">

                      <label class="az-content-label tx-13 mg-b-20">Websites &amp; Social Channel</label>
                      <div class="az-profile-social-list">
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-logo-github"></i></div>
                          <div class="media-body">
                            <span>Github</span>
                            <a href="">github.com/sophia.white</a>
                          </div>
                        </div><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-logo-twitter"></i></div>
                          <div class="media-body">
                            <span>Twitter</span>
                            <a href="">twitter.com/sophia.me</a>
                          </div>
                        </div><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-logo-linkedin"></i></div>
                          <div class="media-body">
                            <span>Linkedin</span>
                            <a href="">linkedin.com/in/sophiaw</a>
                          </div>
                        </div><!-- media -->
                        <div class="media">
                          <div class="media-icon"><i class="icon ion-md-link"></i></div>
                          <div class="media-body">
                            <span>My Portfolio</span>
                            <a href="">bootstrapdash.com/</a>
                          </div>
                        </div><!-- media -->
                      </div><!-- az-profile-social-list -->

                    </div><!-- az-profile-overview -->

                  </div><!-- az-content-left -->
                  <div class="az-content-body az-content-body-profile">
                    <nav class="nav az-nav-line">
                      <a href="" class="nav-link active" data-toggle="tab">Overview</a>
                      <a href="" class="nav-link" data-toggle="tab">Reviews</a>
                      <a href="" class="nav-link" data-toggle="tab">Followers</a>
                      <a href="" class="nav-link" data-toggle="tab">Following</a>
                      <a href="" class="nav-link" data-toggle="tab">Account Settings</a>
                    </nav>

                    <div class="az-profile-body">

                      <div class="row mg-b-20">
                        <div class="col-md-7 col-xl-8">
                          <div class="az-profile-view-chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas id="chartArea" width="553" height="250" style="display: block; width: 553px; height: 250px;" class="chartjs-render-monitor"></canvas>
                            <div class="az-profile-view-info">
                              <div class="d-flex align-items-baseline">
                                <h6>508</h6>
                                <span>-1.2% since last week</span>
                              </div>
                              <p>Profile viewers past 10 days</p>
                            </div>
                          </div>
                        </div><!-- col -->
                        <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                          <div class="az-content-label tx-13 mg-b-20">Traffic Details</div>
                          <div class="az-traffic-detail-item">
                            <div>
                              <span>People with title Founder &amp; CEO</span>
                              <span>24 <span>(20%)</span></span>
                            </div>
                            <div class="progress">
                              <div class="progress-bar wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                          </div>
                          <div class="az-traffic-detail-item">
                            <div>
                              <span>People with title UX Designer</span>
                              <span>16 <span>(15%)</span></span>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-success wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                          </div>
                          <div class="az-traffic-detail-item">
                            <div>
                              <span>People with title Recruitment</span>
                              <span>87 <span>(45%)</span></span>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-pink wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                          </div>
                          <div class="az-traffic-detail-item">
                            <div>
                              <span>People with title Software Engineer</span>
                              <span>32 <span>(25%)</span></span>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-teal wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><!-- progress -->
                          </div>
                        </div><!-- col -->
                      </div><!-- row -->

                      <hr class="mg-y-40">

                      <div class="row">
                        <div class="col-md-7 col-xl-8">
                          <div class="az-content-label tx-13 mg-b-25">Work &amp; Education</div>
                          <div class="az-profile-work-list">
                            <div class="media">
                              <div class="media-logo bg-success"><i class="icon ion-logo-whatsapp"></i></div>
                              <div class="media-body">
                                <h6>UI/UX Designer at <a href="">Whatsapp</a></h6>
                                <span>2016 - present</span>
                                <p>Past Work: BootstrapDash, Inc.</p>
                              </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                              <div class="media-logo bg-primary"><i class="icon ion-logo-buffer"></i></div>
                              <div class="media-body">
                                <h6>Studied at <a href="">Buffer University</a></h6>
                                <span>2002 - 2006</span>
                                <p>Degree: Bachelor of Science in Computer Science</p>
                              </div><!-- media-body -->
                            </div><!-- media -->
                          </div><!-- az-profile-work-list -->
                        </div><!-- col -->
                        <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                          <div class="az-content-label tx-13 mg-b-25">Contact Information</div>
                          <div class="az-profile-contact-list">
                            <div class="media">
                              <div class="media-icon"><i class="icon ion-md-phone-portrait"></i></div>
                              <div class="media-body">
                                <span>Mobile</span>
                                <div>(+63) 123 4567 890</div>
                              </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                              <div class="media-icon"><i class="icon ion-logo-slack"></i></div>
                              <div class="media-body">
                                <span>Slack</span>
                                <div>@sophia.w</div>
                              </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                              <div class="media-icon"><i class="icon ion-md-locate"></i></div>
                              <div class="media-body">
                                <span>Current Address</span>
                                <div>San Francisco, CA</div>
                              </div><!-- media-body -->
                            </div><!-- media -->
                          </div><!-- az-profile-contact-list -->
                        </div><!-- col -->
                      </div><!-- row -->

                      <div class="mg-b-20"></div>

                    </div><!-- az-profile-body -->
                  </div><!-- az-content-body -->
                </div><!-- container-fluid -->
            </div>



        </x-www-uidemo>
