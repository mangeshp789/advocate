@extends('layouts.admin')
@section('content')
    <!-- main area -->
    <div class="main-content">

        <div class="page-title">
            <div class="title">CASE DEFINATION</div>
            <div class="sub-title">...</div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Case No.</label>
            <div class="col-sm-4">
                <div class="input-group m-b">
                    <input type="number" min="0" max="12" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-folder-open fa-lg"></i></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Case Description</label>
            <div class="col-sm-4">
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Matter Database</label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option selected="" disabled="" value="Earner1">Choose From the List</option>
                    <option value="4">Mr. Smith</option>
                    <option value="3">Mr. John</option>
                    <option value="2">Mr. Shaun</option>
                    <option value="1">Miss. Henry</option>
                    <option value="0">Miss. Rene</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Matter Type</label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option selected="" disabled="" value="Earner1">Choose From the List</option>
                    <option value="4">Mr. Smith</option>
                    <option value="3">Mr. John</option>
                    <option value="2">Mr. Shaun</option>
                    <option value="1">Miss. Henry</option>
                    <option value="0">Miss. Rene</option>
                </select>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>

        <div class="row" style="background-color: #fefefe;padding: 10px;">
            <div class="col-sm-2">


                <div class="box-tab vertical">


                    <ul class="nav nav-tabs">
                        <li style="">
                            <div class="col-sm-4" style="height: 40px;background-color: grey;color:#fff;padding: 10px;border-bottom: 2px dashed white;border-right: 2px dashed white;">ID</div>
                            <div class="col-sm-8" style="height: 40px;background-color: grey;color:#fff;padding: 10px;border-bottom: 2px dashed white;">Description</div>
                        </li>
                        <li class="active"><a href="#step1" data-toggle="tab">
                                <div class="col-sm-4">1</div>
                                <div class="col-sm-8">Step</div>
                            </a></li>
                        <li><a href="#step2" data-toggle="tab">
                                <div class="col-sm-4">2</div>
                                <div class="col-sm-8">step</div>
                            </a></li>
                        <li><a href="#step3" data-toggle="tab">
                                <div class="col-sm-4">3</div>
                                <div class="col-sm-8">step</div>
                            </a></li>
                        <li><a href="#step4" data-toggle="tab">
                                <div class="col-sm-4">4</div>
                                <div class="col-sm-8">step</div>
                            </a></li>
                        <li><a href="#step5" data-toggle="tab">
                                <div class="col-sm-4">5</div>
                                <div class="col-sm-8">step</div>
                            </a></li>
                    </ul>

                </div>



            </div>
            <div class="col-sm-10" style="border-left:1px solid grey;">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Step Start Date Day's</label>
                    <div class="col-sm-2">
                        <div class="input-group m-b">
                            <input type="number" min="0" max="7" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label">Step End Date Day's</label>
                    <div class="col-sm-2">
                        <div class="input-group m-b">
                            <input type="number" min="0" max="7" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Step Deadline Date Day's</label>
                    <div class="col-sm-2">
                        <div class="input-group m-b">
                            <input type="number" min="0" max="7" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-content col-sm-12">
                    <div class="tab-pane active in" id="step1">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Document Name</th>
                                    <th>Description</th>
                                    <th>Directory</th>
                                    <th>Open</th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Authority Act by client</td>
                                    <td>Authority Act by client</td>
                                    <td>Authorities</td>
                                    <td><a class="btn btn-primary" href="{{url('admin/case/view')}}">View</a> </td>

                                </tr>
                                <tr>
                                    <td>Client care ECW</td>
                                    <td>Client care ECW</td>
                                    <td>Client care</td>
                                    <td><a class="btn btn-primary" href="{{url('admin/case/view')}}">View</a> </td>


                                </tr>
                                <tr>
                                    <td>Initial attendance notes W</td>
                                    <td>Initial attendance notes W</td>
                                    <td>Attendance notes</td>
                                    <td><a class="btn btn-primary" href="{{url('admin/case/view')}}">View</a> </td>


                                </tr>
                                <tr>
                                    <td>PS File label</td>
                                    <td>File label</td>
                                    <td>OSX.3+</td>
                                    <td><a class="btn btn-primary" href="{{url('admin/case/view')}}">View</a> </td>


                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="step2">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Document Name</th>
                                    <th>Description</th>
                                    <th>Directory</th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Authority Act by client</td>
                                    <td>Authority Act by client</td>
                                    <td>Authorities</td>

                                </tr>
                                <tr>
                                    <td>Client care ECW</td>
                                    <td>Client care ECW</td>
                                    <td>Client care</td>

                                </tr>
                                <tr>
                                    <td>Initial attendance notes W</td>
                                    <td>Initial attendance notes W</td>
                                    <td>Attendance notes</td>

                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix">&nbsp;</div>
        <div class="row">
            <div class="col-sm-2">


                <!--<button type="button" class="btn btn-primary btn-sm btn-icon demo9">
                  <i class="fa fa-plus-circle"></i>
                  <span>Add Step</span>
                </button>

                <button type="button" class="btn btn-warning btn-sm btn-icon">
                  <i class="fa fa-pencil-square-o"></i>
                  <span>Modify Step</span>
                </button>
                <button type="button" class="btn btn-danger btn-sm btn-icon">
                  <i class="fa fa-trash"></i>
                  <span>Delete Step</span>
                </button>-->

                <div class="btn-group dropup pull-right">
                    <button type="button" class="btn btn-primary btn-sm">Actions</button>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="javascript:;" class="demo9"><i class="fa fa-plus-circle"></i> Add step</a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa fa-pencil-square-o"></i> Modify step</a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa fa-trash"></i> Delete step</a>
                        </li>

                    </ul>
                </div>


            </div>
            <div class="col-sm-10">

                <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-icon">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Doc</span>
                    </button>
                    <button type="button" class="btn btn-warning btn-sm btn-icon">
                        <i class="fa fa-pencil-square-o"></i>
                        <span>Modify Doc</span>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm btn-icon">
                        <i class="fa fa-trash"></i>
                        <span>Delete Doc</span>
                    </button>
                    <button type="button" class="btn btn-success btn-sm btn-icon">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Search</span>
                    </button>
                    <button type="button" class="btn btn-dark btn-sm btn-icon">
                        <i class="fa fa-trash"></i>
                        <span>Delete Search</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <!-- CASE-->
        <div class="row">

            <button type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> ADD CASE</button>
            <button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> MODIFY CASE</button>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE CASE</button>


            <button type="button" class="btn btn-dark pull-right"><i class="fa fa-times-circle"></i> CLOSE</button>
        </div>
    </div>
    <!-- /main area -->
    @endsection('content')