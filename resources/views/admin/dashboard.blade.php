@extends("layouts.admin")
@section("content")
    <div class="main-content">
        <div class="page-title">
            <div class="title">ADD NEW CLIENT</div>
            <div class="sub-title">Follow Steps</div>
        </div>
        <form id="wizardForm" class="form-horizontal" role="form">
            <div class="card">
                <div class="card-block p-a-0">
                    <div class="box-tab m-b-0" id="rootwizard">
                        <ul class="wizard-tabs">
                            <li><a href="#tab1" data-toggle="tab">Basic Info</a>
                            </li>
                            <li><a href="#tab2" data-toggle="tab">Birth Details</a>
                            </li>
                            <li><a href="#tab3" data-toggle="tab">Contact Info</a>
                            </li>
                            <li><a href="#tab4" data-toggle="tab">Additional information</a>
                            </li>
                            <li><a href="#tab5" data-toggle="tab">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane p-x-lg" id="tab1">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Salutation</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option selected="" disabled="" value="Status">Choose From the List</option>
                                            <option value="4">Mr.</option>
                                            <option value="3">Mrs.</option>
                                            <option value="2">Miss.</option>
                                            <option value="1">Master.</option>
                                            <option value="0">Sir.</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-4">
                                        <input type="radio" name="gender" value="male"> Male&nbsp;
                                        <input type="radio" name="gender" value="female"> Female&nbsp;
                                        <input type="radio" name="gender" value="other"> Other
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Type</label>
                                    <div class="col-sm-4">
                                        <input type="radio" name="gender" value="male"> Corporate&nbsp;
                                        <input type="radio" name="gender" value="female"> Individual&nbsp;

                                    </div>
                                </div>
                            </div>

                            <!-- // tab2 // -->

                            <div class="tab-pane p-x-lg" id="tab2">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name At Birth</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Maiden Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield" placeholder="Before marriage name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date Of Birth</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control m-b" data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option value="5">Mumbai</option>
                                            <option value="4">Delhi</option>
                                            <option value="3">Andheri</option>
                                            <option value="2">Thane</option>
                                            <option value="1">Mumbra</option>
                                            <option value="0">Dapoli</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option value="5">India</option>
                                            <option value="4">UK</option>
                                            <option value="3">USA</option>
                                            <option value="2">Africa</option>
                                            <option value="1">Australia</option>
                                            <option value="0">New Zealand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Post Code</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">NI Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield" placeholder="TTNNNNNNT">
                                    </div>
                                </div>

                            </div>

                            <!-- // tab3 // -->

                            <div class="tab-pane p-x-lg" id="tab3">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email address</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="emailfield" name="emailfield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-4">
                                        <input type="tel" class="form-control telephone-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tel (Home)</label>
                                    <div class="col-sm-4">
                                        <input type="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tel (Work)</label>
                                    <div class="col-sm-4">
                                        <input type="tel" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fax</label>
                                    <div class="col-sm-4">
                                        <input type="tel" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <!-- // tab4 // -->

                            <div class="tab-pane p-x-lg" id="tab4">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Limit</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control m-b" id="maxlength" maxlength="5" placeholder="99,999.99/-">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Introducer</label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="gender" value="male"> Recommended by Friend(RF)&nbsp;
                                        <input type="radio" name="gender" value="female"> External Agency (EA)&nbsp;

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Introducer Description</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>

                            </div>

                            <!-- // tab5 // -->

                            <div class="tab-pane p-x-lg" id="tab5">Congradulations you added a new client</div>
                            <div class="wizard-pager">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default button-previous">Previous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @endsection("content")