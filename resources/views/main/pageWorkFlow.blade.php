<x-app-layout bodyClass="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="py-4 border-bottom">
                    <div class="float-left"><a href="{{ route('dashboard.1',['activeTab'=> 'view-workflow']) }}" class="badge bg-white back-arrow"><i class="las la-angle-left"></i></a></div>
                    <div class="form-title text-center">
                        <h3>Create A Workflow</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-block card-stretch">
                    <div class="card-body">
                        <form class="create-workform">
                            <div class="d-flex flex-wrap align-items-ceter">
                                <div class="col-lg-6 mb-4">
                                <label for="exampleInputDisabled1" class="title">Disabled Input</label>
                                <input type="text" class="form-control" id="exampleInputDisabled1" disabled="" value="Email Reminder To Invitee">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="title">Which Event Types Will This Apply To?</label> 
                                    <div class="form-group mb-0">
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option class="font-weight-400">Select..</option>
                                            <option>15 Minute Meeting</option>
                                            <option>30 Minute Meeting</option>
                                            <option>60 Minute Meeting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="title">When This Happens</label>
                                    <div class="edit-button"><a href="#popup1" data-toggle="modal" data-target="#what-happened" class="form-control">24 Hours Before Event Starts<span class="float-right"><i class="ri-edit-box-line"></i></span></a></div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="title">Do This</label>
                                    <div class="edit-button">
                                        <a href="#" data-toggle="modal" data-target="#email-invite" class="form-control">Send email to invitee</a>
                                        <span class="d-flex align-items-ceter float-right email-event-btn">
                                            <a href="#" data-toggle="modal" data-target="#email-invite" class="text-body"><i class="ri-edit-box-line mr-3"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#delete-btn" class="text-body"><i class="ri-delete-bin-6-line"></i></a>
                                        </span>
                                    </div>
                                    <div class="float-right mt-2">
                                        <a href="#popup3" data-toggle="modal" data-target="#do-this" class="pl-3"><i>Add New Action</i></a>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>      
                            </div>             
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="what-happened" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">When this happens</h4>
                        <div class="content create-workform">
                            <h5 class="mb-3">How long before event starts?</h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" value="24">
                                </div>
                                <div class="col-lg-8">                 
                                    <div class="form-group mb-0">
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Hours</option>
                                            <option>Days</option>
                                            <option>Minutes</option>
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
    </div>
    <!-- Modal -->
    <div class="modal fade" id="email-invite" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Email to invitee</h4>
                        <div class="mb-3">
                            <h5>How long before event starts?</h5>
                            <div class="content create-workform">
                                <div class="form-group mb-0">
                                    <select name="type" class="selectpicker form-control" data-style="py-0">
                                        <option>Reminder</option>
                                        <option>Custom</option>
                                        <option>Thank You</option>
                                        <option>Additional Resource</option>
                                        <option>Request Follow-Up</option>
                                        <option>Feedback Survey</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <div class="form-group">
                                <label class="mb-2">Subject</label>
                                <input type="text" class="form-control">
                                {{-- <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button> --}}
                            </div>
                        </div>   
                        <div class="mb-3">
                            <h5 class="mb-2">Body</h5>
                            <div id="editor" style="height: 100px !important;">
                            </div>  
                        </div> 
                        <div class="mb-3">
                            <div class="checkbox mb-1">
                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox01">
                                <label for="checkbox01" class="mb-0">Include cancel and reschedule links</label>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox02">
                                <label for="checkbox02" class="mb-0">Include cancellation policy</label>
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
    <!-- Modal -->

    <div class="modal fade" id="delete-btn" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-center">
                        <h4 class="mb-3">Delete</h4>
                        <div class="content create-workform">
                            <p class="mb-2">Are yo sure you want to delete this ?</p>
                            <div class="row">  
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Continue</div>
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
    <div class="modal fade" id="do-this" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">Add Action</h4>
                        <div class="content create-workform">
                            <h5>Do this</h5>
                            <div class="form-group mb-0">
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Send email to invitee</option>
                                    <option>Send email to host</option>
                                    <option>Send text to invitee</option>
                                    <option>Send text to host</option>
                                </select>
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