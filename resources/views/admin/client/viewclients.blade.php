@extends("layouts.admin")
@section("content")
    <div class="main-content">
        <div class="page-title">
            <div class="title">VIEW CLIENTS</div>
            <div class="sub-title">Clients Basic Information</div>
        </div>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                <strong>{{session()->get('msg')}}</strong>
            </div>

            @endif
        <div class="card bg-white">
            <div class="card-header">
                Datatables
            </div>

            <div class="card-block">
                <table id="viewclient" class="table table-bordered table-striped datatable editable-datatable responsive align-middle bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientall as $client)
                        <?php $id=$client->id;?>
                    <tr id = {{$client->id}}>
                        <td>{{$client->fullname}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->phone}}</td>
                        <td>{{$client->city}}</td>
                        <td>{{$client->gender}}</td>

                        <td>
                            <div class="col-xs-12 demo-button3 m-b">
                                <a href="{{route("admin.client.viewclient",[$client->id])}}" type="button" class="btn btn-success btn-shadow btn-sm btn-icon mr5">
                                    <i class="fa fa-eye"></i>
                                    <span>View</span>
                                </a>

                                <button href="#" id="{{$client->id}}"  type="button" class="btn btn-primary btn-shadow btn-sm btn-icon mr5 ripple matter" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus-square-o"></i>
                                    <span>Matter</span>
                                </button>

                                <button type="button" class="btn btn-warning btn-shadow btn-sm btn-icon ripple mr5">
                                    <i class="fa fa-pencil-square-o "></i>
                                    <span>Edit</span>
                                </button>

                                <button type="button" class="btn btn-danger btn-shadow btn-sm btn-icon ripple mr5">
                                    <i class="fa fa-trash-o"></i>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title matterid">Mr. John Cena</h4>
                    </div>
                    <div class="modal-body">
                        <!--/***********ADD MATTER************/-->

                            <a href="{{route("admin.client.matter",[$id])}}" type="button" class="btn btn-success addMatter">Add Matter</a>


                        <!--/***********VIEW MATTER************/-->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary ripple" data-toggle="dropdown">View Matter
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu matterextra" role="menu">
                                <li>
                                    <a href="javascript:;">Matter 1</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Matter 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Matter 3</a>
                                </li>


                            </ul>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa fa-times-circle-o"></i> Close
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection("content")
@section("extra_js")
    <script type="text/javascript">
        /*$('#viewclient').DataTable({
            aoColumnDefs: [
                {
                    bSortable: false,
                    aTargets: [ 2,3,4,5 ]
                }
            ]
        });*/
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id;
            $("#viewclient").on("click",".matter",function () {

                var name = $(this).closest('tr').children('td:first').text();
                id  = $(this).closest('tr').attr('id');
                var str = "{{url('admin/client/add-matter')}}"+"/"+id;
                $(".modal-body a").attr("href",str);
                $('.matterid').html(name);

                $.ajax({
                   url:"{{url('admin/client/ajax/matter')}}"+"/"+id,
                    datatype:"json",
                    type:"post",
                    data:{id:id},
                    success:function (data) {
                       var matterstr="";
                       var url ="{{url('admin/client/view-matter')}}"+"/";
                       $.each(data,function (i,v) {

                          matterstr+=  '<li>'+
                                            '<a href="'+url+v['id']+'">'+v['matter_def']+'</a>'+
                                        '</li>';


                       });
                       //console.log(matterstr);
                       $(".matterextra").html(matterstr);
                    }

                });
            });



        })

    </script>
@stop