<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    @theme("header/search")


    <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item px-2 dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="megaDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
            </a>
            <div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="megaDropdown">
                <div class="d-md-flex align-items-start justify-content-start">
                    <div class="dropdown-mega-list">
                        <div class="dropdown-header">Sales</div>
                        {{-- <a class="dropdown-item" href="#">Alerts</a>
                        <a class="dropdown-item" href="#">Buttons</a>
                        <a class="dropdown-item" href="#">Cards</a>
                        <a class="dropdown-item" href="#">Carousel</a>
                        <a class="dropdown-item" href="#">General</a>
                        <a class="dropdown-item" href="#">Grid</a>
                        <a class="dropdown-item" href="#">Modals</a>
                        <a class="dropdown-item" href="#">Tabs</a>
                        <a class="dropdown-item" href="#">Typography</a> --}}
                    </div>
                    <div class="dropdown-mega-list">
                        <div class="dropdown-header">CRM</div>
                        {{-- <a class="dropdown-item" href="#">Layouts</a>
                        <a class="dropdown-item" href="#">Basic Inputs</a>
                        <a class="dropdown-item" href="#">Input Groups</a>
                        <a class="dropdown-item" href="#">Advanced Inputs</a>
                        <a class="dropdown-item" href="#">Editors</a>
                        <a class="dropdown-item" href="#">Validation</a>
                        <a class="dropdown-item" href="#">Wizard</a> --}}
                    </div>
                    <div class="dropdown-mega-list">
                        <div class="dropdown-header">HR</div>
                        {{--
                            <a class="dropdown-item" href="#">Basic Tables</a>
                        <a class="dropdown-item" href="#">Responsive Table</a>
                        <a class="dropdown-item" href="#">Table with Buttons</a>
                        <a class="dropdown-item" href="#">Column Search</a>
                        <a class="dropdown-item" href="#">Muulti Selection</a>
                        <a class="dropdown-item" href="#">Ajax Sourced Data</a> --}}
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"
            href="#" id="resourcesDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
                Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                <a class="dropdown-item" href="#">
                    Base
                </a>
                <a class="dropdown-item" href="#">
                    Site
                </a>
                <a class="dropdown-item" href="#">
                    Setup
                </a>
                <a class="dropdown-item" href="#">
                    System
                </a>
            </div>
        </li>
    </ul>


    @theme("header/profile")
    {{-- <x-theme-header.profile></x-theme-header.profile> --}}

</nav>
