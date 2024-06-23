<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar" data-simplebar="init">

        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">

                        <div class="simplebar-content" style="padding: 0px;">

                            @theme("sidebar/brand")


                            {{$slot}}

                            <ul class="sidebar-nav">
                                <li class="sidebar-header">
                                    Admin
                                </li>

                                <!-- Submenu -->
                                @if (view()->exists('jinyauth::admin.sidemenu'))
                                    @include('jinyauth::admin.sidemenu')
                                @endif

                                <li class="sidebar-header">
                                    System
                                </li>

                                <!-- Submenu -->
                                @if (view()->exists('jinytheme::admin.sidemenu'))
                                    @include('jinytheme::admin.sidemenu')
                                @endif

                                <!-- Submenu -->
                                @if (view()->exists('modules::admin.sidemenu'))
                                    @include('modules::admin.sidemenu')
                                @endif

                                <!-- Submenu -->
                                @if (view()->exists('menus::admin.sidemenu'))
                                    @include('menus::admin.sidemenu')
                                @endif

                                <!-- Submenu -->
                                @if (view()->exists('jiny-admin::admin.sidemenu'))
                                    <li class="sidebar-header">
                                        Laravel
                                    </li>
                                    @include('jiny-admin::admin.sidemenu')
                                @endif


                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1331px;"></div>
        </div>

        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>

        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 1293px; transform: translate3d(0px, 0px, 0px); display: block;">
            </div>
        </div>

    </div>
</nav>
