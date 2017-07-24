@extends("layouts.admin")
@section("content")
    <!-- main area -->
    <div class="main-content">
        <div class="page-title">
            <div class="title">ADD NEW CLIENT</div>
            <div class="sub-title">Follow Steps</div>
        </div>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        <form id="wizardForm" method="post" action="{{route('admin.client.create')}}"  class="form-horizontal" role="form">
            {{csrf_field()}}
            <div class="card">
                <div class="card-block p-a-0">
                    <div class="box-tab m-b-0" id="rootwizard">
                        <ul class="wizard-tabs">
                            <li class="active"><a href="#tab-0" >Basic Info</a>
                            </li>
                            <li ><a href="#tab-1" >Birth Details</a>
                            </li>
                            <li ><a href="#tab-2" >Contact Info</a>
                            </li>
                            <li ><a href="#tab-3" >Additional information</a>
                            </li>
                            <li ><a href="#tab-4" >Register</a>
                            </li>


                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane p-x-lg active" id="tab-0">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Salutation</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="salutation">
                                            <option selected="" disabled="" value="Status">Choose From the List</option>
                                            <option value="mr">Mr.</option>
                                            <option value="mrs">Mrs.</option>
                                            <option value="miss">Miss.</option>
                                            <option value="master">Master.</option>
                                            <option value="sir">Sir.</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" value="{{old("firstname")}}" class="form-control" required="required" name="firstname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" value="{{old("lastname")}}" class="form-control" required="required" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-4">
                                        <input type="radio" name="gender" value="male"> Male
                                        <input type="radio" name="gender" value="female"> Female&nbsp;
                                        <input type="radio" name="gender" value="other"> Other
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Type</label>
                                    <div class="col-sm-4">
                                        <input type="radio" name="clienttype" value="corporate"> Corporate&nbsp;
                                        <input type="radio" name="clienttype" value="individual"> Individual&nbsp;

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

                            <div class="tab-pane p-x-lg" id="tab-1">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name At Birth</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" required="required" name="locbirth">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Maiden Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="maidenname" placeholder="Before marriage name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date Of Birth</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control m-b" required="required" name="dob" data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="form-group" id="addressful">
                                    <label class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="address0" rows="3"></textarea>
                                    </div>
                                    <button id="addressmul" type="button">Add Address</button>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="city">
                                            <option value="mumbai">Mumbai</option>
                                            <option value="delhi">Delhi</option>
                                            <option value="Andheri">Andheri</option>
                                            <option value="thane">Thane</option>
                                            <option value="mumbra">Mumbra</option>
                                            <option value="dapoli">Dapoli</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" name="country">Country</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="country">
                                            <option value="india">India</option>
                                            <option value="uk">UK</option>
                                            <option value="usa">USA</option>
                                            <option value="africa">Africa</option>
                                            <option value="aus">Australia</option>
                                            <option value="new zealand">New Zealand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Post Code</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="namefield" name="postcode">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">NI Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" required="required" name="ninumber" placeholder="TTNNNNNNT">
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

                            <div class="tab-pane p-x-lg" id="tab-2">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email address</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="emailfield" required="required" name="emailid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-4">
                                        <input type="tel" name="mobilenumber" required="required" class="form-control telephone-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tel (Home)</label>
                                    <div class="col-sm-4">
                                        <input type="tel" name="telnumber" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tel (Work)</label>
                                    <div class="col-sm-4">
                                        <input type="tel" name="telwork" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fax</label>
                                    <div class="col-sm-4">
                                        <input type="tel" name="faxid" class="form-control">
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

                            <div class="tab-pane p-x-lg" id="tab-3">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Client Limit</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="clientlimit" required="required" class="form-control m-b" id="maxlength" maxlength="5" placeholder="99,999.99/-">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Introducer</label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="introducer" value="recommbyfriend"> Recommended by Friend(RF)&nbsp;
                                        <input type="radio" name="introducer" value="external"> External Agency (EA)&nbsp;

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Introducer Description</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" required="required" name="introducer_def" rows="3"></textarea>
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

                            <div class="tab-pane p-x-lg" id="tab-4">
                                <div class="alert alert-success">
                                    Well done! You successfully added new client.
                                </div>
                                <div class="pull-right">
                                    <a href="add_matter.html" role="button" class="btn btn-primary btn-shadow">Add Matter</a>

                                   </div>
                                <div class="pull-right">
                                    <input type="submit" class="btn btn-primary btn-shadow" value="Create" name="create">

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
    $(function(){
        var allWells = $(".set-content"),
                allNextBtn = $(".button-next"),
                allPrevBtn=  $(".button-previous"),
                frm =$("#wizardForm"),
                currentActive=0;

        frm.validate({
            errorClass: "help-block",
            ignore: ":hidden",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass("has-error");
            },
            errorElement: 'span'
        });

        allNextBtn.on("click",function(e){

            if (frm.valid()) {
                e.preventDefault();
                var toHide = $("#tab-" + currentActive, "#wizardForm");
                toHide.removeClass("active");
                currentActive++;
                toShow = $("#tab-"+currentActive,"#wizardForm");
                toShow.addClass("active");
            }

        });

        allPrevBtn.on("click",function(e){
            e.preventDefault();
            var toHide = $("#tab-" + currentActive, "#wizardForm");
            toHide.removeClass("active");
            currentActive--;
            toShow = $("#tab-"+currentActive,"#wizardForm");
            toShow.addClass("active");
        });
        var addressful=1;
        $("#addressmul").on("click",function(){

            if(addressful<3)
                var content = '<div class="form-group" id="addressful">'+
                    '<label class="col-sm-2 control-label">Address</label>'+
                    '<div class="col-sm-4">'+
                    '<textarea class="form-control" name="address'+addressful+'" rows="3"></textarea>'+
                    '</div>';
                $("#addressful").append(content);
                addressful++;
            });

        });


</script>
@stop