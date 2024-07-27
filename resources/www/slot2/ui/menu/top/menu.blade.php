<style>
    


.az-header-menu {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 240px;
    background-color: #fff;
    overflow-y: auto;
    z-index: 1000;
    transform: translateX(-240px);
    transition: all 0.35s; 
}

.az-header-menu > .nav {
    flex-direction: column;
    padding: 20px; 
}

/*메뉴 아이템*/
.az-header-menu .nav-item > .nav-link .typcn {
    font-size: 20px;
    line-height: .95;
    margin-right: 15px;
    width: 16px; 
}
.az-header-menu .nav-item > .nav-link .typcn::before {
    width: auto; 
}
.az-header-menu .nav-item.active > .nav-link {
    color: #5b47fb;
    position: relative; 
}
.az-header-menu .nav-item.active > .nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    top: 0;
    left: -20px;
    width: 2px;
    background-color: #5b47fb;
    border-radius: 3px; 
}

.az-header-menu .nav-item::before {
    content: '';
    position: absolute;
    top: 67px;
    margin-left: 25px;
    width: 15px;
    height: 15px;
    border-top: 2px solid rgba(28, 39, 60, 0.12);
    border-left: 2px solid rgba(28, 39, 60, 0.12);
    background-color: #fff;
    transform: rotate(45deg);
    z-index: 100;
    display: none; 
}
.az-header-menu .nav-item + .nav-item {
    margin-top: 10px; 
}
.az-header-menu .nav-item > .nav-link {
    display: flex;
    align-items: center;
    position: relative;
    color: #031b4e;
    font-size: 15px;
    font-weight: 500;
    padding: 0;
    transition: all 0.2s ease-in-out; 
}
.az-header-menu .nav-item > .nav-link:hover {
    color: #5b47fb; 
}

.az-header-menu .nav-item > .nav-link:hover i {
    color: #5b47fb; 
}

.az-header-menu .nav-item > .nav-link.with-sub::after {
    content: '\f3d0';
    display: inline-block;
    font-family: 'Ionicons';
    font-size: 12px;
    font-weight: 400;
    margin-left: auto;
    margin-top: 3px;
    opacity: .5;
}



/*서브메뉴*/


.az-menu-sub {
    font-size: 13px;
    margin-left: 32px; 
    margin-top: 12px;
    display: none;
}
@media (min-width: 992px) {
    .az-menu-sub {
        position: absolute;
        top: 74px; 
        background-color: #fff;
        padding: 15px 20px;
        border: 2px solid rgba(28, 39, 60, 0.12);
        min-width: 200px;
        margin-left: 0;
        margin-top: 0; 
    } 
}


.az-header-menu .nav-item.show .az-menu-sub {
    display: block; 
}



.az-menu-sub .nav {
    flex-direction: column; 
}

.az-menu-sub .nav-link {
    padding: 0;
    display: block;
    color: #596882; 
}

.az-menu-sub .nav-link + .nav-link {
    margin-top: 6px;
    padding-top: 6px;
    border-top: 1px dotted #e3e7ed; 
}

.az-menu-sub .nav-link:hover, .az-menu-sub .nav-link:focus {
    color: #5b47fb; 
}

.az-menu-sub .nav-link.active {
    color: #5b47fb;
    font-weight: 500; 
}


/*서브 메가메뉴*/
.az-menu-sub-mega {
    left: 0;
    right: 0;
    background-color: transparent;
    padding: 0;
    border: 0; 
}
.az-menu-sub-mega .container-fluid {
    padding: 0; 
}
.az-menu-sub-mega .container-fluid > div + div {
    margin-top: 25px; 
}
.az-menu-sub-mega .nav {
    min-width: 120px;
    flex-direction: column; 
}
.az-menu-sub-mega .nav + .nav {
    border-top: 1px dotted #e3e7ed;
    margin-top: 6px;
    padding-top: 6px; 
}

.az-menu-sub-mega .nav > span {
    display: block;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 700;
    color: #1c273c;
    letter-spacing: .5px;
    margin-bottom: 15px;
    margin-top: 30px; 
}

.az-menu-sub-mega .nav > span:first-of-type {
    margin-top: 0; 
}









@media (min-width: 992px) {
    .az-menu-sub .nav-link.active {
        font-weight: 400; 
    } 
}




@media (max-width: 991.98px) {
    .az-menu-sub-mega .container-fluid {
        max-width: none; 
    } 
}
@media (min-width: 992px) {
    .az-menu-sub-mega .container-fluid {
        display: flex;
        background-color: #fff;
        border: 2px solid rgba(28, 39, 60, 0.12); 
    } 
}
@media (min-width: 992px) {
    .az-menu-sub-mega .container-fluid > div {
        display: flex;
        padding: 20px;
        flex: 1;
        margin-top: 0; 
    } 
}
@media (min-width: 1200px) {
    .az-menu-sub-mega .container-fluid > div {
        padding: 20px 25px; 
    } 
}

@media (min-width: 992px) {
    .az-menu-sub-mega .container-fluid > div + div {
        margin-top: 0;
        border-left: 1px solid rgba(28, 39, 60, 0.05); 
    } 
}



@media (min-width: 1200px) {
    .az-menu-sub-mega .nav {
        min-width: 140px; 
    } 
}



@media (min-width: 992px) {
        .az-menu-sub-mega .nav + .nav {
          margin-left: 20px;
          margin-top: 31px;
          padding-top: 0;
          border-top: 0; } 
}

@media (min-width: 1200px) {
        .az-menu-sub-mega .nav + .nav {
          margin-left: 25px; } }



      @media (min-width: 992px) {
        .az-menu-sub-mega .nav > span {
          font-size: 12px; } }


.az-header-menu-icon {
    margin-right: 10px;
    width: 20px;
    height: 30px;
    display: flex;
    align-items: center; 
}

@media (min-width: 992px) {
    .az-header-menu-icon {
        margin-right: 25px; 
    } 
}

.az-header-menu-icon span {
    display: block;
    position: relative;
    width: 15px;
    height: 2px;
    background-color: #1c273c;
    border-radius: 3px;
    transition: all 0.2s ease-in-out; 
}
    
@media (prefers-reduced-motion: reduce) {
      .az-header-menu-icon span {
        transition: none; 
    } 
}

.az-header-menu-icon span::before, .az-header-menu-icon span::after {
      content: '';
      position: absolute;
      left: 0;
      width: 20px;
      height: 2px;
      background-color: #1c273c;
      border-radius: 3px;
      transition: all 0.2s ease-in-out; 
}

@media (prefers-reduced-motion: reduce) {
        .az-header-menu-icon span::before, .az-header-menu-icon span::after {
          transition: none; } 
}
.az-header-menu-icon span::before {
    top: -6px; 
}
.az-header-menu-icon span::after {
    bottom: -6px; 
}







@media (prefers-reduced-motion: reduce) {
    .az-header-menu {
        transition: none; 
    } 
}

@media (min-width: 992px) {
    .az-header-menu {
        background-color: transparent;
        border-right: 0;
        position: static;
        width: auto;
        overflow-y: visible;
        transform: none;
        z-index: auto; 
    } 
}


@media (min-width: 992px) {
    .az-header-menu > .nav {
        padding: 0;
        flex-direction: row;
        align-items: center; 
    } 
}


    @media (min-width: 992px) {
      .az-header-menu .nav-item + .nav-item {
        margin-top: 0;
        margin-left: 30px; } }

    @media (prefers-reduced-motion: reduce) {
      .az-header-menu .nav-item > .nav-link {
        transition: none; } }
    @media (min-width: 992px) {
      .az-header-menu .nav-item > .nav-link {
        font-size: 0.875rem; } }

      @media (min-width: 992px) {
        .az-header-menu .nav-item > .nav-link.with-sub::after {
          margin-left: 5px; } }

      @media (min-width: 992px) {
        .az-header-menu .nav-item > .nav-link .typcn {
          font-size: 18px;
          margin-right: 7px; } }



@media (min-width: 992px) {
    .az-header-menu .nav-item.active > .nav-link::before {
          top: auto;
          bottom: -22px;
          left: 0;
          right: 0;
          width: auto;
          height: 2px; } 
}

@media (min-width: 992px) {
    .az-header-menu .nav-item.show::before {
        display: block; 
    } 
}




.az-header-menu-header {
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
  border-bottom: 1px solid rgba(28, 39, 60, 0.05); }

  @media (min-width: 992px) {
    .az-header-menu-header {
      display: none; } }

  .az-header-menu-header .close {
    font-weight: 300;
    font-size: 28px; }


/* ###### 6.4 Header  ###### */

@media (max-width: 991.98px) {
    .az-header-menu-show {
        overflow: hidden;
    }

    .az-header-menu-show .az-header-menu {
        border-right: 1px solid rgba(28, 39, 60, 0.08);
        box-shadow: 0 0 30px rgba(28, 39, 60, 0.08);
        transform: translateX(0);
    }

    .az-header-menu-show .az-navbar-backdrop {
        visibility: visible;
        opacity: 1;
    }
}



</style>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var submenu = document.querySelectorAll('.az-header-menu .with-sub');
        submenu.forEach(el => {
            el.addEventListener("click", function(e){
                e.preventDefault();
                getAllSiblings(e.target.parentNode).forEach(si=>{
                    if(si != e.target.parentNode) {
                        si.classList.remove("show");
                    }                    
                });
                e.target.parentNode.classList.toggle("show");
            });
        });

        function getAllSiblings(el) {
            var siblings = [];
            el = el.parentNode.firstChild;
            do {
                if (el.nodeType === 3) continue; // text node
                siblings.push(el);
            } while (el = el.nextSibling)
            return siblings;
        }

        document.querySelector('.az-header-menu-header .close').addEventListener("click", function(e){
            e.preventDefault();
            document.body.classList.remove('az-header-menu-show');
        });
        
    });
</script>
@endpush


<div class="az-header-menu">
    {{-- 축소모드일때 표시--}}
    <div class="az-header-menu-header">
        <a href="index.html" class="az-logo"><span></span> azia</a>
        <a href="" class="close">×</a>
    </div>
    <!-- az-header-menu-header -->

    <ul class="nav">
        <li class="nav-item active">
            <a href="" class="nav-link with-sub">Dashboard</a>
            <div class="az-menu-sub">
                <nav class="nav">
                    <a href="dashboard-one.html" class="nav-link active">Web Analytics</a>
                    <a href="dashboard-two.html" class="nav-link">Sales Monitoring</a>
                    <a href="dashboard-three.html" class="nav-link">Ad Campaign</a>
                    <a href="dashboard-four.html" class="nav-link">Event Management</a>
                    <a href="dashboard-five.html" class="nav-link">Helpdesk Management</a>
                    <a href="dashboard-six.html" class="nav-link">Finance Monitoring</a>
                    <a href="dashboard-seven.html" class="nav-link">Cryptocurrency</a>
                    <a href="dashboard-eight.html" class="nav-link">Executive / SaaS</a>
                    <a href="dashboard-nine.html" class="nav-link">Campaign Monitoring</a>
                    <a href="dashboard-ten.html" class="nav-link">Product Management</a> 
                </nav>
            </div><!-- az-menu-sub -->
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub">Apps</a>
            <nav class="az-menu-sub">
            <a href="app-mail.html" class="nav-link">Mailbox</a>
            <a href="app-chat.html" class="nav-link">Chat</a>
            <a href="app-calendar.html" class="nav-link">Calendar</a>
            <a href="app-contacts.html" class="nav-link">Contacts</a>
            <a href="app-kanban.html" class="nav-link">Kanban</a>
            <a href="app-tickets.html" class="nav-link">Tickets</a>
            </nav>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub">Pages</a>
            <nav class="az-menu-sub">
            <a href="page-profile.html" class="nav-link">Profile</a>
            <a href="page-invoice.html" class="nav-link">Invoice</a>
            <a href="page-signin.html" class="nav-link">Sign In</a>
            <a href="page-signup.html" class="nav-link">Sign Up</a>
            <a href="page-404.html" class="nav-link">Page 404</a>
            <a href="page-faq.html" class="nav-link">Faq</a>
            <a href="page-news-grid.html" class="nav-link">News Grid</a>
            <a href="page-product-catalogue.html" class="nav-link">Product Catalogue</a>
            <a href="page-project-list.html" class="nav-link">Project List</a>
            <a href="page-order.html" class="nav-link">Orders</a>
            <a href="page-pricing.html" class="nav-link">Pricing</a>
            <a href="landing-sass.html" class="nav-link">Landing Page</a>
            </nav>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
            <div class="az-menu-sub az-menu-sub-mega">
            <div class="container-fluid">
                <div>
                <nav class="nav">
                    <span>UI Elements</span>
                    <a href="elem-accordion.html" class="nav-link">Accordion</a>
                    <a href="elem-alerts.html" class="nav-link">Alerts</a>
                    <a href="elem-avatar.html" class="nav-link">Avatar</a>
                    <a href="elem-badge.html" class="nav-link">Badge</a>
                    <a href="elem-breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                    <a href="elem-buttons.html" class="nav-link">Buttons</a>
                    <a href="elem-cards.html" class="nav-link">Cards</a>
                    <a href="elem-carousel.html" class="nav-link">Carousel</a>
                </nav>
                <nav class="nav">
                    <a href="elem-collapse.html" class="nav-link">Collapse</a>
                    <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                    <a href="elem-icons.html" class="nav-link">Icons</a>
                    <a href="elem-images.html" class="nav-link">Images</a>
                    <a href="elem-list-group.html" class="nav-link">List Group</a>
                    <a href="elem-media-object.html" class="nav-link">Media Object</a>
                    <a href="elem-modals.html" class="nav-link">Modals</a>
                    <a href="elem-navigation.html" class="nav-link">Navigation</a>
                </nav>
                <nav class="nav">
                    <a href="elem-pagination.html" class="nav-link">Pagination</a>
                    <a href="elem-popover.html" class="nav-link">Popover</a>
                    <a href="elem-progress.html" class="nav-link">Progress</a>
                    <a href="elem-spinners.html" class="nav-link">Spinners</a>
                    <a href="elem-toast.html" class="nav-link">Toast</a>
                    <a href="elem-tooltip.html" class="nav-link">Tooltip</a>
                </nav>
                </div>
                <div>
                <nav class="nav">
                    <span>Forms</span>
                    <a href="form-elements.html" class="nav-link">Form Elements</a>
                    <a href="form-layouts.html" class="nav-link">Form Layouts</a>
                    <a href="form-validation.html" class="nav-link">Form Validation</a>
                    <a href="form-wizards.html" class="nav-link">Form Wizards</a>
                    <a href="form-editor.html" class="nav-link">WYSIWYG Editor</a>
                </nav>
                </div>
                <div>
                <nav class="nav">
                    <span>Charts</span>
                    <a href="chart-morris.html" class="nav-link">Morris Charts</a>
                    <a href="chart-flot.html" class="nav-link">Flot Charts</a>
                    <a href="chart-chartjs.html" class="nav-link">ChartJS</a>
                    <a href="chart-sparkline.html" class="nav-link">Sparkline</a>
                    <a href="chart-peity.html" class="nav-link">Peity</a>
                </nav>
                </div>
                <div>
                <nav class="nav">
                    <span>Maps</span>
                    <a href="map-google.html" class="nav-link">Google Maps</a>
                    <a href="map-leaflet.html" class="nav-link">Leaflet</a>
                    <a href="map-vector.html" class="nav-link">Vector Maps</a>
                    <span>Tables</span>
                    <a href="table-basic.html" class="nav-link">Basic Tables</a>
                    <a href="table-data.html" class="nav-link">Data Tables</a>
                </nav>
                </div>
            </div><!-- container-fluid -->
            </div>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i> Utilities</a>
            <nav class="az-menu-sub">
            <a href="util-background.html" class="nav-link">Background</a>
            <a href="util-border.html" class="nav-link">Border</a>
            <a href="util-display.html" class="nav-link">Display</a>
            <a href="util-flex.html" class="nav-link">Flex</a>
            <a href="util-height.html" class="nav-link">Height</a>
            <a href="util-margin.html" class="nav-link">Margin</a>
            <a href="util-padding.html" class="nav-link">Padding</a>
            <a href="util-position.html" class="nav-link">Position</a>
            <a href="util-typography.html" class="nav-link">Typography</a>
            <a href="util-width.html" class="nav-link">Width</a>
            <a href="util-extras.html" class="nav-link">Extras</a>
            </nav>
        </li>
    </ul>
</div>

