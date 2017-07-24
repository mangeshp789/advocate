@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="page-title">
            <div class="title">VIEW MATTER</div>
            <div class="sub-title">Following table contain matter</div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block p-a-0">
                        <div class="box-tab vertical m-b-0">
                            <div class="col-sm-2">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#basic" data-toggle="tab" class="">Basic Info</a>
                                    </li>
                                    <li><a href="#office" data-toggle="tab" class="">Office Details </a>
                                    </li>
                                    <li><a href="#commercial" data-toggle="tab" class="">Commercial Details</a>
                                    </li>
                                    <li><a href="#bank" data-toggle="tab" class="">Bank Details</a>
                                    </li>
                                    <li><a href="#fees" data-toggle="tab" class="">Fees</a>
                                    </li>
                                    <li><a href="#status" data-toggle="tab" class="">Status</a>
                                    </li>

                                </ul>
                            </div>
                            @foreach($singleMatter as $matter)

                            <div class="tab-content col-sm-8">
                                <div class="tab-pane active in" id="basic">
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6"  disabled="" value="{{isset($matter['matter_reference']) ? $matter['matter_reference']:''}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Matter Reference</span>

                          </label>
                      </span>

                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$matter['user_id']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Client Reference</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$matter['get_one']['name_case']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Matter Type</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$matter['matter_def']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Description</span>
                          </label>
                      </span>
                                    </div>

                                </div>
                                <div class="tab-pane" id="office">
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Johnson">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Alternate Reference</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-2">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Yes">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Private</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="My Reference">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Home Office Reference</span>

                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="A1, Parna Kuti">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">FCO Reference</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Andheri">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">IAC Reference</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="India">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Other Reference</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Principal Appellant s" >
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Principal Appellant</span>
                          </label>
                      </span>
                                    </div>

                                </div>
                                <div class="tab-pane" id="commercial">
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Johnson">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Fee Earner 1</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="John">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Fee Earner 2</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="022123456">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Cost Quote</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="022123456">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Disb Quote</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Falg1">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Flags</span>
                          </label>
                      </span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="bank">

                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Bank 1">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Office Bank</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Bank 2">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Client</span>
                          </label>
                      </span>
                                    </div>


                                </div>
                                <div class="tab-pane" id="fees">

                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="2 months">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Review Period</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-2">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Fixed fees">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Fee Type</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <textarea class="input__field" type="" id="input-6" disabled="">About meef</textarea>
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Description</span>

                          </label>
                      </span>
                                    </div>


                                </div>

                                <div class="tab-pane" id="status">
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="date" id="input-6" disabled="" value="{{$matter['matter_op_date']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Matter Opened Date</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="date" id="input-6" disabled="" value="{{$matter['matter_cl_date']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Matter Closed Date</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-12">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$matter['matter_stage']}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Current Stage</span>
                          </label>
                      </span>
                                    </div>


                                </div>
                            </div>
                        @endforeach


                        <!--/*********** V I E W __-__ M A T T E R *********/-->
                            <div class="col-sm-2">
                                {{--<button type="button" class="btn btn-primary  btn-shadow ripple button-next">View Case</button>--}}
                                <a href="{{url("admin/case/addCase")}}" class="btn btn-primary ">Add Case</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /main area -->
    @endsection('content')