@extends('layouts.admin')
@section('content')

    <div class="main-content">
        <div class="msgtest">

        </div>
        <h1> Manage User</h1>
        <table class="table" id="userstable">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Active/Deactive</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allusers as $value)
                <tr id="{{$value->id}}">
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    @if($value->status=="0")
                        <td><input id="toggle-event" class="togglebtn" checked data-toggle="toggle"  type="checkbox"></td>
                    @else
                        <td><input id="toggle-event" class="togglebtn" data-toggle="toggle"  type="checkbox"></td>
                    @endif
                    <td><button type="button" class="editbth btn btn-info">Edit</button></td>
                    <td><button type="button" class="deletebtn data btn btn-danger">Delete</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection('content')
@section('extra_js')
    <script>
        $(function() {

            $('#userstable').DataTable({
                aoColumnDefs: [
                    {
                        bSortable: false,
                        aTargets: [ 2,3,4,5 ]
                    }
                ]
            });
            var id,pass,conf_pass;
            $('.togglebtn').change(function() {
                var check;
                var status = $(this).prop('checked');
                id = $(this).closest('tr').attr('id');

                if(status==true){

                    check = "on";
                }else{

                    check="off";
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })

                $.ajax({
                    url:"{{ url('/status') }}"+"/"+id,
                    type:"post",
                    datatype:"json",
                    data:{
                        status:check,id:id
                    },
                    success: function(data) {

                    }

                });
            });


            $('#userstable').on('click','.deletebtn',function () {

                var name = $(this).closest('tr').find("td").eq(0).text();
                id = $(this).closest('tr').attr('id');

                BootstrapDialog.show({
                    title: 'Delete User',
                    message: 'Are you sure you want to delete '+name+  'User .',
                    buttons: [{
                        label: 'Delete',
                        cssClass: 'btn-danger',
                        action: function(dialog) {
                            deleteuser(id);
                            dialog.close();
                        }
                    }, {
                        label: 'Cancel',
                        action: function(dialogItself) {
                            dialogItself.close();

                        }
                    }]
                });


            });

            function deleteuser(id){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax({
                    url:"{{ url('admin/delete') }}"+"/"+id,
                    datatype:"json",
                    type:"delete",
                    data:{
                        id:id
                    },
                    success: function(data){
                        console.log(data["data"]);
                        location.reload();
                        var msg = '<div class="alert alert-info"><a class="close" data-dismiss="alert">×</a><strong>'+data["data"]+'</strong></div>';
                        console.log(msg);
                        $(".msgtest").html(msg);
                    }
                });
            }

            $('#userstable').on('click','.editbth',function () {

                id = $(this).closest('tr').attr('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax({
                    url:"{{ url('admin/edit') }}"+"/"+id,
                    datatype:"json",
                    type:"put",
                    data:{
                        id:id
                    },
                    success:function(data){



                        var frm_str = '<div class="row" id="useinfo">  ' +
                            '<div class="col-md-12"> ' +
                             '<div class="msgtest">'+

                            '</div>'+
                            '<form class="form-horizontal"> ' +

                            '<div class="form-group"> ' +
                            '<label class="col-md-4 control-label" for="name">Name</label> ' +
                            '<div class="col-md-4"> ' +
                            '<input name="name" id="username" type="text" value ="'+data['user']['name']+'" disabled class="form-control input-md"> ' +
                            '<input name="userid" id="userid" type="hidden" value ="'+data['user']['id']+'" disabled class="form-control input-md"> ' +
                            '</div></div>'+


                            '<div class="form-group">'+
                            '<label class="col-md-4 control-label">Change Password</label>'+
                            '<div class="col-md-4">'+
                            '<input type="password" id="apass" class="form-control input-md">'+
                            '</div></div>'+


                            '<div class="form-group">'+
                            '<label class="col-md-4 control-label">Comfrimation Password</label>'+
                            '<div class="col-md-4"><input type="password" id="conf_pass" class="form-control input-md"></div></div>'+

                            '</form></div></div>';





                        BootstrapDialog.show({
                            title: "Edit Profile",
                            message: frm_str,
                            buttons: [{
                                label: 'Save',
                                cssClass: 'btn-primary',
                                action: function(dialog) {

                                    var userid =$("#userid").val();
                                    pass =$("#apass").val();
                                    conf_pass =$("#conf_pass").val();

                                    checkpass(pass,conf_pass,userid);

                                }
                            }, {
                                label: 'Cancel',
                                action: function(dialogItself) {
                                    dialogItself.close();
                                }
                            }]

                        });


                    }
                });

            });
            function checkpass(pass,conf_pass,userid){

                if(pass==""||conf_pass==""){

                    var msg = '<div class="alert alert-info"><a class="close" data-dismiss="alert">×</a><strong>Plaese Fill Blank Field</strong></div>';
                    console.log(msg);
                    $(".msgtest").html(msg);

                }else{
                    if(pass!==conf_pass){

                        var msg = '<div class="alert alert-info"><a class="close" data-dismiss="alert">×</a><strong>Passwords Do not match</strong></div>';
                        console.log(msg);
                        $(".msgtest").html(msg);
                    }else{

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        })
                        $.ajax({
                            url:"{{ url('admin/edit/user') }}"+"/"+userid,
                            datatype:"json",
                            type:"get",
                            data:{
                                id:userid,pass:pass,conf_pass:conf_pass
                            },
                            success: function(data){

                                var msg = '<div class="alert alert-info"><a class="close" data-dismiss="alert">×</a><strong>'+data['sucess']+'</strong></div>';

                                $(".msgtest").html(msg);

                            }

                        }).done(function(){
                            $("#useinfo").live()

                        });

                    }

                }
            }
            function readURL(input)
            {
                if (input.files && input.files[0])
                {
                    var reader = new FileReader();
                    reader.onload = function (e)
                    {
                        $('#captimg').attr('src',e.target.result);
                        $('#setimg').attr('src' , e.target.result);
                        var type= $('input[name=sub_type]:checked').val();
                        $("#sub_type").val(type);
                        var file = document.getElementById("videofilename").value;
                        console.log(file);
                        $('#vidimgwwset').val(e.target.result);
                        var url = $('#captimg').attr('src');

                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        })
    </script>
@stop