@extends("layouts.admin")
@section("content")
    <div class="main-content">

        <div class="row">
            @if(session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            @if(!empty($clientinfo))

            <?php
                    $fullname =$clientinfo->fullname;
                    $name = explode(" ",$fullname);
                    $fullname =$clientinfo->fullname;
                    $gender =$clientinfo->gender;
                    $clienttype =$clientinfo->clienttype;
                    $locbirth =$clientinfo->locbirth;
                    $maidenname =$clientinfo->maidenname;
                    $dob =$clientinfo->dob;
                    $address0 =$clientinfo->address0;
                    $address1 =$clientinfo->address1;
                    $address2 =$clientinfo->address2;
                    $city =$clientinfo->city;
                    $country = $clientinfo->country;
                    $postcode =$clientinfo->postcode;
                    $email =$clientinfo->email;
                    $phone =$clientinfo->phone;
                    $fax =$clientinfo->fax;
                    $clientlimit =$clientinfo->clientlimit;
                    $introducer =$clientinfo->introducer;
                    $introducer_def =$clientinfo->introducer_def;
            ?>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-block p-a-0">
                        <div class="box-tab vertical m-b-0">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#basic" data-toggle="tab" class="">Basic Info</a>
                                </li>
                                <li><a href="#birth" data-toggle="tab" class="">Birth Details </a>
                                </li>
                                <li><a href="#contact" data-toggle="tab" class="">Contact Details</a>
                                </li>
                                <li><a href="#add" data-toggle="tab" class="">Additional Info</a>
                                </li>

                            </ul>
                            <div class="tab-content col-sm-10">
                                <div class="tab-pane active in" id="basic">
                                    <div class="col-sm-2">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6"  disabled="" value="Mr.">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Salutation</span>

                          </label>
                      </span>

                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$name[0]}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">First Name</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$name[1]}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Last Name</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$gender}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Gender</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$clienttype}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Client Type</span>
                          </label>
                      </span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="birth">
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$locbirth}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Name at Birth</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$maidenname}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Maiden Name</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-2">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$dob}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Date Of Birth</span>

                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-10">
                      <span class="input m-b-md">
                        <textarea class="input__field" type="text" id="input-6" disabled="">{{$address0}}</textarea>
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Address</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-10">
                      <span class="input m-b-md">
                        <textarea class="input__field" type="text" id="input-6" disabled="">{{$address1}}</textarea>
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Address temp </span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-10">
                      <span class="input m-b-md">
                        <textarea class="input__field" type="text" id="input-6" disabled="">{{$address2}}</textarea>
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Address temp1</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="Andheri">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">City</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$country}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Country</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="{{$postcode}}" >
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Post Code</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-4">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="tt9999999t9">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">NI Number</span>
                          </label>
                      </span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="contact">
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Email" id="input-6" disabled="" value="{{$email}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Email Address</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="{{$phone}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Mobile Number</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="{{$phone}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Telphone Number ( Home )</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="022123456">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Telphone Number ( Work )</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="{{$fax}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">FAX</span>
                          </label>
                      </span>
                                    </div>
                                </div>
                                <div class="tab-pane" id="add">

                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="Number" id="input-6" disabled="" value="{{$clientlimit}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Client Limit</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-6">
                      <span class="input m-b-md">
                        <input class="input__field" type="text" id="input-6" disabled="" value="{{$introducer}}">
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Introducer</span>
                          </label>
                      </span>
                                    </div>
                                    <div class="col-sm-12">
                      <span class="input m-b-md">
                        <textarea class="input__field" type="" id="input-6" disabled="">{{$introducer_def}}</textarea>
                          <label class="input__label" for="input-6">
                            <span class="input__label-content">Introducer Description</span>

                          </label>
                      </span>
                                    </div>


                                </div>
                            </div>

                            <!--/*********** V I E W __-__ M A T T E R *********/-->
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary  btn-shadow ripple button-next">View Matter</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


    </div>
    @endsection("content")
@section("extra_js")

@stop