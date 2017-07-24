@extends("layouts.admin")
@section("content")
    <!-- main area -->
    <div class="main-content">
        <div class="page-title">
            <div class="title">ADD NEW MATTER</div>
            <div class="sub-title">Follow Steps</div>
        </div>
            @if(session()->has('msg'))
                <div class="alert alert-success">
                    <strong>{{session()->get('msg')}}</strong>
                </div>
            @endif
        <form id="wizardFormna" action="{{route('admin.client.add-matter',[$id])}}" method="post" class="form-horizontal" role="form">
            {{csrf_field()}}
            <div class="card">
                <div class="card-block p-a-0">
                    <div class="box-tab m-b-0" id="rootwizard">
                        <ul class="wizard-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Basic Info</a>
                            </li>
                           {{-- <li><a href="#tab2" data-toggle="tab">Office Details</a>
                            </li>
                            <li><a href="#tab3" data-toggle="tab">Commercial</a>
                            </li>
                            <li><a href="#tab4" data-toggle="tab">Bank Details</a>
                            </li>
                            <li><a href="#tab5" data-toggle="tab">Fees</a>
                            </li>--}}
                            <li><a href="#tab6" data-toggle="tab">Status</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane p-x-lg active" id="tab1">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Matter Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" value="{{rand()}}" readonly class="form-control" name="matter_ref">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" readonly  value="{{$id}}"  name="client_ref">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Matter Type</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="matter_type">
                                            <option selected="" disabled="" value="Status">Choose From the List</option>
                                            @foreach(\App\Cases::all() as $case)
                                                <option value="{{$case->static_case_id}}">{{$case->name_case}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="matter_def" rows="3"></textarea>
                                    </div>
                                </div>



                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary  btn-shadow ripple button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous" disabled="">Previous</button>
                                </div>
                            </div>

                            <!-- // tab2 // -->

                            <div class="tab-pane p-x-lg" id="tab2">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alternate Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Private</label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="gender" value="private">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Home Office Reference</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">FCO Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">IAC Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Other Reference</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Principal Appellant</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>



                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary  btn-shadow ripple button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous">Previous</button>
                                </div>

                            </div>

                            <!-- // tab3 // -->

                            <div class="tab-pane p-x-lg" id="tab3">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fee Earner 1</label>
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
                                    <label class="col-sm-2 control-label">Fee Earner 2</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option selected="" disabled="" value="Earner2">Choose From the List</option>
                                            <option value="4">Mr. Smith</option>
                                            <option value="3">Mr. John</option>
                                            <option value="2">Mr. Shaun</option>
                                            <option value="1">Miss. Henry</option>
                                            <option value="0">Miss. Rene</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Costs Quote</label>
                                    <div class="col-sm-4">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" min="0" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Disbs Quote</label>
                                    <div class="col-sm-4">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" min="0" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Flags</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="namefield">
                                    </div>
                                </div>



                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary  btn-shadow ripple button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous">Previous</button>
                                </div>

                            </div>

                            <!-- // tab4 // -->

                            <div class="tab-pane p-x-lg" id="tab4">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Office Banks</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option selected="" disabled="" value="Earner2">Choose From the List</option>
                                            <option value="4">Bank 1</option>
                                            <option value="3">Bank 2</option>
                                            <option value="2">Bank 3</option>
                                            <option value="1">Bank 4</option>
                                            <option value="0">Bank 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Banks</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option selected="" disabled="" value="Earner2">Choose From the List</option>
                                            <option value="4">Bank 1</option>
                                            <option value="3">Bank 2</option>
                                            <option value="2">Bank 3</option>
                                            <option value="1">Bank 4</option>
                                            <option value="0">Bank 5</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary  btn-shadow ripple button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous">Previous</button>
                                </div>

                            </div>

                            <!-- // tab5 // -->

                            <div class="tab-pane p-x-lg" id="tab5">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Review Period</label>
                                    <div class="col-sm-4">
                                        <div class="input-group m-b">

                                            <input type="number" min="0" max="12" class="form-control">
                                            <span class="input-group-addon">Months</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fee Type</label>
                                    <div class="col-sm-4">
                                        <input type="radio" name="gender" value="fixed"> Fixed Fee&nbsp;
                                        <input type="radio" name="gender" value="conditional"> Condition Fee&nbsp;
                                        <input type="radio" name="gender" value="other"> Other
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" rows="3" placeholder="If Fee type is other"></textarea>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="button" class="btn btn-primary  btn-shadow ripple">Next</button>
                                </div>
                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous">Previous</button>
                                </div>
                            </div>

                            <!-- // tab6 // -->

                            <div class="tab-pane p-x-lg" id="tab6">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Matter Opened Date</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control m-b" name="matter_ope" data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Matter Closed Date</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control m-b" name="matter_clo" data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Current Stage</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="current_stage">
                                    </div>
                                </div>



                                <div class="pull-right">
                                    <button type="button" disabled class="btn btn-primary  btn-shadow ripple">Add Case</button>
                                    <input type="submit" class="btn btn-primary" value="create" name="addmatter"/>
                                </div>


                                <div class="pull-left">
                                    <button type="button" class="btn btn-default btn-shadow ripple button-previous">Previous</button>
                                </div>
                            </div>


                            <div class="wizard-pager">
                                <!--<div class="pull-right">
                                  <button type="button" class="btn btn-primary button-next">Next</button>
                                </div>
                                <div class="pull-left">
                                  <button type="button" class="btn btn-default button-previous">Previous</button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
    <!-- /main area -->
@endsection("content")
@section("extra_js")
    <script type="text/javascript">
        $(function () {

        });
    </script>

@endsection("extra_js") 