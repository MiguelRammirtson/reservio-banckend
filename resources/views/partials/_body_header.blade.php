<div class="iq-top-navbar bg-middleby-red">
    <div class="container">
        <div class="iq-navbar-custom">
            <div class="d-flex align-items-center justify-content-between">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <i class="ri-menu-line wrapper-menu"></i>
                    <a href="{{route('dashboard.1')}}" class="header-logo">
                        <img src="{{asset('/images/middlebyMexicoBl.png')}}" class="img-fluid rounded-normal light-logo " alt="logo">
                        <img src="{{asset('/images/middlebyMexicoBl.png')}}" class="img-fluid rounded-normal darkmode-logo " alt="logo">
                    </a>
                </div>
                <div class="iq-menu-horizontal">
                    <nav class="iq-sidebar-menu">
                        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                            <a href="{{route('dashboard.1')}}" class="header-logo">

                                <img src="{{asset('images/middlebyMexicoBl.png')}}" class="img-fluid rounded-normal" alt="logo">

                            </a>
                            <div class="iq-menu-bt-sidebar">
                                <i class="las la-bars wrapper-menu"></i>
                            </div>
                        </div>
                        <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                            <li class="{{activeroute('/')}}">
                                <a href="{{route('dashboard.1')}}" class="">
                                    <span>INICIO</span>
                                </a>
                            </li>
                            <li class="{{activeroute('myschedule')}}">
                                <a href="{{route('my-schedule')}}" class="">
                                    <span>CALENDARIOS</span>
                                </a>
                            </li>
                            <li class="{{activeroute('integration')}}">
                                <a href="{{route('integration')}}" class="">
                                    <span>CAPACITADORES</span>
                                </a>
                            </li>
                                                        <li class="{{activeroute('integration')}}">
                                <a href="{{route('integration')}}" class="">
                                    <span>CONTACTO</span>
                                </a>
                            </li>
                            <!-- <li class="{{activeroute('extra/*')}}">
                                <a href="#pages" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <span>CONTACTO</span>
                                    <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                </a>
                                <ul id="pages" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                    <li class="{{activeroute('ui/*')}}">
                                        <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>UI Elements</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="ui" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('ui/avatars')}}">
                                                <a href="{{route('ui.avatars')}}">
                                                    <span>Avatars</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/alerts')}} ">
                                                <a href="{{route('ui.alerts')}}">
                                                    <span>Alerts</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/badges')}}">
                                                <a href="{{route('ui.badges')}}">
                                                    <span>Badges</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/breadcrumb')}}">
                                                <a href="{{route('ui.breadcrumb')}}">
                                                    <span>Breadcrumb</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/buttons')}}">
                                                <a href="{{route('ui.buttons')}}">
                                                    <span>Buttons</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/buttongroup')}}">
                                                <a href="{{route('ui.buttongroup')}}">
                                                    <span>Buttons Group</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/boxshadows')}}">
                                                <a href="{{route('ui.boxshadows')}}">
                                                    <span>Box Shadow</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/colors')}}">
                                                <a href="{{route('ui.colors')}}">
                                                    <span>Colors</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/cards')}}">
                                                <a href="{{route('ui.cards')}}">
                                                    <span>Cards</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/carousel')}}">
                                                <a href="{{route('ui.carousel')}}">
                                                    <span>Carousel</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/grid')}}">
                                                <a href="{{route('ui.grid')}}">
                                                    <span>Grid</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/helperclass')}}">
                                                <a href="{{route('ui.helperclass')}}">
                                                    <span>Helper classes</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/images')}}">
                                                <a href="{{route('ui.images')}}">
                                                    <span>Images</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/listgroup')}}">
                                                <a href="{{route('ui.listgroup')}}">
                                                    <span>list Group</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/media')}}">
                                                <a href="{{route('ui.media')}}">
                                                    <span>Media</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/modal')}}">
                                                <a href="{{route('ui.modal')}}">
                                                    <span>Modal</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/notification')}}">
                                                <a href="{{route('ui.notification')}}">
                                                    <span>Notifications</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/pagination')}}">
                                                <a href="{{route('ui.pagination')}}">
                                                    <span>Pagination</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/popovers')}}">
                                                <a href="{{route('ui.popovers')}}">
                                                    <span>Popovers</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/progressbars')}}">
                                                <a href="{{route('ui.progressbars')}}">
                                                    <span>Progressbars</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/typography')}}">
                                                <a href="{{route('ui.typography')}}">
                                                    <span>Typography</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/tabs')}}">
                                                <a href="{{route('ui.tabs')}}">
                                                    <span>Tabs</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/tooltips')}}">
                                                <a href="{{route('ui.tooltips')}}">
                                                    <span>Tooltips</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('ui/video')}}">
                                                <a href="{{route('ui.video')}}">
                                                    <span>Video</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('auth/*')}}">
                                        <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Authentication</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="auth" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('auth/login')}}">
                                                <a href="{{route('auth.login')}}">
                                                    <span>Login</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('auth/register')}}">
                                                <a href="{{route('auth.register')}}">
                                                    <span>Register</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('auth/recover-password')}}">
                                                <a href="{{route('auth.recover-password')}}">
                                                    <span>Recover Password</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('auth/confirm-email')}}">
                                                <a href="{{route('auth.confirm-email')}}">
                                                    <span>Confirm Mail</span>
                                                </a>
                                            </li>
                                            {{-- <li class="{{activeRoute('auth/lock-screen')}}">
                                                <a href="{{route('auth.lock-screen')}}">
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('contact/*')}}">
                                        <a href="#contact" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Contact</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="contact" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('contact/contact-list')}}">
                                                <a href="{{route('contact.contact-list')}}">
                                                    <span>Contact List</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('contact/contact-detail')}}">
                                                <a href="{{route('contact.contact-detail')}}">
                                                    <span>Contact Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('timeline/*')}}">
                                        <a href="#timeline" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Timeline</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="timeline" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('timeline/timeline1')}}">
                                                <a href="{{route('timeline.timeline1')}}">
                                                    <span>Timeline 1</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('timeline/timeline2')}}">
                                                <a href="{{route('timeline.timeline2')}}">
                                                    <span>Timeline 2</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('timeline/timeline3')}}">
                                                <a href="{{route('timeline.timeline3')}}">
                                                    <span>Timeline 3</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('timeline/timeline4')}}">
                                                <a href="{{route('timeline.timeline4')}}">
                                                    <span>Timeline 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('pricing/*')}}">
                                        <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Pricing</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="pricing" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('pricing/pricing1')}}">
                                                <a href="{{route('pricing.pricing1')}}">
                                                    <span>Pricing 1</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('pricing/pricing2')}}">
                                                <a href="{{route('pricing.pricing2')}}">
                                                    <span>Pricing 2</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('pricing/pricing3')}}">
                                                <a href="{{route('pricing.pricing3')}}">
                                                    <span>Pricing 3</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('pricing/pricing4')}}">
                                                <a href="{{route('pricing.pricing4')}}">
                                                    <span>Pricing 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('pageError/*')}}">
                                        <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Error</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="pages-error" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('pageError/error404')}}">
                                                <a href="{{route('pageError.error404')}}">
                                                    <span>Error 404</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('pageError/error500')}}">
                                                <a href="{{route('pageError.error500')}}">
                                                    <span>Error 500</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{activeroute('extra/*')}}">
                                        <a href="#others" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <span>Others</span>
                                            <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                        </a>
                                        <ul id="others" class="iq-submenu iq-submenu-data collapse"
                                            data-parent="#pages">
                                            <li class="{{activeRoute('extra/invoice')}}">
                                                <a href="{{route('extrapages.invoice')}}">
                                                    <span>Invoice</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('extra/subscriber')}}">
                                                <a href="{{route('extrapages.subscriber')}}">
                                                    <span>Subscribers</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('extra/faq')}}">
                                                <a href="{{route('extrapages.faq')}}">
                                                    <span>Faq</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('extra/blankpage')}}">
                                                <a href="{{route('extrapages.blankpage')}}">
                                                    <span>Blank Page</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('extra/maintenance')}}">
                                                <a href="{{route('extrapages.maintenance')}}">
                                                    <span>Maintenance</span>
                                                </a>
                                            </li>
                                            <li class="{{activeRoute('extra/comingsoon')}}">
                                                <a href="{{route('extrapages.comingsoon')}}">
                                                    <span>Coming Soon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light p-0 icons-navbar-connect">
                    <!-- <div class="change-mode">
                        <div class="custom-control custom-switch custom-switch-icon custom-control-indivne">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left"><i class="a-left ri-moon-clear-line"></i></span>
                                    <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <!-- <li class="nav-item nav-icon dropdown ml-3">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="las la-envelope"></i>
                                    <span class="badge badge-primary count-mail rounded-circle">2</span>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <h5 class="mb-0">All Messages</h5>
                                            </div>
                                            <div class="p-2">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-1.jpg')}}" alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Barry Emma Watson</h6>
                                                            <small class="mb-0">We Want to see you On..</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-2.jpg')}}" alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Lorem Ipsum Watson</h6>
                                                            <small class="mb-0">Can we have a Call?</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-3.jpg')}}" alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Why do we use it?</h6>
                                                            <small class="mb-0">Thank You but now we Don't...</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn-block position-relative p-3 border-top text-center" href="#" role="button">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <!-- <i class="las la-bell"></i> -->
                                    <img src="{{ asset('images/nav/cart-shopping-solid-full.svg')}}" class="user-logo" alt="user-logo">

                                    <span class="badge badge-primary count-mail rounded-circle">2</span>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <h5 class="mb-0">Notifications</h5>
                                            </div>
                                            <div class="p-2">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-1.jpg')}}" alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Anne Effit</h6>
                                                                <small class="mb-0">02 Min Ago</small>
                                                            </div>
                                                            <small class="mb-0">Manager</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-2.jpg')}}" alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Eric Shun</h6>
                                                                <small class="mb-0">05 Min Ago</small>
                                                            </div>
                                                            <small class="mb-0">Manager</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card p-2">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small" src="{{asset('/images/user/u-3.jpg')}}" alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Ken Tucky</h6>
                                                                <small class="mb-0">10 Min Ago</small>
                                                            </div>
                                                            <small class="mb-0">Employee</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn-block position-relative p-3 border-top text-center" href="#" role="button">
                                                See All Notification
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="caption-content">
                                <a href="#" class="search-toggle dropdown-toggle d-flex align-items-center" id="dropdownMenuButton3" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <!-- <img src="{{asset('/images/user/01.jpg')}}" class="avatar-40 img-fluid rounded" alt="user"> -->
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2 35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0 256 256 0 1 1 -512 0zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg> -->
                                    <img src="{{ asset('images/nav/circle-user-solid.svg')}}" class="user-logo" alt="user-logo">
                                    <!-- <i class="fa-solid fa-users"></i> -->
                                    <div class="caption ml-3">
                                            <h6 class="mb-0 line-height text-white">CONECTARSE
                                                <!-- <i class="las la-angle-down ml-3"></i> -->
                                            </h6>
                                    </div>
                                </a>
                                <!-- <div class="iq-sub-dropdown dropdown-menu user-dropdown" aria-labelledby="dropdownMenuButton3">
                                    <div class="card m-0">
                                        <div class="card-body p-0">
                                            <div class="py-3">
                                                <a href="{{route('app.userdetail.userprofile')}}" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <i class="ri-user-line mr-3"></i>
                                                        <h6>Account Settings</h6>
                                                    </div>
                                                </a>
                                                <a href="{{route('calender-connections')}}" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <i class="ri-calendar-line mr-3"></i>
                                                        <h6>Calender Connections</h6>
                                                    </div>
                                                </a>
                                                <a href="{{route('page-user')}}" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <i class="ri-group-line mr-3"></i>
                                                        <h6>Users</h6>
                                                    </div>
                                                </a>
                                                <a href="{{route('privacy-policy')}}" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <i class="ri-lock-line mr-3"></i>
                                                        <h6>Privacy & Security Settings</h6>
                                                    </div>
                                                </a>
                                                <a href="#popup1" data-toggle="modal" data-target="#exampleModalCenter" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <i class="ri-links-line mr-3"></i>
                                                        <h6>Share Your Link</h6>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic p-3 border-top btn-block position-relative text-center" href="{{route('auth.login')}}" role="button">
                                                Logout
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
