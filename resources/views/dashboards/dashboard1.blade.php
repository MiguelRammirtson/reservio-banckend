<x-app-layout bodyClass="top-nav">
    <div class="content-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="navbar-breadcrumb">
                            <!-- <h1 class="mb-1">My Calender</h1> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-11 col-md-8 d-flex flex-row justify-center items-center">
                    <ul class="d-flex nav nav-pills mb-4 text-center event-tab col-11" id="event-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a id="view-btn" class="nav-link active show" data-toggle="pill" href="#event1" data-extra="#search-with-button" role="tab" aria-selected="true">TODOS</a>
                        </li>
                        <li class="nav-item">
                            <a id="view-schedule" class="nav-link" data-toggle="pill" href="#event2" data-extra="#view-event" role="tab" aria-selected="false">EVENTOS</a>
                        </li>
                        <li class="nav-item">
                            <a id="view-workflow" class="nav-link" data-toggle="pill" href="#event3" data-extra="#view-data" role="tab" aria-selected="false">RESIDENCIAL</a>
                        </li>
                         <li class="nav-item">
                            <a id="view-workflow" class="nav-link" data-toggle="pill" href="#event3" data-extra="#view-data" role="tab" aria-selected="false">FOOD SERVICES</a>
                        </li>
                         <li class="nav-item">
                            <a id="view-workflow" class="nav-link" data-toggle="pill" href="#event3" data-extra="#view-data" role="tab" aria-selected="false">CAPACITACIÓN TECNICA</a>
                        </li>
                    </ul>
                    <div class="col-2 d-flex justify-content-between align-items-center w-full mb-4">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </a>
                        <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-2 col-md-4 tab-extra" id="view-event">
                    <div class="float-md-right mb-4"><a href="#event1" class="btn view-btn">View Event</a></div>
                </div> -->
            </div>
            <!-- <div class="tab-extra active" id="search-with-button">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <div class="iq-search-bar search-device mb-0 pr-3">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Search...">
                        </form>
                    </div>
                    <div class="float-sm-right"><a href="{{route('page-new-event')}}" class="btn btn-primary pr-5 position-relative" style="height: 40px;">Add Event<span class="event-add-btn" style="height: 40px;"><i class="ri-add-line"></i></span></a></div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="event-content">
                    <div id="event1" class="tab-pane fade active show">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-danger disabled">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <h4 class="mb-2 mr-4">Reminder of App Project And Design</h4>
                                                <p class="mb-2 text-danger font-weight-500 text-uppercase"><i class="las la-user pr-2"></i>One On One</p>
                                                <p class="mb-4 card-description">Calendify always allows you to set the reminder to optimize task management roles and jobs.</p>
                                                <div class="d-flex align-items-center pt-4">
                                                    <a href="#" class="btn btn-danger mr-3 px-xl-4">50 Min</a>
                                                    <a href="#" class="btn btn-outline-danger copy d-none px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Copy Link</a>
                                                    <a href="#" class="btn btn-outline-danger turn-on px-xl-4">Turn On</a>
                                                </div>
                                            </div>
                                            <div class="card-header-toolbar mt-1">
                                                <div class="dropdown d-none">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-line mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-save-line mr-3"></i>Save to Template</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                        <div class="dropdown-item border-top mt-2">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>On/Off</div>
                                                                <div class="custom-control custom-switch p-0">
                                                                    <input type="checkbox" class="custom-control-input card-change" id="customSwitch2" checked>
                                                                    <label class="custom-control-label" for="customSwitch2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-info">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <h4 class="mb-2 mr-4">Email Signature for Support Team</h4>
                                                <p class="mb-2 text-info font-weight-500 text-uppercase"><i class="las la-user pr-2"></i>One On One</p>
                                                <p class="mb-4 card-description">Outsmart back-and-forth in communication by staying alert with your support team follow-ups.</p>
                                                <div class="d-flex align-items-center pt-4">
                                                    <a href="#" class="btn btn-info mr-3 px-xl-4">30 Min</a>
                                                    <a href="#" class="btn btn-outline-info copy px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Copy Link</a>
                                                    <a href="#" class="btn btn-outline-info d-none turn-on px-xl-4">Turn On</a>
                                                </div>
                                            </div>
                                            <div class="card-header-toolbar mt-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-line mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-save-line mr-3"></i>Save to Template</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                        <div class="dropdown-item border-top mt-2">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>On/Off</div>
                                                                <div class="custom-control custom-switch p-0">
                                                                    <input type="checkbox" class="custom-control-input card-change" id="customSwitch5">
                                                                    <label class="custom-control-label" for="customSwitch5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-success">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <h4 class="mb-2 mr-4">Plugins & Team Review Meeting</h4>
                                                <p class="mb-2 text-success font-weight-500 text-uppercase"><i class="las la-user-friends pr-2"></i>Group</p>
                                                <p class="mb-4 card-description">Calendify lets you to simplify and prioritize your calendar and your team’s calendar with review. </p>
                                                <div class="d-flex align-items-center pt-4">
                                                    <a href="#" class="btn btn-success mr-3 px-xl-4">35 Min</a>
                                                    <a href="#" class="btn btn-outline-success copy px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Copy Link</a>
                                                    <a href="#" class="btn btn-outline-success d-none turn-on px-xl-4">Turn On</a>
                                                </div>
                                            </div>
                                            <div class="card-header-toolbar mt-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-line mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-save-line mr-3"></i>Save to Template</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                        <div class="dropdown-item border-top mt-2">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>On/Off</div>
                                                                <div class="custom-control custom-switch p-0">
                                                                    <input type="checkbox" class="custom-control-input card-change" id="customSwitch1">
                                                                    <label class="custom-control-label" for="customSwitch1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-primary">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <h4 class="mb-2 mr-4">New Year Iqonic Design Campaigns</h4>
                                                <p class="mb-2 text-primary font-weight-500 text-uppercase"><i class="las la-user-friends pr-2"></i>Group</p>
                                                <p class="mb-4 card-description">Quickly schedule and set the event type to manage all your marketing and management campaigns. </p>
                                                <div class="d-flex align-items-center pt-4">
                                                    <a href="#" class="btn btn-primary mr-3 px-xl-4">15 Min</a>
                                                    <a href="#" class="btn btn-outline-primary copy px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Copy Link</a>
                                                    <a href="#" class="btn btn-outline-primary d-none turn-on px-xl-4">Turn On</a>
                                                </div>
                                            </div>
                                            <div class="card-header-toolbar mt-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-line mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-save-line mr-3"></i>Save to Template</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                        <div class="dropdown-item border-top mt-2">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>On/Off</div>
                                                                <div class="custom-control custom-switch p-0">
                                                                    <input type="checkbox" class="custom-control-input card-change" id="customSwitch4">
                                                                    <label class="custom-control-label" for="customSwitch4"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded event-detail event-detail-warning">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <h4 class="mb-2 mr-4">Project And Task Management Roles</h4>
                                                <p class="mb-2 text-warning font-weight-500 text-uppercase"><i class="las la-user-friends pr-2"></i>Group</p>
                                                <p class="mb-4 card-description">Set reminders for your team regarding their project and task completion so that they are not overlooked. </p>
                                                <div class="d-flex align-items-center pt-4">
                                                    <a href="#" class="btn btn-warning mr-3 px-xl-4">25 Min</a>
                                                    <a href="#" class="btn btn-outline-warning copy px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Copy Link</a>
                                                    <a href="#" class="btn btn-outline-warning d-none turn-on px-xl-4">Turn On</a>
                                                </div>
                                            </div>
                                            <div class="card-header-toolbar mt-1">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle" id="dropdownMenuButton5" data-toggle="dropdown">
                                                        <i class="ri-more-2-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                        <a class="dropdown-item" href="#"><i class="ri-pencil-line mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-sticky-note-line mr-3"></i>Add Internal Note</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-save-line mr-3"></i>Save to Template</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-code-s-slash-line mr-3"></i>Save to Website</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-line mr-3"></i>Delete</a>
                                                        <div class="dropdown-item border-top mt-2">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div>On/Off</div>
                                                                <div class="custom-control custom-switch p-0">
                                                                    <input type="checkbox" class="custom-control-input card-change" id="customSwitch3">
                                                                    <label class="custom-control-label" for="customSwitch3"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="event2" class="tab-pane fade">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                            <ul class="d-flex nav nav-pills text-center schedule-tab" id="schedule-pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#schedule01" data-extras="#filter-none" role="tab" aria-selected="false">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="pill" href="#schedule1" data-extras="#filter-button" role="tab" aria-selected="true">Upcoming</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#schedule2" data-extras="#filter-none" role="tab" aria-selected="false">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#schedule3" data-extras="#filter-button" role="tab" aria-selected="false">Past</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#schedule4" data-placement="daterange" data-extras="#filter-button" role="tab" aria-selected="false">
                                        Date range
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex flex-wrap align-items-center">
{{--                                {{!-- <div class="list-grid-toggle mr-4">--}}
{{--                                    <span class="icon i-grid icon-grid"><i class="ri-layout-grid-line font-size-20"></i></span>--}}
{{--                                    <span class="icon i-list icon-grid"><i class="ri-list-check font-size-20"></i></span>--}}
{{--                                    <span class="label label-list">Grid</span>--}}
{{--                                </div>                                 --}}
                                <div id="filter-none" class="filter-extra">
                                </div>
                                <div id="filter-button" class="select-dropdown input-prepend input-append filter-dropdown filter-extra active">
                                    <div class="btn-group">
                                        <label data-toggle="dropdown" class="mb-0">
                                            <span class="dropdown-toggle search-query selet-caption btn bg-white">Filter By</span><span class="search-replace"></span>
                                            <span class="caret"><!--icon--></span>
                                        </label>
                                        <ul class="dropdown-menu p-3 border-none">
                                            <li>
                                                <div class="item mb-2">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox1">
                                                        <label for="checkbox1" class="mb-0">All Teams</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item mb-2">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox2">
                                                        <label for="checkbox2" class="mb-0">All Event Types</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item mb-2">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox3">
                                                        <label for="checkbox3" class="mb-0">Active Events</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item mb-2">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox4">
                                                        <label for="checkbox4" class="mb-0">All IDs</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input mr-3" id="checkbox5">
                                                        <label for="checkbox5" class="mb-0">All Invitee Email</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="schedule-content">
                            <div id="schedule01" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-info">15 Dec</h4></div>
                                                        <div class="border-left pl-3">
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Calendify Inner Pages</h5>
                                                                <div class="badge badge-color ml-3">Upcoming</div>
                                                            </div>
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-info"></i>08 Pm - 09 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-info"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-danger">25 Dec</h4></div>
                                                        <div class="border-left pl-3">
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Admin Dashboard Team Meet</h5>
                                                                <div class="badge badge-color ml-3">Upcoming</div>
                                                            </div>
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-danger"></i>09:45 Pm - 10 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-danger"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card card-block card-stretch">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                                    <div class="d-flex flex-wrap align-items-center">
                                                        <div class="date mr-3"><h4 class="text-success">29 Dec</h4></div>
                                                        <div class="border-left pl-3">
                                                            <div class="media align-items-top">
                                                                <h5 class="mb-3">Calendify Pre-Launch Campaign</h5>
                                                                <div class="badge badge-color ml-3">Pending</div>
                                                            </div>
                                                            <div class="media align-items-center">
                                                                <p class="mb-0 pr-3"><i class="las la-clock mr-2 text-success"></i>10 Pm - 10:30 Pm</p>
                                                                <p class="mb-0"><i class="las la-map-marker mr-2 text-success"></i>1 Circle Street Leominster, Ma 01453</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule1" class="tab-pane fade active show">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail-info">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-info">18</h1>
                                                        <h5 class="text-info">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Xamin WordPress Theme Update</h4>
                                                <p class="mb-4 card-description">Major update v2.5 version of Xamin theme. Make Xamin in Elementor version and document the steps.</p>
                                                <p class="mb-2 text-info"><i class="las la-clock mr-3"></i>08 Pm - 09 Pm</p>
                                                <p class="mb-2 text-info"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail-danger">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-danger">25</h1>
                                                        <h5 class="text-danger">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Iqonic Design Christmas Campaign</h4>
                                                <p class="mb-4 card-description">Draft an conversional and Sales-driven Christmas campaign by offering Christmas deals to customers. </p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i>09:45 Pm - 10 Pm</p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail-success">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-success">29</h1>
                                                        <h5 class="text-success">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Best Iqonic Design Item Collections</h4>
                                                <p class="mb-4 card-description">Build the best Iqonic collectable list of WordPress themes, HTML, Vuejs Admin Dashboards and Mobile Applications. </p>
                                                <p class="mb-2 text-success"><i class="las la-clock mr-3"></i>10 Pm - 10:30 Pm</p>
                                                <p class="mb-2 text-success"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail1">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-info">25</h1>
                                                        <h5 class="text-info">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Calendify Homepage Final Edits</h4>
                                                <p class="mb-4 card-description">Enhance Calendify with beautiful user interface and UI changes to ensure high conversion rate.</p>
                                                <p class="mb-2 text-info"><i class="las la-clock mr-3"></i>08 Pm - 09 Pm</p>
                                                <p class="mb-2 text-info"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail2 active">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-danger">07</h1>
                                                        <h5 class="text-danger">Jan</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Calendify Promotional Campaign</h4>
                                                <p class="mb-4 card-description">Schedule meetings and promotional campaigns for your internal team by assigning task and roles.</p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i>09:45 Pm - 10 Pm</p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail3">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-success">15</h1>
                                                        <h5 class="text-success">Jan</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Exploring Automatic Timezone Detection</h4>
                                                <p class="mb-4 card-description">An internal team meeting to brief on a feature where the meeting will be seen in viewer’s time zone with automatic timezone detection in Calendify. </p>
                                                <p class="mb-2 text-success"><i class="las la-clock mr-3"></i>10 Pm - 10:30 Pm</p>
                                                <p class="mb-2 text-success"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule3" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail1">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-info">03</h1>
                                                        <h5 class="text-info">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Webtech-Developer Horror Stories</h4>
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-info"><i class="las la-clock mr-3"></i>08 Pm - 09 Pm</p>
                                                <p class="mb-2 text-info"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail2 active">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-danger">16</h1>
                                                        <h5 class="text-danger">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Meetup-Meeing With Team of Designer</h4>
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-danger"><i class="las la-clock mr-3"></i>09:45 Pm - 10 Pm</p>
                                                <p class="mb-2 text-danger"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card card-block card-stretch card-height">
                                            <div class="card-body rounded event-detail event-detail3">
                                                <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div>
                                                        <h1 class="text-success">27</h1>
                                                        <h5 class="text-success">Dec</h5>
                                                    </div>
                                                    <div class="d-flex align-items-center list-action">
                                                        <a class="badge mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="#"><i class="ri-edit-box-line"></i></a>
                                                        <a class="badge" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="my-2">Project Plan-Do Anaylsis Of Project</h4>
                                                <p class="mb-4 card-description">Lorem Ipsum Dolor Sit Amet, Consecetetur Adip Iscing Elit. Pharetra Luctus Ultricies Velit Ut. Id Tincidunt Mattis Sed Duis.</p>
                                                <p class="mb-2 text-success"><i class="las la-clock mr-3"></i>10 Pm - 10:30 Pm</p>
                                                <p class="mb-2 text-success"><i class="las la-map-marker mr-3"></i>1 Circle Street Leominster, Ma 01453</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="schedule4" data-toggle="daterange" class="tab-pane fade">
                                <div class="card card-block card-stretch mb-4">
                                    <div class="card-body mb-5 border-bottom">
                                        <p class="mb-0">18 Dec – 24 Dec 2020</p>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="d-inline-block m-auto date-event">
                                            <div class="icon iq-icon-box-2 m-auto rounded border">
                                                <i class="las la-calendar"></i>
                                            </div>
                                            <p class="mt-4">No Event In This Range</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="event3" class="tab-pane fade">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                            <div>
                                <h3 class="mb-3">Save Your Time Using Workflow</h3>
                                <p class="mb-md-0">Choose Your Own Workflow From Given Below.<br>Or Create Your Own Workflow</p>
                            </div>
                            <div class="create-workform">
                                <a href="#create-event" data-toggle="modal" data-target="#create-event" class="btn btn-primary pr-5 position-relative">Create Workflow<span class="event-add-btn"><i class="ri-add-line"></i></span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-info">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-boxes"></i>
                                        </div>
                                        <h4 class="mb-2">Email Reminder to Invitee</h4>
                                        <p class="mb-4 card-description">Send automated email reminder to invitees for task.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-info mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-danger">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="lab la-ioxhost"></i>
                                        </div>
                                        <h4 class="mb-2">Email Reminder to Host</h4>
                                        <p class="mb-4 card-description">Send automated email reminder to the meeting host.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-danger mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-success">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-envelope-open"></i>
                                        </div>
                                        <h4 class="mb-2">Create Process Template</h4>
                                        <p class="mb-4 card-description">Create structured step-by-step process template for team.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-success mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-warning">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-stopwatch"></i>
                                        </div>
                                        <h4 class="mb-2">Run Multiple Instances</h4>
                                        <p class="mb-4 card-description">Quickly run multiple instances and checklist for team.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-warning mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-primary">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-handshake"></i>
                                        </div>
                                        <h4 class="mb-2">Track Process and collaborate</h4>
                                        <p class="mb-4 card-description">Track activity and prepare checklist to collaborate.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-primary mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-info">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-envelope"></i>
                                        </div>
                                        <h4 class="mb-2">Text Booking confirmation</h4>
                                        <p class="mb-4 card-description">Send text message for booking confirmation.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-info mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-danger">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-hourglass"></i>
                                        </div>
                                        <h4 class="mb-2">Email Feedback Survey</h4>
                                        <p class="mb-4 card-description">Use forms to collect feedback of the launch campaigns.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-danger mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-success">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-bookmark"></i>
                                        </div>
                                        <h4 class="mb-2">Take follow-up meeting</h4>
                                        <p class="mb-4 card-description">Streamline a follow-up process for the internal team.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-success mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body rounded work-detail work-detail-warning">
                                        <div class="icon iq-icon-box-2 mb-3 rounded">
                                            <i class="las la-bell"></i>
                                        </div>
                                        <h4 class="mb-2">Integrate and automate task</h4>
                                        <p class="mb-4 card-description">Integrate and automate daily and weekly tasks and sales.</p>
                                        <div class="pt-2">
                                            <a href="{{route('page-work-flow')}}" class="btn btn-warning mr-3 px-4">Use workflow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade create-workform" id="create-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Create a Workflow</h4>
                        <div class="mb-3">
                            <h5>When this happens</h5>
                            <div class="content">
                                <div class="form-group mb-0">
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                        <option>Select..</option>
                                        <option>New event is scheduled</option>
                                        <option>Before event starts</option>
                                        <option>Event starts</option>
                                        <option>Event ends</option>
                                        <option>Event is canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h5 class="mb-3">Do this</h5>
                            <div class="form-group  mb-0">
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Send email to invitee</option>
                                    <option>Send email to host</option>
                                    <option>Send text to invitee</option>
                                    <option>Send text to host</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
