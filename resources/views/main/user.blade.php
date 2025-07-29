<x-app-layout bodyClass="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="py-4 border-bottom">
                    <div class="float-left"><a href="{{route('dashboard.1')}}" class="badge bg-white back-arrow"><i class="las la-angle-left"></i></a></div>
                    <div class="form-title text-center">
                        <h3>Users</h3>
                    </div>
                </div>
            </div> 
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 create-workform">
                    <div>                                
                        <h4 class="mb-3">Manage Your Team Efficiently</h4>
                        <p class="mb-md-0">Select your preferred style of workflow from the following<br> options or create your unique workflow. </p>
                    </div>
                    <div class="media flex-wrap api-link">
                        <a href="#" data-toggle="modal" data-target="#invite-user" class="btn btn-primary mr-4 position-relative">Invite Users</a>
                        <a href="#" data-toggle="modal" data-target="#invite-user" class="btn btn-outline-primary add-user">Add User</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="card card-block card-stretch calender-account user-list">                    
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="media flex-wrap align-items-center">
                        <div class="mr-3">
                            <img class="avatar-50 rounded" src="{{asset('images/user/02.jpg')}}" alt="01">
                        </div>
                        <div>
                            <div class="media align-items-top user-detail mb-1">
                                <h6>Kusti Franti</h6>
                                <div class="badge badge-color ml-3 mt-0">Owner</div>
                            </div>
                            <p class="mb-0">kustifranti1234@gmail.com</p>
                        </div>
                    </div>
                    <div class="date">
                        <p class="mb-0">03 December, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-block card-stretch calender-account user-list">                    
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="media flex-wrap align-items-center">
                        <div class="mr-3">
                            <img class="avatar-50 rounded" src="{{asset('images/user/03.jpg')}}" alt="01">
                        </div>
                        <div>
                            <div class="media align-items-top user-detail mb-1">
                                <h6>Rick O'shea</h6>
                                <div class="badge badge-color ml-3 mt-0">Owner</div>
                            </div>
                            <p class="mb-0">rickoshea1234@gmail.com</p>
                        </div>
                    </div>
                    <div class="date">
                        <p class="mb-0">07 December, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-block card-stretch calender-account user-list">                    
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="media flex-wrap align-items-center">
                        <div class="mr-3">
                            <img class="avatar-50 rounded" src="{{asset('images/user/04.jpg')}}" alt="01">
                        </div>
                        <div>
                            <div class="media align-items-top user-detail mb-1">
                                <h6>Alindro Smith</h6>
                                <div class="badge badge-color ml-3 mt-0">Owner</div>
                            </div>
                            <p class="mb-0">alindrosmith1234@gmail.com</p>
                        </div>
                    </div>
                    <div class="date">
                        <p class="mb-0">12 December, 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="invite-user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left create-workform">
                        <h4 class="mb-3">Invite User</h4>
                        <div class="content">
                            <div class="mb-4">
                                <h5>Enter E-mail</h5>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="mb-4">
                                <h5>Choose Event</h5>
                                <div class="form-group mb-0">
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                        <option>Select Event Types</option>
                                        <option>15 Minute Meeting</option>
                                        <option>30 Minute Meeting</option>
                                        <option>60 Minute Meeting</option>
                                    </select>
                                </div>
                            </div>  
                            <div class="col-lg-12 mt-4">
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
    </div>
</x-app-layout>